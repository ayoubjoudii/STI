let cat = document.getElementById('sel')
let des = document.getElementById('desc')
let s = document.getElementById('s')
let m = document.getElementById('m')
let l = document.getElementById('l')
let xl = document.getElementById('xl')
let prx = document.getElementById("prx")
let codehab = document.getElementById("codehab")
let cin= document.getElementById("cin")
let duree = document.getElementById("duree")



function verif1(){
    if (cat.selectedIndex <= 0){
        alert("choose")
        return false 
    }
    if (!(10<=des.value.length<=100 && (des.value.charAt(0).toUpperCase()>="A" && des.value.charAt(0).toUpperCase() <="Z") && (des.value.charAt(des.value.length - 1).toUpperCase()>="A" && des.value.charAt(des.value.length - 1).toUpperCase()<="Z" ) )){
        alert('message')
        return false
    }
    if (!(s.checked || m.checked || l.checked || xl.checked) ){
        alert("choose a size") 
        return false
    }
    if(!(100<=prx.value<=2000 && prx.value.length >= 3)){
        alert("un nombre between 100 and 2000")
        return false 
    }
    
}
function valid(n){
    let test = true
    for (let i = 0; i < n.length; i++) {
        if (!("0"<=n[i]<="9")){
            test = false 
        }
    }
    return test && n.value.length == 8 && (n.value.charAt(0) == "0" || n.value.charAt(0) == "1")
}
function verif2(){
    if (!codehab.value>=1) {
        alert("sup a 1 ")
        return false
    }
    if (!valid(cin)) {
        alert("8 and 0..1 ")
        return false
    }
    if (!(!isNaN(duree.value) && "1"<=duree.value<="4" && duree.value.length == 1 )){
        alert("entre 1 et 4")
        return false 
    }
}