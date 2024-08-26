$(document).ready(function(){
    // gloabal variables
    let touchStart = 0;
    let touchEnd = 0;
    let slideNumber = 2;
    let slideCount = 0;
    let cardIds = [];
    

    // card slider javascript starts
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
        if(touchStart < touchEnd)
        {
            if(slideNumber <= slideCount)
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
        slideCount = slides.length;

        slides.forEach(slide=>{

            // touch events for touch screens
            slide.addEventListener('touchstart', (event)=>{
                touchStart = event.touches[0].clientY;``
            });

            slide.addEventListener('touchend', function(e) {
                touchEnd = e.changedTouches[0].clientY;
                slideNumber = $(this).attr('data-slide');
                handleDrag();
            });
            
           
        });

        if (window.innerWidth > 768) {
            let nextButton = document.querySelector(".up");
            nextButton.addEventListener('click', function() {
              nextSlide();
            })
        
            let prevButton = document.querySelector(".down");
            prevButton.addEventListener('click', function() {
              prevSlide();
            })
        }

       
        renderSlides();
    
    }

    // initial point for card sliders
    renderSlider();
    // card slider javascript ends


    // ajax call for card activation and deactivation
    $('.card-status').on('change', function(e){
        e.preventDefault();
        var cardId = $(this).attr('data-id');
        var currentStatus = $(this).attr('data-current-status');
         
        var updateValue = (currentStatus == 1) ? 0 : 1;

        $('#preloader').removeClass('preloader-hide');

        $.ajax({
        type: 'post',
        url: '/manage_card',
        data: {cardId,updateValue},
        dataType: 'json',
        encode: true
        }).done(function(data){
            $('#preloader').addClass('preloader-hide');
            if(data.status_code == 200)
            {
                $('#toast-success').trigger('click');
                $('#toggle-id-'+cardId).attr("data-current-status",updateValue);
            }else{
                $('#toast-failure').trigger('click');
                setTimeout(() => {
                    location.reload();
                    
                }, 2000);
            }
        });
    });

    // ajax call for initiating transaction
    $('.under_price_transaction').on('click', function(e){
        e.preventDefault();
        var categoryType = $(this).attr('data-type');
        var cardId = $(this).attr('data-card-id');
        var transactionType ='';

        var min = $('#'+categoryType).attr('data-min-price');
        var max = $('#'+categoryType).attr('data-max-price');
        var currentBalance = parseInt($('#'+categoryType).attr('data-current-bal'));
        var generateRandomPrice = Math.floor(Math.random() * (parseInt(max) - parseInt(min) + 1)) + parseInt(min);
        if (generateRandomPrice <= 0) {
            generateRandomPrice = 1; 
        }

        if(categoryType == 'TRANSPORT')
        {
            transactionType = 'Transport';
        }else if(categoryType == 'GROCERY')
        {
            transactionType = 'Grocery';
        }else if(categoryType == 'FOODDINING')
        {
            transactionType = 'Food & Dining';
        }else if(categoryType == 'FURNITURE')
        {
            transactionType = 'Furniture';
        }

        // card status
        var currentStatus= $('.'+categoryType+'_status').attr('data-current-status');

        if(currentStatus == 0)
        {
            $('#statusInactive').empty().append(`Your ${transactionType} card is in-active at the moment. Please activate it to make a Transaction`);
            $('#trigger_modal_warning').trigger('click');
            return;
        }

        // low balance
        if(currentBalance < generateRandomPrice || currentBalance == 0)
        {
            $('#failedTranscationPrice').val(generateRandomPrice);
            $('#fundsShortCard').empty().append(transactionType);
            $('#fundsShort').empty().append(generateRandomPrice);
            $('#trigger_modal').trigger('click');
            return;
        }

        $.ajax({
            type: 'post',
            url: '/start_under_price_transaction',
            data: {generateRandomPrice, cardId, currentBalance},
            dataType: 'json',
            encode: true
        }).done(function(data){

            if(data.status_code == 200)
            {
                var message= `A Successful Transaction of £ ${data.response_data.randomPrice} was made on your ${transactionType} Category Card`;

                $('#transactionDet').empty().append(message);
                $('#trigger_modal_transaction').trigger('click');
            }else{

                $('#toast-failure').trigger('click');
                setTimeout(() => {
                    location.reload();
                }, 2000);
            }
        });
    });

    $('#otherCardTransaction').on('submit',function(e){
        e.preventDefault();
        
        // Check if any checkboxes are selected
        if ($(this).find('input[type="checkbox"]:checked').length <= 0) {
            $('.alertCard').show();
            return;
        }
        var failedTranscationPrice= $('#failedTranscationPrice').val();

        if(cardIds.length > 0)
        {
            $.ajax({
                type: "POST",
                url: 'manage_other_card_transactions',
                data: {cards: cardIds, failedTranscationPrice},
                dataType: 'json'
            })
                .done(function (data) {
                    if(data.status_code == 200)
                    {
                        var menu = $('.menu'),
                        menuHider = $('.menu-hider'),
                        headerAndContent = $('.header, .page-content, #footer-bar');
    
                        menu.removeClass('menu-active');
                        menuHider.removeClass('menu-active menu-active-clear');
                        headerAndContent.css('transform','translate(0,0)');
                        menuHider.css('transform','translate(0,0)');
                        $('#footer-bar').removeClass('footer-menu-hidden');
                        $('body').removeClass('modal-open');
    
                        $('#transactionDet').empty().append('Successful Transaction');
                        $('#trigger_modal_transaction').trigger('click');
                        
                    }else{
    
                       if(data.message == 'transactionFailed')
                       {
                        $('.alertLessFunds').show();
                       }
    
                       if(data.message == 'error')
                       {
                        $('.alertTransactionFailure').show();
                       }
    
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    }
                   
                });

        }
        
    });


    // utility event handlers
    $('.initiate_transaction').on('click', function(e){
        e.preventDefault();
        var cardId= $(this).attr('data-card-id');
        if(document.getElementById(cardId)){
            $('#'+cardId).attr('checked', true);
        }
        cardIds.push(cardId);

    });

    $('.card_order').on('change',function(e){
        // cardIds.length = 0;
        let selectedCardId = $(this).val();
        let el = document.getElementById(selectedCardId);
        const index = cardIds.indexOf(selectedCardId);

        if(el.checked && index <= -1){
            cardIds.push(selectedCardId);
        }else{
            cardIds.splice(index,1);
        }

        console.log(cardIds);

    });


    $('.cancel-transaction').on('click', function(e){
        e.preventDefault();
        location.reload();
    });

    $('.close-my-tab').on('click', function(e){
        e.preventDefault();

        var menu = $('.menu'),
            menuHider = $('.menu-hider'),
            headerAndContent = $('.header, .page-content, #footer-bar');


        menu.removeClass('menu-active');
        menuHider.removeClass('menu-active menu-active-clear');
        headerAndContent.css('transform','translate(0,0)');
        menuHider.css('transform','translate(0,0)');
        $('#footer-bar').removeClass('footer-menu-hidden');
        $('body').removeClass('modal-open');

    });
   



    

});

  
  
 
  
  