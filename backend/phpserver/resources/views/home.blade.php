<base href="studtest/assets/">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Главная</title>
    <link rel="shortcut icon" href="images/logo-title.png" type="image/x-icon">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popup_home.js"></script>
    <script src="js/modernizr.js"></script>
    <script type="text/javascript">
        $(function () {
            let get = window.location.href.split('?');
            if (get[1] == 'cd-user-modal') {
                $('.main-nav').trigger('click');
                $('.popup-lk-sing-in').trigger('click');
            }
        });
    </script>
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
                <div class="popup-lk-sing-in popup-lk-sing"> Войти </div>
                <div class="popup-lk-divider-line"></div>
                <a href="registration.html" class="send-to-page-registration">
                    <div class="popup-lk-sing-up popup-lk-sing"> Зарегистрироваться </div>
                </a>
            </div>
        </div>
    </div>
    <div class="cd-user-modal">
        <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container">
            <!-- this is the container wrapper -->
            <h3 class="cd-header-login">Вход</h3>
            <div id="cd-login">
                <!-- log in form -->
                <form class="cd-form" method="post" action="/home/login">
                    @csrf
                    <p class="fieldset">
                        <input class="full-width has-padding has-border" name="signin_email" type="email" placeholder="E-mail"> <span class="cd-error-message">Ошибка!</span> </p>
                    <p class="fieldset">
                        <input class="full-width has-padding has-border" name="signin_password" type="password" placeholder="Пароль"> <a href="/home#0" class="hide-password">Показать</a> <span class="cd-error-message">Ошибка!</span> </p>
                    <p class="fieldset">
                        <input type="checkbox" name="remember_me" checked>
                        <label for="remember_me">Запомнить меня</label>
                    </p>
                    <p class="fieldset">
                        <input class="full-width" type="submit" value="Войти"> </p>
                </form>
                <p class="cd-form-bottom-message"><a href="/home#0">Забыли пароль?</a></p>
                <!-- <a href="#0" class="cd-close-form">Close</a> --></div>
            <!-- cd-login -->
            <div id="cd-reset-password">
                <!-- reset password form -->
                <p class="cd-form-message">Забыли пароль? Введите свой E-mail. Вам будет отправлено письмо с новым паролем.</p>
                <form class="cd-form">
                    <p class="fieldset">
                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail"> <span class="cd-error-message">Ошибка!</span> </p>
                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Изменить пароль"> </p>
                </form>
                <p class="cd-form-bottom-message"><a href="/home#0">Вернуться ко входу</a></p>
            </div>
            <!-- cd-reset-password --><a href="/home#0" class="cd-close-form">Закрыть</a> </div>
        <!-- cd-user-modal-container -->
    </div>
    <!-- cd-user-modal -->
    <div class="content-body container">
        <div class="left-block-home block">
            <div class="preview-picture preview-picture-home"> </div>
        </div>
        <div class="right-block-home block">
            @if ($errors)
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <h1 class="home-header">СтудТест - решайте и создавайте тесты онлайн</h1>
            <div class="home-text">
                <p>На нашей платформе вы можете:</p>
                <ul>
                    <li>Организовывать тестирования для своих студентов, школьников или даже сотрудников</li>
                    <li>Создавать тесты различной сложности</li>
                    <li>Создавать вопросы различных типов: открытые, на соответствие, на выбор ответа и т.д.</li>
                    <li>Создавать тесты для печатного варианта</li>
                    <li>Проходить общедоступные тесты для оценки своих способностей</li>
                    <li>Следить за статистикой своих учеников</li>
                    <li>Ученик может получить полную информацию о темах, которые ему стоит подучить</li>
                    <li>Преподаватель может узнать, какие темы не поняли его ученики</li>
                </ul>
                <h4 class="text-to-button-open-constructor">Также Вы можете без регистрации воспользоваться конструктором тестов для печатного варианта</h4>
                <button type="submit" class="button-open-constructor">Открыть конструктор</button>
            </div>
        </div>
    </div>
</div>
@include('common.footer')
</body>
</html>
