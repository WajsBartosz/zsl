#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main()
{
fstream plikIn;
plikIn.open("Dane.txt", ios_base::in);
int Suma = 0;
int SumaParzystychLiczba = 0;
int elementPliku;
int aktualnyMaks = 0;
bool pierwszyElementPliku = true;

if (plikIn.good())
{

while (plikIn >> elementPliku)
{
if (pierwszyElementPliku)
{
aktualnyMaks = elementPliku;
pierwszyElementPliku = false;
}
else
{
if (elementPliku > aktualnyMaks)
aktualnyMaks = elementPliku;
}

//cout << elementPliku << endl;
Suma = Suma + elementPliku;
if (elementPliku % 2 == 0)
{
SumaParzystychLiczba += elementPliku;
}
}
cout << "a) Suma="<<Suma<<endl;
cout << "b) Maks="<<aktualnyMaks<<endl;
cout << "c) SumaParzystych="<<SumaParzystychLiczba<<endl;
}
else
{
cout << "Blad otwarcia pliku";
}
return 0;
}
