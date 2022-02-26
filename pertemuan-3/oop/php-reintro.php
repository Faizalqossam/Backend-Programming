<?php

// perulangan
// menampilkan angka 1-9 

#3 statement
for ($i= 0; $i <10 ; $i++ ){
    echo $i;
}
echo "</br>";

//foreach looping

$animals = ['kucing','ayam','ikan'];

// foreach ($animals as $animal);

function search_array($data){
    for ($i = 0; $i < count($animals); $i++) {
        if ('kucing' == $animals[$i]) {
            echo $i;
        }
}
}