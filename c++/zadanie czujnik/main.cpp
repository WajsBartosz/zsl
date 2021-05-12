#include <iostream>
#include <stdlib.h>
using namespace std;
void menu()
{
	cout << "Menu urzadzenia" <<endl;
	cout << "1. Wprowadz pomiary (5)" <<endl;
	cout << "2. Wypisz ostatnio zapamietane pomiary" <<endl;
	cout << "3. Wypisz max temp" <<endl;
	cout << "4. Wypisz min temp" <<endl;
	cout << "5. Wyzerowanie tablicy pomiarow" <<endl;
	cout << "6. Podanie liczby aktualnie pamietanych pomiarow" <<endl;
	cout << "7. Sprawdzenie czy temp pamietanych pomiarow wzrasta" <<endl;
	cout << "8. Ustawienie jaka temp ma panowac w pomieszczeniu" <<endl;
	cout << "9. Uruchomienie algorytmu urzadzenia" <<endl;
	cout << "10. Wylaczenie urzadzenia" << endl;
	
}

int main(int argc, char** argv) {

	int pomiary[5]={0,0,0,0,0};
	int max;
	int min;
	int srednia=0;
	int wybor;
	int x;
	int y;
	while (wybor!=10)
	{
	menu ();
	cin >> wybor;
	switch (wybor)
	{
	case 1:
	cout <<"Ile chcesz podac pomiarow? (max 5)" << endl;
	cin >> y;
	if (y>5)
	{
	cout <<"Podano wartosc nieprawidlowa" <<endl;
	break;
	}
	else
	{
	cout << "Podaj pomiary tablicy" << endl;
	for (int i=0;i<y;i++)
	{
		cin >>pomiary[i];
	}
	break;
	case 2:
	for (int i=0;i<y;i++)
	{
		cout << "Pomiar #" <<i+1 << " wynosi: " << pomiary[i] <<endl; 
	}
	}
	break;
	case 3:
	for (int i=0;i<y;i++)
	{
		if (pomiary[i]>max)
		{
			max=pomiary[i];
		}
	}
	cout << "Maksymalna temp w pomieszczeniu wynosi " << max <<" stopni celsjusza" << endl;
	break;
	case 4:
	min=pomiary[0];
	for (int i=0;i<y;i++)
	{
		if (pomiary[i]<min)
		{
			min=pomiary[i];
		}
	}
	cout << "Najmniesza temp w pomieszczeniu wynosi " << min <<" stopni celsjusza" << endl;
	break;
	case 5:
	for (int i=0; i<y;i++)
	{
		pomiary[i]=0;
	}
	break;
	case 6:
		for (int i=0;i<y;i++)
		{
			cout << "Pomiar #" << i+1 << " wynosi: " << pomiary[i] << endl;
		}
		break;
	case 7:
		if (pomiary[y-2]>pomiary[y-1])
		cout << "Ostatnio zapamietane pomiary maleja" <<endl;
		else 
		cout <<"Ostatnio zapamietane pomiary rosna" <<endl;
		break;
	case 8:
		cout <<"Jaka temp ma panowac w pokoju?" << endl;
		cin >> x;
		cout <<"W pokoju ma byc " << x << " stopni celsjusza" <<endl;
		break;
	case 9:
		for (int i=0;i<y;i++)
		{
		srednia+=pomiary[i];
		}
		srednia=srednia/y;
		cout << "Srednia z ostatnich pomiarow wynosi: " << srednia << " stopni celsjusza" << endl;
		if (srednia<x)
		{
			cout << "Srednia temp wynosi mniej niz temp jaka powinna panowac w pokoju, wlaczanie ogrzewania" << endl;
		}
		if (srednia>x+2)
		{
			cout << "Srednia temp jest za wysoka wzgledem temp jaka powinna panowac w pokoju wylaczanie ogrzewania" <<endl;
		}
		srednia=0;
		break;
	case 10:
		cout <<"Wylaczam program" <<endl;
		break;
	default:
	cout <<"Wartosc spoza menu" <<endl;	
	break;
	}
	}
	return 0;
}
