    <a href="{{asset(route('admin.user.add_app', $application->user_id))}}"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.66683 5.37516V7.12516C6.66683 8.5835 6.0835 9.16683 4.62516 9.16683H2.87516C1.41683 9.16683 0.833496 8.5835 0.833496 7.12516V5.37516C0.833496 3.91683 1.41683 3.3335 2.87516 3.3335H4.62516C6.0835 3.3335 6.66683 3.91683 6.66683 5.37516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9.16683 2.87516V4.62516C9.16683 6.0835 8.5835 6.66683 7.12516 6.66683H6.66683V5.37516C6.66683 3.91683 6.0835 3.3335 4.62516 3.3335H3.3335V2.87516C3.3335 1.41683 3.91683 0.833496 5.37516 0.833496H7.12516C8.5835 0.833496 9.16683 1.41683 9.16683 2.87516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Дублировать</a>
    <form method="post" action="{{route('admin.application.destroy',$application->id)}}">
        @csrf
        @method('delete')
    <button><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.75 2.49154C7.3625 2.35404 5.96667 2.2832 4.575 2.2832C3.75 2.2832 2.925 2.32487 2.1 2.4082L1.25 2.49154" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3.5415 2.071L3.63317 1.52516C3.69984 1.12933 3.74984 0.833496 4.454 0.833496H5.54567C6.24984 0.833496 6.304 1.146 6.3665 1.52933L6.45817 2.071" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7.85433 3.80859L7.5835 8.00443C7.53766 8.65859 7.50016 9.16693 6.33766 9.16693H3.66266C2.50016 9.16693 2.46266 8.65859 2.41683 8.00443L2.146 3.80859" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M4.3042 6.875H5.6917" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3.9585 5.2085H6.04183" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Удалить</button>
    </form>

    <a href="{{route('admin.application.add_employee', $application->id)}}"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.66683 5.37516V7.12516C6.66683 8.5835 6.0835 9.16683 4.62516 9.16683H2.87516C1.41683 9.16683 0.833496 8.5835 0.833496 7.12516V5.37516C0.833496 3.91683 1.41683 3.3335 2.87516 3.3335H4.62516C6.0835 3.3335 6.66683 3.91683 6.66683 5.37516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9.16683 2.87516V4.62516C9.16683 6.0835 8.5835 6.66683 7.12516 6.66683H6.66683V5.37516C6.66683 3.91683 6.0835 3.3335 4.62516 3.3335H3.3335V2.87516C3.3335 1.41683 3.91683 0.833496 5.37516 0.833496H7.12516C8.5835 0.833496 9.16683 1.41683 9.16683 2.87516Z" stroke="#626262" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Назначить сотрудника
    </a>

