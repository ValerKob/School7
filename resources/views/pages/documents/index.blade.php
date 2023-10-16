@extends('layouts.main')

@section('title', 'Документы')

@section('content')

<!--================ Start Pages Main =================-->
<section class="documents">
    <div class="container">
        <div class="documentsWrapper">
            <h1 class="documentsTitle txStW">Документы</h1>
            <div class="rowDocuments">
                <div class="colDocuments active txStW">Все документы</div>
                <div class="colDocuments">Форма</div>
                <div class="colDocuments">Отчет</div>
                <div class="colDocuments">Информация</div>
                <div class="colDocuments">Положение</div>
                <div class="colDocuments">Указ</div>
                <div class="colDocuments">Приказ</div>
                <div class="colDocuments">Постановление</div>
                <div class="colDocuments">Распорядение</div>
                <div class="colDocuments">Прочие</div>
            </div>
        </div>
    </div>
    <div class="documentsContainer">
        <img class="documentsImgHeader" src="./assets/images/documents/header.svg" alt="">
    </div>
</section>

<section class="oneBlogDocuments">
    <div class="container">
        <div class="oneBlogDocumentsWrapper">
            <div class="rowOneBlogDocuments">
                <div class="colOneBlogDocuments">
                    <div class="colOneBlogDocumentsTitle txSt">Разделы и под разделы:</div>
                    <div class="colOneBlogDocumentsType active txStW">Главная</div>
                    <div class="colOneBlogDocumentsType txSt">Другое...</div>
                </div>

                <div class="colOneBlogDocuments two">
                    <div class="colOneBlogDocumentsTitle txSt">Документы</div>
                    <form action="">
                        <input type="text" class="colOneBlogDocumentsSearth" placeholder="Начните вводить название документов">
                    </form>
                    <div class="rowOneBlogDocs">
                        <!-- 
                        <a class="colOneBlogDoc" href="assets/files/" download>
                            <div class="colOneBlogDocColor red">.pdf</div>
                            <div class="colOneBlogDocContainer">
                                <div class="colOneBlogDocContainerTitle txSt">Положение о резиденстве</div>
                                <div class="colOneBlogDocContainerData">
                                    <div class="colOneBlogDocContainerDate">22.03.2023</div>
                                    <div class="colOneBlogDocContainerText"><b>Тип:</b>Положение</div>
                                </div>
                            </div>
                        </a>
                        <a class="colOneBlogDoc" href="assets/files/" download>
                            <div class="colOneBlogDocColor blue">.pdf</div>
                            <div class="colOneBlogDocContainer">
                                <div class="colOneBlogDocContainerTitle txSt">Положение о резиденстве</div>
                                <div class="colOneBlogDocContainerData">
                                    <div class="colOneBlogDocContainerDate">22.03.2023</div>
                                    <div class="colOneBlogDocContainerText"><b>Тип:</b>Положение</div>
                                </div>
                            </div>
                        </a>
                        <a class="colOneBlogDoc" href="assets/files/" download>
                            <div class="colOneBlogDocColor green">.pdf</div>
                            <div class="colOneBlogDocContainer">
                                <div class="colOneBlogDocContainerTitle txSt">Положение о резиденстве</div>
                                <div class="colOneBlogDocContainerData">
                                    <div class="colOneBlogDocContainerDate">22.03.2023</div>
                                    <div class="colOneBlogDocContainerText"><b>Тип:</b>Положение</div>
                                </div>
                            </div>
                        </a> -->

                        <a class="colOneBlogDoc" href="assets/files/sport/Календарный план работы ШСК.pdf" download>
                            <div class="colOneBlogDocColor red">.pdf</div>
                            <div class="colOneBlogDocContainer">
                                <div class="colOneBlogDocContainerTitle txSt">Календарный план работы ШСК</div>
                                <div class="colOneBlogDocContainerData">
                                    <div class="colOneBlogDocContainerDate">16.10.2023</div>
                                    <div class="colOneBlogDocContainerText"><b>Тип:</b>Школьный спортивный клуб</div>
                                </div>
                            </div>
                        </a>

                        <a class="colOneBlogDoc" href="assets/files/sport/План_спортивно_массовых_мероприятий_ШСК.pdf" download>
                            <div class="colOneBlogDocColor red">.pdf</div>
                            <div class="colOneBlogDocContainer">
                                <div class="colOneBlogDocContainerTitle txSt">План_спортивно_массовых_мероприятий_ШСК</div>
                                <div class="colOneBlogDocContainerData">
                                    <div class="colOneBlogDocContainerDate">16.10.2023</div>
                                    <div class="colOneBlogDocContainerText"><b>Тип:</b>Школьный спортивный клуб</div>
                                </div>
                            </div>
                        </a>

                        <a class="colOneBlogDoc" href="assets/files/sport/Положение о спортивном клубе.PDF" download>
                            <div class="colOneBlogDocColor red">.pdf</div>
                            <div class="colOneBlogDocContainer">
                                <div class="colOneBlogDocContainerTitle txSt">Положение о спортивном клубе</div>
                                <div class="colOneBlogDocContainerData">
                                    <div class="colOneBlogDocContainerDate">16.10.2023</div>
                                    <div class="colOneBlogDocContainerText"><b>Тип:</b>Школьный спортивный клуб</div>
                                </div>
                            </div>
                        </a>

                        <a class="colOneBlogDoc" href="assets/files/sport/Приказ_о_создании_школьного_спортивного_клуба.PDF" download>
                            <div class="colOneBlogDocColor red">.pdf</div>
                            <div class="colOneBlogDocContainer">
                                <div class="colOneBlogDocContainerTitle txSt">Положение о спортивном клубе</div>
                                <div class="colOneBlogDocContainerData">
                                    <div class="colOneBlogDocContainerDate">16.10.2023</div>
                                    <div class="colOneBlogDocContainerText"><b>Тип:</b>Школьный спортивный клуб</div>
                                </div>
                            </div>
                        </a>
                         
                        <a class="colOneBlogDoc" href="assets/files/sport/Расписание занятий ШСК.pdf" download>
                            <div class="colOneBlogDocColor red">.pdf</div>
                            <div class="colOneBlogDocContainer">
                                <div class="colOneBlogDocContainerTitle txSt">Расписание занятий ШСК</div>
                                <div class="colOneBlogDocContainerData">
                                    <div class="colOneBlogDocContainerDate">16.10.2023</div>
                                    <div class="colOneBlogDocContainerText"><b>Тип:</b>Школьный спортивный клуб</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Pages Main =================-->

@endsection('content')