
 const database = {
    title: 'TOP 1000 songs ',

  };
  
  /**
   * Initializes the app when the page is fully loaded.
   * 
   * Instead placing the code outside of a function, this ensures that all expected
   * DOM elements are loaded and available. It is a good practice in Javascript, 
   * and might prevent some funky errors.
   */
  window.addEventListener('load', function () {
    document.getElementById('position').innerHTML = 0;
    showSongs();
  });
  
  var html ="<table border='1|1'>"
function showSongs() {
    html+='<thead>';
    html+='<tr>';
    html+='<td>'+'Position'+'</td>';
    html+='<td>'+'Position'+'</td>';
    html+='<td>'+'Position'+'</td>';
    html+='<td>'+'Position'+'</td>';
    html+='</tr>';
    html+='</thead>';
  for(var i=0;i<Myarr.length;i++){

    html+='<tr>';
    html+='<td>'+Myarr[i].position+'</td>';
    html+='<td>'+Myarr[i].artist+'</td>';
    html+='<td>'+Myarr[i].title+'</td>';
    html+='<td>'+Myarr[i].year+'</td>';
    html+='</tr>';

  }
  document.getElementById("table").innerHTML = html;
    
 };
 
