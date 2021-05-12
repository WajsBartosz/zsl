#include <iostream>
#include <fstream>
#include <math.h>
#include <cstdlib>
#include <ctime>
using namespace std;


int main(int argc, char** argv) {
	srand(time(NULL));
	fstream plikIn;
	fstream plikOut;
	int liczby[40];
	int a=0;
	plikIn.open("dane.txt", ios_base::in);
	plikOut.open("dane.txt", ios_base::out); 
	
	if (plikOut.good())
	{
		for (int i =0;i<40;i++)
		{
			a=(rand() % 41) -20;
			plikOut << a << endl;
			cout << a<<endl;
		}
	}
	else
		cout<< "Problem z otwarciem pliku"<<endl;
	plikOut.close();
	if (plikIn.good())
	{
		for (int i=0;i<40;i++)
		{
			plikIn>>liczby[i];
		}
	}
	else
		cout << "Problem z otwarciem pliku"<< endl;	
	plikIn.close();
	int max_el=liczby[0];
	for (int i=0;i<40;i++)
	{
		if (max_el<liczby[i])
		{
			max_el=liczby[i];
		}
	}
	cout << "Najwieksza liczba z wylosowanego przedzialu to " << max_el << endl;
	int tmp=0;
	for (int i=0; i<40;i++)
	{
		if (liczby[i]==max_el)
		tmp++;
	}
	if (tmp==1)
		cout << "Najwieksza liczba z wylosowanego przedzialu wystepuje " << tmp << " raz w tablicy liczby"<<endl;
	else
		cout << "Najwieksza liczba z wylosowanego przedzialu wystepuje " << tmp << " razy w tablicy liczby"<<endl;
	int suma=0;
	for (int i=0;i<40;i++)
	{
		suma+=liczby[i];
	}
	suma=suma/40;
	cout << "Srednia arytmetyczna wylosowanych liczby wynosi "<< suma <<endl;
	
	return 0;
}
