@extends('layouts.main')

@section('title', 'Новости')

@section('content')

<!--================ Start Pages Main =================-->
<section class="documents">
    <div class="container">
        <div class="documentsWrapper">
            <div class="documentsWrapperTwoTitle">
                <h1 class="documentsTitle txStW">Новости</h1>
                <h1 class="documentsTitle txStW opc ml-5">События</h1>
            </div>
            <div class="rowDocuments">
                <div class="colDocuments active txStW">Все новости</div>
                <div class="colDocuments">Спорт</div>
                <div class="colDocuments">Наука</div>
                <div class="colDocuments">Управление</div>
                <div class="colDocuments">Образование</div>
                <div class="colDocuments">Спорт</div>
                <div class="colDocuments">Наука</div>
                <div class="colDocuments">Управление</div>
                <div class="colDocuments">Образование</div>
            </div>
        </div>
    </div>
    <img class="documentsImgHeader" src="./assets/images/documents/header.svg" alt="">
</section>

<section class="oneBlogNews">
    <div class="container">
        
    </div>
</section>
<!--================ End Pages Main =================-->

@endsection('content')