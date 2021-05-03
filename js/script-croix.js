let block_error = document.querySelector('.error');
let croix = document.querySelector('.croix');

croix.addEventListener('click', function(){
    console.log('ok')
    block_error.classList.add('displayNone')
})
