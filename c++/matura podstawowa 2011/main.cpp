
#include <iostream>
#include <fstream>
#include <string>
 
using namespace std;
 
bool palindrom(string a);
bool ascii(string a);
int main()
{
 
	ifstream odczytaj;
	odczytaj.open("hasla.txt");
	ofstream zada;
	ofstream zadb;
	ofstream zadc;
	zada.open("wynik4a.txt");
	zadb.open("wynik4b.txt");
	zadc.open("wynik4c.txt");
	int parzyste = 0;
	string dane;
	for (int i = 0; i < 200; i++)
	{
		getline(odczytaj, dane);
		if (dane.length() % 2 == 0)
		{
			parzyste++;
		}
		if (palindrom(dane))
		{
			zadb << dane << endl;
 
		}
		if (ascii(dane))
		{
			zadc << dane << endl;
		}
 
 
 
	}
 
	zada << "Liczb parzystych by³o: " << parzyste << endl;
	zada << "Liczb nieparzystych by³o: " << 200 - parzyste << endl;
	zada.close();
	zadb.close();
	zadc.close();
	odczytaj.close();
 
	return 0;
}
bool palindrom(string a)
{
 
	for (int i = 0; i < a.length() - 1 - i; i++)
	{
		if (a[i] != a[a.length() - 1 - i])
		{
			return false;
		}
	}
	return true;
 
}
bool ascii(string a)
{
 
	for (int i = 1; i < a.length(); i++)
	{
		if (a[i - 1] + a[i] == 220)
		{
			return true;
		}
	}
	return false;
}
