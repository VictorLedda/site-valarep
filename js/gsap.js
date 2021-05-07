/*
console.log('oui')
class GsapGauche {
    constructor() {
      gsap.registerPlugin(ScrollTrigger); // utilisation de ScrollTrigger
      this.init();
      
    }
    init() {
        if (document.querySelector(".declencheur")) {
            console.log('yes')
            const text = document.querySelector(".chateau-text-recettes");

            gsap.to(
                text, {
                y: 0,
                x: 180,
                opacity: 1,
                
                scrollTrigger: {
                  start: "top 10%",
                duration: 10,
                  trigger: ".declencheur",
                  markers: true,
                  scrub: true,
                },
              });
    }
}
}

class GsapDroite {
    constructor() {
      gsap.registerPlugin(ScrollTrigger); // utilisation de ScrollTrigger
      this.init();
      
    }
    init() {
        if (document.querySelector(".declencheur")) {
            console.log('yes')
            const text = document.querySelector(".block-recette");

            gsap.to(
                text, {
                y: 0,
                x: -180,
                opacity: 1,
                
                scrollTrigger: {
                  start: "top 10%",
                duration: 10,
                  trigger: ".declencheur",
                  markers: true,
                  scrub: true,
                },
              });
    }
}
}

    

const GsapRecettesGauche  = new GsapGauche()
const GsapRecettesDroit  = new GsapDroite()

*/