#include <iostream>
#include <math.h>
using namespace std;

double f (double x)
{
	return 2*x*x;
}

double poleProstokata (double a,double b)
{
	return a*b;
}




int main(int argc, char** argv) {
	
	cout <<"Liczenie pola pod krzywa metoda prostokatow:" <<endl;
	double PolePodFunkcja= 0.0;
	double start= 0.0;
	double koniec= 8.0;
	double liczbaProstokatow=100;
	double srodek;
	double poczatekPrzedzialu;
	double dlugoscPrzedzialu;
	double wysokosc;
	double poleProst;
	
	
	
	dlugoscPrzedzialu= (koniec-start) / liczbaProstokatow;
	poczatekPrzedzialu= start;
	int licznikProstokatow=0;
	
	while (licznikProstokatow < liczbaProstokatow)
	{
		srodek= poczatekPrzedzialu+dlugoscPrzedzialu/2;
		wysokosc=f(srodek);
		PolePodFunkcja+=poleProstokata(dlugoscPrzedzialu, wysokosc);
		poczatekPrzedzialu+=dlugoscPrzedzialu;	
		licznikProstokatow++;
	}
		
	cout << "Pole pod krzywa ma wartosc: " <<PolePodFunkcja <<endl; 
	cout << "Blad bezwzgledny: " <<100*fabs(341.33333-PolePodFunkcja)/341.33333 <<"%"<<endl; 
	
	
	
	return 0;
}
