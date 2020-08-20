<?php
 
	 

    		

if(count($_POST)>0){
  $product = new ProductData();

  $product->name = $_POST["name"];
 



  if(isset($_FILES["image"])){
    $image = new Upload($_FILES["image"]);
    if($image->uploaded){
      $image->Process("storage");
      if($image->processed){
        $product->image = $image->file_dst_name;
        $prod = $product->add_with_image();
      }
    }else{

  $prod= $product->add();
    }
  }
  else{
  $prod= $product->add();

  }






//print "<script>window.location='index.php?view=products';</script>";


}


?>