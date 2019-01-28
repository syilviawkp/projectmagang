  
   <section id="main-content">
     <div class="col-lg-12"> 
      <section class="wrapper">
 <?php echo form_open('Welcome/'); ?>

  <div class="row">
          <div class="row mt">

  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:1100px; margin-left:20px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

     
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url()?>/assets/img/balkot.jpg" alt="Balaikota Batu" style="width: 2000px; height:530px;">
      </div>

      <div class="item">
        <img src="<?php echo base_url()?>/assets/img/Puskesbatu.jpg" alt="Puskesmas Batu" style="width: 2000px; height:530px;">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url()?>/assets/img/Puskesjunrejo.jpg" alt="Puskesmas Junrejo" style="width: 2000px; height:530px;">
      </div>

      <div class="item">
        <img src="<?php echo base_url()?>/assets/img/Puskesbeji.jpg" alt="Puskesmas Beji" style="width: 2000px; height:530px;">
      </div>

      <div class="item">
        <img src="<?php echo base_url()?>/assets/img/Puskesisir.jpg" alt="Puskesmas Sisir" style="width: 2000px; height:530px;">
      </div>

      <div class="item">
        <img src="<?php echo base_url()?>/assets/img/Puskesbumiaji.jpg" alt="Puskesmas Bumiaji" style="width: 2000px; height:530px;">
      </div>

    </div>



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <center><h1> Selamat Datang</h1></center>
    <!--footer end-->
  </div></div></section></div></section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url()?>/assets/lib/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url()?>/assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url()?>/assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?php echo base_url()?>/assets/lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url()?>/assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>/assets/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url()?>/assets/lib/common-scripts.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/assets/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/assets/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="<?php echo base_url()?>/assets/lib/sparkline-chart.js"></script>
  <script src="<?php echo base_url()?>/assets/lib/zabuto_calendar.js"></script>

  <!-- <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: "<?php echo base_url()?>/assets/img/ui-sam.jpg",
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script> -->
  
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
               legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>

