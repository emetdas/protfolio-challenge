document.addEventListener('DOMContentLoaded', () => {
    logic();
});
function logic(){
// variable
let nav_manue_icon = document.querySelector('.mobile-icon');
let progress = document.querySelectorAll('.progress');






// Mobile-navbar-start
nav_manue_icon.addEventListener('click',(e)=>{
    nav_manue_icon.classList.toggle('active');
});
// Mobile-navbar-end
// Progress-bar-start
progress.forEach((e)=>{ 
    let progressdata = e.dataset.progress;
});
// Progress-bar-end




















































}