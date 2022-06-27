<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <jdoc:include type="head" />
  <link rel="stylesheet" href="templates/immob/css/style.css" />
  <script src="templates/immob/js/jquery.min.js"></script>
  <script src="templates/immob/js/menu_mobile.js"></script>
</head>

<body>
  <div id="conteneur">
    <header id="bandeau">
      <jdoc:include type="modules" name="en-tete" />
    </header>
    <nav id="menu_bureau">
      <jdoc:include type="modules" name="menu" />
      <jdoc:include type="modules" name="recherche" />
    </nav>
    <button id="btn_menu">Menu</button>
    <nav id="menu_mobile">
      <button id="btn_fermer">
        <h1>X</h1>
      </button>
      <jdoc:include type="modules" name="menu" />
    </nav>

    <section id="contenu">
      <jdoc:include type="component" />
    </section>

    <aside id="sidebar">
      <div id="newsletter">
        <jdoc:include type="modules" name="newsletter" />
      </div>
      <div id="identification">
        <jdoc:include type="modules" name="identification" />
      </div>
    </aside>

    <footer id="pied">
      <nav id="menu_pied">
        <jdoc:include type="modules" name="menu_pied" />
      </nav>
    </footer>
  </div>
</body>

</html>