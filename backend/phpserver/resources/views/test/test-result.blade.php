<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Результаты теста</title>
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
        <div class="test-results">
            <h3>Результаты теста</h3>
            <h3 class="resilt-header">Название теста</h3>
            <br>
            <p class="name-parametr">Автор: <span class="autor-test">Иванов Иван Иванович</span></p>
            <div class="result-inaormation">
                <p class="name-parametr">Набранный балл: <span class="points-test">78</span> из <span class="max-points-test">143</span></p>
                <p class="name-parametr">Процент: <span class="percent-test">70</span>%</p>
                <br>
                <div class="results">
                    <table cellspacing="0" class = "table-results" >
                        <colgroup>
                            <col class="first-col">
                            <col class="second-col">
                            <col class="third-col">
                            <col class="fourth-col">
                        </colgroup>
                        <tbody>
                        <tr>
                            <th>№</th>
                            <th>Вопрос</th>
                            <th>Ваш ответ</th>
                            <th>Правильный ответ</th>
                        </tr>
                        <tr class="false">
                            <td>1</td>
                            <td>Какой-то вопрос от преподавателя для студента. ЧТо такое..?</td>
                            <td>2. Второе</td>
                            <td>3. Третье</td>
                        </tr>
                        <tr class = "true">
                            <td>2</td>
                            <td>Какой-то вопрос от преподавателя для студента. ЧТо такое..?</td>
                            <td>2. Второе</td>
                            <td>2. Второе</td>
                        </tr>
                        <tr class = "half-true">
                            <td>3</td>
                            <td>Какой-то вопрос от преподавателя для студента. ЧТо такое..?</td>
                            <td>1. Первое<br>2. Второе</td>
                            <td>2. Второе<br>3. Третье</td>
                        </tr>
                        <tr class="false">
                            <td>4</td>
                            <td>Какой-то вопрос от преподавателя для студента. ЧТо такое..?</td>
                            <td>2. Второе</td>
                            <td>3. Третье</td>
                        </tr>
                        <tr class = "true">
                            <td>5</td>
                            <td>Какой-то вопрос от преподавателя для студента. ЧТо такое..?</td>
                            <td>2. Второе</td>
                            <td>2. Второе</td>
                        </tr>
                        <tr class = "half-true">
                            <td>6</td>
                            <td>Какой-то вопрос от преподавателя для студента. ЧТо такое..?</td>
                            <td>1. Первое<br>2. Второе</td>
                            <td>2. Второе<br>3. Третье</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="back-lk">
                    <a class="a-back-lk" href="/lk">
                        <div class="button button-back-lk">Вернуться в личный кабинет</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('common.footer')
</body>

</html>
