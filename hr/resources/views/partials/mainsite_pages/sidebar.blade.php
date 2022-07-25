<aside class="app-sidebar">
    <div class="app-sidebar__logo" style="height: 100px;">
        <a class="header-brand" href="{{url('dashboard')}}">

        </a>
    </div>
    <div class="app-sidebar__user">
        <div class="sidebar-navs">
            <ul class="nav nav-pills-circle">

                @if(Auth::user()->role ==1)
                {{--<li class="nav-item" data-placement="top" data-toggle="tooltip" title="Add Employee">--}}
                    {{--<a class="icon" href="{{url('add_employee')}}">--}}
                        {{--<i class="las la-user header-icons"></i>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item" data-placement="top" data-toggle="tooltip" title="View/Edit Employee">--}}
                    {{--<a class="icon" href="{{url('view_employee')}}">--}}
                        {{--<i class="las  la-edit header-icons"></i>--}}
                    {{--</a>--}}
                {{--</li>--}}
                @endif
                {{--<li class="nav-item" data-placement="top" data-toggle="tooltip" title="Download Agreement">--}}
                    {{--<a onclick="window.open('assets/images/aggreement/Asia_Agreement_2022.pdf')" download class="icon">--}}
                        {{--<i class="las  la-download header-icons"></i>--}}
                    {{--</a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>
    @php
        $phoneaccess=explode(',',Auth::user()->emp_access_phone)
    @endphp
    <ul class="side-menu app-sidebar3">
        <li>
            <a class="side-menu__item" href="{{url('dashboard')}}">
                <span class="js-search-result-thumbnail responsive-img img_border fa fa-dashboard"></span>
                <span class="side-menu__label">DASHBOARD</span>
            </a>
        </li>
        @if (in_array("0", $phoneaccess))
            <li>
                <a class="side-menu__item" href="{{ route('customer.index')}}">
                    <span class="js-search-result-thumbnail responsive-img img_border fa fa-quora"></span>
                    <span class="side-menu__label">Add Job Card</span>
                </a>
            </li>
        @endif
        {{--@if (in_array("1", $phoneaccess))--}}
            {{--<li>--}}
                {{--<a class="side-menu__item" href="{{ route('package.index')}}">--}}
                    {{--<span class="js-search-result-thumbnail responsive-img img_border fa fa-mobile"></span>--}}
                    {{--<span class="side-menu__label">Form</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--@endif--}}
        {{--@if (in_array("2", $phoneaccess))--}}
            {{--<li>--}}
                {{--<a class="side-menu__item" href="{{ route('invoice.index')}}">--}}
                    {{--<span class="js-search-result-thumbnail responsive-img img_border fa fa-home"></span>--}}
                    {{--<span class="side-menu__label">Invoice</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--@endif--}}
        {{--@if (in_array("3", $phoneaccess))--}}
            {{--<li>--}}
                {{--<a class="side-menu__item" href="{{route('expense.index')}}">--}}
                    {{--<span class="js-search-result-thumbnail responsive-img img_border fa fa-list"></span>--}}
                    {{--<span class="side-menu__label">Expense</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--@endif--}}
    </ul>
</aside>
<!--aside closed-->                <!-- App-Content -->
