<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="lab5/js/comet.js" lang="javaScript"></script>
    <script src="lab5/js/logging.js" lang="javaScript"></script>
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="lab5/css/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="lab5/css/email.css" media="all" rel="stylesheet" type="text/css" />
    <style>
        #content_div{
            margin-top: 10px;
        }
        #test_btn{
            margin-top: 90px;
        }
    </style>
</head>
<body>

<header>

    <ul class="menu-main">
        <li><a href="lab1.php">Lab 1</a></li>
        <li><a href="lab2.php">Lab 2</a></li>
        <li><a href="lab3.php">Lab 3</a></li>
        <li><a href="lab4.php">Lab 4</a></li>
        <li><a href="lab5.php">Lab 5</a></li>
        <li><a href="lab6.php">Lab 6</a></li>
        <li><a href="lab7.php">Lab 7</a></li>
        <li><a href="lab8.php">Lab 8</a></li>
        <li><a href="lab9.php">Lab 9</a></li>
        <li><a href="lab10.php">Lab 10</a></li>
    </ul>

</header>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#test_btn').click(function(){
            ajaxGetXML();
        });

    });

    function ajaxGetXML(){
        $.ajax({
            type: "get",
            url: "xml/students.xml",
            dataType: "xml",
            success: function(data) {
                let html = "";
                let count = 1;
                $(data).find('student').each(function(){
                    let faculty = $(this).find('id').attr('faculty');
                    let first_name = $(this).find('first_name').html();
                    let last_name = $(this).find('last_name').html();
                    let id = $(this).find('id').html();
                    if(count === 10) {
                        html += "<label>ID: " + id + "</label><br/>"
                        html += "<label>Faculty: " + faculty + "</label><br/>";
                        html += "<label>User: " + first_name + " " + last_name + "</label><br/>";
                        html += "<hr/>";
                    }
                    count++;
                });
                $('#content_div').html(html);
            },
            error: function(){
                alert('ERROR');
            }

        });
    }
</script>
<body>
<input type="button" value="Load xml " id="test_btn"/>
<div id="content_div"></div>
</body>
</html>
