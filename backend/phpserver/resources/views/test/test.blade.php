<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Тест</title>
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
        <div class="block-timer">
            <p>Оставшееся время: <span class="clock">23:15</span></p>
        </div>
        <div class="left-block-constructor block">
            <div class="list-questions block-have-shadow block-have-border">
                <div class="list-element have-answer">Вопрос №<span class="numder-question">1</span></div>
                <div class="list-element have-answer">Вопрос №<span class="numder-question">2</span></div>
                <div class="list-element have-miss">Вопрос №<span class="numder-question">3</span></div>
                <div class="list-element current">Вопрос №<span class="numder-question">4</span></div>
                <div class="list-element">Вопрос №<span class="numder-question">5</span></div>
                <div class="list-element">Вопрос №<span class="numder-question">6</span></div>
                <div class="list-element">Вопрос №<span class="numder-question">7</span></div>
                <div class="list-element">Вопрос №<span class="numder-question">8</span></div>
                <div class="list-element">Вопрос №<span class="numder-question">9</span></div>
                <div class="list-element">Вопрос №<span class="numder-question">10</span></div>
                <div class="list-element">Вопрос №<span class="numder-question">11</span></div>
                <div class="list-element">Вопрос №<span class="numder-question">8</span></div>
                <div class="list-element">Вопрос №<span class="numder-question">9</span></div>
                <div class="list-element">Вопрос №<span class="numder-question">10</span></div>
                <div class="list-element">Вопрос №<span class="numder-question">11</span></div>
            </div>
            <div class="complete-test"><a class="a-complete-test" href="html/result-test.html"><div class="button button-complete-test">Завершить тест</div></a></div>
        </div>
        <div class="right-block-lk-teacher block">
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
                                    <input type="radio" name="standing" value="вар2">Очень очень очень длинный вариант ответа на вопрос от очень хорошего преподавателя очень хорошим ученикам очень хорошего ВУЗа </label>
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
                    <button type="submit" class="buttons-of-test button-miss-question">Предыдущий вопрос</button>
                    <button type="submit" class="buttons-of-test button-next-answer">Следующий вопрос</button>
                </div>
            </div>
        </div>
    </div>
    @include('common.footer')
</div>
</body>
</html>
