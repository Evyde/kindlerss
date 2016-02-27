<?php
function getRSS($URL) {
$rssSource = $URL;
$rssLink = array();
$rssTitle = array();
$rssTmp = simplexml_load_file($rssSource);
foreach($rssTmp->channel->item as $item) {
	array_push($rssLink,$item->link);
	array_push($rssTitle,$item->title);
}
	return array($rssTitle,$rssLink);
}?>

