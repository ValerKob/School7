<!--================ Start Header =================-->
<!-- <section class="headerWrapper">
    <div class="header">
        <div class="container">
            <div class="headerWrapperCon">
                <div style="display: flex; align-items: center;">
                    <div class="burgerMenuWrapper" id="burgerMenu">
                        <div class="burgerMenu" id="burgerMenuClose">

                        </div>
                    </div>
                    <div class="logo">
                        <a href="{{ route('main') }}">
                            <img src="../assets/images/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="headerMenu">
                        <div class="menuTitle">
                            <a href="{{ route('main') }}">  
                                <h1 class="menuTitleSchool">МБОУ&nbspСШ&nbsp№7<h1>
                            </a>
                        </div>
                        <ul class="menuUl">
                            <li class="menuLi">
                                <a class="menuLink" href="{{ route('basicInformation') }}">О&nbspшколе</a>
                            </li>
                            <li class="menuLi">
                                <a class="menuLink" href="{{ route('news') }}">Новости</a>
                            </li>
                            <li class="menuLi">
                                <a class="menuLink" href="#">Родителям</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="menuUlSvg">
                    <li class="menuLiSvg">
                        <a href="">
                            <img id="specialButton" src="../assets/images/eye.svg" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ">
                        </a>
                    </li>
                    <li class="menuLi">
                        <a href="">
                            <img src="../assets/images/vector.svg" alt="">
                        </a>
                    </li>
                    <li class="menuLi">
                        <a href="">
                            <img src="../assets/images/user.svg" alt="">
                        </a>
                    </li>
                    <li class="menuLi">
                        <a href="">
                            <img src="../assets/images/search.svg" alt="">
                        </a>
                    </li>
                    <li class="menuLi">
                        <a href="">
                            <img src="../assets/images/language.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu" id="menu">
        <div class="container">
            <div class="rowMenu">
                <div class="colMenu">
                    <ul class="colMenuUl">
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('school') }}">Школа</a>
                        </li>
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('basicInformation') }}">Основные сведения</a>
                        </li>
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('structureAndManagement') }}">Структура и органы управления образовательной организацией</a>
                        </li>
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('documents') }}">Документы</a>
                        </li>
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('education') }}">Обрзование</a>
                        </li>
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('guide') }}">Руководство</a>
                        </li>
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('material') }}">Материально-техническое обеспечение</a>
                        </li>
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('services') }}">Услуги</a>
                        </li>
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('financial') }}">Финансово-хозяйственная деятельность</a>
                        </li>
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('places') }}">Вакантные места для приема (перевода) обучающихся</a>
                        </li>
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('available') }}">Доступная среда</a>
                        </li>
                        <li class="colMenuLi">
                            <a class="colMenuLink" href="{{ route('international') }}">Международное сотрудничество</a>
                        </li>
                    </ul>
                </div>

                <div class="colMenu two">
                    <h1 class="colMenuTilte">Образование</h1>
                    <ul class="colMenuUlWhite">
                        <li class="colMenuLiWhite">
                            <a class="colMenuLinkWhite" href="#">Начальные классы</a>
                        </li>
                        <li class="colMenuLiWhite">
                            <a class="colMenuLinkWhite" href="#">Старшие классы</a>
                        </li>
                    </ul>

                    <h1 class="colMenuTilte">Школа</h1>
                    <ul class="colMenuUlWhite">
                        <li class="colMenuLiWhite">
                            <a class="colMenuLinkWhite" href="#">О нас</a>
                        </li>
                        <li class="colMenuLiWhite">
                            <a class="colMenuLinkWhite" href="#">Контакты</a>
                        </li>
                        <li class="colMenuLiWhite">
                            <a class="colMenuLinkWhite" href="#">Структура</a>
                        </li>
                    </ul>

                    <h1 class="colMenuTilte">Ученику</h1>
                    <ul class="colMenuUlWhite">
                        <li class="colMenuLiWhite">
                            <a class="colMenuLinkWhite" href="#">Расписание</a>
                        </li>
                        <li class="colMenuLiWhite">
                            <a class="colMenuLinkWhite" href="#">Библиотека</a>
                        </li>
                    </ul>

                    <h1 class="colMenuTilte">Учителям</h1>
                    <ul class="colMenuUlWhite">
                        <li class="colMenuLiWhite">
                            <a class="colMenuLinkWhite" href="#">Расписание</a>
                        </li>
                        <li class="colMenuLiWhite">
                            <a class="colMenuLinkWhite" href="#">Предметы</a>
                        </li>
                    </ul>
                </div>

                <div class="colMenu">
                    <div class="threeColFooter">
                        <div class="versionThreeColFooter headerMenuWhite">
                            <img class="imgThreeColFooter headerMenuWhite" src="../assets/images/icons/col11Black.svg" alt="">
                            <div class="textThreeColFooter headerMenuWhite">Версия для слобовидящих</div>
                        </div>
                        <div class="buttonThreeColFooter headerMenuWhite">
                            <img class="imgThreeColFooter headerMenuWhite" src="../assets/images/icons/col12Black.svg" alt="">
                            <div class="textBtnThreeColFooter headerMenuWhite">Вопрос-ответ</div>
                        </div>
                        <div class="buttonThreeColFooter headerMenuWhite">
                            <img class="imgThreeColFooter headerMenuWhite" src="../assets/images/icons/col12Black.svg" alt="">
                            <div class="textBtnThreeColFooter headerMenuWhite">Другой вопрос</div>
                        </div>
                        <div class="buttonThreeColFooter headerMenuWhite">
                            <img class="imgThreeColFooter headerMenuWhite" src="../assets/images/icons/col13Black.svg" alt="">
                            <div class="textBtnThreeColFooter headerMenuWhite">Другой вопрос</div>
                        </div>
                    </div>

                    <div class="colMenuTel">
                        <div class="colMenuTelWrapper">
                            <a class="colMenuTelNum" href="tel:79600004612">+7 (960) 000 46-12</a>
                            <div class="colMenuTelText">Телефон горячей линий</div>
                        </div>
                        <div class="colMenuTelWrapper">
                            <a class="colMenuTelNum" href="tel:79600004612">+7 (960) 000 46-12</a>
                            <div class="colMenuTelText">Многоканальный телефон</div>
                        </div>
                    </div>

                    <div class="colMenuLinkSocual">
                        <img class="colMenuLinkSocualImg" src="../assets/images/social/vk.svg" alt="">
                        <img class="colMenuLinkSocualImg" src="../assets/images/social/tg.svg" alt="">
                    </div>
                </div>
            </div>
            <img class="headerMenuRocketImg" src="../assets/images/rocket1.svg" alt="">
        </div>
    </div>
</section> -->
<!--================ End Header =================-->
<section class="headerWrapper">
    <div class="header">
        <div class="container">
            <div class="headerWrapperCon">
                <div style="display: flex; align-items: center;">
                    <!-- <div class="burgerMenuWrapper" id="burgerMenu">
                        <div class="burgerMenu" id="burgerMenuClose">

                        </div>
                    </div> -->
                    <div class="logo">
                        <a href="{{ route('main') }}">
                            <img src="../assets/images/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="headerMenu">
                        <div class="menuTitle">
                            <a href="{{ route('main') }}">
                                <h1 class="menuTitleSchool">МБОУ&nbspСШ&nbsp№7<h1>
                            </a>
                        </div>
                    </div>
                </div>

                <ul class="menuUlSvg">
                    <li class="menuLiSvg">
                        <a href="" class="specialButtonLink">
                            <h1 class="specialButtonText">Версия для слабовидящих</h1>
                            <img id="specialButton" src="../assets/images/eye.svg" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ">
                        </a>
                    </li>
                    <!-- <li class="menuLi">
                        <a href="">
                            <img src="../assets/images/vector.svg" alt="">
                        </a>
                    </li>
                    <li class="menuLi">
                        <a href="">
                            <img src="../assets/images/user.svg" alt="">
                        </a>
                    </li>
                    <li class="menuLi">
                        <a href="">
                            <img src="../assets/images/search.svg" alt="">
                        </a>
                    </li>
                    <li class="menuLi">
                        <a href="">
                            <img src="../assets/images/language.svg" alt="">
                        </a>
                    </li> -->
                </ul>
            </div>
            <ul class="menuUl">
                <li class="menuLi">
                    <a class="menuLink" href="{{ route('school') }}">Школа</a>
                </li>
                <li class="menuLi menuLiGlav">
                    <a class="menuLink menuLinkGlavHover" href="{{ route('basicInformation') }}">Основные сведения</a>
                    <ul class="blockHeaderLinks">
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('structureAndManagement') }}">01 Структура и органы управления образовательной организацией</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('documents') }}">02 Документы</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('education') }}">03 Обрзование</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('guide') }}">04 Руководство</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('material') }}">05 Материально-техническое обеспечение</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('services') }}">06 Услуги</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('financial') }}">07 Финансово-хозяйственная деятельность</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('places') }}">08 Вакантные места для приема (перевода) обучающихся</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('available') }}">09 Доступная среда</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('international') }}">10 Международное сотрудничество</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('basicInformation') }}">11 О&nbspшколе</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="{{ route('news') }}">12 Новости</a>
                        </li>
                        <li class="menuLi">
                            <a class="menuLink" href="#">13 Родителям</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>