<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <title>Adventkalender</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="initial-scale=0.60, minimum-scale=0.60, maximum-scale=0.60">
    <link rel="stylesheet" href="kalender-style.css">
    <script src="request.js" defer></script>
  </head>
  <body>
  <?php
      $POSTERS_PER_ROW = 8;
      $RING_RADIUS = 300;
      $counter=1;

        $posterAngle = 360/$POSTERS_PER_ROW;
        echo "<div id='stage'>";
        echo "<div id='rotate'>";
        for($j=1;$j<4;$j++){
          echo "<div id='ring-$j' class='ring'>";
        for($i=0;$i<$POSTERS_PER_ROW;$i++){
          $transform = "rotateY(" . ($posterAngle * $i) . "deg) translateZ(" . $RING_RADIUS . "px)";
          echo "<div class='poster' id='door-$counter' style='-webkit-Transform:$transform' onclick='ToFetch($counter)'>";
          // setup the number to show inside the poster
          echo "<a class='num'>$counter</a>";
          echo "</div>";
          $counter++;
        }
          echo "</div>";
        }
      echo "</div>";
      echo "</div>";
  ?>
  </body>
</html>
