<html>
<head>
<script>
function registrar(usuario,vapunt,correcto) {
   
      
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "Control/insertarjuego.php?nombre="+usuario+"&punt="+varpunt+"&correcto="+correcto , true);
        xmlhttp.send();
    
}
</script>
</head>

<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>