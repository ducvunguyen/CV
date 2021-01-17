$(document).ready(function(){

    $('#profile_ripple').ripples({
        resolution: 512,
        dropRadius:10
    });

    const  bars = document.querySelectorAll('.progress__bar');
    bars.forEach(function(bar){
        let percentage = bar.dataset.percent;
        let tooltip = bar.children[0];
        tooltip.innerText = percentage + '%';
        bar.style.width = percentage + '%';
        console.log(percentage);
    })

    //counter
    const counters = document.querySelectorAll('.counter');

    function runCounter(){
        counters.forEach(counter =>{
            counter.innerText = 0;
            let target = +counter.dataset.count;

            let step = target/100;

            let countIt = function(){
                let displayedCount = +counter.innerText;
                if(displayedCount < target){
                    counter.innerText = Math.ceil(displayedCount + step);
                    setTimeout(countIt, 1);
                }else {
                    counter.innerText = target;
                }
            }
            countIt();
        })
    }


    let counterSection = document.querySelector('.counter__section');
    let options = {
        rootMargin : '0px 0px -200px 0px'
    }
    let done = 0;
    const sectionObsever = new IntersectionObserver(function(entries){
        if(entries[0].isIntersecting && done !== 1){
            done = 1;
            runCounter();
        }
    },options)
    sectionObsever.observe(counterSection);

    // image filter

    var $wrapper = $('.portfolio__wrapper');

    //Initializa isotope

    $wrapper.isotope({
        filter:'*',
        layoutMode: 'masonry',
        animationOption:{
            duration: 750,
            easing: 'linear'
        }
    });

    let links = document.querySelectorAll('.tabs a');
    links.forEach(link =>{
        let selector = link.dataset.filter;

        link.addEventListener('click', function(e){
            e.preventDefault();
            $wrapper.isotope({
                filter: selector,
                layoutMode: 'masonry',
                animationOption:{
                    duration: 750,
                    easing: 'linear'
                }
            });
            links.forEach(link =>{
                link.classList.remove('active');
            })
            e.target.classList.add('active');
        });
    })



    // magnify pop up

    $('.magnify').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
        zoom :{
            enable: true
        }

    });
});
$(document).ready(function () {
    var stt = 0;
    var endImg = $("img.slide:last").attr("idx");

    $("button").click(function () {
        stt = $(this).attr("idx");

        changeImg(stt);
    });

    $("#next").click(function () {
        if (++stt > endImg) {
            stt = 0;
        }

        changeImg(stt);
    });

    $("#prev").click(function () {
        if (--stt < 0) {
            stt = endImg;
        }

        changeImg(stt);
    });

    var interval;
    var timer = function () {
        interval = setInterval(function () {
            $("#next").click();
        }, 5000);
    };
    timer();
});


//Hide all image slide and show image have index "stt"
//Remove active all buttton and set "active" for button have index "stt"
//Reset timer when change image
function changeImg(stt) {
    $("img.slide").hide();
    $("img.slide").eq(stt).fadeIn(500);
    $("button").removeClass("active");
    $("button").eq(stt).addClass("active");

    clearInterval(interval);
    timer();
};





