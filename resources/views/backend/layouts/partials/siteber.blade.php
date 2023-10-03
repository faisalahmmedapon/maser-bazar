<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <a href="{{route('dashboard')}}">
                <img src="{{asset('backend')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </a>
        </div>
        <div>
            <h4 class="logo-text">Maser Bazar</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>

    <ul class="metismenu" id="menu">

        @can('dashboard')
            <li>
                <a href="{{route('dashboard')}}" class="">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
        @endcan
        @can('fish-list')
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-cart"></i></div>
                    <div class="menu-title">Fishes</div>
                </a>
                <ul>
                    <li><a href="{{route('fish.lists')}}"><i class="bx bx-right-arrow-alt"></i>Fish Lists</a></li>
                </ul>
            </li>
        @endcan


            @can('supplier-list')
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="lni lni-customer"></i></div>
                        <div class="menu-title">Supplier</div>
                    </a>
                    <ul>
                        <li><a href="{{route('supplier.today')}}"><i class="bx bx-right-arrow-alt"></i>Today Supplier</a></li>
                        <li><a href="{{route('supplier.lists')}}"><i class="bx bx-right-arrow-alt"></i>Supplier List</a>
                        </li>
                    </ul>
                </li>
            @endcan


        @can('customer-list')
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="lni lni-customer"></i></div>
                    <div class="menu-title">Customer</div>
                </a>
                <ul>
                    <li><a href="{{route('customer.create')}}"><i class="bx bx-right-arrow-alt"></i>New Customer</a></li>
                    <li><a href="{{route('customer.lists')}}"><i class="bx bx-right-arrow-alt"></i>Customer List</a>
                    </li>
                </ul>
            </li>
        @endcan

            @can('employee-list')
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="lni lni-star-empty"></i></div>
                        <div class="menu-title">Employee</div>
                    </a>
                    <ul>
                        <li><a href="{{route('employee.create.employee')}}"><i class="bx bx-right-arrow-alt"></i>New Employee</a></li>
                        <li><a href="{{route('employee.lists')}}"><i class="bx bx-right-arrow-alt"></i>Employee List</a>
                        </li>
                    </ul>
                </li>
            @endcan

        @can('ticket-list')
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="lni lni-ticket-alt"></i></div>
                    <div class="menu-title">Tickets</div>
                </a>
                <ul>
                    <li><a href="{{route('ticket.open.create.ticket')}}"><i class="bx bx-right-arrow-alt"></i>Open New
                            Tickets</a></li>
                    <li><a href="{{route('ticket.history.lists')}}"><i class="bx bx-right-arrow-alt"></i>Tickets History</a>
                    </li>
                </ul>
            </li>
        @endcan
        @can('role-list')
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="lni lni-package"></i></div>
                    <div class="menu-title">Role Permission</div>
                </a>
                <ul>
                    <li><a href="{{route('roles.index')}}"><i class="bx bx-right-arrow-alt"></i>Roles</a></li>
                    <li><a href="{{route('admins.index')}}"><i class="bx bx-right-arrow-alt"></i>Admins</a></li>
                </ul>
            </li>
        @endcan
    </ul>
</div>


{{--<div class="sidebar-wrapper" data-simplebar="true">--}}
{{--    <div class="sidebar-header">--}}
{{--        <div>--}}
{{--            <a href="{{route('dashboard')}}">--}}
{{--                <img src="{{asset('backend')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <h4 class="logo-text">মাছের বাজার</h4>--}}
{{--        </div>--}}
{{--        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <ul class="metismenu" id="menu">--}}

{{--        <li>--}}
{{--            <a href="{{route('dashboard')}}" class="">--}}
{{--                <div class="parent-icon"><i class='bx bx-home-circle'></i></div>--}}
{{--                <div class="menu-title">মাছের বাজার</div>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <a href="javascript:;" class="has-arrow">--}}
{{--                <div class="parent-icon"><i class="lni lni-star-empty"></i></div>--}}
{{--                <div class="menu-title">আমার কর্মকারী</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="{{route('employee.create.employee')}}"><i class="bx bx-right-arrow-alt"></i>কর্মকারী সংরক্ষন করুন</a></li>--}}
{{--                <li><a href="{{route('employee.lists')}}"><i class="bx bx-right-arrow-alt"></i>সংরক্ষিত কর্মকারী দেখুন</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="javascript:;" class="has-arrow">--}}
{{--                <div class="parent-icon"><i class="bx bx-cart"></i></div>--}}
{{--                <div class="menu-title">মাছ সংরক্ষণ</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="{{route('fish.create.fish')}}"><i class="bx bx-right-arrow-alt"></i>মাছ সংরক্ষন করুন</a></li>--}}
{{--                <li><a href="{{route('fish.lists')}}"><i class="bx bx-right-arrow-alt"></i> সংরক্ষিত মাছ দেখুন </a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li>--}}
{{--            <a href="javascript:;" class="has-arrow">--}}
{{--                <div class="parent-icon"><i class="lni lni-customer"></i></div>--}}
{{--                <div class="menu-title">ক্রেতা</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="{{route('customer.create.customer')}}"><i class="bx bx-right-arrow-alt"></i>ক্রেতা সংরক্ষন করুন</a></li>--}}
{{--                <li><a href="{{route('customer.lists')}}"><i class="bx bx-right-arrow-alt"></i> সংরক্ষিত ক্রেতা দেখুন</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="javascript:;" class="has-arrow">--}}
{{--                <div class="parent-icon"><i class="lni lni-customer"></i></div>--}}
{{--                <div class="menu-title">বিক্রেতা</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li><a href="{{route('customer.create.customer')}}"><i class="bx bx-right-arrow-alt"></i>বিক্রেতা সংরক্ষন করুন</a></li>--}}
{{--                <li><a href="{{route('customer.lists')}}"><i class="bx bx-right-arrow-alt"></i> সংরক্ষিত বিক্রেতা দেখুন</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}


{{--        <li>--}}
{{--            <a class="has-arrow" href="javascript:;">--}}
{{--                <div class="parent-icon"><i class="lni lni-package"></i></div>--}}
{{--                <div class="menu-title">ক্ষমতা প্রযোগ করুন</div>--}}
{{--            </a>--}}
{{--            <ul>--}}
{{--                <li> <a href="{{route('roles.index')}}"><i class="bx bx-right-arrow-alt"></i>রোল ম্যানেজ করুন</a> </li>--}}
{{--                --}}{{--                <li> <a href="{{route('admins.index')}}"><i class="bx bx-right-arrow-alt"></i>Admins</a> </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--    </ul>--}}
{{--</div>--}}
