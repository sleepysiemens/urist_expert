@extends('Layouts.EmployeeWrapper')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content-wrap">
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
            <a href="{{route('admin.documents.edit', $application->id)}}" class="content-head-item @if($page==1) content-head-item-active @endif ">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <ellipse opacity="0.4" cx="10.9921" cy="11.2321" rx="8.6515" ry="8.6515" fill="#C2C2C2"></ellipse>
                        <ellipse cx="10.9919" cy="11.2322" rx="4.6585" ry="4.6585" fill="white" stroke="#C2C2C2" stroke-width="1.936"></ellipse>
                    </svg>
                    <span>1 этап</span>
                </p>
                <b>Сбор документов</b>
            </a>
            <a href="{{route('admin.documents.stage_2', $application->id)}}" class="content-head-item @if($page==2) content-head-item-active @endif">
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
            <form class="input-wrap" method="post" action="{{ route('admin.application.update', $application->id) }}">
                @csrf
                @method('PATCH')
                <fieldset class="commons-input">
                    <legend>Клиент</legend>
                    <input type="text" name="fio" placeholder="Мирошниченко Г.И." value="{{$application->fio}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Клиент</legend>
                    <input type="text" name="phone" placeholder="87632123456789" value="{{$application->form}}">
                </fieldset>

                <fieldset class="commons-input">
                    <legend>Клиент</legend>
                    <input type="text" name="email" placeholder="mbg@mail.ru" value="{{$application->email}}">
                </fieldset>

                <a class="content-bnt commons-btn">
                    Написать клиенту
                </a>

            </form>
            <h4 class="title">Опись имущества гражданина</h4>

            <table class="user-information-list">
                <tr>
                    <th colspan="3">
                        <h4 class="title">Информация о гражданине</h4>
                    </th>
                </tr>
                <tr>
                    <td>Фамилия</td>
                    <td class="two-cols">обязательно</td>
                    <td>{{$document[0]->surname}}</td>
                </tr>
                <tr>
                    <td>Имя</td>
                    <td class="two-cols">обязательно</td>
                    <td>{{$document[0]->name}}</td>
                </tr>
                <tr>
                    <td>Отчество</td>
                    <td class="two-cols">при наличии</td>
                    <td>{{$document[0]->parent_name}}</td>
                </tr>
                <tr>
                    <td>В случае изменения фамилии, имени,
                        отчества указать прежние фамилии,
                        имена, отчества</td>
                    <td class="two-cols">обязательно</td>
                    <td>
                        @if(isset($old_passport[0]) and $old_passport[0]->surname!=NULL) {{$old_passport[0]->surname}}@else {{$current_passport->surname}} @endif
                        <br>
                        @if(isset($old_passport[0]) and $old_passport[0]->name!=NULL) {{$old_passport[0]->name}}@else {{$current_passport->name}} @endif
                        <br>
                        @if(isset($old_passport[0]) and $old_passport[0]->parent_name!=NULL) {{$old_passport[0]->parent_name}}@else {{$current_passport->parent_name}} @endif
                    </td>
                </tr>
                <tr>
                    <td>Дата рождения</td>
                    <td class="two-cols">обязательно</td>
                    @php
                        $day_of_birth=date("d", strtotime($current_passport[0]->date_of_birth));
                        $year_of_birth=date("Y", strtotime($current_passport[0]->date_of_birth));
                        $month_of_birth=date("m", strtotime($current_passport[0]->date_of_birth));
                        switch ($month_of_birth)
                        {
                            case '01':
                            $month_of_birth='января';
                            break;
                            case '02':
                            $month_of_birth='февраля';
                            break;
                            case '03':
                            $month_of_birth='марта';
                            break;
                            case '04':
                            $month_of_birth='апреля';
                            break;
                            case '05':
                            $month_of_birth='мая';
                            break;
                            case '06':
                            $month_of_birth='июня';
                            break;
                            case '07':
                            $month_of_birth='июля';
                            break;
                            case '08':
                            $month_of_birth='августа';
                            break;
                            case '09':
                            $month_of_birth='сентября';
                            break;
                            case '10':
                            $month_of_birth='октября';
                            break;
                            case '11':
                            $month_of_birth='ноября';
                            break;
                            case '12':
                            $month_of_birth='декабря';
                            break;
                        }
                    @endphp
                    <td>{{$day_of_birth.' '.$month_of_birth.' '.$year_of_birth}} г.р.</td>
                </tr>
                <tr>
                    <td>Место рождения</td>
                    <td class="two-cols">при наличии</td>
                    <td>{{$current_passport[0]->place_of_birth}}</td>
                </tr>
                <tr>
                    <td>СНИЛС</td>
                    <td class="two-cols">обязательно</td>
                    <td>{{$current_passport[0]->snils}}</td>
                </tr>
                <tr>
                    <td>Фамилия</td>
                    <td class="two-cols">обязательно</td>
                    <td>{{$current_passport[0]->surname}}</td>
                </tr>
                <tr>
                    <td>ИНН</td>
                    <td class="two-cols"></td>
                    <td>{{$current_passport[0]->inn}}</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h4 class="title">Документ, удостоверяющий личность</h4>
                    </td>
                </tr>
                <tr>
                    <td>Вид документа</td>
                    <td class="two-cols">обязательно</td>
                    <td>Паспорт</td>
                </tr>
                <tr>
                    <td>Серия (при наличии) и номер</td>
                    <td class="two-cols">обязательно</td>
                    <td>Серия {{$current_passport[0]->serial}} № {{$current_passport[0]->number}}</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <h4 class="title">Адрес регистрации по месту жительства в Российской Федерации *</h4>
                    </td>
                </tr>
                <tr>
                    <td>Субъект Российской Федерации</td>
                    <td class="two-cols">обязательно</td>
                    <td>{{$document[0]->subject}}</td>
                </tr>
                <tr>
                    <td>Район</td>
                    <td class="two-cols">при наличии</td>
                    <td>{{$document[0]->region}}</td>
                </tr>
                <tr>
                    <td>Город</td>
                    <td class="two-cols">при наличии</td>
                    <td>{{$document[0]->city}}</td>
                </tr>
                <tr>
                    <td>Населенный пункт (село, поселок и так далее)</td>
                    <td class="two-cols">при наличии</td>
                    <td>{{$document[0]->locality}}</td>
                </tr>
                <tr>
                    <td>Улица (проспект, переулок и так далее)</td>
                    <td class="two-cols">при наличии</td>
                    <td>Кисловодская</td>
                </tr>
                <tr>
                    <td>Номер дома (владения)</td>
                    <td class="two-cols">{{$document[0]->house}}</td>
                    <td>31</td>
                </tr>
                <tr>
                    <td>Номер корпуса (строения)</td>
                    <td class="two-cols">при наличии</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Номер квартиры (офиса)</td>
                    <td class="two-cols">{{$document[0]->flat}}</td>
                    <td></td>
                </tr>
            </table>

            <table class="table-one">
                <tr>
                    <td>
                        Сведения о неденежных обязательствах перед гражданином, которые возникли в результате осуществления
                        гражданином
                        предпринимательской деятельности (в том числе о передаче имущества в собственность, выполнении работ
                        и оказании услуг и
                        так далее):
                    </td>
                </tr>
                <tr>
                    <td class="table-line">
                    </td>
                </tr>
            </table>

            <table class="real-estate">
                <tr>
                    <td colspan="7">
                        <h6 class="title">I. Недвижимое имущество</h6>
                    </td>
                </tr>
                <tr>
                    <td class="number">
                        №<br>
                        п/п
                    </td>
                    <td class="start normal-1"> Вид и наименование имущества</td>
                    <td class="normal-1">
                        Вид
                        собствен­ности <sup>1</sup>
                    </td>
                    <td class="normal-1">
                        Место­нахож­-
                        дение (адрес)
                    </td>
                    <td class="normal-1">
                        Площадь
                        (кв. м)
                    </td>
                    <td class="normal-1">
                        Основание
                        приобрете­ния <sup>2</sup>
                        и стоимость <sup>3</sup>
                    </td>
                    <td class="normal-1">
                        Сведения о
                        залоге и
                        залогодер­-
                        жателе <sup>4</sup>
                    </td>
                </tr>
                <tr>
                    <td class="number">1.1</td>
                    <td class="start normal-1">
                        Земельные участки: <br>
                        @if($land_plots->count()==0)
                            1) Не имеется
                        @else
                            @php $i=1; @endphp
                            @foreach($land_plots as $land_plot)
                                {{$i.') '.$land_plot->number}}
                                @php $i++ @endphp
                            @endforeach
                        @endif
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                </tr>
                <tr>
                    <td class="number">1.2</td>
                    <td class="start normal-1">
                        Жилые дома, дачи: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                </tr>
                <tr>
                    <td class="number">1.3</td>
                    <td class="start normal-1">
                        Квартиры: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                </tr>
                <tr>
                    <td class="number">1.4</td>
                    <td class="start normal-1">
                        Гаражи: <br>
                        1 ) Не имеется <br>
                        2 )
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                </tr>
                <tr>
                    <td class="number">1.5</td>
                    <td class="start normal-1">
                        Иное недвижимое имущество: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                </tr>
            </table>

            <table class="real-estate">
                <tr>
                    <td colspan="7">
                        <h6 class="title">II. Движимое имущество</h6>
                    </td>
                </tr>
                <tr>
                    <td class="number">
                        №<br>
                        п/п
                    </td>
                    <td class="start normal-1 ">
                        Вид, марка, модель
                        транспорт­ного средства,
                        год изготовления
                    </td>
                    <td class="normal-1">
                        Идентифика­-
                        ционный номер <sup>6</sup>
                    </td>
                    <td class="normal-1">
                        Вид собствен­-
                        ности <sup>7</sup>
                    </td>
                    <td class="normal-1">
                        Место
                        нахождения/
                        место
                        хранения (адрес)
                    </td>
                    <td class="normal-1">
                        Стоимость <sup>8</sup>
                    </td>
                    <td class="normal-1">
                        Сведения о
                        залоге и
                        залогодер-
                        ­жателе <sup>9</sup>
                    </td>
                </tr>
                <tr>
                    <td class="number">2.1</td>
                    <td class="start normal-1">
                        Автомобили легковые: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                </tr>
                <tr>
                    <td class="number">2.2</td>
                    <td class="start normal-1">
                        Автомобили грузовые: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                </tr>
                <tr>
                    <td class="number">2.3</td>
                    <td class="start normal-1">
                        Мототранспортные средства: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="number">2.4</td>
                    <td class="start normal-1">
                        Сельско­хозяйствен­ная техника: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                </tr>
                <tr>
                    <td class="number">2.5</td>
                    <td class="start normal-1">
                        Водный транспорт: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                </tr>
                <tr>
                    <td class="number">2.6</td>
                    <td class="start normal-1">
                        Воздушный транспорт <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                </tr>
                <tr>
                    <td class="number">2.7</td>
                    <td class="start normal-1">
                        Иные транспортные средства: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                    <td class="normal-1"></td>
                </tr>
            </table>

            <table class="real-estate">
                <tr>
                    <td colspan="5">
                        <h6 class="title">III. Сведения о счетах в банках и иных кредитных организациях</h6>
                    </td>
                </tr>
                <tr>
                    <td class="number">
                        №<br>
                        п/п
                    </td>
                    <td class="normal" colspan="">
                        Наименование и адрес банка
                        или иной кредитной организации
                    </td>
                    <td class="size-2" colspan="">
                        Вид и валюта счета <sup>10</sup>
                    </td>
                    <td class="size-2" colspan="">
                        Дата открытия счета
                    </td>
                    <td class="size-2" colspan="">
                        Остаток на счете <sup>11</sup> (руб.)
                    </td>
                </tr>
                @php $i=1 @endphp
                @foreach($bank_accounts as $bank_account)
                    <tr>
                        <td class="number">3.{{$i}}</td>
                        <td class="normal" colspan="">{{$bank_account->bank_name}}</td>
                        <td class="size-2" colspan="">{{$bank_account->kind_of_account}}</td>
                        <td class="size-2" colspan="">{{$bank_account->creation_date}}</td>
                        <td class="size-2" colspan="">{{$bank_account->bank_account_rest}}</td>
                    </tr>
                    @php $i++ @endphp
                @endforeach
            </table>

            <table class="real-estate">
                <tr>
                    <td colspan="6">
                        <h6 class="title">V. Иные ценные бумаги</h6>
                    </td>
                </tr>
                <tr>
                    <td class="number">№п/п</td>
                    <td class="" colspan="">
                        Наименование и <br>
                        организационно-правовая <br>
                        форма организации <sup>11</sup>
                    </td>
                    <td class="" colspan="">
                        Местонахож­дение <br>
                        организации <br>
                        (адрес)
                    </td>
                    <td class="" colspan="">
                        Уставный, складочный <br>
                        капитал, паевый <br>
                        фонд <sup>12</sup>
                        (руб.)
                    </td>
                    <td class="" colspan="">
                        Доля участия <sup>13</sup>
                    </td>
                    <td class="" colspan="">
                        Основание <br>
                        участия <sup>14</sup> <br>
                        (руб.)
                    </td>
                </tr>
                <tr>
                    <td class="number">4.1</td>
                    <td class="normal" colspan="">Не имеется</td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                </tr>
                <tr>
                    <td class="number">4.2</td>
                    <td class="normal" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                </tr>
                <tr>
                    <td class="number">4.3</td>
                    <td class="normal" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                </tr>
            </table>


            <table class="real-estate">
                <tr>
                    <td colspan="6">
                        <h6 class="title">V. Иные ценные бумаги</h6>
                    </td>
                </tr>
                <tr>
                    <td class="number">№п/п</td>
                    <td class="" colspan="">Вид ценной бумаги <sup>15</sup></td>
                    <td class="" colspan="">
                        Лицо, выпустившее <br>
                        ценную бумагу
                    </td>
                    <td class="" colspan="">
                        Номиналь­ная <br>
                        величина <br>
                        обязатель­ства <br>
                        (руб.)
                    </td>
                    <td class="" colspan="">
                        Общее
                        количе­ство
                    </td>
                    <td class="" colspan="">
                        Общая
                        стоимость <sup>16</sup>
                        (руб.)
                    </td>
                </tr>
                <tr>
                    <td class="number">5.1</td>
                    <td class="normal" colspan="">Не имеется</td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                </tr>
                <tr>
                    <td class="number">5.2</td>
                    <td class="normal" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                </tr>
                <tr>
                    <td class="number">5.3</td>
                    <td class="normal" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                </tr>
            </table>

            <table class="real-estate">
                <tr>
                    <td colspan="6">
                        <h6 class="title">V. Иные ценные бумаги</h6>
                    </td>
                </tr>
                <tr>
                    <td class="number">№п/п</td>
                    <td class="" colspan="">Вид и наименование имущества</td>
                    <td class="" colspan="">
                        Стоимость
                        (сумма и валюта) <sup>17</sup>
                    </td>
                    <td class="" colspan="">
                        Место нахождения / <br>
                        место хранения <sup>18</sup> <br>
                        (адрес)
                    </td>
                    <td class="" colspan="">
                        Сведения о залоге и
                        залогодер­жателе <sup>19</sup>
                    </td>
                </tr>
                <tr>
                    <td class="number">6.1</td>
                    <td class="normal" colspan="">Наличные денежные средства</td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                </tr>
                <tr>
                    <td class="number">6.2</td>
                    <td class="normal start" colspan="">
                        Драгоценности, в том числе ювелирные <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                </tr>
                <tr>
                    <td class="number">6.3</td>
                    <td class="normal start" colspan="">
                        Предметы искусства: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                </tr>
                <tr>
                    <td class="number">6.4</td>
                    <td class="normal start" colspan="">
                        Предметы искусства: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                </tr>
                <tr>
                    <td class="number">6.5</td>
                    <td class="normal start" colspan="">
                        Предметы искусства: <br>
                        1) Не имеется <br>
                        2)
                    </td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                    <td class="size-2" colspan=""></td>
                </tr>
            </table>

            <div class="confirm">
                <p>Достоверность и полноту настоящих сведений подтверждаю.</p>
                <div class="confirm-wrap">
                    <div class="confirm-date">
                        <div>
                            <span>"</span>
                            <input type="text">
                            <span>"</span>
                        </div>
                        <div>
                            <input type="text">
                        </div>
                        <div>
                            <span>20</span>
                            <input id="20" type="number" min="2" max="2">
                            <span>г.</span>
                        </div>
                    </div>
                    <div class="confirm-podpise">
                        <input id="20" type="text">
                        <label for="20">
                            (подпись гражданина)
                        </label>
                    </div>
                    <div class="confirm-username">
                        <input id="20" type="text">
                        <label for="20">
                            (подпись гражданина)
                        </label>
                    </div>
                </div>
            </div>

            <div class="btns-wrap">

                <button class="commons-btn">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.2346 17.9269L11.2346 15.3083C11.2346 15.3083 11.2346 15.3082 11.2346 15.3081V15.3077H11.3846C11.3841 15.1924 11.4268 15.0811 11.5042 14.9957C11.5816 14.9103 11.6881 14.857 11.8029 14.8462L11.2346 17.9269ZM11.2346 17.9269H3.0625C2.50636 17.9269 2.07308 17.4936 2.07308 16.9375V3.0625C2.07308 2.50635 2.50636 2.07308 3.0625 2.07308H4.31154V9.30769V9.30771C4.31155 9.46989 4.37599 9.62542 4.49067 9.7401L4.59673 9.63404L4.49067 9.7401C4.60535 9.85478 4.76088 9.91921 4.92306 9.91923H4.92308H15.0769H15.0769C15.2391 9.91921 15.3947 9.85478 15.5093 9.7401C15.624 9.62542 15.6884 9.46989 15.6885 9.30771V9.30769V3.30873L11.2346 17.9269ZM14.4654 3.30873C14.4644 3.22806 14.4794 3.14799 14.5094 3.07313C14.5397 2.99793 14.5845 2.92949 14.6414 2.87178C14.6983 2.81407 14.7661 2.76825 14.8409 2.73697L14.8975 2.87229L14.8409 2.73697C14.9156 2.70569 14.9959 2.68958 15.0769 2.68958C15.158 2.68958 15.2382 2.70569 15.313 2.73697C15.3877 2.76825 15.4555 2.81407 15.5124 2.87178C15.5693 2.92949 15.6142 2.99793 15.6444 3.07313L15.5052 3.12906L11.8532 14.6963C11.8519 14.6963 11.8507 14.6962 11.8494 14.6962H15.0769H15.0769C15.2391 14.6962 15.3947 14.7606 15.5093 14.8753C15.624 14.99 15.6884 15.1455 15.6885 15.3077V15.3077V17.9269M14.4654 3.30873V3.30769H14.6154L14.4654 3.30981C14.4654 3.30945 14.4654 3.30909 14.4654 3.30873ZM14.4654 3.30873V8.69615M14.4654 8.69615H5.53462M14.4654 8.69615V8.84615H5.53462V8.69615M14.4654 8.69615H14.6154L15.6885 18.0769M5.53462 8.69615V2.07308M5.53462 8.69615H5.38462V2.07308H5.53462M5.53462 2.07308H16.9375C17.4936 2.07308 17.9269 2.50635 17.9269 3.0625V16.9375C17.9269 17.4936 17.4936 17.9269 16.9375 17.9269H15.6885M5.53462 2.07308V1.92308H16.9375C17.5765 1.92308 18.0769 2.42351 18.0769 3.0625V16.9375C18.0769 17.5765 17.5765 18.0769 16.9375 18.0769H15.6885M15.6885 17.9269V18.0769M15.6885 17.9269H15.5385V15.3077C15.5384 15.1853 15.4898 15.0679 15.4033 14.9813C15.3167 14.8948 15.1993 14.8462 15.0769 14.8462L15.6885 18.0769M3.0625 0.85C1.84525 0.85 0.85 1.84525 0.85 3.0625V16.9375C0.85 18.1548 1.84525 19.15 3.0625 19.15H16.9375C18.1547 19.15 19.15 18.1548 19.15 16.9375V3.0625C19.15 1.84525 18.1547 0.85 16.9375 0.85H3.0625ZM12.4577 15.9192H14.4654V17.9269H12.4577V15.9192Z"
                            fill="white" stroke="white" stroke-width="0.3" />
                    </svg>
                    <span>Сохранить</span>
                </button>

                <button class="commons-btn">
                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.25 6H14.75V4C14.75 2 14 1 11.75 1H8.25C6 1 5.25 2 5.25 4V6Z" stroke="white"
                              stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14 14V18C14 20 13 21 11 21H9C7 21 6 20 6 18V14H14Z" stroke="white" stroke-width="1.5"
                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 9V14C19 16 18 17 16 17H14V14H6V17H4C2 17 1 16 1 14V9C1 7 2 6 4 6H16C18 6 19 7 19 9Z"
                              stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                        <path d="M15 14H13.79H5" stroke="white" stroke-width="1.5" stroke-miterlimit="10"
                              stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 10H8" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round" />
                    </svg>

                    <span>Печать</span>
                </button>
            </div>
            <p class="list-line"></p>

            <p>[1] Указывается вид собственности (индивидуальная, долевая, общая); для совместной собственности
                указываются иные
                лица
                (фамилия, имя и отчество (последнее – при наличии) или наименование), в собственности которых находится
                имущество; для
                долевой собственности указывается доля гражданина, который составляет опись имущества. <br>
                [2] Указываются наименование и реквизиты документа, являющегося законным основанием для возникновения
                права
                собственности. <br>
                [3] Указывается при наличии документов, содержащих сведения о стоимости имущества (например, отчет о
                стоимости
                имущества, подготовленный оценщиком, договор купли-продажи, иной документ об оплате (приобретении)
                имущества). <br>
                [4] Указываются сведения о договоре залога, иной сделке, на основании которой возникает залог в силу
                закона, а также
                наименование юридического лица или фамилия, имя и отчество (последнее – при наличии) физического лица, в
                залоге у
                которого находится имущество. <br>
                [5] Указывается вид земельного участка (пая, доли): под индивидуальное жилищное строительство, дачный,
                садовый,
                приусадебный, огородный и другие. <br>
                [6] Указывается при наличии у движимого имущества цифрового, буквенного обозначения или комбинации таких
                обозначений,
                которые идентифицируют указанное имущество, в том числе идентификационный номер транспортного средства
                (VIN). <br>
                [7] Указывается вид собственности (индивидуальная, долевая, общая); для совместной собственности
                указываются иные лица
                (фамилия, имя и отчество (последнее – при наличии) или наименование), в собственности которых находится
                имущество; для
                долевой собственности указывается доля гражданина, который составляет опись имущества. <br>
                [8] Указывается при наличии документов, содержащих сведения о стоимости имущества (например, отчет о
                стоимости
                имущества, подготовленный оценщиком, договор купли-продажи, кассовый чек, товарный чек, иной документ об
                оплате
                (приобретении) имущества). <br>
                [9] Указываются сведения о договоре залога, иной сделке, на основании которой возникает залог в силу
                закона, а также
                наименование юридического лица или фамилия, имя и отчество (последнее – при наличии) физического лица, в
                залоге у
                которого находится имущество. <br>
                [10] Указывается вид счета (например, депозитный, текущий, расчетный, ссудный) и валюта счета. <br>
                [11] Указываются полное или сокращенное официальное наименование организации и ее
                организационно-правовая форма
                (например, акционерное общество, общество с ограниченной ответственностью, полное товарищество,
                товарищество на вере,
                производственный кооператив, хозяйственное партнерство). <br>
                [12] Указывается согласно учредительным документам организации по состоянию на дату составления описи
                имущества
                гражданина. Суммы, выраженные в иностранной валюте, указываются в рублях по курсу Банка России на дату
                составления
                описи
                имущества гражданина. <br>
                [13] Указывается доля участия в уставном, складочном капитале, паевом фонде. Для акционерных обществ
                указываются также
                номинальная стоимость и количество акций. <br>
                [14] Указываются основание приобретения доли участия (например, учредительный договор, приватизация,
                покупка, мена,
                дарение, наследование), а также реквизиты (дата, номер) соответствующего договора или акта.
                [15] Указываются все ценные бумаги по видам (например, облигации, векселя), за исключением акций,
                указанных в разделе
                IV
                “Акции и иное участие в коммерческих организациях”. <br>
                [16] Указывается общая стоимость ценных бумаг данного вида исходя из стоимости их приобретения (если ее
                нельзя
                определить – исходя из рыночной стоимости или номинальной стоимости). Для обязательств, выраженных в
                иностранной
                валюте,
                стоимость указывается в рублях по курсу Банка России на дату составления описи имущества гражданина.
                <br>
                [17] В отношении наличных денежных средств в валюте указывается сумма по курсу Банка России на дату
                подачи заявления о
                признании должника банкротом, в отношении иного указывается при наличии документов, содержащих сведения
                о стоимости
                имущества (например, отчет о стоимости имущества, подготовленный оценщиком, договор купли-продажи,
                кассовый чек,
                товарный чек, иной документ об оплате (приобретении) имущества). <br>
                [18] Указываются сведения о договоре хранения ценностей в индивидуальном банковском сейфе (ячейке) и
                наименование
                кредитной организации. <br>
                [19] Указываются сведения о договоре залога, иной сделке, на основании которой возникает залог в силу
                закона, а также
                наименование юридического лица или фамилия, имя и отчество (последнее – при наличии) физического лица, в
                залоге у
                которого находится имущество.
            </p>
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
