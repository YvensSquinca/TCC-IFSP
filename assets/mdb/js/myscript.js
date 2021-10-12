$(document).ready(function () {

    $('.first-button').on('click', function () {
  
      $('.animated-icon1').toggleClass('open');
    });
    $('.second-button').on('click', function () {
  
      $('.animated-icon2').toggleClass('open');
    });
    $('.third-button').on('click', function () {
  
      $('.animated-icon3').toggleClass('open');
    });
  });

// SideNav Initialization
function openNav(){
  document.getElementById('mySidenav').style.width="250px";
}
function closeNav(){
  document.getElementById('mySidenav').style.width="0px";
}