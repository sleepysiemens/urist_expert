@extends('Layouts.EmployeeWrapper')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('js/show_hide.js')}}"></script>

    <form class="content-wrap" action="{{route('admin.documents.update', $document[0]->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <input type="hidden" name="application_id" value="{{$application->id}}">
        <div class="content-top">
            <a href="{{route('admin.main.index')}}" class="content-top-left">
                <div class="back-btn">
                    <svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 1L1 10.5L10 20" stroke="#51526C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div class="content-top-days">
                    <span>Осталось:</span>
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="9.02253" cy="9.52985" r="9.02985" fill="#00875A"></circle>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.02215 15.2757C12.1957 15.2757 14.7684 12.703 14.7684 9.52947C14.7684 6.35589 12.1957 3.7832 9.02215 3.7832C5.84857 3.7832 3.27588 6.35589 3.27588 9.52947C3.27588 12.703 5.84857 15.2757 9.02215 15.2757ZM9.02256 14.1269C11.5614 14.1269 13.6196 12.0687 13.6196 9.52986C13.6196 6.991 11.5614 4.93285 9.02256 4.93285C6.48369 4.93285 4.42554 6.991 4.42554 9.52986C4.42554 12.0687 6.48369 14.1269 9.02256 14.1269ZM9.597 6.65637H8.44775V10.1041H11.3209V8.95488H9.597V6.65637Z" fill="white"></path>
                    </svg>
                    @php
                        $now = time();
                        $your_date = strtotime($document[0]->created_at);
                        $your_date = strtotime('+90 days', $your_date);
                        $datediff = $your_date - $now;
                        $days=floor($datediff / (60 * 60 * 24));;
                    @endphp
                    <span class="accent-text">{{$days}} дней</span>
                </div>
            </a>
            <div class="content-top-right">
                <div class="content-top-employee-info">
                    <span class="content-top-employee-name">{{$application->fio}}</span>
                    <div class="register-card-content">
                        <div class="register-card-info">
                            <span class="register-card-title">Дата регистрации:</span>
                            <span class="register-card-text">{{date("d.m.Y",strtotime($application->created_at))}}</span>
                        </div>
                        <div class="register-card-info">
                            <span class="register-card-title">Номер телефона:</span>
                            <span class="register-card-text">{{$application->phone}}</span>
                        </div>
                    </div>
                </div>
                <img src="{{asset('images/user-1.png')}}" alt="">
            </div>
        </div>
        <div class="content-head">
            <a href="{{route('admin.documents.edit', $application->id)}}" class="content-head-item @if($stage==1) content-head-item-active @endif ">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <ellipse opacity="0.4" cx="10.9921" cy="11.2321" rx="8.6515" ry="8.6515" fill="#C2C2C2"></ellipse>
                        <ellipse cx="10.9919" cy="11.2322" rx="4.6585" ry="4.6585" fill="white" stroke="#C2C2C2" stroke-width="1.936"></ellipse>
                    </svg>
                    <span>1 этап</span>
                </p>
                <b>Сбор документов</b>
            </a>
            <a href="@if($application->stage>1) {{route('admin.documents.inventory', $application->id)}} @endif" class="content-head-item @if($stage==2) content-head-item-active @endif">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <ellipse opacity="0.4" cx="10.9921" cy="11.2321" rx="8.6515" ry="8.6515" fill="#C2C2C2"></ellipse>
                        <ellipse cx="10.9919" cy="11.2322" rx="4.6585" ry="4.6585" fill="white" stroke="#C2C2C2" stroke-width="1.936"></ellipse>
                    </svg>
                    <span>2 этап</span>
                </p>
                <b>
                    Претензионная работа / <br>
                    подача в суд</b>
            </a>
            <div class="content-head-item">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <ellipse opacity="0.4" cx="10.9921" cy="11.2321" rx="8.6515" ry="8.6515" fill="#C2C2C2"></ellipse>
                        <ellipse cx="10.9919" cy="11.2322" rx="4.6585" ry="4.6585" fill="white" stroke="#C2C2C2" stroke-width="1.936"></ellipse>
                    </svg>
                    <span>3 этап</span>
                </p>
                <b>Проведение процедуры</b>
            </div>
        </div>

        <div class="content">
            <div class="input-wrap">

                <fieldset class="commons-input">
                    <legend>Клиент ФИО</legend>
                    <input type="text" name="fio" value="{{$document[0]->fio}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Клиент Телефон</legend>
                    <input type="text" name="email" value="{{$document[0]->phone}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Клиент Email</legend>
                    <input type="text" name="email" value="{{$document[0]->email}}">
                </fieldset>

            </div>

            <div class="document-input-wrap wrap-reverse">
                <fieldset class="commons-input">
                    <legend>Ежемесячный платеж</legend>
                    <input type="number" name="month_pay" value="{{$document[0]->month_pay}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Осталось оплатить</legend>
                    <input type="text" name="remains" value="{{$document[0]->remains}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Оплата для возможности</legend>
                    <input type="text" name="may_pay" placeholder="28 998/ 71 995,2" value="{{$document[0]->may_pay}}">
                </fieldset>


                <fieldset class="commons-input">
                    <legend>Цена договора</legend>
                    <input type="number" name="contract_price" placeholder="179 988" value="{{$document[0]->contract_price}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Оплачено клиетом</legend>
                    <input type="number" name="payed" placeholder="28998" value="{{$document[0]->payed}}">
                </fieldset>

            </div>

            <div class="document-input-wrap wrap" >
                <fieldset class="commons-input">
                    <legend>Фамилия</legend>
                    <input type="text" name="current_surname" placeholder="Иванов" value="{{$current_passport[0]->surname}}" required>
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Имя</legend>
                    <input type="text" name="current_name" placeholder="Иванов" value="{{$current_passport[0]->name}}" required>
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Отчество</legend>
                    <input type="text" name="current_parent_name" placeholder="Иванов" value="{{$current_passport[0]->parent_name}}" required>
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Серия</legend>
                    <input type="text" name="current_passport_serial" placeholder="12345678" value="{{$current_passport[0]->serial}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Номер паспорта</legend>
                    <input type="text" name="current_passport_number" placeholder="12345678" value="{{$current_passport[0]->number}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Кем выдан</legend>
                    <input type="text" name="current_passport_kem" placeholder="Иванов" value="{{$current_passport[0]->kem}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Дата выдачи</legend>
                    <input type="date" name="current_date_of_issue" placeholder="12345678" value="{{$current_passport[0]->date_of_issue}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Код подразделения</legend>
                    <input type="text" name="current_department_code" placeholder="12345678" value="{{$current_passport[0]->department_code}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Дата рождения</legend>
                    <input type="date" name="current_date_of_birth" class="current_date_of_birth" placeholder="12345678" value="{{$current_passport[0]->date_of_birth}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Место рождения</legend>
                    <input type="text" name="current_place_of_birth" placeholder="Москва" value="{{$current_passport[0]->place_of_birth}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>ИНН</legend>
                    <input type="text" name="current_inn" placeholder="12345678" value="{{$current_passport[0]->inn}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>СНИЛС</legend>
                    <input type="text" name="current_snils" placeholder="13.12.1989" value="{{$current_passport[0]->snils}}">
                </fieldset>


            <fieldset class="commons-input green-btn">
                    <legend>Количество дней</legend>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99974 14.5544C11.5215 14.5544 14.3764 11.6994 14.3764 8.17772C14.3764 4.65597 11.5215 1.80103 7.99974 1.80103C4.47799 1.80103 1.62305 4.65597 1.62305 8.17772C1.62305 11.6994 4.47799 14.5544 7.99974 14.5544ZM8 13.2791C10.8174 13.2791 13.1013 10.9952 13.1013 8.17775C13.1013 5.36035 10.8174 3.0764 8 3.0764C5.1826 3.0764 2.89864 5.36035 2.89864 8.17775C2.89864 10.9952 5.1826 13.2791 8 13.2791ZM8.63751 4.98941H7.36217V8.81542H10.5505V7.54008H8.63751V4.98941Z" fill="#00875A"></path>
                    </svg>
                    <span>{{$days}} дней</span>
                </fieldset>


                <button class="commons-btn content-bnt">
                    Подача в суд
                </button>
            </div>
            <!-- bu yerda chekkend bo'ladi -->
            <span class="checked-wrap mb-20">
                <span>Менял ли фамилию?</span>
                <span>Да
                  <label for="surname-checkbox-1">
                    <input type="radio" id="surname-checkbox-1" hidden="" @if($document[0]->surname_is_changed==1) checked @endif name="surname_is_changed" value="1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                    </svg>
                  </label>Нет
                  <label for="surname-checkbox-2">
                    <input type="radio" id="surname-checkbox-2" @if($document[0]->surname_is_changed==0) checked @endif hidden="" name="surname_is_changed" value="0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                    </svg>
                  </label>
                </span>
              </span>
            <!-- bu yerda chekkend bo'ladi -->

            <div id="surname-div" @if($document[0]->surname_is_changed==0) class="hide" @endif >
                <div class="document-input-wrap wrap" >
                    <fieldset class="commons-input">
                        <legend>Фамилия</legend>
                        <input type="text" name="old_surname" placeholder="Иванов" value="@if(isset($old_passport[0]->surname)){{$old_passport[0]->surname}}@endif">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Имя</legend>
                        <input type="text" name="old_name" placeholder="Иванов" value="@if(isset($old_passport[0]->name)){{$old_passport[0]->name}}@endif">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Отчество</legend>
                        <input type="text" name="old_parent_name" placeholder="Иванов" value="@if(isset($old_passport[0]->parent_name)){{$old_passport[0]->parent_name}}@endif">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Серия</legend>
                        <input type="text" name="old_passport_serial" placeholder="12345678" value="@if(isset($old_passport[0]->serial)){{$old_passport[0]->serial}}@endif">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Номер паспорта</legend>
                        <input type="text" name="old_passport_number" placeholder="12345678" value="@if(isset($old_passport[0]->number)){{$old_passport[0]->number}}@endif">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Кем выдан</legend>
                        <input type="text" name="old_passport_kem" placeholder="Иванов" value="@if(isset($old_passport[0]->kem)){{$old_passport[0]->kem}}@endif">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Дата выдачи</legend>
                        <input type="date" name="old_date_of_issue" placeholder="12345678" value="@if(isset($old_passport[0]->date_of_issue)){{$old_passport[0]->date_of_issue}} @endif">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Код подразделения</legend>
                        <input type="text" name="old_department_code" placeholder="12345678" value="@if(isset($old_passport[0]->department_code)){{$old_passport[0]->department_code}} @endif">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Дата рождения</legend>
                        <input type="date" name="old_date_of_birth" class="old_date_of_birth" placeholder="12345678" value="@if(isset($old_passport[0]->date_of_birth)){{$old_passport[0]->date_of_birth}}@endif">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Место рождения</legend>
                        <input type="text" name="old_place_of_birth" placeholder="Москва" value="@if(isset($old_passport[0]->place_of_birth)){{$old_passport[0]->place_of_birth}} @endif">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>ИНН</legend>
                        <input type="text" name="old_inn" placeholder="12345678" value="@if(isset($old_passport[0]->inn)){{$old_passport[0]->inn}} @endif">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>СНИЛС</legend>
                        <input type="text" name="old_snils" placeholder="13.12.1989" value="@if(isset($old_passport[0]->snils)){{$old_passport[0]->snils}} @endif">
                    </fieldset>

                </div>

            </div>

            <h4 class="title">Адрес регистрации</h4>
            <div class="document-input-wrap wrap">

                <fieldset class="commons-input">
                    <legend>Субъект</legend>
                    <input type="text" name="subject" placeholder="Москва" value="{{$document[0]->subject}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Район</legend>
                    <input type="text" name="region" placeholder="12345678" value="{{$document[0]->region}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Город</legend>
                    <input type="text" name="city" placeholder="13.12.1989" value="{{$document[0]->city}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Населенный пункт</legend>
                    <input type="text" name="locality" placeholder="Москва" value="{{$document[0]->locality}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Улица</legend>
                    <input type="text" name="street" placeholder="Кисловодская" value="{{$document[0]->street}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Дом</legend>
                    <input type="number" name="house" placeholder="125" value="{{$document[0]->house}}">
                </fieldset>
                <fieldset class="commons-input">
                    <legend>Квартира</legend>
                    <input type="number" name="flat" placeholder="13" value="{{$document[0]->flat}}">
                </fieldset>
            </div>
            <!-- bu yerda chekkend bo'ladi -->
            <span class="checked-wrap mb-20">
                <span>Адрес фактического места проживания совпадает с местом регистрации ?</span>
                <span>
                  <label for="address-checkbox">
                    <input type="checkbox" id="address-checkbox" @if($document[0]->address_matches==1) checked @endif hidden="" name="address_matches" value="1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                    </svg>
                  </label>
                </span>
              </span>
            <!-- bu yerda chekkend bo'ladi -->

            <div id="address-div" @if($document[0]->address_matches==1) style="display: none" @endif >
                <h4 class="title" id="div-2">Место фактического проживания</h4>
                <div class="document-input-wrap wrap">

                    <fieldset class="commons-input">
                        <legend>Субъект</legend>
                        <input type="text" name="fact_subject" placeholder="Москва" value="{{$document[0]->fact_subject}}">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Район</legend>
                        <input type="text" name="fact_region" placeholder="12345678" value="{{$document[0]->fact_region}}">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Город</legend>
                        <input type="text" name="fact_city" placeholder="13.12.1989" value="{{$document[0]->fact_city}}">
                    </fieldset>

                    <fieldset class="commons-input">
                        <legend>Населенный пункт</legend>
                        <input type="text" name="fact_locality" placeholder="Москва" value="{{$document[0]->fact_locality}}">
                    </fieldset>
                    <fieldset class="commons-input">
                        <legend>Улица</legend>
                        <input type="string" name="fact_street" placeholder="125" value="{{$document[0]->fact_street}}">
                    </fieldset>
                    <fieldset class="commons-input">
                        <legend>Дом</legend>
                        <input type="number" name="fact_house" placeholder="125" value="{{$document[0]->fact_house}}">
                    </fieldset>
                    <fieldset class="commons-input">
                        <legend>Квартира</legend>
                        <input type="number" name="fact_flat" placeholder="13" value="{{$document[0]->fact_flat}}">
                    </fieldset>
                </div>
            </div>

            <h4 class="title">Гос услуги</h4>

            <div class="document-input-wrap wrap">
                <fieldset class="commons-input">
                    <legend>Логин</legend>
                    <input type="text" name="gos_uslugi_login" placeholder="dkj_media.mail.ru" value="{{$document[0]->gos_uslugi_login}}">
                </fieldset>

                <fieldset class="commons-input" style="position: relative">
                    <legend>Пароль</legend>
                    <input type="password" id="gos_uslugi_password" name="gos_uslugi_password" placeholder="********" value="{{$document[0]->gos_uslugi_password}}">
                    <a id="show-password" style="position: absolute; right: 0; top: 0; bottom: 0" id="show-password">показать</a>
                </fieldset>

                <a href="https://esia.gosuslugi.ru/login/" target="_blank" class="commons-btn">
                    Гос услуги
                </a>

                <div class="checked-wrap">
                    <span>У вас есть дети?</span>
                    <span>
                    <label for="children-checkbox">
                      <input type="checkbox" id="children-checkbox" @if($document[0]->have_children==1) checked @endif hidden="" name="have_children" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </div>

                <div id="children-div" @if($document[0]->have_children==0) style="display: none" @endif >
                    <fieldset class="commons-input">
                        <legend>Сколько у вас детей?</legend>
                        <input type="number" name="children_amount" placeholder="3" id="children-input" value="{{$document[0]->children_amount}}">
                    </fieldset>
                </div>

            </div>

            <div class="document-btn-wrap" id="birth-certificate-div" @if($document[0]->have_children==0) style="display: none" @endif >
                <label class="commons-btn-blue upload actives " for="birth-certificate-input" >
                    <input class="input-file" hidden="" id="birth-certificate-input" name="birth_certificate[]" type="file" @if($document[0]->have_children==1) checked @endif multiple>
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Свидетельство о рождении
                  </span>
                </label>
            </div>

            <div class="document-btn-wrap">
                <div class="checked-wrap">
                    <span>Брак/ разведен менее 3 лет</span>
                    <span>
                    <label for="marriage-checkbox">
                      <input type="checkbox" id="marriage-checkbox" hidden="" name="is_married" value="1" @if($document[0]->is_married==1) checked @endif>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </div>
                <!-- big -->
                <div id="marriage-div-1" @if($document[0]->is_married==0) style="display: none" @endif>
                    <label class="commons-btn-blue upload actives" for="marriage_certificate">
                        <input class="input-file" name="marriage_certificate" id="marriage_certificate" type="file" hidden="">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                        </svg>
                        <span>
                    Свидетельство о заключении брака
                  </span>
                    </label>
                </div>
            </div>

            <div class="document-btn-wrap" @if($document[0]->is_married==0) style="display: none" @endif id="marriage-div-2">
                <label class="commons-btn-blue upload actives" for="spouse_passport">
                    <input class="input-file" id="spouse_passport" name="spouse_passport" type="file" hidden="">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Паспорт супруга
                  </span>
                </label>
                <label class="commons-btn-blue upload actives" for="spouse_snils">
                    <input class="input-file" id="spouse_snils" name="spouse_snils" type="file" hidden="">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    СНИЛС
                  </span>
                </label>
                <label class="commons-btn-blue upload actives" for="spouse_inn">
                    <input class="input-file" id="spouse_inn" name="spouse_inn" type="file" hidden="">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    ИНН
                  </span>
                </label>
            </div>

            <div class="document-btn-wrap">

                <span class="checked-wrap">
                  <span>Работаете официально?</span>
                  <span>
                    <label for="work-checkbox">
                      <input type="checkbox" id="work-checkbox" hidden="" name="is_work_official" value="1" @if($document[0]->is_work_official==1) checked @endif>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>
                <div id="work-div-1" @if($document[0]->is_work_official==0) style="display: none;" @endif >
                    <label class="commons-btn-blue upload actives" for="employment_history">
                        <input class="input-file" id="employment_history" name="employment_history" type="file" hidden="">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                        </svg>
                        <span>
                    Трудовая книжка
                  </span>
                    </label>
                </div>
                <div id="work-div-2" style="display: none;">
                    <button class="commons-btn">
                        Заказать
                    </button>
                </div>
            </div>

            <fieldset class="commons-input mb-20 w-100">
                <legend>Место работы</legend>
                <input type="text" placeholder="dkj_media.mail.ru" name="work_place" value="{{$document[0]->work_place}}">
            </fieldset>
            <fieldset class="commons-input mb-20 w-100">
                <legend>Адрес</legend>
                <input type="text" placeholder="dkj_media.mail.ru" name="work_address" value="{{$document[0]->work_address}}">
            </fieldset>
            <fieldset class="commons-input">
                <legend>Телефон</legend>
                <input type="text" name="work_phone" placeholder="***" value="{{$document[0]->work_phone}}">
            </fieldset>

            <div class="document-btn-wrap">
                <span class="checked-wrap">
                  <span>Пенсионер?</span>
                  <span>
                    <label for="pensioner-checkbox">
                      <input type="checkbox" id="pensioner-checkbox" hidden="" name="is_pensioner" value="1" @if($document[0]->is_pensioner==1) checked @endif>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>
                <div id="pensioner-div" @if($document[0]->is_pensioner==0) style="display: none" @endif >
                    <label class="commons-btn-blue upload actives" for="pensioner_certificate">
                        <input class="input-file" id="pensioner_certificate" name="pensioner_certificate" type="file" hidden="">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                        </svg>
                        <span>
                            Пенсионное удостоверение
                        </span>
                    </label>
                </div>
            </div>

            <h4 class="title">Сведения о доходе</h4>

            <div class="document-btn-wrap">

                <fieldset class="commons-input">
                    <legend>Доход руб / мес</legend>
                    <input type="number" placeholder="40 000" name="income" value="{{$document[0]->income}}">
                </fieldset>

                <label class="commons-btn-blue upload actives" for="2_ndfl">
                    <input class="input-file" id="2_ndfl" name="2_ndfl" type="file" hidden="">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    2-НДФЛ за 3 года
                  </span>
                </label>
                <label class="commons-btn-blue small upload actives" for="ils">
                    <input class="input-file" id="ils" name="ils" type="file" hidden="">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    ИЛС
                  </span>
                </label>
                <label class="commons-btn-blue upload actives" for="appointment_certificate_pensions">
                    <input class="input-file" id="appointment_certificate_pensions" name="appointment_certificate_pensions" type="file" hidden="">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Справка о назнач. пенсиях
                  </span>
                </label>

            </div>

            <div class="document-btn-wrap">

                <div class="text">
                    Если у вас нет документа, нажмите кнопку «Запросить» под документом, чтобы получать его.
                </div>

                <button class="commons-btn">
                  <span>
                    Запросить
                  </span>
                </button>
                <button class="commons-btn small">
                  <span>
                    Запросить
                  </span>
                </button>
                <button class="commons-btn mw-229">
                  <span>
                    Запросить
                  </span>
                </button>

            </div>

            <h4 class="title">Недвижимое имущество</h4>

            <div class="document-btn-wrap">
                <label class="commons-btn-blue upload actives" for="estate_egrn">
                    <input class="input-file" id="estate_egrn" name="estate_egrn" hidden="" type="file">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Выписка ЕГРН
                  </span>
                </label>

                <button class="commons-btn">
                  <span>
                    Запросить
                  </span>
                </button>

            </div>

            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Земельный участок</span>
                  <span>
                    <label for="have_land_plot">
                      <input type="checkbox" id="have_land_plot" hidden="" @if($document[0]->have_land_plot==1) checked @endif name="have_land_plot" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div  @if($document[0]->land_plot_amount==0) style="display: none" @endif id="land-plot-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="land_plot_amount"  id="land_plots_amount" value="{{$document[0]->land_plot_amount}}" onkeyup="land_plots_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="land_plots_div_{{$i}} @if($i>$document[0]->land_plot_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Наименование</legend>
                            <input type="text" placeholder="Иванов М.С " name="land_plot_name_{{$i}}" @if(isset($land_plots[$i-1])) value="{{$land_plots[$i-1]->name}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="land_plot_type_{{$i}}" @if(isset($land_plots[$i-1])) value="{{$land_plots[$i-1]->type}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Местонахождение</legend>
                            <input type="text" placeholder="Москва" name="land_plot_address_{{$i}}" @if(isset($land_plots[$i-1])) value="{{$land_plots[$i-1]->address}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Площадь</legend>
                            <input type="number" placeholder="100000" name="land_plot_square_{{$i}}" @if(isset($land_plots[$i-1])) value="{{$land_plots[$i-1]->square}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="1500000" name="land_plot_cost_{{$i}}" @if(isset($land_plots[$i-1])) value="{{$land_plots[$i-1]->cost}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="number" placeholder="150000" name="land_plot_deposit_{{$i}}" @if(isset($land_plots[$i-1])) value="{{$land_plots[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="land_plot_certificate_{{$i}}">
                            <input class="input-file" id="land_plot_certificate_{{$i}}" name="land_plot_certificate_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    Свидетельство о праве <br>
                    собственности
                  </span>
                        </label>

                    </div>
                    <br>
                </div>
            @endfor

            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Жилые дома/дачи</span>
                  <span>
                    <label for="have_residential_houses">
                      <input type="checkbox" id="have_residential_houses" hidden="" @if($document[0]->have_residential_houses==1) checked @endif name="have_residential_houses" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div @if($document[0]->residential_houses_amount==0) style="display: none" @endif id="residential_houses-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="residential_houses_amount"  id="residential_houses_amount" value="{{$document[0]->residential_houses_amount}}" onkeyup="residential_houses_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="residential_houses_div_{{$i}} @if($i>$document[0]->residential_houses_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Наименование</legend>
                            <input type="text" placeholder="Иванов М.С " name="residential_houses_name_{{$i}}" @if(isset($residential_houses[$i-1])) value="{{$residential_houses[$i-1]->name}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="residential_houses_type_{{$i}}" @if(isset($residential_houses[$i-1])) value="{{$residential_houses[$i-1]->type}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Местонахождение</legend>
                            <input type="text" placeholder="Москва" name="residential_houses_address_{{$i}}" @if(isset($residential_houses[$i-1])) value="{{$residential_houses[$i-1]->address}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Площадь</legend>
                            <input type="number" placeholder="100000" name="residential_houses_square_{{$i}}" @if(isset($residential_houses[$i-1])) value="{{$residential_houses[$i-1]->square}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="1500000" name="residential_houses_cost_{{$i}}" @if(isset($residential_houses[$i-1])) value="{{$residential_houses[$i-1]->cost}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="number" placeholder="150000" name="residential_houses_deposit_{{$i}}" @if(isset($residential_houses[$i-1])) value="{{$residential_houses[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="residential_houses_certificate_{{$i}}">
                            <input class="input-file" id="residential_houses_certificate_{{$i}}" name="residential_houses_certificate_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    Свидетельство о праве <br>
                    собственности
                  </span>
                        </label>

                    </div>
                    <br>
                </div>
            @endfor

            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Квартиры</span>
                  <span>
                    <label for="have_flats">
                      <input type="checkbox" id="have_flats" hidden="" @if($document[0]->have_flats==1) checked @endif name="have_flats" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div @if($document[0]->flats_amount==0) style="display: none" @endif id="flats-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="flats_amount"  id="flats_amount" value="{{$document[0]->flats_amount}}" onkeyup="flats_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="flats_div_{{$i}} @if($i>$document[0]->flats_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Наименование</legend>
                            <input type="text" placeholder="Иванов М.С " name="flats_name_{{$i}}" @if(isset($flats[$i-1])) value="{{$flats[$i-1]->name}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="flats_type_{{$i}}" @if(isset($flats[$i-1])) value="{{$flats[$i-1]->type}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Местонахождение</legend>
                            <input type="text" placeholder="Москва" name="flats_address_{{$i}}" @if(isset($flats[$i-1])) value="{{$flats[$i-1]->address}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Площадь</legend>
                            <input type="number" placeholder="100000" name="flats_square_{{$i}}" @if(isset($flats[$i-1])) value="{{$flats[$i-1]->square}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="1500000" name="flats_cost_{{$i}}" @if(isset($flats[$i-1])) value="{{$flats[$i-1]->cost}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="number" placeholder="150000" name="flats_deposit_{{$i}}" @if(isset($flats[$i-1])) value="{{$flats[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="flats_certificate_{{$i}}">
                            <input class="input-file" id="flats_certificate_{{$i}}" name="flats_certificate_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    Свидетельство о праве <br>
                    собственности
                  </span>
                        </label>

                    </div>
                    <br>
                </div>
            @endfor

            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Гаражи</span>
                  <span>
                    <label for="have_garages">
                      <input type="checkbox" id="have_garages" hidden="" @if($document[0]->have_garages==1) checked @endif name="have_garages" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div @if($document[0]->garages_amount==0) style="display: none" @endif id="garages-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="garages_amount"  id="garages_amount" value="{{$document[0]->garages_amount}}" onkeyup="garages_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="garages_div_{{$i}} @if($i>$document[0]->garages_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Наименование</legend>
                            <input type="text" placeholder="Иванов М.С " name="garages_name_{{$i}}" @if(isset($garages[$i-1])) value="{{$garages[$i-1]->name}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="garages_type_{{$i}}" @if(isset($garages[$i-1])) value="{{$garages[$i-1]->type}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Местонахождение</legend>
                            <input type="text" placeholder="Москва" name="garages_address_{{$i}}" @if(isset($garages[$i-1])) value="{{$garages[$i-1]->address}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Площадь</legend>
                            <input type="number" placeholder="100000" name="garages_square_{{$i}}" @if(isset($garages[$i-1])) value="{{$garages[$i-1]->square}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="1500000" name="garages_cost_{{$i}}" @if(isset($garages[$i-1])) value="{{$garages[$i-1]->cost}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="number" placeholder="150000" name="garages_deposit_{{$i}}" @if(isset($garages[$i-1])) value="{{$garages[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="garages_certificate_{{$i}}">
                            <input class="input-file" id="garages_certificate_{{$i}}" name="garages_certificate_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    Свидетельство о праве <br>
                    собственности
                  </span>
                        </label>

                    </div>
                    <br>
                </div>
            @endfor

            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Иное имущество</span>
                  <span>
                    <label for="have_another_estate">
                      <input type="checkbox" id="have_another_estate" hidden="" @if($document[0]->have_another_estate==1) checked @endif name="have_another_estate" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div @if($document[0]->another_estate_amount==0) style="display: none" @endif id="another_estate-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="another_estate_amount"  id="another_estate_amount" value="{{$document[0]->another_estate_amount}}" onkeyup="another_estate_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="another_estate_div_{{$i}} @if($i>$document[0]->another_estate_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Наименование</legend>
                            <input type="text" placeholder="Иванов М.С " name="another_estate_name_{{$i}}" @if(isset($another_estate[$i-1])) value="{{$another_estate[$i-1]->name}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="another_estate_type_{{$i}}" @if(isset($another_estate[$i-1])) value="{{$another_estate[$i-1]->type}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Местонахождение</legend>
                            <input type="text" placeholder="Москва" name="another_estate_address_{{$i}}" @if(isset($another_estate[$i-1])) value="{{$another_estate[$i-1]->address}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Площадь</legend>
                            <input type="number" placeholder="100000" name="another_estate_square_{{$i}}" @if(isset($another_estate[$i-1])) value="{{$another_estate[$i-1]->square}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="1500000" name="another_estate_cost_{{$i}}" @if(isset($another_estate[$i-1])) value="{{$another_estate[$i-1]->cost}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="number" placeholder="150000" name="another_estate_deposit_{{$i}}" @if(isset($another_estate[$i-1])) value="{{$another_estate[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="another_estate_certificate_{{$i}}">
                            <input class="input-file" id="another_estate_certificate_{{$i}}" name="another_estate_certificate_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    Свидетельство о праве <br>
                    собственности
                  </span>
                        </label>

                    </div>
                    <br>
                </div>
            @endfor

            <h4 class="title">Движимое имущество</h4>

            <div class="document-btn-wrap">
                <label class="commons-btn-blue upload actives" for="input-file-34">
                    <input class="input-file" id="input-file-34" type="file" hidden="">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Выписка ЕГРН
                  </span>
                </label>

                <button class="commons-btn">

                  <span>
                    Запросить
                  </span>
                </button>

            </div>

            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Автомобили легковые</span>
                  <span>
                    <label for="have_cars">
                      <input type="checkbox" id="have_cars" hidden="" @if($document[0]->have_cars==1) checked @endif name="have_cars" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div @if($document[0]->cars_amount==0) style="display: none" @endif id="cars-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="cars_amount"  id="cars_amount" value="{{$document[0]->cars_amount}}" onkeyup="cars_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="cars_div_{{$i}} @if($i>$document[0]->cars_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Номер</legend>
                            <input type="text" placeholder="Иванов М.С " name="cars_id_number_{{$i}}" @if(isset($cars[$i-1])) value="{{$cars[$i-1]->id_number}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="cars_type_{{$i}}" @if(isset($cars[$i-1])) value="{{$cars[$i-1]->type}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Место хранения</legend>
                            <input type="text" placeholder="Иванов М.С " name="cars_address_{{$i}}" @if(isset($cars[$i-1])) value="{{$cars[$i-1]->address}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="Иванов М.С " name="cars_cost_{{$i}}" @if(isset($cars[$i-1])) value="{{$cars[$i-1]->cost}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="text" placeholder="Иванов М.С " name="cars_deposit_{{$i}}" @if(isset($cars[$i-1])) value="{{$cars[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="cars_pts_{{$i}}">
                            <input class="input-file" id="cars_pts_{{$i}}" name="cars_pts_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    ПТС
                  </span>
                        </label>
                    </div>
                    <br>
                </div>
            @endfor

            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Автомобили грузовые</span>
                  <span>
                    <label for="have_cargo_vehicles">
                      <input type="checkbox" id="have_cargo_vehicles" hidden="" @if($document[0]->have_cargo_vehicles==1) checked @endif name="have_cargo_vehicles" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div @if($document[0]->cargo_vehicles_amount==0) style="display: none" @endif id="cargo_vehicles-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="cargo_vehicles_amount"  id="cargo_vehicles_amount" value="{{$document[0]->cargo_vehicles_amount}}" onkeyup="cargo_vehicles_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="cargo_vehicles_div_{{$i}} @if($i>$document[0]->cargo_vehicles_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Номер</legend>
                            <input type="text" placeholder="Иванов М.С " name="cargo_vehicles_id_number_{{$i}}" @if(isset($cargo_vehicles[$i-1])) value="{{$cargo_vehicles[$i-1]->id_number}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="cargo_vehicles_type_{{$i}}" @if(isset($cargo_vehicles[$i-1])) value="{{$cargo_vehicles[$i-1]->type}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Место хранения</legend>
                            <input type="text" placeholder="Иванов М.С " name="cargo_vehicles_address_{{$i}}" @if(isset($cargo_vehicles[$i-1])) value="{{$cargo_vehicles[$i-1]->address}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="Иванов М.С " name="cargo_vehicles_cost_{{$i}}" @if(isset($cargo_vehicles[$i-1])) value="{{$cargo_vehicles[$i-1]->cost}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="text" placeholder="Иванов М.С " name="cargo_vehicles_deposit_{{$i}}" @if(isset($cargo_vehicles[$i-1])) value="{{$cargo_vehicles[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="cargo_vehicles_pts_{{$i}}">
                            <input class="input-file" id="cargo_vehicles_pts_{{$i}}" name="cargo_vehicles_pts_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    ПТС
                  </span>
                        </label>
                    </div>
                    <br>
                </div>
            @endfor

            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Мототранспортные средства</span>
                  <span>
                    <label for="have_motorized_transport">
                      <input type="checkbox" id="have_motorized_transport" hidden="" @if($document[0]->have_motorized_transport==1) checked @endif name="have_motorized_transport" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div @if($document[0]->motorized_transport_amount==0) style="display: none" @endif id="motorized_transport-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="motorized_transport_amount"  id="motorized_transport_amount" value="{{$document[0]->motorized_transport_amount}}" onkeyup="motorized_transport_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="motorized_transport_div_{{$i}} @if($i>$document[0]->motorized_transport_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Номер</legend>
                            <input type="text" placeholder="Иванов М.С " name="motorized_transport_id_number_{{$i}}" @if(isset($motorized_transport[$i-1])) value="{{$motorized_transport[$i-1]->id_number}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="motorized_transport_type_{{$i}}" @if(isset($motorized_transport[$i-1])) value="{{$motorized_transport[$i-1]->type}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Место хранения</legend>
                            <input type="text" placeholder="Иванов М.С " name="motorized_transport_address_{{$i}}" @if(isset($motorized_transport[$i-1])) value="{{$motorized_transport[$i-1]->address}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="Иванов М.С " name="motorized_transport_cost_{{$i}}" @if(isset($motorized_transport[$i-1])) value="{{$motorized_transport[$i-1]->cost}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="text" placeholder="Иванов М.С " name="motorized_transport_deposit_{{$i}}" @if(isset($motorized_transport[$i-1])) value="{{$motorized_transport[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="motorized_transport_pts_{{$i}}">
                            <input class="input-file" id="motorized_transport_pts_{{$i}}" name="motorized_transport_pts_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    ПТС
                  </span>
                        </label>
                    </div>
                    <br>
                </div>
            @endfor
            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Сельскохозяйственная техника:</span>
                  <span>
                    <label for="have_agricultural_technique">
                      <input type="checkbox" id="have_agricultural_technique" hidden="" @if($document[0]->have_agricultural_technique==1) checked @endif name="have_agricultural_technique" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div @if($document[0]->agricultural_technique_amount==0) style="display: none" @endif id="agricultural_technique-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="agricultural_technique_amount"  id="agricultural_technique_amount" value="{{$document[0]->agricultural_technique_amount}}" onkeyup="agricultural_technique_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="agricultural_technique_div_{{$i}} @if($i>$document[0]->agricultural_technique_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Номер</legend>
                            <input type="text" placeholder="Иванов М.С " name="agricultural_technique_id_number_{{$i}}" @if(isset($agricultural_techique[$i-1])) value="{{$agricultural_techique[$i-1]->id_number}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="agricultural_technique_type_{{$i}}" @if(isset($agricultural_technique[$i-1])) value="{{$agricultural_techique[$i-1]->type}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Место хранения</legend>
                            <input type="text" placeholder="Иванов М.С " name="agricultural_technique_address_{{$i}}" @if(isset($agricultural_techique[$i-1])) value="{{$agricultural_techique[$i-1]->address}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="Иванов М.С " name="agricultural_technique_cost_{{$i}}" @if(isset($agricultural_techique[$i-1])) value="{{$agricultural_techique[$i-1]->cost}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="text" placeholder="Иванов М.С " name="agricultural_technique_deposit_{{$i}}" @if(isset($agricultural_techique[$i-1])) value="{{$agricultural_techique[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="agricultural_technique_pts_{{$i}}">
                            <input class="input-file" id="agricultural_technique_pts_{{$i}}" name="agricultural_technique_pts_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    ПТС
                  </span>
                        </label>
                    </div>
                    <br>
                </div>
            @endfor
            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Водный транспорт:</span>
                  <span>
                    <label for="have_water_transport">
                      <input type="checkbox" id="have_water_transport" hidden="" @if($document[0]->have_water_transport==1) checked @endif name="have_water_transport" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div @if($document[0]->water_transport_amount==0) style="display: none" @endif id="water_transport-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="water_transport_amount"  id="water_transport_amount" value="{{$document[0]->water_transport_amount}}" onkeyup="water_transport_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="water_transport_div_{{$i}} @if($i>$document[0]->water_transport_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Номер</legend>
                            <input type="text" placeholder="Иванов М.С " name="water_transport_id_number_{{$i}}" @if(isset($water_transport[$i-1])) value="{{$water_transport[$i-1]->id_number}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="water_transport_type_{{$i}}" @if(isset($water_transport[$i-1])) value="{{$water_transport[$i-1]->type}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Место хранения</legend>
                            <input type="text" placeholder="Иванов М.С " name="water_transport_address_{{$i}}" @if(isset($water_transport[$i-1])) value="{{$water_transport[$i-1]->address}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="Иванов М.С " name="water_transport_cost_{{$i}}" @if(isset($water_transport[$i-1])) value="{{$water_transport[$i-1]->cost}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="text" placeholder="Иванов М.С " name="water_transport_deposit_{{$i}}" @if(isset($water_transport[$i-1])) value="{{$water_transport[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="water_transport_pts_{{$i}}">
                            <input class="input-file" id="water_transport_pts_{{$i}}" name="water_transport_pts_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    ПТС
                  </span>
                        </label>
                    </div>
                    <br>
                </div>
            @endfor
            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Воздушный транспорт:</span>
                  <span>
                    <label for="have_air_transport">
                      <input type="checkbox" id="have_air_transport" hidden="" @if($document[0]->have_air_transport==1) checked @endif name="have_air_transport" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div @if($document[0]->air_transport_amount==0) style="display: none" @endif id="air_transport-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="air_transport_amount"  id="air_transport_amount" value="{{$document[0]->air_transport_amount}}" onkeyup="air_transport_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="air_transport_div_{{$i}} @if($i>$document[0]->air_transport_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Номер</legend>
                            <input type="text" placeholder="Иванов М.С " name="air_transport_id_number_{{$i}}" @if(isset($air_transport[$i-1])) value="{{$air_transport[$i-1]->id_number}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="air_transport_type_{{$i}}" @if(isset($air_transport[$i-1])) value="{{$air_transport[$i-1]->type}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Место хранения</legend>
                            <input type="text" placeholder="Иванов М.С " name="air_transport_address_{{$i}}" @if(isset($air_transport[$i-1])) value="{{$air_transport[$i-1]->address}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="Иванов М.С " name="air_transport_cost_{{$i}}" @if(isset($air_transport[$i-1])) value="{{$air_transport[$i-1]->cost}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="text" placeholder="Иванов М.С " name="air_transport_deposit_{{$i}}" @if(isset($air_transport[$i-1])) value="{{$air_transport[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="air_transport_pts_{{$i}}">
                            <input class="input-file" id="air_transport_pts_{{$i}}" name="air_transport_pts_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    ПТС
                  </span>
                        </label>
                    </div>
                    <br>
                </div>
            @endfor
            <div class=" document-input-wrap"> <!--document-input-wrap-->
                <span class="checked-wrap">
                  <span>Иные:</span>
                  <span>
                    <label for="have_other_transport">
                      <input type="checkbox" id="have_other_transport" hidden="" @if($document[0]->have_other_transport==1) checked @endif name="have_other_transport" value="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570" stroke-width="2.42824"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z" fill="white"></path>
                      </svg>
                    </label>
                  </span>
                </span>

                <div @if($document[0]->other_transport_amount==0) style="display: none" @endif id="other_transport-div">
                    <fieldset class="commons-input number-input">
                        <legend>Количество</legend>
                        <input type="number" placeholder="1" name="other_transport_amount"  id="other_transport_amount" value="{{$document[0]->other_transport_amount}}" onkeyup="other_transport_amount_func()">
                        <div class="arrow">
                        <span class="arrow-up">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                            <span class="arrow-down">
                          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </span>
                        </div>
                    </fieldset>
                </div>
            </div>
            @for($i=1; $i<=10; $i++)
                <div class="other_transport_div_{{$i}} @if($i>$document[0]->other_transport_amount) hide @endif">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Номер</legend>
                            <input type="text" placeholder="Иванов М.С " name="other_transport_id_number_{{$i}}" @if(isset($other_transports[$i-1])) value="{{$other_transports[$i-1]->id_number}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Вид собственности</legend>
                            <input type="text" placeholder="Иванов М.С " name="other_transport_type_{{$i}}" @if(isset($other_transports[$i-1])) value="{{$other_transports[$i-1]->type}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Место хранения</legend>
                            <input type="text" placeholder="Иванов М.С " name="other_transport_address_{{$i}}" @if(isset($other_transports[$i-1])) value="{{$other_transports[$i-1]->address}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Стоимость</legend>
                            <input type="number" placeholder="Иванов М.С " name="other_transport_cost_{{$i}}" @if(isset($other_transports[$i-1])) value="{{$other_transports[$i-1]->cost}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Сведения о залоге</legend>
                            <input type="text" placeholder="Иванов М.С " name="other_transport_deposit_{{$i}}" @if(isset($other_transports[$i-1])) value="{{$other_transports[$i-1]->deposit}}" @endif>
                        </fieldset>
                    </div>
                    <div class="document-btn-wrap">
                        <label class="commons-btn-blue upload actives" for="other_transport_pts_{{$i}}">
                            <input class="input-file" id="other_transport_pts_{{$i}}" name="other_transport_pts_{{$i}}" hidden="" type="file">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    ПТС
                  </span>
                        </label>
                    </div>
                    <br>
                </div>
            @endfor
            <h4 class="title">Сведения о счетах в банках и иных кредитных учреждениях</h4>
            <div class=" document-input-wrap"> <!--number input-->

                <label class="commons-btn-blue upload actives" for="tax_certificate">
                    <input class="input-file" id="tax_certificate" name="tax_certificate" type="file" hidden="">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Справка налоговая
                  </span>
                </label>

                <button class="commons-btn">Запросить</button>

                <fieldset class="commons-input ">
                    <legend>Количество</legend>
                    <input type="number" placeholder="3" id="bank_accounts_amount" name="bank_accounts_amount" value="{{$document[0]->bank_accounts_amount}}" onkeyup="bank_accounts_amount_func()">
                    <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                        <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                    </div>
                </fieldset>
            </div>

            @for($i=1; $i<=10; $i++)
                <div class="bank_account_div_{{$i}} @if($i>$document[0]->bank_accounts_amount) hide @endif">
                    <h4 class="title">Счет №{{$i}}</h4>
                    <div class="document-input-wrap wrap">
                        <fieldset class="commons-input">
                            <legend>Наименования банка, Адрес</legend>
                            <input type="text" placeholder="Москва" name="bank_accounts_bank_name_{{$i}}" @if(isset($bank_accounts[$i-1])) value="{{$bank_accounts[$i-1]->bank_name}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input text-input">
                            <legend>Вид и валюта счета</legend>
                            <select name="bank_accounts_kind_of_account_{{$i}}" id="">
                                <option @if(isset($bank_accounts[$i-1]) and $bank_accounts[$i-1]->kind_of_account==1) selected @endif value="1">Залоговый кредит</option>
                                <option @if(isset($bank_accounts[$i-1]) and $bank_accounts[$i-1]->kind_of_account==2) selected @endif value="2">Кредит</option>
                                <option @if(isset($bank_accounts[$i-1]) and $bank_accounts[$i-1]->kind_of_account==3) selected @endif value="3">Ипотека</option>
                                <option @if(isset($bank_accounts[$i-1]) and $bank_accounts[$i-1]->kind_of_account==4) selected @endif value="4">Займа</option>
                                <option @if(isset($bank_accounts[$i-1]) and $bank_accounts[$i-1]->kind_of_account==5) selected @endif value="5">Залоговый кредит</option>
                            </select>
                            <div class="arrow">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.375 6.75L9 12.375L14.625 6.75" stroke="#51526C" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Дата открытия</legend>
                            <input type="date" placeholder="21.03.2023" name="bank_accounts_creation_date_{{$i}}" @if(isset($bank_accounts[$i-1])) value="{{$bank_accounts[$i-1]->creation_date}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input ">
                            <legend>Остаток</legend>
                            <input type="number" name="bank_account_rest_{{$i}}" placeholder="145 000" @if(isset($bank_accounts[$i-1])) value="{{$bank_accounts[$i-1]->bank_account_rest}}" @endif>
                        </fieldset>

                        <label class="commons-btn-blue upload actives" for="bank_account_account_statement_{{$i}}">
                            <input class="input-file" id="bank_account_account_statement_{{$i}}" name="bank_account_account_statement_{{$i}}" type="file" hidden="">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.7966C10.5034 14.7966 10.0926 14.3858 10.0926 13.879V7.3118L7.11751 10.2869L5.81992 8.98932L11.0102 3.79901L16.2006 8.98932L14.903 10.2869L11.9277 7.31158V13.879C11.9277 14.3858 11.5169 14.7966 11.0101 14.7966ZM5.50497 12.9743H3.66992V16.6444C3.66992 17.6579 4.4915 18.4794 5.50497 18.4794H16.5153C17.5288 18.4794 18.3503 17.6579 18.3503 16.6444V12.9743H16.5153V16.6444H5.50497V12.9743Z" fill="white"></path>
                            </svg>
                            <span>Выписка по счету </span>
                        </label>
                    </div>
                </div>

            @endfor



            <!-- Сведения о кредиторах  -->
            <h4 class="title">Сведения о кредиторах</h4>

            <div class="document-btn-wrap">
                <fieldset class="commons-input number-input">
                    <legend>Количество</legend>
                    <input type="number" id="creditors_amount" name="creditors_amount" placeholder="1" value="{{$document[0]->creditors_amount}}" onkeyup="creditors_amount_func()">
                    <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                        <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                    </div>
                </fieldset>
            </div>

            @for($i=1; $i<=10; $i++)
                <div class="creditor_div_{{$i}} @if($i>$document[0]->creditors_amount) hide @endif">
                    <h4 class="title">Кредитор №{{$i}}</h4>

                    <div class="document-input-wrap wrap">
                        <fieldset class="commons-input ">
                            <legend>Кредитор № {{$i}}</legend>
                            <input type="text" placeholder="Иванов М.С" name="creditors_name_{{$i}}" @if(isset($creditors[$i-1])) value="{{$creditors[$i-1]->name}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Место нахождение</legend>
                            <input type="text" placeholder="Москва" name="creditors_region_{{$i}}" @if(isset($creditors[$i-1])) value="{{$creditors[$i-1]->region}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input text-input">
                            <legend>Вид кредита</legend>
                            <select name="creditors_kind_of_credit_{{$i}}" id="">
                                <option value="1" @if(isset($creditors[$i-1]) and $creditors[$i-1]->kind_of_account==1) selected @endif>Залоговый кредит</option>
                                <option value="2" @if(isset($creditors[$i-1]) and $creditors[$i-1]->kind_of_account==2) selected @endif>Кредит</option>
                                <option value="3" @if(isset($creditors[$i-1]) and $creditors[$i-1]->kind_of_account==3) selected @endif>Ипотека</option>
                                <option value="4" @if(isset($creditors[$i-1]) and $creditors[$i-1]->kind_of_account==4) selected @endif>Займа</option>
                                <option value="5" @if(isset($creditors[$i-1]) and $creditors[$i-1]->kind_of_account==5) selected @endif>Залоговый кредит</option>
                            </select>
                            <div class="arrow">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.375 6.75L9 12.375L14.625 6.75" stroke="#51526C" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </fieldset>

                        <fieldset class="commons-input ">
                            <legend>Основание возникнования</legend>
                            <input type="text" placeholder="Иванов М.С" name="creditors_statement_{{$i}}" @if(isset($creditors[$i-1])) value="{{$creditors[$i-1]->statement}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input ">
                            <legend>Задолженность</legend>
                            <input type="number" placeholder="Иванов М.С" name="creditors_duty_{{$i}}" @if(isset($creditors[$i-1])) value="{{$creditors[$i-1]->duty}}" @endif>
                        </fieldset>


                        <label class="commons-btn-blue big mw-209 upload actives" for="creditors_file_{{$i}}">
                            <input class="input-file" id="creditors_file_{{$i}}" name="creditors_file_{{$i}}" type="file" hidden="">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.7966C10.5034 14.7966 10.0926 14.3858 10.0926 13.879V7.3118L7.11751 10.2869L5.81992 8.98932L11.0102 3.79901L16.2006 8.98932L14.903 10.2869L11.9277 7.31158V13.879C11.9277 14.3858 11.5169 14.7966 11.0101 14.7966ZM5.50497 12.9743H3.66992V16.6444C3.66992 17.6579 4.4915 18.4794 5.50497 18.4794H16.5153C17.5288 18.4794 18.3503 17.6579 18.3503 16.6444V12.9743H16.5153V16.6444H5.50497V12.9743Z" fill="white"></path>
                            </svg>
                            <span>
                    Шаблон об отмене <br>
                    судебного приказа
                  </span>
                        </label>
                    </div>

                </div>
            @endfor

            <h4 class="title">Денежные обязательства</h4>
            <div class="document-btn-wrap">
                <fieldset class="commons-input number-input">
                    <legend>Количество</legend>
                    <input type="number" id="monetary_obligations_amount" name="monetary_obligations_amount" placeholder="1" value="{{$document[0]->monetary_obligations_amount}}" onkeyup="monetary_obligations_amount_func()">
                    <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                        <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                    </div>
                </fieldset>
            </div>
            @for($i=1; $i<=1; $i++)
                <div class="monetary_obligations_div_{{$i}} hide">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Содержание обязательства</legend>
                            <input type="text" placeholder="Иванов М.С " name="monetary_obligations_content_{{$i}}" @if(isset($monetary_obligations[$i-1])) value="{{$monetary_obligations[$i-1]->content}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Кредитор</legend>
                            <input type="text" placeholder="Иванов М.С " name="monetary_obligations_creditor_{{$i}}" @if(isset($monetary_obligations[$i-1])) value="{{$monetary_obligations[$i-1]->creditor}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Основание возникновения</legend>
                            <input type="text" placeholder="Иванов М.С " name="monetary_obligations_basis_{{$i}}" @if(isset($monetary_obligations[$i-1])) value="{{$monetary_obligations[$i-1]->basis}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>всего</legend>
                            <input type="number" placeholder="Иванов М.С " name="monetary_obligations_total_{{$i}}" @if(isset($monetary_obligations[$i-1])) value="{{$monetary_obligations[$i-1]->total}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>задолженность</legend>
                            <input type="number" placeholder="Иванов М.С " name="monetary_obligations_debt_{{$i}}" @if(isset($monetary_obligations[$i-1])) value="{{$monetary_obligations[$i-1]->debt}}" @endif>
                        </fieldset>
                        <fieldset class="commons-input">
                            <legend>Штрафы</legend>
                            <input type="number" placeholder="Иванов М.С " name="monetary_obligations_fine_{{$i}}" @if(isset($monetary_obligations[$i-1])) value="{{$monetary_obligations[$i-1]->fine}}" @endif>
                        </fieldset>
                    </div>
                </div>
            @endfor

            <h4 class="title">Обязательные платежи</h4>
            <div class="document-btn-wrap">
                <fieldset class="commons-input number-input">
                    <legend>Количество</legend>
                    <input type="number" id="obligatory_payments_amount" name="obligatory_payments_amount" placeholder="1" value="{{$document[0]->obligatory_payments_amount}}" onkeyup="obligatory_payments_amount_func()">
                    <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                        <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                    </div>
                </fieldset>
            </div>
            @for($i=1; $i<=1; $i++)
                <div class="obligatory_payments_div_{{$i}} hide">
                    <div class="input-wrap pt-0">

                        <fieldset class="commons-input">
                            <legend>Наименование налога</legend>
                            <input type="text" placeholder="Иванов М.С " name="obligatory_payments_tax_name_{{$i}}" @if(isset($obligatory_payments[$i-1])) value="{{$obligatory_payments[$i-1]->tax_name}}" @endif>
                        </fieldset>

                        <fieldset class="commons-input">
                            <legend>Недоимка</legend>
                            <input type="text" placeholder="Москва" name="obligatory_arrears_{{$i}}" @if(isset($obligatory_payments[$i-1])) value="{{$obligatory_payments[$i-1]->arrears}}" @endif>
                        </fieldset>


                        <fieldset class="commons-input">
                            <legend>Штрафы, пени</legend>
                            <input type="number" placeholder="150000" name="obligatory_fines_{{$i}}" @if(isset($obligatory_payments[$i-1])) value="{{$obligatory_payments[$i-1]->fines}}" @endif>
                        </fieldset>

                    </div>
                    <div action="" class="document-input-wrap wrap">
                        <label class="commons-btn-blue upload actives big mw-209" for="obligatory_certificate_of_absence_{{$i}}">
                            <input class="input-file" id="obligatory_certificate_of_absence_{{$i}}" name="obligatory_certificate_of_absence_{{$i}}" type="file" hidden="">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    Справка об отсутствии <br>
                    ИП</span>
                        </label>

                        <label class="commons-btn-blue upload actives big mw-209" for="obligatory_state_duty_{{$i}}">
                            <input class="input-file" id="obligatory_state_duty_{{$i}}" name="obligatory_state_duty_{{$i}}" type="file" hidden="">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    Гос. пошлина
                  </span>
                        </label>
                        <label class="commons-btn-blue upload actives big mw-209" for="obligatory_court_deposit_{{$i}}">
                            <input class="input-file" id="obligatory_court_deposit_{{$i}}" name="obligatory_court_deposit_{{$i}}" type="file" hidden="">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                            </svg>
                            <span>
                    Депозит суда
                  </span>
                        </label>
                        <button class="commons-btn big mw-209 ">
                  <span>
                    Запросить
                  </span>
                        </button>
                    </div>
                </div>
            @endfor



            <h4 class="title">Уведомления кредиторов</h4>
            <div class="document-btn-wrap">
                <fieldset class="commons-input number-input">
                    <legend>Количество</legend>
                    <input type="number" placeholder="3" name="creditor_notifications_amount" value="{{$document[0]->creditor_notifications_amount}}">
                    <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                        <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </span>
                    </div>
                </fieldset>
            </div>

            <div action="" class="document-input-wrap wrap">
                <label class="commons-btn-blue upload actives mw-209" for="creditor_notifications_certificate">
                    <input class="input-file" id="creditor_notifications_certificate" name="creditor_notifications_certificate[]" multiple type="file" hidden="">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Доказательство справки
                  </span>
                </label>


                <fieldset class="commons-input">
                    <legend>Арбитражный управляющий</legend>
                    <input type="text" placeholder="Text" name="arbitration_manager" value="{{$document[0]->arbitration_manager}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Арбитражный суд</legend>
                    <input type="text" placeholder="Text" name="arbitration_court" value="{{$document[0]->arbitration_court}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Адрес арбитражного суда</legend>
                    <input type="text" placeholder="Text" name="court_address" value="{{$document[0]->court_address}}">
                </fieldset>

                <div class="document-btn-wrap">
                    <button class="commons-btn big mw-209" for="input-file-15">
                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2346 17.9269L11.2346 15.3083C11.2346 15.3083 11.2346 15.3082 11.2346 15.3081V15.3077H11.3846C11.3841 15.1924 11.4268 15.0811 11.5042 14.9957C11.5816 14.9103 11.6881 14.857 11.8029 14.8462L11.2346 17.9269ZM11.2346 17.9269H3.0625C2.50636 17.9269 2.07308 17.4936 2.07308 16.9375V3.0625C2.07308 2.50635 2.50636 2.07308 3.0625 2.07308H4.31154V9.30769V9.30771C4.31155 9.46989 4.37599 9.62542 4.49067 9.7401L4.59673 9.63404L4.49067 9.7401C4.60535 9.85478 4.76088 9.91921 4.92306 9.91923H4.92308H15.0769H15.0769C15.2391 9.91921 15.3947 9.85478 15.5093 9.7401C15.624 9.62542 15.6884 9.46989 15.6885 9.30771V9.30769V3.30873L11.2346 17.9269ZM14.4654 3.30873C14.4644 3.22806 14.4794 3.14799 14.5094 3.07313C14.5397 2.99793 14.5845 2.92949 14.6414 2.87178C14.6983 2.81407 14.7661 2.76825 14.8409 2.73697L14.8975 2.87229L14.8409 2.73697C14.9156 2.70569 14.9959 2.68958 15.0769 2.68958C15.158 2.68958 15.2382 2.70569 15.313 2.73697C15.3877 2.76825 15.4555 2.81407 15.5124 2.87178C15.5693 2.92949 15.6142 2.99793 15.6444 3.07313L15.5052 3.12906L11.8532 14.6963C11.8519 14.6963 11.8507 14.6962 11.8494 14.6962H15.0769H15.0769C15.2391 14.6962 15.3947 14.7606 15.5093 14.8753C15.624 14.99 15.6884 15.1455 15.6885 15.3077V15.3077V17.9269M14.4654 3.30873V3.30769H14.6154L14.4654 3.30981C14.4654 3.30945 14.4654 3.30909 14.4654 3.30873ZM14.4654 3.30873V8.69615M14.4654 8.69615H5.53462M14.4654 8.69615V8.84615H5.53462V8.69615M14.4654 8.69615H14.6154L15.6885 18.0769M5.53462 8.69615V2.07308M5.53462 8.69615H5.38462V2.07308H5.53462M5.53462 2.07308H16.9375C17.4936 2.07308 17.9269 2.50635 17.9269 3.0625V16.9375C17.9269 17.4936 17.4936 17.9269 16.9375 17.9269H15.6885M5.53462 2.07308V1.92308H16.9375C17.5765 1.92308 18.0769 2.42351 18.0769 3.0625V16.9375C18.0769 17.5765 17.5765 18.0769 16.9375 18.0769H15.6885M15.6885 17.9269V18.0769M15.6885 17.9269H15.5385V15.3077C15.5384 15.1853 15.4898 15.0679 15.4033 14.9813C15.3167 14.8948 15.1993 14.8462 15.0769 14.8462L15.6885 18.0769M3.0625 0.85C1.84525 0.85 0.85 1.84525 0.85 3.0625V16.9375C0.85 18.1548 1.84525 19.15 3.0625 19.15H16.9375C18.1547 19.15 19.15 18.1548 19.15 16.9375V3.0625C19.15 1.84525 18.1547 0.85 16.9375 0.85H3.0625ZM12.4577 15.9192H14.4654V17.9269H12.4577V15.9192Z" fill="white" stroke="white" stroke-width="0.3"></path>
                        </svg>

                        <span>
                      Сохранить
                    </span>
                    </button>
    </form>
                    <label class="commons-btn big mw-209" for="input-file-16">
                        <input class="input-file" id="input-file-16" type="submit" hidden="">

                        <span>
                      Выгрузить все документы
                    </span>
                    </label>
                    <form action="{{route('admin.documents.second_stage', $application->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <button class="commons-btn big mw-209">
                        <span>
                      Следующий этап
                    </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
@endsection

@section('right_sidebar')
    <form action="{{route('admin.documents.add_file', $document[0]->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <input type="hidden" name="application_id" value="{{$application->id}}">
        <input type="hidden" name="fio" value="{{$application->fio}}">
        <button style="display: none" id="file_submit"></button>
        <div class="right-sidebar document-sidebar">
        <div class="document-btns">
            <a class="commons-btn-154 active" id="passport_button">Паспорт</a>
            <a class="commons-btn-154" id="inn_button">ИНН</a>
            <a class="commons-btn-154" id="snils_button">СНИЛС</a>
            <a class="commons-btn-154" id="employment_history_button">Трудовая книжка</a>
            <a class="commons-btn-154" id="marriage_certificate_button">Свидетельство о брака</a>
        </div>

        <div id="passport_info">
            @if($document[0]->passport_file!=NULL)
                <div><span>{{$document[0]->passport_file}}</span><span><a href="#"><u>Download</u></a></span></div>
                <div class="document-img" >
                    <img src="{{asset('user_docs/'.$document[0]->fio.'/passport/'.$document[0]->passport_file)}}" alt="">
                </div>
            @else
                <label class="commons-btn-blue upload actives" for="passport_file">
                    <input class="input-file" id="passport_file" name="passport_file" hidden="" type="file" onchange="this.form.submit()">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Загрузить файл
                  </span>
                </label>
            @endif
        </div>

        <div class="hide" id="inn_info">
            @if($document[0]->inn_file!=NULL)
                <div><span>{{$document[0]->inn_file}}</span><span><a href="#"><u>Download</u></a></span></div>
                <div class="document-img" >
                    <img src="{{asset('user_docs/'.$document[0]->fio.'/inn/'.$document[0]->inn_file)}}" alt="">
                </div>
            @else
                <label class="commons-btn-blue upload actives" for="inn_file">
                    <input class="input-file" id="inn_file" name="inn_file" hidden="" type="file" onchange="this.form.submit()">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Загрузить файл
                  </span>
                </label>
            @endif
        </div>

        <div class="hide" id="snils_info">
            @if($document[0]->snils_file!=NULL)
                <div><span>{{$document[0]->snils_file}}</span><span><a href="#"><u>Download</u></a></span></div>
                <div class="document-img" >
                    <img src="{{asset('user_docs/'.$document[0]->fio.'/snils/'.$document[0]->snils_file)}}" alt="">
                </div>
            @else
                <label class="commons-btn-blue upload actives" for="snils_file">
                    <input class="input-file" id="snils_file" name="snils_file" hidden="" type="file" onchange="this.form.submit()">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Загрузить файл
                  </span>
                </label>
            @endif
        </div>

        <div class="hide" id="employment_history_info">
            @if($document[0]->employment_history!=NULL)
                <div><span>{{$document[0]->employment_history}}</span><span><a href="#"><u>Download</u></a></span></div>
                <div class="document-img" >
                    <img src="{{asset('user_docs/'.$document[0]->fio.'/employment_history/'.$document[0]->employment_history)}}" alt="">
                </div>
            @else
                <label class="commons-btn-blue upload actives" for="employment_history">
                    <input class="input-file" id="employment_history" name="employment_history" hidden="" type="file" onchange="this.form.submit()">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Загрузить файл
                  </span>
                </label>
            @endif
        </div>

        <div class="hide" id="marriage_certificate_info">
            @if($document[0]->marriage_certificate!=NULL)
                <div><span>{{$document[0]->marriage_certificate}}</span><span><a href="#"><u>Download</u></a></span></div>
                <div class="document-img" >
                    <img src="{{asset('user_docs/'.$document[0]->fio.'/marriage_certificate/'.$document[0]->marriage_certificate)}}" alt="">
                </div>
            @else
                <label class="commons-btn-blue upload actives" for="marriage_certificate">
                    <input class="input-file" id="marriage_certificate" name="marriage_certificate" hidden="" type="file" onchange="this.form.submit()">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z" fill="white"></path>
                    </svg>
                    <span>
                    Загрузить файл
                  </span>
                </label>
            @endif
        </div>

    </div>
    </form>
    @endsection


    @section('left-sidebar')
        @if($application->stage>1)
            <a href="document.html">
            <div class="left-item sidebar-item left-item-document">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M4.5835 3.66683H17.4168C17.9231 3.66683 18.3335 4.07723 18.3335 4.5835V17.4168C18.3335 17.9231 17.9231 18.3335 17.4168 18.3335H4.5835C4.07724 18.3335 3.66683 17.9231 3.66683 17.4168V4.5835C3.66683 4.07724 4.07723 3.66683 4.5835 3.66683ZM1.8335 4.5835C1.8335 3.06472 3.06472 1.8335 4.5835 1.8335H17.4168C18.9357 1.8335 20.1668 3.06472 20.1668 4.5835V17.4168C20.1668 18.9357 18.9357 20.1668 17.4168 20.1668H4.5835C3.06472 20.1668 1.8335 18.9357 1.8335 17.4168V4.5835Z"
                          fill="#8F92A1" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M10.9998 11C8.46854 11 6.4165 8.53757 6.4165 5.5H8.24984C8.24984 7.85222 9.77985 9.16667 10.9998 9.16667C12.2198 9.16667 13.7498 7.85222 13.7498 5.5H15.5832C15.5832 8.53757 13.5311 11 10.9998 11Z"
                          fill="#8F92A1" />
                </svg>
                <span>Документы</span>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.291 6.70743C12.9214 6.07759 12.4754 5 11.5842 5H4.41268C3.52199 5 3.07572 6.07669 3.70525 6.70679L7.28781 10.2926C7.67815 10.6833 8.31132 10.6836 8.70202 10.2932L12.291 6.70743Z"
                          fill="#8F92A1" fill-opacity="0.4" />
                </svg>
            </div>
        </a>

        <a href="{{asset(route('admin.documents.inventory', $application->id))}}">
            <p class="left-item-span "><span>Опись имушества</span> <b>
                    {{
                        $document[0]->other_transport_amount+
                        $document[0]->air_transport_amount+
                        $document[0]->water_transport_amount+
                        $document[0]->agricultural_technique_amount+
                        $document[0]->motorized_transport_amount+
                        $document[0]->cargo_vehicles_amount+
                        $document[0]->cars_amount+
                        $document[0]->another_estate_amount+
                        $document[0]->garages_amount+
                        $document[0]->flats_amount+
                        $document[0]->residential_houses_amount+
                        $document[0]->land_plot_amount
                    }}
                </b></p>
        </a>
        <a href="{{asset(route('admin.documents.creditors', $application->id))}}">
            <p class="left-item-span "><span>Список кредиторов</span> <b>{{$document[0]->creditors_amount}}</b></p>
        </a>
        <a href="{{asset(route('admin.documents.bfl', $application->id))}}">
            <p class="left-item-span "><span>Заявление БФЛ</span> <b>1</b></p>
        </a>

        <a href="#">
            <div class="left-item left-item-stroke sidebar-item">
                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.31006 13.7002L8.81006 15.2002L12.8101 11.2002" stroke="#8F92A1" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8 5H12C14 5 14 4 14 3C14 1 13 1 12 1H8C7 1 6 1 6 3C6 5 7 5 8 5Z" stroke="#8F92A1"
                          stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M14 3.02002C17.33 3.20002 19 4.43002 19 9.00002V15C19 19 18 21 13 21H7C2 21 1 19 1 15V9.00002C1 4.44002 2.67 3.20002 6 3.02002"
                        stroke="#8F92A1" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <span>Процедура</span>
            </div>
        </a>

        <a href="#">
            <div class="left-item sidebar-item">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.85714 16.2783H3.42857V18H1.71429V16.2783H0.857143C0.629814 16.2783 0.411797 16.1876 0.251051 16.0262C0.0903058 15.8647 0 15.6458 0 15.4175V2.50485C0 2.27654 0.0903058 2.05758 0.251051 1.89614C0.411797 1.7347 0.629814 1.64401 0.857143 1.64401H6.85714V0.430223C6.85717 0.367743 6.87074 0.306019 6.89692 0.249337C6.92309 0.192656 6.96124 0.142377 7.00871 0.101993C7.05618 0.0616094 7.11183 0.0320887 7.1718 0.0154821C7.23178 -0.00112452 7.29463 -0.00441888 7.356 0.00582779L16.4263 1.52435C16.6264 1.55777 16.8083 1.66141 16.9395 1.81683C17.0707 1.97225 17.1428 2.16938 17.1429 2.37314V4.22653H18V5.94822H17.1429V11.9741H18V13.6958H17.1429V15.5492C17.1428 15.7529 17.0707 15.9501 16.9395 16.1055C16.8083 16.2609 16.6264 16.3646 16.4263 16.398L15.4286 16.565V18H13.7143V16.8525L7.356 17.9165C7.29463 17.9267 7.23178 17.9235 7.1718 17.9068C7.11183 17.8902 7.05618 17.8607 7.00871 17.8203C6.96124 17.7799 6.92309 17.7297 6.89692 17.673C6.87074 17.6163 6.85717 17.5546 6.85714 17.4921V16.2783ZM8.57143 15.9684L15.4286 14.8201V3.10227L8.57143 1.95477V15.9676V15.9684ZM12.4286 11.1133C11.7189 11.1133 11.1429 10.1491 11.1429 8.96116C11.1429 7.7732 11.7189 6.80906 12.4286 6.80906C13.1383 6.80906 13.7143 7.7732 13.7143 8.96116C13.7143 10.1491 13.1383 11.1133 12.4286 11.1133Z"
                        fill="#8F92A1" />
                </svg>
                <span>Кредиторы</span>
            </div>
        </a>
        @endif
    @endsection
