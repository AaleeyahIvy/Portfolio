<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/Untitled design.png"> <!--Needs to be transparent :3-->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Using Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha384-fXdIufVbE9aU7STmdk/DWK0imNOozId9fTwzM/gi0NfPjphEIC3gq0M760UnsKVy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mystylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Thasadith&display=swap" rel="stylesheet">
    <script type="text/javascript" src="main.js"></script>
    <title>Aaleeyah Ivy</title>
</head>
<body onload="myFunction()" style="margin:0;">
    <div><!--SUBHEADER OCCUPATION--></div>
    <div class="navigation" >
        <nav> <!--NAV OUTSIDE OF DIV-->
            <a class="button" href="Portfolio.html">About</a>
            <a class="button" class="active" href="projects.html">Projects</a>
            <a class="button" href="art.html">Art</a>
            <a class="button" href="claydhd.html">Blog</a>
            <a class="button" href="contact.html">Contact</a>
            <a class="button" href="files/Resume.docx" download target="_blank">Resume</a>
        </nav>
    </div>
<div style="" id="myDiv" class="col-12 animate-bottom">
  <h1>Contact me about my work!</h1>
  <form action="verification/emailInquiry.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="inquiry"></label>
    <textarea id="inquiry" name="inquiry" placeholder="Ask us something..." style="height:110px;width:635px;"></textarea>
    <br>
    <input type="submit" value="submit">
  </form>
</div>
<script>
var myVar;
function myFunction() {
 myVar = setTimeout(showPage, 5000);
}
function showPage() {
 document.getElementById("loader").style.display = "none";
 document.getElementById("myDiv").style.display = "inline-block";
}
   var path = anime.path('.background-layer');
   anime.timeline({ loop: false })
       .add({
           targets: '.background-layer',
           rotate: 560,
           duration: 5000,
           loop: 1
       })
</script>
    <footer>
        Created By: Aaleeyah Ivy & Austin Kilgore using Anime.Js, HTML, JS, CSS, and etc.
    </footer>
</body>
</html>