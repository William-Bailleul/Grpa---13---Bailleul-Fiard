$(document).ready(function() {
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    duration: 300
  });

  $('.sidenav').sidenav();
  $('.modal').modal();
  $('.parallax').parallax();


  $('#pic1').click(function() {
    $(this).attr("src", "img/easter-egg/vrai_clou.jpg");
  });
  $('#pic2').click(function() {
    $(this).attr("src", "img/easter-egg/vrai_perceuse.jpg");
  });
  $('#pic3').click(function() {
    $(this).attr("src", "img/easter-egg/meme3.gif");
  });
  $('#pic4').click(function() {
    $(this).attr("src", "img/easter-egg/meme2.gif");
  });
  $('#pic5').click(function() {
    $(this).attr("src", "img/easter-egg/meme1.gif");
  });
  $('#pic6').click(function() {
    $(this).attr("src", "img/easter-egg/meme4.gif");
  });


  $('#modeswitcher').click(function() {
    if ($("#theme-controller").attr("href") == "css/theme-white.css")
      $("#theme-controller").attr("href", "css/theme-dark.css");
    else
      $("#theme-controller").attr("href", "css/theme-white.css");
  });

  //Haut, haut, bas, bas, gauche, droite, gauche, droite, B, A
  var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
    n = 0;
  $(document).keydown(function(e) {
    if (e.keyCode === k[n++]) {
      if (n === k.length) {
        var audio = {};
        var element = document.body;
        element.classList.toggle("rainbowbg");
        audio["walk"] = new Audio();
        audio["walk"].src = "../mp3/nyan-cat.mp3";
        audio["walk"].play();
        $('#pic1').attr("src", "img/easter-egg/nyan-cat.gif");
        $('#pic2').attr("src", "img/easter-egg/nyan-cat.gif");
        $("#pic1").unbind();
        $("#pic2").unbind();
        n = 0;
        return false;
      }
    }
    else {
      n = 0;
    }
  });

});

$('#nyan').click(function() {
  var element = document.body;
  element.classList.toggle("rainbowbg");
  $('#pic1').attr("src", "img/easter-egg/nyan-cat.gif");
  $("#pic1").unbind();
  $('#pic2').attr("src", "img/easter-egg/nyan-cat.gif");
  $("#pic2").unbind();
});

setInterval(function() {
  $('.carousel.carousel-slider').carousel('next')
}, 4000);

new WOW().init();