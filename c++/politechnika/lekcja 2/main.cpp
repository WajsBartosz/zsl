#include <iostream>
#include <cstdlib>
#include <vector>
#include <queue>
#include <stack>
using namespace std;

struct zwierze{
    int typ;
    int rozmiar;
    bool miesozerny;
    
    zwierze(){
        typ=rand()%10+1;
        rozmiar=rand()%16+1;
        czy_miesozerny();
    }
    
    void czy_miesozerny(){
        if(typ<=4){
            miesozerny=true;
        }
        else if(typ>4){
            miesozerny=false;
        }
    }
    void wyswietl(){
        cout <<"T: " << typ; 
        cout <<" R: " << rozmiar;
        cout <<" M: " << miesozerny << endl;
    }
    int rt(){ return typ;}
    int rr(){ return rozmiar;}
    bool rm(){ return miesozerny;}
};

struct ZOO{
    vector <zwierze> v_z;
    queue <zwierze> q_z_m;
    stack <zwierze> s_z_r;
    
    ZOO(int l){
        for (int i=0; i<l;i++){
            v_z.push_back(zwierze());
        }
    }
    void wyswietl(){
        for (int i=0; i<v_z.size();i++){
            v_z[i].wyswietl();
        }
    }
    void wyswietl2(){
        auto ite=v_z.begin();
        for (ite; ite != v_z.end(); ite++){
            ite->wyswietl();
        }
    }
    void wyswietl3(){
        for(auto value: v_z){
            value.wyswietl();
        }
    }
    
    /*void ilezwierzat(){
        int miesozerne=0;
        int roslinozerne=0;
        for (int i=0;i<v_z.size();i++){
            if (v_z[i].typ>5) miesozerne++;
            else roslinozerne++;
        }
        cout << "Miesozernych: " << miesozerne << " roslinozernych: " << roslinozerne <<endl;
    }*/
    int liczba_rodzaju(bool m){
        int licznik= 0;
        for (int i=0;i<v_z.size();i++){
            if (v_z[i].miesozerny==m)licznik++;
        }
        return licznik;
    }
    
    void generuj_kolejki(){
        for(int i=0;i<v_z.size();i++){
            if(v_z[i].miesozerny==true) q_z_m.push(v_z[i]);
            else s_z_r.push(v_z[i]);
        }
    }
    
    void liczb_w_kolejkach(){
        cout << "Liczba roslinozernych "<< s_z_r.size() <<endl;
        cout << "Liczba miesozernych "<< q_z_m.size() <<endl;
    }
    
    void nakarm_roslinozerne(){
        while (!s_z_r.empty()){
            s_z_r.top().wyswietl();
            s_z_r.pop();
        }
    }
    void nakarm_miesozerne(){
        while(!q_z_m.empty()){
            q_z_m.front().wyswietl();
            q_z_m.pop();
        }
    }
    void wyczysc_kolejke(){
        while(!q_z_m.empty()){
            q_z_m.pop();
        }
    }
    void wyczysc_stos(){
        while(!s_z_r.empty()){
            s_z_r.pop();
        }
    }
    void wyswietl_rozmiary(){
        cout << "Liczba zwierzat roslinozernych w stosie: "<<s_z_r.size()<<endl;
        cout << "Liczba zwierzat miesozernych w kolejce: "<<q_z_m.size()<<endl;
    }
};

void wypelnij_tablice(zwierze tab[], int rozmiar){
    for (int i=0;i <rozmiar;i++){
        zwierze a;
        tab[i]= a;
    }
}

void wyswietl_tablice(zwierze tab[], int rozmiar){
    for (int i=0;i<rozmiar;i++){
        tab[i].wyswietl();
    }
}

int najwiekszy_rozmiar(zwierze tab[], int rozmiar){
    int maks=0;
    for (int i=0;i < rozmiar;i++){
        if (tab[i].rozmiar>maks) maks=tab[i].rozmiar;
    }
    return maks;
}

void gdzie_wiecej(ZOO a, ZOO b){
    if(a.liczba_rodzaju(1)>b.liczba_rodzaju(1))
    cout << "W zoo a jest wiecej zwierzat miesozernych"<<endl;
    else if (a.liczba_rodzaju(1)<b.liczba_rodzaju(1))
    cout << "W zoo b jest wiecej zwierzat miesozernych"<<endl;
    else 
    cout <<"W zoo a i b jest tyle samo zwierzat miesozernych"<<endl;
}


int main(){
    zwierze* tab;
    
    int roz;
    cin >> roz;
    
    tab= new zwierze[roz];
    wypelnij_tablice(tab,roz);
    wyswietl_tablice(tab,roz);
    
    cout << "Najwiekszy rozmiar to: " << najwiekszy_rozmiar(tab, roz) <<endl;
    
    /*vector<int> wektor;
    for (int i=0;i<5;i++){
        wektor.push_back(rand()%100);
    }
    for (int i=0;i<wektor.size();i++){
        cout << wektor[i] <<endl;
    }
    wektor.erase(wektor.begin() + 3);
    for (int i=0;i <wektor.size();i++){
        cout << wektor[i] <<endl;
    }*/
    ZOO zoo1(15);
    ZOO zoo2(20);
    zoo1.wyswietl();
    cout <<endl;
    cout << "Liczba roslinozernych "<< zoo1.liczba_rodzaju(0) <<endl;
    cout << "Liczba miesozernych "<< zoo1.liczba_rodzaju(1) <<endl;
    cout << endl << endl;
    zoo1.generuj_kolejki();
    zoo1.liczb_w_kolejkach();
    return 0;
}
