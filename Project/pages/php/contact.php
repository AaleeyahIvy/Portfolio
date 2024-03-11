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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Thasadith&display=swap" rel="stylesheet">
    <title>Aaleeyah Ivy</title>
</head>
<body onload="myFunction()" style="margin:0;">
<header style="text-align: center;">My Name Is Aaleeyah Ivy</header>
    <div><!--SUBHEADER OCCUPATION--></div>
    <div class="navigation" >
            <nav> <!--NAV OUTSIDE OF DIV-->
                <a class="button" href="../index.html">About</a>
                <a class="button" class="active" href="../projects.html">Projects</a>
                <a class="button" href="../art.html">Art</a>
                <a class="button" href="../blog.html">Blog</a>
                <a class="button" href="contact.php">Contact</a>
                <a class="button" href="../resume.html">Resume</a>
            </nav>
        </div>
<div style="display:flex flex-direction: column; align-items: center;" id="myDiv" class="col-12 animate-bottom">
  <h1>Contact me about my work!</h1>
  <form action="emailInquiry.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <hr>
    <br>
    <label for="subject">Subject:</label>
    <input type="text" name="subject" id="subject">
    <label for="inquiry">Message:</label>
    <textarea id="inquiry" name="inquiry" placeholder="Ask me something..." style="height:110px;width:635px;"></textarea>
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
<style>
  body{
    background-image: url(../images/IMG_0032.PNG);
    background-size: 2000px;
    /* LOOKS WEIRD font-family: 'Poiret One', cursive;*/
    color: rgb(255, 255, 255);
    font-family: 'Nunito', sans-serif;
    padding: 5px;
    margin: 5px;
    text-align: center;
}
footer {
  text-align: center;
}
.about-me {
    font-family: 'Poiret One', cursive;
   /* border: 3px solid black;*/
    padding: 75px;
    text-align: center;
}
.social-media{
    padding: 5px;
    text-align: center;
}
nav { 
    text-align: center;
}
.navigation a:hover{
    top: -4px;
    background-color: rgb(255, 175, 244);
    border-radius: 76px 34px 65px;
}
.navigation a{
    position: relative;
    top: 0px;
    transition: 0.3s;
    text-decoration: none;
    color: aliceblue;
    border-width: 25px;
    padding: 5px;
    margin: 10px;
    text-shadow: 2px 2px 2px black;
}
input[type=text], input[type=email], textarea {
    padding: 5px;
    border-radius: 15px;
}
input[type=submit]{
    background-color: rgb(255, 175, 244);
    border-radius: 3px;
    color: white;
}
li{
    padding: 5px;
    margin: 5px;
    list-style: none;
    list-style-type: none;
    display: inline-flex;
}
* {
    box-sizing: border-box;
  }
  /* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}
/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
::-webkit-scrollbar {
  width: 20px;
}
::-webkit-scrollbar-track {
  background-color: black;
}
::-webkit-scrollbar-thumb {
  background-color: #e683ff;
  border-radius: 20px;
  border: 6px solid transparent;
  background-clip: content-box;
}
::-webkit-scrollbar-thumb:hover {
  background-color: #c537e9;
}
.message {
  position: relative;
  font-size: 25px;
}

.message .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2px;
  padding-right: 0.05px;
  padding-bottom: 0.1px;
  overflow: hidden;
}

.message .letter {
  transform-origin: 50% 100%;
  display: inline-block;
  line-height: 1px;
} 

.art{
  float: left;
  size: 200px 300px;
  padding: 10px;
}
.blog {
  display: flex;
  text-align: center;
  align-items: center;
  flex-direction: column;
}
.header:hover{
  color: rgb(255, 175, 244)
}
.p{
  background-color: #e683ff4d;
  border-radius: 5px;
}
</style>
    <footer>
        Created By: Aaleeyah Ivy & Austin Kilgore using Anime.Js, HTML, JS, CSS, and etc.
    </footer>
</body>
</html>