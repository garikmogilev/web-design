<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>web-design</title>
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="lab4/css/style.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

  <img class="container_header" src="img/webdesign-services-why-i-should-have-a-website-for-my-business.jpg" alt=""/>

</header>

<footer>
        <img class="smokeSlowly" src="img/Smoke-Element.png" alt=""/>
        <img class="smokeSlowly" src="img/Smoke-Element.png" alt=""/>
        <img class="smokeSlowly" src="img/Smoke-Element.png" alt=""/>
        <img class="smoke" src="img/Smoke-Element.png" alt=""/>
        <img class="smoke" src="img/Smoke-Element.png" alt=""/>
        <img class="smoke" src="img/Smoke-Element.png" alt=""/>
        <img class="smoke" src="img/Smoke-Element.png" alt=""/>
        <img class="smokeFast" src="img/Smoke-Element.png" alt=""/>
        <img class="smokeFast" src="img/Smoke-Element.png" alt=""/>
        <img class="smokeFast" src="img/Smoke-Element.png" alt=""/>

        <img class="reSmokeSlowly" src="img/Smoke-Element.png" alt=""/>
        <img class="reSmokeSlowly" src="img/Smoke-Element.png" alt=""/>
        <img class="reSmokeSlowly" src="img/Smoke-Element.png" alt=""/>
        <img class="reSmoke" src="img/Smoke-Element.png" alt=""/>
        <img class="reSmoke" src="img/Smoke-Element.png" alt=""/>
        <img class="reSmoke" src="img/Smoke-Element.png" alt=""/>
        <img class="reSmokeFast" src="img/Smoke-Element.png" alt=""/>
        <img class="reSmokeFast" src="img/Smoke-Element.png" alt=""/>
        <img class="reSmokeFast" src="img/Smoke-Element.png" alt=""/>
</footer>

<script type="application/javascript" language="JavaScript">
    $(document).ready(function(){
        var collectionImg = $('img');

        for (i = 1; i < 20;i++){
            collectionImg[i].width = Math.random()*200+157;
            collectionImg[i].style.top = Math.random()*400-100 + 'px';
            collectionImg[i].style.left = Math.random()*10+35 + '%';
        }

        let smokeSlowly = $('.smokeSlowly');
        let smoke = $('.smoke');
        let smokeFast = $('.smokeFast');
        let resmokeSlowly = $('.reSmokeSlowly');
        let resmoke = $('.reSmoke');
        let reSmokeFast = $('.reSmokeFast');

        animateNormal();
        animateReNormal();
        animateFast();
        animateReFast();
        animateSlowly();
        animateReSlowly();

        function animateNormal() {
            smoke.animate({left: '41%', opacity: '0.6'}, 6000, 'linear');
            smoke.animate({left: '43%', opacity: '0.5'}, 4000, 'linear');
            smoke.animate({left: '45%', opacity: '0.4'}, 5000, 'linear');
            smoke.animate({left: '43%', opacity: '0.5'}, 5000, 'linear');
        }

        function animateReNormal() {
            resmoke.animate({left: '42%', opacity: '0.6'}, 2000, 'linear');
            resmoke.animate({left: '44%', opacity: '0.5'}, 4000, 'linear');
            resmoke.animate({left: '46%', opacity: '0.4'}, 8000, 'linear');
            resmoke.animate({left: '44%', opacity: '0.5'}, 2000, 'linear');
        }

        function animateReSlowly() {
            resmokeSlowly.animate({left: '42%', opacity: '0.6'}, 4000, 'linear');
            resmokeSlowly.animate({left: '44%', opacity: '0.5'}, 6000, 'linear');
            resmokeSlowly.animate({left: '46%', opacity: '0.4'}, 2000, 'linear');
            resmokeSlowly.animate({left: '44%', opacity: '0.5'}, 2000, 'linear');
        }

        function animateReFast(){
            reSmokeFast.animate({left: '44%', opacity: '0.6'}, 4000, 'linear');
            reSmokeFast.animate({left: '42%', opacity: '0.5'}, 6000, 'linear');
            reSmokeFast.animate({left: '40%', opacity: '0.4'}, 4000, 'linear');
            reSmokeFast.animate({left: '42%', opacity: '0.5'}, 4000, 'linear');
        }

        function animateSlowly() {
            smokeSlowly.animate({left: '44%', opacity: '0.6'}, 3000, 'linear');
            smokeSlowly.animate({left: '42%', opacity: '0.5'}, 6000, 'linear');
            smokeSlowly.animate({left: '40%', opacity: '0.4'}, 4000, 'linear');
            smokeSlowly.animate({left: '42%', opacity: '0.5'}, 2000, 'linear');
        }

        function animateFast(){
            smokeFast.animate({left: '44%', opacity: '0.6'}, 3000, 'linear');
            smokeFast.animate({left: '46%', opacity: '0.5'}, 6000, 'linear');
            smokeFast.animate({left: '48%', opacity: '0.4'}, 4000, 'linear');
            smokeFast.animate({left: '46%', opacity: '0.5'}, 2000, 'linear');
        }

        setInterval(animateNormal,20000);
        setInterval(animateReNormal,16000);
        setInterval(animateReSlowly,14000);
        setInterval(animateReFast,18000);
        setInterval(animateSlowly,15000);
        setInterval(animateFast,15000);

    });
</script>
</body>
</html>
