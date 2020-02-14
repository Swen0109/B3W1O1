<?php
    $tijd= date ('H');
    $outputText= '';
    $imageSrc= '';

    if($tijd <6){
        $outputText='Goede nacht';
        $imageSrc='night.png';
    }

    elseif($tijd >=6 && $tijd <12 ){
        $imageSrc='morning.png';
        $outputText='Goede morgen';
    }

    elseif($tijd >=12 && $tijd <18 ){
        $outputText='Goede Middag';
        $imageSrc='afternoon.png';
    }

    elseif($tijd >=18){
        $outputText='Goede Avond';
        $imageSrc='evening.png';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="B3W1O1.css">
    <title><?=$outputText?></title>
</head>
    <body class="body">
        <img class="backgroundImage" src="<?=$imageSrc?>">

    <div class="plaats">
        <h1><?= $outputText ?></h1>
        <h1><?= "Het is nu " . date('H:i') ?></h1>
    </div>

</body>
</html>