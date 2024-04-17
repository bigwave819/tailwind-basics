const menu = document.getElementById('menu');
const burger = document.getElementById('burger');

menu.addEventListener('click', () => {
    if(burger.classList.contains('hidden')){
        burger.classList.remove('hidden');
    } else{
        burger.classList.add('hidden')
    }
})