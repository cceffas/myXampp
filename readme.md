# myXampp

![EN](./public/images/en.png)  
**A modern and responsive interface that optimizes your productivity by making it easier to access projects in the XAMPP `htdocs` folder.**

---

![PT](./public/images/pt.png)  
**Uma interface moderna e responsiva que otimiza sua produtividade facilitando o acesso aos projetos na pasta `htdocs` do XAMPP.**

---

## 📸 Screenshots

![Screenshot](./public/screen.png)

---

## 🚀 Features

![EN](./public/images/en.png)  
- Automatic listing of projects in `htdocs`  
- Quick access via click  

![PT](./public/images/pt.png)  
- Listagem automática de projetos em `htdocs`  
- Acesso rápido por clique  
- Visualização em tempo real  

---

## 🛠️ How to Use

![EN](./public/images/en.png)

1. Download the project  
2. Move the `myXampp` folder to the `htdocs` directory of your XAMPP server  
3. Replace all code in the existing `htdocs/index.php` with the code below  

![PT](./public/images/pt.png)

1. Baixe o projeto  
2. Extraia o arquivo ZIP  
3. Mova a pasta `myXampp` para o diretório `htdocs` do servidor XAMPP  
4. Substitua todo o código do arquivo `htdocs/index.php` pelo código abaixo  

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
