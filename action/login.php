<html>
 <head>
   <meta charset="utf-8">
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
   <!--Import materialize.css-->
   <link id="theme-controller" type="text/css" rel="stylesheet" href="css/theme-dark.css">
   <link type="text/css" rel="stylesheet" href="css/materialize.css">
   <link type="text/css" rel="stylesheet" href="css/script.css">
   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
   <link rel="icon" href="img/syphon.jpg">
   <title>Syphon Games</title>

 </head>

 <body>
  <?php require "components/navbar.php" ?>

   <div class="block1">
     <div class="row animate__animated animate__fadeIn wow">
       <div class="col s10 offset-s1 l6 offset-l3 description anim1">
        <div class="center login-btn">
          <a class="waves-effect waves-light btn" href="signin.php">Se connecter</a>
        </div>
        <div class="center login-btn">
          <a class="waves-effect waves-light btn" href="signup.php">S'inscrire</a>
        </div>
      </div>
     </div>
    </div>

    <!-- Modal -->
    <div class="modal-content">
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="container">
          <div class="row">
            <div class="col s12 l12">
              <h5 class="blue-text">Contact</h5>
              <div class="row">
                <form class="col s12 l12">
                  <div class="row">
                    <div class="input-field col s6 l6">
                      <input id="first_name" type="text" class="validate">
                      <label for="first_name">Prénom</label>
                    </div>
                    <div class="input-field col s6 l6">
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Nom</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12 l12">
                      <input id="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12 l12">
                      <textarea id="textarea1" class="materialize-textarea"></textarea>
                      <label for="textarea1">Message</label>
                      <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-light btn-flat">Agree</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/198411c19a.js" crossorigin="anonymous"></script>
 </body>
</html>