
<html>

<head>
  <title></title>
</head>

<body>

<?php

$radio = $_POST['resolucao'];


if($radio != "1k" || $radio != "2k" || $radio != "4k" ){

header('Location: Erros/workstation_error.html');

}


/* RESOLUÇÃO FULL HD */

if($radio == "1k"){

/* NIVEL 1 */

if(!empty($_POST['variavel_word'])){
$variavel_word = 1;
} else {
$variavel_word = 0;
}

if(!empty($_POST['variavel_powerpoint'])){
$variavel_powerpoint = 1;
} else {
$variavel_powerpoint = 0;
}

if(!empty($_POST['variavel_excel'])){
$variavel_excel = 1;
} else {
$variavel_excel = 0;
}

/* NIVEL 2 */

if(!empty($_POST['variavel_android'])){
$variavel_android = 4;
} else {
$variavel_android = 0;
}

if(!empty($_POST['variavel_java'])){
$variavel_java = 4;
} else {
$variavel_java = 0;
}

if(!empty($_POST['variavel_mysql'])){
$variavel_mysql = 4;
} else {
$variavel_mysql = 0;
}

/* NIVEL 3 */

if(!empty($_POST['variavel_premiere'])){
$variavel_premiere = 16;
} else {
$variavel_premiere = 0;
}

if(!empty($_POST['variavel_sonyvegas'])){
$variavel_sonyvegas = 16;
} else {
$variavel_sonyvegas = 0;
}

if(!empty($_POST['variavel_photoshop'])){
$variavel_photoshop = 16;
} else {
$variavel_photoshop = 0;

}if(!empty($_POST['variavel_illustrator'])){
$variavel_illustrator = 16;
} else {
$variavel_illustrator = 0;
}

/* NIVEL 4 */

if(!empty($_POST['variavel_blender'])){
$variavel_blender = 83;
} else {
$variavel_blender = 0;
}

if(!empty($_POST['variavel_vmware'])){
$variavel_vmware = 83;
} else {
$variavel_vmware = 0;
}


$config_final = $variavel_vmware + $variavel_blender + $variavel_illustrator + $variavel_photoshop + $variavel_sonyvegas + $variavel_premiere + $variavel_mysql + $variavel_java + $variavel_android + $variavel_excel + $variavel_powerpoint + $variavel_word;


if($config_final >= 1 && $config_final <= 3 ){

header('Location: Programas/Home_1.html');

}

if($config_final >= 4 && $config_final < 16){

header('Location: Programas/HelloWorld_1.html');

}

if($config_final >= 16 && $config_final < 82){

header('Location: Programas/Pixel_1.html');

}

if($config_final >= 83 && $config_final < 248){

header('Location: Programas/Action_1.html');

}

if($config_final = 0){

header('Location: Erros/workstation_error.html');  

}
}





/* RESOLUÇÃO 2K */


if($radio == "2k"){

/* NIVEL 1 */

if(!empty($_POST['variavel_word'])){
$variavel_word = 1;
} else {
$variavel_word = 0;
}

if(!empty($_POST['variavel_powerpoint'])){
$variavel_powerpoint = 1;
} else {
$variavel_powerpoint = 0;
}

if(!empty($_POST['variavel_excel'])){
$variavel_excel = 1;
} else {
$variavel_excel = 0;
}

/* NIVEL 2 */

if(!empty($_POST['variavel_android'])){
$variavel_android = 4;
} else {
$variavel_android = 0;
}

if(!empty($_POST['variavel_java'])){
$variavel_java = 4;
} else {
$variavel_java = 0;
}

if(!empty($_POST['variavel_mysql'])){
$variavel_mysql = 4;
} else {
$variavel_mysql = 0;
}

/* NIVEL 3 */

if(!empty($_POST['variavel_premiere'])){
$variavel_premiere = 16;
} else {
$variavel_premiere = 0;
}

if(!empty($_POST['variavel_sonyvegas'])){
$variavel_sonyvegas = 16;
} else {
$variavel_sonyvegas = 0;
}

if(!empty($_POST['variavel_photoshop'])){
$variavel_photoshop = 16;
} else {
$variavel_photoshop = 0;

}if(!empty($_POST['variavel_illustrator'])){
$variavel_illustrator = 16;
} else {
$variavel_illustrator = 0;
}

/* NIVEL 4 */

if(!empty($_POST['variavel_blender'])){
$variavel_blender = 83;
} else {
$variavel_blender = 0;
}

if(!empty($_POST['variavel_vmware'])){
$variavel_vmware = 83;
} else {
$variavel_vmware = 0;
}


$config_final = $variavel_vmware + $variavel_blender + $variavel_illustrator + $variavel_photoshop + $variavel_sonyvegas + $variavel_premiere + $variavel_mysql + $variavel_java + $variavel_android + $variavel_excel + $variavel_powerpoint + $variavel_word;


if($config_final >= 1 && $config_final <= 3 ){

header('Location: Programas/Home_2.html');

}

if($config_final >= 4 && $config_final < 16){

header('Location: Programas/HelloWorld_2.html');

}

if($config_final >= 16 && $config_final < 82){

header('Location: Programas/Pixel_2.html');

}

if($config_final >= 83 && $config_final < 248){

header('Location: Programas/Action_2.html');

}

if($config_final = 0){

header('Location: Location: workstation_error.html  ');

}
}

/* RESOLUÇÃO 4K */

if($radio == "4k"){

/* NIVEL 1 */

if(!empty($_POST['variavel_word'])){
$variavel_word = 1;
} else {
$variavel_word = 0;
}

if(!empty($_POST['variavel_powerpoint'])){
$variavel_powerpoint = 1;
} else {
$variavel_powerpoint = 0;
}

if(!empty($_POST['variavel_excel'])){
$variavel_excel = 1;
} else {
$variavel_excel = 0;
}

/* NIVEL 2 */

if(!empty($_POST['variavel_android'])){
$variavel_android = 4;
} else {
$variavel_android = 0;
}

if(!empty($_POST['variavel_java'])){
$variavel_java = 4;
} else {
$variavel_java = 0;
}

if(!empty($_POST['variavel_mysql'])){
$variavel_mysql = 4;
} else {
$variavel_mysql = 0;
}

/* NIVEL 3 */

if(!empty($_POST['variavel_premiere'])){
$variavel_premiere = 16;
} else {
$variavel_premiere = 0;
}

if(!empty($_POST['variavel_sonyvegas'])){
$variavel_sonyvegas = 16;
} else {
$variavel_sonyvegas = 0;
}

if(!empty($_POST['variavel_photoshop'])){
$variavel_photoshop = 16;
} else {
$variavel_photoshop = 0;

}if(!empty($_POST['variavel_illustrator'])){
$variavel_illustrator = 16;
} else {
$variavel_illustrator = 0;
}

/* NIVEL 4 */

if(!empty($_POST['variavel_blender'])){
$variavel_blender = 83;
} else {
$variavel_blender = 0;
}

if(!empty($_POST['variavel_vmware'])){
$variavel_vmware = 83;
} else {
$variavel_vmware = 0;
}


$config_final = $variavel_vmware + $variavel_blender + $variavel_illustrator + $variavel_photoshop + $variavel_sonyvegas + $variavel_premiere + $variavel_mysql + $variavel_java + $variavel_android + $variavel_excel + $variavel_powerpoint + $variavel_word;


if($config_final >= 1 && $config_final <= 3 ){

header('Location: Programas/Home_3.html');

}

if($config_final >= 4 && $config_final < 16){

header('Location: Programas/HelloWorld_3.html');

}

if($config_final >= 16 && $config_final < 82){

header('Location: Programas/Pixel_3.html');

}

if($config_final >= 83 && $config_final < 248){

header('Location: Programas/Action_3.html');

}

if($config_final = 0){

header('Location: Location: workstation_error.html  ');

}
}

   ?>

   <a href= "../Programas/Home_1.html"></a>

</body>

</html>