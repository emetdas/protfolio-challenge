document.addEventListener('DOMContentLoaded', () => {
  logic();
});
function logic() {
  // variable-start
  let nav_link = document.querySelectorAll('.manue > li');
  let nav_links = document.querySelectorAll('.manue li a');
  let nav_manue_icon = document.querySelector('.mobile-icon');
  let manue = document.querySelector('.manue');
  let progress = document.querySelectorAll('.progress');
  let protfolio_links = document.querySelector(
    '.protfolio-links'
  );
  let protfolio_link = document.querySelectorAll(
    '.protfolio-link'
  );
  let protfolio_item = document.querySelectorAll('.portfolio-item');
  let tslider =document.querySelector('.testimonial-slider');
  let taleft =document.querySelector('.arrow-left');
  let taright =document.querySelector('.arrow-right');
  let contact_body = document.querySelector('.contact');
  let contact_btn = document.querySelector('.contact-btn');
  let contact_close = document.querySelector('.fa-times');
  // variable-end
  // Mobile-navbar-start
  nav_manue_icon.addEventListener('click', (e) => {
    nav_manue_icon.classList.toggle('active');
    manue.classList.toggle('active');
  });
  // Mobile-navbar-end
  // Nav-link is Clicked the manue is close-start
  nav_link.forEach((c) => {
    c.addEventListener('click', () => {
      nav_manue_icon.classList.remove('active');
      manue.classList.remove('active');
    });
  });
  // Nav-link is Clicked the manue is close-end
  // smoth-scroll-start 
  nav_links.forEach((l)=>{
    l.addEventListener('click',function(t){
      t.preventDefault(); 
      let target = this.getAttribute('href');
      document.querySelector(target).scrollIntoView({behavior: 'smooth'});
    });
  });
  // smoth-scroll-end
  // Skill-accordion-start
  let skill_progress = document.querySelector('.skill-progress');
  let accrodion_headings = document.querySelectorAll('.skill-accordion-heading');
  let accrodion_heading = document.querySelector('.skill-accordion-heading');
  let accrodion_body = document.querySelectorAll('.skill-accordion-body');
  skill_progress.addEventListener('click',(c)=>{ 
    let skill_target = c.target.closest('.skill-accordion-heading');
    if (!skill_target) {
      return;
    }
    accrodion_headings.forEach((sp) => {
      sp.classList.remove('active');
    });
    if (skill_target) { 
      skill_target.classList.add('active');
    }
    let skill_tab_clicked = skill_target.getAttribute('data-skill');
    // protfolio-item-active-start
    accrodion_body.forEach((accrodion)=>{
      let skill_body_tab = accrodion.getAttribute('data-skill');
      console.log(skill_body_tab);  
      if (skill_body_tab === skill_tab_clicked || accrodion_heading === 'active') {
        accrodion.classList.add('active-accrodion');
      }
      else{
        accrodion.classList.remove('active-accrodion'); 
      }
    });
  });
  // Skill-accordion-end
  // Progress-bar-start
  progress.forEach((e) => {
    e.style.width = e.getAttribute('data-progress') + '%';
  });
  // Progress-bar-end
  // Protfolio-part-start
  protfolio_links.addEventListener('click',(e)=>{
    // protfolio-navigation-start
    var clicked = e.target.closest('.protfolio-link');
    if (!clicked) {
      return; 
    }
    protfolio_link.forEach((pr) => {
      pr.classList.remove('active');
    });
    if (clicked) { 
      clicked.classList.add('active');
    }
    // protfolio-navigation-end
    let protfolio_nav_clicked = clicked.getAttribute('data-protfolio');
    // protfolio-item-active-start
    protfolio_item.forEach((protfolio)=>{
      let protfolioData = protfolio.getAttribute('data-protfolio');
      if (protfolioData === protfolio_nav_clicked || protfolio_nav_clicked === 'all') {
        protfolio.classList.remove('hide');
        protfolio.classList.add('show');
      }
      else{
        protfolio.classList.remove('show');
        protfolio.classList.add('hide');
      }
    });
    // protfolio-item-active-end
  });
  // Protfolio-part-end
  // testimonial-slider-start
  let sectionIndex = 0;
  taright.addEventListener('click',()=>{
    sectionIndex = (sectionIndex < 2) ? sectionIndex + 1 : 2;
    tslider.style.transform = 'translate('+sectionIndex * -33.3 +'%)';
  });
  taleft.addEventListener('click',()=>{
    sectionIndex = (sectionIndex > 0) ? sectionIndex - 1 : 0;
    tslider.style.transform = 'translate('+sectionIndex * -33.3 +'%)';
  });
  // testimonial-slider-end
  // Contact-form-start
  let hire_me = document.querySelector('.btn-primary-hire');
  hire_me.addEventListener('click',()=>{
    contact_body.classList.add('active-contact');
  });
  contact_btn.addEventListener('click',()=>{
    contact_body.classList.add('active-contact');
  });
  contact_close.addEventListener('click',()=>{
    contact_body.classList.remove('active-contact');
  });
  window.addEventListener('click',(e)=>{
    if(e.target == contact_body){
      contact_body.classList.remove('active-contact');
    }
  });
  // Contact-form-end
  // Contact-form-ajax-star
  let contact_form = document.querySelector('#contact-form');
  contact_form.addEventListener('submit',(e)=>{
    e.preventDefault();
    let form_data = new FormData(contact_form); 
    let xhr = new XMLHttpRequest();
    xhr.open('post','form.php',true);
    xhr.send(form_data);
  });
  // Contact-form-ajax-end
}
