document.addEventListener('DOMContentLoaded', () => {
  logic();
});
function logic() {
  // variable-start
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
  let protfolio_item = document.querySelectorAll('.portfolio-item');
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
}
