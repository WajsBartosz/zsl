#include <iostream>
#include <vector>
#include <cstdlib>
using namespace std;



struct Ksiazka{
    
    int typ,cena,sprzedanegzemplarze;
    
    Ksiazka(){
        typ=rand()%10+1;
        cena=rand()%100+20;
        sprzedanegzemplarze=rand()%1000+100;
    }
    
    void wyswietlinformacje(){
        cout << "T: " << typ << " C: " << cena << " SE: " << sprzedanegzemplarze <<endl;
    }
    int zwiekszcene(int a){
        cena+=a;
    }
    int zmniejszcene(int a){
        if(cena<a){
            cena=0;
        }
        else{
        cena-=a;
        }
    }
};




int main(){
    //zad1
    vector <Ksiazka> ksiazki;
    for (int i=0;i<15;i++){
        ksiazki.push_back(Ksiazka());
    }
    for (int i=0;i<ksiazki.size();i++){
        ksiazki[i].wyswietlinformacje();
    }
    //zad2
    ksiazki[1].zmniejszcene(5);
    //zad3
    int maksksiazek=0;
    for (int i=0;i<ksiazki.size();i++){
        if(ksiazki[i].sprzedanegzemplarze>maksksiazek) maksksiazek=ksiazki[i].sprzedanegzemplarze;
    }
    cout << "Maksymalnie zostalo sprzedanych " << maksksiazek << " ksiazek" <<endl;
    //zad4
    int srednia=0;
    for (int i=0;i<ksiazki.size();i++){
        srednia+=ksiazki[i].cena;
    }
    srednia=srednia/ksiazki.size();
    cout <<"Srednia cena ksiazki to: " << srednia <<endl;
    
    return 0;
}
