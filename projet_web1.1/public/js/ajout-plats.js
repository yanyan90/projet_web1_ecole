// fade out message erreur
let message_erreur = document.querySelector("p.btn.btn-danger")
setTimeout(function () {
    message_erreur.style.opacity = 0
}, 3000)

setTimeout(function () {
    message_erreur.style.display = "none"
}, 4000)


