<?php
$rssSource = array(
"http://news.ifeng.com/rss/index.xml",
"http://www.52pojie.cn/forum.php?mod=rss"
);
$length = sizeof($rssSource);
for($i = 0;$i < $length;$i++) {
	$rssTmp = simplexml_load_file($rssSource[$i]);
	foreach($rssTmp->channel->item as $item) {
		echo "<h1><a href=\"".$item->link."\">".$item->title."</a></h1>";
	}
	echo "------------------------";
}?>

