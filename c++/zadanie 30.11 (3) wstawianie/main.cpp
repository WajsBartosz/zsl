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
	plikIn.close();
	
  int tmp,tmp1;
     for(int i=1; i<20; i++)
     {
             tmp = liczby[i]; 
             tmp1 = i-1;
             
             
             while(tmp1>=0 && liczby[tmp1]>tmp) 
             {
                        liczby[tmp1+1] = liczby[tmp1];
                        --tmp1;
             }
             liczby[tmp1+1] = tmp;
     }     
	cout << "Liczby posortowane sposobem sortowania przez stawianie: "<<endl;
	for (int i=0; i<20;i++)
	{
		cout << liczby[i] <<endl;
	}
	
	
	
	
	return 0;
}
