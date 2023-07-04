
let chemin_etoile = "public/img/star.png"
let chemin_demi_etoile = "public/img/demi-star.png"


let phrase_aleatoire = []

setInterval(function () {

    fetch("public/commentaires/commentaires.json")
        .then(resp => resp.json())
        .then(objets => {
            phrase_aleatoire = objets

            const indexAleatoire = Math.floor(Math.random() * phrase_aleatoire.length)
            const phraseAleatoire = phrase_aleatoire[indexAleatoire]

            let commentaire = document.querySelector(".commentaire")
            commentaire.textContent = phraseAleatoire.texte
            commentaire.style.fontFamily = "Roboto"
            commentaire.style.fontWeight = "bold"



            let note = document.querySelector(".note")

            // enlever les etoile avant de remetre les nouvelles
            note.innerHTML = ""

            // verifie et ajoute a chaque tour de boucle il ajoute une etoile relier au int dans phrasealeatoire.note
            // mathfloor pour avoir un chiffre entier
            for (let i = 0; i < Math.floor(phraseAleatoire.note); i++) {
                let imageEtoile = document.createElement("img")
                imageEtoile.src = chemin_etoile
                imageEtoile.style.width = "25px"
                note.appendChild(imageEtoile)
            }

            // vérifie si la partie décimale de phraseAleatoire.note n'est pas égale à zéro
            if (phraseAleatoire.note % 1 !== 0) {
                let imageDemiEtoile = document.createElement("img")
                imageDemiEtoile.src = chemin_demi_etoile
                imageDemiEtoile.style.width = "25px"
                note.appendChild(imageDemiEtoile)
            }
        })

}, 4000)


// scale image dans div entree
let div_entrees = document.querySelector(".entrees")
let image = document.querySelector(".img-entrees")

div_entrees.addEventListener("mouseenter", function () {

    image.style.transform = "scale(1.1)"
    image.style.transition = "transform 0.3s ease"
    div_entrees.style.overflow = "hidden"
})

div_entrees.addEventListener('mouseleave', function () {
    image.style.transform = "scale(1)"
    image.style.transition = "transform 0.3s ease"
})



// scale image dans div plat
let div_plats = document.querySelector(".plats")
let image_plats = document.querySelector(".img-plats")

div_plats.addEventListener("mouseenter", function () {

    image_plats.style.transform = "scale(1.1)"
    image_plats.style.transition = "transform 0.3s ease"
    div_plats.style.overflow = "hidden"
})

div_plats.addEventListener('mouseleave', function () {
    image_plats.style.transform = "scale(1)"
    image_plats.style.transition = "transform 0.3s ease"
})


// scale image dans div dessert
let div_desserts = document.querySelector(".desserts")
let image_desserts = document.querySelector(".img-desserts")

div_desserts.addEventListener("mouseenter", function () {

    image_desserts.style.transform = "scale(1.1)"
    image_desserts.style.transition = "transform 0.3s ease"
    div_desserts.style.overflow = "hidden"
})

div_desserts.addEventListener('mouseleave', function () {
    image_desserts.style.transform = "scale(1)"
    image_desserts.style.transition = "transform 0.3s ease"
});



