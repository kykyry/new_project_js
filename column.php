<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fonts.css">

    <title>Column_task</title>
</head>

<body>
    <?php
    include('nav.php');
    ?>

    <div class="container">
        <h1 class="column__title">Spreading text across columns</h1>
        <div class="column__number">
            <label for="column">Choose the number of columns:</label>
            <select id="column">
                <option value="two" selected>2</option>
                <option value="three">3</option>
                <option value="four">4</option>
                <option value="five">5</option>
            </select>
        </div>
        <div class="column__gutters">
            <label for="gutters">Choose the gutters between rows and columns:</label>
            <select id="gutters">
                <option value="ten" selected>10</option>
                <option value="twenty">20</option>
                <option value="thirty">30</option>
                <option value="fourty">40</option>
                <option value="fifty">50</option>
            </select>
            <span>px</span>
        </div>
        <button class="column__btn sample_btn">Enjoy</button>
        <div class="root">
            <div class="root__el" id="el1">1. Все говорят: Кремль, Кремль. Ото всех я слышал про него, а сам ни разу не
                видел. Сколько раз уже (тысячу раз), напившись или с похмелюги, проходил по Москве с севера на юг, с
                запада на восток, из конца в конец, насквозь и как попало – и ни разу не видел Кремля. </div>
            <div class="root__el" id="el2">2. Вот и вчера опять не увидел, – а ведь целый вечер крутился вокруг тех
                мест, и не так чтоб очень пьян был: я, как только вышел на Савеловском, выпил для начала стакан
                зубровки, потому что по опыту знаю, что в качестве утреннего декокта люди ничего лучшего еще не
                придумали.</div>
            <div class="root__el" id="el3">3. Так. Стакан зубровки. А потом – на Каляевской – другой стакан, только уже
                не зубровки, а кориандровой. Один мой знакомый говорил, что кориандровая действует на человека
                антигуманно, то есть, укрепляя все члены, ослабляет душу.</div>
            <div class="root__el" id="el4">4. Со мной почему-то случилось наоборот, то есть душа в высшей степени
                окрепла, а члены ослабели, но я согласен, что и это антигуманно. Поэтому там же, на Каляевской, я
                добавил еще две кружки жигулевского пива и из горлышка альб-де-дессерт.</div>
            <div class="root__el" id="el5">5. Вы, конечно, спросите: а дальше, Веничка, а дальше – что ты пил? Да я и
                сам путем не знаю, что я пил.</div>
            <div class="root__el" id="el6">6. Помню – это я отчетливо помню – на улице Чехова я выпил два стакана
                охотничьей. Но ведь не мог я пересечь Садовое кольцо, ничего не выпив? Не мог. Значит, я еще чего-то
                пил.</div>
        </div>
    </div>
    <footer id="footer">
        <?php
        include('footer.php');
        ?>
    </footer>

    <script src="column.js"></script>
</body>

</html>