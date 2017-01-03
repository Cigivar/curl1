<?php
    include_once('lib/SQL.php');
    include_once('lib/curl_query.php');
    include_once('lib/simple_html_dom.php');

$html = curl_get('http://www.avalon.ru/Courses/Design/Courses/?gclid=CKa5h6OMp9ECFciCsgodJHACoQ');
$dom = str_get_html($html);

$courses = $dom -> find('.emphasis');



foreach ($courses as $course){
    $a = $course -> find('a',0);
   echo $a -> href.'<br>'; 
    
    $one = curl_get('http://www.avalon.ru/Courses/Design/Courses/?gclid=CKa5h6OMp9ECFciCsgodJHACoQ'.$a -> href);
    
    $one_dom = str_get_html($one);
    
    $cost = $one_dom -> find('.money',0);
    echo $a -> plaintext .''.$cost -> plaintext;
    
    break;
    
    
}
