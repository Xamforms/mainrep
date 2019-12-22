<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Название теста</title>
    <link rel="shortcut icon" href="images/logo-title.png" type="image/x-icon">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popup_home.js"></script>
    <script src="js/modernizr.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".header-content-lk").click(function (e) {
                $('.popup-lk').slideToggle(500);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).mouseup(function (e) {
            var container = $(".popup-lk");
            if (container.has(e.target).length === 0) {
                container.hide();
            }
        });
    </script>
</head>

<body>
<div class="body">
    @include('common.header')
    <div class="content-body container">
        <div class="greeting-test">
            <h3 class="greeting-header">Название теста</h3>
            <br>
            <p class="name-parametr">Автор: <span class="autor-test">Иванов Иван Иванович</span></p>
            <div class="greeting-inaormation">
                <p class="name-parametr">Описание теста:</p>
                <p class="description-test">Какое-то большое или не очень большое описание теста для участника, чтобы он понимал, что делает.</p>
                <br>
                <p class="name-parametr">Таймер: <span class="timer-test">55 мин.</span></p>
                <br>
                <p class="name-parametr">Количество попыток: <span class="attempt-test">3</span></p>
                <br>
                <div class="open-test"><a class="a-open-test" href="html/test.html"><div class="button button-open-test">Начать тест</div></a></div>

            </div>
        </div>

    </div>
</div>
@include('common.footer')
</body>

</html>
