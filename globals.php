<?php
$app_name = "myXampp";
$app_version = "v0.4";
$lang_ico = 'en';
$lang_text = 'en';
$app_lang = [];

$langFile = './config/lang.json';


if (!file_exists($langFile)) {
	die("Arquivo de idioma não encontrado.");
}


$language = json_decode(file_get_contents($langFile));
if (!is_array($language)) {
	die("Erro ao decodificar o JSON de idiomas.");
}


if (isset($_POST['lang'])) {
	$lang = $_POST['lang'];

	if ($lang === 'pt') {
		$langIndex = 0;
	} elseif ($lang === 'en') {
		$langIndex = 1;
	} else {
		$langIndex = 1;
	}

	setcookie('value', $langIndex, time() + (32 * 24 * 60 * 60));
	header('Location: /');
	exit;
}


$value = isset($_COOKIE['value']) ? (int)$_COOKIE['value'] : 0;
if (!isset($language[$value])) {
	$value = 0;
}

$app_lang = $language[$value];
$lang_ico = $value === 0 ? 'pt' : 'en';
$lang_text = $lang_ico;
