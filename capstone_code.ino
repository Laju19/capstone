#include <SPI.h> 
#include <nRF24L01.h>
#include <RF24.h>

#define echoPin 2
#define trigPin 3


RF24 radio(9, 10); // CE, CSN         
const byte address[6] = "10301";     //Byte of array representing the address. This is the address where we will send the data. This should be same on the receiving side.
boolean RED_state=0;
//boolean BLUE_state=0;
//boolean YELLOW_state=0;

long duration;
long distance;

int BLUE = 6;
int YELLOW = 5;
int GREEN = 7 ;
int RED = 8 ;


int flame_detected ;

const int flameMin = 0;     // sensor minimum
const int flameMax = 1024;  // sensor maximum

const int distanceMin = 0;
const int distanceMax = 10; 



void setup() {
  // initialize serial communication @ 9600 baud:
  Serial.begin(9600);

  // LEDs - flame sensor
   pinMode(RED, OUTPUT);
   pinMode(GREEN, OUTPUT);
   pinMode(BLUE, OUTPUT);
   pinMode(YELLOW, OUTPUT);

   //ULTRASONIC SENSOR
   pinMode(trigPin, OUTPUT);
   pinMode(echoPin, INPUT);

 
//NRF240L1 - setting up transmitter
  radio.begin();                  //Starting the wireless communication
  radio.openWritingPipe(address); //Address where data will be sent to
  radio.setPALevel(RF24_PA_MIN);  
  radio.stopListening();          //Set module as transmitter



}


void loop() {
    flameSensor();
    delay(1000);
    ultraSensor();
    delay(1000); 
  transmitter_func();

}

/*void sensors_func(void){
    flameSensor();
    delay(1000);
    ultraSensor();
}*/

void flameSensor(void){
    // read the sensor on analog A0:
  int sensorReading = analogRead(A0);
  // map the sensor range (four options):
  // ex: 'long int map(long int, long int, long int, long int, long int)'
  int range = map(sensorReading, flameMin, flameMax, 0, 3);
  
  // range value:
  switch (range) {
  case 0:    // A fire closer than 1.5 feet away from the drone
    Serial.println("DANGER: CLOSE FIRE");
    digitalWrite(RED, HIGH);
    digitalWrite(GREEN, LOW);
    break;
  case 1:    // A fire between 1-3 feet away from the drone
    Serial.println("DISTANT FIRE: 1-3 FEET AWAY");
    digitalWrite(RED, HIGH);
    digitalWrite(GREEN, LOW);
    break;
  case 2:    // No fire detected.
    Serial.println("No Fire Detected");
    digitalWrite(GREEN, HIGH);
    digitalWrite(RED, LOW);
    break;
  }
  delay(1);  // delay between reads
  }


void ultraSensor(void){
  // Clears the trigPin condition
  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);
  // Sets the trigPin HIGH (ACTIVE) for 10 microseconds
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  // Reads the echoPin, returns the sound wave travel time in microseconds
  duration = pulseIn(echoPin, HIGH);
  // Calculating the distance
  distance = duration * 0.034 / 2; // Speed of sound wave divided by 2 (go and back)
  /* Displays the distance on the Serial Monitor*/
  Serial.print("Distance: ");
  Serial.print(distance);
  Serial.println(" cm");

  int distance_range = map(distance, distanceMin, distanceMax, 0, 3);
  
  // range value:
  switch (distance_range) {
  case 0:    // An object closer than 1.5 feet away.
    Serial.println("No Obstacle Detected");
    digitalWrite(BLUE, HIGH);
    digitalWrite(YELLOW, LOW);
    break;
  case 1:    // A fire between 1-3 feet away.
    Serial.println("** DISTANT OBSTACLE **");
    break;
  case 2:    // No fire detected.
    Serial.println("** CLOSE OBSTACLE **");
    digitalWrite(BLUE, LOW);
    digitalWrite(YELLOW, HIGH);
    break;
  }
  delay(1);  // delay between reads
  }



void transmitter_func(void){
    
RED_state = digitalRead(RED);
//BLUE_state = digitalRead(BLUE);
//YELLOW_state = digitalRead(YELLOW);

if(RED_state == HIGH)
{
const char text[] = "FIRE IS CLOSE / OBSTACLE IS NEAR";
radio.write(&text, sizeof(text));                  //Sending the message to receiver
}

/*else if(YELLOW_state == HIGH)
{
 const char text[] = "OBSTACLE IS A FEW FEET AWAY";
radio.write(&text, sizeof(text));                  //Sending the message to receiver
}*/

else
{
const char text[] = "NO FIRE / NO OBSTACLES";
radio.write(&text, sizeof(text));                  //Sending the message to receiver 
}
radio.write(&RED_state, sizeof(RED_state));  //Sending the message to receiver 
delay(1000);
  
}

  
  
