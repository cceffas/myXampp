<?php

require './vendor/autoload.php';
require './globals.php';


$uri     = "http://";
$path    = '../';
$folders = scandir($path);

$folder_main= explode('/',__DIR__);
$folder_main=$folder_main[sizeof($folder_main)-1];
$path_root = str_replace($folder_main,'', __DIR__);


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $app_name; ?></title>
	<link rel="stylesheet" href='./public/style.css'>
	<link rel="stylesheet" href='./public/font/bootstrap-icons.min.css'>
	<script src="./public/js/app.js" defer></script>
</head>


<body class="relative flex flex-col items-center justify-between bg-slate-900 h-screen" id="anim">

	<div id="particles-js" class="absolute top-0 left-0 w-full h-full opacity-10"></div>
	<!-- end bg anim -->
	<?php require './includes/header.php'; ?>
	<!-- end -->

	<main class="container grow">
		<!-- first -->
		<section class="flex items-center justify-center flex-wrap mt-20 text-4xl gap-2 p-2">
			<div class="flex flex-col items-center gap-2">
				<h1 class="font-bold text-slate-600">Welcome to MYXAMPP</h1>
				<p class="text-lg text-slate-600">A modern and responsive interface that optimizes your productivity by making it easier to access projects in the XAMPP htdocs folder</p>
			</div>
		</section>
		<!-- end -->

		<section class="relative flex flex-col mt-20 min-h-96 border-2 border-slate-800 rounded-md overflow-hidden">
			<!-- first -->
			<header class="flex items-center justify-between h-12 p-2 border-b-slate-800 border-b-2 bg-white text-slate-600">
				<span class="flex items-center justify-center gap-2"><i class="bi bi-list-task text-2xl mt-1"></i> htdocs</span>
				<!-- end -->
				<div class="flex gap-2 items-center">
					<span class="size-3 rounded-full bg-yellow-500"></span>
					<span class="size-3 rounded-full bg-green-500"></span>
					<span class="size-3 rounded-full bg-red-500"></span>
				</div>

			</header>
			<!-- end -->

			<div class="flex text-slate-400 grow">
				<div class="flex flex-col grow">

					<?php foreach ($folders as $folder): ?>


						<?php if (!is_file($path_root . $folder)): ?>

							<a href="<?php echo $uri . 'localhost/' . $folder ?>" target="_blank" class="flex items-center gap-2 p-2 h-8 border-b-2 grow border-b-slate-800 hover:bg-slate-800/50" id="item-project">
								<i class="bi bi-folder-fill text-2xl text-indigo-400"></i><?php echo $folder; ?>
								
							</a>
						<?php endif ?>

					<?php endforeach; ?>

				</div>
				<!-- end -->
				<div class="relative flex items-center justify-center w-[50%] max-h-full ">
					<!-- first -->
					<iframe src="" id='viewport' class="overflow-hidden grow h-full bg-white"></iframe>
					<!-- end -->
					<div class="absolute w-full h-full top-0 left-0 bg-slate-800 flex flex-col items-center justify-center" id="title-screen">
						<i class="bi bi-globe text-2xl"></i>
						<h1 class="text-xl font-bold capitalize">view page</h1>
					</div>
					<!-- en -->
				</div>
				<!-- end -->
			</div>

		</section>
		<!-- end -->

	</main>

	<?php require './includes/footer.php'; ?>
	<!-- end  -->

</body>

</html>