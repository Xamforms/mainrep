<base href="studtest/assets/">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Регистрация</title>
    <link rel="shortcut icon" href="images/logo-title.png" type="image/x-icon">
    <title>StudTest:регистрация</title>
</head>
<body>
<!--base href="/studtest/assets"-->
<div class="body">
    <div class="header container">
        <div class="header-content registration-header-content">
            <p class="header-text">Уже есть аккаунт? <a href="/home?cd-user-modal" class="header-link link">Войти</a></p>
        </div>
    </div>
    <div class="content-body container">
        <div class="left-block block">
            <div class="logo-inscription">
                <h2> <img src="images/logo.png" alt="" class="logo"><br>Создавай и решай тесты он-лайн вместе со СтудТест</h2> </div>
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
                <form method="post" action="/registration/newuser">
                    @csrf
                    <div class="form-input">
                        <label for="email">E-mail<span class="mark">*</span></label>
                        @error ('email')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="email" name="email" placeholder="ivanov@mymail.ru" required> </div>
                    <div class="form-input">
                        <label for="surname">Фамилия<span class="mark">*</span></label>
                        @error ('surname')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="text" name="surname" placeholder="Иванов" required> </div>
                    <div class="form-input">
                        <label for="name">Имя<span class="mark">*</span></label>
                        @error ('name')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="text" name="name" placeholder="Иван" required> </div>
                    <div class="form-input">
                        <label for="patronymic">Отчество</label>
                        @error ('patronymic')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="text" name="patronymic" placeholder="Иванович"> </div>
                    <div class="radio form-input">
                        <div class="radio-label">Кто вы?<span class="mark">*</span></div>
                        @error ('role')
                        <div>{{$message}}</div>
                        @enderror
                        <label>
                            <input type="radio" name="role" value="teacher">Преподаватель</label>
                        <label>
                            <input type="radio" name="role" value="student">Студент </label>
                    </div>
                    <div class="form-input">
                        <label for="password">Придумайте пароль<span class="mark">*</span></label>
                        @error ('password')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="password" name="password" placeholder="не менее 8 символов" required> </div>
                    <div class="form-input">
                        <label for="password_confirmation">Повторите пароль<span class="mark">*</span></label>
                        @error ('password_confirmation')
                        <div>{{$message}}</div>
                        @enderror
                        <input type="password" name="password_confirmation" required>
                        <p class="text-form">Поля, помеченные символом "<span class="mark">*</span>", обязательны к заполнению</p>
                    </div>
                    <div class="form-input">
                        <button type="submit" class="button-registration">Зарегистрироваться</button>
                        <p class="agreement">
                            <label for="terms">
                                @error ('terms')
                                <div>{{$message}}</div>
                                @enderror
                                <input type="checkbox" name="terms" value="yes">Я даю согласие на <a href="">обработку персональных данных</a> </label>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('common.footer')
</body>
</html>
