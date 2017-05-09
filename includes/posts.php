<?php
// include('config.php');
if(isset($_GET['action'])){
	switch($_GET['action']){
		case 'login':{
			if(isset($_POST['Auth'])){
				$auth = $_POST['Auth'];
				if($admin['login'] == $auth['login'] && $admin['password']= $auth['password'])
				{
					setcookie('isAdmin',true, time() + 3600 * 24);

				}
			}
			break;
		}
	}
}
$result = [
	'type' => '',
	'message' => '',
];
$action = 'create';
$TourError = [
	'name' => [
		'class' => '',
		'message' => '',
		'append' => '',		
	],
	'title' => [
		'class' => '',
		'message' => '',
		'append' => '',		
	],
	'description' => [
		'class' => '',
		'message' => '',
		'append' => '',		
	],
	'image' => [
		'class' => '',
		'message' => '',
		'append' => '',		
	],
	'cost_per_day' => [
		'class' => '',
		'message' => '',
		'append' => '',		
	],
];
if(isset($_GET['create'])){
	$action = 'create';
	if($_GET['create'] == 'tour' && $_COOKIE['isAdmin'] == true){
		if(isset($_POST['Tour'])){
			$_tmp = [];
			foreach($_POST['Tour'] as $key=>$val){
				$_tmp[$key] = mysql_real_escape_string($val);
			}
			$tour_to_create = (object) $_tmp;
			// print_r($tour_to_create);
			$result = (object) $result;
			$image = isset($_FILES['tour_image']) ? $_FILES['tour_image'] : false;
			$same = mysql_num_rows(mysql_query("SELECT id FROM tour WHERE name = '".$tour_to_create->name."'")) !== 0 ? true : false;
			$post_error = false;
			if(!$tour_to_create->name || !isset($tour_to_create->name)){
				$post_eror = true;
				$result->type = 'error';
				$result->message = 'Name is required field';				
				$TourError['name']['class'] = 'error';
				$TourError['name']['message'] = 'Name is required field';
				$TourError['name']['append'] = true;
			}
			if(!isset($FILES['Tour']['image']["name"])){
				$post_eror = true;
				$result->type = 'error';
				$result->message = 'Image is required field';
				$TourError['image']['class'] = 'error';
				$TourError['image']['message'] = 'Image is required field';
				$TourError['image']['append'] = true;
			}
			if(!$tour_to_create->description){
				$TourError['description']['class'] = 'error';
				$TourError['description']['message'] = 'Description is required field';
				$TourError['description']['append'] = true;
				$post_eror = true;
				// $result->type = 'error';
				// $result->message = 'Image is required field';
			}
			if($same)
			{
				$post_eror = true;
				$result->type = 'error';
				$result->message = 'Tour already exists';
			}
			if(!$post_error){
				$path = 'upload/' . $tour_to_create->name . $image["name"];
				if(move_uploaded_file($image['tmp_name'], $path)){
					print_r($tour_to_create);
					$query = mysql_query("INSERT INTO tour (title,name,description,image,cost_per_day)
											VALUES ('".$tour_to_create->title."','".$tour_to_create->name."','".$tour_to_create->description."','".$path."','".$tour_to_create->cost_per_day."')");
					if($query)
					{
						$result->type = 'success';
						$result->message = 'Тур успешно добавлен';
					}
					else
					{
						$result->type = 'error';
						$result->message = 'Произошла ошибка mysql';
					}
				}
			}
			// print_r($_POST['Tour']);
			extract($_POST);
			// print_r($Tour);
			// exit(print(json_encode($result)));
		}
	}
}
if(isset($_GET['viewTour'])){
	$id = mysql_real_escape_string($_GET['viewTour']);
	$q = mysql_query('SELECT * FROM tour WHERE id = '.$id);
	$View = mysql_fetch_object($q);
	// extract($_tmp);
	include('_tour_view.php');
	exit();
}
if(isset($_GET['update'])){
	$action = 'update';
	if($_GET['update'] == 'tour' && $_COOKIE['isAdmin'] == true){
		if(isset($_GET['id'])){
			$query = mysql_query("SELECT * FROM tour WHERE id = ". mysql_real_escape_string($_GET['id']));
			if(mysql_num_rows($query) == 0)
				exit('Doesn\'t exist such tour');
			else
				$Tour = (mysql_fetch_array($query));
			// print_r($Tour);
		}
			if(isset($_POST['Tour'])){
			$_tmp = [];
			foreach($_POST['Tour'] as $key=>$val){
				$_tmp[$key] = mysql_real_escape_string($val);
			}
			$tour_to_create = (object) $_tmp;
			// print_r($tour_to_create);
			$result = (object) $result;
			$image = isset($_FILES['tour_image']) ? $_FILES['tour_image'] : false;
			$same = mysql_num_rows(mysql_query("SELECT id FROM tour WHERE name = '".$tour_to_create->name."'")) !== 0 ? true : false;
			$post_error = false;
			if(!$tour_to_create->name || !isset($tour_to_create->name)){
				$post_eror = true;
				$result->type = 'error';
				$result->message = 'Name is required field';				
				$TourError['name']['class'] = 'error';
				$TourError['name']['message'] = 'Name is required field';
				$TourError['name']['append'] = true;
			}
			if(!isset($FILES['Tour']['image']["name"])){
				$post_eror = true;
				$result->type = 'error';
				$result->message = 'Image is required field';
				$TourError['image']['class'] = 'error';
				$TourError['image']['message'] = 'Image is required field';
				$TourError['image']['append'] = true;
			}
			if(!$tour_to_create->description){
				$TourError['description']['class'] = 'error';
				$TourError['description']['message'] = 'Description is required field';
				$TourError['description']['append'] = true;
				$post_eror = true;
				// $result->type = 'error';
				// $result->message = 'Image is required field';
			}
			if($same)
			{
				$post_eror = true;
				$result->type = 'error';
				$result->message = 'Tour already exists';
			}
			if(!$post_error){
				$path = 'upload/' . $tour_to_create->name . $image["name"];
				if(move_uploaded_file($image['tmp_name'], $path)){
					print_r($tour_to_create);
					// TOCHANGE
					$query = mysql_query("UPDATE tour SET title = ".$tour_to_create->title.
						" SET name =".$tour_to_create->name.
						" SET description".$tour_to_create->description.
						" SET image".$path.
						" SET cost_per_day".$tour_to_create->cost_per_day.
						" WHERE id=".$_GET['id']);
					// $query = mysql_query("INSERT INTO tour (title,name,description,image,cost_per_day)
					// 						VALUES ('".$tour_to_create->title."','".$tour_to_create->name."','".$tour_to_create->description."','".$path."','".$tour_to_create->cost_per_day."')");
					if($query)
					{
						$result->type = 'success';
						$result->message = 'Тур успешно добавлен';
					}
					else
					{
						$result->type = 'error';
						$result->message = 'Произошла ошибка mysql';
					}
				}
			}
			// print_r($_POST['Tour']);
			extract($_POST);
				}
			// }
	}
}
if(isset($_GET['deleteTour'])){
	$id = mysql_real_escape_string($_GET['deleteTour']);
	mysql_query("DELETE FROM tour WHERE id = ".$id);
}
?>