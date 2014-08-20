<?php
session_start();

//if ($_SESSION['user'] == 'client'){
	if(!isset($_GET['id'])){
			require_once'view/shell/head.php';
			require_once'view/shell/header.php';
			require_once'view/shell/home.php';
			require_once'view/shell/footer.php';


		}else{
		if($_GET['id'] == 1){
			require_once'view/shell/head.php';
			require_once'view/shell/header.php';
			require_once'view/sitelink/sitelink.php';
			


			require_once'view/shell/footer.php';
		}//if id = 1 SiteLink
		elseif ($_GET['id'] == 2) {
			require_once'view/shell/head.php';
			require_once'view/shell/header.php';
			require_once'view/yardi_rentcafe/rentcafe.php';

			require_once'view/shell/footer.php';

		}
		elseif ($_GET['id'] == 3){
			require_once'view/shell/head.php';
			require_once'view/shell/header.php';
			require_once'view/yardi_voyager/voyager.php';
			require_once'view/shell/footer.php';
		}
		elseif($_GET['id'] == 4){
			require_once'view/shell/head.php';
			require_once'view/shell/header.php';
			require_once'view/yardi_seniorliving/seniorliving.php';
			require_once'view/shell/footer.php';
		}
		elseif($_GET['id'] == 5){
			require_once'view/shell/head.php';
			require_once'view/shell/header.php';
			require_once'view/centershift/centershift.php';
			require_once'view/shell/footer.php';
		}
		else{
			require_once'view/shell/head.php';
			require_once'view/shell/header.php';
			require_once'view/shell/error.php';
			require_once'view/shell/footer.php';
		}
		
	}//if there is an id
//} Session == Client
//elseif($_SESSION['user'] == 'G5'){

//}//Session == G5
?>
