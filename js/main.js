var countDownDate = new Date("Nov 1, 2023 19:30:00").getTime();

var x = setInterval(function() {

  var count = document.getElementById("countdown");
  var now = new Date().getTime();

  
  var distance = countDownDate - now;

  
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  
  count.innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    count.innerHTML = "EXPIRED";
  }
}, 1000);


const win = document.querySelector('#btn');
const cards = document.querySelector('#card');

win.addEventListener('click', function(){
  cards.style.display = 'flex';
});