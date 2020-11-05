<?php
	//print_r($_POST["id_padre"]);

if(count($_POST)>0){
	
	$usuario = PersonaData::getById($_POST["id_personal"]);
	$usuario->nombres = $_POST["nombres"];
	$usuario->apellidos = $_POST["apellidos"];
	$usuario->dpi = $_POST["dpi"];
	$usuario->profesion= $_POST["profesion"];
	$usuario->direccion = $_POST["direccion"];
	$usuario->telefono_1= $_POST["telefono_1"];
	$usuario->correo= $_POST["correo"];
	$usuario->id_usuario = $_SESSION["persona_id"];
	//$usuario->id_padre = $_POST["id_padre"];
	//$usuario->ref_parentesco = $_POST["ref_parentesco"];
	//$profesor->updateP();
	
		  if(isset($_FILES["image"])){
		  
    $image = new Upload($_FILES["image"]);
	 
    if($image->uploaded){
      $image->Process("storage/personal/");
      if($image->processed){
        $usuario->image = $image->file_dst_name;
        $al= $usuario->updatepersonal_with_image();
		
						
      }
    }else{

 $al= $usuario->updatePersonal();
 						
  
    }
  }
  else{
	

  }


//print "<script>window.location='index.php?view=usuarios';</script>";

}


print "<script>window.location='index.php?view=personal';</script>";
?>
