const eml = document.getElementById('eml');
const mdp = document.getElementById('pd');
const cnfmdp = document.getElementById('pd1');
const chck = document.getElementById('chk');
const cnfrm = document.getElementById('btn');
function email(st){
    if (st.value == "")
    return false;


}
function passcheck(st){
    if (st.length <= 10 ) {
        alert('hi')
    }
    mj = 0
    mn = 0
    num = 0
    cs = 0
    for (let i = 0;i<st.length;i++){
        if (st[i].toUpper() == st[i]) mn ++ ;
        if (st[i].isUpperCase()) mj ++ ;
        if (st[i].isInteger()) num ++ ;
        else cs++
    }
    if (mj*mn*num*cs == 0) alert("not strong")
}
function verif(){
    passcheck(mdp.value)
}
function passcnfrm(){

}
function check(){
    if (chck.checked == true){
        cnfrm.disabled = false
    }
    else{
        cnfrm.disabled = true
    }
}
