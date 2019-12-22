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
    @include('common.header')
    <div class="content-body container">
        <div class="left-block-lk-teacher block">
            <div class="groups-block-lk-teacher block-lk-teacher block-have-shadow block-have-border">
                <p>
                <div class="my-groups-peoples">
                    <div class="groups-icon div-is-icon"></div>
                    <div class="my-groups-people-header">
                        <h4 class="my-groups-people-header-h4">Мои группы</h4></div>
                </div>
                <div class="my-groups-people-information">
                    <div class="my-groups-people-content">Кол-во групп: <span class="number-of-groups">{{session('amount_of_groups') or 0}}</span></div>
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
                    <div class="my-groups-people-content">Кол-во участников: <span class="number-of-peoples">{{session('amount_of_linkers') or 0}}</span></div>
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
                        @each('lk.teach.items.deprecated-test',session('deprecated_tests'),'deprecated_test')
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
                        <form action="/constructor" method="GET">
                            <button type="submit" class="button-lk-add-test" name="constructor" value="create">Создать новый</button>
                        </form>
                    </div>
                </div>
                    <div class="block-tests-information">
                    @each('lk.teach.items.actual-test',session('actual_tests'),'actual_test')
                    </div>
            </div>
        </div>
    </div>
</div>
@include('common.footer')
</body>
</html>
