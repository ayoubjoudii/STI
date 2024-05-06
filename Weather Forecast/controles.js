let num = document.getElementById("num")
let ville = document.getElementById("ville")
let aut = document.getElementById("aut")
let upd = document.getElementById("upd")
let nom = document.getElementById("station")
function nentier(n){
    let test = false 
    for(let i = 0 ; i < n.length ; i++){
        if (n[i] <'0' || n[i]>'9' ) {
            test =  true
        }
    }
    return test
}
function validate(){
    if( nentier(num.value) || num.value<60000 || num.value>60999 ){
        alert("entre 60000 ane 60999")
        return false 
    }
    if(ville.value == "") {
        alert("ville non vide")
        return false
    }
    if(nom.value == ""){
        alert("nom non vide")
        return false
    }
    
}
function generer(){
    if(aut.checked){
        nom.value = "Station "+ville.value
    }
}
