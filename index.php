<?php
    require './globals.php';

    // return var_dump($_SERVER)
?>
<?php
	$uri="http://";
    $path    = '../';
    $folders = '../';
    $folders = scandir($path);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $app_name ?></title>
	<link rel="stylesheet" href='./public/style.css'>
	<link rel="stylesheet" href='./public/font/bootstrap-icons.min.css'>
</head>

<body class="flex flex-col items-center">

	<?php require './includes/header.php'?>
	<!-- header leyout -->
	<main class="container min-h-screen">


		<section class="flex items-center flex-wrap mt-20 text-4xl gap-2 p-2">

			<img src="textLogo.png" alt="logo">
			<p></p>
			<p class="mt-5">Apache + MariaDB + PHP + PERl</p>

		</section>
		<!-- end section intro -->
		<section class="mt-20 min-h-96 border-2 border-slate-300 rounded-md overflow-hidden">

			<header class=" flex items-center h-12 p-2 border-b-slate-300 border-b-2 bg-slate-200">

				<span class="capitalize text-slate-400">your projects...</span>

			</header>
			<!-- end header -->

			<div class="flex flex-col text-slate-400">

				<?php foreach ($folders as $folder): ?>
					<a href="<?=$uri.'localhost/'.$folder?>" class="flex items-center gap-2 p-2 h-8 border-b-2 border-b-slate-300 hover:bg-slate-200">
						<i class="bi bi-folder-symlink-fill text-xl text-sky-400"></i><?php echo $folder?>

						</a>
				<?php endforeach?>


			</div>



		</section>





	</main>



</body>

</html>