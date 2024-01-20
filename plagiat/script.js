const source = document.getElementById("sour");
const txt = document.getElementById("txt")

function valider(){
    if (source.value === "" || txt.value === "") {
        alert("vide");
        return false;
    }

    if (source.value.length < 5 || source.value.length > 20) {
        alert("Source doit entre 5 and 20 characters");
        return false;
    }

    if (txt.value.length < 10 || txt.value.length > 100) {
        alert("texte doit etre 10 et 100 characters");
        return false;
    }

    if (txt.value.charAt(txt.value.length - 1) !== '.') {
        alert("texte point");
        return false;
    }

    return true;
    
}