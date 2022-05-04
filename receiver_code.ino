#include <SPI.h> 

#include <nRF24L01.h>

#include <RF24.h>

 

 

RF24 radio(9, 10); // CE, CSN        

const byte address[6] = "10301";     //Byte of array representing the address. This is the address where we will send the data. This should be same on the receiving side.



void setup() {


Serial.begin(9600);
radio.begin();                  //Starting the Wireless communication

radio.openReadingPipe(0, address); //Setting the address where we will send the data

radio.setPALevel(RF24_PA_MAX);  //You can set it as minimum or maximum depending on the distance between the transmitter and receiver.

radio.startListening();          //This sets the module as transmitter

}

 

 

void loop()

{
if (radio.available()){
  char text[32] = "";
  radio.read(&text, sizeof(text));
  Serial.println(text);
  
}







}
