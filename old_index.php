<?php

require_once __DIR__. '/globals.php';

$uri     = "http://";
$path    = '../';
$folders = scandir($path);

$folder_main = explode('/', __DIR__);
$folder_main = $folder_main[sizeof($folder_main) - 1];
$path_root = str_replace($folder_main, '', __DIR__);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $app_name; ?></title>
	<link rel="stylesheet" href='./public/style.css'>
	<link rel="stylesheet" href='./public/Icons/remixicon.css'>
	<link rel="shortcut icon" href="public/favicon.ico" type="image/x-icon">
	<script src="./public/js/app.js" defer></script>

</head>


<body class="relative flex flex-col items-center justify-between bg-neutral-900 min-h-screen px-8" id="anim">

	<div id="particles-js" class="absolute top-0 left-0 w-full h-full opacity-10"></div>
	<!-- end bg anim -->
	<?php require './includes/header.php'; ?>
	<!-- end -->

	<main class="container min-h-96 mb-16">
		<!-- first -->
		<section class="flex flex-col items-center justify-center flex-wrap mt-20 text-4xl gap-2 p-2">
			<div class="flex flex-col items-center gap-2">
			
				<h1 class="font-bold text-neutral-600"><?php echo $app_lang->title_intro ?></h1>
				<p class="text-lg text-neutral-600"><?php echo $app_lang->descriction ?></p>
				
			</div>

		</section>
		<!-- end -->

		<section class="relative flex flex-col mt-20 min-h-96 border-2 border-neutral-800 rounded-md overflow-hidden">
			<!-- first -->
			<header class="flex items-center justify-between h-12 p-2 border-b-neutral-800 border-b-2  bg-neutral-900 text-neutral-600">
				<span class="flex items-center justify-center gap-2"><i class="bi bi-list-task text-2xl mt-1"></i> htdocs</span>
				<!-- end -->
				<div class="flex gap-2 items-center">
					<span class="size-3 rounded-full bg-yellow-500"></span>
					<span class="size-3 rounded-full bg-green-500"></span>
					<span class="size-3 rounded-full bg-red-500"></span>
				</div>

			</header>
			<!-- end -->

			<div class="flex text-neutral-400 grow bg-white/50 backdrop-blur-md">
				<div class="flex flex-col grow">

					<?php foreach ($folders as $folder): ?>


						<?php if (!is_file($path_root . $folder)): ?>

							<a href="<?php echo $uri . 'localhost/' . $folder ?>" target="_blank" class="flex items-center gap-2 p-2 h-8 border-b-2 grow border-b-white hover:bg-neutral-800/50 hover:text-orange-500 text-black" id="item-project">
								<i class="ri-folder-fill text-2xl text-amber-400 "></i><?php echo $folder; ?>

							</a>
						<?php endif ?>

					<?php endforeach; ?>

				</div>
				<!-- end -->
				<div class="relative flex items-center justify-center w-[50%] max-h-full ">
					<!-- first -->
					<iframe src="" id='viewport' class="overflow-hidden grow h-full bg-white"></iframe>
					<!-- end -->
					<div class="absolute w-full h-full top-0 left-0 bg-neutral-800 flex flex-col items-center justify-center" id="title-screen">
						<i class="ri-tv-2-line text-2xl"></i>
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