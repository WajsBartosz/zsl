<?php 
// tablice wielowymiarowe

    $students= array(
        array('Jan','Nowak',20),
        array('Anna','Kowalska',20, 'Poznań'),
        array('Jan')
    );

    print_r($students[0]);
    echo '<br>';
    print_r($students[2]);
    echo '<br>';
    echo $students[1][3],'<br><br>';

    for ($i=0;$i <count($students);$i++){
        echo "Uczeń nr ",$i+1,": ";
        for($j=0;$j< count($students[$i]);$j++){
            echo $students[$i][$j]," ";
        }  
        echo '<br>';
    }

    echo '<br>';

    foreach ($students as $student) {
        foreach ($student as $value){
            echo "$value ";
        }
        echo "<br>";
    }
    echo "<br>";

    foreach ($students as $key => $student) {
        echo "Uczeń nr ",$key+1,": ";
        foreach ($student as $value) {
            echo "$value ";
        }
        echo "<br>";
    }


?>
