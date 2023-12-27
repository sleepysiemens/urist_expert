@extends('Layouts.EmployeeWrapper')
@section('content')

    <div class="glavni-sec">
        <div style="display: flex;">
            <a href="{{route('admin.main.index')}}" class="back-btn" style="margin: auto 10px">
                <svg width="11" height="21" viewBox="0 0 11 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 1L1 10.5L10 20" stroke="#51526C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
            <h4 class="title">Лид {{$application->id}}</h4>

        </div>


        <div class="etap-user-card">
            <div class="register-card">
                <div class="register-card-user">
                    <img src="{{asset('images/reg-img.png')}}" alt="">
                </div>
                <div class="register-card-content">
                    <div class="register-card-info">
                        <span class="register-card-title">ФИО:</span>
                        <span class="register-card-text">{{$application->fio}}</span>
                    </div>
                    <div class="register-card-info">
                        <span class="register-card-title">Дата регистрации:</span>
                        <span class="register-card-text">{{date("d.m.Y",strtotime($application->created_at))}}</span>
                    </div>
                    <div class="register-card-info">
                        <span class="register-card-title">Номер телефона:</span>
                        <span class="register-card-text">{{$application->phone}}</span>
                    </div>
                    <div class="register-card-info">
                        <form action="{{route('admin.application.update', $application->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <br>
                            <fieldset class="commons-input">
                                <legend>Сотрудник</legend>
                                <select required name="employee_id">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <br>
                            <button class="content-bnt commons-btn">
                                Назначить сотрудника
                            </button>
                        </form>
                    </div>
                </div>
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
