// HAMBURGER MENU
const menuLeft = document.getElementsByClassName('menu-header-menu-left-container')[0];
const menuRight = document.getElementsByClassName('menu-header-menu-right-container')[0];
const socialIcons = document.getElementsByClassName('social-icons')[0];

document.querySelector('.hamburger').addEventListener('click', function() {
  
  // Toggle hamburger menu
  if(socialIcons.style.display === 'block') {

    menuLeft.style.display = 'none';
    menuRight.style.display = 'none';
    socialIcons.style.display = 'none';

  } else {

    menuLeft.style.display = 'block';
    menuRight.style.display = 'block';
    socialIcons.style.display = 'block';

  }
});

const lis = document.querySelectorAll('.menu-item');
for (const li of lis) {
  li.addEventListener('click', function() {

    menuLeft.style.display = 'none';
    menuRight.style.display = 'none';
    socialIcons.style.display = 'none';

  })
}

socialIcons.addEventListener('click', function() {

    menuLeft.style.display = 'none';
    menuRight.style.display = 'none';
    socialIcons.style.display = 'none';

});