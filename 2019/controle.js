function valid(ch){
    let p = ch.indexOf('@')
    let ch1 = ch.substr(0,p)
    let p1 = ch.indexOf('.')
    let ch2 = ch.substr(p+1,p1-p-1)
    let ch3 = ch.substr(p1+1)
    let test1 = ch1.length>=3
    let test2 = ch2.length>=3
    let test3 = ch3.length>=2 && ch3.length<=4

    for (let index = 0; index < ch1.length; index++) {
        if (!(("0"<=ch1[index] && ch1[index]<="9") || ("A"<=ch1[index].toUpperCase() && ch1[index].toUpperCase()<="Z" ))){
            test1 = false
        }    
    }

    for (let index = 0; index < ch2.length; index++) {
        if (!(("0"<=ch2[index] && ch2[index]<="9") || ("A"<=ch2[index].toUpperCase() && ch2[index].toUpperCase()<="Z" ))){
            test2 = false
        }    
    }
    for (let index = 0; index < ch3.length; index++) {
        if (!("A"<=ch3[index].toUpperCase() && ch3[index].toUpperCase()<="Z" )){
            test3 = false
        }    
    }

    return test1 && test2 && test3  
}
function valid1(mdp){
    let test = (mdp.length == 6)
    let nm = 0
    let nl = 0
    let nc = 0
    for (let index = 0; index < mdp.length; index++) {
        if ("A"<=mdp[index] && mdp[index]<="Z"){
            nm ++
        }
        if ("a"<=mdp[index] && mdp[index]<="z"){
            nl++
        }
        if ("0"<=mdp[index] && mdp[index]<="9"){
            nc++
        }
        
    }
    return test && nm >= 1 && nl >= 1 && nc >= 1
}

function test(){
    let mail = document.getElementById("mail").value
    let mdp = document.getElementById("mdp").value
    let genre  = document.getElementById("sel")
    let o1  = document.getElementById("1O")
    let o2  = document.getElementById("2O")
    let o3  = document.getElementById("3O")
    let n1  = document.getElementById("1N")
    let n2  = document.getElementById("2N")
    let n3  = document.getElementById("3N")
    let s1  = document.getElementById("1S")
    let s2  = document.getElementById("2S")
    let s3  = document.getElementById("3S")

    if (!valid(mail)){
        alert("verifier email")
        return false
    }
    if (!valid1(mdp)){
        alert("verifier mdp")
        return false
    }
    if (genre.selectedIndex <= 0){
        alert("choisi une genre")
        return false
    }
    if (!(o1.checked || n1.checked || s1.checked)){
        alert("choix q1")
        return false
    }
    if (!(o2.checked || n2.checked || s2.checked)){
        alert("choix q2")
        return false
    }
    if (!(o3.checked || n3.checked || s3.checked)){
        alert("choix q3")
        return false
    }
}