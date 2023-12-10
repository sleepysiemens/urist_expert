@extends('Layouts.UserWrapper')
@section('content')
    <div class="glavni-sec">

        <div class="cabinitet-wrap">
            <div class="cabinitet">
                <div class="cabinitet-title">Личный кабинет пользователя</div>
                <div class="cabinitet-card">
                    <img src="images/user-2.png" alt="">
                    <form action="" class="cabinitet-form">
                        <fieldset class="commons-input">
                            <legend>И.Ф.О</legend>
                            <input type="text" placeholder="Мирошниченко Г.И." value="{{auth()->user()->name}}">
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Контакты</legend>
                            <input type="number" placeholder=" 87632123456789" value="{{auth()->user()->phone}}">
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Электронная почта</legend>
                            <input type="text" placeholder="mbg@mail.ru" value="{{auth()->user()->email}}">
                        </fieldset>
                        <button class="content-bnt commons-btn">
                            Изменить
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <h4 class="title">Этапы договора</h4>

        <div class="etap-wrap">
            <div class="etap-card">
                <div class="title">
                    @if($application[0]->stage>=0)
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.4" cx="13.3885" cy="13.6505" r="12.6829" fill="#0B9518"></circle>
                            <circle cx="13.3884" cy="13.651" r="6.82927" fill="white" stroke="#0B9518" stroke-width="1.95122"></circle>
                        </svg>
                    @else
                        <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.4" cx="13.5064" cy="12.8575" r="12.6988" fill="#064570"></circle>
                            <circle cx="13.5063" cy="12.8578" r="6.83781" fill="white" stroke="#064570" stroke-width="1.95366"></circle>
                        </svg>
                    @endif

                    <span>0 этап</span>
                </div>
                <div class="etap-card-title">Регистрация</div>
                <div>
                    1. Дата регистрации: {{auth()->user()->created_at}}
                    Номер телефона:
                    {{auth()->user()->phone}}
                </div>
            </div>
            <div class="etap-card">
                <div class="title">
                    @if($application[0]->stage>=1)
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.4" cx="13.3885" cy="13.6505" r="12.6829" fill="#0B9518"></circle>
                            <circle cx="13.3884" cy="13.651" r="6.82927" fill="white" stroke="#0B9518" stroke-width="1.95122"></circle>
                        </svg>
                    @else
                        <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.4" cx="13.5064" cy="12.8575" r="12.6988" fill="#064570"></circle>
                            <circle cx="13.5063" cy="12.8578" r="6.83781" fill="white" stroke="#064570" stroke-width="1.95366"></circle>
                        </svg>
                    @endif
                    <span>1 этап</span>
                </div>
                <div class="etap-card-title">Сбор документов</div>
                <div>
                    @if(isset($employee[0])){{$employee[0]->name.',<br>'.$employee[0]->phone.',<br>'.$employee[0]->email}}@endif
                </div>
            </div>
            <div class="etap-card">
                <div class="title">
                    @if($application[0]->stage>=2)
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.4" cx="13.3885" cy="13.6505" r="12.6829" fill="#0B9518"></circle>
                            <circle cx="13.3884" cy="13.651" r="6.82927" fill="white" stroke="#0B9518" stroke-width="1.95122"></circle>
                        </svg>
                    @else
                        <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.4" cx="13.5064" cy="12.8575" r="12.6988" fill="#064570"></circle>
                            <circle cx="13.5063" cy="12.8578" r="6.83781" fill="white" stroke="#064570" stroke-width="1.95366"></circle>
                        </svg>
                    @endif
                    <span>2 этап</span>
                </div>
                <div class="etap-card-title">
                    Претензионная
                    работа/подача в суд
                </div>
                <div>
                    @if(isset($employee[0])){{$employee[0]->name.',<br>'.$employee[0]->phone.',<br>'.$employee[0]->email}}@endif
                </div>
            </div>
            <div class="etap-card">
                <div class="title">
                    @if($application[0]->stage>=3)
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.4" cx="13.3885" cy="13.6505" r="12.6829" fill="#0B9518"></circle>
                            <circle cx="13.3884" cy="13.651" r="6.82927" fill="white" stroke="#0B9518" stroke-width="1.95122"></circle>
                        </svg>
                    @else
                        <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.4" cx="13.5064" cy="12.8575" r="12.6988" fill="#064570"></circle>
                            <circle cx="13.5063" cy="12.8578" r="6.83781" fill="white" stroke="#064570" stroke-width="1.95366"></circle>
                        </svg>
                    @endif

                    <span>3 этап</span>
                </div>
                <div class="etap-card-title">
                    Проведение
                    процедуры
                </div>
                <div>
                    @if(isset($employee[0])){{$employee[0]->name.',<br>'.$employee[0]->phone.',<br>'.$employee[0]->email}}@endif
                </div>
            </div>
            <div class="etap-card">
                <div class="title">
                    @if($application[0]->stage>=4)
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.4" cx="13.3885" cy="13.6505" r="12.6829" fill="#0B9518"></circle>
                            <circle cx="13.3884" cy="13.651" r="6.82927" fill="white" stroke="#0B9518" stroke-width="1.95122"></circle>
                        </svg>
                    @else
                        <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.4" cx="13.5064" cy="12.8575" r="12.6988" fill="#064570"></circle>
                            <circle cx="13.5063" cy="12.8578" r="6.83781" fill="white" stroke="#064570" stroke-width="1.95366"></circle>
                        </svg>
                    @endif

                    <span>4 этап</span>
                </div>
                <div class="etap-card-title">
                    Проведение
                    процедуры
                </div>
                <p>
                    @if(isset($employee[0])){{$employee[0]->name.',<br>'.$employee[0]->phone.',<br>'.$employee[0]->email}}@endif
                </p>
            </div>
        </div>

    </div>
@endsection
