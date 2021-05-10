let menu_burger = document.querySelector('.menu-header-portable');
let page_header_portable = document.querySelector('.page-header-portable');
let croix_header_portable = document.querySelector('.croix-noir');


menu_burger.addEventListener('click', function(){

    page_header_portable.classList.remove('displayNone')
    page_header_portable.classList.remove('header-portable-reverse')

})


croix_header_portable.addEventListener('click', function(){
console.log('yes')
   
    page_header_portable.classList.add('header-portable-reverse')

})