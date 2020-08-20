<?php

if(count($_POST)>0){
	$profesor = PersonaData::getById($_POST["id_profesor"]);
	$profesor->nombres = $_POST["nombres"];
	$profesor->apellidos = $_POST["apellidos"];
	$profesor->ref_dpi = $_POST["ref_dpi"];
	$profesor->id_rol = $_POST["id_rol"];
	$profesor->profesion = $_POST["profesion"];
	$profesor->fecha_nac = $_POST["sd"];
	$profesor->edad = $_POST["edad"];
	$profesor->direccion = $_POST["direccion"];
	$profesor->telefono_1= $_POST["telefono_1"];
	$profesor->telefono_2 = $_POST["telefono_2"];
	$profesor->email = $_POST["email"];
	$profesor->username = $_POST["username"];
	$profesor->ref_nombre = $_POST["ref_nombre"];
	$profesor->ref_correo = $_POST["ref_correo"];
	$profesor->ref_telefono = $_POST["ref_telefono"];
	$profesor->user_id = $_SESSION["persona_id"];
	//$profesor->updateP();
	
		  if(isset($_FILES["image"])){
		  
    $image = new Upload($_FILES["image"]);
	 
    if($image->uploaded){
      $image->Process("storage/profesor/");
      if($image->processed){
        $profesor->image = $image->file_dst_name;
        $prof= $profesor->updateP_with_image();
		
      }
    }else{

 $prof= $profesor->updateP();
  
    }
  }
  else{
	

  }


//print "<script>window.location='index.php?view=profesores';</script>";


}


?>