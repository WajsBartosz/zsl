#include <iostream>
#include <cstdlib>
#include <vector>
#include <queue>
#include <stack>
using namespace std;

struct Jacht{
    
    int pojemnosc,paliwo,dystans;
    
    Jacht(){
        pojemnosc=rand()%500+100;
        paliwo=rand()%200+50;
        dystans=(200*paliwo)/pojemnosc;
    }
    Jacht(int a,int b){
        pojemnosc=a;
        paliwo=b;
        dystans=(200*paliwo)/pojemnosc;
    }
    void wyswietl(){
        cout <<"Pojemnosc: " <<pojemnosc<<endl;
        cout <<"Paliwo: " <<paliwo<<endl;
        cout <<"Dystans: " <<dystans<<endl;
    }
    int rpojemnosc(){return pojemnosc;}
    int rpaliwo(){return paliwo;}
    int rdystans(){return dystans;}
    
    void dolejpaliwo(int paliwo,int dystans,int pojemnosc){
        int dodaj_paliwo;
        cout << "Dodaj paliwa do jachtu" <<endl;
        cin >> dodaj_paliwo;
        paliwo+=dodaj_paliwo;
        dystans=(200*paliwo)/pojemnosc;
    }
    
};





int main (){
    vector <Jacht> jachty;
    for(int i=0;i<20;i++){
        jachty.push_back(Jacht());
    }
    for (int i=0;i<20;i++){
        jachty[i].wyswietl();
    }
    int maks_dystans=0;
    int nr_jachtu;
    for(int i=0;i<jachty.size();i++){
        if (jachty[i].dystans>maks_dystans){
         maks_dystans=jachty[i].dystans;
         nr_jachtu=i+1;
        }
        
    }
    cout << "Jacht o numerze " << nr_jachtu <<" moze pokonac najwiekszy dystans, ktory wynosi: " << maks_dystans <<endl;
    
    return 0;
}
