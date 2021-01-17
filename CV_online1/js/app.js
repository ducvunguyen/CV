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
    console.log(counters);
});

