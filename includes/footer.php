<footer class="flex items-center justify-center w-full min-h-16 bg-neutral-950/50 z-10">


	<div class="container flex items-center justify-center text-neutral-600">
		<a href="mailto:devcefas@gmail.com">
			&COPY; <?php echo $app_lang->footer_text; ?>
		</a>
	</div>

</footer>

<script src='./public/anim/particles.min.js'></script>

<script>
	particlesJS('particles-js', {
		"particles": {
			"number": {
				"value": 80,
				"density": {
					"enable": true,
					"value_area": 800
				}
			},
			"color": {
				"value": "#ffffff"
			},
			"shape": {
				"type": "circle",
				"stroke": {
					"width": 0,
					"color": "#000000"
				}
			},
			"opacity": {
				"value": 0.5
			},
			"size": {
				"value": 5,
				"random": true
			},
			"line_linked": {
				"enable": true,
				"distance": 150,
				"color": "#ffffff",
				"opacity": 0.4,
				"width": 1
			},
			"move": {
				"enable": true,
				"speed": 6,
				"direction": "none",
				"out_mode": "out"
			}
		},
		"interactivity": {
			"detect_on": "canvas",
			"events": {
				"onhover": {
					"enable": true,
					"mode": "repulse"
				},
				"onclick": {
					"enable": true,
					"mode": "push"
				},
				"resize": true
			}
		},
		"retina_detect": true
	});
</script>