#include <iostream>
#include <string>
#include <stack>

using namespace std;


void ONP(string r){
    int dl=r.length();
    stack <double> stos;
    double a=0.;
    double b=0.;
    double liczba=0.;
    bool op=false;
    
    for (int i=0;i<dl;i++){
        switch(r[i]){
            case '+':
                a=stos.top();
                stos.pop();
                b=stos.top();
                stos.pop();
                stos.push(b+a);
                op=true;
                break;
            case '-':
                a=stos.top();
                stos.pop();
                b=stos.top();
                stos.pop();
                stos.push(b-a);
                op=true;
                break;
            case '*':
                a=stos.top();
                stos.pop();
                b=stos.top();
                stos.pop();
                stos.push(b*a);
                op=true;
                break;
            case '/':
                a=stos.top();
                stos.pop();
                b=stos.top();
                stos.pop();
                stos.push(b/a);
                op=true;
                break;
            case ' ':
                if(op==false){
                    stos.push(liczba);
                    liczba=0;
                }
                break;
            default:
                liczba=10*liczba+(r[i]-'0');
                op=false;
                break;
        }
        
        
    }
    cout <<"Wynik operacji w ONP: " << stos.top() << endl;
}

string do_ONP(string r){
    int dl=r.length();
    stack <char> stos;
    bool op;
    char symbol; //to co wstawiamy na stos
    char poprzedni; //poprzedni symbol na stosie
    string rownanie_w_onp;
    
    for (int i=0;i<dl;i++){
        switch(r[i]){
            case '+':
                if(stos.empty()){
                    symbol = '+';
                    stos.push(symbol);
                }
                else{
                    if(poprzedni!='*' and poprzedni!='/'){
                       symbol = '+';
                        stos.push(symbol);
                    }
                    else{
                        while(!stos.empty() || stos.top()!='('){
                            symbol=stos.top();
                            rownanie_w_onp.push_back(symbol);
                            rownanie_w_onp.push_back(' ');
                            stos.pop();
                        }
                        symbol='+';
                        stos.push(symbol);
                    }
                }
                poprzedni='+';
                op=true;
                break;
            case '-':
                if(stos.empty()){
                    symbol = '-';
                    stos.push(symbol);
                }
                else{
                    if(poprzedni!='*' and poprzedni!='/'){
                       symbol = '-';
                        stos.push(symbol);
                    }
                    else{
                        while(!stos.empty() || stos.top()!='('){
                            symbol=stos.top();
                            rownanie_w_onp.push_back(symbol);
                            rownanie_w_onp.push_back(' ');
                            stos.pop();
                        }
                        symbol='-';
                        stos.push(symbol);
                    }
                }
                poprzedni='-';
                op=true;
                break;
            case '*':
                symbol='*';
                stos.push(symbol);
                poprzedni='*';
                op =true;
                break;
            case '/':
                symbol='/';
                stos.push(symbol);
                poprzedni='/';
                op =true;
                break;
            case '(':
                symbol='(';
                stos.push(symbol);
                poprzedni='(';
                op=true;
                break;
            case ')':
                while(stos.top()!='('){
                    symbol=stos.top();
                    rownanie_w_onp.push_back(' ');
                    rownanie_w_onp.push_back(symbol);
                    rownanie_w_onp.push_back(' ');
                    stos.pop();
                }
                stos.pop();
                poprzedni=' ';
                op=false;
                break;
            case ' ':
                if(op){
                    symbol=' ';
                }
                else {
                    symbol=' ';
                    rownanie_w_onp.push_back(symbol);
                }
                break;
            default:
                symbol=r[i];
                rownanie_w_onp.push_back(symbol);
                op=false;
                break;
        }
        }
        while(!stos.empty()){
            symbol=stos.top();
            rownanie_w_onp.push_back(' ');
            rownanie_w_onp.push_back(symbol);
            rownanie_w_onp.push_back(' ');
            stos.pop();
    }
    return rownanie_w_onp;
}


int main(){
    bool operacja= false;
    string rownanie;
    
    
    cout <<"jezeli chcesz podac rownanie w ONP wybierz 0, jezeli w notacji nawiasowej wybierz 1: ";
    cin >> operacja;
    
    if(!operacja){
        cin.ignore();
        cout <<"podaj rownanie w ONP: ";
        getline(cin,rownanie);
        ONP(rownanie);
    }
    else{
        cin.ignore();
        cout <<"podaj rownanie w notacji nawiasowej: ";
        getline(cin,rownanie);
        string rownanie_onp=do_ONP(rownanie);
        cout << "rownanie w ONP: " << rownanie_onp <<endl;
        ONP(rownanie_onp);
        
    }
    
    
    return 0;
}
