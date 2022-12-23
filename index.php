<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   include_once($path);
?> 

<div class="scroll-box">
<div class="landing-container" id="home">
    <img src="/images/background.png" alt="Background Image" class="back-wave">
    <img src="/images/background-mobile.png" alt="Background Image" class="back-wave-mobile">
    <div class="landing-content-left fadein">
        <h1>Hello, I'm Tomomi</h1>
        <p>A UX designer who believes in the power of <mark class="mark-pink">visualization</mark> and <mark class="mark-blue">storytelling</mark>. I create emotional connections and bring <mark class="mark-yellow">meaningful solutions</mark> through design.</p>
    </div>
    <div class="landing-content-right fadein">
        <img src="/images/tomomi_matsuzaki_pic.png" alt="Tomomi Matsuzaki">
    </div>
    
    <a href="#work" class="scroll"><span class="fadein"></span></a>
    
</div>
</div>
    

    
<!-- Work -->    
<div class="work" id="work">
    
    <div class="work-container scroll-fadein">
        <div class="work-left">
            <img src="/images/safe-thumbnail.png" alt="Safe Haven">
        </div>
        <div class="work-right">
            
            <h3>Digital Kiosk App</h3>
            <p>University of Washington</p>
            <br>
            <p>Support Afghan refugee resettlement in Washington with human-centered design</p>
            <a href="/safe-haven/"><button class="project-btn">READ CASE STUDY &rarr;</button></a>
        </div>
    </div>
    
    <div class="work-container scroll-fadein">
        <div class="work-left">
            <img src="/images/scc-thumbnail.png" alt="Seattle Central College">
        </div>
        <div class="work-right">
            
            <h3>UX Web Design</h3>
            <p>Seattle Central College</p>
            <br>
            <p>Help students navigate college during the COVID-19 outbreak</p>
            
            <a href="/seattle_central_covid19/"><button class="project-btn">READ CASE STUDY &rarr;</button></a>
        </div>
    </div>
    
    <div class="work-container scroll-fadein">
        <div class="work-left">
            <img src="/images/grow-together-thumbnail.png" alt="Grow Together video prototype">
        </div>
        <div class="work-right">
            <h3>Video Prototype</h3>
            <p>University of Washington</p>
            <br>
            <p>Design for behavior change toward making more sustainable choices</p>
            
            <a href="/grow-together/"><button class="project-btn">READ CASE STUDY &rarr;</button></a>
        </div>
    </div>
    
    <div class="work-container scroll-fadein">
        <div class="work-left">
            <img src="/images/feetfirst-storytelling.png" alt="Feet First Storytelling Project">
        </div>
        <div class="work-right">
            <h3>Social Impact Storytelling</h3>
            <p>Feet First</p>
            <br>
            <p>Promote safe and walkable communities with strategic storytelling</p>
            
            <a href="/feet-first/"><button class="project-btn">READ CASE STUDY &rarr;</button></a>
        </div>
    </div>
    
    <div class="work-container scroll-fadein">
        <div class="work-left">
            <img src="/images/graphic-design-thumbnail.png" alt="Graphic Design Work">
        </div>
        <div class="work-right">
            <h3>Visual Communication</h3>
            <p>Communicate messages through visuals</p>
            
            <a href="/graphic-design/"><button class="project-btn">LEARN MORE &rarr;</button></a>
        </div>
    </div>
    
    <div class="work-container scroll-fadein">
        <div class="work-left">
            <img src="/images/calligraphy-thumbnail.png" alt="Calligraphy Work">
        </div>
        <div class="work-right">
            <h3>Calligraphy</h3>
            <p>Create inpirational spaces with calligraphy - the art of forming beautiful symbols by hand</p>
            
            <a href="/calligraphy-work/"><button class="project-btn">LEARN MORE &rarr;</button></a>
        </div>
    </div>

</div>

    
    
<!-- About -->
<section class="about" id="about">
    <div class="section-flex-container  scroll-fadein">
        
    <div class="about-container">
        <div class="about-heading">
            <h4>Get to know me.</h4>
        </div>
        
        <p>
            I was born and grew up in Kobe, Japan, and am currently located in Seattle. I am a self-motivated lifetime learner who keeps seeking new possibilities in life and the opportunities to positively impact the world through my work. In 2015, I left my customer service job at the Japanese airline and decided to rebuild my education and career here in Seattle. During my educational journey in Seattle, I discovered my passion for design for good, which simply resonated with my happiness to help others. Since then, design has become my new tool to communicate with people and communities.</p> 
            
            <br>
            <p>I'm a social impact advocate. During the past few years, I’ve been providing web/graphic design work for small businesses and nonprofits in Seattle and Japan. It's been such a fulfilling experience to support those who contribute to creating better communities and the world! </p>
        <br>
            <p>During my free time...<br>I always find myself enjoying calligraphy and cooking. I love how they keep me relaxed and focused at the same time. One characteristic in common among my work and hobbies is that I enjoy every single step to create something inspiring. It's like hiking - I appreciate each step that leads me to an amazing view from the top of the mountains.</p> 
        <br>
            <p>One last thing you should know...<br>This website is designed and coded by me :)</p>
        
        <img src="/images/japan.png" alt="Japan" class="japan">
    </div>
        
    </div>
</section>


   
<!-- Footer -->
<footer>
    <small>©2022 Website Desinged & Coded by Tomomi Matsuzaki</small>
</footer>    
    
    
    
    
<!-- Script is here -->    
<script>    
    
$(".main-nav a").click(function () {
		document.getElementById("nav").checked = false;
});
    
    

// Smooth Scrooling
    
$(function() {
    var header = $(".w3-whitee");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });
  
});    
    
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});  
    
    
    
    

</script>      
</body>
</html>

 