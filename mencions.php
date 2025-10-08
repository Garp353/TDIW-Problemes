<?php
  $graus = array(
    array("id"=>1,"nom"=>"Eng. Informàtica"), 
    array("id"=>2,"nom"=>"Intel.ligència Artificial"),
    array("id"=>3,"nom"=>"Telecos de Sistemes"),
    array("id"=>4,"nom"=>"Telecos d'Electrònica"),
    array("id"=>5,"nom"=>"Enginyeria Química")
  );
  $mencions = array( 
    1=> array(
      array("id"=>1,"nom"=>"Enginyeria del software"), 
      array("id"=>2,"nom"=>"Enginyeria de computadors"),
      array("id"=>3,"nom"=>"Computació"),
      array("id"=>4,"nom"=>"Tecnologies de la informació")
    ),
    2=> array(
      array("id"=>5,"nom"=>"Sistemes Analogics"),
      array("id"=>6,"nom"=>"Sistemes digitals"),
      array("id"=>7,"nom"=>"Xarxes de telecomunicacions"),
      array("id"=>8,"nom"=>"Processament de senyals")
    ),
    3=> array(
      array("id"=>9,"nom"=>"Electrònica analògica"),
      array("id"=>10,"nom"=>"Microelectrònica"),
      array("id"=>11,"nom"=>"Dispositius electrònics"),
      array("id"=>12,"nom"=>"Circuits integrats")
    ),
    4=> array(
      array("id"=>13,"nom"=>"Processos químics"),
      array("id"=>14,"nom"=>"Enginyeria de reactors"),
      array("id"=>15,"nom"=>"Operacions unitàries"),
      array("id"=>16,"nom"=>"Control de processos")
    )
  );

  $grau = $_REQUEST['grau'];
  //print_r($graus[$grau]);


  // enviamos las opcions del grau seleccionat en formato texto
  foreach ($mencions[$grau] as $valor) {
    echo "<option value=".$valor['id'].">".$valor['nom']."</option>";
  }

?>