<?php 

session_start();



?>


<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel = "stylesheet" href="style1.css">
    <title> Bibloteka Dituria </title>

    
</head>
<body>
    <div class="content-box">
        <div class="baner-box">
            <div class="header">
                <div class="header-logo">
                    <p>Audio Books </p>
                </div>
                <div class="header-nav">
                
                    <ul>

                        <button ><a href="project.html"> Kryefaqja</a></button>
                        <button> <a href="horror.html">Horror </a> </button>
                        <button> <a href="mister.html">Mister </a> </button>
                        <button> <a href="LibraShkencor.html"> Shkencor </a> </button>
                        <button> <a href="Romance.html">  Romance </a></button>
                        <?php
                    require_once("database.php");
                    require_once("query_auth.php");
                    $u = get_username();
                //    $u = $_SESSION['username'];
                    echo  (isset($_SESSION['username']) ? "" : "  <button id ='login-accountbutton' style='width:auto;' 
                    class='greenbtn'>  Login</button>"  );
                    
     
                         
                         
                         ?>
                        
                    </ul>
                    

                </div>
                <?php 
                         
                         require_once("database.php");
                         require_once("query_auth.php");
                         $u = get_username();
                         echo  (isset($_SESSION['username']) ? "<a href ='account.php'><img class='circular--square' src='images/$u.jpg'style=' position: relative;
                         width: 70px;
                         height:70px;
                         overflow: hidden;
                         border-radius: 50%; margin-top:2%;margin-left:13%;'></a>": "  ");
                        
                         echo (isset($_SESSION['username']) ? " <a href='logout.php'>  <button id='logout'> Log Out </button> </a>" : "  ");
                         
                         
                         
                         ?>
            </div>
           
        <div class="services">
            <div class="services-box">
           
             <p> <?php
             $audiobook = get_audiobook(11);
             echo "Title: ", $audiobook->get_title() ;

             ?> </p>         
             <p> <?php

             $audiobook = get_audiobook(11);
             echo "Author: ", $audiobook->get_author() ;

             ?> </p>         
                <small>
                    
                </small>
            </div>
            <div class="services-box">
            <p> <?php
             $audiobook = get_audiobook(12);
             echo "Title: ", $audiobook->get_title() ;

             ?> </p>         
             <p> <?php

             $audiobook = get_audiobook(12);
             echo "Author: ", $audiobook->get_author() ;

             ?> </p>         
                <small>
                   
                </small>
            </div>
            <div class="services-box">
            <p> <?php
             $audiobook = get_audiobook(13);
             echo "Title: ", $audiobook->get_title() ;

             ?> </p>         
             <p> <?php

             $audiobook = get_audiobook(13);
             echo "Author: ", $audiobook->get_author() ;

             ?> </p>        
                <small>
                    

                </small>


            </div>
            <div class="services-box">

            <p> <?php
             $audiobook = get_audiobook(14);
             echo "Title: ", $audiobook->get_title() ;

             ?> </p>         
             <p> <?php

             $audiobook = get_audiobook(14);
             echo "Author: ", $audiobook->get_author() ;

             ?> </p>        
                <small>
                    


                </small>

            </div>
        </div>
        
        <div class="services">
            <div class="services-box">


            <p> <?php
             $audiobook = get_audiobook(15);
             echo "Title: ", $audiobook->get_title() ;

             ?> </p>         
             <p> <?php

             $audiobook = get_audiobook(15);
             echo "Author: ", $audiobook->get_author() ;

             ?> </p>        
                <small>
                    
                </small>
            </div>
            <div class="services-box">
            <p> <?php
             $audiobook = get_audiobook(16);
             echo "Title: ", $audiobook->get_title() ;

             ?> </p>         
             <p> <?php

             $audiobook = get_audiobook(16);
             echo "Author: ", $audiobook->get_author() ;

             ?> </p>        
                <small>
                   
                </small>
            </div>
            <div class="services-box">
            <p> <?php
             $audiobook = get_audiobook(17);
             echo "Title: ", $audiobook->get_title() ;

             ?> </p>         
             <p> <?php

             $audiobook = get_audiobook(17);
             echo "Author: ", $audiobook->get_author() ;

             ?> </p>        
                <small>
                    

                </small>


            </div>
            <div class="services-box">

            <p> <?php
             $audiobook = get_audiobook(18);
             echo "Title: ", $audiobook->get_title() ;

             ?> </p>         
             <p> <?php

             $audiobook = get_audiobook(18);
             echo "Author: " , $audiobook->get_author();

             ?> </p>        
                <small>
                    


                </small>

            </div>
        </div>
        



        <div class="footer-box">
            <div class="footer">
                <div class="footer-inside-box">
                    <h4> Thenje per ju</h4>
                    <p>
                        "Ekzitojne dy dite ne vite qe nuk mund te besh asgje: njera quhet "dje" dhe tjetra "neser".
                        Prandaj e sotmja eshte nje dite e pershtatshme te duash, te besosh dhe kryesisht te jetosh!"
                    </p>\



                </div>
                <div class="footer-inside-box">
                    <h4> Link i shpejte</h4>
                    <ul>
                        <li> <a href="#"> <span> &raquo; </span> Dergo ne fillim </a> </li>
                    </ul>
                </div>
                <div class="footer-inside-box">
                    <h4> Komentet nga lexuesit</h4>
                    <p>
                        <span class="footer-green"> Albin Mehmeti </span> Faleminderit shume, jeni faqe shume e qelluar, na ndihmoni
                        shume ne pergjezhjen e librave per te lexuar dhe mbi te gjitha na dhuroni libra falas.
                    </p>
                    <p>
                        <span id="footer-green"> Fiona Ahmeti </span> Vetem vazhdoni pune shumee qelluar, sepse shoqeria jone e "teknologjise"
                        ka shume nevoje per libra te tille.
                    </p>
                </div>
                <div class="footer-inside-box">
                    <h4> Kontakti: </h4>
                    <form>
                        <input type="text" placeholder="Emri dhe Mbiemri">
                        <input type="email" placeholder="Email">
                        <input type="text" placeholder="Subjekti">
                        <input type="text" placeholder="Mesazhi">
                        <button type="submit"> Ruaj</button>

                    </form>
                </div>
            </div>
            <P> Na kontaktoni ne email: <a href="mailto:gm@gmail.com"> gm@gmail.com </a> </P>
        </div>
    </div>
    </div>
    <div id="id01" class="modal">
        <form class="modal-content animate" action="ajax.php" onsubmit="return do_login();">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/avatar.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
            <div class="g-signin2" data-onsuccess="onSignIn" id="googlebutton"></div>
                <label for="uname"><b>Username</b>
                </label>
                <input type="text" placeholder="Enter Username" name="uname" required class="uname" id="username">
                <div class="loader-wrapper">
                    <span class="loader"><span class="loader-inner"></span></span>
                </div>
                <label for="psw"><b>Password</b>
                </label>
                <input type="password" placeholder="Enter Password" name="psw" class="password" id="password">
                <h5 class="errorlabel"></h5>
                <button type="submit" class="logsubmit">Login</button>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                <br>
                <br> Not a member Yet ?
                <button type="button" id="signupButton" title="Close Modal"> Signup</button>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="jquery.scrollTo.min.js"></script>

    <script>
  $(document).ready(function(){
  $imgtext = $("<p>lorem ipsum dolar</p>");
  $imgtext.css({
    'background' : '#000000',
    'color' : '#ffffff',
    'margin-top' : '9.9em',
    'padding' : '0.5rem',
    'text-transform' : ' uppercase',
    'opacity' : '0.5'
  });
  $('.latestwork-img').hover(function(){
    $(this).append($imgtext);
  });
  $('.slider-btn-center').click(function(){
    $('.slider-box-left').animate({left:'-100%'});
     $('.slider-box').animate({right:'0'});
  });
  $('.slider-btn-center-fixed').click(function(){
    $('.slider-box-left').animate({left:'-100%'});
    $('.slider-box').animate({right:'0'});
  });
  $('.slider-btn-left').click(function(){
    $('.slider-box').animate({right:'-200%'});
     $('.slider-box-left').animate({left:'0'});
  });

  $('.slider-btn-right').click(function(){
    $('.slider-box').animate({left:'-200%'});
    $('.slider-box-right').animate({right:'0'});
  });
  $('.slider-btn-right-fixed').click(function(){
    $('.slider-box').animate({left:'-200%'});
    $('.slider-box-right').animate({right:'0'});
  });
  $('.slider-btn-middle').click(function(){
    $('.slider-box').animate({left:'0%'});
    $('.slider-box-right').animate({right:'-100%'});
                                   });
});
</script>

    
<script>
        var button = document.getElementById('login-accountbutton');
        var modal = document.getElementById('id01');
        button.addEventListener('click', () => {
            modal.style.display = "block";
        });
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script type="text/javascript">
        function do_login() {
            var username = $("#username").val();
            var pass = $("#password").val();
            console.log("inside do_login");
            $.ajax({
                type: 'post',
                url: 'AJAX.php',
                data: {
                    do_login: "do_login",
                    username: username,
                    password: pass
                },
                success: function(response) {
                    if (response == 1) {
                      location.reload();
                      
                    } else if (response == 2) {
                       
                      alert("failure");
                    }
                }
            });
            return false;
        }
        </script>


<script>
        var button = document.getElementById('login-accountbutton');
        var modal = document.getElementById('id01');


        button.addEventListener('click', () => {

            modal.style.display = "block";

        });

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>



</body>

</html>
