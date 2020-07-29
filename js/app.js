$(document).ready(function () {
    $('.slider').slick({
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "infinite": true,
        "arrows": true,
       
    });
});


//AOS INIT 

AOS.init({
    easing: 'ease-in-out-sine',
    once:true
  });
  
  setInterval(addItem, 300);
  
  var itemsCounter = 1;
  var container = document.getElementById('aos-demo');
  
  function addItem() {
    if (itemsCounter > 42) return;
    var item = document.createElement('div');
    item.classList.add('aos-item');
    item.setAttribute('data-aos', 'fade-up');
    item.innerHTML = '<div class="aos-item__inner"><h3>' + itemsCounter + '</h3></div>';
    itemsCounter++;
}
