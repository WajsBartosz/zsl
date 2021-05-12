#include <iostream>
#include <fstream>
#include <string>

//getline(plik,zmienna)

using namespace std;

int main()
{
    fstream plikIn;
    fstream plikOut;
    int a = 0;
    int b = 0;
    int c = 0;
    plikIn.open("pary.txt", ios_base::in);
    plikOut.open("rezultat.txt", ios_base::out);



    if (plikIn.good() && plikOut.good())
    {
        while(plikIn.eof() == false)
        {
            plikIn >> a >> b;
            cout << a <<" "<<b<<endl;
            if(a>b)
                c=a;
            else
                c=b;
            cout<<c<<endl;
            plikOut<<c<<endl;
        }

    }
    else
        cout << "Problem z otwarciem pliku";
    
    plikIn.close();
    plikOut.close();

    return 0;
}
