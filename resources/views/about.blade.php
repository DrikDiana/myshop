@extends('layouts.main')
@section('title','О нас')

@section('content')


<!-- Begin Main Content Area -->
    <main class="main-content">
        <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{asset('images/breadcrumb/bg/1-1-1919x388.jpg')}}">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-12">
                        <div class="breadcrumb-item">
                            <h2 class="breadcrumb-heading">О нас</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-area section-space-top-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-content">
                            <h2 class="about-title">Наша <span>история</span></h2>
                            <p class="about-desc">Анна – это совершенно новый подход к праздникам:</p>

                            <p class="about-desc">Бренд агентства событийных проектов Альтер Эго Групп. Мы оказываем полный спектр услуг в области ивент индустрии с 2012 года.</p>
                            <p class="about-desc">Мини-сказка с необычной атмосферой и приятными впечатлениями  </p>
                            <p class="about-desc">Создадим уют всем</p>
                            <p class="about-desc"></p>В портфолио сотни успешно подготовленных и проведенных фестивалей, корпоративов и тимбилдингов, конференций, 
                            BTL и MICE мероприятий, презентаций, розыгрышей и частных праздников. Ваши отзывы говорят сами за себя! Сегодня мы - опытная и креативная команда,
                             в составе которой настоящие профессионалы своего дела: актеры и каскадеры, ведущие и музыканты, успешные организаторы, сценаристы и режиссёры массовых мероприятий.
                              Масса образов, реквизита и детально воссозданные костюмы разных эпох и тематик. Захватывающие сценарии и умение увлечь зрителя, шоу-программы и головокружительные 
                              трюки, аналогов которым нет в Беларуси. Нас объединяет безграничная любовь к своему делу - созданию фантастически ярких мероприятий и праздников! 
                            Какие бы амбициозные цели и задачи вы не поставили – мы предложим оптимальное решение по достижению любой из них..</p>
                            <div class="about-signature">
                                <img src="{{asset('images/about/icon/2.png'}}" alt="Signature">
                                <img src="{{asset('images/banner/onas.jpg')}}" alt=" ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<!-- Main Content Area End Here -->
@endsection
