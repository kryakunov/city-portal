<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <?php require_once __DIR__ . '/components/head.php'; ?>
    <title>Document</title>
</head>
<body>
<?php require_once __DIR__ . '/components/header.php'; ?>

<section class="main">
    <div class="container">
        <div class="card">
            <div class="card-header">
                Регистрация
            </div>
            <?php
                if (isset($_SESSION['error'])) {
                    echo 'Проверьте правильность введенных данных';
                    unset($_SESSION['error']);
                }
            ?>
            <div class="card-body">
                <form action="/actions/user/register.php" method="post">
                    <div class="mb-3">
                        <label for="emailRegisterField" class="form-label">E-mail</label>
                        <input type="text" name="email" class="form-control" id="emailRegisterField" aria-describedby="emailHelp">
                        <div id="emailRegisterHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
                    </div>
                    <div class="mb-3">
                        <label for="fullNameField"   class="form-label">ФИО</label>
                        <input type="text"  name="name"  class="form-control" id="fullNameField" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="dobField"   class="form-label">Дата рождения</label>
                        <input type="datetime-local" name="dob"  class="form-control" id="dobField" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="passwordRegisterField"  class="form-label">Пароль</label>
                        <input type="password" name="password"  class="form-control" id="passwordRegisterField">
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirmField"  class="form-label">Подтверждение пароля</label>
                        <input type="password" name="password_confirmation" class="form-control" id="passwordConfirmField">
                    </div>
                    <button type="submit" class="btn btn-primary">Создать аккаунт</button>
                </form>
            </div>
        </div>
    </div>
</section>


<?php require_once __DIR__ . '/components/scritps.php'; ?></body>
</html>