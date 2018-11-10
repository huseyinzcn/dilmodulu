<?php 
@session_start();
	if ($_GET['dil']) {
		$dil = $_GET["dil"];
	if($dil == "tr" || $dil=="ar" || $dil=="en"){
		$_SESSION["dil"] = $dil;
	}else{
		$_SESSION["dil"] = "tr";
		echo '<meta http-equiv="refresh" content="0;URL=anasayfa.html">';
	}
	}
	

$dil = substr(str_replace(array(""," ","-","/","\n","\r","\t"),"",trim(strtolower($_SESSION["dil"]))),0,2);
if(!$dil || $dil=="" || $dil==" " || !$_SESSION["dil"] || $_SESSION["dil"]=="" || $_SESSION["dil"]==" " || $dil=="tr"){
$lehce='';
require "dil/tr.php";
}
else if($dil=="en"){
$lehce='en';
require "dil/".$dil.".php";
}else{
$lehce='ar';
require "dil/".$dil.".php";
}
?>