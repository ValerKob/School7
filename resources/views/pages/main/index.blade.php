@extends('layouts.main')

@section('title', '7-я Школа')

@section('content')

<!--================ Start Pages Main =================-->
<section class="oneBlog">
    <div class="container">
        <img class="oneBlogImagesBack" src="./assets/images/School7.jpg" alt="">
        <!-- <div class="rowOneBlog">
            <div class="colOneBlogOne">
                <div class="content">
                    <div class="titleOneBlog">7-Я ШКОЛА!!!</div>
                    <div class="textOneBlog">Её самый лучший, надёжный, добрый и
                        уверенный коллектив...</div>
                    <a href="{{ route('basicInformation')}}" class="btnOneBlog">
                        <div class="linkOneBlog">Подробнее</div>
                    </a>
                </div>
            </div>
            <div class="colOneBlogTwo">
                <div class="oneBlogSchool">
                    <img class="imgOneBlog" src="../assets/images/glavSchool.svg" alt="">
                </div>

                <div class="ellipseOneBlog">
                    <div class="ellipseOneBlog1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="175" height="175" viewBox="0 0 175 175" fill="none">
                            <g filter="url(#filter0_d_6_32)">
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                            </g>
                            <defs>
                                <filter id="filter0_d_6_32" x="0" y="0" width="175" height="175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_6_32" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="20" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.886275 0 0 0 0 0.709804 0 0 0 0 0.556863 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_32" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_32" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div class="ellipseOneBlog2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" viewBox="0 0 250 250" fill="none">
                            <g filter="url(#filter0_d_6_28)">
                                <circle cx="125" cy="125" r="75" fill="#E1C691" />
                                <circle cx="125" cy="125" r="75" fill="#E1C691" />
                                <circle cx="125" cy="125" r="75" fill="#E1C691" />
                                <circle cx="125" cy="125" r="75" fill="#E1C691" />
                            </g>
                            <defs>
                                <filter id="filter0_d_6_28" x="0" y="0" width="250" height="250" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_6_28" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="20" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.886275 0 0 0 0 0.709804 0 0 0 0 0.556863 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_28" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_28" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div class="ellipseOneBlog3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="175" height="175" viewBox="0 0 175 175" fill="none">
                            <g filter="url(#filter0_d_6_31)">
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                            </g>
                            <defs>
                                <filter id="filter0_d_6_31" x="0" y="0" width="175" height="175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_6_31" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="20" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.886275 0 0 0 0 0.709804 0 0 0 0 0.556863 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_31" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_31" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div class="ellipseOneBlog4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="175" height="175" viewBox="0 0 175 175" fill="none">
                            <g filter="url(#filter0_d_6_33)">
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                                <circle cx="87.5" cy="87.5" r="37.5" fill="#E1C691" />
                            </g>
                            <defs>
                                <filter id="filter0_d_6_33" x="0" y="0" width="175" height="175" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_6_33" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="20" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.886275 0 0 0 0 0.709804 0 0 0 0 0.556863 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_33" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_33" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div class="ellipseOneBlog5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" viewBox="0 0 250 250" fill="none">
                            <g filter="url(#filter0_d_6_34)">
                                <circle cx="125" cy="125" r="75" fill="#E1C691" />
                                <circle cx="125" cy="125" r="75" fill="#E1C691" />
                                <circle cx="125" cy="125" r="75" fill="#E1C691" />
                                <circle cx="125" cy="125" r="75" fill="#E1C691" />
                            </g>
                            <defs>
                                <filter id="filter0_d_6_34" x="0" y="0" width="250" height="250" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_6_34" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="20" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.886275 0 0 0 0 0.709804 0 0 0 0 0.556863 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_34" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_34" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div class="ellipseOneBlog6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="330" height="330" viewBox="0 0 330 330" fill="none">
                            <g filter="url(#filter0_d_6_30)">
                                <circle cx="165" cy="165" r="115" fill="#E1C691" />
                                <circle cx="165" cy="165" r="115" fill="#E1C691" />
                                <circle cx="165" cy="165" r="115" fill="#E1C691" />
                                <circle cx="165" cy="165" r="115" fill="#E1C691" />
                            </g>
                            <defs>
                                <filter id="filter0_d_6_30" x="0" y="0" width="330" height="330" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_6_30" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="20" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.886275 0 0 0 0 0.709804 0 0 0 0 0.556863 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_30" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_30" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <div class="ellipseOneBlog7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" viewBox="0 0 300 300" fill="none">
                            <g filter="url(#filter0_d_6_29)">
                                <circle cx="150" cy="150" r="100" fill="#E1C691" />
                                <circle cx="150" cy="150" r="100" fill="#E1C691" />
                                <circle cx="150" cy="150" r="100" fill="#E1C691" />
                                <circle cx="150" cy="150" r="100" fill="#E1C691" />
                            </g>
                            <defs>
                                <filter id="filter0_d_6_29" x="0" y="0" width="300" height="300" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feMorphology radius="10" operator="dilate" in="SourceAlpha" result="effect1_dropShadow_6_29" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="20" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.886275 0 0 0 0 0.709804 0 0 0 0 0.556863 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_29" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_29" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </div>

            </div>
        </div> -->
    </div>
</section>
<section class="twoBlog">
    <div class="twoBlogGradient">

    </div>
    <div class="container">
        <div class="twoBlogEllipse1"></div>
        <div class="twoBlogEllipse2"></div>
        <div class="twoBlogEllipse3"></div>
    </div>
    <div class="container" style="z-index: 10;">
        <div class="twoBlogTitle">
            Самая лучшая школа
        </div>
        <div class="rowTwoBlog">
            <a href="{{ route('school') }}">
                <div class="colTwoBlog blue">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/1.svg" alt="">
                    <div class="colTwoBlogTilte">Школа</div>
                </div>
            </a>

            <a href="{{ route('basicInformation') }}">
                <div class="colTwoBlog fiel">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/2.svg" alt="">
                    <div class="colTwoBlogTilte">Основные сведения</div>
                </div>
            </a>

            <a href="{{ route('structureAndManagement') }}">
                <div class="colTwoBlog fiil">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/3.svg" alt="">
                    <div class="colTwoBlogTilte">Cтруктура</div>
                </div>
            </a>

            <a href="{{ route('documents') }}">
                <div class="colTwoBlog orange">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/4.svg" alt="">
                    <div class="colTwoBlogTilte">Документы</div>
                </div>
            </a>

            <a href="{{ route('education') }}">
                <div class="colTwoBlog blue2">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/5.svg" alt="">
                    <div class="colTwoBlogTilte">Образование</div>
                </div>
            </a>

            <a href="{{ route('guide') }}">
                <div class="colTwoBlog eng">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/6.svg" alt="">
                    <div class="colTwoBlogTilte">Руководство</div>
                </div>
            </a>

            <a href="{{ route('material') }}">
                <div class="colTwoBlog esa">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/7.svg" alt="">
                    <div class="colTwoBlogTilte">Материальное обеспечение</div>
                </div>
            </a>

            <a href="{{ route('services') }}">
                <div class="colTwoBlog orange">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/4.svg" alt="">
                    <div class="colTwoBlogTilte">Услуги</div>
                </div>
            </a>

            <a href="{{ route('financial') }}">
                <div class="colTwoBlog blue2">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/5.svg" alt="">
                    <div class="colTwoBlogTilte">Финансы</div>
                </div>
            </a>

            <a href="{{ route('places') }}">
                <div class="colTwoBlog eng">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/6.svg" alt="">
                    <div class="colTwoBlogTilte">Вакансии</div>
                </div>
            </a>

            <a href="{{ route('available') }}">
                <div class="colTwoBlog blue">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/7.svg" alt="">
                    <div class="colTwoBlogTilte">Доступная среда</div>
                </div>
            </a>

            <a href="{{ route('international') }}">
                <div class="colTwoBlog esa">
                    <img class="colTwoBlogImg" src="assets/images/infoManePage/7.svg" alt="">
                    <div class="colTwoBlogTilte">Сотрудничество</div>
                </div>
            </a>
        </div>
        <!-- <div class="wrapperTwoBlog">
            <div class="twoBlogInfo1 hoverTwoBlog1">
                <div class="twoBlogInfo1Title">
                    Родителям
                </div>
                <div class="twoBlogInfo1Img">
                    <img class="twoBlogInfo1Img1" src="../assets/images/1.svg" alt="">
                    <img class="twoBlogInfo1Img2" src="../assets/images/femaly.svg" alt="">
                </div>
            </div>
            <div class="twoBlogInfo2 hoverTwoBlog2">
                <div class="twoBlogInfo2Img">
                    <img class="twoBlogInfo2Img1" src="../assets/images/2.svg" alt="">
                    <img class="twoBlogInfo2Img2" src="../assets/images/3.svg" alt="">
                </div>
                <div class="twoBlogInfo2Title">
                    Сотрудники
                </div>
            </div>
            <div class="twoBlogInfo3 hoverTwoBlog2">
                <div class="twoBlogInfo3Img">
                    <img class="twoBlogInfo3Img1" src="../assets/images/4.svg" alt="">
                </div>
                <div class="twoBlogInfo3Title">
                    О нас
                </div>
            </div>
            <div class="twoBlogInfo4 hoverTwoBlog2">
                <div class="twoBlogInfo3Img">
                    <img class="twoBlogInfo3Img1" src="../assets/images/5.svg" alt="">
                </div>
                <div class="twoBlogInfo4Title">
                    Ученикам
                </div>
            </div>
            <div class="twoBlogInfo5 hoverTwoBlog1">
                <div class="twoBlogInfo1Title">
                    Дополнительное образование
                </div>
                <div class="twoBlogInfo5Img">
                    <img class="twoBlogInfo5Img1" src="../assets/images/6.svg" alt="">
                </div>
            </div>
            <div class="twoBlogInfo6 hoverTwoBlog2">
                <div class="twoBlogInfo6Img">
                    <img class="twoBlogInfo6Img2" src="../assets/images/8.svg" alt="">
                    <img class="twoBlogInfo6Img1" src="../assets/images/7.svg" alt="">
                </div>
                <div class="twoBlogInfo4Title">
                    Учителям
                </div>
            </div>
            <div class="twoBlogInfo7 hoverTwoBlog1">
                <div class="twoBlogInfo1Title">
                    Внеурочная деятельность
                </div>
                <div class="twoBlogInfo7Img">
                    <img class="twoBlogInfo7Img1" src="../assets/images/9.svg" alt="">
                </div>
            </div>
        </div> -->
    </div>
</section>

<section class="threeBlog">
    <div class="container">
        <div class="rowThreeBlog">
            <div class="colThreeBlog">
                <div class="contentThreeBlog">
                    <a href="#" class="titleThreeBlog">
                        Новости
                    </a>
                    <a href="#" class="allThreeBlog">
                        Все
                    </a>
                </div>
                <div class="newsThreeBlog">
                    <div class="newThreeBlog">
                        <div class="imgThreeBlog">
                            <img class="imagesThreeBlog" src="../assets/images/1.png" alt="">
                            <div class="dateImgThreeBlog">
                                21 Сентября 2023
                            </div>
                            <div class="textImgThreeBlog">
                                Показ талантов, дети
                                удивляли своим мастер...
                            </div>
                        </div>
                    </div>
                    <div class="newThreeBlog">
                        <div class="imgThreeBlog">
                            <img class="imagesThreeBlog" src="../assets/images/2.png" alt="">
                            <div class="dateImgThreeBlog">
                                21 Сентября 2023
                            </div>
                            <div class="textImgThreeBlog">
                                Показ талантов, дети
                                удивляли своим мастер...
                            </div>
                        </div>
                    </div>
                    <div class="newThreeBlog">
                        <div class="imgThreeBlog">
                            <img class="imagesThreeBlog" src="../assets/images/3.png" alt="">
                            <div class="dateImgThreeBlog">
                                21 Сентября 2023
                            </div>
                            <div class="textImgThreeBlog">
                                Показ талантов, дети
                                удивляли своим мастер...
                            </div>
                        </div>
                    </div>
                    <div class="newThreeBlog">
                        <div class="imgThreeBlog">
                            <img class="imagesThreeBlog" src="../assets/images/4.png" alt="">
                            <div class="dateImgThreeBlog">
                                21 Сентября 2023
                            </div>
                            <div class="textImgThreeBlog">
                                Показ талантов, дети
                                удивляли своим мастер...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colThreeBlog">
                <div class="contentThreeBlog">
                    <a href="#" class="titleThreeBlog">
                        События
                    </a>
                    <a href="#" class="allThreeBlog">
                        Все
                    </a>
                </div>
                <div class="eventsThreeBlog">
                    <div class="eventThreeBlog">
                        <div class="eventDataThreeBlog">
                            <div class="eventNumberThreeBlog">
                                21
                            </div>
                            <div class="eventDateThreeBlog">
                                СЕНТЯБРЯ
                            </div>
                        </div>
                        <div class="eventTextThreeBlog">
                            В этот день в Россий произошло
                            столько интересного, именно в этот день...
                        </div>
                    </div>
                    <div class="eventThreeBlog">
                        <div class="eventDataThreeBlog">
                            <div class="eventNumberThreeBlog">
                                21
                            </div>
                            <div class="eventDateThreeBlog">
                                СЕНТЯБРЯ
                            </div>
                        </div>
                        <div class="eventTextThreeBlog">
                            В этот день в Россий произошло
                            столько интересного, именно в этот день...
                        </div>
                    </div>
                    <div class="eventThreeBlog">
                        <div class="eventDataThreeBlog">
                            <div class="eventNumberThreeBlog">
                                21
                            </div>
                            <div class="eventDateThreeBlog">
                                СЕНТЯБРЯ
                            </div>
                        </div>
                        <div class="eventTextThreeBlog">
                            В этот день в Россий произошло
                            столько интересного, именно в этот день...
                        </div>
                    </div>
                    <div class="eventThreeBlog">
                        <div class="eventDataThreeBlog">
                            <div class="eventNumberThreeBlog">
                                21
                            </div>
                            <div class="eventDateThreeBlog">
                                СЕНТЯБРЯ
                            </div>
                        </div>
                        <div class="eventTextThreeBlog">
                            В этот день в Россий произошло
                            столько интересного, именно в этот день...
                        </div>
                    </div>
                    <div class="eventThreeBlog">
                        <div class="eventDataThreeBlog">
                            <div class="eventNumberThreeBlog">
                                21
                            </div>
                            <div class="eventDateThreeBlog">
                                СЕНТЯБРЯ
                            </div>
                        </div>
                        <div class="eventTextThreeBlog">
                            В этот день в Россий произошло
                            столько интересного, именно в этот день...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="fourBlog">
    <div class="container">
        <div class="wrapperFourBlog">
            <div class="eventNumberThreeBlog">Информация для родиетелей по поводу карт</div>
            <img src="./assets/images/parents/infoCards.jpg" alt="">
            <!--            <div class="titleFourBlog">
                Всегда на страже новых технологий!
            </div>
            <div class="rowFourBlog">
                <div class="colFourBlog">
                    <div class="colTitleFourBlog">
                        Кибер образование,
                        новинки!
                    </div>
                    <div class="colTextFourBlog">
                        Обучение детей, на новых
                        современных компьютера, на процессорах последнего поколения от
                        компаний <b>ADM!</b>
                    </div>
                    <div class="colTextFourBlog">
                        C лучшими преподавателей по киберспорту,
                        а так-же изучение новых технологий и разработка
                        мобильных и веб-приложений от действующих
                        специалистов.
                    </div>
                </div>
                <div class="colFourBlog">
                    <img class="colImgFourBlog" src="../assets/images/10.png" alt="">
                    <img class="colImgSvgFourBlog" src="../assets/images/pc2.svg" alt="">
                    <div class="colTypeFourBlog">
                        <img class="colTypeImgFouBlog" src="../assets/images/pc.svg" alt="">
                        <div class="colTypeTextFourBlog">
                            Кибер Спорт
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fiveBlog">
    <div class="container">
        <div class="wrapperFiveBlog">
            <div class="infoEllipseFiveBlog1"></div>
            <div class="infoEllipseFiveBlog2"></div>
            <div class="infoFiveBlog">
                <div class="contentFiveBlog">
                    <div class="titleFiveBlog">
                        1300+
                    </div>
                    <div class="textFiveBlog">
                        Более 1300 учеников, учатся в нашей школе!!!
                    </div>
                </div>
                <div class="contentFiveBlog">
                    <div class="titleFiveBlog">
                        > 240
                    </div>
                    <div class="textFiveBlog">
                        Более 240 различной школьной техники и оборудования для учебы вашего ребётка
                    </div>
                </div>
                <div class="contentFiveBlog">
                    <div class="titleFiveBlog">
                        70%
                    </div>
                    <div class="textFiveBlog">
                        Уже 70 % всех классов заполнены учениками и работаю в полном режиме
                    </div>
                </div>
                <div class="contentFiveBlog">
                    <div class="titleFiveBlog">
                        70+
                    </div>
                    <div class="textFiveBlog">
                        Более 70 первоклассных преподавателей работаю для вас и ваших детей
                    </div>
                </div>>
            </div>-->
        </div>
    </div>
</section>
<!--================ End Pages Main =================-->

@endsection('content')