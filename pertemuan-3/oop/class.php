<?php
//membuat class person
class Person{
//membuat property
public $nama;
public $alamat;
public $jurusan;

public function __construct($nama,$alamat,$jurusan)
{
    $this->nama = $nama;
    $this->alamat = $alamat;
    $this->jurusan = $jurusan;
}

//membuat method
function setNama($data){
    $this->nama = $data;
}

function setAlamat($data){
    $this->alamat = $data;
}

function setJurusan($data){
    $this->jurusan = $data;
}

//menampilkan
function getNama(){
    return $this->nama;
}

function getAlamat(){
    return $this->alamat;
}

function getJurusan(){
    return $this->jurusan;
}

}
//membuat object
$aufa = new Person('Aufa','Bekasi','Informatika');
echo $aufa->getNama();
echo $aufa->getAlamat();
echo $aufa->getJurusan();

// $aufa->nama ='aufa billah';
// $aufa->alamat ='depok';
// $aufa->jurusan ='teknik informatika';

// $aufa->setNama("aufa billllaah");
// $aufa->setAlamat("bekasi");
// $aufa->setJurusan("informasi");

