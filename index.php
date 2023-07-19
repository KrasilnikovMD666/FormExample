<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <title>Практическое задание</title>
    </head>
    <body>
        <div class="container connect-with-us">
            <form action="src/form.php" method="post">
                <p id="form-header">Форма обратной связи</p>
                <div class="row mb-3">
                    <label for="inputName"  class="col-sm-2 col-form-label">Имя</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="inputName" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputSurname"  class="col-sm-2 col-form-label">Фамилия</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSurname" name="inputSurname" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Сообщение</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="inputText" rows="3" maxlength="100" name="inputText"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                <label for="inputFile">Прикрепить файл</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control-file" id="inputFile" name="inputFile">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-10 pt-0">Ваш пол</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
                            <label class="form-check-label" for="gender">
                                Мужчина
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
                            <label class="form-check-label" for="gender">
                                Женщина
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkForm" name="checkForm">
                            <label class="form-check-label" for="checkForm">
                                Проверка формы
                            </label>
                        </div>
                    </div>
                </div>
            <div class="row mb-3">
                <input type="reset" class="btn btn-primary" value="Очистить">
            </div>
            <div class="row mb-3">
                <input type="submit" class="btn btn-primary" value="Отправить">
            </div>
            <div class="row mb-3">
                <input type="button" class="btn btn-primary" value="Посмотреть комментарии" onclick="document.location='src/comments.php'">
            </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>