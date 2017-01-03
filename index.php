<?php
    include_once('lib/SQL.php');
    include_once('lib/curl_query.php');
    include_once('lib/simple_html_dom.php');

$html = curl_get('http://ntschool.ru/kursyi');

file_put_contents('1.html',$html);
