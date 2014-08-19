<?php
if(!empty($_GET['id'])){
	if($_GET['id'] == 1){
		require_once'head.php';



		require_once'footer.php';
	}//if id = 1 SiteLink
	else {
		require_once'head.php';
		require_once'header.php';
		require_once'home.html';

		require_once'footer.php';
	}
}//if there is an id
?>
