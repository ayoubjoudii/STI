np = document.getElementById("np")
nom = document.getElementById("nom")
prenom = document.getElementById("prenom")
f = document.getElementById("F")
m = document.getElementById("M")

function valid(n){
    for (let i = 0; i< n.length; i++) {
      if (!(0<=n[i]<=9 ) && !(n[i]=='/')) {
        return false
      }
    }
    return n.indexOf("/")==2 && n.lastIndexOf('/')==2
}

function valid1(ch){
    for (let i = 0; i < ch.length; i++) {
        if (!("A"<=ch[i].toUpperCase()&& ch[i].toUpperCase()<="Z")){
            return false
        };
        
    }
    return (3 <= ch.length && ch.length<=20)
}

function verif1(){
    if(np.value.length != 8 || valid(np.value)==false ){
        alert('numero permi non vzlide')
        return false 
    }
    if(!valid1(nom.value)){
        alert('nom ')
        return false
    }
    if(!valid1(prenom.value)){
        alert('prenom ')
        return false
    }
    if(!(f.checked) && !(m.checked)){
        alert("wghattt")
        return false 

    }
}


function verif2() {
    let sel = document.getElementById('sel')
    let np = document.getElementById('np').value
    let sec = document.getElementById('sec').value
    let cond = document.getElementById('cond').value
    let conf = document.getElementById('conf').value
    let box = document.getElementById('box')

    if (valid(np)==false) {
        alert('np')
        return  false
    }
    if (sel.selectedIndex <= 0) {
        alert ("select smth")
        return false
    }
    if (!(1<=sec<=5) || sec.length !=1) {
        alert("security")
        return false
    }
    if (!(1<=cond<=5) || cond.length !=1) {
        alert("cond")
        return false
    }
    if (!(1<=conf<=5) || conf.length !=1) {
        alert("conf")
        return false
    }
    if (box.checked==false) {
        alert('vous ete un robot !!!!')
        return false
    }
return true
}