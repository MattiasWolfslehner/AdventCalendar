function ToFetch(doorNum){
    //fetch Request for value of calendar-door
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        
        //aufarbeitung des Inhaltes
        let thisDoor = document.getElementById(`door-${doorNum}`);
        if(this.responseText != "Very impatient ;)"){
            let value = JSON.parse(this.responseText);
            console.log(value);
            thisDoor.innerHTML = `<img src="${value[0]}" class="images">`;
        }else{
            alert(this.responseText);
        }
    }

    xhttp.open("GET", `../adventkalender-api.php?door=${doorNum}`, true);
    xhttp.send();
}