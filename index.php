<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="administration.css" >
    </head>

<body>

<h2>Modal Login Form</h2>
<?php
    
if(isset($_GET['mensaje'])){
    $mensaje = $_GET['mensaje'];
    if($mensaje =='1'){
        print("Usuario o contraseña incorrectas");
    }
}
    ?>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="Control/control_ingreso.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="bomb.images/bomb6.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>