function verif1()
{
test=true;
cat=document.getElementById('cat').selectedIndex;
des=document.getElementById('des').value;
s=document.getElementById('s').checked;
m=document.getElementById('m').checked;
l=document.getElementById('l').checked;
xl=document.getElementById('xl').checked;
prix=document.getElementById('prix').value;
L=des.length;
if(cat==0){
    alert("cat?");
    test=false;
}
else if(des.length<10 || des.length>100){
    alert("description entre 10 et 100 ");
    test=false;
}
else if((des[0].toUpperCase()<"A" || des[0].toUpperCase()>"Z") || (des[L-1].toUpperCase()<"A" || des[L-1].toUpperCase()>"Z")  )
{
    alert("description lettres ");
    test=false;
}
else if(s==false && m==false && l==false && xl==false){
    alert("taille ? ");
    test=false;
}
else if(parseInt(prix)<100 || parseInt(prix)>2000 || prix==""){
    alert("prix ? ");
    test=false;
}
return test;
}
function verif2()
{
test=true;
codeH=document.getElementById('codeH').value ;
cinClient=document.getElementById('cinClient').value;
dureeLoc=document.getElementById('dureeLoc').value;
if(parseInt(codeH)<1){
    alert("codeH?");
    test=false;
}
// 01234567
else if(cinClient.length!=8 || isNaN(cinClient) || cinClient.charAt(0)!='0' && cinClient.charAt(0)!='1'){
    alert("cin ? ");
    test=false;
}
else if(parseInt(dureeLoc)<1 || parseInt(dureeLoc)>4 )
{
    alert("duree ? ");
    test=false;
}
return test;
}
