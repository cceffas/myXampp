const items_projects = document.querySelectorAll('#item-project');

	const viewport = document.querySelector('#viewport');
	const btn = document.querySelector('#btn-create-p');
	const modal_create = document.querySelector('#modal-add');
	const screen = document.querySelector('#title-screen')





	items_projects.forEach(function(item) {
		item.addEventListener('mouseover', () => {
			viewport.src = item.href;
			screen.style.opacity = '0';


		});

		item.addEventListener('mouseout', () => {

			screen.style.opacity = '1';

		});
	});