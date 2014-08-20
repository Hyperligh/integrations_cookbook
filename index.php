<?php
//if session == client 
if(!isset($_GET['id'])){
		require_once'head.php';
		require_once'header.php';
		require_once'home.html';
		require_once'footer.php';

	}else{
	if($_GET['id'] == 1){
		require_once'head.php';
		require_once'header.php';
		echo"<h1>Inside SITELINK</h1>";
		


		require_once'footer.php';
	}//if id = 1 SiteLink
	elseif ($_GET['id'] == 2) {
		require_once'head.php';
		require_once'header.php';
		echo"<h1>Inside RentCafe</h1>";

		require_once'footer.php';

	}
	
}//if there is an id
//else if session == g5 
?>
