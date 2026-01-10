<?php

const BASE_URL = "/myXampp" . DIRECTORY_SEPARATOR;












function start_html5()
{
    return '
    <!DOCTYPE html>
    <html lang="en">';
}

function end_html5()
{
    return '</html>';
}

function include_partial(string $fileName)
{


    $partialPath = __DIR__ . "/../../resources/partials/" . $fileName . ".php";

    if (file_exists($partialPath)) {
        require_once $partialPath;
    }

}

function import_css()
{


    $content = file_get_contents(__DIR__ . "/../../public/style.css");



    return $content;




}



function get_folders()
{


    $base_folder = __DIR__ . "/../../../";
    $items = scandir($base_folder);

    $folders = array_filter($items, function ($item) use ($base_folder) {
        return is_dir($base_folder . $item) && !in_array($item, ['.', '..', 'vendor', 'myXampp']);
    });

    return $folders;

}