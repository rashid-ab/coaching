@extends('layouts.app')
@section('content')
   <!-- Dashboard Section start -->
    <section class="site-main-wrapper">
        <!-- Responsive Top bar Start -->
         <div class="bg-white d-lg-none px-3">
            <div class="d-flex flex-wrap align-items-center">
                <button class="p-0 border-0 bg-transparent mr-3" type="button" data-toggle="modal" data-target="#navbar_popup">
                    <i class="fa fa-bars color-grey_c" style="font-size:20px;"></i>
                </button>
                <div class="top-bar-log">
                    <img src="{{ asset('public/images/logo.png') }}" alt="Site-logo" style="max-height:60px;">
                </div>
                <div class="top-bar-icons ml-auto">
                    <div class="icons-top-profile d-flex flex-wrap align-items-center">
                        <span class="position-relative alert_icon mr-4"><a href="{{ url('/notifications') }}"><i class="fa fa-bell"></i></a></span>
                        <a href="{{ url('/inbox') }}"><i class="fa fa-envelope mr-4"></i></a>
                        <div class="dropdown ml-auto">
                            <button class="p-0 border-0 bg-transparent" type="button" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notifications">
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#profile_popup">Profile</a>
                                <a class="dropdown-item" href="pages/account_settings.html">Account Settings</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <!-- Responsive Top bar End -->
        <div class="row m-0">
            <div class="col-lg-3 pl-lg-0 d-none d-lg-block position-lg-fixed">
                @include('partials.aside')
            </div>
            <div class="col-lg-6 px-0 ml-lg-25">
               <div class="dashboard-chart row mx-0">
                  <h3 class="mt-5 w-100 mb-4 px-3" style="font-weight:700;color:#666687;">Manage User</h3> 
                    <div class="chart-card col-md-6 mb-3">
                        <div class="card-wrap d-flex flex-wrap  bg-white align-items-center box-o-color p-3">
                            <div class="card-detail flex-1">
                                <h3>203</h3>
                                <p class="mb-0">Total Number of users</p>
                            </div>
                            <div class="card-icon">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="chart-card col-md-6 mb-3">
                        <div class="card-wrap d-flex flex-wrap bg-white align-items-center box-purple-color p-3">
                            <div class="card-detail flex-1">
                                <h3>92</h3>
                                <p class="mb-0">New User this month</p>
                            </div>
                            <div class="card-icon">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="chart-card col-md-6 mb-3">
                        <div class="card-wrap d-flex flex-wrap bg-white align-items-center box-sky-color p-3">
                            <div class="card-detail flex-1">
                                <h3>150</h3>
                                <p class="mb-0">Free Trial Users</p>
                            </div>
                            <div class="card-icon">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="chart-card col-md-6 mb-3">
                        <div class="card-wrap d-flex flex-wrap bg-white align-items-center box-red-color p-3">
                            <div class="card-detail flex-1">
                                <h3>53</h3>
                                <p class="mb-0">Paid Users</p>
                            </div>
                            <div class="card-icon">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="all_user_table bg-white pt-3 pb-sm-3">
                            <div class="top-bar-table d-flex flex-wrap px-3 align-items-center">
                               <h5>All Users</h5>
                               <div class="search_fields d-flex flex-wrap ml-sm-auto w-sm-100">
                                   <input type="text" class="mr-3 table-search-field"  placeholder="Search Users">
                                    <div class="dropdown">
                                        <button class="btn bg-grey-c text-sm-center text-left dropdown-toggle" type="button" id="user_type_drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         User Type
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user_type_drop">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        <div class="table-wrap">
                        <div class="users_table">
                            <div class="row mx-0 mt-4 px-2 border-bottom pb-1">
                                <div class="col-3 px-8"><span class="user_table_text text-left">Account</span></div>
                                <div class="col-2 px-8"><span class="user_table_text">Reg.Date</span></div>
                                <div class="col-3 px-8"><span class="user_table_text">Affiliate Partner</span></div>
                                <div class="col-2 px-8"><span class="user_table_text">Groups Joined</span></div>
                                <div class="col-1 px-8"><span class="user_table_text">Plan</span></div>
                                <div class="col-1 px-8"></div>
                            </div>
                            <div class="row m-0 px-2 mb-3">
                                <div class="col-3 px-8">
                                    <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100">
                                        June 23, 2020
                                    </span>
                                </div>
                                <div class="col-3 px-8">
                                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100">
                                        3
                                    </span>
                                </div>
                                <div class="col-1 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                        Free
                                    </span>
                                </div>
                                <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                    <a href="#" class="text-decoration-none color-grey_c"><i class="fa fa-ellipsis-h "></i></a>
                                </div>
                            </div>
                            <div class="row m-0 px-2 mb-3">
                                <div class="col-3 px-8">
                                    <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100">
                                        June 23, 2020
                                    </span>
                                </div>
                                <div class="col-3 px-8">
                                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100">
                                        3
                                    </span>
                                </div>
                                <div class="col-1 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                        Free
                                    </span>
                                </div>
                                <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                    <a href="#" class="text-decoration-none color-grey_c"><i class="fa fa-ellipsis-h "></i></a>
                                </div>
                            </div>
                            <div class="row m-0 px-2 mb-3">
                                <div class="col-3 px-8">
                                    <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100">
                                        June 23, 2020
                                    </span>
                                </div>
                                <div class="col-3 px-8">
                                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100">
                                        3
                                    </span>
                                </div>
                                <div class="col-1 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                        Free
                                    </span>
                                </div>
                                <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                    <a href="#" class="text-decoration-none color-grey_c"><i class="fa fa-ellipsis-h "></i></a>
                                </div>
                            </div>
                            <div class="row m-0 px-2 mb-3">
                                <div class="col-3 px-8">
                                    <div class="d-flex flex-wrap align-items-center justify-1200-content-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100">
                                        June 23, 2020
                                    </span>
                                </div>
                                <div class="col-3 px-8">
                                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="35px" width="35px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100">
                                        3
                                    </span>
                                </div>
                                <div class="col-1 px-8 d-flex align-items-center">
                                    <span class="table_tiny_text d-block text-center w-100 text-uppercase text-o-color">
                                        Free
                                    </span>
                                </div>
                                <div class="col-1 px-8 d-flex align-items-center justify-content-center">
                                    <a href="#" class="text-decoration-none color-grey_c"><i class="fa fa-ellipsis-h "></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        </div>
        <div class="col-lg-3 pr-lg-0 d-lg-block d-none position-lg-fixed right-0">
            @include('partials.profile')
        </div>
      </div>
          <!-- Modals on resposive -->
        <!-- Modal -->
        <div class="modal fade d-lg-none" id="profile_popup" tabindex="-1" role="dialog" aria-labelledby="profile_popupTitle" aria-hidden="true">
            <div class="modal-dialog position-fixed w-100 h-100 m-0" role="document">
                <div class="modal-content w-100 h-100 border-0" style="border-radius:0px !important;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body overflow-y-auto">
                        <div class="">
                            <aside class="side-nav bg-white">
                                <div class="sidebar-profile text-center col-12">
                                    <div class="border-bottom">
                                        <img class="rounded-circle object-cover" src="{{ asset('public/images/profile.jpg') }}" width="200px" height="200px">
                                        <h5 class="mt-3">Tom Matthews</h5>
                                        <p class="text-uppercase color-grey_c">Admin</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6 class="mb-0 my-4 color-grey_c">New Affiliate Requests</h6>
                                    <div class="d-flex mb-4 flex-wrap align-items-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="40px" width="40px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                        <span class="table_tiny_text text-center ml-auto mr-3">
                                            June 23, 2020
                                        </span>
                                    </div>
                                    <div class="d-flex mb-4 flex-wrap align-items-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="40px" width="40px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                        <span class="table_tiny_text text-center ml-auto mr-3">
                                            June 23, 2020
                                        </span>
                                    </div>
                                    <div class="d-flex mb-4 flex-wrap align-items-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="40px" width="40px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                        <span class="table_tiny_text text-center ml-auto mr-3">
                                            June 23, 2020
                                        </span>
                                    </div>
                                    <div class="d-flex mb-4 flex-wrap align-items-center">
                                        <img class="rounded-circle mt-3" src="{{ asset('public/images/man_pic.jpg') }}" alt="" height="40px" width="40px">
                                        <div class="user-info mt-3 pl-2">
                                            <h6 class="mb-0">Grant Marshall</h6>
                                            <p>admin@mail.com</p>
                                        </div>
                                        <span class="table_tiny_text text-center ml-auto mr-3">
                                            June 23, 2020
                                        </span>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="navbar_popup" tabindex="-1" role="dialog" aria-labelledby="navbar_popupTitle" aria-hidden="true">
            <div class="modal-dialog position-fixed w-100 h-100 m-0" role="document">
                <div class="modal-content w-100 h-100 border-0" style="border-radius:0px !important;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body overflow-y-auto">
                        @include('partials.aside')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section End -->
    @endsection