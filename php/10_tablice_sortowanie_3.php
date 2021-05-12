<?php 
    // sortowanie tablic

    $tab = array(10, 1, 20, 1000, -2, 4, 20);
    
    function t($tab){
    foreach ($tab as $value) {
        echo "$value ";
    }
    echo "<br>";
    }

    t($tab);

    // sort, rsort, asort, arsort, ksort, krsort
    // sortowanie niemalejące

    sort($tab);
    t($tab);
    
    // sortowanie nierosnące

    rsort($tab);
    t($tab);

    $names= array('Katarzyna','anna','Janusz','paweł');
    t($names);
    sort($names);
    t($names);

    function replaceToLowerCase(&$tab){
        foreach ($tab as $key => $value) {
            $replace= strtolower($value);
            $tab[$key]= $replace;
        }
    }
    replaceToLowerCase($names);
    sort($names);
    t($names);
    
    function replaceUpperCaseFirst(&$tab){
        foreach ($tab as $key => $value) {
            $replace= ucfirst($value);
            $tab[$key]= $replace;
        }
    }
    replaceUpperCaseFirst($names);
    t($names);

    // sortowanie tablicy asocjacyjnej
    $tabAsoc= array(
        'name'=> 'Paweł',
        'surname'=> 'Nowak',
        'age'=> 20,
        'city'=> 'Poznań',
    );

    t($tabAsoc);

    // sortowanie niemalejące według zawartości

    asort($tabAsoc);
    t($tabAsoc);
    
    // sortowanie nierosnące według zawartości

    arsort($tabAsoc);
    t($tabAsoc);

    // sortowanie niemalejące według klucza

    ksort($tabAsoc);
    t($tabAsoc);

    // sortowanie nierosnące według klucza

    krsort($tabAsoc);
    t($tabAsoc);

    // wyświetlanie danych z tablicy
    echo '<pre>';
    var_dump($tabAsoc);
    echo '</pre>';
    
    echo '<pre>';
    print_r($tabAsoc);
    echo '</pre>';
    
    



?>