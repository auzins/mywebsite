<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUZINS WEBSITE</title>
    <!--Link To CSS-->
    <link rel="stylesheet" href="style.css">
    <!--Box Icons-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>
<body>
    <!--Navbar-->
    <nav>
        <a href="#" class="logo">WEBDEV AUZINS</a>
        <div class="toggle" onclick="toggleMenu();"></div>

        <!--Menu-->
        <ul class="menu">
            <li><a href="#home" onclick="toggleMenu();">Home</a></li>
            <li><a href="#about" onclick="toggleMenu();">About</a></li> 
            <li><a href="#services" onclick="toggleMenu();">Services</a></li> 
            <li><a href="#work" onclick="toggleMenu();">Work</a></li> 
            <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>     
        </ul>
    </nav>


    <!-- Main Text And Image-->
    <section id="home">
        <div class="home-text">
            <h1>Hello World! <br>I'm Gints <span>Auzins</span> <br>Web Developer</br> </h1>
            
        </div>
        <!--Home Image-->
        <div class="home-img">
            <img src="https://image.freepik.com/free-vector/website-designer-concept-illustration_114360-6882.jpg" alt="">
            
        </div>
            <!-- Social-->
        <div class="social">
            <a href="#"><i class='bx bxl-instagram'></a></i>
            <a href="#"><i class='bx bxl-twitter'></a></i>
            <a href="#"><i class='bx bxl-github'></a></i>
        </div>
    </section>
    

    <!--About Section-->
    <section id="about">
        <!--Heading-->
        <div class="heading">
            <h2>About</h2>
            <p>My Introduction</p>
        </div>
        <!-- About Content-->
        <div class="about-content">
            <div class="about-img">
                <img src="https://image.freepik.com/free-vector/business-man-working-from-home-concept-stay-home-stay-safe_40876-2600.jpg" alt="">
            </div>
            <div class="about-text">
                <h1>I'm Auzins</h1>
                <p>My name is Gints Auziņš, I am 27 years old.
                    I was the founder of several small cafes (Burger Studio, Ttobasco, SALT), but the situation in the world did its own thing. 
                    I closed everything in the summer of 2021, so I started working in the IT world. I started retraining to what I wanted to do since childhood. 
                    I choose and was accepted by Riga Coding School. I joined the WEB Development Group, where we learned HTML, CSS, JavaScript, PHP, SCSS, Github, JQuery and other basic things that are part of the WEB development process. 
                    I have realized that Web Development and Ecommerce is my calling.</p>
                <!--Button-->
                <form action="cv.php" method="post">
                <button class=press>MY CV</button>
                </form>
            </div>
        </div>
    </section>

    <!--Services-->
    <section id="services">
        <!--Heading-->
        <div class="heading">
            <h2>Services</h2>
            <p>Services what I offer</p>
            
        </div>
        <div class="services-content">
            <!--Box-->
            <div class="box">
                <img src="https://image.freepik.com/free-vector/mobile-application-development-programming-languages-css-html-it-ui-male-programmer-cartoon-character-developing-website-coding_335657-2367.jpg" alt="">
                <h1>HTML</h1>
                 <p>The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser.</p>
            </div>
        
            <!--Box-->
            <div class="box">
                <img src="https://image.freepik.com/free-vector/java-developer-smartphone-software-javascript-coding-writing-application-css-programming-html-source-code-tampering-mobile-program-isolated-concept-metaphor-illustration_335657-1153.jpg" alt="">
                <h1>CSS</h1>
                 <p>Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.</p>
            </div>

             <!--Box-->
             <div class="box">
                <img src="https://image.freepik.com/free-vector/website-building-web-graphic-interface-design-responsive-website-software-engineering-development-male-programmeer-cartoon-character-vector-isolated-concept-metaphor-illustration_335657-2792.jpg" alt="">
                <h1>SCSS</h1>
                 <p>SASS adds lots of additional functionality to CSS like variables, nesting and more which can make writing CSS easier and faster.</p>
            </div>


            <!--Box-->
            <div class="box">
                <img src="https://image.freepik.com/free-vector/programmers-using-javascript-programming-language-computer-tiny-people-javascript-language-javascript-engine-js-web-development-concept_335657-2412.jpg" alt="">
                <h1>JAVASCRIPT</h1>
                 <p>JavaScript, often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS.</p>
            </div> 

            <!--Box-->
            <div class="box">
                <img src="https://image.freepik.com/free-vector/script-writing-software-engineering-coding-workshop-code-created-workshop-online-programming-course-apps-games-development-class-concept-pinkish-coral-bluevector-isolated-illustration_335657-1253.jpg" alt="">
                <h1>PHP</h1>
                 <p>PHP is a general-purpose scripting language geared towards web development. </p>
            </div>

 

<!-- pilns web izstrādes cikls (to var norakstit no RCSprezentacijas )-->

            


         </div>
    </section>

<!--Work Section-->

<section id="work">
     <div class="heading">
         <h2>Work</h2>
         <p>Work with me</p>
     </div>
     <div class="work-content">
         <div class="work-text">
             <h1>I Believe To deliver best <br> quality work</h1>
             <p>Contact me for your questions and more information about my works</p>
             <a href="#contact">Contact</a>
         </div>
         <div class="work-img">
             <img src="https://image.freepik.com/free-vector/website-creator-concept-illustration_114360-3802.jpg" alt="">
         </div>
     </div>
</section>


<!--Contact-->
<section id="contact">
    <div class="heading color">
        <h2>Contact</h2>
        
    </div> 
    <div class="contact-content">
        <div class="app">
            <h1>Connect with Me <br> By mail</h1>
            <p>Leave a message I will reply in 1 hours</p>
        </div>

        <div class="contact-form">
            <form action="answer.php" method="post">
                <input name="email" type="email" placeholder="Your Email">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message Here"></textarea>
                <button type="submit">submit</button>
            </form>
        </div>
    </div>
</section>


<!--Copyright-->

<div class="copyright">
    <p>&#169; Coded by Auzins 2021. </p>
</div>

<!--Link to Js-->


<script src="script.js"></script>


</body>
</html>