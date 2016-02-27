<?php
include "./fetch.php";
$rssSourceName = $_GET['rssSourceName'];
if (!is_array($rssSourceName)) {
echo "错误！";
return 0;
}
else ;
foreach($rssSourceName as $rssName) {
$rssNameTmp = "./text/".$rssName.".php";
include_once $rssNameTmp;
$rssFunctionName = "get".$rssName."ItemURL";
$html = getRSS(call_user_func($rssFunctionName));
foreach($html as $r) {
	foreach($r as $a) {
		echo $a."<br />";
	}
}
}
?>
