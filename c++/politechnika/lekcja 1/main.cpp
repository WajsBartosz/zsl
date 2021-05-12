#include <iostream>
#include <cstdlib>
using namespace std;

struct uczen{
    int numer;
    double srednia;
    int oceny_koncowe[6];
    int ocena_koncowa;
    bool zdal;
    
    uczen(){
        numer= rand()%1000+1000;
        oceny();
        oblicz_srednia();
        czy_zdal();
        ocena_koncowa_ustal();
    }
    void wyswietl_informacje(){
        cout << "uczen o numerze " << numer << " uzyskal srednia " << srednia<<" ocena koncowa "<< ocena_koncowa<<  " czy zdal "<< zdal<< endl;
    }

    void zmien_srednia(double x){
        srednia=x;
    }
    void zmien_numer (int x){
        numer=x;
    }
    void oceny(){
        for (int i=0;i<6;i++){
            oceny_koncowe[i]=rand()%6+1;
        }
    }
    void oblicz_srednia(){
        double so=0.;
        for (int i=0;i<6;i++){
            so+=oceny_koncowe[i];
        }
        srednia=so/6.0;
    }
    void czy_zdal(){
        zdal= true;
        for(int i=0;i<6;i++){
            if(oceny_koncowe[i]==1)
            zdal= false;
        }
    }
    void ocena_koncowa_ustal(){
        ocena_koncowa=srednia;
        
    }
    void oceny_czastkowe_wyswietl(){
        for (int i=0;i<6;i++){
            cout << oceny_koncowe[i]<<endl;
        }
    }
};
    void wyswietl_tab(uczen tablica[], int rozmiar){
        for (int i=0;i<rozmiar;i++){
            tablica[i].wyswietl_informacje();
        }
    }
    void maks(uczen tab[], int rozmiar){
        double sr= 0.;
        double nr=0.;
        for (int i=0;i<rozmiar;i++){
            if(sr<=tab[i].srednia){
            sr=tab[i].srednia;
            nr=tab[i].numer;
            }
        }
        cout <<"Najwyzsza srednia: " <<sr<<endl;
        cout <<"Numer ucznia:" << nr<<endl; 
    }

struct klasa{
    double srednia_klasy;
    uczen tablica[20];
    int numer_klasy;
    
    void dodaj_uczniow(){
        for (int i=0;i<20;i++){
        uczen a;
        tablica[i]=a;
        }
    }
    void srednia(){
        double sr=0.;
        for (int i=0;i<20;i++){
            sr+=tablica[i].srednia;
        }
        srednia_klasy= sr/20;
    }
    
    klasa(){
        dodaj_uczniow();
        srednia();
        numer_klasy=rand()%100;
    }
    
    void wyswietl_klase(){
        cout<< "Klasa "<< numer_klasy<<endl;
        cout<< "Srednia klasy "<< srednia_klasy<< endl;
        cout <<"Uczniowie w klasie: "<<endl;
        wyswietl_tab(tablica,20);
    }
    void wyswietl_ucznia(int i){
        tablica[i].wyswietl_informacje();
        tablica[i].oceny_czastkowe_wyswietl();
    }
    void najlepszy_uczen(){
        maks(tablica,20);
    }
    void liczba_jedynek(){
        int liczba_jedynek=0;
        for(int i=0;i<20;i++){
            if(tablica[i].ocena_koncowa==1){
                liczba_jedynek++;
            }
        }
        cout << "Liczba jedynek w klasie: " <<liczba_jedynek<<endl;
    }
};
void lepsza_z_klas(klasa a,klasa b){
    if(a.srednia_klasy>b.srednia_klasy){
        cout << "lepsza srednia ma klasa "<<a.numer_klasy<<", jej srednia wynosi " << a.srednia_klasy<<endl;
    }
    else
    {
        cout << "lepsza srednia ma klasa "<<b.numer_klasy<<", jej srednia wynosi " << b.srednia_klasy<<endl;
    }
}
    

int main(){
    /*uczen tablica[20];
    for (int i =0;i<20;i++){
        uczen a;
        tablica[i]=a;
    }
    for (int i=0;i<20;i++){
        tablica[i].wyswietl_informacje();
    }
    int tmp=rand()%20;
    tablica[tmp].zmien_srednia(6);
    tablica[tmp].zmien_numer(1000);
    
    int r= sizeof(tablica)/sizeof(tablica[0]);
    cout << "rozmiar tablicy "<< r<<endl;
    
    wyswietl_tab(tablica,r);
    maks(tablica,r);*/
    klasa k1;
    klasa k2;
    k1.wyswietl_klase();
    cout <<endl<<endl;
    k1.wyswietl_ucznia(16);
    k1.najlepszy_uczen();
    lepsza_z_klas(k1,k2);
    k1.liczba_jedynek();
    return 0;
