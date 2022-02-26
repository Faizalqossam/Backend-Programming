<?php 
class Animal{

    public $animals = array();

    public function __construct($animals)
    {
        $this->animals = ['Ikan','Ayam'];
    }

    public function index(){
    foreach ($this->animals as $this->index){
        echo "$this->index <br>";
    }
    }

    public function store($data){
        array_push($this->animals,$data);
    }

    public function update($index,$data){
        unset($this->animals[$index]);
        return $this->$index = array_push($this->animals,$data);
    }

    public function destroy($index){
        return array_splice($this->animals,$index,1);
    }
}


$animal = new Animal('');
// $animal->store('burung');
// $animal->store('anjing');
// $animal->store('kucing');
// $animal->update(4,'Kucing Anggora');
// $animal->destroy(1);
$animal->index();


