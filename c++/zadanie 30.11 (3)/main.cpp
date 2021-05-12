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
	int liczby[20];
	int a=0;
	plikIn.open("dane.txt", ios_base::in);
	plikOut.open("dane.txt", ios_base::out); 
	
	if (plikOut.good())
	{
		for (int i =0;i<20;i++)
		{
			a=(rand() % 21);
			plikOut << a << endl;
			cout << a<<endl;
		}
	}
	else
		cout<< "Problem z otwarciem pliku"<<endl;
	plikOut.close();
	
	
	
	if (plikIn.good())
	{
		for (int i=0;i<20;i++)
		{
			plikIn>>liczby[i];
		}
	}
	else
		cout << "Problem z otwarciem pliku"<< endl;	
	
	
	for(int i=0;i<20;i++)
		for(int j=1;j<20-i;j++)
		if(liczby[j-1]>liczby[j])
			swap(liczby[j-1], liczby[j]);
			
	cout << "Posortowane liczby metoda sortowania babelkowego:" <<endl;
	for (int i=0;i<20;i++)
	{
		cout << liczby[i] <<endl;
	}
	
	
	
	
	
	return 0;
}
