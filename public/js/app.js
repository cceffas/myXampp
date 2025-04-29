const items_projects = document.querySelectorAll('#item-project');
const viewport = document.querySelector('#viewport');
const btn = document.querySelector('#btn-create-p');
const modal_create = document.querySelector('#modal-add');
const screen = document.querySelector('#title-screen')


//

//language 
const icon_lang = document.getElementById('icon-lang')
const select_lang = document.getElementById('set-lang')


function showPopup(id) {


	document.getElementById(id).show()

}


select_lang.onchange=function(){

    icon_lang.src = `public/images/${this.value}.png`

    document.getElementById('change-lang').submit()

}




items_projects.forEach(function(item) {
    item.addEventListener('mouseover', () => {
        viewport.src = item.href;
        screen.style.opacity = '0';


    });

    item.addEventListener('mouseout', () => {

        screen.style.opacity = '1';

    });
});