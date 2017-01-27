<?php
session_start();
include "koneksi.php";
extract($_GET);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-width,initial-scale=1.0"> 
  <meta name="keywords" content="cubdigital ,strategy ,bisnis ,digital ,cub , digitalindonesia, digitalbisnis, creative,"> 
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/cubstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet"> 
  <link rel="icon" type="image/ico" href="images/logo.png">
  <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function(){
setTimeout(function(){
   $('#my-preloader').css('display','none');
}, 3000);
});
</script>
<title>CUB DIGITAL</title>
</head>
<body>

  <!--Navigasi-->
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="myPage"><a class="scroll" href="http://cubdigital.com/"><img src="images/CUB-transparant.png" width="95" height="50"></a>
           </div>
        <div class="collapse navbar-collapse" id="myNavbar">
         <ul class="nav navbar-nav navbar-right">
            <li><a class="scroll" href="#home">Home</a></li>
            <li><a class='scroll' href="#services">Services</a></li>
            <li><a class='scroll' href="#portfolio">Portfolio</a></li>
            <li><a class='scroll' href="#about">About Us</a></li>
            <li><a class='scroll' href="#contact">Contact Us</a></li>
            <li><a href="http://cubdigital.com/wp/">Blog</a></li>

            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Login</a></li>
                <li><a href="#">Sign Up</a></li>
              </ul>
            </li>-->
          </ul>
        </div>
      </div>
</nav><!--end navigasi-->
<main> 

  <!--home-->
  <section id="home" style="background-image:url(images/agen3v2.jpg);background-repeat-x:no-repat; 
    background-repeat-y:no-repat; background-position-x: center;background-position-y: center;
    background-size: cover;background-attachment: initial; background-origin: initial; background-clip: initial;
    background-color: initial;">     
    <div class="container"><br/><br/>
    <div class="row ">
    <div class="col-sm-10 col-sm-offset-1">
 <?php
  $query=mysql_query("SELECT * FROM judul");
  while ($judul=mysql_fetch_assoc($query)){
  ?>
  <p style="color:white;font-size:45px;text-align:center;padding-top:50px;"><span class="lines2" style="color:white;"><b><?=$judul['judul']?></p></b></span>
<?php }?><br/>
 <?php
  $query=mysql_query("SELECT * FROM subjudul");
  while ($subjudul=mysql_fetch_assoc($query)){
  ?>
  <p style="color:white;font-size:20px;text-align:center;"><b><?=$subjudul['subjudul']?></p></b>
<?php }?>
   <br/><br/>
 <h2 style="text-align:center;color:white;slideanim">Digital in Indonesia</h2>
 <div class="page-header slideanim"></div>
   <div class="row text-center">
      <div class="col-sm-2  col-sm-offset-1 slideanim" >
        <h4 style="color:white;">Total <br/>Population</h4>
        <img src="images/population.png" >
        <p><h3 style="color:white;" ><b>59.1<br/>Million</b></p></h3>
      </div>

      <div class="col-sm-2 slideanim">
        <h4 style="color:white;">Active Internet User</h4>
        <img src="images/user.png" >
        <p><h3 style="color:white;"><b>88.1<br/>Million</p></h3></b>
      </div>

      <div class="col-sm-2 slideanim">
        <h4 style="color:white;">Active Social Media User</h4>
        <img src="images/medsos.png" >
        <h3 style="color:white;"><b><p>79.0<br/>Million</p></b></h3>
      </div>

      <div class="col-sm-2 slideanim">
        <h4 style="color:white;">Mobile Connections</h4>
        <img src="images/mobileuser2.png" >
        <h3 style="color:white;"><b>326.3<br/>Million</p></b></h3><p>
      </div>

      <div class="col-sm-2 slideanim">
        <h4 style="color:white;">Active Mobile Social User</h4>
        <img src="images/mobileuser.png" >
        <h3 style="color:white;"><b><p>66.0<br/>Million</p></b></h3>
      </div>
             <div class="col-sm-2 slideanim col-sm-offset-9">
        <h6 style="color:white;">Sources: UN,US Census Bureau: AP JII,Facebook, GSMA Intelligences</h6>
      </div>
    </div>

 </div>
 </div>
 </div>
  </section><!--end home-->
 <!--services-->
<section id="services" style="background-color:#fbfbfb">
  <div class="container">
  <br/>
  <h1 class="text" style="text-align:center;"><span class="lines"><b>SERVICES</h1></b></span></h1>
<br/>
<div class="col-sm-10 col-sm-offset-1">
        <div class="row text-center">
        <h1 >Welcome home, cubdigital</h1><br>
 <ul class="timeline">
        <li>
          <div class="timeline-badge"><img src="images/business.png"></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><b>Technology</b></h4>
              <p> </p>
            </div>
            <div class="timeline-body">
              <p>We Offer Custom Web Design and Development, Logo and Online Marketing for Small BUsinesses</p>
            </div>
          </div>
        </li>
        <br/><br/>
        <li class="timeline-inverted">
          <div class="timeline-badge"><img src="images/idea.png" ></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><b>Creative</b></h4>
            </div>
            <div class="timeline-body" >
              <p>We Offer unique online exprience to engage he audience with creative approach combined with sophisticated technology, social media service and digital advertising.
            </p>
            </div>
          </div>
        </li>
    </ul>
    </div>
    </div>
    <!--<h1 class="text" style="text-align:center;"><span class="lines"><b>SERVICES</h1></b></span></h1>
    <div class="row text-center">
    <h1 >Welcome home, cubdigital</h1><br>
        <div class="col-sm-10 col-sm-offset-1">
        <div class="col-sm-5 col-sm-offset-1">
        <img src="images/business.png">
        <p><h3><b>Technology</h3></b></p>
       <div class="row text-center">
        <h4>We Offer Custom Web Design and Development, Logo and Online Marketing for Small BUsinesses
       </div></h4>
        </div>
        <div class="col-sm-5 col-sm-offset-1">
        <img src="images/idea.png">
        <p><h3><b>Creative</h3></b></p>
        <div class="row text-center">
        <h4>We Offer unique online exprience to engage he audience with creative approach combined with sophisticated technology, social media service and digital advertising.
       </div></h4>
        </div>

      <br/>
    </div>-->
  </div>  
</section><!--end services-->
<!--portfolio-->
  <section id="portfolio">
      <div class="container text-center bg-grey">
        <div class="row"><br/>
      <div class="col-sm-10 col-sm-offset-1 " >
  <h1 class="text" style="text-align:center;"><span class="lines"><b>PORTFOLIO</h1></b></span>
  <br/>
  <h4><b>What we have created</h4></b>
  <div class="row text-center">
    <div class="col-sm-2  col-sm-offset-1 " >
      <h4 style="color:white;">Total Population</h4>
      <img src="images/bareksa.jpg" >
      </div>
      <div class="col-sm-2 ">
      <h4 style="color:white;">Total Population</h4>
      <img src="images/buana.jpg" >
      </div>
      <div class="col-sm-2 ">
      <h4 style="color:white;">Total Population</h4>
      <img src="images/bak.jpg" >
      </div>
      <div class="col-sm-2 ">
      <h4 style="color:white;">Total Population</h4>
      <img src="images/pizza1.jpg" >
      </div>
       <div class="col-sm-2 ">
      <h4 style="color:white;">Total Population</h4>
      <img src="images/balai.jpg" >
      </div>

    </div>

</div>
</div>
</div>
  </section><!--end portfolio-->
  <!--about-->
  <section id="about" style="background-image:url(images/background.jpg);" >
 <div class="container"><br/>
      <div class="row ">
      <div class="col-sm-10 col-sm-offset-1 " >
      <h1 class="text" style="text-align:center;color:#fff;"><br/>
          <span class="lines"><b>ABOUT US</h1></b></span>
          <br/><br/>
            <?php
            $query=mysql_query("SELECT * FROM about");
            while ($judul=mysql_fetch_assoc($query)){
            ?>
             <p style="color:#fff;font-size:20px;text-align: center;"><b><?=$judul['content']?></p></b></span>
          <?php }?><br/>
    </div>
     </div>      
    <div class=""><h2 class="text" style="font-style: oblique;text-align:center;color:#fff;"><u>Our Team</u></h2></div>
      <div class="row" style="margin-top:-50px;">
    <div class="col-sm-offset-2 col-sm-2 ">
      <img src="images/wiby.jpg" class="img-rounded" style="width:100%;" alt="Image">
      <!--<a href="#" class="edit-record" data-id="<span>
                                                <p><h4><b>Nama: Imam Bratakusuma</p></b></h4>
                                                <br/>
                                                <p><h4><b>Jabatan: Strategic & Planner</p></b></h4>
                                                <br>
                                                <p><h4><b>Alamat: Bogor</p></b></h4>
                                                <br>
                                                </span>"><button type="button" class="btn btn-link btn-xs"></button></a>--><h4 style="font-style: oblique;text-align:center;color:#fff;"><b>Imam Bratakusuma</h4></b> 
    </div>
    <div class="col-sm-2"> 
      <img src="images/rama.jpg" class="img-rounded" style="width:100%" alt="Image">
        <!--<a href="#" class="edit-record" data-id="<span>
                                                <p><h4><b>Nama: Rama Wardhana</p></b></h4>
                                                <br/>
                                                <p><h4><b>Jabatan: Bisnis & Planner</p></b></h4>
                                                <br>
                                                <p><h4><b>Alamat: Bogor</p></b></h4>
                                                <br>
                                                </span>"><button type="button" class="btn btn-link btn-xs">Rama Wardhana</button></a>--><h4 style="font-style: oblique;text-align:center;color:#fff;"><b>Rama Ariesta W</h4></b> 
    </div>
    <div class="col-sm-2"> 
      <img src="images/elang.jpg" class="img-rounded" style="width:100%" alt="Image">
             <!--<a href="#" class="edit-record" data-id="<span>
                                                <p><h4><b>Nama: Elang</font></p></b></h4>
                                                <br/>
                                                <p><h4><b>Jabatan: Strategic & Translater</p></b></h4>
                                                <br>
                                                <p><h4><b>Alamat: Bogor</p></b></h4>
                                                <br>
                                                </span>"><button type="button" class="btn btn-link btn-xs"> Elang Baraka </button></a>--><h4 style="font-style: oblique;text-align:center;color:#fff;"><b>Elang Baraka</h4></b> 
    </div>
    <div class="col-sm-2"> 
      <img src="images/dimazadi.jpg" class="img-rounded" style="width:100%" alt="Image">
             <!--<a href="#" class="edit-record" data-id="<span>
                                                <p><h4><b>Nama: Elang</font></p></b></h4>
                                                <br/>
                                                <p><h4><b>Jabatan: Strategic & Translater</p></b></h4>
                                                <br>
                                                <p><h4><b>Alamat: Bogor</p></b></h4>
                                                <br>
                                                </span>"><button type="button" class="btn btn-link btn-xs"> Elang Baraka </button></a>--><h4 style="font-style: oblique;text-align:center;color:#fff;"><b>Dimaz Adiwaskito</h4></b> 
    </div> 
  </div>
    </div>
<!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <!--<h4 class="modal-title" id="myModalLabel">Profile Creative Useful Brilliant</h4>-->
                    </div>
                    <div class="modal-body">
                    </div>
                   <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
      </div>
      </div>
      
      </div>
  </section>
<!--contact-->
<section id="contact">
  <div class="container">
<br/><br/>
    <h1 class="text" style="font-style: oblique;text-align:center;"><span class="lines"><b>CONTACT</h1></b></span>
    <div class="row ">
      <div class="col-sm-8 col-sm-offset-3 ">
      <p style="font-size:20px;color:#000;"><b>Contact us and we'll get to back to you within 24 hours</p></b>
      <p style="font-size:20px;color:#000;"><span class="glyphicon glyphicon-map-marker"  ></span><b> Bogor, Indonesia</p></b>
      <p style="font-size:20px;color:#000;"><span class="glyphicon glyphicon-envelope" style="font-size:20px;"></span><b> hello@cubdigital.com</p></b> 
       <br/>  
       <form action="proses.php" method="post"> 
        <div class="row slideanim">
          <div class="col-sm-9 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
        </div>
        <div class="row slideanim">
          <div class="col-sm-9 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        </div>
         <div class="row slideanim">
          <div class="col-sm-9 form-group">
        <textarea class="form-control" id="comments" name="pesan" placeholder="Comment" rows="5">
        </textarea><br></div></div>
        <div class="row">
          <div class="col-sm-9 form-group">
            <button class="btn btn-primary pull-right" name="submit">Send</button>
          </div>
        </div>    
      </div></form> 
    </div>   
</section><!--end contact-->
<div class="footer">
  <span><p><b>Creative Useful Brilliant</b> </p></span>
      </div>
</main>
<!--<script type="text/javascript" src="jquery-1.12.3.min.js"></script>-->

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a[href='#home'],.navbar a[href='#services'],.navbar a[href='#portfolio'],.navbar a[href='#about'],.navbar a[href='#contact'] , footer a[href='#myPage']").on('click', function(event) {
    // Prevent default anchor click behavior

    event.preventDefault();
    // Store hash
    var hash = this.hash;
    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
         // Add hash (#) to URL when done scrolling (default click behavior)
      //window.location.hash = hash;

    });
  });
  
  // Slide in elements on scroll
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");

        }
    });
  });
})
</script>
 <!--<script src="bootstrap.js"></script>
        <script>
        $(function(){
            $(document).on('click','.edit-record',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('hasil.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>-->
    <!--<div id="my-preloader"></div>-->
<!-- script GA -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-83305308-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
