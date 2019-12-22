<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Конструктор</title>
    <link rel="shortcut icon" href="images/logo-title.png" type="image/x-icon">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="js/constructor.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/checkbox_all_one.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".header-content-lk").click(function (e) {
                $('.popup-lk').slideToggle(500);
            });
        });
        //del
        /*$(function () {
            $('.main-nav').trigger('click');
            $('.popup-open-button-answers').trigger('click');
        });*/
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
    <div class="cd-constructor-modal">
        <!-- this is the entire modal form, including the background -->
        <div class="cd-constructor-modal-container">
            <!-- this is the container wrapper -->
            <div class="cd-switcher">
                <h3 class="cd-header">Вопрос</h3> </div>
            <div id="cd-question">
                <!-- log in form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="cd-label" for="question-score">Колличество баллов</label>
                        <input class="full-width has-padding has-border" id="number-of-score" type="text" placeholder="По умолчанию 1 балл" name="question-score"> <span class="cd-error-message">Ошибка!</span> </p>
                    <p class="fieldset">
                        <label class="cd-label" for="text-question">Введите вопрос <span class="mark">*</span></label>
                        <textarea class="question-textarea" placeholder="Введите Ваш вопрос" name="text-question"></textarea>
                    </p>
                    <div class="del-question block-have-inline-block">
                        <p class="fieldset"> <a href="#" class="delete-link param-link-action">Удалить</a> </p>
                    </div>
                    <div class="block-add-answers block-have-inline-block main-nav">
                        <p class="fieldset">
                        <div class="button button-add-answers popup-open-button-answers">Добавить ответы</div>
                        </p>
                        <p class="text-form">Поля, помеченные символом "<span class="mark">*</span>", обязательны к заполнению</p>
                    </div>
                </form>
            </div>
            <!-- cd-constructor -->
        </div>
        <!-- cd-constructor-modal-container -->
    </div>
    <!-- cd-constructor-modal -->
    <div class="cd-answers-modal">
        <!-- this is the entire modal form, including the background -->
        <div class="cd-answers-modal-container">
            <!-- this is the container wrapper -->
            <div class="cd-switcher">
                <h3 class="cd-header">Ответы</h3> </div>
            <div id="cd-answers" class="cd-answers">
                <!-- log in form -->
                <div class="cd-answer-information cd-answers-block">
                    <div class="block-questions-header">Вопрос:</div>
                    <div class="block-questions-text">Пример текста вопроса</div>
                </div>
                <div class="cd-answers-add cd-answers-block">
                    <div class="cd-header-answer-right block-have-inline-block">Правильный(-ые)</div>
                    <div class="cd-header-add-answer block-have-inline-block">Добавить ответ</div>
                    <a href="#">
                        <div class="cd-new-answer-icon div-is-icon"></div>
                    </a>
                    <div class="cd-answer-container  block-have-border block-have-shadow">
                        <div class="cd-answer-check block-have-inline-block">
                            <input class="cd-answer-checkbox" id="constructor-answer-checkbox1" type="checkbox"> </div>
                        <div class="cd-answer-text">
                            <form action="#" method="post">
                                <input type="text" name="text-answer" placeholder="Ответ" required class="cd-answer-text-input"> </form>
                        </div>
                        <div class="cd-del-answer-icon-container">
                            <a href="#">
                                <div class="cd-del-answer-icon div-is-icon"></div>
                            </a>
                        </div>
                    </div>
                    <div class="cd-answer-container  block-have-border block-have-shadow">
                        <div class="cd-answer-check block-have-inline-block">
                            <input class="cd-answer-checkbox" id="constructor-answer-checkbox2" type="checkbox"> </div>
                        <div class="cd-answer-text">
                            <form action="#" method="post">
                                <input type="text" name="text-answer" placeholder="Ответ" required class="cd-answer-text-input"> </form>
                        </div>
                        <div class="cd-del-answer-icon-container">
                            <a href="#">
                                <div class="cd-del-answer-icon div-is-icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="cd-block-button cd-answers-block">
                    <button type="submit" class="cd-btn-save">Готово</button>
                </div>
            </div>
            <!-- cd-constructor -->
        </div>
        <!-- cd-constructor-modal-container -->
    </div>
    <!-- cd-constructor-modal -->
    @include('common.header')
    <div class="content-body container">
        <div class="top-block-constructor block">
            <div class="top-block-constructor-param-test block-have-inline-block">
                <div class="top-block-constructor-param-test-name">
                    <form action="#" method="post">
                        <input type="text" name="name-test" placeholder="Название теста" required class="top-block-constructor-param-test-name-input"> </form>
                </div>
                <div class="top-block-constructor-param-test-description">
                    <form action="#" method="post">
                        <div class="description-textarea-header">Описание теста (отображается при прохождении)</div>
                        <p>
                            <textarea class="description-textarea" placeholder="Небольшое описание теста перед началом прохождения (правила, общая информация и прочее)" name="text"></textarea>
                        </p>
                    </form>
                </div>
            </div>
            <div class="top-block-constructor-buttons block-have-inline-block">
                <button type="submit" class="button-download-PDF constructor-buttons">Скачать тест в PDF</button>
                <button type="submit" class="button-save-exit-test constructor-buttons">Сохранить и выйти</button>
            </div>
        </div>
        <div class="left-block-constructor block">
            <div class="param-block-constructor block-constructor block-have-shadow block-have-border">
                <p>
                <div class="constructor-param">
                    <div class="param-icon div-is-icon"></div>
                    <div class="param-header">
                        <h4 class="param-header-h4">Параметры</h4></div>
                </div>
                </p>
                <div class="param-information">
                    <form action="#" method="post">
                        <div class="form-input-constr">
                            <label for="link-to-test">Ссылка-приглашение на тест</label>
                            <input type="text" name="link-to-test" required class="link-test" placeholder="http://studtest.ru/lksjnvijenrgijn" value="http://studtest.ru/lksjnvijenrgijn">
                            <div class="param-content-link-copy"><a href="" class="param-link-action">Скопировать</a></div>
                        </div>
                        <div class="form-input-constr">
                            <label for="test-pass">Установить пароль</label>
                            <input type="password" name="test-pass" placeholder="Пароль" class="constr-pass"> </div>
                        <div class="form-input-constr">
                            <label for="timer">Установить таймер</label>
                            <input type="time" name="timer" placeholder="Неограниченно"> </div>
                        <div class="form-input-constr">
                            <label for="number-of-attempts">Установить количество попыток</label>
                            <input type="number" name="number-of-attempts" placeholder="1"> </div>
                        <div class="form-input-constr">
                            <label for="right">
                                <input type="checkbox" name="right" value="yes">Показывать правильные ответы</label>
                        </div>
                    </form>
                </div>
                <button type="submit" class="button-save-param">Сохранить</button>
            </div>
        </div>
        <div class="right-block-constructor block">
            <div class="buttons-new-question main-nav">
                <button class="button-new-question popup-open-button-new-question">Добавить вопрос</button>
            </div>
            <div class="block-questions block-have-shadow block-have-border">
                <div class="block-questions-container">
                    <div class="block-questions-section-and-score block-questions-style">
                        <div class="block-questions-section block-have-inline-block">
                            <div class="block-questions-header">Раздел:</div>
                            <div class="block-questions-text">Развитие промышленности в средневековье</div>
                        </div>
                        <div class="block-questions-header block-questions-score block-have-inline-block">Балл: <span class="score-question">4</span></div>
                    </div>
                    <div class="block-questions-question block-questions-style">
                        <div class="block-questions-header">Вопрос:</div>
                        <div class="block-questions-text">Очень хороший ответ на очень хороший вопрос от от очень хорошего преподавателя очень хорошим ученикам очень хорошего ВУЗа.</div>
                    </div>
                    <div class="block-questions-answer block-questions-style">
                        <div class="block-questions-header">Ответы:</div>
                        <div class="block-questions-answer-container block-questions-text">
                            <div class="radio form-input-question">
                                <label>
                                    <input type="radio" name="standing" value="вар1">Вариант ответа 1</label>
                                <label>
                                    <input type="radio" name="standing" value="вар2">Очень очень очень длинный вариант ответа на вопрос от очень хорошего преподавателя очень хорошим ученикам очень хорошего ВУЗа (МИРЭА) </label>
                                <label>
                                    <input type="radio" name="standing" value="вар3">Вариант ответа 3</label>
                                <label>
                                    <input type="radio" name="standing" value="вар4">Вариант ответа 4</label>
                            </div>
                        </div>
                        <!--- <div class="block-questions-files">
                        <div class="block-questions-header">Прикреплённые файлы: </div>
                        <div class="block-questions-files-container"> </div>
                    </div> ---></div>
                </div>
                <div class="block-questions-buttons main-nav">
                    <button type="submit" class="buttons-of-question button-delete-question">Удалить</button>
                    <button type="submit" class="buttons-of-question button-edit-question popup-open-button-new-question">Редактировать вопрос</button>
                    <button type="submit" class="buttons-of-question button-edit-answer popup-open-button-answers">Редактировать ответ</button>
                </div>
            </div>
        </div>
    </div>
    @include('common.footer')
</div>
</body>
</html>
