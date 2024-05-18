//un module permettant de vérifier si une chaine passée en paramètre est composée seulement par des lettres et des espaces
function AlphaEspace(ch)
{
    ch=ch.toUpperCase()
    i=0
    ok=true
    while (ok && i<ch.length)
    {
        if(ch.charAt(i)>="A" && ch.charAt(i)<="Z" || ch.charAt(i)==" ")
        {
            i=i+1
        }
        else
        {
            ok=false
        }
    }
    return ok
}

function verif1()
{
    let sta=document.getElementById('station').selectedIndex
    let nm=document.getElementById('nm').value
    let ds=document.getElementById('ds').value
    let hs=document.getElementById('hs').value
    let mag=document.getElementById('mag').value
    let lat=document.getElementById('lat').value
    let long=document.getElementById('long').value
        //Compléter le reste de la fonction
    d = new Date()
    dss = new Date(ds)
    
    resultat=true
    if(sta==0)
    {
        alert("La sélection d'une station est obligatoire")
        resultat=false
    }
    if(nm=="" || nm>50 || !AlphaEspace(nm) ){
        alert("nom region")
        resultat=false
    }
    if(!(dss < d)){
        alert("date inf a date")
    }
    return resultat
}

function verif2()
{
    station=document.getElementById('station').selectedIndex
                
        //Compléter le reste de la fonction

    resultat=true
    if(station==0)
    {
        alert("la sélection d'une station est obligatoire")
        resultat=false
    }
   

        //Compléter le reste de la fonction

    return resultat
}