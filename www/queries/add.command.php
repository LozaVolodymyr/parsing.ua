<?php
	if (isset($_POST['id']))
	{
		if (isset($_SESSION['products_id'])) {
			array_push($_SESSION['products_id'], $_POST['id']);
		}
		else {
			$_SESSION['products_id'] = array($_POST['id']);
		}
	
		$data["message"] = 'Success, your game added to cart';

	} else {
		$data["message"] = 'Fail';
	}
?>