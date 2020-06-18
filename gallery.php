<?php

$files = $_GET['fle'];
$exp = explode("/", $files);
$title = $exp[2];
foreach (glob("$files/*.*") as $num=> $filename) {

}



$dir2 =$files."/";
$files2 = scandir($dir2);
$i=0;
// echo "<br>";

if($handle =opendir($dir2)){
    while (($file = readdir($handle)) !== false) {
        if (in_array($file, array('.', '..')) && is_dir($dir2.$file))
        $i++;
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
    <div class="folds">

      <?php
      if ($title=="Audio") {
        foreach (glob("$files/*.*") as $key=> $filename) {
          if ($key ==0) {
            continue;
          }
            // echo "<a href='$filename'><img class='fold' src='img/gallery/Audio/1.png'></a>";
            $n = explode("/", $filename);
            $file = explode(".", $n[3]);
            echo "
            <a href='$filename' class='audio' download>
            <audio controls poster='placeholder.png'>
              <source src='$filename' type='audio/ogg'>
              <source src=''$filename' type='audio/mpeg'>
              Your browser does not support the audio element.
            </audio>
            <p>$file[0]</p>
            </a>



            ";


      }
    }elseif ($title=="Photo") {

    foreach ( $files2 as $key => $value) {
      if (in_array($value, array('.', '..'))){
          continue;
      }else{
        // Differentiate Folders from images
        $extt = explode(".", $value);
        if (isset($extt[1])) {
          // Case of an image
          echo "
                <div class='fold'>
                <a href='$dir2$value'><img  src='$dir2$value'></a>
                <a href='$dir2$value' download ><i class='fa fa-arrow-circle-down' aria-hidden='true'>Download</i></a>

                </div>";
        }else{
          // Case of a directory
          $ddd = $dir2.$value."/";
          foreach (glob("$ddd*.*") as $key=> $filename) {
            // Videos
            // echo $dir2;
            if ($key ==0) {
              continue;
            }



        }
        // <a href='$dir2$value'><img  src='$filename'></a>
        // TODO: Reference make
        $fil = $dir2.$value;
        $ref = "gallery.php?fle=".$fil;
        // echo $dir2.$value;
          echo "
                <div class='fold'>
                <a href='$ref'><img  src='$filename'></a>


                </div>";
        }

    }
    }





  }else{
    foreach (glob("$files/*.*") as $key=> $filename) {
      // Videos
      if ($key ==0) {
        continue;
      }
      echo"
      <video class='fold' width='470' height='255' controls>
          <source src='$filename' type='video/mp4'>
          <source src='$filename' type='video/ogg'>
          <source src='$filename' type='video/webm'>
          <object data='$filename' width='470' height='255'>
          <embed src='$filename' width='470' height='255'>
          </object>
      </video>

      ";


  }
  }


       ?>

    </div>

  </body>
</html>
