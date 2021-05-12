#include <iostream>
#include <fstream>
#include <cstdlib>
#include <ctime>
using namespace std;
int Plansza [20][20];
int x,y=0;


void wczytajPlansze()
{
	fstream plik;
    plik.open("Plansza.txt", ios_base::in);
    if (plik.good())
    {
        for (int i=0; i < 20; i++)
            for (int j=0; j < 20; j++)
                plik >> Plansza[i][j];
        plik.close();
    }
    else
        cout <<"Problem z otwarciem pliku"<<endl;
}



void wypiszPlansze()
{
     for (int i=0; i < 20; i++)
     {
         for (int j=0; j < 20; j++)
                cout << Plansza[i][j]<<" ";
        cout << endl;
     }
}
int main(int argc, char** argv) {
	wczytajPlansze();
	cout << "Pierwsza kolumna planszy: ";
	for (int i=0;i<20;i++)
	{
		cout << Plansza[i][0];
	}
	cout << endl;
	cout << "Ostatnia kolumna planszy: ";
	for (int i=0;i<20;i++)
	{
		cout << Plansza[i][19];
	}
	cout <<endl;
	int suma=0;
	for (int i=0;i<20;i++)
	{
		suma+=Plansza[7][i];
	}
	cout <<"Suma liczb w wierszu o indeksie 7: " << suma <<endl;
	suma=0;
	for (int i=0,j=0;i<20;i++,j++)
		{
			suma+=Plansza[i][j];
		}
	cout <<"Suma liczb na przekatnej tablicy: " <<suma <<endl;	
	int min=Plansza[5][0];
	for (int i=0;i<20;i++)
	{
		if (Plansza[5][i]<min)
		{
			min=Plansza[5][i];
		}
	}
	cout <<"Najnniejsza wartosc w kolumnie o indeksie 5: "<<min <<endl;
	suma=0;
	for (int i=0;i<20;i++)
	{
		suma+=Plansza[0][i];
	}
	suma=(suma*2)-3;
	int tmp=0;
		for (int i=1;i<20;i++)
	{
		tmp+=Plansza[19][i];
	}
	tmp*=2;
	suma+=tmp;
	cout <<"Suma pol brzegowych wynosi: " <<suma <<endl;
	return 0;
}
