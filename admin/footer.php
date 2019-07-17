<div class="sticky">
  <hr>
  <div class="row" style="padding-left:10px;padding-top:10px;margin-top:-10px;text-align:center;background:#242424;">
    <div class="col-1"></div>
    <div class="col-2">
      <a href="index.php">
      <img id="home" src="img/star.png" alt="" style="width:35px;margin-left: -2px;">
      <font style="font-weight:600;color:#fff;font-size:10px">HOME</font>
      </a>
    </div>
    <!-- <div class="col-2">
       <a href="user.php">
       <img id="user" src="img/manager.png" alt="" style="width:35px">
       <font style="font-weight:600;color:#fff;font-size:10px">USER</font>
       </a>
    </div> -->
    <div class="col-2">
       <a href="tool.php">
      <img id="tool" src="img/construction-and-tools.png" alt="" style="width:35px">
      <font style="font-weight:600;color:#fff;font-size:10px">TOOLS</font>
       </a>
    </div>
    <div class="col-2">
       <a href="sdm.php">
      <img id="sdm" src="img/constructor.png" alt="" style="width:35px">
      <font style="font-weight:600;color:#fff;font-size:10px">SDM</font>
       </a>
    </div>
    <div class="col-2">
       <a href="jadwal.php">
      <img id="jadwal" src="img/calendar.png" alt="" style="width:35px;margin-left: 5px;">
      <font style="font-weight:600;color:#fff;font-size:10px">JADWAL</font>
       </a>
    </div>
    <div class="col-2">
      <a href="../index.php">
      <img src="img/keys.png" alt="" style="width:35px">
      <font style="font-weight:600;color:#fff;font-size:10px">LOGOUT</font>
      </a>
    </div>
    <div class="col-1"></div>
  </div>
</div>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/swiper.min.js"></script>
    <script type="text/javascript">
    var mySwiper = new Swiper ('.swiper-container');
    </script>
    <!-- <script>
    $(document).ready(function(){
      $("#home").click(function(){
          $("#div1").load("home.php");
      });
    });
    $(document).ready(function(){
      $("#user").click(function(){
          $("#div1").load("user.php");
      });
    });
    $(document).ready(function(){
      $("#tool").click(function(){
          $("#div1").load("tool.php");
      });
    });
    $(document).ready(function(){
      $("#sdm").click(function(){
          $("#div1").load("sdm.php");
      });
    });
    $(document).ready(function(){
      $("#jadwal").click(function(){
          $("#div1").load("jadwal.php");
      });
    });
    </script> -->
    <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
  </body>
</html>
