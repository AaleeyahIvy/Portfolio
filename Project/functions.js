// Wrap every letter in a span
var textWrapper = document.querySelector('.message .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.message .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.message',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });