
<html>

<head>
  <title></title>
</head>

<body>

<?php

$radio = $_POST['resolucao'];

if($radio != "1k" || $radio != "2k" || $radio != "4k" ){

header('Location: Erros/gaming_error.html');

}


/* RESOLUÇÃO FULL HD */

if($radio == "1k"){

/* NIVEL 1 */

if(!empty($_POST['variavel_lol'])){
$variavel_lol = 1;
} else {
$variavel_lol = 0;
}

if(!empty($_POST['variavel_fifa'])){
$variavel_fifa = 1;
} else {
$variavel_fifa = 0;
}

if(!empty($_POST['variavel_minecraft'])){
$variavel_minecraft = 1;
} else {
$variavel_minecraft = 0;
}

if(!empty($_POST['variavel_dota2'])){
$variavel_dota2 = 1;
} else {
$variavel_dota2 = 0;
}

/* NIVEL 2 */

if(!empty($_POST['variavel_rocket'])){
$variavel_rocket = 5;
} else {
$variavel_rocket = 0;
}

if(!empty($_POST['variavel_overwatch'])){
$variavel_overwatch = 5;
} else {
$variavel_overwatch = 0;
}

if(!empty($_POST['variavel_csgo'])){
$variavel_csgo = 5;
} else {
$variavel_csgo = 0;
}

/* NIVEL 3 */

if(!empty($_POST['variavel_h1z1'])){
$variavel_h1z1 = 20;
} else {
$variavel_h1z1 = 0;
}

if(!empty($_POST['variavel_gtav'])){
$variavel_gtav = 20;
} else {
$variavel_gtav = 0;
}

/* NIVEL 4 */

if(!empty($_POST['variavel_forza'])){
$variavel_forza = 60;
} else {
$variavel_forza = 0;
}

if(!empty($_POST['variavel_witcher'])){
$variavel_witcher = 60;
} else {
$variavel_witcher = 0;
}

if(!empty($_POST['variavel_bf1'])){
$variavel_bf1 = 60;
} else {
$variavel_bf1 = 0;
}



$config_final = $variavel_bf1 + $variavel_witcher + $variavel_forza + $variavel_gtav + $variavel_h1z1 + $variavel_csgo + $variavel_overwatch + $variavel_rocket + $variavel_dota2 + $variavel_minecraft + $variavel_fifa + $variavel_lol;


if($config_final >= 1 && $config_final < 5 ){

header('Location: Jogos/Starter_1.html');

}

if($config_final >= 5 && $config_final < 20){

header('Location: Jogos/Medium_1.html');

}

if($config_final >= 20 && $config_final < 59){

header('Location: Jogos/Advanced_1.html');

}

if($config_final >= 59 && $config_final < 239){

header('Location: Jogos/Expert_1.html');

}

if($config_final = 0){

header('Location: Erros/gaming_error.html');

}
}





/* RESOLUÇÃO 2K */


if($radio == "2k"){

/* NIVEL 1 */

if(!empty($_POST['variavel_lol'])){
$variavel_lol = 1;
} else {
$variavel_lol = 0;
}

if(!empty($_POST['variavel_fifa'])){
$variavel_fifa = 1;
} else {
$variavel_fifa = 0;
}

if(!empty($_POST['variavel_minecraft'])){
$variavel_minecraft = 1;
} else {
$variavel_minecraft = 0;
}

if(!empty($_POST['variavel_dota2'])){
$variavel_dota2 = 1;
} else {
$variavel_dota2 = 0;
}

/* NIVEL 2 */

if(!empty($_POST['variavel_rocket'])){
$variavel_rocket = 5;
} else {
$variavel_rocket = 0;
}

if(!empty($_POST['variavel_overwatch'])){
$variavel_overwatch = 5;
} else {
$variavel_overwatch = 0;
}

if(!empty($_POST['variavel_csgo'])){
$variavel_csgo = 5;
} else {
$variavel_csgo = 0;
}

/* NIVEL 3 */

if(!empty($_POST['variavel_h1z1'])){
$variavel_h1z1 = 20;
} else {
$variavel_h1z1 = 0;
}

if(!empty($_POST['variavel_gtav'])){
$variavel_gtav = 20;
} else {
$variavel_gtav = 0;
}

/* NIVEL 4 */

if(!empty($_POST['variavel_forza'])){
$variavel_forza = 60;
} else {
$variavel_forza = 0;
}

if(!empty($_POST['variavel_witcher'])){
$variavel_witcher = 60;
} else {
$variavel_witcher = 0;
}

if(!empty($_POST['variavel_bf1'])){
$variavel_bf1 = 60;
} else {
$variavel_bf1 = 0;
}



$config_final = $variavel_bf1 + $variavel_witcher + $variavel_forza + $variavel_gtav + $variavel_h1z1 + $variavel_csgo + $variavel_overwatch + $variavel_rocket + $variavel_dota2 + $variavel_minecraft + $variavel_fifa + $variavel_lol;


if($config_final >= 1 && $config_final < 5 ){

header('Location: Jogos/Starter_2.html');

}

if($config_final >= 5 && $config_final < 20){

header('Location: Jogos/Medium_2.html');

}

if($config_final >= 20 && $config_final < 59){

header('Location: Jogos/Advanced_2.html');

}

if($config_final >= 59 && $config_final < 239){

header('Location: Jogos/Expert_2.html');

}

if($config_final = 0){

header('Location: Erros/gaming_error.html');

}
}




/* RESOLUÇÃO 4K */

if($radio == "4k"){

/* NIVEL 1 */

if(!empty($_POST['variavel_lol'])){
$variavel_lol = 1;
} else {
$variavel_lol = 0;
}

if(!empty($_POST['variavel_fifa'])){
$variavel_fifa = 1;
} else {
$variavel_fifa = 0;
}

if(!empty($_POST['variavel_minecraft'])){
$variavel_minecraft = 1;
} else {
$variavel_minecraft = 0;
}

if(!empty($_POST['variavel_dota2'])){
$variavel_dota2 = 1;
} else {
$variavel_dota2 = 0;
}

/* NIVEL 2 */

if(!empty($_POST['variavel_rocket'])){
$variavel_rocket = 5;
} else {
$variavel_rocket = 0;
}

if(!empty($_POST['variavel_overwatch'])){
$variavel_overwatch = 5;
} else {
$variavel_overwatch = 0;
}

if(!empty($_POST['variavel_csgo'])){
$variavel_csgo = 5;
} else {
$variavel_csgo = 0;
}

/* NIVEL 3 */

if(!empty($_POST['variavel_h1z1'])){
$variavel_h1z1 = 20;
} else {
$variavel_h1z1 = 0;
}

if(!empty($_POST['variavel_gtav'])){
$variavel_gtav = 20;
} else {
$variavel_gtav = 0;
}

/* NIVEL 4 */

if(!empty($_POST['variavel_forza'])){
$variavel_forza = 60;
} else {
$variavel_forza = 0;
}

if(!empty($_POST['variavel_witcher'])){
$variavel_witcher = 60;
} else {
$variavel_witcher = 0;
}

if(!empty($_POST['variavel_bf1'])){
$variavel_bf1 = 60;
} else {
$variavel_bf1 = 0;
}



$config_final = $variavel_bf1 + $variavel_witcher + $variavel_forza + $variavel_gtav + $variavel_h1z1 + $variavel_csgo + $variavel_overwatch + $variavel_rocket + $variavel_dota2 + $variavel_minecraft + $variavel_fifa + $variavel_lol;


if($config_final >= 1 && $config_final < 5 ){

header('Location: Jogos/Starter_3.html');

}

if($config_final >= 5 && $config_final < 20){

header('Location: Jogos/Medium_3.html');

}

if($config_final >= 20 && $config_final < 59){

header('Location: Jogos/Advanced_3.html');

}

if($config_final >= 59 && $config_final < 239){

header('Location: Jogos/Expert_3.html');

}

if($config_final = 0){

header('Location: Erros/gaming_error.html');

}
}

   ?>


</body>

</html>