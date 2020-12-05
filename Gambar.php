<?php
	$id = $_POST['id'];
    $gambar = $_FILES['gambar']['name'];
    $asal = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($asal, 'upload/'.$gambar);

	$con = mysqli_connect("localhost","root","","dbsepeda");
	
	$sql = "UPDATE tbsepeda SET gambar='$gambar' WHERE id = '$id'";
	
    if($con->query($sql) === TRUE) {
		$json["respon"]=true;
	}else{
		$json["respon"]=false;
	}
	echo json_encode($json);
?>