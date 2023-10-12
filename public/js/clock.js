setInterval(updateTime, 1000);

show = localStorage.getItem('timer');
if(!show){
    document.getElementById('clock').classList.add('hidden');
}

function updateTime() {
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();

    if (hours < 10) {
        hours = "0" + hours;
    }
    if (minutes < 10) {
        minutes = "0" + minutes;
    }
    if (seconds < 10) {
        seconds = "0" + seconds;
    }

    show = localStorage.getItem('timer');

    if(!show){
        document.getElementById('clock').classList.add('hidden');
    }else{
        document.getElementById('clock').classList.remove('hidden');
    }

    document.getElementById('clock').innerHTML = hours + ":" + minutes + ":" + seconds;
}
