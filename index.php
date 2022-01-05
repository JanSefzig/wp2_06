
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.people">
    <title>Document</title>
</head>
<body>
    <?php

    $boots[0]['name'] =" Speedflow" ;
    $boots[0]['size'] =" 41" ;
    $boots[0]['color'] =" Blue" ;
    $boots[0]['brand'] ="Adidas" ;

    $boots[1]['name'] =" Superfly"; 
    $boots[1]['size'] =" 45" ;
    $boots[1]['color'] =" White" ;
    $boots[1]['brand'] ="NIKE" ;

    $boots[2]['name'] =" Phantom" ;
    $boots[2]['size'] =" 43" ;
    $boots[2]['color'] =" Red" ;
    $boots[2]['brand'] ="NIKE" ;
    
    $boots[3]['name'] =" Vapor" ;
    $boots[3]['size'] =" 46" ;
    $boots[3]['color'] =" Orange" ;
    $boots[3]['brand'] ="NIKE" ;

    $boots[4]['name'] =" Predator" ;
    $boots[4]['size'] =" 42" ;
    $boots[4]['color'] =" Green" ;
    $boots[4]['brand'] ="Adidas" ;

    $people[0]['firstname'] =" Martin" ;
    $people[0]['lastname'] =" Hruska" ;
    $people[0]['age'] =" 17";
    $people[0]['height'] =" 178" ;
    $people[0]['favnumber'] =" 23" ;

    $people[1]['firstname'] =" Jan" ;
    $people[1]['lastname'] =" Sefzig" ;
    $people[1]['age'] =" 16";
    $people[1]['height'] =" 197"; 
    $people[1]['favnumber'] =" 95" ;

    $people[2]['firstname'] =" Lukáš" ;
    $people[2]['lastname'] =" Pecháček" ;
    $people[2]['age'] =" 16";
    $people[2]['height'] =" 189" ;
    $people[2]['favnumber'] =" 1people" ;

    $people[3]['firstname'] =" Stepan"; 
    $people[3]['lastname'] =" Vesely" ;
    $people[3]['age'] =" 17";
    $people[3]['height'] =" 187" ;
    $people[3]['favnumber'] =" 34" ;

    $people[4]['firstname'] =" Simon" ;
    $people[4]['lastname'] =" Vodicka" ;
    $people[4]['age'] =" 16";
    $people[4]['height'] =" 175" ;
    $people[4]['favnumber'] =" people"; 
    
    $people[0]['firstname'] ='Martin';
    $people[0]['boots'] = $boots[0];

    $people[1]['firstname'] ='Jan';
    $people[1]['boots'] = $boots[0];

    $people[2]['firstname'] ='Lukáš';
    $people[2]['boots'] = $boots[0];

    $people[3]['firstname'] ='Stepan';
    $people[3]['boots'] = $boots[0];

    $people[4]['firstname'] ='Simon';
    $people[4]['boots'] = $boots[0];

    for ($i=0; $i <count($people); $i++) { ?>{ 
        <h2><?= $people[$i]['firstname'];?></h2>
        <p><strong>Jméno: </strong><?= $people[$i]['firstname'];?></p>
        <p><strong>Přijmení: </strong><?= $people[$i]['lastname'];?></p>
        <p><strong>Věk: </strong><?= $people[$i]['age'];?></p>
        <p><strong>Výška: </strong><?= $people[$i]['height'];?></p> 
        <p><strong>Oblíbené číslo: </strong><?= $people[$i]['favnumber'];?></p>
        <?php }

    for ($i=0; $i < count($boots); $i++) { ?>
        <h2><?= $boots[$i]['name'];?></h2>
        <p><strong>Název: </strong><?= $boots[$i]['name'];?></p>
        <p><strong>Velikost: </strong><?= $boots[$i]['size'];?></p>
        <p><strong>Barva: </strong><?= $boots[$i]['color'];?></p>
        <p><strong>Značka: </strong><?= $boots[$i]['brand'];?></p>
    
    <?php
    }
    ?>
    







    
     
    
    



</body>
</html>