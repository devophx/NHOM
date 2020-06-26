<?php session_start();
if (!isset($_SESSION['class'])) {
  header("Location:login.php");
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STUDENT PORTAL</title>
    <link rel="stylesheet" href="styledash.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="jquery.js"></script>
    <script>
        $(document).ready(function(){
          var wid = $(window).width();
          // console.log(wid);
          // Sidemenu
if (wid<=800) {
  $(".hamberger").click(function(){
    $(".sidebar").toggleClass("disappear");
    $(".sidebar2").toggleClass("disappear");
  });

}else{
  $(".hamberger").click(function(){
    $(".wrapper").toggleClass("collapse");
    $(".sidebar2").toggleClass("disappear");
  });
}

          // End sidebar
var trigger = $(".wrapper .sidebar ul li a");
var container = $(".main_container");
trigger.on('click', function(){
  var $this = $(this);
  var target = $this.data('target');
  container.load(target + '.php');

  return false;
});




        });
    </script>
  </head>
  <body id="body" >
    <div class="wrapper wrapper1">
      <div class="top_navbar">
        <div class="hamberger" id="hum">
          <div class=""></div>
          <div class=""></div>
          <div class=""></div>
        </div>

        <div class="top_menu">
          <div class="logo">NAME</div>
          <ul>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
          </ul>

        </div>
      </div>
      <div class="sidebar" id="sidebar">
        <div hidden>
          <?php include'stdassignment.php' ?>
        </div>
        <ul>
          <li> <a class="lins" href="#" data-target="fees">
          <span class="icon"></span>
          <span class="title"> FEES</span>
          </a>
         </li>

         <li> <a class="lins" href="#" data-target="results" >
         <span class="icon"></span>
         <span class="title"> RES</span>
         </a>
        </li>

        <li> <a class="lins" href="#" data-target="stdassignment" >
        <span class="icon"></span>
        <span class="title"> ASIGN</span>
        <span id="notif"><?php echo $_SESSION['cnt']; ?></span>
        </a>
       </li>

       <li> <a class="lins" href="#" data-target="news" >
       <span class="icon"></span>
       <span class="title"> NEWS</span>
       </a>
      </li>

       <li> <a class="lins" href="#" data-target="update"  >
       <span class="icon"></span>
       <span class="title"> UPD</span>
       </a>
      </li>



        </ul>
        <button class="logout" >
          <a  href="includes/logout.inc.php">
          LOGOUT
          </a>
        </button>


      </div>
<div class="main_container">
  <div class="item">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat
       nulla pariatur. Excepteur sint occaecat cupidatat non proident,
     sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>

  <div class="item">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat
       nulla pariatur. Excepteur sint occaecat cupidatat non proident,
     sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>

  <div class="item">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
       reprehenderit in voluptate velit esse cillum dolore eu fugiat
       nulla pariatur. Excepteur sint occaecat cupidatat non proident,
     sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>
</div>


    </div>

<script type="text/javascript">
var bod = document.getElementById('sidebar');
var hum = document.getElementById('hum');
var lins = document.getElementsByClassName('lins');
var wid = $(window).width();
var con = 0;
if (wid<= 800 && con==0) {
bod.style.display = 'none';

hum.addEventListener('click',function(){
console.log("PPP");
  if (con==0) {
    con = 1;
    bod.style.display = 'block';
  }else{
    con = 0;
    bod.style.display = 'none';
  }

});
}



if (wid<=800) {
  for (var i = 0; i < lins.length; i++) {
    lins[i].addEventListener('click',function(){
    console.log(con);
        con = 0;
        bod.style.display = 'none';


    });
  }
}

</script>

  </body>
</html>
