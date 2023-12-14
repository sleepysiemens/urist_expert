<div class="left-sidebar">
    <a href="{{asset(route('admin.main.index'))}}">
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
        <a >
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
            <span>Лиды</span>
        </a>
    </div>
    <div class="left-item-search">
        <input type="text" placeholder="Поиск..." id="1">
        <label for="1">
            <img src="{{asset('images/icons/left-side-3.svg')}}" alt="">
        </label>
    </div>
    @foreach($users as $user)
        <a href="{{asset(route('admin.user.index',$user->id))}}">
            <p class="left-item-p">{{$user->phone}}</p>
        </a>
    @endforeach

    <div class="left-item left-item-stroke sidebar-item left-item-klent">
        <a>
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
            <span>Клиенты</span>
        </a>
    </div>
    <div class="left-item-search">
        <input type="text" placeholder="Поиск..." id="1">
        <label for="1">
            <img src="{{asset('images/icons/left-side-3.svg')}}" alt="">
        </label>
    </div>

    @foreach($users as $user)
        <a href="{{asset(route('admin.user.index',$user->id))}}">
            <p class="left-item-p">{{$user->fio}}</p>
        </a>
    @endforeach

    @yield('left-sidebar')

</div>

