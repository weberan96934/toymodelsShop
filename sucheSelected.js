function searchSelected()
{
    // Ausgewählte Option aus der Vorschläge-Liste lesen und in das 
    // HTML-Suchfel schreiben
    var suchfeld = document.getElementById("suche");
    var vorschlag = document.getElementById("vorschlaegeList");
    suchfeld.value = vorschlag.value;

    // Suche durchführen, in dem einfach der "Suche"-Button geklickt wird.
    document.getElementById("suchbutton").click();
}