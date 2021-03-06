<?require_once "sSimple.php"?>
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
        min-height: 100px;
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
            <li><a href="#">Inici</a></li>
            <li class="active"><a href=".">Cerca llibres</a></li>
            <li><a href="./contact.php">Contacte</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Cerca llibres <small>Troba els llibres que tenim a la biblioteca</small></h1>
        </div>
        <div class="row">
          <div class="span4">
            <h3 style="margin-bottom: 20px;">Cerca llibres</h3>
            <form action="#" method="get">
              <?if($search):?>
                <input name="search" value="<?= $s;?>" class="span3" type="text" placeholder="títol, autor, etc." />
              <?else:?>
                <input name="search" class="span3" type="text" placeholder="títol, autor, etc." />
              <?endif;?>
              <input type="submit" value="Cerca" />
            </form>
            <em style="color:green;">Obert dissabtes de <strong>11-13</strong> i de <strong>17-19</strong></em>
          </div>
          <div class="span10">
            <?if($search):?>
              <h2 style="margin-left: -10px;">Resultats per a "<i style="color: red;"><?= $s;?></i>" </h2>
              <h3 style="color: #777;"><?= count($books);?> Llibres trobats</h3>
              <?foreach($books as $book)echo $book->show();?>
            <?else:?>
              <h2 style="margin-left: -10px;">Resultats </h2>
              <div>
                <p>No s'ha fet cap cerca.</p>
              </div>
            <?endif;?>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; Comissió Cultural d'Atzeneta del Maestrat</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
