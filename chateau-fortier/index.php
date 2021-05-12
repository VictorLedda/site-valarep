<?php
include('../vues/header.php');

$reqImages = $pdo->query("SELECT * FROM chateau");

?>
<section class='test-essaye'>
<h1 class='titre-chateau'>Le chateau fortier</h1>

<div class='presentation-chateau container scroll-part is-invert'>
    <div class='content__to-right'>
        <iframe class='video'  src="https://www.youtube.com/embed/KO50jYvXXoU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="carre-bleu-video"></div>
        </div>
       
            <div class='chateau-text margin-left content__to-left'>
        <div class='sous-titre-chateau'>
    <div class="trait-bleu-vertical"></div>
    <h2>Découvrez le château fortier</h2>
</div>
    <p>Lorem Ipsum is simply dummy text of the printing 
    and typesetting industry. Lorem Ipsum has been 
    the industry's standard dummy text ever since the 
    1500s, when an unknown printer took a galley of 
    type and scrambled it to make a type specimen book.
    Lorem Ipsum is simply dummy text of the printing 
    and typesetting industry. Lorem Ipsum has been 
    the industry's standard dummy text ever since the 
    1500s, when an unknown printer took a galley of 
    type and scrambled it to make a type specimen book.</p>

</div>
    </div>


    <h1 class='titre-slide'>Le chateau Fortier en images</h1>
    <section class='slide'>
 
    <div class="glide">
    <div class="glide__arrows" data-glide-el="controls">
    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img class='fleche-gauche fleche' src='/valarep/images/f.png'/></button>
    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><img class='fleche-droite fleche' src='/valarep/images/f.png'/></button>
  </div>
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides__perso">
  <?php  while($i=$reqImages->fetch()){
     
    if($i['id'] %4 == 0){
      $rotate = 'rotate1';
    }
    if($i['id']%4 == 1){
      $rotate = 'rotate2';
    }
    if($i['id']%4 == 2){
      $rotate = 'rotate3';
    }
    if($i['id']%4 == 3){
      $rotate = 'rotate4';
    }
    ?>
    
      <li class="glide__slide slide-taille " >
          <div>
           <!--   <img class='schotch' src='/valarep/images/schotch.PNG' />-->
          <img class='<?= $rotate  ?> image-slide' src='/valarep/images_uploads/chateau-fortier/<?= $i['image']; ?>'/>
       
        </div>
          <p class='paragraphe-image'><?=  $i['description'];  ?></p>
        </li>
<?php
  }
  ?>
     
     

    </ul>
  </div>


  <div class='center'>
  <div class="glide__bullets" data-glide-el="controls[nav]">
    <button class="glide__bullet" data-glide-dir="=0"></button>
    <button class="glide__bullet" data-glide-dir="=1"></button>
    <button class="glide__bullet" data-glide-dir="=2"></button>
    <button class="glide__bullet" data-glide-dir="=3"></button>
    <button class="glide__bullet" data-glide-dir="=4"></button>
    <button class="glide__bullet" data-glide-dir="=5"></button>
    <button class="glide__bullet" data-glide-dir="=6"></button>
    <button class="glide__bullet" data-glide-dir="=7"></button>
    <button class="glide__bullet" data-glide-dir="=8"></button>
  
    
  </div>
    </div>
    <div class='declencheur'></div>
</div>





</section>








    <div class='presentation-recettes container scroll-part is-invert'>
    

        <div class='chateau-text-recettes content__to-right'>
        <div class='sous-titre-chateau'>
    <div class="trait-bleu-vertical"></div>
    <h2>Découvrez les recettes</h2>
</div>
    <p>Lorem Ipsum is simply dummy text of the printing 
    and typesetting industry. Lorem Ipsum has been 
    the industry's standard dummy text ever since the 
    1500s, when an unknown printer took a galley of 
    type and scrambled it to make a type specimen book.
    Lorem Ipsum is simply dummy text of the printing 
    and typesetting industry. Lorem Ipsum has been 
    the industry's standard dummy text ever since the 
    1500s, when an unknown printer took a galley of 
    type and scrambled it to make a type specimen book.</p>
<a href='/valarep/chateau-fortier/menu_chateau_fortier.pdf' download='Recettes_chateau_fortier'><button class='telecharger-documentation telecharger-recettes'>Télécharger</button></a>
</div>
<div class='block-recette content__to-left'>
<div class="carre-bleu-recttes"></div>
<img class='image-recettes ' src='/valarep/images/cuisine1.jpg'/>

        </div>
    </div>

</section>


<script src="../js/node_modules/@glidejs/glide/dist/glide.min.js"></script>

<?php


require_once('../vues/footer.php');


?>
<script>
  console.log(window)
  console.log(window.innerWidth)
  if(window.innerWidth < 480){
    
    let test = 2
    console.log(test)
  }
  new Glide('.glide', {
    
  type: 'carousel',
  startAt: 0,
  autoplay: "3000",
  perView: 4.1
}).mount()

</script>

