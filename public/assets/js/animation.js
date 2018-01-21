function imageGalerie()
{
  var active = $("#galerie .active");

  var next = (active.next().length >0) ? active.next():$('#galerie img:first');

  active.fadeOut(function(){

    active.removeClass('active');
    next.fadeIn().addClass('active');

  });
}

setInterval('imageGalerie()',3000);

var imgCorver = document.getElementById('imgCorver');
var containerPopup = document.getElementById('containerPopup');


imgCorver.addEventListener('click',popup);

function popup(){
  containerPopup.style.display = 'flex';
}



containerPopup.addEventListener('click',hiddenPopup);

function hiddenPopup(){
  containerPopup.style.display = 'none';
}
