

function valid(ch){
    let test = true
    for (let i = 0; i < ch.length; i++) {
        if(!("A"<=ch[i].toUpperCase()&&ch[i].toUpperCase()<="Z")){
            test = false 
        }        
    }
    return test && ch.length>=3
}
function valid1(ch){
    let test = true
    for (let i = 0; i < ch.length; i++) {
        if (!("0"<=ch[i]&&ch[i]<="9")) {
            test = false
        }
    }
    return test 
}
function valid2(ch){
    let test = true
    for (let index = 0; index < ch.length; index++) {
        if (ch[index] == " "){
            test = false 
        }
        
    }
    return test && ch.length == 6
}

function verif1(){
    let nom = document.getElementById("nom").value
    let prenom = document.getElementById("prenom").value
    let tel = document.getElementById("tel").value
    let add = document.getElementById("add").value
    let mdp = document.getElementById("mdp").value
    let mdpv = document.getElementById("mdpv").value
    if (!valid(nom)){
        alert("nom max 3")
        return false
    }
    if (!valid(prenom)){
        alert("prenom max 3")
        return false
    }
    if (!valid1(tel) || tel.length != 8 || !(tel.charAt(0) >= "1")){
        alert("tel 8 chiffres premier 1")
        return false
    }
    if (!(add.length >= 10)){
        alert("addresse minim 10")
        return false
    }
    if (!valid2(mdp)){
        alert("mdp 6 carac")
        return false
    }
    if (mdpv != mdp){
        alert("mdp 2 doit etre egal au mdp")
        return false
    }
}
function verif2(){
    let sel = document.getElementById("sel")
    let qte = document.getElementById("qte").value
    let tel = document.getElementById("tel").value
    let mdp= document.getElementById("mdp").value
    if (sel.selectedIndex <= 0){
        alert("chois un type")
        return false
    }
    if (!valid1(qte) || !(1<=qte && qte<=5)){
        alert("qtnit coprin")
        return false
    }
    if (!valid1(tel) || tel.length != 8 || !(tel.charAt(0) >= "1")){
        alert("telll")
        return false
    }
    if(!valid2(mdp)){
        alert("mdpp")
        return false
    }
}