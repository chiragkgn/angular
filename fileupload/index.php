<?php 
ob_clean();
//echo "<pre>";print_r($_FILES[0]);exit;
//echo $_FILES[0]["name"]["tmp_name"];exit;
for($i=0;$i<count($_FILES);$i++){
	move_uploaded_file($_FILES[$i]["tmp_name"], "upload/" . $_FILES[$i]["name"]);
}
ob_clean();
?>
