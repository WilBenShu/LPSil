<header>
</header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Accueil <span class="sr-only">(current)</span></a></li>
        <li><a href="education">Education</a></li>
        <li class="dropdown">
          <a href="culture" class="dropdow-toggle disabled" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Culture <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Associations</a></li>
            <li><a href="#">Litterature</a></li>
            <li><a href="#">Art|Spectacle</a></li>
            <li><a href="#">Evenementiel</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="economie" class="dropdow-toggle disabled" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Economie|Politique <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Affaires</a></li>
            <li><a href="#">PME|PMI</a></li>
            <li><a href="#">Societe</a></li>
            <li><a href="#">Boutique</a></li>
            <li><a href="#">Industrie</a></li>
            <li><a href="#">Politiques</a></li>
          </ul>
        </li><li class="dropdown">
          <a href="bienEtre" class="dropdow-toggle disabled" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bien-Etre <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Mode</a></li>
            <li><a href="#">Sante</a></li>
            <li><a href="#">Beaute</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="sports" class="dropdow-toggle disabled" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sports <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Disciplines</a></li>
            <li><a href="#">Tournois</a></li>
            <li><a href="#">Evenements Sportifs</a></li>
          </ul>
        </li>
        <li><a href="divers">Divers</a></li>
      </ul>
       <?php
        if(!isset($_SESSION['login'])) {?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="connection.php">Inscription|Connexion</a></li>
      </ul>

      <?php
      }
      if(isset($_SESSION['login']) && $_SESSION['login']->getAccreditation()==1) {?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="liste"><?php echo $_SESSION['login']->getLogin(); ?></a></li>
        <li><a href="deconnection.php">DECONNEXION</a></li>
      </ul>

      <?php
      }
      if(isset($_SESSION['login']) && $_SESSION['login']->getAccreditation()==2) {?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="liste"><?php echo $_SESSION['login']->getLogin(); ?></a></li>
        <li><a href="deconnection.php">DECONNEXION</a></li>
      </ul>

      <?php
      }
      ?>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
