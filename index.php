

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    
    <header>
        <div class="center">
            <a href="/" class="header-logo">
                <img src="images/header/logo.svg" width="171" height="34"  alt="">
            </a>

            <button class="services">
                <div class="box">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                Услуги
            </button>
            <label class="search" for="input__search" id="search">
                <input type="text" id="input__search">
                <button id="button__sumbit__search"></button>
            </label>
            <nav>
                <ul class="menu">
                    <li><a href="">Контакты</a></li>
                    <li><a href="">О нас</a></li>
                    <li>
                        <img src="icons/Flag_of_Russia 1.svg" width="21" height="14" alt="">
                    </li>
                </ul>
            </nav>
        </div>
        <ul class="ending">
            <button id="buttonAuth">Вход</button>
            <button>Связаться</button>
        </ul>
        <div class="buttonMenu hidden" id="buttonMenu">

                <div class="top">
                    <p>Войти</p>
                    <button id="buttonCloseMenu">

                    </button>
                </div>
                <ul class="icons-list">
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
                <form action="" class="middle">
                    <input type="email" placeholder="Логин или Email" id="input__login">
                    <input placeholder="Пароль" type="passowrd">
                </form>
                <div class="buttonText">
                    <button type="submit">Войти</button>
                    <a href="">Забыли пароль?</a>
                </div>
                <button href="/" id="buttonRegistr">Загистрироваться</button>

        </div>
    </header>
    <main class="content">
        <section class="links">
            <div class="container">
                <div class="box">
                    <h1 class="category">
                        Гражданство
                    </h1>
                    <ul class="links">
                        <li><a href="">Гражданство</a></li>
                        <li><a href="">Резиденство</a></li>
                        <li><a href="">Бизнес</a></li>
                        <li><a href="">Визы</a></li>
                    </ul>
                </div>
                <div class="box">
                    <h1 class="category">
                        Недвижимость
                    </h1>
                    <ul class="links">
                        <li><a href="">Купить</a></li>
                        <li><a href="">Снять</a></li>
                        <li><a href="">Коммерческая</a></li>
                        <li><a href="">Юридическая помощь</a></li>
                        <li><a href="">Предложить объект</a></li>
                    </ul>
                </div>
                <div class="box">
                    <h1 class="category">
                        Индекс паспорта
                    </h1>
                    <ul class="links">
                        <li><a href="">Рейтинг паспортов</a></li>
                        <li><a href="">Безвизовые страны</a></li>
                        <li><a href="">Виза</a></li>
                        <li><a href="">Сравнение</a></li>
                    </ul>
                </div>
                <div class="box">
                    <h1 class="category">
                        Афиша
                    </h1>
                    <ul class="links">
                        <li><a href="">Концерты</a></li>
                        <li><a href="">Шоу</a></li>
                        <li><a href="">Стендапы</a></li>
                        <li><a href="">Театр</a></li>
                    </ul>
                </div>
                <div class="box">
                    <h1 class="category">
                        Авто
                    </h1>
                    <ul class="links">
                        <li><a href="">Купить / продать</a></li>
                        <li><a href="">Аренда</a></li>
                        <li><a  class="active" href="">Юридическая помощь</a></li>
                        <li><a  href="">Сотрудничество</a></li>
                    </ul>
                </div>
                <div class="box">
                    <h1 class="category">
                        Консъерж -сервис
                    </h1>
                    <ul class="links">
                        <li><a href="">Аренда яхт</a></li>
                        <li><a href="">Аренда вертолета</a></li>
                        <li><a href="">Аренда vip авто</a></li>
                        <li><a href="">24/7 обслуживание гостей</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="banner">
            <div class="box" id="background-element">
                <h2 class="banner-h2" >Thai.PRO –</h2> 
                <p class="banner-p">лучшее вложение средств</p>
            </div>
        </section>
    </main>
    <footer>

    </footer>
<script>
        // Элемент, у которого будет меняться фон
        const backgroundElement = $('#background-element');

        // Функция для смены фона по порядку
        function changeBackgroundSequentially(imageFiles) {
            let currentIndex = 0; // Начинаем с первого изображения

            // Функция для установки фона
            function setNextBackground() {
                if (imageFiles.length === 0) {
                    console.error('Нет доступных изображений');
                    return;
                }

                // Берем текущее изображение
                const currentImage = imageFiles[currentIndex];
                const imagePath = `./images/banner/${currentImage}`; // Путь к изображению
                backgroundElement.css('background-image', `url('${imagePath}'`)

                // Увеличиваем индекс для следующего изображения
                currentIndex = (currentIndex + 1) % imageFiles.length; // Циклический переход
            }

            // Сразу устанавливаем первый фон
            setNextBackground();

            // Каждую минуту меняем фон
            setInterval(setNextBackground, 60000); // 60000 мс = 1 минута
        }

        // Получаем список изображений через AJAX
        fetch('get_images.php')
            .then(response => response.json())
            .then(images => {
                changeBackgroundSequentially(images); // Начинаем последовательную смену фона
            })
            .catch(error => console.error('Ошибка при получении данных:', error));
    // $(document).ready(function(){

    //     $("body").click(function(e) {
    //         if($(e.target).closest('#buttonAuth , #buttonMenu').length==0) {
    //             $("#buttonMenu").addClass('hidden');
    //         }
    //     });
    //     $('#buttonAuth').on('click',function() {
    //         $('#buttonMenu').toggleClass('hidden')

    //     });;
    //     $('#buttonCloseMenu').on('click', function(){
    //         $('#buttonMenu').toggleClass('hidden')            
    //     })
    // })
</script>
</body>
</html>