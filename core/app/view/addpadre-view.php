<?php

if(count($_POST)>0){
	$padre = new PersonaData();
	
	
	$padre->ref_nombre = $_POST["ref_nombre"];
	$padre->dpi = $_POST["ref_dpi"];
	$padre->ref_direccion = $_POST["ref_direccion"];
	$padre->ref_telefono = $_POST["ref_telefono"];
	$padre->ref_correo = $_POST["ref_correo"];
	//$padre->username = $_POST["username"];
	//$padre->password = sha1(md5($_POST["password"]));
	$padre->id_usuario = $_SESSION["persona_id"];
	//$padre->addPadre();
	
		  if(isset($_FILES["image"])){
		  
    $image = new Upload($_FILES["image"]);
	 
    if($image->uploaded){
      $image->Process("storage/padre/");
      if($image->processed){
        $padre->image = $image->file_dst_name;
        $pad= $padre->addPadre_with_image();
		
      }
    }else{

 $ad= $padre->addPadre();
  
    }
  }
  else{
	

  }
	
	
print "<script>window.location='index.php?view=padres';</script>";



}


?>