<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- DM SANS font -->
    <link rel="stylesheet" href="{{asset('fonts/DM_Sans/stylesheet.css')}}">
    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

<div class="wrapper">

    <header class="header">
        <div class="container">
            <a class="header-logo" href="index.html">
                <img src="images/logo.svg" alt="">
            </a>
            <div class="header-nav">
                <div class="header-search">
                    <input type="text" placeholder="Поиск..." id="search-input">
                    <label for="search-input"><img src="images/icons/search-icons.svg" alt=" heaader search icons "> </label>
                </div>
                <div class="header-right">
                    <img class="header-note" src="images/icons/note-icon.svg" alt=" header note icons">
                    <img class="header-avatar" src="images/header-avatar.svg" alt=" header avatar images">
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="glavnie">
            <div class="container">

                <!-- left sidebar index -->
                <div class="left-sidebar">
                    <a href="index.html">
                        <div class="left-item sidebar-item active">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M7 3C9.20914 3 11 4.79086 11 7C11 9.20914 9.20914 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5ZM17 3C19.2091 3 21 4.79086 21 7C21 9.20914 19.2091 11 17 11C14.7909 11 13 9.20914 13 7C13 4.79086 14.7909 3 17 3ZM17 5C15.8954 5 15 5.89543 15 7C15 8.10457 15.8954 9 17 9C18.1046 9 19 8.10457 19 7C19 5.89543 18.1046 5 17 5ZM11 17C11 14.7909 9.20914 13 7 13C4.79086 13 3 14.7909 3 17C3 19.2091 4.79086 21 7 21C9.20914 21 11 19.2091 11 17ZM5 17C5 15.8954 5.89543 15 7 15C8.10457 15 9 15.8954 9 17C9 18.1046 8.10457 19 7 19C5.89543 19 5 18.1046 5 17ZM17 13C19.2091 13 21 14.7909 21 17C21 19.2091 19.2091 21 17 21C14.7909 21 13 19.2091 13 17C13 14.7909 14.7909 13 17 13ZM17 15C15.8954 15 15 15.8954 15 17C15 18.1046 15.8954 19 17 19C18.1046 19 19 18.1046 19 17C19 15.8954 18.1046 15 17 15Z"
                                      fill="#8F92A1" />
                            </svg>
                            <span>Главная</span>
                        </div>
                    </a>
                    <div class="left-item left-item-stroke sidebar-item left-item-klent">
                        <a href="klient.html">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.5001 5.37C13.4551 5.3625 13.4026 5.3625 13.3576 5.37C12.3226 5.3325 11.4976 4.485 11.4976 3.435C11.4976 2.3625 12.3601 1.5 13.4326 1.5C14.5051 1.5 15.3676 2.37 15.3676 3.435C15.3601 4.485 14.5351 5.3325 13.5001 5.37Z"
                                    stroke="#8F92A1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12.7276 10.8301C13.7551 11.0026 14.8876 10.8226 15.6826 10.2901C16.7401 9.58512 16.7401 8.43012 15.6826 7.72512C14.8801 7.19262 13.7326 7.01262 12.7051 7.19262"
                                    stroke="#8F92A1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M4.47736 5.37C4.52236 5.3625 4.57486 5.3625 4.61986 5.37C5.65486 5.3325 6.47986 4.485 6.47986 3.435C6.47986 2.3625 5.61736 1.5 4.54486 1.5C3.47236 1.5 2.60986 2.37 2.60986 3.435C2.61736 4.485 3.44236 5.3325 4.47736 5.37Z"
                                    stroke="#8F92A1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M5.25008 10.8301C4.22258 11.0026 3.09008 10.8226 2.29508 10.2901C1.23758 9.58512 1.23758 8.43012 2.29508 7.72512C3.09758 7.19262 4.24508 7.01262 5.27258 7.19262"
                                    stroke="#8F92A1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M9.00006 10.9725C8.95506 10.965 8.90256 10.965 8.85756 10.9725C7.82256 10.935 6.99756 10.0875 6.99756 9.03754C6.99756 7.96504 7.86006 7.10254 8.93256 7.10254C10.0051 7.10254 10.8676 7.97254 10.8676 9.03754C10.8601 10.0875 10.0351 10.9425 9.00006 10.9725Z"
                                    stroke="#8F92A1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M6.81754 13.335C5.76004 14.04 5.76004 15.195 6.81754 15.9C8.01754 16.7025 9.98254 16.7025 11.1825 15.9C12.24 15.195 12.24 14.04 11.1825 13.335C9.99004 12.54 8.01754 12.54 6.81754 13.335Z"
                                    stroke="#8F92A1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Документы</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M12.291 6.70743C12.9214 6.07759 12.4754 5 11.5842 5H4.41268C3.52199 5 3.07572 6.07669 3.70525 6.70679L7.28781 10.2926C7.67815 10.6833 8.31132 10.6836 8.70202 10.2932L12.291 6.70743Z"
                                      fill="#8F92A1" fill-opacity="0.4" />
                            </svg>
                        </div>
                    </a>

                    <a href="inventory.html">
                        <p class="left-item-span "><span>Опись имушества</span> <b>254</b></p>
                    </a>
                    <a href="list.html">
                        <p class="left-item-span "><span>Список кредиторов</span> <b>4</b></p>
                    </a>
                    <a href="glavnie.html">
                        <p class="left-item-span "><span>Заявление БФЛ</span> <b>4</b></p>
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
                </div>

                <div class="content-wrap">
                    <div class="content-top">
                        <div class="content-top-left">
                            <button class="back-btn">
                                <svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 1L1 10.5L10 20" stroke="#51526C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <div class="content-top-days">
                                <span>Осталось:</span>
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="9.02253" cy="9.52985" r="9.02985" fill="#00875A"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.02215 15.2757C12.1957 15.2757 14.7684 12.703 14.7684 9.52947C14.7684 6.35589 12.1957 3.7832 9.02215 3.7832C5.84857 3.7832 3.27588 6.35589 3.27588 9.52947C3.27588 12.703 5.84857 15.2757 9.02215 15.2757ZM9.02256 14.1269C11.5614 14.1269 13.6196 12.0687 13.6196 9.52986C13.6196 6.991 11.5614 4.93285 9.02256 4.93285C6.48369 4.93285 4.42554 6.991 4.42554 9.52986C4.42554 12.0687 6.48369 14.1269 9.02256 14.1269ZM9.597 6.65637H8.44775V10.1041H11.3209V8.95488H9.597V6.65637Z" fill="white"/>
                                </svg>
                                <span class="accent-text">90 дней</span>
                            </div>
                        </div>
                        <div class="content-top-right">
                            <div class="content-top-employee-info">
                                <span class="content-top-employee-name">Мирошниченко Г.И.</span>
                                <div class="register-card-content">
                                    <div class="register-card-info">
                                        <span class="register-card-title">Дата регистрации:</span>
                                        <span class="register-card-text">27.06.2023</span>
                                    </div>
                                    <div class="register-card-info">
                                        <span class="register-card-title">Номер телефона:</span>
                                        <span class="register-card-text">+79914221142312</span>
                                    </div>
                                </div>
                            </div>
                            <img src="./images/user-1.png" alt="">
                        </div>
                    </div>
                    <div class="content-head">
                        <div class="content-head-item">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <ellipse opacity="0.4" cx="10.9921" cy="11.2321" rx="8.6515" ry="8.6515" fill="#C2C2C2" />
                                    <ellipse cx="10.9919" cy="11.2322" rx="4.6585" ry="4.6585" fill="white" stroke="#C2C2C2"
                                             stroke-width="1.936" />
                                </svg>
                                <span>1 этап</span>
                            </p>
                            <b>Сбор документов</b>
                        </div>
                        <div class="content-head-item">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <ellipse opacity="0.4" cx="10.9921" cy="11.2321" rx="8.6515" ry="8.6515" fill="#C2C2C2" />
                                    <ellipse cx="10.9919" cy="11.2322" rx="4.6585" ry="4.6585" fill="white" stroke="#C2C2C2"
                                             stroke-width="1.936" />
                                </svg>
                                <span>2 этап</span>
                            </p>
                            <b>
                                Претензионная работа / <br>
                                подача в суд</b>
                        </div>
                        <div class="content-head-item">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <ellipse opacity="0.4" cx="10.9921" cy="11.2321" rx="8.6515" ry="8.6515" fill="#C2C2C2" />
                                    <ellipse cx="10.9919" cy="11.2322" rx="4.6585" ry="4.6585" fill="white" stroke="#C2C2C2"
                                             stroke-width="1.936" />
                                </svg>
                                <span>3 этап</span>
                            </p>
                            <b>Проведение процедуры</b>
                        </div>
                    </div>

                    <div class="content">
                        <form class="input-wrap">

                            <fieldset class="commons-input">
                                <legend>Клиент</legend>
                                <input type="text" placeholder="Мирошниченко Г.И.">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Клиент</legend>
                                <input type="text" placeholder="87632123456789">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Клиент</legend>
                                <input type="text" placeholder="mbg@mail.ru ">
                            </fieldset>

                        </form>

                        <form class="document-input-wrap wrap-reverse">
                            <fieldset class="commons-input">
                                <legend>Ежемесячный платеж</legend>
                                <input type="text" placeholder="14999">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Осталось оплатить</legend>
                                <input type="text" placeholder="149 990">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Оплата для возможности</legend>
                                <input type="number" placeholder="28 998/ 71 995,2">
                            </fieldset>


                            <fieldset class="commons-input">
                                <legend>Цена договора</legend>
                                <input type="number" placeholder="179 988">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Оплачено клиетом</legend>
                                <input type="number" placeholder="28998">
                            </fieldset>

                        </form>

                        <form class="document-input-wrap wrap-reverse">
                            <fieldset class="commons-input">
                                <legend>Фамилия</legend>
                                <input type="text" placeholder="Иванов ">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Имя</legend>
                                <input type="text" placeholder="Иванов ">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Отчество</legend>
                                <input type="text" placeholder="Иванов">
                            </fieldset>


                            <fieldset class="commons-input green-btn">
                                <legend>Количество дней</legend>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M7.99974 14.5544C11.5215 14.5544 14.3764 11.6994 14.3764 8.17772C14.3764 4.65597 11.5215 1.80103 7.99974 1.80103C4.47799 1.80103 1.62305 4.65597 1.62305 8.17772C1.62305 11.6994 4.47799 14.5544 7.99974 14.5544ZM8 13.2791C10.8174 13.2791 13.1013 10.9952 13.1013 8.17775C13.1013 5.36035 10.8174 3.0764 8 3.0764C5.1826 3.0764 2.89864 5.36035 2.89864 8.17775C2.89864 10.9952 5.1826 13.2791 8 13.2791ZM8.63751 4.98941H7.36217V8.81542H10.5505V7.54008H8.63751V4.98941Z"
                                          fill="#00875A" />
                                </svg>
                                <span>90 дней</span>
                            </fieldset>


                            <button class="commons-btn content-bnt">
                                Подача в суд
                            </button>
                        </form>
                        <!-- bu yerda chekkend bo'ladi -->
                        <span class="checked-wrap mb-20">
                <span>Менял ли фамилию?</span>
                <span>
                  <label for="checkbox-1">
                    <input type="radio" id="checkbox-1" hidden name="1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                            stroke="#064570" stroke-width="2.42824" />
                      <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                            fill="white" />
                    </svg>
                  </label>
                  <label for="checkbox-2">
                    <input type="radio" id="checkbox-2" checked hidden name="1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                            stroke="#064570" stroke-width="2.42824" />
                      <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                            fill="white" />
                    </svg>
                  </label>
                </span>
              </span>
                        <!-- bu yerda chekkend bo'ladi -->
                        <form class="document-input-wrap wrap">
                            <fieldset class="commons-input">
                                <legend>Фамилия</legend>
                                <input type="text" placeholder="Иванов ">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Имя</legend>
                                <input type="text" placeholder="Иванов ">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Отчество</legend>
                                <input type="text" placeholder="Иванов">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Серия</legend>
                                <input type="text" placeholder="12345678 ">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Номер паспорта</legend>
                                <input type="text" placeholder="12345678  ">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Кем выдан</legend>
                                <input type="text" placeholder="Иванов">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Дата выдачи</legend>
                                <input type="text" placeholder="12345678">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Код подразделения</legend>
                                <input type="text" placeholder="12345678">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Дата рождения</legend>
                                <input type="text" placeholder="12345678">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Место рождения</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>ИНН</legend>
                                <input type="text" placeholder="12345678">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>СНИЛС</legend>
                                <input type="text" placeholder="13.12.1989">
                            </fieldset>

                        </form>

                        <h4 class="title">Адрес регистрации</h4>
                        <form class="document-input-wrap wrap">

                            <fieldset class="commons-input">
                                <legend>Субъект</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Район</legend>
                                <input type="text" placeholder="12345678">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Город</legend>
                                <input type="text" placeholder="13.12.1989">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Населенный пункт</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Дом</legend>
                                <input type="number" placeholder="125">
                            </fieldset>
                            <fieldset class="commons-input">
                                <legend>Квартира</legend>
                                <input type="number" placeholder="13">
                            </fieldset>
                        </form>
                        <!-- bu yerda chekkend bo'ladi -->
                        <span class="checked-wrap mb-20">
                <span>Адрес фактического места проживания совпадает с местом регистрации ?</span>
                <span>
                  <label for="checkbox-3">
                    <input type="checkbox" id="checkbox-3" checked hidden>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                            stroke="#064570" stroke-width="2.42824" />
                      <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                            fill="white" />
                    </svg>
                  </label>
                </span>
              </span>
                        <!-- bu yerda chekkend bo'ladi -->
                        <h4 class="title">Место фактического проживания</h4>

                        <form class="document-input-wrap wrap">

                            <fieldset class="commons-input">
                                <legend>Субъект</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Район</legend>
                                <input type="text" placeholder="12345678">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Город</legend>
                                <input type="text" placeholder="13.12.1989">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Населенный пункт</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Дом</legend>
                                <input type="number" placeholder="125">
                            </fieldset>
                            <fieldset class="commons-input">
                                <legend>Квартира</legend>
                                <input type="number" placeholder="13">
                            </fieldset>
                        </form>
                        <h4 class="title">Гос услуги</h4>

                        <form class="document-input-wrap wrap">
                            <fieldset class="commons-input">
                                <legend>Логин</legend>
                                <input type="text" placeholder="dkj_media.mail.ru">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Пароль</legend>
                                <input type="password" placeholder="********">
                            </fieldset>

                            <button class="commons-btn">
                                Гос услуги
                            </button>

                            <div class="checked-wrap">
                                <span>У вас есть дети?</span>
                                <span>
                    <label for="checkbox-4">
                      <input type="checkbox" id="checkbox-4" checked hidden>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                            </div>

                            <fieldset class="commons-input">
                                <legend>Сколько у вас детей?</legend>
                                <input type="number" placeholder="3">
                            </fieldset>


                        </form>

                        <div class="document-btn-wrap">
                            <label class="commons-btn-blue upload actives" for="input-file-15">
                                <input class="input-file" hidden id="input-file-15" type="file">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Свидетельство о рождении
                  </span>
                            </label>
                            <label class="commons-btn-blue upload actives" for="input-file-16">
                                <input class="input-file" id="input-file-16" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Свидетельство о рождении
                  </span>
                            </label>
                            <label class="commons-btn-blue upload actives" for="input-file-17">
                                <input class="input-file" id="input-file-17" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
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
                    <label for="checkbox-7">
                      <input type="checkbox" id="checkbox-7" checked hidden>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                            </div>
                            <!-- big -->
                            <label class="commons-btn-blue upload actives" for="input-file-18">
                                <input class="input-file" id="input-file-18" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Свидетельство о заключении брака
                  </span>
                            </label>

                            <label class="commons-btn-blue upload actives" for="input-file-19">
                                <input class="input-file" id="input-file-19" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Свидетельство о заключении брака
                  </span>
                            </label>
                        </div>

                        <div class="document-btn-wrap">
                            <label class="commons-btn-blue upload actives" for="input-file-20">
                                <input class="input-file" id="input-file-20" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Паспорт супруга
                  </span>
                            </label>
                            <label class="commons-btn-blue upload actives" for="input-file-21">
                                <input class="input-file" id="input-file-21" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    СНИЛС
                  </span>
                            </label>
                            <label class="commons-btn-blue upload actives" for="input-file-22">
                                <input class="input-file" id="input-file-22" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
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
                    <label for="checkbox-9">
                      <input type="checkbox" id="checkbox-9" checked hidden>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <label class="commons-btn-blue upload actives" for="input-file-23">
                                <input class="input-file" id="input-file-23" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Трудовая книжка
                  </span>
                            </label>

                            <button class="commons-btn">
                                Заказать
                            </button>
                        </div>

                        <fieldset class="commons-input mb-20 w-100">
                            <legend>Место работы</legend>
                            <input type="text" placeholder="dkj_media.mail.ru">
                        </fieldset>

                        <div class="document-btn-wrap">
                <span class="checked-wrap">
                  <span>Пенсионер?</span>
                  <span>
                    <label for="checkbox-8">
                      <input type="checkbox" id="checkbox-8" checked hidden>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>
                            <label class="commons-btn-blue upload actives" for="input-file-24">
                                <input class="input-file" id="input-file-24" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Пенсионное удостоверение
                  </span>
                            </label>
                        </div>

                        <h4 class="title">Сведения о доходе</h4>

                        <div class="document-btn-wrap">

                            <fieldset class="commons-input">
                                <legend>Доход руб / мес</legend>
                                <input type="number" placeholder="40 000">
                            </fieldset>

                            <label class="commons-btn-blue upload actives" for="input-file-25">
                                <input class="input-file" id="input-file-25" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    2-НДФЛ за 3 года
                  </span>
                            </label>
                            <label class="commons-btn-blue small upload actives" for="input-file-26">
                                <input class="input-file" id="input-file-26" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    ИЛС
                  </span>
                            </label>
                            <label class="commons-btn-blue upload actives" for="input-file-27">
                                <input class="input-file" id="input-file-27" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
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
                    2-НДФЛ за 3 года
                  </span>
                            </button>
                            <button class="commons-btn small">
                  <span>
                    Запросить
                  </span>
                            </button>
                            <button class="commons-btn mw-229">
                  <span>
                    Справка о назнач. пенсиях
                  </span>
                            </button>

                        </div>

                        <h4 class="title">Недвижимое имущество</h4>

                        <div class="document-btn-wrap">
                            <label class="commons-btn-blue upload actives" for="input-file-28">
                                <input class="input-file" id="input-file-28" hidden type="file">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
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

                        <form class=" document-input-wrap"> <!--document-input-wrap-->
                            <span class="checked-wrap">
                  <span>Земельный участок</span>
                  <span>
                    <label for="checkbox-10">
                      <input type="checkbox" id="checkbox-10" hidden checked name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue big upload actives" for="input-file-29">
                                <input class="input-file" id="input-file-29" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Свидетельство о праве <br>
                    собственности
                  </span>
                            </label>

                        </form>

                        <form class=" document-input-wrap"> <!--document-input-wrap-->
                            <span class="checked-wrap">
                  <span>Жилые дома/дачи</span>
                  <span>
                    <label for="checkbox-11">
                      <input type="checkbox" id="checkbox-11" hidden checked name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue big upload actives" for="input-file-30">
                                <input class="input-file" id="input-file-30" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Свидетельство о праве <br>
                    собственности
                  </span>
                            </label>

                        </form>

                        <form class="document-input-wrap wrap">

                            <fieldset class="commons-input">
                                <legend>Субъект</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Район</legend>
                                <input type="text" placeholder="12345678">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Город</legend>
                                <input type="text" placeholder="13.12.1989">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Населенный пункт</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Дом</legend>
                                <input type="number" placeholder="125">
                            </fieldset>
                            <fieldset class="commons-input">
                                <legend>Квартира</legend>
                                <input type="number" placeholder="13">
                            </fieldset>
                        </form>

                        <form class=" document-input-wrap"> <!--document-input-wrap 3-->
                            <span class="checked-wrap">
                  <span>Квартира</span>
                  <span>
                    <label for="checkbox-11">
                      <input type="checkbox" id="checkbox-11" hidden checked name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue big upload actives" for="input-file-31">
                                <input class="input-file" id="input-file-31" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Свидетельство о праве <br>
                    собственности
                  </span>
                            </label>

                        </form>
                        <form class=" document-input-wrap"> <!--document-input-wrap 3-->
                            <span class="checked-wrap">
                  <span>Гараж</span>
                  <span>
                    <label for="checkbox-11">
                      <input type="checkbox" id="checkbox-11" hidden checked name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue big upload actives" for="input-file-32">
                                <input class="input-file" id="input-file-32" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Свидетельство о праве <br>
                    собственности
                  </span>
                            </label>

                        </form>
                        <form class=" document-input-wrap"> <!--document-input-wrap 3 -->
                            <span class="checked-wrap">
                  <span>Иное имущество</span>
                  <span>
                    <label for="checkbox-11">
                      <input type="checkbox" id="checkbox-11" hidden checked name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue big upload actives" for="input-file-33">
                                <input class="input-file" id="input-file-33" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Свидетельство о праве <br>
                    собственности
                  </span>
                            </label>

                        </form>

                        <h4 class="title">Движимое имущество</h4>

                        <div class="document-btn-wrap">
                            <label class="commons-btn-blue upload actives" for="input-file-34">
                                <input class="input-file" id="input-file-34" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
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

                        <form class=" document-input-wrap"> <!--number input-->
                            <span class="checked-wrap">
                  <span>Автомобили грузовые</span>
                  <span>
                    <label for="checkbox-12">
                      <input type="checkbox" id="checkbox-12" checked hidden name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue small upload actives" for="input-file-1">
                                <input class="input-file" type="file" id="input-file-1" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    ПТС
                  </span>
                            </label>

                        </form>

                        <form class="document-input-wrap wrap">

                            <fieldset class="commons-input">
                                <legend>Субъект</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Район</legend>
                                <input type="text" placeholder="12345678">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Город</legend>
                                <input type="text" placeholder="13.12.1989">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Населенный пункт</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Дом</legend>
                                <input type="number" placeholder="125">
                            </fieldset>
                            <fieldset class="commons-input">
                                <legend>Квартира</legend>
                                <input type="number" placeholder="13">
                            </fieldset>
                        </form>

                        <form class=" document-input-wrap"> <!--number input-->
                            <span class="checked-wrap">
                  <span>Автомобили грузовые</span>
                  <span>
                    <label for="checkbox-12">
                      <input type="checkbox" id="checkbox-12" checked hidden name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue small upload actives" for="input-file-2">
                                <input class="input-file" id="input-file-2" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    ПТС
                  </span>
                            </label>

                        </form>
                        <form class=" document-input-wrap"> <!--number input-->
                            <span class="checked-wrap">
                  <span>Автомобили грузовые</span>
                  <span>
                    <label for="checkbox-12">
                      <input type="checkbox" id="checkbox-12" hidden name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue small upload" for="input-file-3">
                                <input class="input-file" id="input-file-3" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    ПТС
                  </span>
                            </label>

                        </form>
                        <form class=" document-input-wrap"> <!--number input-->
                            <span class="checked-wrap">
                  <span>
                    Мототранспортные <br>
                    средства
                  </span>
                  <span>
                    <label for="checkbox-12">
                      <input type="checkbox" id="checkbox-12" checked hidden name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue small upload actives" for="input-file-4">
                                <input class="input-file" id="input-file-4" hidden type="file">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    ПТС
                  </span>
                            </label>

                        </form>
                        <form class=" document-input-wrap"> <!--number input-->
                            <span class="checked-wrap">
                  <span>Сельхоз. техника</span>
                  <span>
                    <label for="checkbox-12">
                      <input type="checkbox" id="checkbox-12" checked hidden name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue small upload actives" for="input-file-5">
                                <input class="input-file" id="input-file-5" hidden type="file">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    ПТС
                  </span>
                            </label>

                        </form>
                        <form class=" document-input-wrap"> <!--number input-->
                            <span class="checked-wrap">
                  <span>Водный транспорт</span>
                  <span>
                    <label for="checkbox-12">
                      <input type="checkbox" id="checkbox-12" checked hidden name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue small upload actives" for="input-file-6">
                                <input class="input-file" id="input-file-6" hidden type="file'">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    ПТС
                  </span>
                            </label>

                        </form>
                        <form class=" document-input-wrap"> <!--number input-->
                            <span class="checked-wrap">
                  <span>Воздушный транспорт</span>
                  <span>
                    <label for="checkbox-12">
                      <input type="checkbox" id="checkbox-12" checked hidden name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue small upload actives" for="input-file-7">
                                <input class="input-file" id="input-file-7" hidden type="file">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    ПТС
                  </span>
                            </label>

                        </form>
                        <form class=" document-input-wrap"> <!--number input-->
                            <span class="checked-wrap">
                  <span>Иное</span>
                  <span>
                    <label for="checkbox-12-0">
                      <input type="checkbox" id="checkbox-12-0" checked hidden name="1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570" stroke="#064570"
                              stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>

                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>

                            <label class="commons-btn-blue small upload actives" for="input-file-7-0">
                                <input class="input-file" id="input-file-7-0" hidden type="file">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    ПТС
                  </span>
                            </label>

                        </form>
                        <h4 class="title">Сведения о счетах в банках и иных кредитных учреждениях</h4>
                        <form class=" document-input-wrap"> <!--number input-->

                            <label class="commons-btn-blue upload actives" for="input-file-35">
                                <input class="input-file" id="input-file-35" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Справка налоговая
                  </span>
                            </label>

                            <button class="commons-btn">Запросить</button>

                            <fieldset class="commons-input ">
                                <legend>Количество</legend>
                                <input type="number" placeholder="3">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>
                        </form>
                        <h4 class="title">Счет №1</h4>
                        <form class="document-input-wrap wrap">
                            <fieldset class="commons-input ">
                                <legend>Наименования банка, Адрес</legend>
                                <input type="number" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input text-input">
                                <legend>Вид и валюта счета</legend>
                                <select name="" id="">
                                    <option value="">Залоговый кредит</option>
                                    <option value="">Кредит</option>
                                    <option value="">Ипотека</option>
                                    <option value="">Займа</option>
                                    <option value="">Залоговый кредит</option>
                                </select>
                                <div class="arrow">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.375 6.75L9 12.375L14.625 6.75" stroke="#51526C" stroke-width="1.125"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Дата открытия</legend>
                                <input type="number" placeholder="21.03.2023">
                            </fieldset>

                            <fieldset class="commons-input ">
                                <legend>Остаток</legend>
                                <input type="number" placeholder="145 000">
                            </fieldset>

                            <label class="commons-btn-blue upload actives" for="input-file-36">
                                <input class="input-file" id="input-file-36" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.7966C10.5034 14.7966 10.0926 14.3858 10.0926 13.879V7.3118L7.11751 10.2869L5.81992 8.98932L11.0102 3.79901L16.2006 8.98932L14.903 10.2869L11.9277 7.31158V13.879C11.9277 14.3858 11.5169 14.7966 11.0101 14.7966ZM5.50497 12.9743H3.66992V16.6444C3.66992 17.6579 4.4915 18.4794 5.50497 18.4794H16.5153C17.5288 18.4794 18.3503 17.6579 18.3503 16.6444V12.9743H16.5153V16.6444H5.50497V12.9743Z"
                                          fill="white" />
                                </svg>
                                <span>Выписка по счету </span>
                            </label>
                        </form>
                        <h4 class="title">Счет №2</h4>
                        <form class="document-input-wrap wrap">
                            <fieldset class="commons-input ">
                                <legend>Наименования банка, Адрес</legend>
                                <input type="number" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input text-input">
                                <legend>Вид и валюта счета</legend>
                                <select name="" id="">
                                    <option value="">Залоговый кредит</option>
                                    <option value="">Кредит</option>
                                    <option value="">Ипотека</option>
                                    <option value="">Займа</option>
                                    <option value="">Залоговый кредит</option>
                                </select>
                                <div class="arrow">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.375 6.75L9 12.375L14.625 6.75" stroke="#51526C" stroke-width="1.125"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Дата открытия</legend>
                                <input type="number" placeholder="21.03.2023">
                            </fieldset>

                            <fieldset class="commons-input ">
                                <legend>Остаток</legend>
                                <input type="number" placeholder="145 000">
                            </fieldset>

                            <label class="commons-btn-blue upload actives" for="input-file-37">
                                <input class="input-file" id="input-file-37" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.7966C10.5034 14.7966 10.0926 14.3858 10.0926 13.879V7.3118L7.11751 10.2869L5.81992 8.98932L11.0102 3.79901L16.2006 8.98932L14.903 10.2869L11.9277 7.31158V13.879C11.9277 14.3858 11.5169 14.7966 11.0101 14.7966ZM5.50497 12.9743H3.66992V16.6444C3.66992 17.6579 4.4915 18.4794 5.50497 18.4794H16.5153C17.5288 18.4794 18.3503 17.6579 18.3503 16.6444V12.9743H16.5153V16.6444H5.50497V12.9743Z"
                                          fill="white" />
                                </svg>
                                <span>Выписка по счету</span>
                            </label>
                        </form>
                        <h4 class="title">Счет №3</h4>
                        <form class="document-input-wrap wrap">
                            <fieldset class="commons-input ">
                                <legend>Наименования банка, Адрес</legend>
                                <input type="number" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input text-input">
                                <legend>Вид и валюта счета</legend>
                                <select name="" id="">
                                    <option value="">Залоговый кредит</option>
                                    <option value="">Кредит</option>
                                    <option value="">Ипотека</option>
                                    <option value="">Займа</option>
                                    <option value="">Залоговый кредит</option>
                                </select>
                                <div class="arrow">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.375 6.75L9 12.375L14.625 6.75" stroke="#51526C" stroke-width="1.125"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Дата открытия</legend>
                                <input type="number" placeholder="21.03.2023">
                            </fieldset>

                            <fieldset class="commons-input ">
                                <legend>Остаток</legend>
                                <input type="number" placeholder="145 000">
                            </fieldset>

                            <label class="commons-btn-blue upload actives" for="input-file-38">
                                <input class="input-file" id="input-file-38" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.7966C10.5034 14.7966 10.0926 14.3858 10.0926 13.879V7.3118L7.11751 10.2869L5.81992 8.98932L11.0102 3.79901L16.2006 8.98932L14.903 10.2869L11.9277 7.31158V13.879C11.9277 14.3858 11.5169 14.7966 11.0101 14.7966ZM5.50497 12.9743H3.66992V16.6444C3.66992 17.6579 4.4915 18.4794 5.50497 18.4794H16.5153C17.5288 18.4794 18.3503 17.6579 18.3503 16.6444V12.9743H16.5153V16.6444H5.50497V12.9743Z"
                                          fill="white" />
                                </svg>
                                <span>Выписка по счету</span>
                            </label>
                        </form>

                        <!-- Сведения о кредиторах  -->
                        <h4 class="title">Сведения о кредиторах</h4>

                        <div class="document-btn-wrap">
                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="1">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>
                        </div>


                        <form class="document-input-wrap wrap">
                            <fieldset class="commons-input ">
                                <legend>Кредитор</legend>
                                <input type="text" placeholder="Иванов М.С ">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Место нахождение</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input text-input">
                                <legend>Вид кредита</legend>
                                <select name="" id="">
                                    <option value="">Залоговый кредит</option>
                                    <option value="">Кредит</option>
                                    <option value="">Ипотека</option>
                                    <option value="">Займа</option>
                                    <option value="">Залоговый кредит</option>
                                </select>
                                <div class="arrow">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.375 6.75L9 12.375L14.625 6.75" stroke="#51526C" stroke-width="1.125"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </fieldset>

                            <fieldset class="commons-input ">
                                <legend>Основание возникнования</legend>
                                <input type="text" placeholder="Иванов М.С ">
                            </fieldset>

                            <fieldset class="commons-input ">
                                <legend>Всего</legend>
                                <input type="text" placeholder="Иванов М.С ">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Задолженность</legend>
                                <input type="text" placeholder="Иванов М.С">
                            </fieldset>

                            <fieldset class="commons-input ">
                                <legend>Штрафы, пеня</legend>
                                <input type="text" placeholder="Иванов М.С ">
                            </fieldset>

                            <label class="commons-btn-blue upload actives" for="input-file-39">
                                <input type="file" class="input-file" hidden id="input-file-39">
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.7966C10.5034 14.7966 10.0926 14.3858 10.0926 13.879V7.3118L7.11751 10.2869L5.81992 8.98932L11.0102 3.79901L16.2006 8.98932L14.903 10.2869L11.9277 7.31158V13.879C11.9277 14.3858 11.5169 14.7966 11.0101 14.7966ZM5.50497 12.9743H3.66992V16.6444C3.66992 17.6579 4.4915 18.4794 5.50497 18.4794H16.5153C17.5288 18.4794 18.3503 17.6579 18.3503 16.6444V12.9743H16.5153V16.6444H5.50497V12.9743Z"
                                          fill="white" />
                                </svg>
                                <span>Выписка по счету</span>
                            </label>
                        </form>

                        <div class="document-btn-wrap">
                <span class="checked-wrap">
                  <span>Шаблон отказ от взаимодействия</span>
                  <span>
                    <label for="checkbox-13">
                      <input type="checkbox" id="checkbox-13" hidden>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>
                            <span class="checked-wrap">
                  <span>Шаблон отзыв ПД</span>
                  <span>
                    <label for="checkbox-14">
                      <input type="checkbox" id="checkbox-14" hidden>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>
                            <span class="checked-wrap">
                  <span>Шаблон истребования к/д</span>
                  <span>
                    <label for="checkbox-15">
                      <input type="checkbox" id="checkbox-15" checked hidden>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <rect x="1.34912" y="2.16064" width="14.5694" height="14.5694" rx="2.42824" fill="#064570"
                              stroke="#064570" stroke-width="2.42824" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M5.84997 8.58682C5.37583 8.11268 4.60709 8.11268 4.13295 8.58682C3.65881 9.06097 3.65881 9.8297 4.13295 10.3038L6.56119 12.7321C7.03533 13.2062 7.80407 13.2062 8.27821 12.7321L13.1347 7.87561C13.6088 7.40147 13.6088 6.63273 13.1347 6.15859C12.6605 5.68444 11.8918 5.68444 11.4177 6.15859L7.4197 10.1565L5.84997 8.58682Z"
                              fill="white" />
                      </svg>
                    </label>
                  </span>
                </span>
                        </div>

                        <form class="document-input-wrap wrap">
                            <fieldset class="commons-input ">
                                <legend>Кредитор</legend>
                                <input type="text" placeholder="Иванов М.С ">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Место нахождение</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input text-input">
                                <legend>Вид кредита</legend>
                                <select name="" id="">
                                    <option value="">Залоговый кредит</option>
                                    <option value="">Кредит</option>
                                    <option value="">Ипотека</option>
                                    <option value="">Займа</option>
                                    <option value="">Залоговый кредит</option>
                                </select>
                                <div class="arrow">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.375 6.75L9 12.375L14.625 6.75" stroke="#51526C" stroke-width="1.125"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </fieldset>

                            <fieldset class="commons-input ">
                                <legend>Основание возникнования</legend>
                                <input type="text" placeholder="Иванов М.С ">
                            </fieldset>

                            <fieldset class="commons-input ">
                                <legend>Основание возникнования</legend>
                                <input type="text" placeholder="Иванов М.С ">
                            </fieldset>

                            <label class="commons-btn-blue big mw-209 upload actives" for="input-file-40">
                                <input class="input-file" id="input-file-40" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.7966C10.5034 14.7966 10.0926 14.3858 10.0926 13.879V7.3118L7.11751 10.2869L5.81992 8.98932L11.0102 3.79901L16.2006 8.98932L14.903 10.2869L11.9277 7.31158V13.879C11.9277 14.3858 11.5169 14.7966 11.0101 14.7966ZM5.50497 12.9743H3.66992V16.6444C3.66992 17.6579 4.4915 18.4794 5.50497 18.4794H16.5153C17.5288 18.4794 18.3503 17.6579 18.3503 16.6444V12.9743H16.5153V16.6444H5.50497V12.9743Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Шаблон об отмене <br>
                    судебного приказа
                  </span>
                            </label>
                        </form>


                        <h4 class="title">Обязательные платежи</h4>
                        <div class="document-btn-wrap">
                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="2">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>
                        </div>


                        <form class="input-wrap pt-0">

                            <fieldset class="commons-input">
                                <legend>Наименование налога</legend>
                                <input type="text" placeholder="Иванов М.С ">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Недоимка</legend>
                                <input type="text" placeholder="Москва">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Вид кредита</legend>
                                <input type="text" placeholder="Залоговый кредит ">
                            </fieldset>

                            <label class="commons-btn-blue big upload actives mw-209" for="input-file-41">
                                <input class="input-file" id="input-file-41" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>Требования налоговой</span>
                            </label>
                        </form>

                        <form action="" class="document-input-wrap wrap">
                            <fieldset class="commons-input">
                                <legend>Сумма основной задолженности</legend>
                                <input type="number" placeholder="100000">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Сумма просроченной</legend>
                                <input type="text" placeholder="1500000">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Штрафы, пени</legend>
                                <input type="number" placeholder="150000">
                            </fieldset>

                            <label class="commons-btn-blue upload actives big mw-209" for="input-file-42">
                                <input class="input-file" id="input-file-42" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Справка об отсутствии <br>
                    ИП</span>
                            </label>

                            <label class="commons-btn-blue upload actives big mw-209" for="input-file-43">
                                <input class="input-file" id="input-file-43" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Гос. пошлина
                  </span>
                            </label>
                            <label class="commons-btn-blue upload actives big mw-209" for="input-file-44">
                                <input class="input-file" id="input-file-44" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
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
                        </form>
                        <h4 class="title">Уведомления кредиторов</h4>
                        <form class="document-btn-wrap">
                            <fieldset class="commons-input number-input">
                                <legend>Количество</legend>
                                <input type="number" placeholder="3">
                                <div class="arrow">
                    <span class="arrow-up">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.75 7.5L6 3.75L2.25 7.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                    <span class="arrow-down">
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.25 4.5L6 8.25L9.75 4.5" stroke="#51526C" stroke-width="0.75" stroke-linecap="round"
                              stroke-linejoin="round" />
                      </svg>
                    </span>
                                </div>
                            </fieldset>
                        </form>

                        <form action="" class="document-input-wrap wrap">
                            <label class="commons-btn-blue upload actives mw-209" for="input-file-45">
                                <input class="input-file" id="input-file-45" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Доказательство справки
                  </span>
                            </label>
                            <label class="commons-btn-blue upload actives mw-209" for="input-file-46">
                                <input class="input-file" id="input-file-46" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Доказательство справки
                  </span>
                            </label>
                            <label class="commons-btn-blue upload actives mw-209" for="input-file-47">
                                <input class="input-file" id="input-file-47" type="file" hidden>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M11.0101 14.6676C10.5034 14.6676 10.0926 14.2568 10.0926 13.7501V7.18283L7.11751 10.158L5.81992 8.86035L11.0102 3.67004L16.2006 8.86035L14.903 10.158L11.9277 7.18262V13.7501C11.9277 14.2568 11.5169 14.6676 11.0101 14.6676ZM5.50497 12.8453H3.66992V16.5154C3.66992 17.5289 4.4915 18.3505 5.50497 18.3505H16.5153C17.5288 18.3505 18.3503 17.5289 18.3503 16.5154V12.8453H16.5153V16.5154H5.50497V12.8453Z"
                                          fill="white" />
                                </svg>
                                <span>
                    Доказательство справки
                  </span>
                            </label>

                            <fieldset class="commons-input">
                                <legend>Арбитражный управляющий</legend>
                                <input type="text" placeholder="Text">
                            </fieldset>

                            <fieldset class="commons-input">
                                <legend>Арбитражный суд</legend>
                                <input type="text" placeholder="Text">
                            </fieldset>

                            <div class="document-btn-wrap">
                                <label class="commons-btn big mw-209" for="input-file-15">
                                    <input class="input-file" hidden id="input-file-15" type="file">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.2346 17.9269L11.2346 15.3083C11.2346 15.3083 11.2346 15.3082 11.2346 15.3081V15.3077H11.3846C11.3841 15.1924 11.4268 15.0811 11.5042 14.9957C11.5816 14.9103 11.6881 14.857 11.8029 14.8462L11.2346 17.9269ZM11.2346 17.9269H3.0625C2.50636 17.9269 2.07308 17.4936 2.07308 16.9375V3.0625C2.07308 2.50635 2.50636 2.07308 3.0625 2.07308H4.31154V9.30769V9.30771C4.31155 9.46989 4.37599 9.62542 4.49067 9.7401L4.59673 9.63404L4.49067 9.7401C4.60535 9.85478 4.76088 9.91921 4.92306 9.91923H4.92308H15.0769H15.0769C15.2391 9.91921 15.3947 9.85478 15.5093 9.7401C15.624 9.62542 15.6884 9.46989 15.6885 9.30771V9.30769V3.30873L11.2346 17.9269ZM14.4654 3.30873C14.4644 3.22806 14.4794 3.14799 14.5094 3.07313C14.5397 2.99793 14.5845 2.92949 14.6414 2.87178C14.6983 2.81407 14.7661 2.76825 14.8409 2.73697L14.8975 2.87229L14.8409 2.73697C14.9156 2.70569 14.9959 2.68958 15.0769 2.68958C15.158 2.68958 15.2382 2.70569 15.313 2.73697C15.3877 2.76825 15.4555 2.81407 15.5124 2.87178C15.5693 2.92949 15.6142 2.99793 15.6444 3.07313L15.5052 3.12906L11.8532 14.6963C11.8519 14.6963 11.8507 14.6962 11.8494 14.6962H15.0769H15.0769C15.2391 14.6962 15.3947 14.7606 15.5093 14.8753C15.624 14.99 15.6884 15.1455 15.6885 15.3077V15.3077V17.9269M14.4654 3.30873V3.30769H14.6154L14.4654 3.30981C14.4654 3.30945 14.4654 3.30909 14.4654 3.30873ZM14.4654 3.30873V8.69615M14.4654 8.69615H5.53462M14.4654 8.69615V8.84615H5.53462V8.69615M14.4654 8.69615H14.6154L15.6885 18.0769M5.53462 8.69615V2.07308M5.53462 8.69615H5.38462V2.07308H5.53462M5.53462 2.07308H16.9375C17.4936 2.07308 17.9269 2.50635 17.9269 3.0625V16.9375C17.9269 17.4936 17.4936 17.9269 16.9375 17.9269H15.6885M5.53462 2.07308V1.92308H16.9375C17.5765 1.92308 18.0769 2.42351 18.0769 3.0625V16.9375C18.0769 17.5765 17.5765 18.0769 16.9375 18.0769H15.6885M15.6885 17.9269V18.0769M15.6885 17.9269H15.5385V15.3077C15.5384 15.1853 15.4898 15.0679 15.4033 14.9813C15.3167 14.8948 15.1993 14.8462 15.0769 14.8462L15.6885 18.0769M3.0625 0.85C1.84525 0.85 0.85 1.84525 0.85 3.0625V16.9375C0.85 18.1548 1.84525 19.15 3.0625 19.15H16.9375C18.1547 19.15 19.15 18.1548 19.15 16.9375V3.0625C19.15 1.84525 18.1547 0.85 16.9375 0.85H3.0625ZM12.4577 15.9192H14.4654V17.9269H12.4577V15.9192Z" fill="white" stroke="white" stroke-width="0.3"/>
                                    </svg>

                                    <span>
                      Сохранить
                    </span>
                                </label>
                                <label class="commons-btn big mw-209" for="input-file-16">
                                    <input class="input-file" id="input-file-16" type="file" hidden>

                                    <span>
                      Выгрузить все документы
                    </span>
                                </label>
                                <label class="commons-btn big mw-209" for="input-file-17">
                                    <input class="input-file" id="input-file-17" type="file" hidden>

                                    <span>
                      Следующий этап
                    </span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- right sidebar -->
                <div class="right-sidebar document-sidebar">
                    <div class="document-btns">
                        <button class="commons-btn-154 active">Паспорт</butuon>
                            <button class="commons-btn-154">ИНН</button>
                            <button class="commons-btn-154">СНИЛС</button>
                            <button class="commons-btn-154">Трудовая книжка</button>
                            <button class="commons-btn-154">Свидетельство о брака</button>
                            <button class="commons-btn-154">Свидетельство о брака</button>
                    </div>
                    <div><span>Scan-1001.jpg</span><span><a href="#"><u>Download</u></a></span></div>
                    <div class="document-img">
                        <img src="images/document-img].svg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


<script src="js/main.js"></script>
</body>

</html>
