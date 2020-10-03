
<?php

if(count($_POST)>0){
	
	$usuario = new PersonaData();
	$usuario->nombres = $_POST["nombres"];
	$usuario->apellidos = $_POST["apellidos"];
	$usuario->dpi = $_POST["dpi"];
	$usuario->profesion = $_POST["profesion"];
	$usuario->fecha_nac = $_POST["sd"];
	$usuario->direccion = $_POST["direccion"];
	$usuario->telefono_1= $_POST["telefono_1"];
	$usuario->correo = $_POST["correo"];
	$usuario->username = $_POST["username"];
	$usuario->password = sha1(md5($_POST["password"]));
	$usuario->id_usuario = $_SESSION["persona_id"];
	//$usuario->addP();
	
	
	    if(isset($_FILES["image"])){
    $image = new Upload($_FILES["image"]);
    if($image->uploaded){
      $image->Process("storage/personal/");
      if($image->processed){
        $usuario->image = $image->file_dst_name;
        $uss = $usuario->addPersonal_with_image();
      }
    }else{

  $uss= $usuario->addPersonal();
    }
  }
print "<script>window.location='index.php?view=personal';</script>";


}


?>