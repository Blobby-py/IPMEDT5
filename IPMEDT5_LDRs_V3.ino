#define volleBakPush 32

int DobbelsteenOver = 6;
int DobbelsteenInBak = 0;
bool volleBak = false;

int interval = 1000;
unsigned long previousMillis = 0;

int analogValue;
byte LDRS[6] = {13, 12, 14, 27, 26, 25};

void setup() {
  
  Serial.begin(9600);
  
  pinMode(volleBakPush, INPUT_PULLUP);
}

void loop() {
  unsigned long currentMillis = millis();

  if (currentMillis - previousMillis >= interval) {
    previousMillis = currentMillis;

    for(byte i = 0; i <= 5; i++){
      analogValue = analogRead(LDRS[i]);
      Serial.println(analogValue);
      if(analogValue <= 10){
        DobbelsteenInBak += 1;
      };
    }

    DobbelsteenOver = DobbelsteenOver - DobbelsteenInBak;
    String result = "Hoeveelheid dobbelstenen over: ";
    result += DobbelsteenOver;
    Serial.println(result);
    Serial.println("---------");
    DobbelsteenInBak = 0;
    DobbelsteenOver = 6;
  }

  toggle();
}

void toggle(){
  if(digitalRead(volleBakPush) == 0){
    volleBak = !volleBak;
    Serial.print("vollebak: ");
    Serial.println(volleBak);
    delay(200);
  }
}
