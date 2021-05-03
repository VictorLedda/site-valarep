// Block error //


let formations_fleche = document.querySelector('.fleche-formations');
let menu_formations = document.querySelector('.menu-formations');

formations_fleche.addEventListener('click', function(){
  
   console.log( menu_formations.classList[1])
   
    if(menu_formations.classList[1] == "displayNone"){
        console.log('cool')
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



