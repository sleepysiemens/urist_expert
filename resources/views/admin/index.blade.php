@extends('Layouts.EmployeeWrapper')
@section('content')

            <div class="glavni-sec">

                <h4 class="title">Клиенты</h4>

                <div class="etap-wrap">
                    <!--0-->
                    <div class="etap-section">
                        <div class="etap-card">
                            <div class="title">
                                <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.4" cx="13.5064" cy="12.8575" r="12.6988" fill="#064570"></circle>
                                    <circle cx="13.5063" cy="12.8578" r="6.83781" fill="white" stroke="#064570" stroke-width="1.95366"></circle>
                                </svg>
                                <span>0 этап</span>
                            </div>
                            <div class="etap-card-title">Регистрация</div>
                        </div>

                        @foreach($applications as $application)

                            @if($application->stage == 0)

                                <div class="etap-user-card">
                                    <div class="register-card">
                                        <div class="register-card-user">
                                            <img src="{{asset('images/reg-img.png')}}" alt="">
                                            <a href="{{ route('admin.documents.create', $application->id) }}" class="commons-btn">Добавить клиента</a>
                                        </div>
                                        <div class="register-card-content">
                                            <div class="register-card-info">
                                                <span class="register-card-title">Дата регистрации:</span>
                                                <span class="register-card-text">{{date("d.m.Y",strtotime($application->created_at))}}</span>
                                            </div>
                                            <div class="register-card-info">
                                                <span class="register-card-title">Номер телефона:</span>
                                                <span class="register-card-text">{{$application->phone}}</span>
                                            </div>
                                            @if($application->employee_id!==NULL)
                                                <div class="register-card-info">
                                                    <span class="register-card-title">Сотрудник:</span>
                                                    <span class="register-card-text">
                                                        @foreach($users as $user)
                                                            @if($user->id==$application->employee_id)
                                                                {{$user->name}}
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                </div>
                                            @endif

                                        </div>
                                        <div class="card-tooltip">
                                            <button class="card-tooltip-btn">
                                                <svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9.5" cy="1.5" r="1.5" fill="#064570"/>
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="#064570"/>
                                                    <circle cx="5.5" cy="1.5" r="1.5" fill="#064570"/>
                                                </svg>
                                            </button>
                                            <div class="card-tooltip-content">
                                                <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.66683 5.37516V7.12516C6.66683 8.5835 6.0835 9.16683 4.62516 9.16683H2.87516C1.41683 9.16683 0.833496 8.5835 0.833496 7.12516V5.37516C0.833496 3.91683 1.41683 3.3335 2.87516 3.3335H4.62516C6.0835 3.3335 6.66683 3.91683 6.66683 5.37516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.16683 2.87516V4.62516C9.16683 6.0835 8.5835 6.66683 7.12516 6.66683H6.66683V5.37516C6.66683 3.91683 6.0835 3.3335 4.62516 3.3335H3.3335V2.87516C3.3335 1.41683 3.91683 0.833496 5.37516 0.833496H7.12516C8.5835 0.833496 9.16683 1.41683 9.16683 2.87516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    Дублировать</button>
                                                <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.75 2.49154C7.3625 2.35404 5.96667 2.2832 4.575 2.2832C3.75 2.2832 2.925 2.32487 2.1 2.4082L1.25 2.49154" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M3.5415 2.071L3.63317 1.52516C3.69984 1.12933 3.74984 0.833496 4.454 0.833496H5.54567C6.24984 0.833496 6.304 1.146 6.3665 1.52933L6.45817 2.071" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.85433 3.80859L7.5835 8.00443C7.53766 8.65859 7.50016 9.16693 6.33766 9.16693H3.66266C2.50016 9.16693 2.46266 8.65859 2.41683 8.00443L2.146 3.80859" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M4.3042 6.875H5.6917" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M3.9585 5.2085H6.04183" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    Удалить</button>

                                                <a href="{{route('admin.application.add_employee', $application->id)}}"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.66683 5.37516V7.12516C6.66683 8.5835 6.0835 9.16683 4.62516 9.16683H2.87516C1.41683 9.16683 0.833496 8.5835 0.833496 7.12516V5.37516C0.833496 3.91683 1.41683 3.3335 2.87516 3.3335H4.62516C6.0835 3.3335 6.66683 3.91683 6.66683 5.37516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.16683 2.87516V4.62516C9.16683 6.0835 8.5835 6.66683 7.12516 6.66683H6.66683V5.37516C6.66683 3.91683 6.0835 3.3335 4.62516 3.3335H3.3335V2.87516C3.3335 1.41683 3.91683 0.833496 5.37516 0.833496H7.12516C8.5835 0.833496 9.16683 1.41683 9.16683 2.87516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    Назначить сотрудника
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            @endif


                        @endforeach

                    </div>
                    <!--/0-->

                    <!--1-->
                    <div class="etap-section">
                        <div class="etap-card">
                            <div class="title">
                                <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.4" cx="13.5064" cy="12.8575" r="12.6988" fill="#064570" />
                                    <circle cx="13.5063" cy="12.8578" r="6.83781" fill="white" stroke="#064570"
                                            stroke-width="1.95366" />
                                </svg>
                                <span>1 этап</span>
                            </div>
                            <div class="etap-card-title">Сбор документов</div>
                        </div>
                        @foreach($applications as $application)
                            @if($application->stage == 1)
                                <a href="{{route('admin.documents.edit', $application->id)}}" class="etap-user-card">
                                    <div class="cabinitet-card">
                                        <img src="{{asset('images/user-1.png')}}" alt="">
                                        <form action="" class="cabinitet-form">
                                            <fieldset class="commons-input">
                                                <legend>И.Ф.О</legend>
                                                <input type="text" placeholder="Петров И. С.">
                                            </fieldset>
                                            <fieldset class="commons-input">
                                                <legend>Контакты</legend>
                                                <input type="text" placeholder="+79914221142312">
                                            </fieldset>
                                            <fieldset class="commons-input">
                                                <legend>Электронная почта</legend>
                                                <input type="text" placeholder="p@gmail.com">
                                            </fieldset>
                                            <button class="content-bnt commons-btn">
                                                Выгрузить все документы
                                            </button>
                                        </form>
                                        <div class="card-tooltip">
                                            <button class="card-tooltip-btn">
                                                <svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9.5" cy="1.5" r="1.5" fill="#064570"/>
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="#064570"/>
                                                    <circle cx="5.5" cy="1.5" r="1.5" fill="#064570"/>
                                                </svg>
                                            </button>
                                            <div class="card-tooltip-content">
                                                <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.66683 5.37516V7.12516C6.66683 8.5835 6.0835 9.16683 4.62516 9.16683H2.87516C1.41683 9.16683 0.833496 8.5835 0.833496 7.12516V5.37516C0.833496 3.91683 1.41683 3.3335 2.87516 3.3335H4.62516C6.0835 3.3335 6.66683 3.91683 6.66683 5.37516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.16683 2.87516V4.62516C9.16683 6.0835 8.5835 6.66683 7.12516 6.66683H6.66683V5.37516C6.66683 3.91683 6.0835 3.3335 4.62516 3.3335H3.3335V2.87516C3.3335 1.41683 3.91683 0.833496 5.37516 0.833496H7.12516C8.5835 0.833496 9.16683 1.41683 9.16683 2.87516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    Дублировать</button>
                                                <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.75 2.49154C7.3625 2.35404 5.96667 2.2832 4.575 2.2832C3.75 2.2832 2.925 2.32487 2.1 2.4082L1.25 2.49154" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M3.5415 2.071L3.63317 1.52516C3.69984 1.12933 3.74984 0.833496 4.454 0.833496H5.54567C6.24984 0.833496 6.304 1.146 6.3665 1.52933L6.45817 2.071" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.85433 3.80859L7.5835 8.00443C7.53766 8.65859 7.50016 9.16693 6.33766 9.16693H3.66266C2.50016 9.16693 2.46266 8.65859 2.41683 8.00443L2.146 3.80859" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M4.3042 6.875H5.6917" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M3.9585 5.2085H6.04183" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    Удалить</button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <br>
                            @endif
                        @endforeach
                    </div>
                    <!--/1-->
                    <!--2-->
                    <div class="etap-section">
                        <div class="etap-card">
                            <div class="title">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse opacity="0.4" cx="16.1836" cy="16.2847" rx="12.6831" ry="12.6829" fill="#C2C2C2" />
                                    <ellipse cx="16.1836" cy="16.2848" rx="6.82937" ry="6.82927" fill="white" stroke="#C2C2C2"
                                             stroke-width="1.95122" />
                                </svg>
                                <span>2 этап</span>
                            </div>
                            <div class="etap-card-title">
                                Претензионная <br>
                                работа/подача в суд
                            </div>

                        </div>
                        @foreach($applications as $application)
                            @if($application->stage == 2)
                                <div class="etap-user-card">
                            <div class="cabinitet-card">
                                <img src="{{asset('images/user-1.png')}}" alt="">
                                <form action="" class="cabinitet-form">
                                    <fieldset class="commons-input">
                                        <legend>И.Ф.О</legend>
                                        <input type="text" placeholder="Петров И. С.">
                                    </fieldset>
                                    <fieldset class="commons-input">
                                        <legend>Контакты</legend>
                                        <input type="text" placeholder="+79914221142312">
                                    </fieldset>
                                    <fieldset class="commons-input">
                                        <legend>Электронная почта</legend>
                                        <input type="text" placeholder="p@gmail.com">
                                    </fieldset>
                                    <button class="content-bnt commons-btn">
                                        Выгрузить все документы
                                    </button>
                                </form>
                                <div class="card-tooltip">
                                    <button class="card-tooltip-btn">
                                        <svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="9.5" cy="1.5" r="1.5" fill="#064570"/>
                                            <circle cx="1.5" cy="1.5" r="1.5" fill="#064570"/>
                                            <circle cx="5.5" cy="1.5" r="1.5" fill="#064570"/>
                                        </svg>
                                    </button>
                                    <div class="card-tooltip-content">
                                        <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.66683 5.37516V7.12516C6.66683 8.5835 6.0835 9.16683 4.62516 9.16683H2.87516C1.41683 9.16683 0.833496 8.5835 0.833496 7.12516V5.37516C0.833496 3.91683 1.41683 3.3335 2.87516 3.3335H4.62516C6.0835 3.3335 6.66683 3.91683 6.66683 5.37516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.16683 2.87516V4.62516C9.16683 6.0835 8.5835 6.66683 7.12516 6.66683H6.66683V5.37516C6.66683 3.91683 6.0835 3.3335 4.62516 3.3335H3.3335V2.87516C3.3335 1.41683 3.91683 0.833496 5.37516 0.833496H7.12516C8.5835 0.833496 9.16683 1.41683 9.16683 2.87516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Дублировать</button>
                                        <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.75 2.49154C7.3625 2.35404 5.96667 2.2832 4.575 2.2832C3.75 2.2832 2.925 2.32487 2.1 2.4082L1.25 2.49154" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.5415 2.071L3.63317 1.52516C3.69984 1.12933 3.74984 0.833496 4.454 0.833496H5.54567C6.24984 0.833496 6.304 1.146 6.3665 1.52933L6.45817 2.071" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M7.85433 3.80859L7.5835 8.00443C7.53766 8.65859 7.50016 9.16693 6.33766 9.16693H3.66266C2.50016 9.16693 2.46266 8.65859 2.41683 8.00443L2.146 3.80859" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.3042 6.875H5.6917" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.9585 5.2085H6.04183" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>

                                            Удалить</button>
                                    </div>
                                </div>
                            </div>
                            <div class="cabinitet-card">
                                <img src="{{asset('images/user-1.png')}}" alt="">
                                <form action="" class="cabinitet-form">
                                    <fieldset class="commons-input">
                                        <legend>И.Ф.О</legend>
                                        <input type="text" placeholder="Петров И. С.">
                                    </fieldset>
                                    <fieldset class="commons-input">
                                        <legend>Контакты</legend>
                                        <input type="text" placeholder="+79914221142312">
                                    </fieldset>
                                    <fieldset class="commons-input">
                                        <legend>Электронная почта</legend>
                                        <input type="text" placeholder="p@gmail.com">
                                    </fieldset>
                                    <button class="content-bnt commons-btn">
                                        Выгрузить все документы
                                    </button>
                                </form>
                                <div class="card-tooltip">
                                    <button class="card-tooltip-btn">
                                        <svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="9.5" cy="1.5" r="1.5" fill="#064570"/>
                                            <circle cx="1.5" cy="1.5" r="1.5" fill="#064570"/>
                                            <circle cx="5.5" cy="1.5" r="1.5" fill="#064570"/>
                                        </svg>
                                    </button>
                                    <div class="card-tooltip-content">
                                        <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.66683 5.37516V7.12516C6.66683 8.5835 6.0835 9.16683 4.62516 9.16683H2.87516C1.41683 9.16683 0.833496 8.5835 0.833496 7.12516V5.37516C0.833496 3.91683 1.41683 3.3335 2.87516 3.3335H4.62516C6.0835 3.3335 6.66683 3.91683 6.66683 5.37516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.16683 2.87516V4.62516C9.16683 6.0835 8.5835 6.66683 7.12516 6.66683H6.66683V5.37516C6.66683 3.91683 6.0835 3.3335 4.62516 3.3335H3.3335V2.87516C3.3335 1.41683 3.91683 0.833496 5.37516 0.833496H7.12516C8.5835 0.833496 9.16683 1.41683 9.16683 2.87516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Дублировать</button>
                                        <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.75 2.49154C7.3625 2.35404 5.96667 2.2832 4.575 2.2832C3.75 2.2832 2.925 2.32487 2.1 2.4082L1.25 2.49154" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.5415 2.071L3.63317 1.52516C3.69984 1.12933 3.74984 0.833496 4.454 0.833496H5.54567C6.24984 0.833496 6.304 1.146 6.3665 1.52933L6.45817 2.071" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M7.85433 3.80859L7.5835 8.00443C7.53766 8.65859 7.50016 9.16693 6.33766 9.16693H3.66266C2.50016 9.16693 2.46266 8.65859 2.41683 8.00443L2.146 3.80859" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.3042 6.875H5.6917" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.9585 5.2085H6.04183" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>

                                            Удалить</button>
                                    </div>
                                </div>
                            </div>
                            <div class="cabinitet-card">
                                <img src="{{asset('images/user-1.png')}}" alt="">
                                <form action="" class="cabinitet-form">
                                    <fieldset class="commons-input">
                                        <legend>И.Ф.О</legend>
                                        <input type="text" placeholder="Петров И. С.">
                                    </fieldset>
                                    <fieldset class="commons-input">
                                        <legend>Контакты</legend>
                                        <input type="text" placeholder="+79914221142312">
                                    </fieldset>
                                    <fieldset class="commons-input">
                                        <legend>Электронная почта</legend>
                                        <input type="text" placeholder="p@gmail.com">
                                    </fieldset>
                                    <button class="content-bnt commons-btn">
                                        Выгрузить все документы
                                    </button>
                                </form>
                                <div class="card-tooltip">
                                    <button class="card-tooltip-btn">
                                        <svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="9.5" cy="1.5" r="1.5" fill="#064570"/>
                                            <circle cx="1.5" cy="1.5" r="1.5" fill="#064570"/>
                                            <circle cx="5.5" cy="1.5" r="1.5" fill="#064570"/>
                                        </svg>
                                    </button>
                                    <div class="card-tooltip-content">
                                        <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.66683 5.37516V7.12516C6.66683 8.5835 6.0835 9.16683 4.62516 9.16683H2.87516C1.41683 9.16683 0.833496 8.5835 0.833496 7.12516V5.37516C0.833496 3.91683 1.41683 3.3335 2.87516 3.3335H4.62516C6.0835 3.3335 6.66683 3.91683 6.66683 5.37516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.16683 2.87516V4.62516C9.16683 6.0835 8.5835 6.66683 7.12516 6.66683H6.66683V5.37516C6.66683 3.91683 6.0835 3.3335 4.62516 3.3335H3.3335V2.87516C3.3335 1.41683 3.91683 0.833496 5.37516 0.833496H7.12516C8.5835 0.833496 9.16683 1.41683 9.16683 2.87516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Дублировать</button>
                                        <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.75 2.49154C7.3625 2.35404 5.96667 2.2832 4.575 2.2832C3.75 2.2832 2.925 2.32487 2.1 2.4082L1.25 2.49154" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.5415 2.071L3.63317 1.52516C3.69984 1.12933 3.74984 0.833496 4.454 0.833496H5.54567C6.24984 0.833496 6.304 1.146 6.3665 1.52933L6.45817 2.071" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M7.85433 3.80859L7.5835 8.00443C7.53766 8.65859 7.50016 9.16693 6.33766 9.16693H3.66266C2.50016 9.16693 2.46266 8.65859 2.41683 8.00443L2.146 3.80859" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.3042 6.875H5.6917" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.9585 5.2085H6.04183" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>

                                            Удалить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <br>
                            @endif
                        @endforeach
                    </div>
                    <!--/2-->
                    <!--3-->
                    <div class="etap-section">
                        <div class="etap-card">
                            <div class="title">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse opacity="0.4" cx="16.1836" cy="16.2847" rx="12.6831" ry="12.6829" fill="#C2C2C2" />
                                    <ellipse cx="16.1836" cy="16.2848" rx="6.82937" ry="6.82927" fill="white" stroke="#C2C2C2"
                                             stroke-width="1.95122" />
                                </svg>

                                <span>3 этап</span>
                            </div>
                            <div class="etap-card-title">
                                Проведение
                                процедуры
                            </div>
                        </div>

                        @foreach($applications as $application)
                            @if($application->stage == 3)
                                <div class="etap-user-card">
                                    <div class="cabinitet-card">
                                        <img src="{{asset('images/user-1.png')}}" alt="">
                                        <form action="" class="cabinitet-form">
                                            <fieldset class="commons-input">
                                                <legend>И.Ф.О</legend>
                                                <input type="text" placeholder="Петров И. С.">
                                            </fieldset>
                                            <fieldset class="commons-input">
                                                <legend>Контакты</legend>
                                                <input type="text" placeholder="+79914221142312">
                                            </fieldset>
                                            <fieldset class="commons-input">
                                                <legend>Электронная почта</legend>
                                                <input type="text" placeholder="p@gmail.com">
                                            </fieldset>
                                            <button class="content-bnt commons-btn">
                                                Выгрузить все документы
                                            </button>
                                        </form>
                                        <div class="card-tooltip">
                                            <button class="card-tooltip-btn">
                                                <svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9.5" cy="1.5" r="1.5" fill="#064570"/>
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="#064570"/>
                                                    <circle cx="5.5" cy="1.5" r="1.5" fill="#064570"/>
                                                </svg>
                                            </button>
                                            <div class="card-tooltip-content">
                                                <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.66683 5.37516V7.12516C6.66683 8.5835 6.0835 9.16683 4.62516 9.16683H2.87516C1.41683 9.16683 0.833496 8.5835 0.833496 7.12516V5.37516C0.833496 3.91683 1.41683 3.3335 2.87516 3.3335H4.62516C6.0835 3.3335 6.66683 3.91683 6.66683 5.37516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.16683 2.87516V4.62516C9.16683 6.0835 8.5835 6.66683 7.12516 6.66683H6.66683V5.37516C6.66683 3.91683 6.0835 3.3335 4.62516 3.3335H3.3335V2.87516C3.3335 1.41683 3.91683 0.833496 5.37516 0.833496H7.12516C8.5835 0.833496 9.16683 1.41683 9.16683 2.87516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    Дублировать</button>
                                                <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.75 2.49154C7.3625 2.35404 5.96667 2.2832 4.575 2.2832C3.75 2.2832 2.925 2.32487 2.1 2.4082L1.25 2.49154" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M3.5415 2.071L3.63317 1.52516C3.69984 1.12933 3.74984 0.833496 4.454 0.833496H5.54567C6.24984 0.833496 6.304 1.146 6.3665 1.52933L6.45817 2.071" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.85433 3.80859L7.5835 8.00443C7.53766 8.65859 7.50016 9.16693 6.33766 9.16693H3.66266C2.50016 9.16693 2.46266 8.65859 2.41683 8.00443L2.146 3.80859" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M4.3042 6.875H5.6917" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M3.9585 5.2085H6.04183" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    Удалить</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cabinitet-card">
                                        <img src="{{asset('images/user-1.png')}}" alt="">
                                        <form action="" class="cabinitet-form">
                                            <fieldset class="commons-input">
                                                <legend>И.Ф.О</legend>
                                                <input type="text" placeholder="Петров И. С.">
                                            </fieldset>
                                            <fieldset class="commons-input">
                                                <legend>Контакты</legend>
                                                <input type="text" placeholder="+79914221142312">
                                            </fieldset>
                                            <fieldset class="commons-input">
                                                <legend>Электронная почта</legend>
                                                <input type="text" placeholder="p@gmail.com">
                                            </fieldset>
                                            <button class="content-bnt commons-btn">
                                                Выгрузить все документы
                                            </button>
                                        </form>
                                        <div class="card-tooltip">
                                            <button class="card-tooltip-btn">
                                                <svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9.5" cy="1.5" r="1.5" fill="#064570"/>
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="#064570"/>
                                                    <circle cx="5.5" cy="1.5" r="1.5" fill="#064570"/>
                                                </svg>
                                            </button>
                                            <div class="card-tooltip-content">
                                                <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.66683 5.37516V7.12516C6.66683 8.5835 6.0835 9.16683 4.62516 9.16683H2.87516C1.41683 9.16683 0.833496 8.5835 0.833496 7.12516V5.37516C0.833496 3.91683 1.41683 3.3335 2.87516 3.3335H4.62516C6.0835 3.3335 6.66683 3.91683 6.66683 5.37516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.16683 2.87516V4.62516C9.16683 6.0835 8.5835 6.66683 7.12516 6.66683H6.66683V5.37516C6.66683 3.91683 6.0835 3.3335 4.62516 3.3335H3.3335V2.87516C3.3335 1.41683 3.91683 0.833496 5.37516 0.833496H7.12516C8.5835 0.833496 9.16683 1.41683 9.16683 2.87516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    Дублировать</button>
                                                <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.75 2.49154C7.3625 2.35404 5.96667 2.2832 4.575 2.2832C3.75 2.2832 2.925 2.32487 2.1 2.4082L1.25 2.49154" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M3.5415 2.071L3.63317 1.52516C3.69984 1.12933 3.74984 0.833496 4.454 0.833496H5.54567C6.24984 0.833496 6.304 1.146 6.3665 1.52933L6.45817 2.071" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.85433 3.80859L7.5835 8.00443C7.53766 8.65859 7.50016 9.16693 6.33766 9.16693H3.66266C2.50016 9.16693 2.46266 8.65859 2.41683 8.00443L2.146 3.80859" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M4.3042 6.875H5.6917" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M3.9585 5.2085H6.04183" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    Удалить</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cabinitet-card">
                                        <img src="{{asset('images/user-1.png')}}" alt="">
                                        <form action="" class="cabinitet-form">
                                            <fieldset class="commons-input">
                                                <legend>И.Ф.О</legend>
                                                <input type="text" placeholder="Петров И. С.">
                                            </fieldset>
                                            <fieldset class="commons-input">
                                                <legend>Контакты</legend>
                                                <input type="text" placeholder="+79914221142312">
                                            </fieldset>
                                            <fieldset class="commons-input">
                                                <legend>Электронная почта</legend>
                                                <input type="text" placeholder="p@gmail.com">
                                            </fieldset>
                                            <button class="content-bnt commons-btn">
                                                Выгрузить все документы
                                            </button>
                                        </form>
                                        <div class="card-tooltip">
                                            <button class="card-tooltip-btn">
                                                <svg width="11" height="3" viewBox="0 0 11 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9.5" cy="1.5" r="1.5" fill="#064570"/>
                                                    <circle cx="1.5" cy="1.5" r="1.5" fill="#064570"/>
                                                    <circle cx="5.5" cy="1.5" r="1.5" fill="#064570"/>
                                                </svg>
                                            </button>
                                            <div class="card-tooltip-content">
                                                <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.66683 5.37516V7.12516C6.66683 8.5835 6.0835 9.16683 4.62516 9.16683H2.87516C1.41683 9.16683 0.833496 8.5835 0.833496 7.12516V5.37516C0.833496 3.91683 1.41683 3.3335 2.87516 3.3335H4.62516C6.0835 3.3335 6.66683 3.91683 6.66683 5.37516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M9.16683 2.87516V4.62516C9.16683 6.0835 8.5835 6.66683 7.12516 6.66683H6.66683V5.37516C6.66683 3.91683 6.0835 3.3335 4.62516 3.3335H3.3335V2.87516C3.3335 1.41683 3.91683 0.833496 5.37516 0.833496H7.12516C8.5835 0.833496 9.16683 1.41683 9.16683 2.87516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    Дублировать</button>
                                                <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.75 2.49154C7.3625 2.35404 5.96667 2.2832 4.575 2.2832C3.75 2.2832 2.925 2.32487 2.1 2.4082L1.25 2.49154" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M3.5415 2.071L3.63317 1.52516C3.69984 1.12933 3.74984 0.833496 4.454 0.833496H5.54567C6.24984 0.833496 6.304 1.146 6.3665 1.52933L6.45817 2.071" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M7.85433 3.80859L7.5835 8.00443C7.53766 8.65859 7.50016 9.16693 6.33766 9.16693H3.66266C2.50016 9.16693 2.46266 8.65859 2.41683 8.00443L2.146 3.80859" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M4.3042 6.875H5.6917" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M3.9585 5.2085H6.04183" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    Удалить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            @endif
                        @endforeach

                    </div>
                </div>

            </div>
@endsection

@section('right_sidebar')

    <div class="right-sidebar">
        <span class="cabinet-employee-title">Кабинет Сотрудника</span>
        <div class="cabinet-sidebar-employee">
            <div class="cabinet-employee-content">
                <img class="cabinet-employee-img" src="{{asset('images/user-1.png')}}" alt="">
                <div class="cabinet-employee-info">
                    <span class="cabinet-employee-name">{{auth()->user()->name}}</span>
                    <span class="cabinet-employee-email">{{auth()->user()->email}}</span>
                </div>
            </div>
            <a href="{{route('logout')}}" class="commons-btn">Выход</a>
        </div>
    </div>

@endsection
