var swiper = new Swiper('.swiper-container', {
    slidePerView: 1, 
    spaceBetween: 10, 
    loop: true, 
    pagination:{
        el: '.swiper-pagination', 
        clickable: true, 
    }, 
    navigation: {
        nextEl: '.swiper-button-next', 
        prevEl: '.swiper-button-prev', 
    }, 
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
});


//For Slide animations

  AOS.init();
