<!DOCTYPE html>
<html lang="ca">
  <head>
    <meta charset="utf-8">
    <title>Biblioteca Municipal d'Atzeneta del Maestrat</title>
    <meta name="author" content="Casal Popular">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="atz-biblioteca/twitter-bootstrap-5217131/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 300px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span10 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }

    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">Biblioteca d'Atzeneta del Maestrat</a>
          <ul class="nav">
            <li><a href="./index.php">Cerca llibres</a></li>
            <li class="active"><a href="./search.php">Cerca Avançada</a></li>
            <li><a href="./contact.php">Contacte</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Cerca avançada <small>Cerca millor el teu llibre</small></h1>
        </div>
        <div class="row">
          <div class="span4">
            <h3 style="margin-bottom: 20px;">Cerca llibres</h3>
            <form action="#" method="get">
              <input name="nom" class="span3" style="width: 193px;margin:2px;" type="text" placeholder="nom" />
              <input name="autor" class="span3" style="width: 193px;margin:2px;" type="text" placeholder="autor" />
              <input name="idioma" class="span3" style="width: 193px;margin:2px;" type="text" placeholder="idioma" />
              <input name="contingut" class="span3" style="width: 193px;margin:2px;" type="text" placeholder="contingut" />
              <input name="editorial" class="span3" style="width: 193px;margin:2px;" type="text" placeholder="editorial" />
              <input name="ISBN" class="span3" style="width: 193px;margin:2px;" type="text" placeholder="ISBN" />
              <input type="submit" value="Cerca Avançada" />
            </form>
          </div>
          <div class="span10">
            <h2>Resultats</h2>
            <div style="padding: 20px;">
            <p>No s'ha fet cap cerca.</p>
            </div>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; Comisió Cultural d'Atzeneta del Maestrat</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>

