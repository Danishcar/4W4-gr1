(function(){
    console.log("vive la boîte modale")  
    let boite__modale = document.querySelector(".boite__modale")
    let boite__modale__texte = document.querySelector(".boite__modale__texte")
    let galerie__img = document.querySelectorAll('.galerie .wp-block-image img')
    console.log("galerie__img.length =" + galerie__img.length)  

    //création de la balise image
    let image = document.createElement('img')
    boite__modale__texte.appendChild(image)
    // image.setAttribute("src", '#')


    for (const img of galerie__img) {
        console.log(img.tagName)
        img.addEventListener('mousedown',function(){
            console.log(this.parentNode.className)
            console.log(this.parentNode.children[0].innerHTML)
          boite__modale.classList.add('ouvrir')
          console.log(boite__modale.classList)
          let source = this.getAttribute('src')
         image.setAttribute('src', source)

        })
    }

    //création de la boite modale

    let boite__modale__fermeture = document.querySelector(".boite__modale__fermeture")
    boite__modale__fermeture.addEventListener('mousedown', function(){
        boite__modale.classList.remove('ouvrir')
        console.log(boite__modale.classList)
        
    })

  })()  