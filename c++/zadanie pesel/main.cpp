#include <iostream>
#include <string>
using namespace std;


int main(int argc, char** argv) {
	string pesel;
	int i=0;
	int mnozniki[]={9,7,3,1};
	int x=0;
	int wynik=0;
	int pesel1[11];
	cout << "Podaj numer PESEL" << endl;
	cin >> pesel;	
	if (pesel.length()!=11)
	{
		cout <<"podano zly numer PESEL"<< endl;
	}
	else
	{
	while (i<pesel.length())
		{
			pesel1[i]=pesel[i] - '0';
			i++;
		}
	i=0;
	while (i<pesel.length()-1)
	{
	wynik+=(pesel1[i]*mnozniki[x]);
	i++;
	x++;
	if (x==4)
		{
			x=0;
		}
	}
	if (wynik%10!=pesel1[10])
	{
		cout << "Podano zly numer PESEL" << endl;
	}
	else
	cout << "Twoj numer PESEL jest prawidlowy " << endl;	
	
	}
	return 0;
}
