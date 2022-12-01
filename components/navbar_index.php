<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <header>
      <nav>
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo center"><i class="material-icons">videogame_asset</i>Syphon</a>
          <div class="right">
            <a href="action/login.php"><i class="fa-regular fa-circle-user"></i></a>
            <i class="material-icons dropdown-trigger" id="modeswitcher"> remove_red_eye</i>
          </div>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="left hide-on-med-and-down">
            <li><a href="terraria.php">Terraria</a></li>
            <li><a href="dbd.php">Dead By Daylight</a></li>
            <li><a href="soom.php">Soom</a></li>
            <li><a class="waves-effect waves-light btn modal-trigger blue2" href="#modal1">Contact</a></li>
          </ul>
        </div>
      </nav>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="terraria.php">Terrariaa</a></li>
        <li><a href="dbd.php">Dead By Daylight</a></li>
        <li><a href="soom.php">Soom</a></li>
        <li><a class="waves-effect waves-light btn modal-trigger blue2" href="#modal1">Contact</a></li>
        <li><i class="fa-solid fa-cat" id="nyan"></i></li>
      </ul>
    </header>
    <!-- Modal -->
    <div class="modal-content">
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="container">
          <div class="row">
            <div class="col s12 l12 modal-start">
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
                        <a href="#!" class="modal-close waves-effect waves-light btn-flat">Sen</a>
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
  </body>
</html>