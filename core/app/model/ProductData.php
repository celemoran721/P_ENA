<?php
class ProductData {
	public static $tablename = "product";

	public function ProductData(){
	    $this->id = "";
		$this->name = "";
		$this->image = "";

		$this->user_id = "";
		$this->presentation = "";
		$this->category_id = "";
		$this->price_in = "";
		$this->price_out = "";
		$this->created_at = "NOW()";
	}

	public function getCategory(){ return CategoryData::getByIds($this->category_id);}
    public function getumedida(){ return umedidaData::getById($this->presentation);}
	public function add(){
		$sql = "insert into ".self::$tablename." (name) ";
		$sql .= "value (\"$this->name\")";
		print_r($sql);
		return Executor::doit($sql);
	}
	public function add_with_image(){
		$sql = "insert into ".self::$tablename." (image,name) ";
		$sql .= "value (\"$this->image\",\"$this->name\")";
		print_r($sql);
		return Executor::doit($sql);
		
	}


	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto ProductData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set barcode=\"$this->barcode\",name=\"$this->name\",price_in=\"$this->price_in\",price_out=\"$this->price_out\",unit=\"$this->unit\",presentation=\"$this->presentation\",category_id=$this->category_id,inventary_min=\"$this->inventary_min\",description=\"$this->description\",is_active=\"$this->is_active\" where id=$this->id";
		Executor::doit($sql);
	}
	
		public function updateCant(){
		$sql = "update ".self::$tablename." set unit=unit-\"$this->unit\"    where id=$this->id";
		Executor::doit($sql);
	}
	
		public function updateCantNC($id, $cant){
		$sql = "update ".self::$tablename." set unit=unit+$cant where id=$id";
		Executor::doit($sql);
	}
	
		public function updateCantC(){
		$sql = "update ".self::$tablename." set unit=unit+\"$this->unit\", price_in=\"$this->price_in\" where id=$this->id";
		//print_r($sql);
		Executor::doit($sql);
	}
	
		public function updateCantE($id, $cant){
		$sql = "update ".self::$tablename." set unit=unit-$cant where id=$id";
		//print_r($sql);
		Executor::doit($sql);
	}

	public function del_category(){
		$sql = "update ".self::$tablename." set category_id=NULL where id=$this->id";
		Executor::doit($sql);
	}


	public function update_image(){
		$sql = "update ".self::$tablename." set image=\"$this->image\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ProductData());

	}
	
	public static function getByIds($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());

	}
	
	
	
	  	public static function getidMax(){
		$sql = "select 	MAX(id) AS maxid from ".self::$tablename;
		$query = Executor::doit($sql);
		$found = null;
		$data = new ProductData();
		
		while($r = $query[0]->fetch_array()){
			$data->id = $r['maxid'];
			//print_r $r['maxid'];
			//echo $r['maxid'];
			$found = $data;
			//print_r ($found);
			break;
		}
		return $found;
	}
	
	
	public static function getCantById($id){
		$sql = "select unit from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new ProductData();
		
		while($r = $query[0]->fetch_array()){
			$data->unit = $r['unit'];
			//print_r $r['maxid'];
			//echo $r['maxid'];
			$found = $data;
			//print_r ($found);
			break;
		}
		return $found;
	}	

	
		public static function getPreById($id){
		$sql = "select price_in from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new ProductData();
		
		while($r = $query[0]->fetch_array()){
			$data->price_in = $r['price_in'];
			//print_r $r['maxid'];
			//echo $r['maxid'];
			$found = $data;
			//print_r ($found);
			break;
		}
		return $found;
	}
	


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by name asc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}


	public static function getAllByPage($start_from,$limit){
		$sql = "select * from ".self::$tablename." where id>=$start_from limit $limit";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}


	public static function getLike($p){
		$sql = "select * from ".self::$tablename." where barcode like '%$p%' or name like '%$p%' or description like '%$p%' or id like '%$p%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}



	public static function getAllByUserId($user_id){
		$sql = "select * from ".self::$tablename." where user_id=$user_id order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}

	public static function getAllByCategoryId($category_id){
		$sql = "select * from ".self::$tablename." where category_id=$category_id order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}
	
		public static function getAllMin(){
		$sql = "select * from ".self::$tablename." where unit<=inventary_min order by name asc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProductData());
	}







}

?>