window.onload
{
    let request;
    let url = "lab5/CometEmail.php";
    let previousRequest = "";

    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    function newRequest() {

        if (window.XMLHttpRequest) {
            request = new XMLHttpRequest();
        } else {
            request = new ActiveXObject("Microsoft.XMLHTTP");
        }

    }

    function sending() {

        const request = new XMLHttpRequest();
        let count;
        newRequest();
        request.open("get", url, false);
        request.send(null);

        if(previousRequest !== request.responseText) {

            let arrayJson = request.responseText.split("|");
            let parser;

            document.getElementById('container_messages').innerHTML = `<p id="inboxHead">Inbox</p>`;
            //document.getElementById('message').innerText +=  "<p>" + request.responseText + "</p>";

            for (count = 0; count < arrayJson.length-1; count++) {
                parser = JSON.parse(arrayJson[count]);
                document.getElementById('container_messages').innerHTML += '<div class="container_message"><div class="sender"><b>Sender: </b><i>' + parser.sender + '</i></div>' + '<div class="massage">'+ parser.message + '</div></div>';
            }
            previousRequest = request.responseText;
            document.getElementById('load-dots').style.display = 'none';
            document.getElementById('countMessages').innerText = count;

        }

    }

    function callFuncSending(){
        setTimeout(callInterval, 2000);
    }

    function callInterval(){
        setInterval(sending,1000)
    }

    function showInbox(){
        document.getElementById('container_messages').style.display = 'block';
        document.getElementById('writeMail').style.display = 'none';
    }

    function showMessages(){
        document.getElementById('container_messages').style.display = 'none';
        document.getElementById('writeMail').style.display = 'block';
    }
}

