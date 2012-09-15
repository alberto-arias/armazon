<!DOCTYPE html>
<head>
  <meta charset="utf-8"/>
  <title>Patrones</title>
  <meta name="description" content="patterns" />
  <meta name="author" content="Alberto Arias" />
  <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
  <meta name="robots" content="noindex, nofollow" />
  <link rel="Shortcut Icon" type="image/ico" href="/favicon.ico" />
  <link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon.png" />
  <link rel="stylesheet" href="../_assets/_css/_style.css" type="text/css"/>
  <style>
  body {
    margin: 5%;
    width: 90%;
  }
  .pattern {
    border-top: solid 1px #eee;
    padding: 1em 0;
    clear: both;
    overflow: hidden;
  }
  .pattern .display {
    width: 60%;
    float: left;
  }
  .pattern .source {
    width: 30%;
    float: right;
  }
  .pattern .source textarea {
    width: 90%;
  }
  </style>
</head>

<body>
  <h1>Patrones</h1>
  <p>Una lista de patrones de marcado utilizados en el sitio.</p>
  <?php
  $files = array();
  $handle=opendir('patterns');
  while (false !== ($file = readdir($handle))):
      if(stristr($file,'.html')):
          $files[] = $file;
      endif;
  endwhile;
  sort($files);
  foreach ($files as $file):
      echo '<div class="pattern">';
      echo '<div class="display">';
      include('patterns/'.$file);
      echo '</div>';
      echo '<div class="source">';
      echo '<textarea rows="6" cols="30">';
      echo htmlspecialchars(file_get_contents('patterns/'.$file));
      echo '</textarea>';
      echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
      echo '</div>';
      echo '</div>';
  endforeach;
  ?>

  <footer role="contentinfo">
    <p><small>Alberto Arias, 2012. Este listado de patrones se basa en el código del <cite><a href="https://github.com/adactio/Pattern-Primer/" target="_blank">Pattern Primer</a></cite> de Jeremy Keith.</small></p>
  </footer>

</body>
</html>