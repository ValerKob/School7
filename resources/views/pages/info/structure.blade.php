@extends('layouts.main')

@section('title', 'Структура и органы управления образовательной организацией')

@section('content')

<!--================ Start Pages Main =================-->
<section class="glav">
    <div class="container">
        <div class="containerGlavInfo">
            <div class="glavTitle txSt">Структура и органы управления образовательной организацией</div>
            <div class="glavInfoRow">
                <a href="{{ route('school') }}" class="glavInfoCol">Школа</a>
                <a href="{{ route('basicInformation') }}" class="glavInfoCol">Основные сведения</a>
                <a href="{{ route('documents') }}" class="glavInfoCol">Документы</a>
                <a href="{{ route('education') }}" class="glavInfoCol">Обрзование</a>
                <a href="{{ route('guide') }}" class="glavInfoCol">Руководство</a>
                <a href="{{ route('material') }}" class="glavInfoCol">Материально-техническое обеспечение</a>
                <a href="{{ route('services') }}" class="glavInfoCol">Услуги</a>
                <a href="{{ route('financial') }}" class="glavInfoCol">Финансово-хозяйственная деятельность</a>
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
                    <!-- <div class="glavContentTextTitle txSt">Страница в стадии наполнения</div>

                    <div class="glavContentTextSubTitle txSt">Об образовательной организации</div>

                    <div class="glavContentTextSub">Полное и сокращенное наименование образовательной организации:</div>
                    <div class="glavContentTextSup">Муниципальное бюджетное общеобразовательное учреждение городского округа «Город Архангельск» «Средняя школа № 7» (МБОУ СШ № 7)</div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Pages Main =================-->

@endsection('content')