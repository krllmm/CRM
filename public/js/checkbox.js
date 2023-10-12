const state = localStorage.getItem('timer');
var checkBox = document.getElementById("toggle_time");

checkBox.checked = false;
if(state){
    checkBox.checked = true;
}

function boxChecked() {
    if (checkBox.checked == true){
        localStorage.setItem('timer', 'true');
    }else{
        localStorage.setItem('timer', 'false');
    }
}
