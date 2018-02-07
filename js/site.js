//Portfolio website JavaScript October 2017
//by Neil Mutch

function colourHeader()
{
  var randNum = 0;
  var randColor = "";
  var changeHeader = document.getElementById("myBody");
  var changeCube1 = document.getElementsByClassName("cube1");
  var changePhotoshop = document.getElementById("photoshop");

  randNum = Math.floor((Math.random() * 7) + 1);

  switch (randNum) {
        case 1:
            randColor = 'rgba(255, 165, 0'; /*orange*/
            break; 
        case 2:
            randColor = 'rgba(255, 246, 0'; /*yellow*/
            break; 
        case 3:
            randColor = 'rgba(0, 0, 255'; /*blue*/
            break; 
        case 4:
            randColor = 'rgba(0, 252, 89'; /*green*/
            break; 
        case 5:
            randColor = 'rgba(252, 0, 240'; /*purple*/
            break; 
        default: 
            randColor = 'rgba(255, 0, 0'; /*red*/
    }
    
    var colorOpacity = randColor + ", 0.7)";
    var colorFull = randColor + ", 1.0)";
    var colorGradient = "linear-gradient(to right, " + randColor + ", 1) , rgba(255, 255, 255, 1)";

    changeHeader.style.background = colorOpacity;
    changePhotoshop.style.background = colorFull;
    changePhotoshop.style.background = colorGradient;

    for(var i=0; i < changeCube1.length; i++)
    {
      changeCube1[i].style.background = colorFull;
    }
    //working here
    if (changeCube1[i].style.colorGradient = 'rgba(255, 0, 0')
    {
      changeCube1[i].font.color = "rgb(0, 0, 0)";
    }
    else
    {
      changeCube1[i].font.color = "rgb(255, 0, 0)";
    }
}
function enableSend()
{
  button = document.getElementById('sendBtn');
  button.disabled = false;
}

function slideUpDiv(){
  alert("hello");
  if(document.getElementById('div-slide-up').style.bottom = '0')
  {

    document.getElementById('div-slide-up').style.bottom = '-100%';
    document.getElementById('div-slide-up').style.opacity = '0';
  }
  else if(document.getElementById('div-slide-up').style.bottom = '-100%')
  {

    document.getElementById('div-slide-up').style.bottom = '0';
    document.getElementById('div-slide-up').style.opacity = '1';
  }
}
function slideDownDiv(){
  document.getElementById('div-slide-up').style.bottom = '-100%';
  document.getElementById('div-slide-up').style.opacity = '0';  
}
function slideUpDiv1(){
  document.getElementById('div-slide-up').style.bottom = '0';
  document.getElementById('div-slide-up').style.opacity = '1';
slideDownDiv();
setTimeout(function()
{ 
  myWindow.close() 
}, 3000);

}
