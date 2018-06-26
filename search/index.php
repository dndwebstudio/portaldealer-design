<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Portal dealer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>
</head>
<body>
<header>
    <div class="header-lite sh-box-tb">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light bg-faded p-0" id="lite-menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="/img/2.png" class="d-inline-block align-top" alt="">
                </a>
                <div class="collapse navbar-collapse" id="nav-content">
                    <ul class="navbar-nav mr-auto line-menu"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link p-0" href="#">
                                <div class="header-lite-icon-profile m-1">
                                    <i class="fa fa-user" aria-hidden="true"></i>
<!--                                    <img src="/img/test/1_PinGQBOiE.jpg" alt="" class="rounded-circle w-100">-->
                                </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Войти
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="header-lite-nav bg-white shadow-box">
        <div class="container">
            <div class="header-lite-menu-nav">
                <ul class="row m-0">
                    <li><a href="">Купить</a></li>
                    <li><a href="">Статистика</a></li>
                    <li><a href="">Мероприятия</a></li>
                    <li><a href="">Акции</a></li>
                    <li><a href="">Опросы</a></li>
                    <li><a href="">Отзывы</a></li>
                    <li><a href="">Сервис</a></li>
                    <li><a href="">Связь с дилером</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div id="warp" class="container">
    <div class="search-block-title my-2 bg-white rounded sh-box-tb sh-box-lr">
        <div class="row align-items-center justify-content-center no-gutters">
            <div class="col-2 pr-5">
                <div class="search-block-title-img">
                    <img src="/img/dealer_portal_znak4.png" alt="">
                </div>
            </div>
            <div class="col-6 py-2">
                <h1>Купить</h1>
                <p class="desc-title">Покупайте по самым выгодным условиям без посредников!</p>
            </div>
            <div class="col-4">
                <div class="search-result-title-bg-advertising rounded-right" style="background: url('/img/test/parking.jpg') no-repeat center">

                </div>
            </div>
        </div>
    </div>
    <form action="">
        <div class="search-result-block-filter bg-white rounded container sh-box-tb sh-box-lr mt-2 mb-1">
            <div class="row">
                <div class="search-result-block-filter-header line-bottom col">
                    <div class="row no-gutters align-items-center my-3">
                        <div class="search-result-block-filter-header-title col-4">
                            Автомобили
                        </div>
                        <div class="search-result-block-filter-header-location text-right col-2">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <a id="selectLocation" data-toggle="dropdown"><div>Москва и Московская область</div></a>
                            <div class="dropdown-menu">
                                <div class="city-select my-1">
                                    <ul>
                                        <li>Москва<a href="#" class="reset-city">&#215;</a></li>
                                        <li>Рязань<a href="#" class="reset-city">&#215;</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown-item">
                                    <input class="form-control form-control-sm" type="text" placeholder="Добавить регион" value="" id="">
                                </div>
                                <button type="button" class="btn btn-secondary btn-sm btn-block col-4 btn-search-city">Сохранить</button>
                            </div>
                        </div>
                        <div class="search-result-block-filter-header-type-search text-center col-3">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination ml-4 mb-0">
                                    <li class="page-item"><a class="page-link" href="#">Все</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Новые</a></li>
                                    <li class="page-item"><a class="page-link" href="#">С пробегом</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="search-result-block-filter-header-save-search text-right col-3">
                            <a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i>Сохранить поиск</a>
                        </div>
                    </div>
                </div>
                <div class="search-result-block-filter-body col-12 line-bottom">
                    <div class="row">
                        <div class="search-result-block-filter-main pr-0 py-3 col-11">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-4 custom-select-filter">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Марка</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 custom-select-filter">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
                                            <div class="characteristic-type">Модель</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 custom-select-filter">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
                                            <div class="characteristic-type">Поколение</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 py-3 pl-4">
                            <div class="search-result-block-filter-add">
                                <a href="#">+</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-result-block-filter-main-area col-11 pt-3 pr-0">
                    <div class="row">
                        <div class="col-4 ap-custom-select">
                            <div class="inner-select">
                                <div class="dropdown mr-2">
                                    <span style="width: 70px" class="name-params">Год, от</span>
                                    <div class="dd-select" data-toggle="dropdown"><span class="helper"></span><span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span></div>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item">2017</a>
                                        <a class="dropdown-item">2016</a>
                                        <a class="dropdown-item">2015</a>
                                        <a class="dropdown-item">2014</a>
                                        <a class="dropdown-item">2013</a>
                                    </div>
                                </div>
                                <div class="dropdown mr-2">
                                    <span class="name-params">до</span>
                                    <div class="dd-select" data-toggle="dropdown"><span class="helper"></span><span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span></div>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item">2017</a>
                                        <a class="dropdown-item">2016</a>
                                        <a class="dropdown-item">2015</a>
                                        <a class="dropdown-item">2014</a>
                                        <a class="dropdown-item">2013</a>
                                    </div>
                                </div>
                                <a href="#" class="refresh">&#215;</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Двигатель</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Привод</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 ap-custom-input">
                            <div class="inner-select">
                                <div class="dropdown mr-2">
                                    <span class="name-params">Пробег, от</span>
                                    <input type="text">
                                </div>
                                <div class="dropdown mr-2">
                                    <span class="name-params">до</span>
                                    <input type="text">
                                </div>
                                <a href="#" class="refresh">&#215;</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="search-result-block-filter-main-area col-11 py-3 pr-0">
                    <div class="row">
                        <div class="col-4 ap-custom-select">
                            <div class="inner-select">
                                <div class="dropdown mr-2">
                                    <span style="width: 70px" class="name-params">Объём, от</span>
                                    <div class="dd-select" data-toggle="dropdown"><span class="helper"></span><span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span></div>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item">2017</a>
                                        <a class="dropdown-item">2016</a>
                                        <a class="dropdown-item">2015</a>
                                        <a class="dropdown-item">2014</a>
                                        <a class="dropdown-item">2013</a>
                                    </div>
                                </div>
                                <div class="dropdown mr-2">
                                    <span class="name-params">до</span>
                                    <div class="dd-select" data-toggle="dropdown"><span class="helper"></span><span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span></div>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item">2017</a>
                                        <a class="dropdown-item">2016</a>
                                        <a class="dropdown-item">2015</a>
                                        <a class="dropdown-item">2014</a>
                                        <a class="dropdown-item">2013</a>
                                    </div>
                                </div>
                                <a href="#" class="refresh">&#215;</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Кузов</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">КПП</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 ap-custom-input">
                            <div class="inner-select">
                                <div class="dropdown mr-2">
                                    <span class="name-params">Цена, от</span>
                                    <input type="text">
                                </div>
                                <div class="dropdown mr-2">
                                    <span class="name-params">до</span>
                                    <input type="text">
                                </div>
                                <a href="#" class="refresh">&#215;</a>
                            </div>
                        </div>
                        <div class="check-option col-4 mt-1">
                            <span class="ap_checkbox">
                                <input type="checkbox" id="checkbox-filter-1">
                                <label for="checkbox-filter-1">Только с фото</label>
                            </span>
                        </div>
                        <div class="check-option col-4 mt-1">
                            <span class="ap_checkbox">
                                <input type="checkbox" id="checkbox-filter-2">
                                <label for="checkbox-filter-2">Автомобили по акции</label>
                            </span>
                        </div>
                        <div class="check-option col-4 mt-1">
                            <span class="ap_checkbox">
                                <input type="checkbox" id="checkbox-filter-3">
                                <label for="checkbox-filter-3">Автомобиль на гарантии</label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="search-result-block-filter-main-sub-area col-12" attr="N">
                    <div class="row border-line">
                        <div class="search-result-block-filter-main-sub-area-defend mb-3 pr-0 col-11">
                            <div class="row align-items-center">
                                <div class="col-12 pt-3">
                                    <div class="row">
                                        <div class="main_filter__body__main_area__property__item my-1 col-4">
                                            <div class="b-add__item-r color-palette select_color" data-multiple="Y" attr="N">
                                                <div data-id="16" title="" style="background-color: #000000;" class="color_item">
                                                    <input data-ind="16" type="hidden" name="color">
                                                    <span class="custom_title" style="">Черный<span class="custom_title_after" style="left: 25.5px;"></span></span>
                                                </div>
                                                <div data-id="15" title="" style="background-color: #ffffff; box-shadow: inset 0 0 0 1px #dedede;" class="color_item">
                                                    <input data-ind="15" type="hidden" name="color">
                                                    <span class="custom_title" style="">Белый<span class="custom_title_after" style="left: 21px;"></span></span>
                                                </div>
                                                <div data-id="13" title="" style="background-color: #C1C1C1;" class="color_item">
                                                    <input data-ind="13" type="hidden" name="color">
                                                    <span class="custom_title" style="">Серебристый<span class="custom_title_after" style="left: 44px;"></span></span>
                                                </div>
                                                <div data-id="1" title="" style="background-color: #9C9999;" class="color_item">
                                                    <input data-ind="1" type="hidden" name="color">
                                                    <span class="custom_title" style="left: 18px;">Серый<span class="custom_title_after"></span></span>
                                                </div>
                                                <div data-id="6" title="" style="background-color: #926547;" class="color_item">
                                                    <input data-ind="6" type="hidden" name="color">
                                                    <span class="custom_title" style="">Коричневый<span class="custom_title_after" style="left: 40.5px;"></span></span>
                                                </div>
                                                <div data-id="14" title="" style="background-color: #ef0000;" class="color_item">
                                                    <input data-ind="14" type="hidden" name="color">
                                                    <span class="custom_title" style="">Красный<span class="custom_title_after" style="left: 28.5px;"></span></span>
                                                </div>
                                                <div data-id="4" title="" style="background-color: #0433FF;" class="color_item">
                                                    <input data-ind="4" type="hidden" name="color">
                                                    <span class="custom_title" style="left: 16.5px;">Синий<span class="custom_title_after"></span></span>
                                                </div>
                                                <div data-id="2" title="" style="background-color: #35BA2B;" class="color_item">
                                                    <input data-ind="2" type="hidden" name="color">
                                                    <span class="custom_title" style="left: 24.5px;">Зеленый<span class="custom_title_after"></span></span>
                                                </div>
                                                <div data-id="3" title="" style="background-color: #9966CC;" class="color_item">
                                                    <input data-ind="3" type="hidden" name="color">
                                                    <span class="custom_title" style="left: 36.5px;">Фиолетовый<span class="custom_title_after"></span></span>
                                                </div>
                                                <div data-id="5" title="" style="background-color: #0088ff;" class="color_item">
                                                    <input data-ind="5" type="hidden" name="color">
                                                    <span class="custom_title" style="left: 22.5px;">Голубой<span class="custom_title_after"></span></span>
                                                </div>
                                                <div data-id="7" title="" style="background-color: #CC1D33;" class="color_item">
                                                    <input data-ind="7" type="hidden" name="color">
                                                    <span class="custom_title" style="left: 32.5px;">Пурпурный<span class="custom_title_after"></span></span>
                                                </div>
                                                <div data-id="8" title="" style="background-color: #FFC0CB;" class="color_item">
                                                    <input data-ind="8" type="hidden" name="color">
                                                    <span class="custom_title" style="">Розовый<span class="custom_title_after" style="left: 29px;"></span></span></div>
                                                <div data-id="9" title="" style="background-color: #FF9966;" class="color_item">
                                                    <input data-ind="9" type="hidden" name="color">
                                                    <span class="custom_title" style="left: 34.5px;">Оранжевый<span class="custom_title_after"></span></span></div>
                                                <div data-id="10" title="" style="background-color: #FABE00;" class="color_item">
                                                    <input data-ind="10" type="hidden" name="color">
                                                    <span class="custom_title" style="">Золотистый<span class="custom_title_after" style="left: 38px;"></span></span></div>
                                                <div data-id="11" title="" style="background-color: #FDE910;" class="color_item">
                                                    <input data-ind="11" type="hidden" name="color">
                                                    <span class="custom_title" style="">Желтый<span class="custom_title_after" style="left: 26px;"></span></span></div>
                                                <div data-id="12" title="" style="background-color: #FFEFD5;" class="color_item">
                                                    <input data-ind="12" type="hidden" name="color">
                                                    <span class="custom_title" style="">Бежевый<span class="custom_title_after" style="left: 30px;"></span></span></div>
                                            </div>
                                            <div class="b-add__item-r-dropdown">
                                                <div class="dropdown-btn-color"><i id="dropdown-btn-glyphicon" class="fa fa-angle-down" aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-4 ap-custom-input my-1">
                                            <div class="inner-select">
                                                <div class="dropdown mr-2">
                                                    <span class="name-params">Мощность, от</span>
                                                    <input type="text">
                                                </div>
                                                <div class="dropdown mr-2">
                                                    <span class="name-params">до</span>
                                                    <input type="text">
                                                </div>
                                                <a href="#" class="refresh">×</a>
                                            </div>
                                        </div>
                                        <div class="col-4 my-1">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="characteristic-type">Количество собственников</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item">1</a>
                                                    <a class="dropdown-item">2</a>
                                                    <a class="dropdown-item">3+</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">ПТС</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Оригинал</a>
                                            <a class="dropdown-item">Копия</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Вариант продажи</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Количество мест</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Количество дверей</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="check-option col-4 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-4">
                                        <label for="checkbox-filter-4">ПТС в наличии</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-line">
                        <div class="search-result-block-filter-main-sub-area-defend my-3 col">
                            <div class="row align-items-center">
                                <h6 class="col-12">Безопасность</h6>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Подушки безопасности</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Парктроник</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Круиз-контроль</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Фары</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Усилитель руля</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Охранная система</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Диски</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Размер дисков</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-5">
                                        <label for="checkbox-filter-5">ABS</label>
                                    </span>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-6">
                                        <label for="checkbox-filter-6">Антипробуксовочная система</label>
                                    </span>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-7">
                                        <label for="checkbox-filter-7">ESP</label>
                                    </span>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-8">
                                        <label for="checkbox-filter-8">Датчики света</label>
                                    </span>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-9">
                                        <label for="checkbox-filter-9">Ночное видение</label>
                                    </span>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-10">
                                        <label for="checkbox-filter-10">Удержание в полосе</label>
                                    </span>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-11">
                                        <label for="checkbox-filter-11">Мониторинг мертвых зон</label>
                                    </span>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-12">
                                        <label for="checkbox-filter-12">Датчики дождя</label>
                                    </span>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-13">
                                        <label for="checkbox-filter-13">ISOFIX</label>
                                    </span>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-14">
                                        <label for="checkbox-filter-14">Противотуманные фары</label>
                                    </span>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-15">
                                        <label for="checkbox-filter-15">Керамические тормоза</label>
                                    </span>
                                </div>
                                <div class="check-option col-3 my-1">
                                    <span class="ap_checkbox">
                                        <input type="checkbox" id="checkbox-filter-16">
                                        <label for="checkbox-filter-16">Автопилот</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-line">
                        <div class="search-result-block-filter-main-sub-area-defend my-3 col">
                            <div class="row align-items-center">
                                <h6 class="col-12">Комфорт</h6>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Регулировка руля</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Климат</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Стеклоподъёмники</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Люк</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="row">
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-17">
                                                <label for="checkbox-filter-17">Многофункциональный руль</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-18">
                                                <label for="checkbox-filter-18">Обогрев зеркал</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-19">
                                                <label for="checkbox-filter-19">Электропривод зеркал</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-20">
                                                <label for="checkbox-filter-20">Электропривод багажника</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-21">
                                                <label for="checkbox-filter-21">Обогрев руля</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-22">
                                                <label for="checkbox-filter-22">Обогрев лобового стекла</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-23">
                                                <label for="checkbox-filter-23">Электроскладывание зеркал</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-24">
                                                <label for="checkbox-filter-24">Доводчики дверей</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-25">
                                                <label for="checkbox-filter-25">Бесключевой доступ</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-26">
                                                <label for="checkbox-filter-26">Пневмоподвеска</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-27">
                                                <label for="checkbox-filter-27">Омыватель фар</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-28">
                                                <label for="checkbox-filter-28">Предпусковой обогреватель</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Тип сидений</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Обивка сидений</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Цвет салона</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Регулировка сидения водителя</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Регулировка сидения пассажира </div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Регулировка задних сидений</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Обогрев сидений</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Вентиляция сидений</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Массаж сидений</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Цвет сидений</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Цвет потолка</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 my-1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="characteristic-type">Цвет пола</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item">Action</a>
                                            <a class="dropdown-item">Another action</a>
                                            <a class="dropdown-item">Something else here</a>
                                        </div>
                                    </div>
                                </div>

<!--                                <div class="col-6 my-1 check-option">-->
<!--                                    <div class="row align-items-center">-->
<!--                                        <span class="check-option-name pl-3 col-3">Цвет интерьера:</span>-->
<!--                                        <div style="text-align: left;" class="b-add__item-r select_color col" data-multiple="Y">-->
<!--                                            <div data-id="1" title="" style="background-image: url('/img/special_color.png');" class="color_item">-->
<!--                                                <input data-ind="1" type="hidden" name="colorInterior">-->
<!--                                                <span class="custom_title" style="">Эксклюзив<span class="custom_title_after" style="left: 36.5px;"></span></span>-->
<!--                                            </div>-->
<!--                                            <div data-id="2" title="" style="background-color: #926547;" class="color_item">-->
<!--                                                <input data-ind="2" type="hidden" name="colorInterior">-->
<!--                                                <span class="custom_title" style="">Коричневый<span class="custom_title_after" style="left: 40.5px;"></span></span>-->
<!--                                            </div>-->
<!--                                            <div data-id="3" title="" style="background-color: #ef0000;" class="color_item">-->
<!--                                                <input data-ind="3" type="hidden" name="colorInterior">-->
<!--                                                <span class="custom_title" style="">Красный<span class="custom_title_after" style="left: 28.5px;"></span></span>-->
<!--                                            </div>-->
<!--                                            <div data-id="4" title="" style="background-color: #0433FF;" class="color_item">-->
<!--                                                <input data-ind="4" type="hidden" name="colorInterior">-->
<!--                                                <span class="custom_title" style="">Синий<span class="custom_title_after" style="left: 21px;"></span></span>-->
<!--                                            </div>-->
<!--                                            <div data-id="5" title="" style="background-color: #ffffff; box-shadow: inset 0 0 0 1px #dedede;" class="color_item">-->
<!--                                                <input data-ind="5" type="hidden" name="colorInterior">-->
<!--                                                <span class="custom_title" style="">Белый<span class="custom_title_after" style="left: 21.5px;"></span></span>-->
<!--                                            </div>-->
<!--                                            <div data-id="6" title="" style="background-color: #FFEFD5;" class="color_item">-->
<!--                                                <input data-ind="6" type="hidden" name="colorInterior">-->
<!--                                                <span class="custom_title" style="">Бежевый<span class="custom_title_after" style="left: 30px;"></span></span>-->
<!--                                            </div>-->
<!--                                            <div data-id="7" title="" style="background-color: #9C9999;" class="color_item">-->
<!--                                                <input data-ind="7" type="hidden" name="colorInterior">-->
<!--                                                <span class="custom_title" style="">Cерый<span class="custom_title_after" style="left: 22px;"></span></span>-->
<!--                                            </div>-->
<!--                                            <div data-id="8" title="" style="background-color: #000000;" class="color_item">-->
<!--                                                <input data-ind="8" type="hidden" name="colorInterior">-->
<!--                                                <span class="custom_title" style="">Черный<span class="custom_title_after" style="left: 25.5px;"></span></span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="row border-line">
                        <div class="search-result-block-filter-main-sub-area-defend my-3 col">
                            <div class="row align-items-center">
                                <h6 class="col-12">Мультимедиа</h6>
                                <div class="inner-check container">
                                    <div class="row">
                                        <div class="col-3 my-1">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="characteristic-type">Тип мультимедиа</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item">Action</a>
                                                    <a class="dropdown-item">Another action</a>
                                                    <a class="dropdown-item">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 my-1">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="characteristic-type">Источники</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item">Action</a>
                                                    <a class="dropdown-item">Another action</a>
                                                    <a class="dropdown-item">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 my-1">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="characteristic-type">Качество звука</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item">Action</a>
                                                    <a class="dropdown-item">Another action</a>
                                                    <a class="dropdown-item">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 my-1">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <div class="characteristic-type">Операционная система</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item">Action</a>
                                                    <a class="dropdown-item">Another action</a>
                                                    <a class="dropdown-item">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-29">
                                                <label for="checkbox-filter-29">Навигация</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-30">
                                                <label for="checkbox-filter-30">Проекция на лобовое стекло</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-31">
                                                <label for="checkbox-filter-31">Цифровая панель приборов</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-32">
                                                <label for="checkbox-filter-32">Интернет</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-33">
                                                <label for="checkbox-filter-33">Мультимедия для задних пассажиров</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-34">
                                                <label for="checkbox-filter-34">Беспроводная зарядка</label>
                                            </span>
                                        </div>
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-35">
                                                <label for="checkbox-filter-35">ТВ тюнер</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-line line-bottom">
                        <div class="search-result-block-filter-main-sub-area-defend my-3 col">
                            <div class="row align-items-center">
                                <h6 class="col-12">Прочее</h6>
                                <div class="inner-check container">
                                    <div class="row">
                                        <div class="check-option col-3 my-1">
                                            <span class="ap_checkbox">
                                                <input type="checkbox" id="checkbox-filter-36">
                                                <label for="checkbox-filter-36">Sport пакет</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-result-block-filter-main mt-1 mb-3 col-11 pr-0">
                    <div class="row justify-content-end align-items-center">
                        <div class="col-4">
                            <span class="ap_checkbox">
                                <input type="checkbox" id="checkbox-filter-37">
                                <label for="checkbox-filter-37">Автомобили с учетом НДС</label>
                            </span>
                        </div>
                        <div class="col-3">
                            <a class="filter-refresh-all-button">Сбросить <span class="filter-refresh-all">&#215;</span></a>
                        </div>
                        <div class="col-3 extended-search" id="flex-menu">
                            <button type="button" class="search-result-item-specification-price-btn btn-search btn btn-secondary btn-md btn-block">Расшириненый поиск<span class="glyphicon glyphicon-menu-down" id="gl-arrows"></span></button>

                        </div>
                        <div class="col-2">
                            <button type="button" class="search-result-item-specification-price-btn btn btn-secondary btn-md btn-block">Поиск</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="search-result-compare my-2">
        <div class="search-result-compare-inner container bg-white rounded sh-box-tb sh-box-lr">
            <div class="row">
                <div class="col">
                    <div class="compare-selected">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        Выбрано <span>2</span> автомобиля.
                        <a href="">Перейти к сравнению</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-result-sorting my-2">
        <div class="search-result-sorting-inner container bg-white rounded sh-box-tb sh-box-lr">
            <div class="row d-flex justify-content-start">
                <div class="col-2 my-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="characteristic-type">По названию</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item">От а-я</a>
                            <a class="dropdown-item">От я-а</a>
                        </div>
                    </div>
                </div>
                <div class="col-2 my-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="characteristic-type">По дате</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item">Новые</a>
                            <a class="dropdown-item">Старые</a>
                        </div>
                    </div>
                </div>
                <div class="col-2 my-2 ml-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-select dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="characteristic-type">По цене</div> <span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item">Дешевле</a>
                            <a class="dropdown-item">Дороже</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-result-block ">
        <div class="search-result-item container bg-white rounded-top sh-box-tb sh-box-lr">
            <div class="search-result-item-header row align-items-center justify-content-end py-2">
                <div class="search-result-item-model col">
                    BMW X6M, 2012
                    <div class="color-auto" id="#color-help" style="background-color: #000;" data-container="body" data-toggle="popover" data-placement="right" data-content="Черный"></div>
                </div>
                <div class="search-result-item-dealer text-right col-3">
                    <div class="search-result-item-location-dealer mr-3">
                        <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
                        <span>Москва</span>
                    </div>
                    <div class="search-result-item-name-dealer">Балтавтотрейд-М</div>
                </div>
            </div>
            <div class="search-result-item-content no-gutters py-3 row">
                <div class="search-result-item-img col-3">
                    <img src="/img/test/bmw-x6m.jpg" class="w-100" alt="">
                </div>
                <div class="search-result-item-desc col-3">
                    <dl class="row no-gutters mb-0">
                        <dt class="col-4 search-result-item-desc-stats">Пробег</dt>
                        <dd class="col-8">35 125 км</dd>

                        <dt class="col-4 search-result-item-desc-stats">Двигатель</dt>
                        <dd class="col-8">5.5 (450 л.с), бензиновый</dd>

                        <dt class="col-4 search-result-item-desc-stats">Коробка</dt>
                        <dd class="col-8">АКПП, 8 передач</dd>

                        <dt class="col-4 search-result-item-desc-stats">Привод</dt>
                        <dd class="col-8">Полный</dd>

                        <dt class="col-4 search-result-item-desc-stats">Кузов</dt>
                        <dd class="col-8">Седан, 4дв</dd>

                    </dl>
                </div>
                <div class="search-result-item-specification col-3">
                    <div class="row no-gutters">
                        <div class="search-result-item-specification-owner-name col-12 pl-5">
                            Количество владельцев
                        </div>
                        <div class="search-result-item-specification-owner-quantity col-12 pl-5">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="search-result-item-support-dealer px-5 mt-5">
                            <img class="w-100" src="/img/support-dealer/VW.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="search-result-item-specification-other align-self-center col-2">
                    <div class="search-result-item-specification-price-sale">
                        4 850 000 р.
                    </div>
                    <div class="search-result-item-specification-price sale">
                        3 850 000 р.
                    </div>
                    <div class="search-result-item-specification-price-special-offer mt-2">
                        <span>Акция до 25.05.2017</span>
                    </div>
<!--                    <button type="button" class="search-result-item-specification-price-btn btn btn-secondary btn-sm btn-block">Бронь</button>-->
                </div>
                <div class="search-result-item-links col-1">
                    <div class="row">
                        <div class="col-12">
                            <div class="search-result-item-link">
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="search-result-item-link">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="search-result-item-link">
                              <i class="fa fa-share-alt" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-result-item bg-white container rounded-bottom sh-box-tb sh-box-lr mt-2">
            <div class="search-result-item-header py-2 row">
                <div class="search-result-item-model col">
                    AUDI TT, 2014
<!--                    <div class="color-auto" style="background-color: #c1c1c1;">-->
<!--                        <div class="color-help">-->
<!--                            Черный-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="search-result-item-dealer text-right col-3">
                    <div class="search-result-item-location-dealer mr-3">
                        <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
                        <span>Москва</span>
                    </div>
                    <div class="search-result-item-name-dealer">ООО "Audi group РУС"</div>
                </div>
            </div>
            <div class="search-result-item-content no-gutters py-3 row">
                <div class="search-result-item-img col-3">
                    <img src="/img/test/audi-tt.jpg" class="w-100" alt="">
                </div>
                <div class="search-result-item-desc col-3">
                    <dl class="row no-gutters mb-0">
                        <dt class="col-4 search-result-item-desc-stats">Пробег</dt>
                        <dd class="col-8">35 125 км</dd>

                        <dt class="col-4 search-result-item-desc-stats">Двигатель</dt>
                        <dd class="col-8">5.5 (450 л.с), бензиновый</dd>

                        <dt class="col-4 search-result-item-desc-stats">Коробка</dt>
                        <dd class="col-8">АКПП, 8 передач</dd>

                        <dt class="col-4 search-result-item-desc-stats">Привод</dt>
                        <dd class="col-8">Полный</dd>

                        <dt class="col-4 search-result-item-desc-stats">Кузов</dt>
                        <dd class="col-8">Купе, 2дв</dd>
                    </dl>
                </div>
                <div class="search-result-item-specification  col-3">
                    <div class="row no-gutters">
                        <div class="search-result-item-specification-owner-name col-12 col-xs-12 pl-5">
                            Количество владельцев
                        </div>
                        <div class="search-result-item-specification-owner-quantity col-12 pl-5">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="search-result-item-specification-other align-self-center col-2">
                    <div class="search-result-item-specification-price">
                        2 650 000 р.
                    </div>
<!--                    <button type="button" class="search-result-item-specification-price-btn btn btn-secondary btn-sm btn-block">Бронь</button>-->
                </div>
                <div class="search-result-item-links col-1">
                    <div class="row">
                        <div class="col-12">
                            <div class="search-result-item-link">
                                <a href=""><i class="fa fa-star" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="search-result-item-link">
                                <a href=""><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="search-result-item-link">
                                <a href=""><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer-lite sh-box-tb">
    <div class="footer-line py-4">
        <div class="container">
            <div class="row">
                <div class="footer-line-icon col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <img src="/img/logo-footer.png" alt="">
                </div>
                <div class="footer-line-link-item-1 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12"><a href="">О Дилерском Портале</a></div>
                <div class="footer-line-link-item-2 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12"><a href="">Защита данных</a></div>
                <div class="footer-line-link-item-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12"><a href="">Реклама</a></div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="footer-column mr-3 col-xl-2 col-lg-2 col-md-6 col-sm-6 col-xs-12">
                <div class="container-col">
                    <h4>Дилерам</h4>
                    <ul>
                        <li><a href="">Купить</a></li>
                        <li><a href="">Продать</a></li>
                        <li><a href="">Статистика</a></li>
                        <li><a href="">Сервис</a></li>
                        <li><a href="">Вход</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-column-1 mr-3 col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-12">
                <div class="container-col">
                    <h4>Поддержка</h4>
                    <ul>
                        <li><a href="">F.A.Q</a></li>
                        <li><a href="">Связаться с нами</a></li>
                        <li><a href="">Связь с дилером</a></li>
                        <li><a href="">Отзывы</a></li>
                        <li><a href="">Настройки</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-column-2 ml-3 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
                Дилерский портал - это единая база продажи автомобилей  Официальными дилерами России. Мы стремимся к максимально комфортному общению с покупателем. Для этого каждый Официальный дилер имеет рейтинг, который отображает реальное положение дел у продавца. Вы можете участвовать в формировании рейтинга, активно пользуясь нашими сервисами.<br /><br />Мы действуем в рамках закона о «Защите прав потребителей». Вы всегда защищены. Вы можете быть спокойны за свои деньги и за свою машину.
            </div>
        </div>
    </div>
</footer>
</body>
</html>