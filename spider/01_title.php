<?php
//永不超时
set_time_limit(0);
include __DIR__.'/function.php';

$url = 'https://sz.ke.com/?utm_source=baidu&utm_medium=pinzhuan&utm_term=biaoti&utm_content=biaotimiaoshu&utm_campaign=wyshenzhen';

$html = http_request($url);

//echo $html;
//$preg = '/<title>(.*)<\/title>/iUs';
//$preg = '#<title>(.*)</title>#iUs';
//preg_match_all($preg,$html,$arr);
//print_r($arr);
$dom = new DOMDocument();

//忽略不严格模式
libxml_use_internal_errors(1);
$dom->loadHTML($html);
//转为xpath对象
$xpath = new DOMXPath($dom);
//查询路径
/*$query = '/html/head/title';

$nodeList = $xpath->query($query);

foreach ($nodeList as $item){
    echo $item->nodeValue;
}*/

//查询所有的图片
//$query = '//img/@data-original';//不论img的层级
$query = '/html/body/div[3]/div[2]/div/div[2]/div[2]//img/@data-original';
$nodeList = $xpath->query($query);

foreach ($nodeList as $item){
    echo $item->nodeValue . "\n";
}
