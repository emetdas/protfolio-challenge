document.addEventListener('DOMContentLoaded', () => {
  logic();
});
function logic() {
  // variable
  let nav_link = document.querySelectorAll('.manue > li');
  let nav_manue_icon = document.querySelector('.mobile-icon');
  let manue = document.querySelector('.manue');
  let progress = document.querySelectorAll('.progress');
  let protfolio_links = document.querySelector(
    '.protfolio-links'
  );
  let protfolio_link = document.querySelectorAll(
    '.protfolio-link'
  );
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
  // Progress-bar-start
  progress.forEach((e) => {
    e.style.width = e.getAttribute('data-progress') + '%';
  });
  // Progress-bar-end
  // Protfolio-part-start
  protfolio_links.addEventListener('click',(e)=>{
    var clicked = e.target.closest('.protfolio_link');
    console.log(clicked);
    if (!clicked) {
      return;
    }
    protfolio_link.forEach((e) => {
      e.classList.remove('active');
    });
    if (clicked) {
      clicked.classList.add('active');
    }
  })
  // Protfolio-part-end
}
