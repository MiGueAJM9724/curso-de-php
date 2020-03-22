<?php
require_once 'CRUD.php';
class Animal extends CRUD{
  private $id;
  private $name;
  private $especie;
  const TABLE= 'animal';
  private $pdo;
  public function __construct(){
    parent::__construct(self::TABLE);
    $this->pdo = parent::conexion();
  }
  public function __set($name, $value){
    $this->$name=$value;
  }
  public function get($name){
    return $this->$name;
  }
  public function create(){
    try{
      $stm=$this->pdo->prepare("Insert Into ".self::TABLE."(name, especie) Values(?, ?)");
      $stm->execute(array($this->name,$this->especie));
    }catch (PDOException $e) {
      echo $e->getMessage();
    }


  }
  public function update(){
    try{
      $stm=$this->pdo->prepare("Update ".self::TABLE."Set name= ?, especie= ?");
      $stm->execute(array($this->name,$this->especie));
    }catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
 ?>
