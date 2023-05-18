let flag=0;
let flag2=0;
let flagtimer=0;
let cookiect = 0;
var score = 0;
var attempts = 0;
let KeyDownct =0;
var confirmButton = document.getElementById("ConfirmButton");
var cancelButton = document.getElementById("cancelButton");
var gameButton = document.getElementById("GameButton");
var timerct = document.getElementById("timerct");
var scorect = document.getElementById("scorect");
var timerIntervalId;

updateAttemptsText();
function showDiscount() 
{
  var container = document.getElementById("container0");
  container.style.display = "flex";
}
function HideDiscount()
{
  var container2 = document.getElementById("container0");
  ConfirmButton.addEventListener("click", function() 
{
  container2.style.display = "none";
  updatePromoCode();
  timerct.textContent = "0";
  scorect.textContent = "0";
  score = 0;
});

}

function generatePromoCode() 
{
  const length = 8;
  const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  let code = "";
  for (let i = 0; i < length; i++) {
    code += chars.charAt(Math.floor(Math.random() * chars.length));
  }
  if(cookiect==0)
  {
    document.cookie = `promoCode=${code}; path=/`;
  }
  cookiect++;
  return code;
}

function updatePromoCode()
 {
  const promoCodeElement = document.getElementById("promoCode");
  const promoCode = generatePromoCode();
  promoCodeElement.textContent = promoCode;
}



function copyToClipboard() 
{
  const promoCode = document.querySelector("#container0 .content0 p:last-child").textContent.trim();
  navigator.clipboard.writeText(promoCode)
    .then(() => {
      alert(`Promo code "${promoCode}" copied to clipboard!`);
    })
    .catch((error) => {
      console.error("Failed to copy promo code to clipboard: ", error);
    });
}
    

gameButton.addEventListener("click", function() 
{
  
  if (attempts >= 3) {
    // show the max attempts modal and return
    $('#maxAttemptsModal').console('show');
    return;
  }

  // increment the attempts counter
  attempts++;

  // update the attempts text
  updateAttemptsText();

  // reset the score
  scorect.textContent = "0";

  // show the timer
  timerct.classList.add("timer");
  timerct.textContent = "15";

  // start the countdown
  var countdown = setInterval(function() {
    var count = parseInt(timerct.textContent) - 1;
    timerct.textContent = count.toString();

    // disable the button
  gameButton.disabled = true;

    if (count === 0) {
      // clear the timer interval
      clearInterval(timerIntervalId);

      // reset the timer and score
      timerct.textContent = "15";
      scorect.textContent = "0";
      score = 0;
      // hide the timer
      timerct.classList.remove("timer");

      // clear the countdown interval
      clearInterval(countdown);

      // enable the button
      gameButton.disabled = false;
    }
  }, 1000);
});



function delayedLoop(i) {

  document.getElementById("img").src ="Animation frames/1 ("+i+").png" ;
  setTimeout(function() {
    console.log(i);
    if(i==19){
      flag2=1;
    }
    if (i < 20) {
      delayedLoop(i + 1);
      
    }
  }, 20);
 
  
}

document.addEventListener('keydown', function(event) {

  if(gameButton.disabled === true)
  {
    if(score == 25)
  {
    showDiscount();
  }
  else
  {
    if(KeyDownct%2==0)
  {
    score++;
    scorect.textContent = score.toString();
  }

  
  KeyDownct++;
  if (event.key  === 'u'&&flag==0) {
    flag=1;
    flag2=0;
    delayedLoop(1);
    if(flagtimer==0){
      flagtimer=1;
      startTimer()
    }
  }
  }
  }
  
  
}); 





function updateAttemptsText() {
  attemptsct.textContent = (3 - attempts).toString();
}

document.addEventListener("keyup",function(event) {
  
  if (event.key === 'u'&&flag2==1) {

    flag=0;
  }

})


var seconds = 10;
var intervalId;

document.addEventListener("DOMContentLoaded", () => {
  updatePromoCode();
});