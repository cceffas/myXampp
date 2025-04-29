<header class=" flex items-center justify-center w-full h-16  text-white z-10" id="header">

	<div class="container flex justify-between items-center">


		<div class="flex gap-2 items-center">

			<span class="text-indigo-400 capitalize"><?php echo $app_name ?></span>
			<span class="text-sm"><?php echo $app_version ?></span>

		</div>



		<nav>
			<form action="globals.php" method="post" id="change-lang">
				<ul class="flex gap-6 capitalize ">
					<li>
						<div class="flex items-center justify-center gap-2">

							<button><img src="public/images/<?php echo $lang_ico ?>.png" id='icon-lang'></button>

							<select class="appearance-none border-none outline-none" name='lang' id='set-lang'>

								<?php if ($lang_text == 'pt'): ?>
									<option class="bg-black w-8 text-center border-none outline-none appearance-none" value='en'>en</option>
									<option class="bg-black w-8 text-center border-none outline-none appearance-none" value="pt" selected>pt</option>

								<?php else: ?>
									<option class="bg-black w-8 text-center border-none outline-none appearance-none" value='en' selected>en</option>
									<option class="bg-black w-8 text-center border-none outline-none appearance-none" value="pt" >pt</option>
								<?php endif ?>
							
								
							</select>
						</div>
					</li>
					<li><a href="/phpmyadmin" target="_blank" class=''>php-my-admin</a></li>
					<li>|</li>
					<li>
						<a href="https://github.com/cceffas/myXampp" target="_blank" class='flex items-center justify-center gap-2'>
							<i class="bi bi-github"></i> github</a>
					</li>

				</ul>
			</form>
		</nav>
		<!-- end -->

	</div>

</header>