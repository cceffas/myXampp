<?php

require './vendor/autoload.php';
require './globals.php';
require './components/button.php';

use app\Project;

$uri     = "http://";
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

<body class=" relative flex flex-col items-center bg-slate-900">

	<?php require './includes/header.php' ?>
	<!-- header leyout -->
	<main class="container min-h-screen ">


		<section class="flex items-center justify-center flex-wrap mt-20 text-4xl gap-2 p-2">

			<div class="flex flex-col items-center gap-2">

				<h1 class="font-bold text-slate-600">Welcome to MYXAMPP</h1>
				<p class="text-lg text-slate-600">A modern and responsive interface that optimizes your productivity by making it easier to access projects in the XAMPP htdocs folder</p>

			</div>
			<!-- end -->

		</section>
		<!-- end section intro -->
		<section class="relative mt-20 min-h-96 border-2 border-slate-800 rounded-md overflow-hidden">

			<header class=" flex items-center justify-between h-12 p-2 border-b-slate-800 border-b-2 bg-slate-800 text-slate-400">

				<span><i class="bi bi-folder-fill text-2xl"></i> htdocs</span>

				<div class="flex items-center gap-2 text-sm text-slate-200">

					<button class="flex items-center justify-center gap-2 bg-indigo-600 border border-indigo-500  h-8 p-2 rounded-md hover:bg-indigo-600/50 active:bg-indigo-600" id="btn-create-p"> <i class="bi bi-plus text-xl"></i> new</button>
					<!-- end -->
					<?= button('delete','btn-delete')?>

				</div>

			</header>
			<!-- end header -->

			<div class="flex flex-col text-slate-400">

				<?php foreach ($folders as $folder): ?>
					<a href="<?php echo $uri . 'localhost/' . $folder ?>" target="_blank" class="flex items-center gap-2 p-2 h-8 border-b-2 border-b-slate-800 hover:bg-slate-800/50" id='item-project'>
						<i class="bi bi-folder-fill text-2xl text-indigo-400"></i><?php echo $folder ?>
						<span class="ml-auto opacity-50 text-sm"><?php echo  fileatime($folder) ?></span>
					</a>
				<?php endforeach ?>

			</div>
			<!-- end -->



		</section>


		<dialog id="modal-add" class="backdrop-blur ">
			<div class="h-96 w-96 bg-white rounded-md "></div>
		</dialog>

	</main>



	<div class="mt-20 absolute top-0 p-4 transition-all rounded-full bg-white shadow-2xl shadow-slate-500 z-10 hidden h-96 w-96 grow overflow-hidden" id="screen">



		<iframe src="" id="viewport" class="h-full w-full rounded-full bg-slate-500"></iframe>

	</div>
	<!-- end screen -->



	<script>
		const items_projects = document.querySelectorAll('#item-project')
		const screen = document.querySelector('#screen')
		const viewport = document.querySelector('#viewport')
		const btn = document.querySelector('#btn-create-p')
		const modal_create = document.querySelector('#modal-add')



		btn.addEventListener('click', () => {




			modal_create.showModal()

		})



		document.onmousemove = (e) => {

			screen.style.top = e.offsetY + 'px'
		}

		items_projects.forEach(function(item) {


			// .addEventListener("mouse")
			item.addEventListener('mouseover', () => {


				viewport.src = item.href

				if (screen.classList.contains('hidden')) {

					screen.classList.remove('hidden')

				}

			})

			item.addEventListener('mouseout', () => {


				if (!screen.classList.contains('hidden')) {

					screen.classList.add('hidden')

				}

			})
		})
	</script>
</body>

</html>