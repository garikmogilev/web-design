<!DOCTYPE HTML>
<html>
<head>
    <title>Web-почта</title>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script>
        var id = 0;
        var amount = 0;
        $(document).ready(function () {

            if (id == 0) id = prompt('Введите свой идентификатор', 0);

			$("#submit").click(function(){
				$( "form" ).submit()
			});

            $("form").submit(function () {
                formData = $(this).serialize();
                $.post("back.php", formData)
            });

        });

        function subscribe() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementsByClassName('mails')[0].innerHTML = xhttp.response;
                    subscribe();
                }
            };
            xhttp.open("GET", "back.php?command=getmail&id=" + id.toString() + "&amount=" + amount.toString(), true);
            xhttp.send();
        }
        subscribe();

    </script>

</head>
    <body>
        <div class ="mails">

        </div>
        <div name="mailform">
            <form method="post">
                <input type="text" value="Айди получателя" name="id">
                <br><br>
                <input type="text" value="Тема письма" name="subject">
                <br><br>
                <textarea name="text">Текст письма</textarea>
                <br><br>
                <input type="button" id="submit" value="Отправить">
            </form>
        </div>
    </body>
</html>