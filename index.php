<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>HomePlants</title>
</head>

<body>
    <?php include 'catalog.php' ?>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="" class="navbar-brand"><img src="./images/logo 1.svg"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-contrlos="navContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navContent" class="collapse navbar-nav navbar-collapse justify-content-end">
                    <a href="#about" class="nav-link">О нас</a>
                    <a href="#catalog" class="nav-link">Каталог</a>
                    <a href="#guide" class="nav-link">Руководство</a>
                    <a href="#blog" class="nav-link">Блог</a>
                    <a href="#faq" class="nav-link">ЧаВо</a>
                    <a href="#order" class="nav-link">Заказать</a>
                    <a href="#contacts" class="nav-link">Контакты</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="description">
                <h1>Джунгли у вас дома</h1>
                <p>У нас растения за которыми легко ухаживать</p>
                <a href="#catalog" class="btn btn-outline-dark">Подобрать растения</a>
            </div>
        </div>
    </header>

    <div class="container" id="about">
        <div class="row justify-content-between align-items-center about">
            <div class="col-lg-5 col-md-5 col-sm-10">
                <img src="./images/about.png" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10 desc">
                <h2>О нас</h2>
                <p>Наша команда из опытных специалистов выращивает здоровые растения, которые будут радовать вас долгие
                    года. Сопровождаем каждого клиента по вопросам ухода, а при покупке даем памятку по растению.</p>
            </div>
        </div>
    </div>

    <div class="container" id="catalog">
        <div class="catalog">
            <div class="catalog-header">
                <h2>Наши растения</h2>
                <p>Выберите растение себе по душе</p>
            </div>
            <div class="row">
                <?php foreach ($data as $product) : ?>
                    <div class="col-md-4 col-lg-4 col-sm-10">
                        <div class="card">
                            <img src="/images/<?= $product['img'] ?>" class="card-img-top" alt="Монстера">
                            <div class="card-body">
                                <div class="card-desc">
                                    <p class="card-title"><?= $product['title'] ?></p>
                                    <p class="card-text"><?= $product['min_price'] ?>₽ - <?= $product['max_price'] ?>₽</p>
                                </div>
                                <a href="#order" class="btn btn-outline-dark">Заказать</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

    <!-- <div class="CTA d-flex align-items-center" id="guide">
        <div class="container">
            <div class="col-lg-9 col-md-9 col-sm-12 CTA-header">
                <h3>Получите гайд по любому растению бесплатно</h3>
            </div>
            <form method="POST" action="form.php">
                <div class="row CTA-form">
                    <div class="col-md-3">
                        <input type="text" name="name" class="form-control" placeholder="Имя" aria-label="Имя">
                    </div>
                    <div class="col-md-3">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <a class="btn btn-outline-dark">Отправить</a>
                </div>
        </div>
    </div> -->

    <div class="CTA d-flex align-items-center" id="guide">
        <div class="container CTA-content">
            <div class="header col-md-9 col-lg-9 col-sm-12">
                <h3>Получите гайд по любому растению бесплатно</h3>
            </div>
            <form method="POST" action="form.php">
                <div class="row CTA-form">
                    <div class="col-md-3">
                        <input type="text" name="name" class="form-control" placeholder="Имя" aria-label="Имя">
                    </div>
                    <div class="col-md-3">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-dark mt-4">Получить</button>
        </div>
        </form>
    </div>

    <div class="container" id="blog">
        <div class="blog">
            <div class="blog-header">
                <h2>Блог</h2>
                <p>Узнайте больше полезной информации об уходе за растениями</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-5 col-sm-10">
                    <div class="card">
                        <img src="./images/news_card.png" class="card-img-top" alt="Как выбрать растение">
                        <div class="card-body">
                            <div class="card-desc">
                                <a href="#" class="card-title">Как выбрать растение домой</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-10">
                    <div class="card">
                        <img src="./images/news_card.png" class="card-img-top" alt="Как выбрать растение">
                        <div class="card-body">
                            <div class="card-desc">
                                <a href="#" class="card-title">Как выбрать растение домой</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-5 col-sm-10">
                    <div class="card">
                        <img src="./images/news_card.png" class="card-img-top" alt="Как выбрать растение">
                        <div class="card-body">
                            <div class="card-desc">
                                <a href="#" class="card-title">Как выбрать растение домой</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-10">
                    <div class="card">
                        <img src="./images/news_card.png" class="card-img-top" alt="Как выбрать растение">
                        <div class="card-body">
                            <div class="card-desc">
                                <a href="#" class="card-title">Как выбрать растение домой</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="faq">
        <div class="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Какой водой поливать?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        В подавляющем большинстве случаев, если вы живете в нормальном жилом доме, и горячая вода у вас
                        не ржавая, лучше для полива отстаивать ее.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Минералкой действительно можно поливать цветы?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Плохая водопроводная вода - действительно проблема, но тогда поливать надо не минеральной, а
                        питьевой водой.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Можно или нельзя поливать растения кипяченой водой? </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Надо смотреть, от чего конкретному растению будет больше вреда - от полива некипяченой водой
                        (жесткой,
                        хлорированной), или от полива кипяченой (нет воздуха, жесткость снижается, но не
                        совсем). Есть растения, очень чувствительные к солям кальция. Есть растения, наоборот,
                        любящие кальций. Надо смотреть, как реагирует растение, и действовать в соответствии с этим.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="CTA d-flex align-items-center" id="order">
        <div class="container CTA-content">
            <div class="header col-md-9 col-lg-9 col-sm-12">
                <h3>Получите гайд по любому растению бесплатно</h3>
            </div>
            <form method="POST" action="orders.php">
                <div class="row CTA-form">
                    <div class="col-md-3">
                        <input type="text" name="name" class="form-control" placeholder="Имя" aria-label="Имя">
                    </div>
                    <div class="col-md-3">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-dark mt-4">Получить</button>
        </div>
        </form>
    </div>


    <div class="contacts d-flex align-items-center" id="contacts">
        <div class="container">
            <div class="contacts-header offset-md-6">
                <h3>Оставайтесь с нами на связи</h3>
            </div>
            <div class="contacts-desc offset-md-6 mt-4">
                <p>+7 999 123-45-67</p>
                <p>Телеграм</p>
                <p>Вконтакте</p>
            </div>
        </div>
    </div>

    <footer class="d-flex flex-column align-items-center mt-5">
        <a href="" class="navbar-brand"><img src="./images/logo 2.svg"></a>
        <p>HomePlants</p>
        <p>2022</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>