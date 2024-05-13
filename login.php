<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="./css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="./css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
   <title>Inicio de sesión</title>
</head>

<body>
   <img class="wave" src="img/wave.png">
   <div class="container">
      <div class="img">
         <img src="img/bg.svg">
      </div>
      <div class="login-content">
         <form id="loginForm" method="post" action="botones.html">
            <img src="img/avatar.svg">
            <h2 class="title">BIENVENIDO/A!</h2>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <input id="usuario" type="text" class="input" name="usuario">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <input type="password" id="input" class="input" name="password">
               </div>
            </div>
            <div class="view">
               <div class="fas fa-eye verPassword" onclick="togglePassword()" id="verPassword"></div>
            </div>

            <div class="text-center">
               <a class="font-italic isai5" href="#">Olvidé mi contraseña</a>
               <a class="font-italic isai5" href="#">Registrarse</a>
            </div>
            <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
         </form>
         <div id="errorMessage" style="color: red; margin-top: 10px; display: none;">Usuario o contraseña incorrectos.</div>
      </div>
   </div>
   <script src="js/fontawesome.js"></script>
   <script src="js/main.js"></script>
   <script src="js/main2.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.bundle.js"></script>
   <script>
      function togglePassword() {
         var passwordField = document.getElementById("input");
         var eyeIcon = document.getElementById("verPassword");
         if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
         } else {
            passwordField.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
         }
      }

      document.getElementById("loginForm").addEventListener("submit", function(event) {
         var username = document.getElementById("usuario").value;
         var password = document.getElementById("input").value;
         if (username === "Admin" && password === "123") {
            
         } else {
            document.getElementById("errorMessage").style.display = "block";
            event.preventDefault(); 
         }
      });
   </script>
</body>

</html>
