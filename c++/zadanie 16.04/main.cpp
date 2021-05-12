#include <iostream>
#include <math.h>
#include <cmath>
using namespace std;
/* run this program using the console pauser or add your own getch, system("pause") or input loop */

double zad1(double x){
	x=pow(x,2)-x-3;
	return x;
}
double zad2(double x){
	x=-pow(x,3)-pow(x,2)+1;
	return x;
}
double zad3(double x){
	x=cos(x)+1;
	return x;
}
double zad4(double x){
	x=sqrt(3*x)-1;
	return x;
}


int main(int argc, char** argv) {
	int zadanie;
	int n=20;
	double p,q,s,d;
	double suma;
	cout <<"Wybierz pp zadania, wybierajac odpowiednia liczbe:" <<endl;
	cout <<"a) 1	b) 2	c) 3	d) 4"<<endl;
	cin >> zadanie;
	switch(zadanie){
		case 1:
			p=3;
			q=5;
			d=(q-p)/n;
			for (int i=0;i<n;i++){
				s=zad1(p+d/2+i*d)*d;
				suma+=s;
			}
			cout <<abs(suma)  <<endl;
			break;
		case 2:
			p=2;
			q=4;
			d=(q-p)/n;
			for (int i=0;i<n;i++){
				s=zad2(p+d/2+i*d)*d;
				suma+=s;
			}

			cout <<abs(suma) <<endl;
			break;
		case 3:
			p=1;
			q=4;
			d=(q-p)/n;
			for (int i=0;i<n;i++){
				s=(abs(zad3(p+(i*d)))+abs(zad3(p+d+(i*d)))*d)/2;
				suma+=s;
			}
			cout <<abs(suma) <<endl;
			break;
		case 4:
			p=2;
			q=5;
			d=(q-p)/n;
			for (int i=0;i<n;i++){
				s=(abs(zad4(p+(i*d)))+abs(zad4(p+d+(i*d)))*d)/2;
				suma+=s;
			}
			cout <<abs(suma) <<endl;
			break;
		default:
			cout << "Nie ma takiego zadania" <<endl;
			break;	
	}
	return 0;
}
