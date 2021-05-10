




let formations_fleche = document.querySelector('.fleche-formations');
let menu_formations = document.querySelector('.menu-formations');

formations_fleche.addEventListener('click', function(){
  
   console.log( menu_formations.classList[1])
   
    if(menu_formations.classList[1] == "displayNone"){
  
        menu_formations.classList.remove('displayNone')
        
    }else{
        menu_formations.classList.add('displayNone')
    }
})

let contact_fleche = document.querySelector('.fleche-contacts');
let menu_contacts = document.querySelector('.menu-contacts');

contact_fleche.addEventListener('click', function(){
  
    console.log( menu_formations.classList[1])
    
     if(menu_contacts.classList[1] == "displayNone"){
         
        menu_contacts.classList.remove('displayNone')
         
     }else{
        menu_contacts.classList.add('displayNone')
     }
 })

 let offres_fleche = document.querySelector('.fleche-offres');
 let menu_offres = document.querySelector('.menu-offres');

 offres_fleche.addEventListener('click', function(){
  
    console.log( menu_formations.classList[1])
    
     if(menu_offres.classList[1] == "displayNone"){
         console.log('cool')
         menu_offres.classList.remove('displayNone')
         
     }else{
        menu_offres.classList.add('displayNone')
     }
 })
 

 
 let chateau_fleche = document.querySelector('.fleche-chateau');
 let menu_chateau = document.querySelector('.menu-chateau');

 chateau_fleche.addEventListener('click', function(){
  
    console.log( menu_chateau.classList[1])
    
     if(menu_chateau.classList[1] == "displayNone"){
         
        menu_chateau.classList.remove('displayNone')
         
     }else{
        menu_chateau.classList.add('displayNone')
     }
 })
 

 let editer_icon = document.querySelectorAll('.editer');
 let input_modif = document.querySelectorAll('.input-modif')
 let input_non_modif = document.querySelectorAll('.input-non-modif')
 

for (let i = 0; i < 50; i++){
 editer_icon[i].addEventListener('click', function(){
     console.log('test')
    if(input_modif[i].classList[2] == "displayNone"){

    input_modif[i].classList.remove('displayNone')
    input_non_modif[i].classList.add('displayNone')
    }else{
        input_modif[i].classList.add('displayNone')
        input_non_modif[i].classList.remove('displayNone')
    }
 })

}


let editer_icon_formations = document.querySelectorAll('.editer-formations');
let input_modif_formations = document.querySelectorAll('.input-modif-formations')
let input_non_modif_formations = document.querySelectorAll('.input-non-modif-formations')


for (let i = 0; i < 50; i++){
editer_icon_formations[i].addEventListener('click', function(){
    console.log('test')
   if(input_modif_formations[i].classList[2] == "displayNone"){

   input_modif_formations[i].classList.remove('displayNone')
   input_non_modif_formations[i].classList.add('displayNone')
   }else{
       input_modif_formations[i].classList.add('displayNone')
       input_non_modif_formations[i].classList.remove('displayNone')
   }
})

}



