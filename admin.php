<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/jquery.min.js"></script>
    </head>
    <body>
        <div class="main">
            <div class="title">
                <h1>Добавление новости</h1>
            </div>
            <div class="add-form">
                <div id="mess"></div>
                <form id="form">
                    <div class="form-item">
                        <label for="title">Название новости</label>
                        <input type="text" name="title" id="title" />
                    </div>

                    <div class="form-item">
                        <label for="date">Дата</label>
                        <input type="date" name="date" id="date" />
                    </div>

                    <div class="form-item">
                        <label for="text">Текст</label>
                        <textarea name="text" id="text"></textarea>
                    </div>

                    <div class="button">
                        <button type="button" id="send">Добавить</button>
                    </div>
                </form>
            </div>
        </div>

    <script>
        $(document).ready(function () {
            $("#send").click(function () {
                var form = new FormData(document.getElementById("form"));
                let dataSend = {
                    title: form.get('title'),
                    date: form.get('date'),
                    text: form.get('text'),
                };
                $.ajax({
                    url: '/ajax/news.php',
                    type: 'get',
                    data: dataSend,
                    success: function(data){
                        data = JSON.parse(data);
                        if(data.error == undefined){
                            $("#mess").html('<span class="success">Новость добавлена</span>');
                        }else{
                            $("#mess").html('<span class="error">Заполните все поля</span>');
                        }
                    }
                });
            });
        });
    </script>
    </body>
</html>