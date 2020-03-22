<?php
  //echo "Hola mundo ", "adios";//nos permite mustrar varias cadenas
  //print "hola mundo"; //Solo nos permite mostrar una cadena y retorna un valor(1)
  //echo print "Hola mundo";
  echo "Hola";
  echo "Adios";
  //Variables y constantes
  $number = 13;
  $rosa = 'Color'; //variable de ambito local
  function test() {
    global $rosa; //variable global
    echo $rosa;
  }
  //constantes
  const PAHT = 'curso/index.php'; //tiempo de compilaciòn
  echo PAHT;
  test();
  defined('PAHT2', 'curso/index.php'); //define en tiempo de ejecucion
  echo PAHT2;
  /*
  */
  require_once 'animal.php';
  $animal = new animal();
  $animal->getAll();
  print_r("$animal->getAll();");//imprime arreglos
  $animal->id= 2;
  $animal->name="oso";
  $animal->especie="gato";
  $animal->create();
  //$animal->delete(5);
  $animal->update();
?>
