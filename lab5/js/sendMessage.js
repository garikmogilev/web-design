window.onload
{
    let request;

    function newRequest() {

        if (window.XMLHttpRequest) {
            request = new XMLHttpRequest();
        } else {
            request = new ActiveXObject("Microsoft.XMLHTTP");
        }

    }

    function sendMessage(){
        let valueSender = document.getElementsByName("sender")[0].value;
        let valueMessage = document.getElementsByName("inputMessage")[0].value;
        let valueUser = document.getElementById("user").textContent;
        let foundError;
        newRequest();
        request.open("get", "lab5/insertMessage.php?sender=" + valueSender + "&message=" + valueMessage+"&user=" + valueUser, false);
        request.send(null);
        foundError = request.responseText.split(' ');
        for (let i = 0; i < foundError.length; i++) {
            if(foundError[i] === "FOREIGN"){
                document.getElementById('notification').innerText = "Такого пользователя не существует";
                return;
            }

        }
        result = request.responseText;

        document.getElementById('notification').innerText = request.responseText;
    }

}