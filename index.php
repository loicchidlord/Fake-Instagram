<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="insta.css" />
    <script src="../js.js"></script>
  </head>

    <body>

      <div class="main">

        <div class="titre">Instagram</div>
          <div class="login">
            <form action="" method="post" name="login" >
              <input type="text" name="username" placeholder="Num. téléphone, nom d'utilisateur ou email">
                  <input type="password" name="password" id="motdepasse" placeholder="Mot de passe">   
                  <input type="checkbox" onclick="Afficher()">
              <input class="conn" type="submit" value="Connexion" name="submit">
            </form>
          </div>
          <div class="fb">
              <div class="logo"><a id="fb" href="www.facebook.com"><img class="img" src="/fb.png"></a></div>
              <a id="fb" href="www.facebook.com"><span class="texte">Se connecter avec Facebook</span></a>
          </div>
          
          <div class="fmdp">Mot de passe oublié ?</div>

      </div>

      <div class="sign"><p class="psign">Vous n'avez pas de compte ? <a href="#"><span style="font-weight: bold; color : #0095f6;">Inscrivez-vous</span></a></p></div>
      <div class="download"><p class="pdown">Télécharger l'application.</p></div>


    </body>

    <script>
        function Afficher()
        { 
          var input = document.getElementById("motdepasse"); 
          if (input.type === "password")
          { 
            input.type = "text"; 
          } 
          else
          { 
            input.type = "password"; 
          } 
        } 
</script>

</html>
