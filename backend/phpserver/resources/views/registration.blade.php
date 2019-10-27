<!DOCTYPE html>
<html lang="en"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="studtest/assets/css/style.css">
    <title>Document</title>
</head>

<body>
<div class="body">
    <div class="header container">
        <div class="header-content">
            <p class="header-text">Уже есть аккаунт? <a href="#" class="header-link link">Войти</a></p>
        </div>
    </div>
    <div class="content-body container">
        <div class="left-block block">
            <div class="logo-inscription">
                <h2> <img alt="" class="logo" src="studtest/assets/images/logo.png"><br>Создавай и решай тесты он-лайн вместе со СтудТест</h2> </div>
            <div class="preview-picture"> </div>
        </div>
        <div class="right-block block">
            @if ($errors)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
            <div class="form-registration">
                <form method="post" action="/registration/newuser"> <!--studtest/assets/php/form-registration.php-->
                    @csrf  <!--Токен сессии для отправки на сервер (см сsrf-атака)-->
                    <div class="form-input">
                        <label for="email">E-mail<span class="mark">*</span></label>
                        @error ('email')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="email" name="email" placeholder="ivanov@mymail.ru"> </div>
                    <div class="form-input">
                        <label for="lastname">Фамилия<span class="mark">*</span></label>
                        @error ('lastname')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="text" name="lastname" placeholder="Иванов"> </div>
                    <div class="form-input">
                        <label for="firstname">Имя<span class="mark">*</span></label>
                        @error ('firstname')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="text" name="firstname" placeholder="Иван"> </div>
                    <div class="form-input">
                        <label for="name">Отчество</label>
                        @error ('patronymic')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="text" name="patronymic" placeholder="Иванович"> </div>
                    <div class="radio form-input">
                        <div class="radio-label">Кто вы?<span class="mark">*</span></div>
                        @error ('standing')
                        <div>{{$message}}</div>
                        @enderror
                        <label>
                            <input type="radio" name="standing" value="преподаватель">Преподаватель</label>
                        <label>
                            <input type="radio" name="standing" value="студент">Студент </label>
                    </div>
                    <div class="form-input">
                        <label for="password">Придумайте пароль<span class="mark">*</span></label>
                        @error ('password')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="password" name="password" placeholder="не менее 8 символов"> </div>
                    <div class="form-input">
                        <label for="repeatpassword">Повторите пароль<span class="mark">*</span></label>
                        @error ('repeatpassword')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="password" name="repeatpassword">
                        <p class="text-form">Поля, помеченные символом "<span class="mark">*</span>", обязательны к заполнению</p>
                    </div>
                    <div class="form-input">
                        <button type="submit" class="button-registration">Зарегистрироваться</button>
                        <p class="agreement">
                            <label for="terms">
                                @error ('terms')
                                <div>{{$message}}</div>
                                @enderror
                                <input type="checkbox" name="terms" value="yes"><span class="mark">*</span></label> Я даю согласие на <a href="">обработку персональных данных</a> </label>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="footer container">
    <p class="text-footer">©Все права защищены, 2019</p>
</div>



<style class="sf-download-bar-styles">
    .sf-download-bar__circle {
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        position: relative;
        display: inline-block;
        vertical-align: middle;
    }

    .sf-download-bar__circle .sf-download-bar__circle-slice,
    .sf-download-bar__circle .sf-download-bar__circle-fill {
        width: 40px;
        height: 40px;
        position: absolute;
        transition: transform 0.3s;
        border-radius: 50%;
    }

    .sf-download-bar__circle .sf-download-bar__circle-slice {
        clip: rect(0px, 40px, 40px, 20px);
    }

    .sf-download-bar__circle .sf-download-bar__circle-slice .sf-download-bar__circle-fill {
        clip: rect(0px, 20px, 40px, 0px);
        background-color: #fff;
    }

    .sf-download-bar__circle .sf-download-bar__circle-overlay {
        width: 38px;
        height: 38px;
        position: absolute;
        margin-left: 1px;
        margin-top: 1px;
        background-color: #5181B8;
        border-radius: 50%;
    }

    .sf-download-bar__circle[data-progress='0'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='0'] .sf-download-bar__circle-fill {
        transform: rotate(0deg);
    }

    .sf-download-bar__circle[data-progress='0'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(0deg);
    }

    .sf-download-bar__circle[data-progress='1'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='1'] .sf-download-bar__circle-fill {
        transform: rotate(1.8deg);
    }

    .sf-download-bar__circle[data-progress='1'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(3.6deg);
    }

    .sf-download-bar__circle[data-progress='2'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='2'] .sf-download-bar__circle-fill {
        transform: rotate(3.6deg);
    }

    .sf-download-bar__circle[data-progress='2'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(7.2deg);
    }

    .sf-download-bar__circle[data-progress='3'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='3'] .sf-download-bar__circle-fill {
        transform: rotate(5.4deg);
    }

    .sf-download-bar__circle[data-progress='3'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(10.8deg);
    }

    .sf-download-bar__circle[data-progress='4'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='4'] .sf-download-bar__circle-fill {
        transform: rotate(7.2deg);
    }

    .sf-download-bar__circle[data-progress='4'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(14.4deg);
    }

    .sf-download-bar__circle[data-progress='5'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='5'] .sf-download-bar__circle-fill {
        transform: rotate(9deg);
    }

    .sf-download-bar__circle[data-progress='5'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(18deg);
    }

    .sf-download-bar__circle[data-progress='6'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='6'] .sf-download-bar__circle-fill {
        transform: rotate(10.8deg);
    }

    .sf-download-bar__circle[data-progress='6'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(21.6deg);
    }

    .sf-download-bar__circle[data-progress='7'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='7'] .sf-download-bar__circle-fill {
        transform: rotate(12.6deg);
    }

    .sf-download-bar__circle[data-progress='7'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(25.2deg);
    }

    .sf-download-bar__circle[data-progress='8'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='8'] .sf-download-bar__circle-fill {
        transform: rotate(14.4deg);
    }

    .sf-download-bar__circle[data-progress='8'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(28.8deg);
    }

    .sf-download-bar__circle[data-progress='9'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='9'] .sf-download-bar__circle-fill {
        transform: rotate(16.2deg);
    }

    .sf-download-bar__circle[data-progress='9'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(32.4deg);
    }

    .sf-download-bar__circle[data-progress='10'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='10'] .sf-download-bar__circle-fill {
        transform: rotate(18deg);
    }

    .sf-download-bar__circle[data-progress='10'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(36deg);
    }

    .sf-download-bar__circle[data-progress='11'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='11'] .sf-download-bar__circle-fill {
        transform: rotate(19.8deg);
    }

    .sf-download-bar__circle[data-progress='11'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(39.6deg);
    }

    .sf-download-bar__circle[data-progress='12'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='12'] .sf-download-bar__circle-fill {
        transform: rotate(21.6deg);
    }

    .sf-download-bar__circle[data-progress='12'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(43.2deg);
    }

    .sf-download-bar__circle[data-progress='13'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='13'] .sf-download-bar__circle-fill {
        transform: rotate(23.4deg);
    }

    .sf-download-bar__circle[data-progress='13'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(46.8deg);
    }

    .sf-download-bar__circle[data-progress='14'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='14'] .sf-download-bar__circle-fill {
        transform: rotate(25.2deg);
    }

    .sf-download-bar__circle[data-progress='14'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(50.4deg);
    }

    .sf-download-bar__circle[data-progress='15'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='15'] .sf-download-bar__circle-fill {
        transform: rotate(27deg);
    }

    .sf-download-bar__circle[data-progress='15'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(54deg);
    }

    .sf-download-bar__circle[data-progress='16'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='16'] .sf-download-bar__circle-fill {
        transform: rotate(28.8deg);
    }

    .sf-download-bar__circle[data-progress='16'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(57.6deg);
    }

    .sf-download-bar__circle[data-progress='17'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='17'] .sf-download-bar__circle-fill {
        transform: rotate(30.6deg);
    }

    .sf-download-bar__circle[data-progress='17'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(61.2deg);
    }

    .sf-download-bar__circle[data-progress='18'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='18'] .sf-download-bar__circle-fill {
        transform: rotate(32.4deg);
    }

    .sf-download-bar__circle[data-progress='18'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(64.8deg);
    }

    .sf-download-bar__circle[data-progress='19'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='19'] .sf-download-bar__circle-fill {
        transform: rotate(34.2deg);
    }

    .sf-download-bar__circle[data-progress='19'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(68.4deg);
    }

    .sf-download-bar__circle[data-progress='20'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='20'] .sf-download-bar__circle-fill {
        transform: rotate(36deg);
    }

    .sf-download-bar__circle[data-progress='20'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(72deg);
    }

    .sf-download-bar__circle[data-progress='21'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='21'] .sf-download-bar__circle-fill {
        transform: rotate(37.8deg);
    }

    .sf-download-bar__circle[data-progress='21'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(75.6deg);
    }

    .sf-download-bar__circle[data-progress='22'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='22'] .sf-download-bar__circle-fill {
        transform: rotate(39.6deg);
    }

    .sf-download-bar__circle[data-progress='22'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(79.2deg);
    }

    .sf-download-bar__circle[data-progress='23'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='23'] .sf-download-bar__circle-fill {
        transform: rotate(41.4deg);
    }

    .sf-download-bar__circle[data-progress='23'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(82.8deg);
    }

    .sf-download-bar__circle[data-progress='24'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='24'] .sf-download-bar__circle-fill {
        transform: rotate(43.2deg);
    }

    .sf-download-bar__circle[data-progress='24'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(86.4deg);
    }

    .sf-download-bar__circle[data-progress='25'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='25'] .sf-download-bar__circle-fill {
        transform: rotate(45deg);
    }

    .sf-download-bar__circle[data-progress='25'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(90deg);
    }

    .sf-download-bar__circle[data-progress='26'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='26'] .sf-download-bar__circle-fill {
        transform: rotate(46.8deg);
    }

    .sf-download-bar__circle[data-progress='26'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(93.6deg);
    }

    .sf-download-bar__circle[data-progress='27'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='27'] .sf-download-bar__circle-fill {
        transform: rotate(48.6deg);
    }

    .sf-download-bar__circle[data-progress='27'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(97.2deg);
    }

    .sf-download-bar__circle[data-progress='28'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='28'] .sf-download-bar__circle-fill {
        transform: rotate(50.4deg);
    }

    .sf-download-bar__circle[data-progress='28'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(100.8deg);
    }

    .sf-download-bar__circle[data-progress='29'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='29'] .sf-download-bar__circle-fill {
        transform: rotate(52.2deg);
    }

    .sf-download-bar__circle[data-progress='29'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(104.4deg);
    }

    .sf-download-bar__circle[data-progress='30'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='30'] .sf-download-bar__circle-fill {
        transform: rotate(54deg);
    }

    .sf-download-bar__circle[data-progress='30'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(108deg);
    }

    .sf-download-bar__circle[data-progress='31'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='31'] .sf-download-bar__circle-fill {
        transform: rotate(55.8deg);
    }

    .sf-download-bar__circle[data-progress='31'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(111.6deg);
    }

    .sf-download-bar__circle[data-progress='32'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='32'] .sf-download-bar__circle-fill {
        transform: rotate(57.6deg);
    }

    .sf-download-bar__circle[data-progress='32'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(115.2deg);
    }

    .sf-download-bar__circle[data-progress='33'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='33'] .sf-download-bar__circle-fill {
        transform: rotate(59.4deg);
    }

    .sf-download-bar__circle[data-progress='33'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(118.8deg);
    }

    .sf-download-bar__circle[data-progress='34'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='34'] .sf-download-bar__circle-fill {
        transform: rotate(61.2deg);
    }

    .sf-download-bar__circle[data-progress='34'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(122.4deg);
    }

    .sf-download-bar__circle[data-progress='35'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='35'] .sf-download-bar__circle-fill {
        transform: rotate(63deg);
    }

    .sf-download-bar__circle[data-progress='35'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(126deg);
    }

    .sf-download-bar__circle[data-progress='36'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='36'] .sf-download-bar__circle-fill {
        transform: rotate(64.8deg);
    }

    .sf-download-bar__circle[data-progress='36'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(129.6deg);
    }

    .sf-download-bar__circle[data-progress='37'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='37'] .sf-download-bar__circle-fill {
        transform: rotate(66.6deg);
    }

    .sf-download-bar__circle[data-progress='37'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(133.2deg);
    }

    .sf-download-bar__circle[data-progress='38'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='38'] .sf-download-bar__circle-fill {
        transform: rotate(68.4deg);
    }

    .sf-download-bar__circle[data-progress='38'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(136.8deg);
    }

    .sf-download-bar__circle[data-progress='39'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='39'] .sf-download-bar__circle-fill {
        transform: rotate(70.2deg);
    }

    .sf-download-bar__circle[data-progress='39'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(140.4deg);
    }

    .sf-download-bar__circle[data-progress='40'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='40'] .sf-download-bar__circle-fill {
        transform: rotate(72deg);
    }

    .sf-download-bar__circle[data-progress='40'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(144deg);
    }

    .sf-download-bar__circle[data-progress='41'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='41'] .sf-download-bar__circle-fill {
        transform: rotate(73.8deg);
    }

    .sf-download-bar__circle[data-progress='41'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(147.6deg);
    }

    .sf-download-bar__circle[data-progress='42'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='42'] .sf-download-bar__circle-fill {
        transform: rotate(75.6deg);
    }

    .sf-download-bar__circle[data-progress='42'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(151.2deg);
    }

    .sf-download-bar__circle[data-progress='43'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='43'] .sf-download-bar__circle-fill {
        transform: rotate(77.4deg);
    }

    .sf-download-bar__circle[data-progress='43'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(154.8deg);
    }

    .sf-download-bar__circle[data-progress='44'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='44'] .sf-download-bar__circle-fill {
        transform: rotate(79.2deg);
    }

    .sf-download-bar__circle[data-progress='44'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(158.4deg);
    }

    .sf-download-bar__circle[data-progress='45'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='45'] .sf-download-bar__circle-fill {
        transform: rotate(81deg);
    }

    .sf-download-bar__circle[data-progress='45'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(162deg);
    }

    .sf-download-bar__circle[data-progress='46'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='46'] .sf-download-bar__circle-fill {
        transform: rotate(82.8deg);
    }

    .sf-download-bar__circle[data-progress='46'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(165.6deg);
    }

    .sf-download-bar__circle[data-progress='47'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='47'] .sf-download-bar__circle-fill {
        transform: rotate(84.6deg);
    }

    .sf-download-bar__circle[data-progress='47'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(169.2deg);
    }

    .sf-download-bar__circle[data-progress='48'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='48'] .sf-download-bar__circle-fill {
        transform: rotate(86.4deg);
    }

    .sf-download-bar__circle[data-progress='48'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(172.8deg);
    }

    .sf-download-bar__circle[data-progress='49'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='49'] .sf-download-bar__circle-fill {
        transform: rotate(88.2deg);
    }

    .sf-download-bar__circle[data-progress='49'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(176.4deg);
    }

    .sf-download-bar__circle[data-progress='50'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='50'] .sf-download-bar__circle-fill {
        transform: rotate(90deg);
    }

    .sf-download-bar__circle[data-progress='50'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(180deg);
    }

    .sf-download-bar__circle[data-progress='51'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='51'] .sf-download-bar__circle-fill {
        transform: rotate(91.8deg);
    }

    .sf-download-bar__circle[data-progress='51'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(183.6deg);
    }

    .sf-download-bar__circle[data-progress='52'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='52'] .sf-download-bar__circle-fill {
        transform: rotate(93.6deg);
    }

    .sf-download-bar__circle[data-progress='52'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(187.2deg);
    }

    .sf-download-bar__circle[data-progress='53'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='53'] .sf-download-bar__circle-fill {
        transform: rotate(95.4deg);
    }

    .sf-download-bar__circle[data-progress='53'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(190.8deg);
    }

    .sf-download-bar__circle[data-progress='54'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='54'] .sf-download-bar__circle-fill {
        transform: rotate(97.2deg);
    }

    .sf-download-bar__circle[data-progress='54'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(194.4deg);
    }

    .sf-download-bar__circle[data-progress='55'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='55'] .sf-download-bar__circle-fill {
        transform: rotate(99deg);
    }

    .sf-download-bar__circle[data-progress='55'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(198deg);
    }

    .sf-download-bar__circle[data-progress='56'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='56'] .sf-download-bar__circle-fill {
        transform: rotate(100.8deg);
    }

    .sf-download-bar__circle[data-progress='56'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(201.6deg);
    }

    .sf-download-bar__circle[data-progress='57'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='57'] .sf-download-bar__circle-fill {
        transform: rotate(102.6deg);
    }

    .sf-download-bar__circle[data-progress='57'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(205.2deg);
    }

    .sf-download-bar__circle[data-progress='58'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='58'] .sf-download-bar__circle-fill {
        transform: rotate(104.4deg);
    }

    .sf-download-bar__circle[data-progress='58'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(208.8deg);
    }

    .sf-download-bar__circle[data-progress='59'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='59'] .sf-download-bar__circle-fill {
        transform: rotate(106.2deg);
    }

    .sf-download-bar__circle[data-progress='59'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(212.4deg);
    }

    .sf-download-bar__circle[data-progress='60'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='60'] .sf-download-bar__circle-fill {
        transform: rotate(108deg);
    }

    .sf-download-bar__circle[data-progress='60'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(216deg);
    }

    .sf-download-bar__circle[data-progress='61'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='61'] .sf-download-bar__circle-fill {
        transform: rotate(109.8deg);
    }

    .sf-download-bar__circle[data-progress='61'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(219.6deg);
    }

    .sf-download-bar__circle[data-progress='62'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='62'] .sf-download-bar__circle-fill {
        transform: rotate(111.6deg);
    }

    .sf-download-bar__circle[data-progress='62'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(223.2deg);
    }

    .sf-download-bar__circle[data-progress='63'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='63'] .sf-download-bar__circle-fill {
        transform: rotate(113.4deg);
    }

    .sf-download-bar__circle[data-progress='63'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(226.8deg);
    }

    .sf-download-bar__circle[data-progress='64'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='64'] .sf-download-bar__circle-fill {
        transform: rotate(115.2deg);
    }

    .sf-download-bar__circle[data-progress='64'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(230.4deg);
    }

    .sf-download-bar__circle[data-progress='65'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='65'] .sf-download-bar__circle-fill {
        transform: rotate(117deg);
    }

    .sf-download-bar__circle[data-progress='65'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(234deg);
    }

    .sf-download-bar__circle[data-progress='66'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='66'] .sf-download-bar__circle-fill {
        transform: rotate(118.8deg);
    }

    .sf-download-bar__circle[data-progress='66'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(237.6deg);
    }

    .sf-download-bar__circle[data-progress='67'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='67'] .sf-download-bar__circle-fill {
        transform: rotate(120.6deg);
    }

    .sf-download-bar__circle[data-progress='67'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(241.2deg);
    }

    .sf-download-bar__circle[data-progress='68'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='68'] .sf-download-bar__circle-fill {
        transform: rotate(122.4deg);
    }

    .sf-download-bar__circle[data-progress='68'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(244.8deg);
    }

    .sf-download-bar__circle[data-progress='69'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='69'] .sf-download-bar__circle-fill {
        transform: rotate(124.2deg);
    }

    .sf-download-bar__circle[data-progress='69'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(248.4deg);
    }

    .sf-download-bar__circle[data-progress='70'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='70'] .sf-download-bar__circle-fill {
        transform: rotate(126deg);
    }

    .sf-download-bar__circle[data-progress='70'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(252deg);
    }

    .sf-download-bar__circle[data-progress='71'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='71'] .sf-download-bar__circle-fill {
        transform: rotate(127.8deg);
    }

    .sf-download-bar__circle[data-progress='71'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(255.6deg);
    }

    .sf-download-bar__circle[data-progress='72'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='72'] .sf-download-bar__circle-fill {
        transform: rotate(129.6deg);
    }

    .sf-download-bar__circle[data-progress='72'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(259.2deg);
    }

    .sf-download-bar__circle[data-progress='73'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='73'] .sf-download-bar__circle-fill {
        transform: rotate(131.4deg);
    }

    .sf-download-bar__circle[data-progress='73'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(262.8deg);
    }

    .sf-download-bar__circle[data-progress='74'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='74'] .sf-download-bar__circle-fill {
        transform: rotate(133.2deg);
    }

    .sf-download-bar__circle[data-progress='74'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(266.4deg);
    }

    .sf-download-bar__circle[data-progress='75'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='75'] .sf-download-bar__circle-fill {
        transform: rotate(135deg);
    }

    .sf-download-bar__circle[data-progress='75'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(270deg);
    }

    .sf-download-bar__circle[data-progress='76'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='76'] .sf-download-bar__circle-fill {
        transform: rotate(136.8deg);
    }

    .sf-download-bar__circle[data-progress='76'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(273.6deg);
    }

    .sf-download-bar__circle[data-progress='77'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='77'] .sf-download-bar__circle-fill {
        transform: rotate(138.6deg);
    }

    .sf-download-bar__circle[data-progress='77'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(277.2deg);
    }

    .sf-download-bar__circle[data-progress='78'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='78'] .sf-download-bar__circle-fill {
        transform: rotate(140.4deg);
    }

    .sf-download-bar__circle[data-progress='78'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(280.8deg);
    }

    .sf-download-bar__circle[data-progress='79'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='79'] .sf-download-bar__circle-fill {
        transform: rotate(142.2deg);
    }

    .sf-download-bar__circle[data-progress='79'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(284.4deg);
    }

    .sf-download-bar__circle[data-progress='80'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='80'] .sf-download-bar__circle-fill {
        transform: rotate(144deg);
    }

    .sf-download-bar__circle[data-progress='80'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(288deg);
    }

    .sf-download-bar__circle[data-progress='81'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='81'] .sf-download-bar__circle-fill {
        transform: rotate(145.8deg);
    }

    .sf-download-bar__circle[data-progress='81'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(291.6deg);
    }

    .sf-download-bar__circle[data-progress='82'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='82'] .sf-download-bar__circle-fill {
        transform: rotate(147.6deg);
    }

    .sf-download-bar__circle[data-progress='82'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(295.2deg);
    }

    .sf-download-bar__circle[data-progress='83'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='83'] .sf-download-bar__circle-fill {
        transform: rotate(149.4deg);
    }

    .sf-download-bar__circle[data-progress='83'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(298.8deg);
    }

    .sf-download-bar__circle[data-progress='84'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='84'] .sf-download-bar__circle-fill {
        transform: rotate(151.2deg);
    }

    .sf-download-bar__circle[data-progress='84'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(302.4deg);
    }

    .sf-download-bar__circle[data-progress='85'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='85'] .sf-download-bar__circle-fill {
        transform: rotate(153deg);
    }

    .sf-download-bar__circle[data-progress='85'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(306deg);
    }

    .sf-download-bar__circle[data-progress='86'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='86'] .sf-download-bar__circle-fill {
        transform: rotate(154.8deg);
    }

    .sf-download-bar__circle[data-progress='86'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(309.6deg);
    }

    .sf-download-bar__circle[data-progress='87'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='87'] .sf-download-bar__circle-fill {
        transform: rotate(156.6deg);
    }

    .sf-download-bar__circle[data-progress='87'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(313.2deg);
    }

    .sf-download-bar__circle[data-progress='88'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='88'] .sf-download-bar__circle-fill {
        transform: rotate(158.4deg);
    }

    .sf-download-bar__circle[data-progress='88'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(316.8deg);
    }

    .sf-download-bar__circle[data-progress='89'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='89'] .sf-download-bar__circle-fill {
        transform: rotate(160.2deg);
    }

    .sf-download-bar__circle[data-progress='89'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(320.4deg);
    }

    .sf-download-bar__circle[data-progress='90'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='90'] .sf-download-bar__circle-fill {
        transform: rotate(162deg);
    }

    .sf-download-bar__circle[data-progress='90'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(324deg);
    }

    .sf-download-bar__circle[data-progress='91'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='91'] .sf-download-bar__circle-fill {
        transform: rotate(163.8deg);
    }

    .sf-download-bar__circle[data-progress='91'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(327.6deg);
    }

    .sf-download-bar__circle[data-progress='92'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='92'] .sf-download-bar__circle-fill {
        transform: rotate(165.6deg);
    }

    .sf-download-bar__circle[data-progress='92'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(331.2deg);
    }

    .sf-download-bar__circle[data-progress='93'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='93'] .sf-download-bar__circle-fill {
        transform: rotate(167.4deg);
    }

    .sf-download-bar__circle[data-progress='93'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(334.8deg);
    }

    .sf-download-bar__circle[data-progress='94'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='94'] .sf-download-bar__circle-fill {
        transform: rotate(169.2deg);
    }

    .sf-download-bar__circle[data-progress='94'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(338.4deg);
    }

    .sf-download-bar__circle[data-progress='95'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='95'] .sf-download-bar__circle-fill {
        transform: rotate(171deg);
    }

    .sf-download-bar__circle[data-progress='95'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(342deg);
    }

    .sf-download-bar__circle[data-progress='96'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='96'] .sf-download-bar__circle-fill {
        transform: rotate(172.8deg);
    }

    .sf-download-bar__circle[data-progress='96'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(345.6deg);
    }

    .sf-download-bar__circle[data-progress='97'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='97'] .sf-download-bar__circle-fill {
        transform: rotate(174.6deg);
    }

    .sf-download-bar__circle[data-progress='97'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(349.2deg);
    }

    .sf-download-bar__circle[data-progress='98'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='98'] .sf-download-bar__circle-fill {
        transform: rotate(176.4deg);
    }

    .sf-download-bar__circle[data-progress='98'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(352.8deg);
    }

    .sf-download-bar__circle[data-progress='99'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='99'] .sf-download-bar__circle-fill {
        transform: rotate(178.2deg);
    }

    .sf-download-bar__circle[data-progress='99'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(356.4deg);
    }

    .sf-download-bar__circle[data-progress='100'] .sf-download-bar__circle-slice.sf-download-bar__circle-slice_view_full,
    .sf-download-bar__circle[data-progress='100'] .sf-download-bar__circle-fill {
        transform: rotate(180deg);
    }

    .sf-download-bar__circle[data-progress='100'] .sf-download-bar__circle-fill.sf-download-bar__circle-bar {
        transform: rotate(360deg);
    }

    .sf-download-bar {
        position: fixed;
        right: 110px;
        bottom: 100px;
        z-index: 99999;

        width: 64px;
        height: 64px;
        font-family: "Roboto", Helvetica, Arial, sans-serif;

        transition: width, height, right, 0.2s;

        border-radius: 50%;
    }

    .sf-download-bar_opened_yes {
        width: 184px;

        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;

        box-shadow: 0px 0px 18px rgba(49, 51, 106, 0.15);
    }

    .sf-download-bar_hide_yes {
        right: -64px;
    }

    .sf-download-bar__head {
        position: relative;
        z-index: 10;

        display: block;
        white-space: nowrap;

        width: 100%;
        height: 64px;

        outline: none;
        text-align: center;
        text-decoration: none;

        background: #5181B8;
        border-radius: 100px;
        box-shadow: none;
    }

    /* .sf-download-bar:not(.sf-download-bar_opened_yes) .sf-download-bar__head {
        box-shadow: 0px 0px 18px rgba(49, 51, 106, 0.15);
    } */

    .sf-download-bar__head:after {
        content: '';
        width: 64px;
        height: 64px;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        background: #5181B8;
        border-radius: 100px;
        transition: width, height, left, top, 0.2s;
    }

    .sf-download-bar:not(.sf-download-bar_opened_yes):hover .sf-download-bar__head:after {
        width: 68px;
        height: 68px;
        top: -2px;
        left: -2px;
        box-shadow: 0px 0px 18px rgba(49, 51, 106, 0.15);
    }

    .sf-download-bar_opened_yes .sf-download-bar__head:after {
        opacity: 0;
        display: none;
    }

    .sf-download-bar__ticker {
        z-index: 1;
        position: absolute;
        top: 0px;
        right: 0px;

        width: 17px;
        height: 17px;

        background: #FF734C;
        border-radius: 100px;

        color: #fff;
        text-align: center;
        line-height: 17px;
        font-size: 10px;
        font-weight: bold;

        transition: opacity 0.2s;
    }

    .sf-download-bar_opened_yes .sf-download-bar__ticker {
        opacity: 0;
    }

    .sf-download-bar__ticker-big {
        opacity: 0;
        z-index: 1;
        position: absolute;
        top: 0px;
        right: 0px;

        width: 40px;
        height: 40px;
    ;

        color: #fff;
        text-align: center;
        line-height: 40px;
        font-size: 14px;

        transition: opacity 0.2s;
    }

    .sf-download-bar_opened_yes .sf-download-bar__ticker-big {
        opacity: 1;
    }

    .sf-download-bar__circle svg {
        z-index: 1;
        position: absolute;
        top: 50%;
        left: 50%;
        display: block;
        margin: -7px 0 0 -5px;
    }

    .sf-download-bar_opened_yes .sf-download-bar__circle svg {
        opacity: 0;
    }

    .sf-download-bar__content {
        overflow: hidden;
    }

    .sf-download-bar__text {
        opacity: 0.6;

        color: #fff;
        font-size: 11px;
        text-align: center;
        line-height: 64px;

        overflow: hidden;

        margin-left: -90px;
        margin-right: 26px;

        width: 64px;
        height: 64px;

        vertical-align: middle;
        display: inline-block;
        transition: margin-left 0.2s;
    }

    .sf-download-bar_opened_yes .sf-download-bar__text {
        margin-left: 30px;
    }

    .sf-download-bar__footer {
        width: 100%;
        height: 0;
        background-color: #fff;
        overflow-y: auto;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .sf-download-bar_opened_yes .sf-download-bar__footer {
        padding-top: 32px;
        margin-top: -32px;
    }

    .sf-download-bar__stop {
        opacity: 0.5;
        width: 8px;
        height: 8px;
        visibility: hidden;
        margin-right: 7px;
        margin-left: 15px;
        margin-top: 6px;
        display: inline-block;
        vertical-align: top;
    }

    .sf-download-bar__stop:hover {
        opacity: 1;
    }

    .sf-download-bar__item {
        overflow: hidden;
        height: 48px;
        line-height: 40px;
        transition: background-color 0.1s;
    }

    .sf-download-bar__item:first-child {
        margin-top: 5px;
    }

    .sf-download-bar__item:hover {
        background-color: #E9EDF1;
    }

    .sf-download-bar__item:hover .sf-download-bar__stop {
        visibility: visible;
    }

    .sf-download-bar__item-info {
        height: 30px;
        position: relative;
        display: inline-block;
        width: 135px;
    }

    .sf-download-bar__item-name {
        line-height: 1em;
        font-size: 11px;
        color: #000;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .sf-download-bar__item-progress,
    .sf-download-bar__item-progress-bg {
        position: absolute;
        top: 18px;
        left: 0;
        height: 1px;
    }

    .sf-download-bar__item-progress-bg {
        width: 100%;
        background-color: #E7E8EC;
        z-index: 1;
    }

    .sf-download-bar__item-progress {
        width: 0;
        background-color: #5181B8;
        z-index: 2;
    }

    .sf-download-bar__cancel {
        display: none;
        height: 40px;
        line-height: 40px;
        color: #5181B8;
        font-size: 9px;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.2s;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        background: #fff;
    }

    .sf-download-bar_opened_yes .sf-download-bar__cancel {
        display: block;
    }

    .sf-download-bar__cancel:hover {
        text-decoration: none;
        background-color: #5181B8;
        color: #fff;
    }
</style>
<div class="sf-download-bar sf-download-bar_hide_yes"><a href="#" class="sf-download-bar__head"><div class="sf-download-bar__ticker">1</div><div class="sf-download-bar__content"><div class="sf-download-bar__text">Downloading</div><div class="sf-download-bar__circle" data-progress="0"><div class="sf-download-bar__ticker-big">1</div><svg width="16" height="16" viewBox="0 0 16 16"><path d="M0 13.3623H11.0043V11.7903H0V13.3623ZM11.0043 4.71611H7.86018V0H3.14407V4.71611H0L5.50213 10.2182L11.0043 4.71611Z" fill="#fff"></path></svg><div class="sf-download-bar__circle-slice sf-download-bar__circle-slice_view_full"><div class="sf-download-bar__circle-fill"></div></div><div class="sf-download-bar__circle-slice"><div class="sf-download-bar__circle-fill"></div><div class="sf-download-bar__circle-fill sf-download-bar__circle-bar"></div></div><div class="sf-download-bar__circle-overlay"></div></div></div></a><div class="sf-download-bar__footer"><div class="sf-download-bar__list"></div></div><a href="#" class="sf-download-bar__cancel">Cancel all downloads</a></div></body></html>
