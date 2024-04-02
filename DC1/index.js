const nam= document.getElementById('name')
const eml = document.getElementById('eml')
const pd = document.getElementById('pd')
const pd1 = document.getElementById('pd1')
const tel = document.getElementById('tel')
const ville = document.getElementById('ville')
const ajt = document.getElementById('ajt')
const ajtbtn = document.getElementById('ajtbtn')
const rmq = document.getElementById('rmq')
const rest = document.getElementById('rest')
const err = document.getElementById('err')
const sbmt = document.getElementById('sbmt')
ajtbtn.addEventListener('click',function(){
let newville = new Option(ajt.value);
ville[ville.length] = newville;
})
rmq.addEventListener('input',function(){
    rest.textContent = 500-rmq.value.length
})
sbmt.addEventListener('click',function(){
    if (nam.value.indexOf(" ")==-1 ){err.textContent = 'name needs space in between'}
    else if (eml.value.substr(eml.value.indexOf("@")+1,1)==="" || eml.value.substring(0,eml.value.lastIndexOf("@"))==="" || eml.value.substring(eml.value.indexOf(".")+1,eml.value.length).length<3 ){err.textContent = 'make sure you wrote in the format ,,@,,.3 characters'}
    else if (pd.value.length< 5 || pd.value !== pd1.value){err.textContent = 'password'}
    else if (isNaN(tel.value)){err.textContent = 'numbers pls'} 
    else {err.textContent = ""} 
    
})

