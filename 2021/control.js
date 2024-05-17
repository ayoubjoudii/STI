let stat = document.getElementById("stat")
let stat1 = document.getElementById("stat1")
let sais = document.getElementById("sais")
let ei = document.getElementById("ei")
let ni = document.getElementById("ni")
let pluie = document.getElementById("pluie")
let temp = document.getElementById("temp")
let pl = document.getElementById("pl")


function valid(n){
    let test = true
    for (let i = 0; i < n.length; i++) {
        if (!("0"<=n[i]<="9")){
            test = false 
        }
    return test && n>=0 
    }
}
function test1(){
    if (stat.selectedIndex <= 0){
        alert("choi une stat")
        return false
    }
    if (sais.selectedIndex <= 0){
        alert("choi une saison")
        return false
    }
    if (!(ei.checked || ni.checked)){
        alert("choi une annee")
        return false
    }
    if (isNaN(temp.value) || !(-5<=temp.value && temp.value<=50)){
        alert("temperatue enter 5")
        return false
    }
    if (!valid(pluie.value)){
        alert("entier positif ou nul")
        return false
    }
    
}
function test2(){
    if(stat1.selectedIndex <= 0 ){
        alert('chois une chose')
        return false 
    }
    if(!(temp.checked || pl.checked)){
        alert('choise un climat')
        return false
    }
}