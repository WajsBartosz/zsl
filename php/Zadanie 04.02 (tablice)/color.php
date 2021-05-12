
<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice</title>
</head>
<body>
    <?php 
        function wyswietl($tab){
            $tmp=1;
            echo "Liczba ulubionych kolorów: ".count($tab)."<br>";
            foreach ($tab as $key => $tab){
                echo "Kolor nr. ",$tmp,": ",$tab,"<br>";
                $tmp++;
                }
            }
        sort($_POST['fcolors']);
        wyswietl($_POST['fcolors']);

        

    
        
    ?>
    
</body>
</html>