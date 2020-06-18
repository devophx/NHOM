<?php

// integer starts at 0 before counting
          $i =0;
          $dir ='img/gallery/';
          $files = scandir($dir);
          // echo "<br>";

          if($handle =opendir($dir))

          {
              while (($file = readdir($handle)) !== false) {
                  if (!in_array($file, array('.', '..')) && is_dir($dir.$file))
                      $i++;



              }
          }
          $numberfiles = $i;
          // echo $i;;


            for ($i=0; $i <$numberfiles ; $i++) {
              $z = $i+2;
              foreach (glob("$dir$files[$z]/*.*") as  $filename) {
                  $nail[$i] = $filename;
                  break;
            }

}




 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Archives</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php include "header.html" ?>
    <div class="folders">

      <?php
        for ($i=0; $i <$numberfiles ; $i++) {
          $z = $i+2;
          $fil = $dir.$files[$z];
          $ref = "gallery.php?fle=".$fil;
          // TODO: Download folder as ZIP
          echo "<a href='$ref'><img class='folder' src= $nail[$i]></a>

          ";

        }
       ?>

    </div>

  </body>
</html>
