<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LfSdyQTAAAAAA9pyuabN5FBw97Hp3BpkP5VfGH-";
$secretKey = "6LfSdyQTAAAAAHmXHBQOiHmiIOwXOdGYQwjO_sZZ";


/* siteKey and secretKey for actual site

$siteKey = "6LcUS5wUAAAAAGXAq2yMD2iC_NDPIC7GKzPvLN1o";
$secretKey = "6LcUS5wUAAAAAJWbGcjJJdObM7Ihytq28ruze9nt";

*/



//this line below identifies the current page
define('THIS_PAGE',dirname($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
  case "/":
  $myTitle = "Tomomi Matsuzaki Portfolio";
  $myDescription = "Tomomi Matsuzaki is a Seattle based designer/storyteller.";
  $myNavClass = "nav-container-home";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;

  case "/safe-haven":
  $myTitle = "Safe Haven - Human-Centered Design Project";
  $myDescription = "A digital volunteer board application that aims to bridge the disconnect between local opportunities available to support Afghan refugees and individuals who want to help them.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  case "/grow-together":
  $myTitle = "Grow Together - Video Prototype Project";
  $myDescription = "Introducing Grow Together - The more sustainable choices you make, the more your plant will grow.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  case "/feet-first":
  $myTitle = "Feet First - Storytelling Project";
  $myDescription = "Promote safe and walkable communities with strategic storytelling";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  case "/seattle_central_covid19":
  $myTitle = "Seattle Central College - Web Design Project";
  $myDescription = "A web design project with the UCD process. User research methods include competitive analysis, contextual interview, baseline usability testing, prototyping, A/B Testing etc.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
    
  case "/seattletilth-user-research":
  $myTitle = "UX Design and User Research Methods - Seattle Tilth Allance";
  $myDescription = "Presentation of a web design process with user research methodologies including competitive analysis, contextual interview, baseline-testing, prototyping, etc.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  case "/eatlocal-mobile-design":
  $myTitle = "Mobile E-commerce Web Design - Eat Local";
  $myDescription = "Introducing a mobile E-commerce site design process: information architecture, user persona, user flow, prototyping, etc.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  case "/migo-mobile-app-design":
  $myTitle = "Mobile App Design Proposal - Migo";
  $myDescription = "Introducing a UX design proposal for Seattle based start-up company Migo's app. Find design solutions to achive a great user experience.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  case "/jm-brochure-design":
  $myTitle = "Effective Brochure Design work for Japan Management";
  $myDescription = "ffective Print advertising can get more people's attntion.Beautiful Brochure design for Japan Management.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  case "/pheaness-web-design":
  $myTitle = "Responsive Web Design wrok for Pheaness";
  $myDescription = "Introducing a beautiful visual design idea for a Japanese consulting company Pheaness's website.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  case "/ryugakusuccess-web-design":
  $myTitle = "Responsive Web Design wrok for RyugakuSuccess";
  $myDescription = "Introducing a beautiful design idea for RyugakuSuccess.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  case "/calligraphy-design":
  $myTitle = "Calligraphy Design Work - @designed_by_tomo";
  $myDescription = "It's all handmade and completely one of a kind. It is a perfect idea for your wedding decorations or any other memorable events. I'd love to make your precious moment a little bit brighter with my calligraphy.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  case "/youtube-ux-design":
  $myTitle = "UX Design Challenge - YouTube Discover";
  $myDescription = "UX/UI competition event held by DubsTech in University of Washington. Our mission was to present a prototype that solved the issues depicted in the scenario.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  case "/text-graphic-design":
  $myTitle = "Graphic Design Work - Tomomi Matsuzaki";
  $myDescription = "Tomomi Matsuzaki's personal graphic design work that includes 3D effect, bent letter design, neon text effect, bubble text, and more.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
  break;
        
  //fallback values for undefined pages
  default:
  $myTitle = "Tomomi Matsuzaki Design Studio in Seattle"; #the file name is unique
  $myDescription = "Seattle based design studio. Tomomi Matsuzaki is a freelance web designer/graphic designer who provides a wide variety of design work.";
  $myLogo = "/images/tomomi-matsuzaki-logo.svg";
        
}


?>