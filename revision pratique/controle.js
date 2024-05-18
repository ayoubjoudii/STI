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
    sta=document.getElementById('station').selectedIndex

        //Compléter le reste de la fonction


    resultat=true
    if(sta==0)
    {
        alert("La sélection d'une station est obligatoire")
        resultat=false
    }

        //Compléter le reste de la fonction

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