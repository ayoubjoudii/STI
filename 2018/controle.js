function generercaptcha(){
    let cap = document.getElementById('cap')
    let k = Math.ceil(Math.random()*26)
    if (k % 2 ==0){
        cap.innerHTML = String.fromCharCode(k+96)
    }
    else{
        cap.innerHTML = String.fromCharCode(k+64)
    }
}
function verif(){
    let hot = document.getElementById("hot")
    let ts = document.getElementById("ts")
    let s = document.getElementById("s")
    let ps = document.getElementById("ps")
    let ts1 = document.getElementById("ts1")
    let s1 = document.getElementById("s1")
    let ps1 = document.getElementById("ps1")
    let cap = document.getElementById("cap").value
    let capv = document.getElementById("capv").value

    if(hot.selectedIndex==0){
        alert("select hotel")
        return false 
    }
    if(!(ts.checked ||s.checked || ps.checked)){
        alert("select acczeuli")
        return false
    }
    if(!(ts1.checked ||s1.checked || ps1.checked)){
        alert("select acczeuli")
        return false
    }
    if(cap != capv){
        alert("captcha verifier")
        return false
    }

}