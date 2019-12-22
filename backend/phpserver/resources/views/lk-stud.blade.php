<base href="studtest/assets/">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Личный кабинет студента</title>
    <link rel="shortcut icon" href="images/logo-title.png" type="image/x-icon">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popup_home.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/checkbox_all_one.js"></script>
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
    <div class="header container">
        <div class="header-content">
            <div class="header-content-logo"> <img src="images/logo.png" alt="логотип" class="logo"> </div>
            <div class="header-content-notification">
                <div class="notification-button-icon"></div>
                <div class="notification-button-counter">{{0}}</div>
            </div>
            <div class="header-content-lk">
                <div class="lk-header lk-link cd-signin">Личный кабинет</div>
                <div class="lk-icon"></div>
            </div>
            <div class="popup-lk main-nav">
                <div class="popup-lk-setting popup-lk-sing"> Настройки профиля </div>
                <div class="popup-lk-sing-help popup-lk-sing"> Помощь </div>
                <div class="popup-lk-divider-line"></div>
                <a href="/home" class="send-to-page-registration">
                    <div class="popup-lk-sing-up popup-lk-sing"> Выйти </div>
                </a>
            </div>
        </div>
    </div>
    <div class="content-body container">
        <div class="statictic-block-lk-student block-lk-student block-have-shadow block-have-border">
            <p>
            <div class="statistics-icon div-is-icon"></div>
            <div class="my-statistics-header"> Успеваемость</div>
            </p>
            <div class="my-statistics-information">
                <div class="my-statistics-content block-have-inline-block">Средний балл: <span class="average-score">{{0}}</span>/100</div>
                <div class="my-statistics-content block-have-inline-block"><a href="#" id="theme-mistake-a" class="a-style">Количество тем с ошибками: <span class="theme-mistake">{{0}}</span></a></div>
                <div class="my-statistics-content block-have-inline-block"><a href="#" id="number-of-mistakes-a" class="a-style">Количество ошибок: <span class="number-of-mistakes">{{0}}</span></a></div>
                <div class="my-statistics-content block-have-inline-block"><a href="#" id="number-of-attempts-a" class="a-style">Общее количество попыток: <span class="number-of-attempts">{{0}}</span></a></div>
                <div class="my-statistics-content block-have-inline-block"><a href="#" id="literature-a" class="a-style">Рекомендованная литература</a></div>
            </div>
            <button type="submit" class="button-download-pdf">Скачать в PDF</button>
        </div>
        <div class="access-tests-accordion block-lk-student block-have-shadow block-have-border">
            <input class="access-tests-toggle " id="access-tests-block" type="checkbox">
            <label for="access-tests-block">
                <h4 class="access-tests-header">Доступные тесты</h4></label>
            <div class="access-tests-boxes">
                <div class="access-tests-box">
                    @each('lk.stud.items.access-test',session('allowed_tests'),'allowed_test')
                </div>
            </div>
        </div>
        <div class="pass-tests-accordion block-lk-student block-have-shadow block-have-border">
            <input class="pass-tests-toggle " id="pass-tests-block" type="checkbox">
            <label for="pass-tests-block">
                <h4 class="pass-tests-header">Пройденные тесты</h4></label>
            <div class="pass-tests-boxes">
                <div class="pass-tests-box">
                    @each('lk.stud.items.pass-test',session('passed_tests'),'passed_test')
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer container">
    <p class="text-footer">©При использовании материалов, обязательно указывать ссылку на сайт.</p>
</div>
</body>

</html>
