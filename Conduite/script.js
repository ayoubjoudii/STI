const permis = document.getElementById("champ")
const pres = document.getElementById("pres")
const mat = document.getElementById("mat")
const edit = document.getElementById("date")
const mail = document.getElementById("mail")


function Activer(){
    if (permis.selectedIndex == 1){
        pres.disabled = false
    }
    if (pres.value == '') console.log(false)

}