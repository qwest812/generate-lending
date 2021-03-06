// Get the modal
var modal = document.getElementById('modal');
const modalOk = document.getElementById('modalOk');
var modalBad = document.getElementById('modalBad');
// Get the button that opens the modal
var btnT = document.getElementById("purchase-btnT");
var btnB = document.getElementById("purchase-btnB");
var btnAt = document.getElementById("btnAt");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

// When the user clicks on the button, open the modal
btnT.onclick = function() {
    modal.style.display = "block";
};
btnB.onclick = function() {
    modal.style.display = "block";
};
btnAt.onclick = function() {
    modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span[0].onclick = function() {
    modal.style.display = "none";
};
span[1].onclick = function() {
    modalOk.style.display = "none";
};
span[2].onclick = function() {
    modalBad.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal || event.target == modalOk || event.target == modalBad) {
        modal.style.display = "none";
        modalOk.style.display = "none";
        modalBad.style.display = "none";
    }
};

//Part 2
// const hdrs = {
//     'X-CSRF-TOKEN': 'QQQ'
//         // $('meta[name="csrf-token"]').attr('content')
// };
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        // 'CUST_M': "Valuechko"
    }
});

const request = (dataString) => {
    // console.log(dataString);
    $.post("create-order",
        dataString,
        function(data, status){
            if (status === 'success' & data === "accepted") {
                modalOk.style.display = "block";

            } else {
                modalBad.style.display = "block";
            }
        }).fail(() => {
        modalBad.style.display = "block";
    });
};


const btnAtTrigger = () => {
    //Btns
    const btnAtCB = $('.rnd-btn');
    const btnAtCF = $('.rnd-btn');
    if ($(btnT).visible(true) || $(btnB).visible(true)) {
        if (btnAtCB.css('display') === 'block') {
            // console.log('BLOCK');
            // console.log('vis');
            btnAtCB.css('display', 'none');
            btnAtCF.css('display', 'none');
            $('.push-btn').animate({
                width: "+=5px",
            }, 80).animate({
                width: "-=10px",
            }, 80).animate({
                width: "+=10px",
            }, 80).animate({
                width: "-=10px",
            }, 80).animate({
                width: "+=10px",
            }, 80).animate({
                width: "-=10px",
            }, 80).animate({
                width: "+=10px",
            }, 80).animate({
                width: "-=5px",
            }, 80);
        }
    } else {
        if (btnAtCB.css('display') === 'none') {
            // console.log('NONE');
            // console.log('hid');
            btnAtCB.css('display', 'block').animate({
                height: "+=10px",
                width: "+=10px",
            }, 50).animate({
                height: "-=10px",
                width: "-=10px",
            }, 100).animate({
                height: "+=10px",
                width: "+=10px",
            }, 50).animate({
                height: "-=10px",
                width: "-=10px",
            }, 100).animate({
                height: "+=10px",
                width: "+=10px",
            }, 50).animate({
                height: "-=10px",
                width: "-=10px",
            }, 100).animate({
                height: "+=10px",
                width: "+=10px",
            }, 50).animate({
                height: "-=10px",
                width: "-=10px",
            }, 100);
            btnAtCF.css('display', 'block');
        }
    }
};

const dataFormer = (arr) => {
    console.log('Arr: ', arr);
    let result = {};
    arr.forEach((item) => {
        console.log(item);
        result[item.name] = item.value;
    });
    console.log('res: ', result);
    result = {...result, lending_id: window.location.pathname};
    console.log('result: ');
    console.log(JSON.stringify(result));
    return JSON.stringify(result);
};

$( "#formPurchase" ).on( "submit", function( event ) {
    event.preventDefault();
    modal.style.display = "none";
    let formDataString = $(this).serializeArray();
    // console.log(formDataString);

    request(dataFormer(formDataString));
});

// Menu
$("#btnMenu").on("click", function (e) {
    const menuItemClass = $('.menu-item');
    $(menuItemClass).css('display') === 'none' ? $(menuItemClass).css('display', 'flex') : $(menuItemClass).css('display', 'none');
});
$(window).on('resize', () => {
    if ($(window).width() > 600) {
        $('.menu-item').css('display', 'flex')
    } else {
        $('.menu-item').css('display', 'none');
    }
    
    //Btns
    btnAtTrigger();

});

$(window).on('scroll', () => {
    btnAtTrigger();
});
$(window).on('load', () => {
    btnAtTrigger();
});


// COUNTER start
function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var clockB = document.getElementById(id+'B');
    var daysSpan = clock.querySelector('.days');
    var daysSpanB = clockB.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var hoursSpanB = clockB.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var minutesSpanB = clockB.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');
    var secondsSpanB = clockB.querySelector('.seconds');

    function updateClock() {
        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        daysSpanB.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        hoursSpanB.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        minutesSpanB.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
        secondsSpanB.innerHTML = ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 14 * 28 * 33 * 1000); // for endless timer
initializeClock('clockdiv', deadline);
//COUNTER END