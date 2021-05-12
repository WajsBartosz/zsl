#include <iostream>
#include <cmath>
using namespace std;



double f (double x)
{
	return (x*x-2);
}
int sign (double x)
{
	if (x > 0 ) return 1;
	else if (x < 0) return -1;
	else return 0;
}

int main(int argc, char** argv) {
	double eps=0.01;
	double A,B, Srodek, y = eps * 2;
	int iteracja=0;
	A=0;
	B=5;
	cout <<"i		A		B		S		f(S)"<<endl;
	while (abs(y) > eps)
	{
		iteracja++;
		Srodek = (B + A) / 2.0;
		y = f(Srodek);
		cout <<iteracja<<"		"<<A<< "		"<<B<< "		"<<Srodek<<"		"<<y<< endl;
		if (sign(f(A)) == sign(y))
		{
			A = Srodek;
		}
		else 
		{
			B = Srodek;
		}
	
		if (abs(y) < eps)
			cout << "Koniec obliczen "<< "x= " << Srodek <<endl;
	}
	
	
	
	
	
	return 0;
}
