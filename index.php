<?php
    include_once('lib/SQL.php');
    include_once('lib/curl_query.php');
    include_once('lib/simple_html_dom.php');

$html = curl_get('http://ntschool.ru/kursyi');
$dom = str_get_html($html);

$courses = $dom -> find('.courses-list--item-body');



foreach($courses as $course){
    echo $course -> plaintext."<br />";
}