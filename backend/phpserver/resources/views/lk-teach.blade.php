<base href="studtest/assets/">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Личный кабинет преподавателя</title>
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
        <div class="left-block-lk-teacher block">
            <div class="groups-block-lk-teacher block-lk-teacher block-have-shadow block-have-border">
                <p>
                <div class="my-groups-peoples">
                    <div class="groups-icon div-is-icon"></div>
                    <div class="my-groups-people-header">
                        <h4 class="my-groups-people-header-h4">Мои группы</h4></div>
                </div>
                </p>
                <div class="my-groups-people-information">
                    <div class="my-groups-people-content">Кол-во групп: <span class="number-of-groups">1</span></div>
                </div>
                <button type="submit" class="button-show-groups">Посмотреть группы</button>
            </div>
            <div class="peoples-block-lk-teacher block-lk-teacher block-have-shadow block-have-border">
                <p>
                <div class="my-groups-peoples">
                    <div class="groups-icon div-is-icon"></div>
                    <div class="my-groups-people-header">
                        <h4 class="my-groups-people-header-h4">Мои участники</h4></div>
                </div>
                </p>
                <div class="my-groups-people-information">
                    <div class="my-groups-people-content">Кол-во участников: <span class="number-of-peoples">1</span></div>
                </div>
                <button type="submit" class="button-show-peoples">Посмотреть участников</button>
            </div>
        </div>
        <div class="right-block-lk-teacher block">
            <div class="archive-of-tests-accordion block-have-shadow block-have-border">
                <input class="archive-of-tests-toggle " id="archive-of-tests-block" type="checkbox">
                <label for="archive-of-tests-block">
                    <h4 class="archive-of-tests-header">Архив тестов</h4></label>
                <div class="archive-of-tests-boxes">
                    <div class="archive-of-tests-box">
                        <div class="block-tests-content" id="test-information3">
                            <div class="test-information-content block-have-inline-block">
                                <div class="test-information-content-block block-have-inline-block">
                                    <div class="test-information-content-block-date-creating">Дата создания: <span class="date-creating-test">15.10.2019</span></div>
                                    <div class="test-information-content-block-name"><span class="name-of-tests">Название теста</span></div>
                                    <div class="test-information-content-block-date">Дата проведения: <span class="date-test">15.10.2019</span></div>
                                    <div class="test-information-content-block-more">
                                        <div class="test-information-content-block-more-timer block-have-inline-block">Таймер: <span class="timer-test">54</span> мин.</div>
                                        <div class="test-information-content-block-more-attempt block-have-inline-block test-information-content-block-more-element">Попытки: <span class="attempt-test">3</span></div>
                                        <div class="test-information-content-block-more-status block-have-inline-block test-information-content-block-more-element">Статус: <span class="status-test">Закрытый</span></div>
                                        <div class="test-information-content-block-more-number-question block-have-inline-block test-information-content-block-more-element">Количество вопросов: <span class="number-question-test">15</span></div>
                                        <div class="test-information-content-block-more-groups block-have-inline-block test-information-content-block-more-element"><a href="" class="test-information-content-block-more-groups-a a-style">Группы</a></div>
                                        <div class="test-information-content-block-more-peoples block-have-inline-block test-information-content-block-more-element"><a href="" class="test-information-content-block-more-peoples-a a-style">Участники</a></div>
                                        <div class="test-information-content-block-more-statistics block-have-inline-block test-information-content-block-more-element"><a href="" class="test-information-content-block-more-statistics-a a-style">Статистика</a></div>
                                    </div>
                                </div>
                                <div class="test-information-content-settings block-have-inline-block">
                                    <div class="test-information-content-settings-del"><a href="" class="test-information-content-settings-del-a a-style">Удалить</a></div>
                                    <div class="test-information-content-settings-no-archive"><a href="" class="test-information-content-settings-no-archive-a a-style">Из архива</a></div>
                                    <div class="test-information-content-settings-edit"><a href="" class="test-information-content-settings-edit-a a-style">Редактировать</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-tests block-have-shadow block-have-border">
                <div class="block-tests-header block-have-shadow block-have-border">
                    <div class="headers-tests-blocks headers-tests-block-check">
                        <input class="block-tests-checkbox all" data-id="active-tests" id="block-tests-checkbox-block" type="checkbox"> </div>
                    <div class="headers-tests-blocks headers-tests-block-h">
                        <h4 class="block-tests-h4">Тесты</h4></div>
                    <div class="headers-tests-blocks headers-tests-block-select">
                        <form action="#" method="post" name="block-tests-name-form" class="block-tests-form ">
                            <select name="block-tests-name-list" class="block-tests-list block-have-shadow block-have-border">
                                <option>В архив</option>
                                <option>Удалить насовсем</option>
                            </select>
                            <input type="submit" class="block-tests-button button" value="Применить"> </form>
                    </div>
                    <div class="headers-tests-blocks headers-tests-block-new">
                        <button type="submit" class="button-lk-add-test">Создать новый</button>
                    </div>
                </div>
                <div class="block-tests-information">
                    <div class="block-tests-content" id="test-information1">
                        <div class="test-information-check block-have-inline-block">
                            <input class="block-tests-checkbox one" id="test-information-checkbox" data-id="active-tests" type="checkbox"> </div>
                        <div class="test-information-content block-have-inline-block">
                            <div class="test-information-content-block block-have-inline-block">
                                <div class="test-information-content-block-date-creating">Дата создания: <span class="date-creating-test">15.10.2019</span></div>
                                <div class="test-information-content-block-name"><span class="name-of-tests">Название теста</span></div>
                                <div class="test-information-content-block-date">Дата проведения: <span class="date-test">15.10.2019</span></div>
                                <div class="test-information-content-block-more">
                                    <div class="test-information-content-block-more-timer block-have-inline-block">Таймер: <span class="timer-test">54</span> мин.</div>
                                    <div class="test-information-content-block-more-attempt block-have-inline-block test-information-content-block-more-element">Попытки: <span class="attempt-test">3</span></div>
                                    <div class="test-information-content-block-more-status block-have-inline-block test-information-content-block-more-element">Статус: <span class="status-test">Закрытый</span></div>
                                    <div class="test-information-content-block-more-number-question block-have-inline-block test-information-content-block-more-element">Количество вопросов: <span class="number-question-test">15</span></div>
                                    <div class="test-information-content-block-more-groups block-have-inline-block test-information-content-block-more-element"><a href="" class="test-information-content-block-more-groups-a a-style">Группы</a></div>
                                    <div class="test-information-content-block-more-peoples block-have-inline-block test-information-content-block-more-element"><a href="" class="test-information-content-block-more-peoples-a a-style">Участники</a></div>
                                    <div class="test-information-content-block-more-statistics block-have-inline-block test-information-content-block-more-element"><a href="" class="test-information-content-block-more-statistics-a a-style">Статистика</a></div>
                                </div>
                            </div>
                            <div class="test-information-content-edit block-have-inline-block">
                                <a href="#">
                                    <div class="test-information-content-edit-pic"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="block-tests-content" id="test-information2">
                        <div class="test-information-check block-have-inline-block">
                            <input class="block-tests-checkbox one" id="test-information-checkbox" data-id="active-tests" type="checkbox"> </div>
                        <div class="test-information-content block-have-inline-block">
                            <div class="test-information-content-block block-have-inline-block">
                                <div class="test-information-content-block-date-creating">Дата создания: <span class="date-creating-test">15.10.2019</span></div>
                                <div class="test-information-content-block-name"><span class="name-of-tests">Название теста</span></div>
                                <div class="test-information-content-block-date">Дата проведения: <span class="date-test">15.10.2019</span></div>
                                <div class="test-information-content-block-more">
                                    <div class="test-information-content-block-more-timer block-have-inline-block">Таймер: <span class="timer-test">54</span> мин.</div>
                                    <div class="test-information-content-block-more-attempt block-have-inline-block test-information-content-block-more-element">Попытки: <span class="attempt-test">3</span></div>
                                    <div class="test-information-content-block-more-status block-have-inline-block test-information-content-block-more-element">Статус: <span class="status-test">Закрытый</span></div>
                                    <div class="test-information-content-block-more-number-question block-have-inline-block test-information-content-block-more-element">Количество вопросов: <span class="number-question-test">15</span></div>
                                    <div class="test-information-content-block-more-groups block-have-inline-block test-information-content-block-more-element"><a href="" class="test-information-content-block-more-groups-a a-style">Группы</a></div>
                                    <div class="test-information-content-block-more-peoples block-have-inline-block test-information-content-block-more-element"><a href="" class="test-information-content-block-more-peoples-a a-style">Участники</a></div>
                                    <div class="test-information-content-block-more-statistics block-have-inline-block test-information-content-block-more-element"><a href="" class="test-information-content-block-more-statistics-a a-style">Статистика</a></div>
                                </div>
                            </div>
                            <div class="test-information-content-edit block-have-inline-block">
                                <a href="#">
                                    <div class="test-information-content-edit-pic"></div>
                                </a>
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
