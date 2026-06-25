<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <!-- Links Of CSS File -->
    <link href=" {{ asset('broker/assets/css/sidebar-menu.css') }} " rel="stylesheet" />
    <link href=" {{ asset('broker/assets/css/simplebar.css') }} " rel="stylesheet" />
    <link href=" {{ asset('broker/assets/css/prism.css') }} " rel="stylesheet" />
    <link href=" {{ asset('broker/assets/css/quill.snow.css') }} " rel="stylesheet" />
    <link href=" {{ asset('broker/assets/css/remixicon.css') }} " rel="stylesheet" />
    <link href=" {{ asset('broker/assets/css/swiper-bundle.min.css') }} " rel="stylesheet" />
    <link href=" {{ asset('broker/assets/css/jsvectormap.min.css') }} " rel="stylesheet" />
    <link href=" {{ asset('broker/assets/css/style.css') }} " rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon -->
    {{-- <link href=" {{ asset('broker/assets/images/favicon.png') }} " rel="icon" type="image/png" />
    <!-- Title --> --}}
    <title>
        FieldToMarket
    </title>
</head>

<body class="bg-body-bg">

    <!-- Start Sidebar Area -->
    <div class="sidebar-area" id="sidebar-area">
        <div class="logo position-relative d-flex align-items-center justify-content-between">
            <a class="d-flex justify-content-center text-decoration-none" href="index.html">
                <img alt="logo-icon" src=" {{ asset('Image/logo.jpg') }} " width="300px" height="100px" />
                {{-- <span class="logo-text text-secondary me-3">
                FieldToMarket
                </span> --}}
                {{-- <h5 class=" text-secondary fw-semibold" >Field To Market</h5> --}}
            </a>
            <button
                class="sidebar-burger-menu-close bg-transparent py-3 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
                id="sidebar-burger-menu-close">
                <span class="border-1 d-block for-dark-burger"
                    style="border-bottom: 1px solid #475569; height: 1px; width: 25px; transform: rotate(45deg);">
                </span>
                <span class="border-1 d-block for-dark-burger"
                    style="border-bottom: 1px solid #475569; height: 1px; width: 25px; transform: rotate(-45deg);">
                </span>
            </button>
            <button class="sidebar-burger-menu bg-transparent p-0 border-0" id="sidebar-burger-menu">
                <span class="border-1 d-block for-dark-burger"
                    style="border-bottom: 1px solid #475569; height: 1px; width: 25px;">
                </span>
                <span class="border-1 d-block for-dark-burger"
                    style="border-bottom: 1px solid #475569; height: 1px; width: 25px; margin: 6px 0;">
                </span>
                <span class="border-1 d-block for-dark-burger"
                    style="border-bottom: 1px solid #475569; height: 1px; width: 25px;">
                </span>
            </button>
        </div>
        <aside class="layout-menu menu-vertical menu active" data-simplebar="" id="layout-menu">
            <ul class="menu-inner">
                <li class="menu-title small text-uppercase">
                    <span class="menu-title-text">
                        MAIN
                    </span>
                </li>
                <li class="menu-item open">
                    <a class="menu-link menu-toggle active" href="javascript:void(0);">
                        <span class="material-symbols-outlined menu-icon">
                            dashboard
                        </span>
                        <span class="title">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="to-do-list.html">
                        <span class="material-symbols-outlined menu-icon">
                            ballot
                        </span>
                        <span class="title">
                            To Do List
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="calendar.html">
                        <span class="material-symbols-outlined menu-icon">
                            calendar_today
                        </span>
                        <span class="title">
                            Calendar
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="contacts.html">
                        <span class="material-symbols-outlined menu-icon">
                            perm_contact_calendar
                        </span>
                        <span class="title">
                            Contacts
                        </span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link" href="chat.html">
                        <span class="material-symbols-outlined menu-icon">
                            chat
                        </span>
                        <span class="title">
                            Chat
                        </span>
                    </a>
                </li>

                <li class="menu-item">
                    <a class="menu-link" href="logout.html">
                        <span class="material-symbols-outlined menu-icon">
                            logout
                        </span>
                        <span class="title">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>
    <!-- End Sidebar Area -->
    <!-- Start Main Content Area -->
    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            <!-- Start Header Area -->
            <header class="header-area bg-white mb-4 rounded-10 border border-white" id="header-area">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="left-header-content">
                            <ul
                                class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-md-start">
                                <li class="d-xl-none">
                                    <button
                                        class="header-burger-menu bg-transparent p-0 border-0 position-relative top-3"
                                        id="header-burger-menu">
                                        <span class="border-1 d-block for-dark-burger"
                                            style="border-bottom: 1px solid #475569; height: 1px; width: 25px;">
                                        </span>
                                        <span class="border-1 d-block for-dark-burger"
                                            style="border-bottom: 1px solid #475569; height: 1px; width: 25px; margin: 6px 0;">
                                        </span>
                                        <span class="border-1 d-block for-dark-burger"
                                            style="border-bottom: 1px solid #475569; height: 1px; width: 25px;">
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <form class="src-form position-relative">
                                        <input class="form-control" placeholder="Search here..." type="text" />
                                        <div
                                            class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
                                            <span class="material-symbols-outlined">
                                                search
                                            </span>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-header-content mt-3 mt-md-0">
                            <ul
                                class="d-flex align-items-center justify-content-center justify-content-md-end ps-0 mb-0 list-unstyled">
                                <li class="header-right-item language-item">
                                    <div class="dropdown notifications language">
                                        <button aria-expanded="false"
                                            class="btn btn-secondary dropdown-toggle border-0 p-0 position-relative"
                                            data-bs-toggle="dropdown" type="button">
                                            <span class="material-symbols-outlined" style="font-size: 19px;">
                                                translate
                                            </span>
                                        </button>
                                        <div class="dropdown-menu dropdown-lg p-0 border-0 dropdown-menu-end">
                                            <span class="fw-medium fs-16 text-secondary d-block title"
                                                style="padding-top: 20px; padding-bottom: 20px;">
                                                Choose Language
                                            </span>
                                            <div class="max-h-275" data-simplebar="">
                                                <div class="notification-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img alt="usa" class="wh-30 rounded-circle"
                                                                    src="assets/images/usa.png" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-10">
                                                                <span class="text-secondary fw-medium fs-15">
                                                                    English
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="notification-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img alt="australia" class="wh-30 rounded-circle"
                                                                    src="assets/images/australia.png" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-10">
                                                                <span class="text-secondary fw-medium fs-15">
                                                                    Australia
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="notification-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img alt="spain" class="wh-30 rounded-circle"
                                                                    src="assets/images/spain.png" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-10">
                                                                <span class="text-secondary fw-medium fs-15">
                                                                    Spanish
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="notification-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img alt="portugal" class="wh-30 rounded-circle"
                                                                    src="assets/images/france.png" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-10">
                                                                <span class="text-secondary fw-medium fs-15">
                                                                    France
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="notification-menu mb-0">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img alt="Germany" class="wh-30 rounded-circle"
                                                                    src="assets/images/germany.png" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-10">
                                                                <span class="text-secondary fw-medium fs-15">
                                                                    Spain
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-right-item light-dark-item">
                                    <div class="light-dark">
                                        <button class="switch-toggle dark-btn p-0 bg-transparent lh-0 border-0"
                                            id="switch-toggle">
                                            <span class="dark">
                                                <i class="material-symbols-outlined">
                                                    dark_mode
                                                </i>
                                            </span>
                                            <span class="light">
                                                <i class="material-symbols-outlined">
                                                    light_mode
                                                </i>
                                            </span>
                                        </button>
                                    </div>
                                </li>
                                <li class="header-right-item calendar-item">
                                    <div class="dropdown notifications">
                                        <a class="btn btn-secondary border-0 p-0 position-relative"
                                            href="calendar.html">
                                            <span class="material-symbols-outlined" style="font-size: 19px;">
                                                calendar_today
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="header-right-item messages-item">
                                    <div class="dropdown notifications noti messages">
                                        <button aria-expanded="false"
                                            class="btn btn-secondary border-0 p-0 position-relative"
                                            data-bs-toggle="dropdown" type="button">
                                            <span class="material-symbols-outlined">
                                                mail
                                            </span>
                                            <span class="count bg-primary">
                                                5
                                            </span>
                                        </button>
                                        <div class="dropdown-menu dropdown-lg p-0 border-0 p-0 dropdown-menu-end">
                                            <div class="d-flex justify-content-between align-items-center title">
                                                <span class="fw-medium fs-16 text-secondary">
                                                    Messages
                                                    <span class="fw-normal text-body fs-16">
                                                        (03)
                                                    </span>
                                                </span>
                                                <button
                                                    class="p-0 m-0 bg-transparent border-0 fs-15 text-primary fw-medium">
                                                    Mark all as read
                                                </button>
                                            </div>
                                            <div data-simplebar="" style="max-height: 300px;">
                                                <div class="notification-menu unseen">
                                                    <a class="dropdown-item" href="chat.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img alt="images" class="rounded-circle"
                                                                    src="assets/images/user1.jpg"
                                                                    style="width: 44px; height: 44px;" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-10">
                                                                <p class="fs-16 fw-medium text-secondary mb-2">
                                                                    Jacob Liwiski
                                                                    <span class="fs-14 fw-normal text-body ms-2">
                                                                        35 min ago
                                                                    </span>
                                                                </p>
                                                                <span class="fs-14-5 fw-medium d-inline-block"
                                                                    style="line-height: 1.4;">
                                                                    Hey Victor! Could you please...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="notification-menu unseen">
                                                    <a class="dropdown-item" href="chat.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img alt="images" class="rounded-circle"
                                                                    src="assets/images/user2.jpg"
                                                                    style="width: 44px; height: 44px;" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-10">
                                                                <p class="fs-16 fw-medium text-secondary mb-2">
                                                                    Angela Carter
                                                                    <span class="fs-14 fw-normal text-body ms-2">
                                                                        1 day ago
                                                                    </span>
                                                                </p>
                                                                <span class="fs-14-5 fw-medium d-inline-block"
                                                                    style="line-height: 1.4;">
                                                                    How are you Angela? Would you please...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="notification-menu">
                                                    <a class="dropdown-item" href="chat.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img alt="images" class="rounded-circle"
                                                                    src="assets/images/user3.jpg"
                                                                    style="width: 44px; height: 44px;" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-10">
                                                                <p class="fs-16 fw-medium text-secondary mb-2">
                                                                    Brad Traversy
                                                                    <span class="fs-14 fw-normal text-body ms-2">
                                                                        2 days ago
                                                                    </span>
                                                                </p>
                                                                <span class="fs-14-5 fw-medium d-inline-block"
                                                                    style="line-height: 1.4;">
                                                                    Hey Brad Traversy! Could you please...
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="dropdown-item text-center text-primary d-block view-all fw-medium rounded-bottom-3"
                                                href="chat.html">
                                                <span>
                                                    See All Messages
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-right-item">
                                    <div class="dropdown notifications noti">
                                        <button aria-expanded="false"
                                            class="btn btn-secondary border-0 p-0 position-relative"
                                            data-bs-toggle="dropdown" type="button">
                                            <span class="material-symbols-outlined">
                                                notifications
                                            </span>
                                            <span class="count">
                                                3
                                            </span>
                                        </button>
                                        <div class="dropdown-menu dropdown-lg p-0 border-0 p-0 dropdown-menu-end">
                                            <div class="d-flex justify-content-between align-items-center title">
                                                <span class="fw-medium fs-16 text-secondary">
                                                    Notifications
                                                    <span class="fw-normal text-body fs-16">
                                                        (03)
                                                    </span>
                                                </span>
                                                <button
                                                    class="p-0 m-0 bg-transparent border-0 fs-15 text-primary fw-medium">
                                                    Clear All
                                                </button>
                                            </div>
                                            <div data-simplebar="" style="max-height: 300px;">
                                                <div class="notification-menu unseen">
                                                    <a class="dropdown-item" href="notifications.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <i class="material-symbols-outlined text-primary">
                                                                    sms
                                                                </i>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <p class="fs-16 fw-medium text-secondary">
                                                                    You have requested to withdrawal
                                                                </p>
                                                                <span class="fs-14 fw-medium">
                                                                    2 hrs ago
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="notification-menu unseen">
                                                    <a class="dropdown-item" href="notifications.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <i class="material-symbols-outlined text-info">
                                                                    person
                                                                </i>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <p class="fs-16 fw-medium text-secondary">
                                                                    A new user added in StarCode
                                                                </p>
                                                                <span class="fs-14 fw-medium">
                                                                    3 hrs ago
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="notification-menu">
                                                    <a class="dropdown-item" href="notifications.html">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <i class="material-symbols-outlined text-success">
                                                                    mark_email_unread
                                                                </i>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <p class="fs-16 fw-medium text-secondary">
                                                                    You have requested to withdrawal
                                                                </p>
                                                                <span class="fs-14 fw-medium">
                                                                    1 day ago
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="dropdown-item text-center text-primary d-block view-all fw-medium rounded-bottom-3"
                                                href="notifications.html">
                                                <span>
                                                    See All Notifications
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="header-right-item">
                                    <div class="dropdown admin-profile">
                                        <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor dropdown-toggle"
                                            data-bs-toggle="dropdown">
                                            <div class="flex-shrink-0 position-relative">
                                                <img alt="admin" class="rounded-circle admin-img-width-for-mobile"
                                                    src="assets/images/admin.png"
                                                    style="width: 40px; height: 40px;" />
                                                <span
                                                    class="d-block bg-success-60 border border-2 border-white rounded-circle position-absolute end-0 bottom-0"
                                                    style="width: 11px; height: 11px;">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu border-0 bg-white dropdown-menu-end">
                                            <div class="d-flex align-items-center info">
                                                <div class="flex-shrink-0">
                                                    <img alt="admin"
                                                        class="rounded-circle admin-img-width-for-mobile"
                                                        src="assets/images/admin.png"
                                                        style="width: 40px; height: 40px;" />
                                                </div>
                                                <div class="flex-grow-1 ms-10">
                                                    <h3 class="fw-medium fs-17 mb-0">
                                                        StarCode Kh
                                                    </h3>
                                                    <span class="fs-15 fw-medium">
                                                        Admin
                                                    </span>
                                                </div>
                                            </div>
                                            <ul class="admin-link mb-0 list-unstyled">
                                                <li>
                                                    <a class="dropdown-item admin-item-link d-flex align-items-center text-body"
                                                        href="my-profile.html">
                                                        <i class="material-symbols-outlined">
                                                            person
                                                        </i>
                                                        <span class="ms-2">
                                                            My Profile
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item admin-item-link d-flex align-items-center text-body"
                                                        href="settings.html">
                                                        <i class="material-symbols-outlined">
                                                            settings
                                                        </i>
                                                        <span class="ms-2">
                                                            Settings
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item admin-item-link d-flex align-items-center text-body"
                                                        href="tickets.html">
                                                        <i class="material-symbols-outlined">
                                                            info
                                                        </i>
                                                        <span class="ms-2">
                                                            Support
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item admin-item-link d-flex align-items-center text-body"
                                                        href="logout.html">
                                                        <i class="material-symbols-outlined">
                                                            logout
                                                        </i>
                                                        <span class="ms-2">
                                                            Logout
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header Area -->
            <div class="main-content-container overflow-hidden">

                @yield('content')

            </div>
        </div>
    </div>
    <!-- Start Main Content Area -->
    <!-- Start Theme Setting Area -->
    <button aria-controls="offcanvasScrolling"
        class="btn btn-primary theme-settings-btn p-0 position-fixed z-2 text-center rounded-circle"
        data-bs-target="#offcanvasScrolling" data-bs-toggle="offcanvas"
        style="bottom: 24px; right: 24px; width: 56px; height: 56px; line-height: 54px;" type="button">
        <i class="text-white ri-settings-3-fill fs-28" data-bs-placement="left"
            data-bs-title="Click On Theme Settings" data-bs-toggle="tooltip">
        </i>
    </button>
    <!-- Start Theme Setting Area -->
    <div aria-labelledby="offcanvasScrollingLabel" class="offcanvas offcanvas-end bg-white border-0"
        data-bs-backdrop="true" data-bs-scroll="true" id="offcanvasScrolling"
        style="box-shadow: 0 4px 20px #2f8fe812 !important; max-width: 300px;" tabindex="-1">
        <div class="offcanvas-header bg-light p-20">
            <h5 class="offcanvas-title fs-18 fw-medium" id="offcanvasScrollingLabel">
                Configuration Panel
            </h5>
            <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas" type="button">
            </button>
        </div>
        <div class="offcanvas-body p-0 overflow-hidden">
            <div class="last-child-none" data-simplebar="" style="max-height: 858px;">
                <div class="p-20 border-bottom child">
                    <h4 class="fs-15 fw-medium mb-12">
                        RTL Mode
                    </h4>
                    <div class="rtl-btn">
                        <label id="switch">
                            <input class="toggle-switch rtl-switch" id="slider" onchange="toggleTheme()"
                                type="checkbox" />
                        </label>
                    </div>
                </div>
                <div class="p-20 border-bottom child">
                    <h4 class="fs-15 fw-medium mb-12">
                        Only Sidebar Dark
                    </h4>
                    <div class="sidebar-light-dark" id="sidebar-light-dark">
                        <input class="toggle-switch sidebar-dark-switch" type="checkbox" />
                    </div>
                </div>
                <div class="p-20 border-bottom child">
                    <h4 class="fs-15 fw-medium mb-12">
                        Only Header Dark
                    </h4>
                    <div class="header-light-dark" id="header-light-dark">
                        <input class="toggle-switch header-dark-switch" type="checkbox" />
                    </div>
                </div>
                <div class="p-20 border-bottom child">
                    <h4 class="fs-15 fw-medium mb-12">
                        Right Sidebar
                    </h4>
                    <div class="right-sidebar" id="right-sidebar">
                        <input class="toggle-switch right-sidebar-switch" type="checkbox" />
                    </div>
                </div>
                <div class="p-20 border-bottom child">
                    <h4 class="fs-15 fw-medium mb-12">
                        Hide Sidebar
                    </h4>
                    <div class="icon-sidebar" id="icon-sidebar">
                        <input class="toggle-switch icon-sidebar-switch" type="checkbox" />
                    </div>
                </div>
                <div class="p-20 border-bottom child">
                    <h4 class="fs-15 fw-medium mb-12">
                        Bordered Card
                    </h4>
                    <div class="card-border" id="card-border">
                        <input class="toggle-switch border-switch" type="checkbox" />
                    </div>
                </div>
                <div class="p-20 border-bottom child">
                    <h4 class="fs-15 fw-medium mb-12">
                        Card Border Radius
                    </h4>
                    <div class="card-radius-square" id="card-radius-square">
                        <input class="toggle-switch border-radius-switch" type="checkbox" />
                    </div>
                </div>
                <div class="p-20 border-bottom child">
                    <a class="btn btn-primary text-white" href="#">
                        Buy StarCode
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Theme Setting Area -->
    <!-- Link Of JS File -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src=" {{ asset('broker/assets/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/sidebar-menu.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/quill.min.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/data-table.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/prism.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/clipboard.min.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/simplebar.min.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/apexcharts.min.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/echarts.min.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/swiper-bundle.min.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/fullcalendar.main.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/jsvectormap.min.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/world-merc.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/custom/apexcharts.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/custom/echarts.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/custom/maps.js') }} "></script>
    <script src=" {{ asset('broker/assets/js/custom/custom.js') }} "></script>
    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'9bc2870fddd8f7b9',t:'MTc2ODExNDcyNg=='};var a=document.createElement('script');a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>

</html>
