@extends('layouts.main')

@section('title', 'Финансово-хозяйственная деятельность')

@section('content')

<!--================ Start Pages Main =================-->
<section class="glav">
    <div class="container">
        <div class="containerGlavInfo">
            <div class="glavTitle txSt">Финансово-хозяйственная деятельность</div>
            <div class="glavInfoRow">
                <a href="{{ route('school') }}" class="glavInfoCol">Школа</a>
                <a href="{{ route('basicInformation') }}" class="glavInfoCol">Основные сведения</a>
                <a href="{{ route('documents') }}" class="glavInfoCol">Документы</a>
                <a href="{{ route('structureAndManagement') }}" class="glavInfoCol">Структура и органы управления образовательной организацией</a>
                <a href="{{ route('education') }}" class="glavInfoCol">Обрзование</a>
                <a href="{{ route('guide') }}" class="glavInfoCol">Руководство</a>
                <a href="{{ route('material') }}" class="glavInfoCol">Материально-техническое обеспечение</a>
                <a href="{{ route('services') }}" class="glavInfoCol">Услуги</a>
                <a href="{{ route('places') }}" class="glavInfoCol">Вакантные места для приема (перевода) обучающихся</a>
                <a href="{{ route('available') }}" class="glavInfoCol">Доступная среда</a>
                <a href="{{ route('international') }}" class="glavInfoCol">Международное сотрудничество</a>
            </div>

            <div class="glavContent">
                <div class="glavContentImage">
                    <img class="glavContentImg" src="/assets/images/school7.svg" alt="">
                </div>
                <div class="glavContentText">
                <div class="glavContentTextTitleError">Страница в стадии наполнения</div>
                    <!-- <div class="glavContentTextTitle txSt">Образование</div>
                    <div class="glavContentTextSubTitle txSt">Образовательные программы</div>

                    <div class="glavContentTextSup">Основная образовательная программа начального общего образования (<a href="assets/education/noo7.pdf" download>скачать</a>) </div>
                    <div class="glavContentTextSup">Основная образовательная программа основного общего образования (<a href="assets/education/ooo.pdf" download>скачать</a>)</div>
                    <div class="glavContentTextSup">Основная образовательная программа среднего общего образования (<a href="assets/education/soo.pdf" download>скачать</a>)</div> -->
                </div>  
            </div>
        </div>
    </div>
</section>
<!--================ End Pages Main =================-->

@endsection('content')