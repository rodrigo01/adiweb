<?php
Class Uploads{

	var $onlyimages = false;
	var $addtime = false; 

	public function __construct(){
        $this->onlyimages = false;
		$this->addtime = false;
    }

	function doUpload($target_file,$target_dir = '',$file_name = ''){

		$itsgood = true;
		$result = array();
		if($target_dir==''){
			//$target_dir = '/';
		}

		if($file_name!=''){
			list($nfile,$efile) = explode('.', $_FILES[$target_file]["name"]);
			$file_name = str_replace(' ', '-', $file_name.'.'.$efile);
		}else{
			$file_name = str_replace(' ', '-', $_FILES[$target_file]["name"]);
		}

		if($this->addtime){
			list($nfile,$efile) = explode('.', $file_name);
			$file_name = $file_name.'_'.time().'.'.$efile;
		}

		// enlace para directorio de suvida
		$target_upload = $target_dir . basename($file_name);

		//veremos si aceptamos determinados archivos para el upload
		if($this->onlyimages){
			$check = getimagesize($_FILES[$target_file]["tmp_name"]);
		    if($check !== false) {
		    	// es una imagen
		    } else {
		    	// no es imagen
		    	$itsgood = false;
		    	$message = 'No es imagen';
		    }
		}

		// Check if file already exists
		if (file_exists($target_upload)) {
		    $itsgood = false;
		    $message = 'Ya existe archivo';
		}

		// Check if $uploadOk is set to 0 by an error
		if (!$itsgood) {
			$result = array('status'=>0,'message'=>"No paso las pruebas");
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES[$target_file]["tmp_name"], $target_upload)) {
		        $result = array('status'=>1,'message'=>"Archivo Subido correctamente",'filename'=>$file_name);
		    } else {
		        $result = array('status'=>0,'message'=>"Error en subida de archivo");
		    }
		}
		return $result;
	}
}

?>