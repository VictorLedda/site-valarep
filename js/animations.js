console.log('cc');
   
    class Menu {
        
        constructor() {
          this.init();
        
        }
        init(){
            this.initObserver()
            this.menuOnScroll()
            }
    menuOnScroll(){
            let logo = document.querySelector('.logo')
            let header = document.querySelector('.header')
        window.addEventListener("scroll", () => {
            
          if (window.pageYOffset > 150) {
            header.classList.remove("is-normal-header"); 
            logo.classList.add("is-small-menu");
            logo.classList.remove("is-normal-menu");
            header.classList.add("is-small-header");
          } 
          if (window.pageYOffset < 150) {
            logo.classList.add("is-normal-menu"); 
            logo.classList.remove("is-small-menu");
            header.classList.remove("is-small-header");
          }
        });
    }


    initObserver() {
        
        const intersectionObserver = new window.IntersectionObserver(
          entries => {
            entries.forEach(entry => {
              //entry.target est l'element html en lui meme
              if (entry.intersectionRatio > 0.2) {
                console.log("oui")
                entry.target.classList.add("is-inviewport");
                
              } else {
                //dehors
                entry.target.classList.remove("is-inviewport");
              }
            });
          },
          { threshold: 0.2 }
        );
        //observation des objets
        document.querySelectorAll(".scroll-part").forEach(element => {
          intersectionObserver.observe(element);
        });
      }

      setActiveMenuElement(id) {
        this.links.forEach((link) => {
          link.classList.remove("is-active");
          if (link.getAttribute("href") == "#" + id) {
            link.classList.add("is-active");
          }
        });
      }

      
    
    }

    const menu = new Menu();