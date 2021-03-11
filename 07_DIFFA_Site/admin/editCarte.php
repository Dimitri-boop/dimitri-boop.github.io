<?php

require_once "../connection.php";

if(isset($_REQUEST['update_id']))
{
	try
	{
		$id = $_REQUEST['update_id']; //get "update_id" from index.php page through anchor tag operation and store in "$id" variable
		$select_carte = $db->prepare('SELECT * FROM carte WHERE id=:id'); //sql select query
		$select_carte->bindParam('id',$id);
		$select_carte->execute(); 
		$row = $select_carte->fetch(PDO::FETCH_ASSOC);
		extract($row);
	}
	catch(PDOException $e)
	{
		$e->getMessage();
	}
	
}

if(isset($_REQUEST['btn_update']))
{
	try
	{
		$cartePresentation	=$_REQUEST['cartePresentation'];	//textbox name "txt_name"

		$sliderTitre1	=$_REQUEST['sliderTitre1'];	//textbox name "txt_name"
		$sliderTitre2	=$_REQUEST['sliderTitre2'];	//textbox name "txt_name"
		$sliderTitre3	=$_REQUEST['sliderTitre3'];	//textbox name "txt_name"

		$sliderText1	=$_REQUEST['sliderText1'];	//textbox name "txt_name"
		$sliderText2	=$_REQUEST['sliderText2'];	//textbox name "txt_name"
		$sliderText3	=$_REQUEST['sliderText3'];	//textbox name "txt_name"


		$sliderImage1_file	= $_FILES["sliderImage1"]["name"];
		$type		= $_FILES["sliderImage1"]["type"];	//file name "txt_file"
		$size		= $_FILES["sliderImage1"]["size"];
		$temp		= $_FILES["sliderImage1"]["tmp_name"];
			
		$path="../images/".$sliderImage1_file; //set upload folder path
		
		$directory="../images/"; //set upload folder path for update time previous file remove and new file upload for next use
		
		if($sliderImage1_file)
		{
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') //check file extension
			{	
				if(!file_exists($path)) //check file not exist in your upload folder path
				{
					if($size < 5000000) //check file size 5MB
					{
						unlink($directory.$row['sliderImage1']); //unlink function remove previous file
						move_uploaded_file($temp, "../images/" .$sliderImage1_file);	//move upload file temperory directory to your upload folder	
					}
					else
					{
						$errorMsg="Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
					}
				}
				else
				{	
					$errorMsg="File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
				}
			}
			else
			{
				$errorMsg="Upload JPG, JPEG, PNG & GIF File Formate.....CHECK FILE EXTENSION"; //error message file extension
			}
		}
		else
		{
			$sliderImage1_file=$row['sliderImage1']; //if you not select new image than previous image sam it is it.
		}

		$sliderImage2_file	= $_FILES["sliderImage2"]["name"];
		$type		= $_FILES["sliderImage2"]["type"];	//file name "txt_file"
		$size		= $_FILES["sliderImage2"]["size"];
		$temp		= $_FILES["sliderImage2"]["tmp_name"];
			
		$path="../images/".$sliderImage2_file; //set upload folder path
		
		$directory="../images/"; //set upload folder path for update time previous file remove and new file upload for next use
		
		if($sliderImage2_file)
		{
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') //check file extension
			{	
				if(!file_exists($path)) //check file not exist in your upload folder path
				{
					if($size < 5000000) //check file size 5MB
					{
						unlink($directory.$row['sliderImage2']); //unlink function remove previous file
						move_uploaded_file($temp, "../images/" .$sliderImage2_file);	//move upload file temperory directory to your upload folder	
					}
					else
					{
						$errorMsg="Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
					}
				}
				else
				{	
					$errorMsg="File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
				}
			}
			else
			{
				$errorMsg="Upload JPG, JPEG, PNG & GIF File Formate.....CHECK FILE EXTENSION"; //error message file extension
			}
		}
		else
		{
			$sliderImage2_file=$row['sliderImage2']; //if you not select new image than previous image sam it is it.
		}

		$sliderImage3_file	= $_FILES["sliderImage3"]["name"];
		$type		= $_FILES["sliderImage3"]["type"];	//file name "txt_file"
		$size		= $_FILES["sliderImage3"]["size"];
		$temp		= $_FILES["sliderImage3"]["tmp_name"];
			
		$path="../images/".$sliderImage3_file; //set upload folder path
		
		$directory="../images/"; //set upload folder path for update time previous file remove and new file upload for next use
		
		if($sliderImage3_file)
		{
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') //check file extension
			{	
				if(!file_exists($path)) //check file not exist in your upload folder path
				{
					if($size < 5000000) //check file size 5MB
					{
						unlink($directory.$row['sliderImage3']); //unlink function remove previous file
						move_uploaded_file($temp, "../images/" .$sliderImage3_file);	//move upload file temperory directory to your upload folder	
					}
					else
					{
						$errorMsg="Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
					}
				}
				else
				{	
					$errorMsg="File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
				}
			}
			else
			{
				$errorMsg="Upload JPG, JPEG, PNG & GIF File Formate.....CHECK FILE EXTENSION"; //error message file extension
			}
		}
		else
		{
			$sliderImage3_file=$row['sliderImage3']; //if you not select new image than previous image sam it is it.
		}
	
		if(!isset($errorMsg))
		{
			$update_stmt=$db->prepare('UPDATE carte SET cartePresentation=:cartePresentation_up, sliderTitre1=:sliderTitre1_up, sliderTitre2=:sliderTitre2_up, sliderTitre3=:sliderTitre3_up, sliderText1=:sliderText1_up, sliderText2=:sliderText2_up, sliderText3=:sliderText3_up, sliderImage1=:file_up, sliderImage2=:file_up2, sliderImage3=:file_up3 WHERE id=:id'); //sql update query
			$update_stmt->bindParam(':cartePresentation_up',$cartePresentation);
			$update_stmt->bindParam(':sliderTitre1_up',$sliderTitre1);
			$update_stmt->bindParam(':sliderTitre2_up',$sliderTitre2);
			$update_stmt->bindParam(':sliderTitre3_up',$sliderTitre3);
			$update_stmt->bindParam(':sliderText1_up',$sliderText1);
			$update_stmt->bindParam(':sliderText2_up',$sliderText2);
			$update_stmt->bindParam(':sliderText3_up',$sliderText3);
			$update_stmt->bindParam(':file_up',$sliderImage1_file);	//bind all parameter
			$update_stmt->bindParam(':file_up2',$sliderImage2_file);	//bind all parameter
			$update_stmt->bindParam(':file_up3',$sliderImage3_file);	//bind all parameter
			$update_stmt->bindParam(':id',$id);
			 
			if($update_stmt->execute())
			{
				$updateMsg="File Update Successfully.......";	//file update success message
				header("refresh:3;panel_admin.php");	//refresh 3 second and redirect to index.php page
			}
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Le DIFFA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="../style.css">
	<meta name="author" content="Dimitri COURTIN">
	<link rel="icon" type="image/x-icon" href="../images/Diffa.png" />
	<script src="https://cdn.tiny.cloud/1/qz9ko3b6ipilik6m0jvk2b1let6sf8gwc554ew6m3tunq0gr/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>
	<main class="adminPanel">
		<div id="section1" class="container-fluid">
			<div class="langues"><a href="../index.html"><span class="flag-icon flag-icon-fr"></span></a>
				| <a href="#"><span class="flag-icon flag-icon-gb"></span></a></div>
			<img src="../images/Diffa.png">
		</div>
		<div class="container">
			<div class="retour"><a href="./panel_admin.php">Retour</a></div>

			<h1>Modification</h1>
			<div class="col-lg-12">

				<?php
			if(isset($errorMsg))
			{
				?>
				<div class="alert alert-danger">
					<strong>WRONG ! <?php echo $errorMsg; ?></strong>
				</div>
				<?php
			}
			if(isset($updateMsg)){
			?>
				<div class="alert alert-success">
					<strong>UPDATE ! <?php echo $updateMsg; ?></strong>
				</div>
				<?php
			}
			?>
				<form method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group row">
						<div class="col-sm-12">
							<label class="control-label">Presentation Carte</label>
							<textarea name="cartePresentation" class="form-control" rows="4"
								required><?php echo $cartePresentation; ?></textarea>
						</div>
				</div>

				<hr>

				<div class="form-group row">
						<div class="col-sm-12 col-md-6">
							<label class="control-label">Titre 1</label>
							<input type="text" name="sliderTitre1" class="form-control" value="<?php echo $row['sliderTitre1'] ?>" />
							<br>
							<label class="control-label">Texte 1</label>
							<textarea name="sliderText1" class="form-control" rows="7"
								required><?php echo $sliderText1; ?></textarea>
						</div>
						
						<div class="col-sm-12 col-md-6">
							<label class="control-label">Image 1</label>
							<p><img src="../images/<?php echo $row['sliderImage1']; ?>" height="" width="100%" /></p>
							<input type="file" name="sliderImage1" class="form-control" value="<?php echo $row['sliderImage1'] ?>" />
						</div>
				</div>

				<hr>

				<div class="form-group row">
						<div class="col-sm-12 col-md-6">
							<label class="control-label">Titre 2</label>
							<input type="text" name="sliderTitre2" class="form-control" value="<?php echo $row['sliderTitre2'] ?>" />
							<br>
							<label class="control-label">Texte 2</label>
							<textarea name="sliderText2" class="form-control" rows="7"
								required><?php echo $sliderText2; ?></textarea>
						</div>
						
						<div class="col-sm-12 col-md-6">
							<label class="control-label">Image 2</label>
							<p><img src="../images/<?php echo $row['sliderImage2']; ?>" height="" width="100%" /></p>
							<input type="file" name="sliderImage2" class="form-control" value="<?php echo $row['sliderImage2'] ?>" />
						</div>
				</div>

				<hr>

				<div class="form-group row">
						<div class="col-sm-12 col-md-6">
							<label class="control-label">Titre 3</label>
							<input type="text" name="sliderTitre3" class="form-control" value="<?php echo $row['sliderTitre3'] ?>" />
							<br>
							<label class="control-label">Texte 3</label>
							<textarea name="sliderText3" class="form-control" rows="7"
								required><?php echo $sliderText3; ?></textarea>
						</div>
						
						<div class="col-sm-12 col-md-6">
							<label class="control-label">Image 3</label>
							<p><img src="../images/<?php echo $row['sliderImage3']; ?>" height="" width="100%" /></p>
							<input type="file" name="sliderImage3" class="form-control" value="<?php echo $row['sliderImage3'] ?>" />
						</div>
				</div>

				<div class="form-group row">
						<div class="col-sm-offset-3 col-sm-9 m-t-15">
							<input type="submit" name="btn_update" class="btn btn-primary" value="Modifier">
							<a href="./panel_admin.php" class="btn btn-danger">Annuler</a>
						</div>
					</div>

				</form>

			</div>

		</div>
	</main>
	<script>
		tinymce.init({
		selector: 'textarea',
		tinycomments_mode: 'embedded',
	});
	</script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
		integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
		integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
	</script>
	<script src="./script.js"></script>
</body>

</html>