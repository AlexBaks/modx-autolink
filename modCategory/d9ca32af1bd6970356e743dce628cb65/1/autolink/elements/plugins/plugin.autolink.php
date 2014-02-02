<?php
$autolink = $modx->getService('autolink','autolink',$modx->getOption('autolink_core_path',null,$modx->getOption('core_path').'components/autolink/').'model/autolink/',$scriptProperties);
if (!($autolink instanceof autolink)) return '';

/* build query */
$c = $modx->newQuery('autolinkItem');
$c->limit(10);
$items = $modx->getCollection('autolinkItem',$c);

/* iterate through items */

$list = array();

/* @var autolinkItem $item */

foreach ($items as $item) {
    $itemArray = $item->toArray();
    $arr['name'] = $itemArray['name'];
    $arr['link'] = '<a href="'.$itemArray['description'].'">'.$itemArray['name'].'</a>';
    $nameLink[] = $arr;
}
$output = $modx->resource->_output;

preg_match_all('#{autoLink}(.+?){/autoLink}#is', $output, $arr);

foreach ($arr[1] as $val)
{
    $preName[] = '{autoLink}'.$val.'{/autoLink}';
    //$redyLink[] = str_ireplace($name,$link,$val);
    $r = $val;
    foreach ($nameLink as $val2)
    {
        $r = preg_replace("#".$val2['name']."#ius", $val2['link'], $r);
    }
    $redyLink[] = $r;
}
$output = str_replace($preName,$redyLink,$output);
$modx->resource->_output = $output;

/*
switch ($modx->event->name) {

	case 'OnManagerPageInit':
		$cssFile = MODX_ASSETS_URL.'components/autolink/css/mgr/main.css';
		$modx->regClientCSS($cssFile);
		break;
        
    case 'OnBeforePageRender':
    	echo '!!!!';
		break;    

}*/