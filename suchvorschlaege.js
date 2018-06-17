function isEmpty(str) {
    return (!str || 0 === str.length);
}

function fetchFromServerCore(url, success) {
    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    xhr.open('GET', url);
    xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200) 
        {
            var result = JSON.parse(this.responseText);
            success(result[0]);
        }
    };
    xhr.send();
    return xhr;
}

function displayVorschlaegeFromServer(suchbegriff, warengruppe)
{
    function onSuccess(vorschlageFromServer)
    {
        var vorschlaegeListe = document.getElementById("vorschlaegeList");
        vorschlaegeListe.size=vorschlageFromServer.length;
    
        if(vorschlaegeListe.size == 0)
        {
            vorschlaegeListe.hidden = true;
        }
        else
        {
            vorschlaegeListe.hidden = false;
        }

        for(i = 0; i < vorschlageFromServer.length; i++)
        {
            vorschlaegeListe[i] = new Option(vorschlageFromServer[i].ArtikelName);
        }
    }

    var url = "http://localhost/toymodels/../Webservices/suche.php?suchbegriff=".concat(suchbegriff,"&warengruppe=",warengruppe);

    return fetchFromServerCore(url, x => onSuccess(x));
}

function getVorschlaege()
{
    var warengruppe = document.getElementById("warengruppe").value;    
    var suchfelder = document.getElementById("suche");
    var nutzereingabe = suchfelder.value;
    
    var vorschlaegeListe = document.getElementById("vorschlaegeList");
    if(isEmpty(nutzereingabe))
    {
        vorschlaegeListe.hidden = true;
    }
    else
    {
        vorschlaegeListe.hidden = false;        
    }

    // Suchvorschläge am Server erzeugen und anzeigen
    var vorschlaegeFromServer = displayVorschlaegeFromServer(nutzereingabe, warengruppe);
}


