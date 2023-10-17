document.getElementById('clock').classList.add('hidden');

setInterval(updateTime, 1000);
function updateTime() {

    show = localStorage.getItem('timer');
    if(show == "true"){
        document.getElementById('clock').classList.remove('hidden');
    }else{
        document.getElementById('clock').classList.add('hidden');
    }

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

    document.getElementById('clock').innerHTML = hours + ":" + minutes + ":" + seconds;
}
