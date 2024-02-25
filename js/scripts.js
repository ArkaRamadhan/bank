/*!
    * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2023 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    // 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

$('.register-btn').on('click', function () {
    $('.title').css('display', 'none');
    $('.title2').css('display', 'block');
    $('.login-btn').css('display', 'block');
    $('.register-btn').css('display', 'none');
    $('.box-color').css('margin-right', '-380px');
    $('.box-color').css('background-image', 'linear-gradient(to right, #FF4B2B, #FF416C)');
    $('.login').css('opacity', '0');
    $('.register').css('opacity', '1');
});
$('.login-btn').on('click', function () {
    $('.title').css('display', 'block');
    $('.title2').css('display', 'none');
    $('.login-btn').css('display', 'none');
    $('.register-btn').css('display', 'block');
    $('.box-color').css('margin-right', '0');
    $('.box-color').css('background-image', 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)');
    $('.login').css('opacity', '1');
    $('.register').css('opacity', '0');
})
