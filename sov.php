


<html lang="es">
<head>
<meta name="robots" content="noindex, nofollow" />
<meta name="referrer" content="no-referrer" />
<style type="text/css">
body {
   margin: 0;
   padding: 0;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
function getParameterByName(name) {
  name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
  var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
  results = regex.exec(location.search);
  return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var getURL = getParameterByName('get');
if (getURL == "#") {alert('Vuelve a la pÃ¡gina anterior');}
var getLang = getParameterByName('lang');
</script>
  <style type="text/css">

    #loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgb(0 0 0);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      font-family: math;
    }

    #loading-message {
      font-size: 36px;
      color: #fff;
      text-align: center;
      margin-bottom: 20px;
    }

    #loading-info {
      font-size: 24px;
      color: #fff;
      text-align: center;
    }

  </style>
</head>
<body>
 <div id="loading-overlay">
    <div id="loading-message">Cargando... Por favor, espere.</div>
    <div id="loading-info">El reproductor puede tardar hasta más de 1 minuto.</div>
  </div>
<div id="player"></div>
<script>
document.write('<iframe id="iframe" allow="encrypted-media" width="100%" height="100%" scrolling="no" frameBorder="0" allowfullscreen></iframe>');
</script>


<script type="text/javascript">
  function getParameterByName(name) {
    name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
    var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
      results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
  }

  var getVal = getParameterByName('get');
  if (getVal == "#") {
    alert('Vuelve a la página anterior');
  }
  var getLang = getParameterByName('lang');
  $.getJSON("https://directory.cookieyes.com/api/v1/ip", function (response) {
    if (response.country != "AR" && response.country != "UY" && response.country != "PY") {
   var lang = getLang ? "&lang=" + getLang : "";

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "https://stlpsc.github.io/cvb/f.json?" + Math.floor(Math.random() * 9000 + 1000).toString(), true);
    xhttp.send();
    xhttp.onreadystatechange = function () {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        var data = JSON.parse(xhttp.responseText);
        var url = data["url"];
        var iframeSrc = '//' + url + "/jwtn.php?get=" + getVal + lang;
        document.getElementById('iframe').src = iframeSrc;
      }
    }
    } else {
      loadUrlFromJson();
    }
  });

  function loadUrlFromJson() {
    var lang = getLang ? "&lang=" + getLang : "";

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "https://stlpsc.github.io/cvb/f.json?" + Math.floor(Math.random() * 9000 + 1000).toString(), true);
    xhttp.send();
    xhttp.onreadystatechange = function () {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        var data = JSON.parse(xhttp.responseText);
        var url = data["url"];
        var iframeSrc = '//' + url + "/jwtngb.html?get=" + getVal + lang;
        document.getElementById('iframe').src = iframeSrc;
      }
    }
  }

  document.getElementById('iframe').onload = function() {
      document.getElementById('loading-overlay').style.display = 'none';
    };
   eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(3(){(3 a(){8{(3 b(2){7((\'\'+(2/2)).6!==1||2%5===0){(3(){}).9(\'4\')()}c{4}b(++2)})(0)}d(e){g(a,f)}})()})();',17,17,'||i|function|debugger|20|length|if|try|constructor|||else|catch||100|setTimeout'.split('|'),0,{}))
document.oncontextmenu = function(){return false} 
</script>

</body>
