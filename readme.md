
#myXampp

![image](textLogo.png)

"A modern and responsive interface that optimizes your productivity by making it easier to access projects in the XAMPP htdocs folder."



##screenshots


###features

- Automatic listing of projects in `htdocs`
- Quick access via click

####how to use

-download the project
-move myXampp folder to htdocs directory of xampp server
-replace all the code in the index.php file located at the root of the htdocs folder with the code below

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
