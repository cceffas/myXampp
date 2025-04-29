<?php






if (isset($_GET['ok']) && !empty($_GET['name'])) {




	// $folder = __DIR__ .'/'.$_GET['name'];
	$folder = __DIR__ .'/testes';


	echo $folder;

	exec('sudo mkdir '.$folder);
	// echo "novo projecto criado com sucesso!";
	if (mkdir($folder,0755,true)) echo "criou a nova pasta";
	else echo "nao e possivel criar uma nova pasta";
}
