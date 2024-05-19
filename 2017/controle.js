function numeriqq(ch){
    for (let index = 0; index <ch.length; index++) {
        if(!( "0"<=ch.charAt(index) && ch.charAt(index)<="9")){
            return false
        }        
    }
    return true
}
function alphaa(ch){
    for (let index = 0; index <ch.length; index++) {
        if(!( "A"<=ch.charAt(index).toUpperCase() && ch.charAt(index).toUpperCase()<="Z")){
            return false
        }        
    }
    return true
}   

function verif(){
    let cin = document.getElementById("cin").value
    let nom = document.getElementById("nom").value
    let prenom = document.getElementById("prenom").value
    let tel = document.getElementById("tel").value
    let art = document.getElementById("art")
    let prx = document.getElementById("prx").value

    if(!(numeriqq(cin) && cin.length == 8 && (cin.charAt(0) == "1" || cin.charAt(0) == "0") ) ){
        alert("verifier cin ")
        return false
    }
    if(!(alphaa(nom) && 3<=nom.length && nom.length<=30)){
        alert("verfier nom ")
        return false
    }
    if(!(alphaa(prenom) && 3<=prenom.length && prenom.length<=30)){
        alert("verfier prenom ")
        return false
    }
    if(!(numeriqq(tel) && tel.length == 8 && tel.charAt(0) != "0")  ){
        alert("verifier tel")
        return false
    }
    if(art.selectedIndex == 0){
        alert("verifier article ")
        return false 
    }
    if(!(numeriqq(prx) && Number(prx) > 0)){
        alert("verifier prix")
        return false 
    }
}

function Espaces(ch){
    let ress = "" 
    ch = ch.trim()
    let i = 0
    while(i<ch.length){
        let n = 0
        while(ch.charAt(i) === " "){
            n++
            if(n==1){
                ress = ress+ch.charAt(i)
            }
        i++}
        ress = ress + ch.charAt(i)
        i++
    }
    return ress

}