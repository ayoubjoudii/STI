let frame = document.getElementById("section")
let id = document.getElementById("ID") 
let nom = document.getElementById("nom") 
let nc = document.getElementById("nc") 
let ns = document.getElementById("ns") 
let choix = document.getElementById("liste")

function decimal(){
    if(isNaN(parseFloat(nc.value)) ||
    isNaN(parseFloat(ns.value)) ||
    parseFloat(nc.value) < 0.00 ||
    parseFloat(nc.value) > 20.00 ||
    parseFloat(ns.value) < 0.00 ||
    parseFloat(ns.value) > 20.00) {
        alert("decimaux et entre 0.00 et 20.00")
        return false
    }
    
}
function espace(ch){
    let cn = 0;
    for (let i = 0; i < ch.length; i++) {
        if (ch[i] === " ") {
            cn++;
        }
    }
    return cn === 1;
}
function valider(){
    if (id.value == "" || nom.value == "" || nc.value == "" || ns.value == ""){
        alert("aucun vide svp!!!!");return false
    }
    else if(nom.length > 41 || espace(nom.value.trim())==false) {
        alert("nom et prenom max 41 et espace");
        return false
    }
    else return decimal()
}
function verif(){
    if (choix.selectedIndex == 0){
        alert('Choisir un id');
        return false
    }
    else{
        return true
    }
}
function ajout(){
    
}
function change(src){
    frame.src = src
}