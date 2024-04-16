int DobbelsteenOver = 6;
int DobbelsteenInBak = 0;
int analogValue;

byte LDRS[6] = {13, 12, 14, 27, 26, 25};

void setup() {
  // put your setup code here, to run once:
  Serial.begin(9600);
}

void loop() {

  for(byte i = 0; i <= 5; i++){
    analogValue = analogRead(LDRS[i]);
    Serial.println(analogValue);
    if(analogValue <= 10){
      DobbelsteenInBak += 1;
    };
  }

  DobbelsteenOver = DobbelsteenOver - DobbelsteenInBak;
  String result = "Hoeveelheid dobbelstenen over:";
  result += DobbelsteenOver;
  Serial.println(result);
  Serial.println("---------");
  DobbelsteenInBak = 0;
  DobbelsteenOver = 6;
  delay(1000);
}
