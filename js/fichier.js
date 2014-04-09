 var xhr = new XMLHttpRequest() ;
        xhr.open('GET', "ete_requette.php") ;

      xhr.onreadystatechange = function() {
      if (xhr.readyState == xhr.DONE && xhr.status == 200) {
        var explication = xhr.responseText ;
        $(this.el).html("");
              
      }
    }

    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send() ; 
