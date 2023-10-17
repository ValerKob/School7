<!--================ Start Header =================-->
<section class="headerWrapper">
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
                                <a class="menuLink" href="#">Новости</a>
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
                            <img src="../assets/images/eye.svg" alt="">
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
</section>
<!--================ End Header =================-->