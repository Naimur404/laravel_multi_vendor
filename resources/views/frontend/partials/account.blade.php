
    <i class="las la-user-circle la-2x opacity-80"></i>
    <span class="flex-grow-1 ml-1">
        
        @if(isAdmin())
                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="{{ route('admin.dashboard') }}" class="text-reset d-inline-block opacity-60 py-2">{{ translate('Account')}}</a>
                            </li>
                            @else
                            <a href="{{ route('dashboard') }}" class="text-reset d-inline-block opacity-60 py-2">Account</a>

                            @endif
        
        

        
    </span>
</a>