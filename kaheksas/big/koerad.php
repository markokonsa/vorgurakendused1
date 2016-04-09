<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Lemmikud</title>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <style>
        p {
             border-style: solid;
             border-width: 5px;
        }
    </style>
</head>
<body>
<div id="wrap">
    <h1>Lemmikloomad</h1>
<?php

$koerad= array(
		array('nimi'=>'Sofi', 'vanus'=>2, 'varvus'=>'Pruun', 'asi'=>'Lumi', 'kodu'=>'Tallinn'),
		array('nimi'=>'Tom', 'vanus'=>1, 'varvus'=>'Must', 'asi'=>'Kass', 'kodu'=>'Tartu'),
		array('nimi'=>'Aston', 'vanus'=>3, 'varvus'=>'Kirju', 'asi'=>'Kivi', 'kodu'=>'Rakvere'),
		array('nimi'=>'Bosse', 'vanus'=>5, 'varvus'=>'Hall', 'asi'=>'Korvpall', 'kodu'=>'Narva'),
		array('nimi'=>'Dora', 'vanus'=>4, 'varvus'=>'Valge', 'asi'=>'Golfi pall', 'kodu'=>'Tallinn'),
		array('nimi'=>'Jackey', 'vanus'=>1, 'varvus'=>'Kollane', 'asi'=>'Karu', 'kodu'=>'Tallinn'),
		array('nimi'=>'Pitsu', 'vanus'=>2, 'varvus'=>'Roheline', 'asi'=>'Pulk', 'kodu'=>'Tallinn')
	);

	foreach ($koerad as $koer) {
	    echo "<p>{$koer['nimi']} on {$koer['vanus']} aastane koer, kelle kodulinn on {$koer['kodu']} ja tema lemmik mänguasi on {$koer['asi']}</p> </br>";
	    }

?>
</div>
</body>
</html>