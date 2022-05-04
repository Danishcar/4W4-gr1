(function(){
    console.log("vive la boîte carrousel")  
    let boite__carrousel = document.querySelector(".boite__carrousel")
    let galerie__img = document.querySelectorAll('.galerie .wp-block-image img')
    console.log("galerie__img.length =" + galerie__img.length)  

    //création de la balise image
    let image = document.createElement('img')
    boite__carrousel.appendChild(image)
    // image.setAttribute("src", '#')


    for (const img of galerie__img) {
        console.log(img.tagName)
        img.addEventListener('mousedown',function(){
          boite__carrousel.classList.add('ouvrir')
          console.log(this.getAttribute('src'))
         image.setAttribute('src', this.getAttribute('src'))

        })
    }

    //création de la boite modale

    let boite__carrousel__fermeture = document.querySelector(".boite__carrousel__fermeture")
    boite__carrousel__fermeture.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove('ouvrir')
        console.log(boite__carrousel.classList)
        
    })

  })()  