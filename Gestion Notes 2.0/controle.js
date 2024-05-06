let id = document.getElementById("id")
let nom = document.getElementById("nom")
let nc = document.getElementById("nc")
let ns = document.getElementById("ns")
let choice = document.getElementById("list")
function verif(){
    if (id.value == "" || nom.value == "" || nc.value == "" || ns.value == ""){
        alert("tous les champs sont obligatiores")
        return false 
    }   
    if( isNaN(id.value) || id.value.length != 10 || id.value.substr(0,2) != "00"){
        alert("doit etre 10 chiffre commence par 00 ")
        return false 
    }
    if (nom.value.indexOf(" ") == -1 || nom.value.length>41 || nom.value[nom.value.indexOf(" ")+1] == ""){
        alert("nom separes par un espace ")
        return false
    }
    if (nc.value.indexOf(".") == -1 || parseFloat(nc.value) > 20.00 || parseFloat(nc.value) < 0.00 ){
        alert("nc decimal ")
        return false
    }
    if (ns.value.indexOf(".") == -1 || parseFloat(ns.value)> 20.00 || parseFloat(ns.value) < 0.00 ){
        alert("ns decimal")
        return false
} 
}
function verifc(){
    if (choice.selectedIndex == 0 ) {
        alert("choisit un choix")
        return false
    }
}