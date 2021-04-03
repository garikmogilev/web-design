window.onload
{
    function islogining() {

        let session = document.getElementById('user').textContent;

        switch (session) {
            case "no session":
                document.getElementById('authorization').style.display = 'block';
                break;
            default:
                callFuncSending();
                document.getElementById('authorization').style.display = 'none';
                if(session !== null) {
                    document.getElementById('userLogin').innerText = session;
                }
                break;
        }
    }
    setTimeout(islogining,10);
}