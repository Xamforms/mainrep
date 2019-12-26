<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../studtest/assets/">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset("../studtest/assets/css/style.css")}}">
    <title>Конструктор</title>
    <link rel="shortcut icon" href="{{asset("../studtest/assets/images/logo-title.png")}}" type="image/x-icon">
    <script type="text/javascript" src="{{asset("../studtest/assets/js/jquery-3.4.1.min.js")}}"></script>
    <script src="{{asset("../studtest/assets/js/constructor.js")}}"></script>
    <script src="{{asset("../studtest/assets/js/modernizr.js")}}"></script>
    <script src="{{asset("../studtest/assets/js/checkbox_all_one.js")}}"></script>
    <script src="{{asset("../studtest/assets/js/answers_modal.js")}}"></script>
    <script type="text/javascript">
        $(function () {
            $(".header-content-lk").click(function (e) {
                $('.popup-lk').slideToggle(500);
            });
        });
        //Открытие второго окна добавления вопроса
        //Стек контейнеров
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


    <!-- Модальное окно вопросов -->
    <div class="cd-constructor-modal">
        <!-- this is the entire modal form, including the background -->
        <div class="cd-constructor-modal-container">
            <!-- this is the container wrapper -->
            <div class="cd-switcher">
                <h3 class="cd-header">Вопрос</h3> </div>
            <div id="cd-question">
                <!-- log in form -->
                <form class="questions-form" method="POST" action="/lk/constructor/editquestion">
                    @csrf
                    <p class="fieldset">
                        <label class="cd-label" for="number-of-score">Количество баллов</label>
                        <input class="full-width has-padding has-border" id="number-of-score" name="question-score" type="text" placeholder="По умолчанию 1 балл" > <span class="cd-error-message">Ошибка!</span> </p>
                    <p class="fieldset">
                        <label class="cd-label" for="question-textarea">Введите вопрос <span class="mark">*</span></label>
                        <textarea class="question-textarea" id="question-textarea" placeholder="Введите Ваш вопрос" name="question-text"></textarea>
                    </p>
                    <div class="del-question block-have-inline-block">
                        <p class="fieldset"> <a href="/lk/constructor" class="delete-link param-link-action">Отмена</a> </p>
                    </div>
                    <div class="block-add-answers block-have-inline-block main-nav">
                        <p class="fieldset">
                        <button type="submit" class="button button-add-answers cd-close-question" name="questionIndex">Готово</button>
                        </p>
                        <p class="text-form">Поля, помеченные символом "<span class="mark">*</span>", обязательны к заполнению</p>
                    </div>
                </form>
            </div>
            </div>
            <!-- cd-constructor -->
        </div>
        <!-- cd-constructor-modal-container -->
    <!-- Модальное окно вопросов -->


    <!-- Модальное окно ответов -->
    <div class="cd-answers-modal">
        <!-- this is the entire modal form, including the background -->
        <div class="cd-answers-modal-container">
            <!-- this is the container wrapper -->
            <div class="cd-switcher">
                <h3 class="cd-header">Ответы</h3> </div>
            <div id="cd-answers" class="cd-answers">
                <form method="POST" action="/lk/constructor/editquestion/setanswers">
                @csrf
                <!-- answer form -->
                <div class="cd-answer-information cd-answers-block">
                    <div class="block-questions-header">Вопрос:</div>
                    <!-- Текст вопросов в модальном окне -->
                </div>
                <div class="cd-answers-add cd-answers-block">

                    <div class="cd-header-answer-right block-have-inline-block">Правильный(-ые)</div>
                    <div class="cd-header-add-answer block-have-inline-block">Добавить ответ</div>
                    <div class="cd-new-answer-icon div-is-icon"></div>
                    <!-- Текст ответов в модальном окне -->
                </div>
                <div class="cd-block-button cd-answers-block">
                    <button type="submit" class="cd-btn-save" name="questionIndex">Готово</button>
                </div>
                </form>
            </div>
            <!-- cd-constructor -->
        </div>
        <!-- cd-constructor-modal-container -->
    </div>
    <!-- Модальное окно ответов -->


    @include('common.header')
    <div class="content-body container">

        {{--Общая форма--}}
        <div class="top-block-constructor block">
            <div class="top-block-constructor-param-test block-have-inline-block">
                <div class="top-block-constructor-param-test-name">
                        <input type="text" name="test-name" placeholder="Название теста" required class="top-block-constructor-param-test-name-input" form="save">
                </div>
                <div class="top-block-constructor-param-test-description">
                        <div class="description-textarea-header">Описание теста (отображается при прохождении)</div>
                        <p>
                            <textarea class="description-textarea" placeholder="Небольшое описание теста перед началом прохождения (правила, общая информация и прочее)" name="test-cription" form="save"></textarea>
                        </p>
                </div>
            </div>
            <div class="top-block-constructor-buttons block-have-inline-block">
                <button type="submit" class="button-download-PDF constructor-buttons">Скачать тест в PDF</button>
                <form id="save" method="post" action="lk/constructor/sendtest">
                @csrf
                <button type="submit" class="button-save-exit-test constructor-buttons">Сохранить и выйти</button>
                </form>
            </div>
        </div>
        {{--Общая форма--}}

        <div class="left-block-constructor block">
            <div class="param-block-constructor block-constructor block-have-shadow block-have-border">
                <p>
                <div class="constructor-param">
                    <div class="param-icon div-is-icon"></div>
                    <div class="param-header">
                        <h4 class="param-header-h4">Параметры</h4></div>
                </div>
                <a href="#"></a>
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

            {{--ГЕНЕРАЦИЯ ВОПРОСА--}}
            @foreach(session('test')->getQuestions() as $question)
                <div class="block-questions block-have-shadow block-have-border">
                    <div class="block-questions-container">
                        <div class="block-questions-section-and-score block-questions-style">
                            <div class="block-questions-header block-questions-score block-have-inline-block">Балл: <span class="score-question">{{$question->getQuality()}}</span></div>
                        </div>
                        <div class="block-questions-question block-questions-style">
                            <div class="block-questions-header">Вопрос:</div>
                            <div class="block-questions-text">{{$question->getName()}}</div>
                        </div>
                        <div class="block-questions-answer block-questions-style">
                            <div class="block-questions-header">Ответы:</div>
                            <div class="block-questions-answer-container block-answers-text">
                                <div class="radio form-input-question">
                                    @foreach($question->getAnswers() as $answer)
                                        <label><input type="radio" name="standing" value="{{$loop->index}}" {{$answer->isType()? "checked":""}}>{{$answer->getName()}}</label>
                                    @endforeach
                                </div>
                            </div>
                            <!--- <div class="block-questions-files">
                            <div class="block-questions-header">Прикреплённые файлы: </div>
                            <div class="block-questions-files-container"> </div>
                        </div> ---></div>
                    </div>
                    <div class="block-questions-buttons main-nav">
                        <form action="/lk/constructor/deletequestion" method="POST">
                            @csrf
                            <button type="submit" class="buttons-of-question button-delete-question" value="{{$question->getName()}}" name="question-text">Удалить</button>
                        </form>
                        <button type="submit" class="buttons-of-question button-edit-question popup-open-button-new-question" value="{{$question->getName()}}">Редактировать вопрос</button>
                        <button type="submit" class="buttons-of-question button-edit-answer popup-open-button-answers" value="{{$question->getName()}}">Редактировать ответы</button>
                    </div>
                </div>
            @endforeach
            {{--ГЕНЕРАЦИЯ ВОПРОСА--}}

        </div>
    </div>
    @include('common.footer')
</div>
</body>
</html>
