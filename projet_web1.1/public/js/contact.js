
// au telechargement de la page verifie si le cookie existe . si le coockie nexiste pas affiche le popup avec un delais de 2 secondes
// j'ai mis une durée de vie de 7 jours au popup ensuite il va ce réafficher au telechargement de la page 
window.addEventListener("load", function () {
    // Vérifier si le cookie existe avant d'afficher le popup
    if (document.cookie.indexOf("popupDisplayed=true") === -1) {
        // Temps avant l'ouverture du popup (2 secondes)
        setTimeout(function () {
            // Afficher le popup
            document.getElementById("popupForm").style.display = "block"
        }, 2000)

        // Définir le cookie avec une durée de vie d'une semaine
        var uneSemainePlusTard = new Date()
        uneSemainePlusTard.setDate(uneSemainePlusTard.getDate() + 7)
        document.cookie = "popupDisplayed=true; expires=" + uneSemainePlusTard.toUTCString()

    }
})

let fermerFormulaire = document.querySelector("a.fermerFormulaire")


// Fermer le popup et le "x" lorsqu'on clique sur le "x"
fermerFormulaire.addEventListener("click", function () {
    document.getElementById("popupForm").style.display = "none"
    fermerFormulaire.style.display = "none"

})

// Fermer le popup lorsqu'on clique en dehors
document.addEventListener("click", function (event) {
    let popupForm = document.getElementById("popupForm")
    let elementCible = event.target

    if (elementCible !== popupForm && !popupForm.contains(elementCible)) {
        popupForm.style.display = "none"
    }
})



// fade out message success
let message_success = document.querySelector("p.btn.btn-success.success")
setTimeout(function () {
    message_success.style.opacity = 0 // Définit l'opacité du message à 0 après 3 secondes
}, 3000)

setTimeout(function () {
    message.style.display = "none" // Masque le message après 4 secondes (3 secondes + 1 seconde de transition)
}, 4000)


// fade out message erreur
let message_erreur = document.querySelector("p.btn.btn-danger")
setTimeout(function () {
    message_erreur.style.opacity = 0 // Définit l'opacité du message à 0 après 3 secondes
}, 3000)

setTimeout(function () {
    message_erreur.style.display = "none" // Masque le message après 4 secondes (3 secondes + 1 seconde de transition)
}, 4000)

// fade out message succes infolettre
let message_success_infolettre = document.querySelector("p.btn.btn-success")
setTimeout(function () {
    message_success_infolettre.style.opacity = 0 // Définit l'opacité du message à 0 après 3 secondes
}, 3000)

setTimeout(function () {
    message_success_infolettre.style.display = "none" // Masque le message après 4 secondes (3 secondes + 1 seconde de transition)
}, 4000);




