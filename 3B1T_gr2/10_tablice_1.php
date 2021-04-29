<?php 
   //tablice indeksowane
    $colors= array('biały', 'zielony', 'czerwony', 'aqua');


    echo 'Rozmiar tablicy: ',count($colors),'<br>';
    echo 'Pierwszy element tablicy: ',$colors[0],'<br>';
    echo 'Ostatni element tablicy: ',$colors[3],'<br>';
    echo 'Ostatni element tablicy: ',$colors[count($colors)-1],'<br>';
    echo "<hr>";
    /*
        Kolor 1: Biały
        Kolor 2: Zielony
        Kolor 3: Czerwony
    */
    for ($i=0;$i<count($colors);$i++)
    {
        echo "Kolor ",$i+1,': ',ucfirst($colors[$i]),'<br>';
    }
    echo "<hr>";
    function tabColors(&$colors,$c1,$c2,$c3){
        $colors[0]=$c1;
        $colors[1]=$c2;
        $colors[2]=$c3;
        }
    function tabShow($colors){
        for($i=0;$i<count($colors);$i++){
            echo "Kolor ",$i+1,': ',$colors[$i],'<br>';
        }
    }
    tabColors($colors1,'aqua','magenta','cyan');
    tabShow($colors1);

    // tablica asocjacyjna
    echo "<hr>";
    $data= array('wartosc1'=>'a','wartosc2'=>'b');
    echo $data['wartosc2']."<br>";
    $data = array(
        'name'=>'Jan',
        'surname'=>'Nowak',
        'age'=>20
    );
    echo 'Imię: '.$data['name']."<hr>";
    echo <<<TAB
    Imię: {$data['name']}<br>
    Nazwisko: $data[surname]<br>
    Wiek: $data[age]<hr>
    TAB;

    // foreach
    foreach ($data as $value) {
        echo "$value ";
    }
    echo "<br>";
    foreach ($colors as $value) {
        echo "$value ";  
    }
    echo "<br>";
    foreach ($data as $key => $value) {
        echo ucfirst($key).": $value<br>";
    }
    echo "<br>";
    foreach ($colors as $key => $value) {
        echo ucfirst($key).": $value<br>";
    }
    echo "<hr>";

    print_r($data);
  
    echo "<br>";
    print_r($colors);
    echo "<hr>";

    echo '<pre>';
    print_r($data);
    echo '</pre>';


    /*
        Napisz uniwersalną funkcję do wyświetlania danych z tablicy 
        w formacie :
            klucz1: Wartość1
            klucz2: Wartość2
        
        tablica indeksowana
        0: Anna
        1: Nowak

        tablica asocjacyjna
        Name: Anna
        Surname: Nowak
    */

            function zadanie($tab){
                foreach($tab as $key => $value){
                    echo ucfirst($key).": $value<br>";
                }
            }
        zadanie($data); 
        zadanie($colors);   

?>