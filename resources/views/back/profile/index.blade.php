<x-back-layouts title="Roles">
    <x-back.breadcrumb page="My Profile" />
    <div class="row">
        <div class="col-sm-12">
            <!-- meta -->
            <div class="profile-user-box card-box bg-custom">
                <div class="row">
                    <div class="col-sm-6">
                        <span class="float-left mr-3"><img src="assets/images/users/avatar-1.jpg" alt=""
                                class="thumb-lg rounded-circle"></span>
                        <div class="media-body text-white">
                            <h4 class="mt-1 mb-1 font-18">{{ auth()->user()->name }}</h4>
                            <p class="font-13 text-light"> {{ auth()->user()->getRoleNames()->join(', ') }}</p>
                            <p class="text-light mb-0">California, United States</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-right">
                            <a href="{{ route('update.profile') }}" class="btn btn-light waves-effect">
                                <i class="mdi mdi-account-settings-variant mr-1"></i> Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ meta -->
        </div>
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-4">
            <!-- Personal-Information -->
            <div class="card-box">
                <h4 class="header-title mt-0 ">Personal Information</h4>
                <div class="panel-body">
                    <p class="text-muted font-13">
                        Hye, I’m Johnathan Doe residing in this beautiful world. I create websites and
                        mobile apps with great UX and UI design. I have done work with big companies
                        like Nokia, Google and Yahoo. Meet me or Contact me for any queries. One Extra
                        line for filling space. Fill as many you want.
                    </p>

                    <hr />

                    <div class="text-left">
                        <p class="text-muted font-13"><strong>Full Name :</strong> <span
                                class="m-l-15">Johnathan Deo</span></p>

                        <p class="text-muted font-13"><strong>Mobile :</strong><span
                                class="m-l-15">(+12) 123 1234 567</span></p>

                        <p class="text-muted font-13"><strong>Email :</strong> <span
                                class="m-l-15">coderthemes@gmail.com</span></p>

                        <p class="text-muted font-13"><strong>Location :</strong> <span
                                class="m-l-15">USA</span></p>

                        <p class="text-muted font-13"><strong>Languages :</strong>
                            <span class="m-l-5">
                                <span class="flag-icon flag-icon-us m-r-5 m-t-0" title="us"></span>
                                <span>English</span>
                            </span>
                            <span class="m-l-5">
                                <span class="flag-icon flag-icon-de m-r-5" title="de"></span>
                                <span>German</span>
                            </span>
                            <span class="m-l-5">
                                <span class="flag-icon flag-icon-es m-r-5" title="es"></span>
                                <span>Spanish</span>
                            </span>
                            <span class="m-l-5">
                                <span class="flag-icon flag-icon-fr m-r-5" title="fr"></span>
                                <span>French</span>
                            </span>
                        </p>

                    </div>

                    <ul class="social-links list-inline mt-4 mb-0">
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Personal-Information -->

            <div class="card-box ribbon-box">
                <div class="ribbon ribbon-primary">Messages</div>
                <div class="clearfix"></div>
                <div class="inbox-widget">
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Tomaslau</p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                            <p class="inbox-item-date">
                                <button type="button"
                                    class="btn btn-icon btn-sm waves-effect waves-light btn-success">
                                    Reply </button>
                            </p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Stillnotdavid</p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                            <p class="inbox-item-date">
                                <button type="button"
                                    class="btn btn-icon btn-sm waves-effect waves-light btn-success">
                                    Reply </button>
                            </p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Kurafire</p>
                            <p class="inbox-item-text">Nice to meet you</p>
                            <p class="inbox-item-date">
                                <button type="button"
                                    class="btn btn-icon btn-sm waves-effect waves-light btn-success">
                                    Reply </button>
                            </p>
                        </div>
                    </a>

                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Shahedk</p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">
                                <button type="button"
                                    class="btn btn-icon btn-sm waves-effect waves-light btn-success">
                                    Reply </button>
                            </p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Adhamdannaway</p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                            <p class="inbox-item-date">
                                <button type="button"
                                    class="btn btn-icon btn-sm waves-effect waves-light btn-success">
                                    Reply </button>
                            </p>
                        </div>
                    </a>

                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Tomaslau</p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                            <p class="inbox-item-date">
                                <button type="button"
                                    class="btn btn-icon btn-sm waves-effect waves-light btn-success">
                                    Reply </button>
                            </p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg"
                                    class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author">Stillnotdavid</p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                            <p class="inbox-item-date">
                                <button type="button"
                                    class="btn btn-icon btn-sm waves-effect waves-light btn-success">
                                    Reply </button>
                            </p>
                        </div>
                    </a>
                </div>
            </div>

        </div>


        <div class="col-xl-8">

            <div class="row">

                <div class="col-sm-4">
                    <div class="card-box tilebox-one">
                        <i class="icon-layers float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                        <h2 class="" data-plugin="counterup">1,587</h2>
                        <span class="badge badge-custom"> +11% </span> <span class="text-muted">From
                            previous period</span>
                    </div>
                </div><!-- end col -->

                <div class="col-sm-4">
                    <div class="card-box tilebox-one">
                        <i class="icon-paypal float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                        <h2 class="">$<span data-plugin="counterup">46,782</span></h2>
                        <span class="badge badge-danger"> -29% </span> <span class="text-muted">From
                            previous period</span>
                    </div>
                </div><!-- end col -->

                <div class="col-sm-4">
                    <div class="card-box tilebox-one">
                        <i class="icon-rocket float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                        <h2 class="" data-plugin="counterup">1,890</h2>
                        <span class="badge badge-custom"> +89% </span> <span class="text-muted">Last
                            year</span>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->


            <div class="card-box">
                <h4 class="header-title mt-0 mb-3">Experience</h4>
                <div class="">
                    <div class="">
                        <h5 class="text-custom">Lead designer / Developer</h5>
                        <p class="mb-0">websitename.com</p>
                        <p><b>2010-2015</b></p>

                        <p class="text-muted font-13 mb-0">Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book.
                        </p>
                    </div>

                    <hr>

                    <div class="">
                        <h5 class="text-custom">Senior Graphic Designer</h5>
                        <p class="mb-0">coderthemes.com</p>
                        <p><b>2007-2009</b></p>

                        <p class="text-muted font-13 mb-0">Lorem Ipsum is simply dummy text
                            of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book.
                        </p>
                    </div>

                </div>
            </div>

            <div class="card-box">
                <h4 class="header-title mb-3">My Projects</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Start Date</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Assign</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Adminox Admin</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-info">Work in Progress</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Adminox Frontend</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-success">Pending</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Adminox Admin</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-pink">Done</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Adminox Frontend</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-purple">Work in Progress</span></td>
                                <td>Coderthemes</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Adminox Admin</td>
                                <td>01/01/2015</td>
                                <td>07/05/2015</td>
                                <td><span class="label label-warning">Coming soon</span></td>
                                <td>Coderthemes</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- end col -->

    </div>
    <!-- end row -->

</x-back-layouts>