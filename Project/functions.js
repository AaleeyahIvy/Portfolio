/*var btns = document.getElementsByClassName("button");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
*/
function isMarried() {
  const today = new Date();
 const date = new Date("09/11/2022");
 messageOne = "My amazing husband:&nbsp;&nbsp;Austin Kilgore helped me with the server,&nbsp; &nbsp;thank you.";
 messageTwo = "My amazing future husband:&nbsp;&nbsp;Austin Kilgore helped me with the server,&nbsp; &nbsp;thank you.";
 if (today >= date){
  document.write(messageOne);
 } else{
   document.write(messageTwo);
 }
}

//Use REACT???
