<?php
include "./fetch.php";
$rssSourceName = $_GET['rssSourceName'];
if (!is_array($rssSourceName)) {
echo "错误！";
return 0;
}
else ;
foreach($rssSourceName as $rssName) {
$rssName = "./text/".$rssName;
include $rssName;
$html = getRSS(getItemURL());
foreach($html as $r) {
	foreach($r as $a) {
		echo $a."<br />";
	}
}
}
?>
