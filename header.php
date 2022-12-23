<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/config.php";
   include_once($path);
?> 

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?php echo $myTitle; ?></title>
        <meta name="description" content="<?php echo $myDescription; ?>">
        <meta name="keywords" content="Design studio in Seattle, freelance web designer, Web design, UX design, web development">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Tomomi Matsuzaki">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="https://tomomim.com/"/>
        <meta property="og:image" content="https://tomomim.com/images/tomomi-matsuzaki-logo.svg" />
        <meta property="og:image" content="https://tomomim.com/images/tomomi-matsuzaki-profile.jpg" />

        <!-- Links -->

        <link rel="icon" type="image/png" sizes="16x16" href="/favicon.png">
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
        <!--
        <link href="https://fonts.googleapis.com/css?family=Arvo:700|Montserrat:400,700,900|Ubuntu:700" rel="stylesheet">
        -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="/fadein.js"></script>


        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141044406-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-141044406-1');
        </script> 
        
        <!-- Fixed Nav Scrolled -->
        <script>
        $(function () {
        $(document).scroll(function () {
            var $nav = $(".main-nav");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
          
        $(function () {
        $(document).scroll(function () {
            var $nav = $(".main-nav");
            var $logocolor = $(".main-nav img");
            if($(this).scrollTop() > $nav.height()){
                $logocolor.attr('src',"/images/tomomi-matsuzaki-logo.svg");    
            }else{
                $logocolor.attr('src', $('.main-nav img').attr("initial-src")); 
            }
            
            });
        });
            
        </script>
    </head>
    
    
    <body>
        <!-- Navigation -->    
        <header>
            <nav class="main-nav">
                <a href="/"><img src="<?php echo $myLogo; ?>" initial-src="<?php echo $myLogo; ?>" alt="Tomomi Matsuzaki Design Studio Logo" class="logo fadein"></a>
              <input type="checkbox" id="nav" class="hidden"/>
              <label for="nav" class="nav-open"><i></i><i></i><i></i></label>
              <div class="nav-container fadein <?php echo $myNavClass; ?>">
                <ul>
                  <li><a href="/#work">PROJECT</a></li>
                  <li><a href="/#about">ABOUT</a></li>
                  <li><a href="https://tomomim.com/Tomomi-Matsuzaki-Resume.pdf" target="_blank">RESUME</a></li>
                </ul>
              </div>
            </nav>
        </header>
