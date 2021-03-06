<?php
///////////////////////////////////////////
//index.php
//
//CREATED: Sep 5th 2017
//MODIFIED: Feb 7 2018
//////////////////////////////////////////
$message1 = '<h1>PHP</h1>
Learning through online course at University of Michigan<br>
<a href="http://php.net/" target="_blank">
  <img src="images/UMichigan.png" 
  alt="PHP" title="PHP"></a>';
$message2 = '<a href="https://www.php.net/" target="_blank">
<img class="slide-up-pic" src="images/php.jpg" 
alt="PHP" title="PHP"></a>';

?>

<!DOCTYPE html>
<html lang="en">
  <head> 
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113084392-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-113084392-1');
    </script>

    <meta charset="utf-8">
    <meta name="Description" content="Neil Mutch: Web Developer: C#, Java, Javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neil Mutch Web Developer C# Java Javascript CSS</title>
    <link href="css/site.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">

  </head>
  <body id="myBody" onload="colourHeader()">
    <nav>
      <ul id="menu">
        <li><a href="#">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>  
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li onclick="colourHeader()"><a href="#">CURIOUS</a></li>
      </ul>
    </nav>
    <header id="myHeader">
      <div id="social-wrapper">
        <div id="socialLeft" >
          <a href="https://www.linkedin.com/" target="_blank"><img class="social" src="images/linkedin-64.png" alt="linkdin" title="LinkedIn"></a>
          <a href="https://www.facebook.com/" target="_blank"><img class="social" src="images/facebook-64.png" alt="facebook" title="facebook"></a>
          <a href="https://codepen.io/#" target="_blank"><img class="social" src="images/codepen-64.png" alt="codepen" title="codepen"></a>
          <a href="https://twitter.com/" target="_blank"><img class="social" src="images/twitter-64.png" alt="twitter" title="twitter"></a>
        </div>
      </div>
    </header>


    <main>
      <section id="about">
        <div class="cube1">
          <div class="div-in-place" onclick="setTimeout(slideUpDiv1, 3000);">
            <h1>About</h1>
            Completed my Diploma at TriOS College as Web Technology Specialist
            with 89% average to complement a 2 year Higher National Diploma in Computing (distiction) from the UK.
            <p><a href="http://www.trios.com" target="_blank">Trios College</a></p>
          </div>          
          <div class="div-slide-up">
            <h1>About</h1>

            <ol type="i">
              <li>C# with ASP.NET 2.0</li>
              <li>Java</li>
              <li>Javascript</li>
              <li>MySQL Server</li>
              <li>Web Fundemantals</li>
              <li>Abobe Photoshop/Illustrator</li>
            </ol>
            <p><a href="http://www.trios.com" target="_blank">Trios College</a></p>
          </div>
        </div>
        <div class="cube2">
          <div class="div-in-place" onclick="slideUpDiv()">
            <h1>Volunteer</h1>
            I serve at the Poplar Hill and District Lions Club which is just
            one of the 46,000 clubs worldwide that form Lions International.<br>
            <p>My pre-college bootstrap website. . .<br>
            <a href="http://www.phlions.ca" target="_blank">Poplar Hill Lions Club</a></p>
          </div>
          <div class="div-slide-up">
            <a href="http://www.phlions.ca" target="_blank">
            <img class="slide-up-pic" src="images/lion_logo.gif" 
            alt="Poplar Hill and District Lions Club" 
            title="Poplar Hill and District Lions Club"></a>        
          </div>
        </div> 
        <div class="cube3">
          <div class="div-in-place" onclick="slideUpDiv()">
            <h1>Interests</h1>
            <ol type="i">
              <li>Computing (figure that one out)</li>
              <li>Motorcycling</li>
              <li>Photography</li>
              <li>Kayaking</li>
              <li>Home Renovation</li>
              <li>Walking</li>
            </ol>
          </div>
          <div class="div-slide-up">
            <img class="slide-up-pic" src="images/katana300px.jpg" alt="bike" title="bike">
            <div class="slide-up-text">St.Lawrence River</div>
          </div>
        </div> 
      </section>

      <div class="sectionHeader"><h2>PORTFOLIO</h2></div>  


      <section id="portfolio">
        <div class="cube3">
          <div class="div-in-place" onclick="slideUpDiv()">
            <h1>C#</h1>
            <p>C# using ASP.NET and Razor Pages to connect YouTube and NASA API to Space 
              themed website.
            </p>
          </div>  
          <div class="div-slide-up">
            <a href="https://www.asp.net/" target="_blank">
            <img class="slide-up-pic" src="images/microsoft.png" 
            alt="Microsoft ASP.NET" 
            title="Microsoft ASP.NET"></a>
          </div>
        </div>
        <div class="cube1">
          <div class="div-in-place" onclick="slideUpDiv()">
            <h1>Bootstrap</h1>
            One of my websites using Bootstrap, HTML, CSS and PHP
            <p><a href="http://totalpropertycontrol.ca/" target="_blank">Commercial website</a></p>
          </div>
          <div class="div-slide-up">
            <a href="https://getbootstrap.com/" target="_blank">
            <img class="slide-up-pic" src="images/bootstrap.png" 
            alt="Bootstrap" title="Bootstrap"></a>
            <a href="http://totalpropertycontrol.ca/" target="_blank">Commercial website</a>
            
          </div>
        </div>
        <div class="cube2">
          <div class="div-in-place fcenter" onclick="slideUpDiv()">
            <!--<h1>PHP</h1>
            Learning through online course at University of Michigan<br>
            <a href="http://php.net/" target="_blank">
              <img src="images/UMichigan.png" 
              alt="PHP" title="PHP"></a>-->
              <?php echo $message1; ?>
          </div>
          <div class="div-slide-up">
            <!--<a href="https://www.php.net/" target="_blank">
            <img class="slide-up-pic" src="images/php.jpg" 
            alt="PHP" title="PHP"></a>-->
            <?php echo $message2; ?>
          </div>
        </div> 
      </section>

      <section id="portfolio2">
        <div class="cube2">
          <div class="div-in-place" onclick="slideUpDiv()">
            <h1>Java</h1>
            Using Eclipse IDE, built on knowledge foundation in Javascript to 
            fully implement the OOP principles - encapsulation, inheritance, 
            abstraction and polymorphism - 
            coding classes for a functional command line program.
          </div>
          <div class="div-slide-up">
            <a href="https://www.java.com/" target="_blank">
            <img class="slide-up-pic" src="images/java.png" 
            alt="JAVA" title="JAVA"></a>
          </div>
        </div> 
        <div class="cube3">
          <div class="div-in-place" onclick="slideUpDiv()">
            <h1>Javascript</h1>
            By pressing one button, Javascript webpage was enabled to switch images and 
            motorcycle information.<br>(webpage formatting not included)
            <p><a href="http://neilmutch.com/javascript/bikes.html" target="_blank">My javascript webpage</a></p>
          </div>
          <div class="div-slide-up">
              <h1>Javascript</h1>
              Learned here were the principals of programming. Variables, arrays, loops,
              functions, building and modifying webpages with scripts.
              <p><a href="http://neilmutch.com/javascript/bikes.html" target="_blank">My javascript webpage</a></p>
          </div>
        </div>
        <div class="cube1">
          <div class="div-in-place" onclick="slideUpDiv()">
            <h1>Joomla CMS</h1>
            Turn a template into something completely different!
            <img  class="imgContainer" src="images/JoomlaTechNewsBlog Template.png" alt="Joomla TechNews Template" title="Joomla TechNews Template">
            
            <img class="imgContainer" src="images/JoomlaCoreTemplate.jpg" alt="Joomla CoreSolutions Blog" title="Joomla CoreSolutions Blog">
          </div>
          <div class="div-slide-up">
            <a href="https://www.joomla.com/" target="_blank">
            <img class="slide-up-pic" src="images/joomla.jpg" 
            alt="Joomla" title="Joomla"></a>
          </div>
        </div> 
      </section>

 
      <section id="portfolio3">
        <div class="cube1">
          <div class="div-in-place" onclick="slideUpDiv()">
            <h1>SQL Server</h1>
            Used Microsoft SQL Server to initially manipulate the pubs relational database. 
            Through a C# front end, developed/edited and deleted databases/tables and fields. 
            Devised queries and stored procedures to make the best use of the data.              
          </div>  
          <div class="div-slide-up">
            <a href="https://www.microsoft.com/en-us/sql-server/sql-server-2016" target="_blank">
            <img class="slide-up-pic" src="images/sqlserver.png" 
            alt="SQL Server" title="SQL Server"></a>
          </div>
        </div>
        <div class="cube2">
          <div class="div-in-place" onclick="slideUpDiv()">
            <h1>HTML/CSS</h1>
            Web Fundementals taught by TriOS are the basics of web design! 
            We built creative professional looking websites from simple wireframes. 
            HTML and CSS have evolved from days of the static webpage. 
            Programming Logic and Design to help plan the biggest of web applications .
          </div>
          <div class="div-slide-up">
            <a href="https://google.github.io/styleguide/htmlcssguide.html" target="_blank">
            <img class="slide-up-pic" src="images/html5css3.png" 
            alt="HTML and CSS" title="Google HTML and CSS Style Guide"></a>
          </div>
        </div>
        <div class="cube3">
          <div class="div-in-place" onclick="slideUpDiv()">
            <h1>Constant Learning</h1>
            One thing I have learned in life is never stop learning!
            Here's a link to w3schools. . . <br>
            <a href="https://www.w3schools.com/" alt="w3 Schools" target="_blank"> 
            w3 Schools</a>
          </div>
          <div class="div-slide-up">
            <a href="https://www.w3schools.com/" target="_blank">
            <img class="slide-up-pic" src="images/W3Schools.png" 
            alt="w3 Schools" title="w3 Schools"></a>
          </div>
        </div> 
      </section>

      <section id="adobe">
        <div class="cube3">
          <div class="div-in-place" onclick="slideUpDiv()">
            <h1>Illustrator</h1>
            <img class="slide-up-pic" src="images/MyLogo.png" 
            alt="My own simple logo" 
            title="My own simple logo">
              <p>One of my logos</p>
          </div>
          <div class="div-slide-up">
            <img class="slide-up-pic" src="images/HEM.png" 
            alt="Logo for local electrical company" 
            title="Logo for local electrical company">
            <p>Another of my logos</p>
          </div>
        </div>

        <div id="photoshop">
          <h1>Photoshop</h1>
          <img class="thumb" src="images/photo1thumb.jpg" 
              alt="Movie stars" title="Movie stars">
          <img class="thumb" src="images/photo2thumb.jpg" 
            alt="Strawberry pop" title="Strawberry pop">
          <img class="thumb" src="images/photo3thumb.jpg" 
            alt="Arnold Palmer undersea golf" title="Arnold Palmer undersea golf">
          <img class="thumb" src="images/photo4thumb.jpg" 
            alt="Farmers feed cities" title="Farmers feed cities">
        </div>           
      </section>

      <div class="sectionHeader"><h2>CONTACT</h2></div>

      <section id="contact">
        <div id="emailWrapper">
          <a href="mailto:nrmutch@gmail.com">email: Neil Mutch</a>
        </div>
      </section>


    </main>
    <footer>&copy; 2018 Neil Mutch &trade;</footer>
      <script src="js/site.js"></script>
  </body>
</html>