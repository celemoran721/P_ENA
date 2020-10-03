
<?php

if(count($_POST)>0){
	
	$profesor = new PersonaData();
	$profesor->nombres = $_POST["nombres"];
	$profesor->apellidos = $_POST["apellidos"];
	$profesor->dpi = $_POST["dpi"];
	$profesor->id_rol = $_POST["id_rol"];
	$profesor->profesion = $_POST["profesion"];
	$profesor->fecha_nac = $_POST["sd"];
	$profesor->direccion = $_POST["direccion"];
	$profesor->telefono_1= $_POST["telefono_1"];
	$profesor->telefono_2 = $_POST["telefono_2"];
	$profesor->correo = $_POST["correo"];
	$profesor->username = $_POST["username"];
	$profesor->password = sha1(md5($_POST["password"]));
	$profesor->ref_nombre = $_POST["ref_nombre"];
	$profesor->ref_telefono = $_POST["ref_telefono"];
	$profesor->ref_correo = $_POST["ref_correo"];
	$profesor->id_usuario = $_SESSION["persona_id"];
	//$profesor->addP();
	
	
	    if(isset($_FILES["image"])){
    $image = new Upload($_FILES["image"]);
    if($image->uploaded){
      $image->Process("storage/profesor/");
      if($image->processed){
        $profesor->image = $image->file_dst_name;
        $prof = $profesor->addP_with_image();
      }
    }else{

  $prof= $profesor->addP();
    }
  }
print "<script>window.location='index.php?view=profesores';</script>";


}


?>