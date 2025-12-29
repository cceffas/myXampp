<?php

const BASE_URL = "/myXampp" . DIRECTORY_SEPARATOR;











function import_css()
{


    $content = file_get_contents(__DIR__ . "/../../public/style.css");



    return $content;




}