<?php
require_once 'include.php';






if ( !empty( $_REQUEST[CONTROLLER] ) ) {
    $action =  $_REQUEST[CONTROLLER].'Controller';
}  else {
    $action = 'homePageController';
}

if ( !empty( $_REQUEST[FUNCTIONS] ) ) {

    $function = $_REQUEST[FUNCTIONS];

} else {
    $function =  'index';
}

if(!empty($_SESSION['bankWebsite_user_id'])){

	$bankWebsite_user_id = $_SESSION['bankWebsite_user_id'];
} else{
	$bankWebsite_user_id = '-1';
}
$bankWebsite_user_id = '-1';
/*	
 * 检查  用户是否登录 如未	登录  则  显示 登录页面  
 * 如登录  则显示 主页面
 */
 

if ( $bankWebsite_user_id == '-1' ) {

    $action = 'homePageController' ;
    $function = 'login';
}


$pageController = new $action( $smarty, $function );

die;

?>
