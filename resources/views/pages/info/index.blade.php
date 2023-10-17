@extends('layouts.main')

@section('title', 'Основные сведения')

@section('content')

<!--================ Start Pages Main =================-->
<section class="glav">
    <div class="container">
        <div class="containerGlavInfo">
            <div class="glavTitle txSt">Основные сведения</div>
            <div class="glavInfoRow">
                <a href="{{ route('school') }}" class="glavInfoCol">Школа</a>
                <a href="{{ route('structureAndManagement') }}" class="glavInfoCol">Структура и органы управления образовательной организацией</a>
                <a href="{{ route('documents') }}" class="glavInfoCol">Документы</a>
                <a href="{{ route('education') }}" class="glavInfoCol">Образование</a>
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
                    <div class="glavContentTextTitle txSt">Основные сведения</div>

                    <div class="glavContentTextSubTitle txSt">Об образовательной организации</div>

                    <div class="glavContentTextSub">Полное и сокращенное наименование образовательной организации:</div>
                    <div class="glavContentTextSup">Муниципальное бюджетное общеобразовательное учреждение городского округа «Город Архангельск» «Средняя школа № 7» (МБОУ СШ № 7)</div>
                    <div class="glavContentTextSub">Дата создания образовательной организации:</div>
                    <div class="glavContentTextSup">13.08.2023</div>
                    <div class="glavContentTextSub">Тип образовательной организации:</div>
                    <div class="glavContentTextSup">средняя общеобразовательная школа</div>


                    <div class="glavContentTextSubTitle txSt">Место нахождения образовательной организации</div>

                    <div class="glavContentTextSub">Юридический адрес:</div>
                    <div class="glavContentTextSup">163065, Российская Федерация, Архангельская обл.,г. Архангельск, ул. ​Карпогорская, д. 36</div>


                    <div class="glavContentTextSubTitle txSt">Режим и график работы</div>

                    <div class="glavContentTextSub">Режим работы:</div>
                    <div class="glavContentTextSup">Понедельник - пятница с __.__ до __.__, суббота с __.__ до __.__</div>
                    <div class="glavContentTextSub">График работы:</div>
                    <div class="glavContentTextSup">Школа работает в одну смену. Занятия с __.__ до __.__</div>


                    <div class="glavContentTextSubTitle txSt">Учредители образовательной организации</div>

                    <div class="glavContentTextSup">городской округ «Город Архангельск»Департамент образования Администрации города Архангельска</div>
                    <div class="glavContentTextSub">Адрес:</div>
                    <div class="glavContentTextSup">163000, город Архангельск, пл. Ленина, 5</div>
                    <div class="glavContentTextSub">Телефон:</div>
                    <div class="glavContentTextSup">(8182) 286-280</div>
                    <div class="glavContentTextSub">Факс:</div>
                    <div class="glavContentTextSup">(8182) 607-331</div>
                    <div class="glavContentTextSub">e-mail:</div>
                    <div class="glavContentTextSup">dokis@arhcity.ru</div>
                    <div class="glavContentTextSub">Сайт:</div>
                    <div class="glavContentTextSup">https://www.arh29mbous7.ru/</div>
                    <div class="glavContentTextSub">Директор департамента образования:</div>
                    <div class="glavContentTextSup">Базанова Светлана Олеговна</div>
                    <div class="glavContentTextSub">Телефон:</div>
                    <div class="glavContentTextSup">(8182) 286-280</div>
                    <div class="glavContentTextSub">Заместитель директора департамента образования:</div>
                    <div class="glavContentTextSup">Ерыкалова Елена Станиславовна</div>
                    <div class="glavContentTextSub">Телефон:</div>
                    <div class="glavContentTextSup">(8182) 607-325</div>


                    <div class="glavContentTextSubTitle txSt">Представительства и филиалы</div>

                    <div class="glavContentTextSup">Организация не имеет представительств и филиалов</div>



                    <div class="glavContentTextSubTitle txSt">Места осуществления образовательной деятельности</div>

                    <div class="glavContentTextSub">Местонахождение образовательной организации:</div>
                    <div class="glavContentTextSup">163065, Российская Федерация,Архангельская обл., г. Архангельск,ул. ​Карпогорская, д. 36</div>
                    <div class="glavContentTextSub">Образовательная деятельность по дополнительным профессиональным программам:</div>
                    <div class="glavContentTextSup">не реализуется</div>
                    <div class="glavContentTextSub">Образовательная деятельность по основным программам профессионального обучения:</div>
                    <div class="glavContentTextSup">не реализуется</div>
                    <div class="glavContentTextSub">Образовательная деятельность при использовании сетевой формы реализации образовательных программ:</div>
                    <div class="glavContentTextSup">не осуществляется реализация программ с использованием сетевой формы взаимодействия</div>
                    <div class="glavContentTextSub">Места проведения практики:</div>
                    <div class="glavContentTextSup">не предусмотрено</div>
                    <div class="glavContentTextSub">Места проведения государственной итоговой аттестации:</div>
                    <div class="glavContentTextSup">...</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Pages Main =================-->

@endsection('content')