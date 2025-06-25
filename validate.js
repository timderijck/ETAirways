function validate() {
    const fName = document.getElementById("searchresult");

    if (fName.value.trim() === "") {
        alert("Vul alstublieft een zoekterm in.");
        return false;
    }
    return true;
}
