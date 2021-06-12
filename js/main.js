document.addEventListener('DOMContentLoaded', () => {
    logic();
});
function logic(){
// variable
let nav_manue_icon = document.querySelector('.mobile-icon');
let manue = document.querySelector('.manue');
let progress = document.querySelectorAll('.progress');






// Mobile-navbar-start
nav_manue_icon.addEventListener('click',(e)=>{
    nav_manue_icon.classList.toggle('active');
    manue.classList.toggle('active');
});
// Mobile-navbar-end
// Progress-bar-start
progress.forEach((e)=>{ 
    e.style.width = e.getAttribute('data-progress') + '%';
});
// Progress-bar-end




















































}