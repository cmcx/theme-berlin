<?php
function mbc_citation($item){
        $publication = option('site_title');
        
        $title = metadata($item,array('Dublin Core','Title'));
        
	$source = metadata($item,array('Dublin Core','Source'));

	$biblio = metadata($item, array('Dublin Core', 'Bibliographic Citation'));
        
        $today = date("F j, Y");
        
	$url = WEB_ROOT.'/items/show/'.$item->id;

	$citation = $biblio . '<em> ' . $publication . '</em>, ' . 'accessed ' . $today . ', ' . $url . ' test.';

        return $citation;
}
?>
