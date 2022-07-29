
<style>
    .dropdown > .dropdown-menu {
        top: 200%;
        transition: 0.3s all ease-in-out;
    }

    .dropdown:hover > .dropdown-menu {
        display: block;
        top: 100%;
    }

    .dropdown > .dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
        pointer-events: none;
    }

    .manage_dropdown {
        margin-right: 15px;
        min-height: auto;
        border-radius: 7px;
        margin-top: 8px;
        box-shadow: 4px 4px 0px #00000030;
        border: 1px solid #6c757d;
        font-size: inherit;
    }

    a.dropdown-item {
        border-bottom: 1px solid var(--secondary);
        padding: 5px 14px;
        margin: 0px 0px;

    }

    a.dropdown-item:last-child {
        border-bottom: 0px;
        padding: 5px 14px;
        margin: 0px 0px;

    }
    [class^="ti-"], [class*=" ti-"] {
        font-family: 'themify';
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 3 !important;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

</style>

<div class="app-header header">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="/dashboard">
                <img src="{{ url('assets/images/brand/ship_logo.png')}}" class="header-brand-img desktop-lgo"
                     alt="Admintro logo">
                <img src="{{ url('assets/images/brand/ship_logo.png')}}" class="header-brand-img dark-logo"
                     alt="Admintro logo">
                <img src="{{ url('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo"
                     alt="Admintro logo">
                <img src="{{ url('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo"
                     alt="Admintro logo">
            </a>


            <div class="app-sidebar__toggle" data-toggle="sidebar" style="display:none">
                <a class="open-toggle" href="index.html#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round"
                         class="feather feather-align-left header-icon mt-1">
                        <line x1="17" y1="10" x2="3" y2="10"></line>
                        <line x1="21" y1="6" x2="3" y2="6"></line>
                        <line x1="21" y1="14" x2="3" y2="14"></line>
                        <line x1="17" y1="18" x2="3" y2="18"></line>
                    </svg>
                </a>
            </div>

            <div class="d-flex order-lg-2 ml-auto">
                <a href="/hr/dashboard" data-toggle="search"
                   class="nav-link nav-link-lg d-md-none navsearch">
                    <svg class="header-icon search-icon" x="1008" y="1248" viewBox="0 0 24 24"
                         height="100%" width="100%" preserveAspectRatio="xMidYMid meet"
                         focusable="false">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path
                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                    </svg>
                </a>

                <div class="dropdown profile-dropdown" style=" margin-top: 2px; ">
                    <a href="/hr/dashboard" class="nav-link pr-0 leading-none" data-toggle="dropdown">
												<span class=" js-search-result-thumbnail responsive-img img_border fa fa-user"
                                                      style=" color: #6c757d; ">
                        {{--<img src="{{ url('assets/images/users/2.jpg')}}" alt="img"--}}
                                                    {{--class="avatar avatar-md brround">--}}

												</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                        <div class="text-center">

                            <a
                                    class="dropdown-item text-center user pb-0 font-weight-bold"
                                    style="text-transform: uppercase;">
                                {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}

                            </a>
                            
                            <a class="dropdown-item d-flex" href="{{route('logout')}}">
                                <svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg"
                                     enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24"
                                     width="24">
                                    <g>
                                        <rect fill="none" height="24" width="24"/>
                                    </g>
                                    <g>
                                        <path
                                                d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/>
                                    </g>
                                </svg>
                                <div class="">Sign Out</div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
