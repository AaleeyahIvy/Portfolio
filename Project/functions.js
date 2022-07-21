/*var btns = document.getElementsByClassName("button");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
*/
function isMarried (){
  const today = new Date()
  const date = new Date(2022/9/11)
  messageOne = "My amazing husband:&nbsp;&nbsp;Austin Kilgore helped me with the server,&nbsp; &nbsp;thank you.";
  messageTwo = "My amazing future husband:&nbsp;&nbsp;Austin Kilgore helped me with the server,&nbsp; &nbsp;thank you.";
  if (today === 9/11/2022){
   document.getElementsByClassName("message") = messageOne;
  } else{
    document.getElementsByClassName("message") = messageTwo;
  }
}


//Use REACT???
