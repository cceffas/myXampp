
<h1>myXampp</h1>
<img src='/public/images/en.png' alt='en translation'>
"A modern and responsive interface that optimizes your productivity by making it easier to access projects in the XAMPP htdocs folder."
<hr>
<img src='/public/images/pt.png' alt='en translation'> 
"Uma interface moderna e responsiva que otimiza sua produtividade facilitando o acesso a projetos na pasta htdocs do XAMPP."
<hr>
<h2>screenshots</h2>
<img src='/public/images/screen.png' alt='screen capture'>

<img src='/public/images/en.png' alt='en translation'>
<h3>features</h3>

- Automatic listing of projects in `htdocs`
- Quick access via click

<img src='/public/images/pt.png' alt='en translation'> 
<h3>funcionalidades</h3>

- Listagem automática de projetos em `htdocs`
- Acesso rápido por clique
- visualização em tempo real

<img src='/public/images/en.png' alt='en translation'>
<h4>how to use</h4>

-download the project
-move myXampp folder to htdocs directory of xampp server
-replace all the code in the index.php file located at the root of the htdocs folder with the code below

<img src='/public/images/pt.png' alt='en translation'> 
<h4>como usar</h4>

- baixe o projeto
- extraia o arquivo zip
- mova a pasta myXampp para o diretório htdocs do servidor xampp
- substitua todo o código no arquivo index.php localizado na raiz da pasta htdocs pelo código abaixo

```php

<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/myXampp/');
	exit;
?>
Something is wrong with the XAMPP installation :-(
```
