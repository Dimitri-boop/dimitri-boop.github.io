<?php

require_once "../connection.php";

if(isset($_REQUEST['update_id']))
{
	try
	{
		$id = $_REQUEST['update_id']; //get "update_id" from index.php page through anchor tag operation and store in "$id" variable
		$select_restaurant = $db->prepare('SELECT * FROM restaurant WHERE id =:id'); //sql select query
		$select_restaurant->bindParam(':id',$id);
		$select_restaurant->execute(); 
		$row = $select_restaurant->fetch(PDO::FETCH_ASSOC);
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
		$textPresentation	=$_REQUEST['textPresentation'];	//textbox name "txt_name"
		
		$restaurantTerrasse1_file	= $_FILES["restaurantTerrasse1"]["name"];
		$type		= $_FILES["restaurantTerrasse1"]["type"];	//file name "txt_file"
		$size		= $_FILES["restaurantTerrasse1"]["size"];
		$temp		= $_FILES["restaurantTerrasse1"]["tmp_name"];
			
		$path="../images/".$restaurantTerrasse1_file; //set upload folder path
		
		$directory="../images/"; //set upload folder path for update time previous file remove and new file upload for next use
		
		if($restaurantTerrasse1_file)
		{
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif' ) //check file extension
			{	
				if(!file_exists($path)) //check file not exist in your upload folder path
				{
					if($size < 5000000) //check file size 5MB
					{
						unlink($directory.$row['restaurantTerrasse1']); //unlink function remove previous file
						move_uploaded_file($temp, "../images/" .$restaurantTerrasse1_file);	//move upload file temperory directory to your upload folder	
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
			$restaurantTerrasse1_file=$row['restaurantTerrasse1']; //if you not select new im	age than previous image sam it is it.
		}
			
		$restaurantTerrasse2_file	= $_FILES["restaurantTerrasse2"]["name"];
		$type		= $_FILES["restaurantTerrasse2"]["type"];	//file name "txt_file"
		$size		= $_FILES["restaurantTerrasse2"]["size"];
		$temp		= $_FILES["restaurantTerrasse2"]["tmp_name"];
			
		$path="../images/".$restaurantTerrasse2_file; //set upload folder path
		
		$directory="../images/"; //set upload folder path for update time previous file remove and new file upload for next use
		
		if($restaurantTerrasse2_file)
		{
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif' ) //check file extension
			{	
				if(!file_exists($path)) //check file not exist in your upload folder path
				{
					if($size < 5000000) //check file size 5MB
					{
						unlink($directory.$row['restaurantTerrasse2']); //unlink function remove previous file
						move_uploaded_file($temp, "../images/" .$restaurantTerrasse2_file);	//move upload file temperory directory to your upload folder	
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
			$restaurantTerrasse1_file=$row['restaurantTerrasse2']; //if you not select new im	age than previous image sam it is it.
		}

		if(!isset($errorMsg))
		{
			$update_stmt=$db->prepare('UPDATE restaurant SET textPresentation=:textPresentation_up, restaurantTerrasse1=:file_up , restaurantTerrasse2=:file_up2 WHERE id=:id'); //sql update query
			$update_stmt->bindParam(':textPresentation_up',$textPresentation);
			$update_stmt->bindParam(':file_up',$restaurantTerrasse1_file);//bd all parameter
			$update_stmt->bindParam(':file_up2',$restaurantTerrasse2_file);//bd all parameter
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
			<a href="./panel_admin.php" class="retour">Retour</a>

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
						<label class="col-sm-3 control-label">Texte</label>
						<div class="col-sm-12">
							<textarea name="textPresentation" class="form-control" rows="3"
								required><?php echo $row['textPresentation']; ?></textarea>
						</div>
					</div>

				 <div class="row">
					 <div class="form-group col-md-6">
						<label class="col-sm-12 control-label">Image 1</label>
						<div class="col-sm-12 col-md-6">
							<p><img src="../images/<?php echo $row['restaurantTerrasse1']; ?>" height="250" width="auto" /></p>
							<input type="file" name="restaurantTerrasse1" class="form-control" value="<?php echo $row['restaurantTerrasse1'] ?>" />
						</div>
						
					</div>

					<div class="form-group col-md-6">
						<label class="col-sm-12 control-label">Image 2</label>
						<div class="col-sm-12 col-md-6">
							<p><img src="../images/<?php echo $row['restaurantTerrasse2']; ?>" height="250" width="auto" /></p>
							<input type="file" name="restaurantTerrasse2" class="form-control" value="<?php echo $row['restaurantTerrasse2'] ?>" />
						</div>
						
					</div></div> 	
					

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