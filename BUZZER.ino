   const int pinBuz = 7; //Buzzer Pin
   const int pinSwi = 8; // Push-button pin
   #define echoPin 2 // attach pin D2 Arduino to pin Echo of HC-SR04
   #define trigPin 3 //attach pin D3 Arduino to pin Trig of HC-SR04
   long duration; // variable for the duration of sound wave travel
int distance; // variable for the distance measurement 
       
    void setup() {   
        Serial.begin(9600); // Opens Serial communication
        pinMode(pinBuz,OUTPUT); //Defines pinBuz as an Output
        pinMode(pinSwi,INPUT); // Defines pinSwi as an input
        pinMode(trigPin, OUTPUT); // Sets the trigPin as an OUTPUT
        pinMode(echoPin, INPUT); // Sets the echoPin as an INPUT
              }
    void loop () {
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
      // Displays the distance on the Serial Monitor
      Serial.print("Distance: ");
      Serial.print(distance);
      Serial.println(" cm");
      

      int botao; // To save the last logic state of the button
      botao = digitalRead(pinSwi); //Put the reading value of the switch on botao
      Serial.println(botao); //Shows the logic state of the input on Serial Monitor
      if (botao == 0 && distance < 30 && distance > 0) // Pressed button, logic State HIGH (5V)
      {
      digitalWrite(pinBuz,1); //Switch pressed, buzzer on
      }else
      {
      digitalWrite(pinBuz,0); //If the switch isn’t pressed, buzzer off.
      }
      delay(10); //reading delay
                }
