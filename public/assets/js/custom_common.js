$(document).ready(function(){

    let touchStart = 0;
    let touchEnd = 0;
    let slideNumber = 2;

    const nextSlide = () => {  
        let activeSlide = document.querySelector('.slide--active');
        let nextSlide = activeSlide.nextElementSibling;
        if (nextSlide) {
          activeSlide.classList.remove('slide--active');
          nextSlide.classList.remove('next');
          nextSlide.classList.add('slide--active');
          renderSlides();
        }
        
    }

       
    const prevSlide = () => {  
        let activeSlide = document.querySelector('.slide--active');
        let prevSlide = activeSlide.previousElementSibling;
        if (prevSlide) {
        activeSlide.classList.remove('slide--active');
        prevSlide.classList.remove('prev');
        prevSlide.classList.add('slide--active');
        renderSlides();
        }  
    }
  

    const handleDrag = ()=>{
        console.log('called');
        if(touchStart < touchEnd)
        {
            if(slideNumber <= 8)
            {
                nextSlide();
            }
        }else if(touchStart > touchEnd)
        {
            if(slideNumber >= 1)
            {
                prevSlide();
            }
        }
    }

    const renderSlides = () => {
        let slides = document.querySelectorAll('.slide');
        if (!slides) {
          return;
        }
        let activeSlide = document.querySelector('.slide--active');
        if (!activeSlide) {      
          activeSlide = slides.item(0);
          activeSlide.classList.add('slide--active');
        }
        [].forEach.call(slides, function(slide) {
          slide.classList.remove('prev', 'next')
        });
      
        let prevSlide = activeSlide.previousElementSibling;
        prevSlide && prevSlide.classList.add('prev');
      
        let nextSlide = activeSlide.nextElementSibling;
        nextSlide && nextSlide.classList.add('next');
    }


    const renderSlider = () => {

        let slides = document.querySelectorAll('.slide');
        slides.forEach(slide=>{
            slide.addEventListener('touchstart', (event)=>{
                touchStart = event.touches[0].clientY;
            });

            slide.addEventListener('touchend', function(e) {
                touchEnd = e.changedTouches[0].clientY;
                slideNumber = $(this).attr('data-slide');
                handleDrag();
            });
        });
        renderSlides();
    
    }

    // initial point
    renderSlider();

});

  
  
 
  
  