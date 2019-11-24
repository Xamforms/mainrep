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
                <div class="notification-button-counter">2</div>
            </div>
            <div class="header-content-lk">
                <div class="lk-header lk-link cd-signin">Личный кабинет</div>
                <div class="lk-icon"></div>
            </div>
            <div class="popup-lk main-nav">
                <div class="popup-lk-setting popup-lk-sing"> Настройки профиля </div>
                <div class="popup-lk-sing-help popup-lk-sing"> Помощь </div>
                <div class="popup-lk-divider-line"></div>
                <a href="#" class="send-to-page-registration">
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
                <div class="my-statistics-content block-have-inline-block">Средний балл: <span class="average-score">87</span>/100</div>
                <div class="my-statistics-content block-have-inline-block"><a href="#" id="theme-mistake-a" class="a-style">Количество тем с ошибками: <span class="theme-mistake">3</span></a></div>
                <div class="my-statistics-content block-have-inline-block"><a href="#" id="number-of-mistakes-a" class="a-style">Количество ошибок: <span class="number-of-mistakes">2</span></a></div>
                <div class="my-statistics-content block-have-inline-block"><a href="#" id="number-of-attempts-a" class="a-style">Общее количество попыток: <span class="number-of-attempts">8</span></a></div>
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
                    <div class="block-tests-content" id="test-information1">
                        <div class="test-information-content block-have-inline-block">
                            <div class="test-information-content-block block-have-inline-block">
                                <div class="test-information-content-block-autor">Автор: <span class="autor-test">Иванов Иван Иванович</span></div>
                                <div class="test-information-content-block-name"><span class="name-of-tests">Название теста</span></div>
                                <div class="test-information-content-block-more">
                                    <div class="test-information-content-block-more-timer block-have-inline-block">Таймер: <span class="timer-test">54</span> мин.</div>
                                    <div class="test-information-content-block-more-attempt block-have-inline-block test-information-content-block-more-element">Попыток осталось: <span class="left-attempt-test">2</span></div>
                                    <div class="test-information-content-block-more-status block-have-inline-block test-information-content-block-more-element">Статус: <span class="status-test">Закрытый</span></div>
                                    <div class="test-information-content-block-more-next-attempt block-have-inline-block test-information-content-block-more-element">Следующая попытка: <span class="attempt-date-test">15.09.2019</span> в <span class="attempt-time-test">15:00</span></div>
                                </div>
                            </div>
                            <div class="test-information-content-play block-have-inline-block">
                                <a href="#">
                                    <div class="test-information-content-play-pic"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="block-tests-content" id="test-information2">
                        <div class="test-information-content block-have-inline-block">
                            <div class="test-information-content-block block-have-inline-block">
                                <div class="test-information-content-block-autor">Автор: <span class="autor-test">Иванов Иван Иванович</span></div>
                                <div class="test-information-content-block-name"><span class="name-of-tests">Название теста</span></div>
                                <div class="test-information-content-block-more">
                                    <div class="test-information-content-block-more-timer block-have-inline-block">Таймер: <span class="timer-test">54</span> мин.</div>
                                    <div class="test-information-content-block-more-attempt block-have-inline-block test-information-content-block-more-element">Попыток осталось: <span class="left-attempt-test">2</span></div>
                                    <div class="test-information-content-block-more-status block-have-inline-block test-information-content-block-more-element">Статус: <span class="status-test">Закрытый</span></div>
                                    <div class="test-information-content-block-more-next-attempt block-have-inline-block test-information-content-block-more-element">Следующая попытка: <span class="attempt-date-test">15.09.2019</span> в <span class="attempt-time-test">15:00</span></div>
                                </div>
                            </div>
                            <div class="test-information-content-play block-have-inline-block">
                                <a href="#">
                                    <div class="test-information-content-play-pic"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pass-tests-accordion block-lk-student block-have-shadow block-have-border">
            <input class="pass-tests-toggle " id="pass-tests-block" type="checkbox">
            <label for="pass-tests-block">
                <h4 class="pass-tests-header">Пройденные тесты</h4></label>
            <div class="pass-tests-boxes">
                <div class="pass-tests-box">
                    <div class="block-tests-content" id="test-information3">
                        <div class="test-information-content block-have-inline-block">
                            <div class="test-information-content-block block-have-inline-block">
                                <div class="test-information-content-block-autor">Автор: <span class="autor-test">Иванов Иван Иванович</span></div>
                                <div class="test-information-content-block-name"><span class="name-of-tests">Название теста</span></div>
                                <div class="test-information-content-block-more">
                                    <div class="test-information-content-block-more-timer block-have-inline-block">Таймер: <span class="timer-test">54</span> мин.</div>
                                    <div class="test-information-content-block-more-attempt block-have-inline-block test-information-content-block-more-element">Попыток осталось: <span class="left-attempt-test">2</span></div>
                                    <div class="test-information-content-block-more-status block-have-inline-block test-information-content-block-more-element">Статус: <span class="status-test">Закрытый</span></div>
                                    <div class="test-information-content-block-more-next-attempt block-have-inline-block test-information-content-block-more-element">Следующая попытка: <span class="attempt-date-test">15.09.2019</span> в <span class="attempt-time-test">15:00</span></div>
                                    <div class="test-information-content-block-more-score block-have-inline-block test-information-content-block-more-element">Балл: <span class="score-test">94</span>/<span class="max-score-test">100</span></div>
                                </div>
                            </div>
                            <div class="test-information-content-settings block-have-inline-block">
                                <div class="test-information-content-settings-recomend"><a href="" class="test-information-content-settings-recomend-a a-style">Рекомендации</a></div>
                                <div class="test-information-content-settings-request-attempt"><a href="" class="test-information-content-settings-request-attempt-a a-style">Запросить попытку</a></div>
                                <div class="test-information-content-settings-show-result"><a href="" class="test-information-content-settings-show-result-a a-style">Помотреть результат</a></div>
                            </div>
                        </div>
                    </div>
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
