<x-back-layouts title="dashboard">
    <x-back.breadcrumb page="Dashboard"/>
    {{-- <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Profile Views</h6>
                                    <h6 class="font-extrabold mb-0">112.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Followers</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Following</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div
                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Saved Post</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <div class="row text-center">
        <div class="col-sm-6 col-xl-3">
            <div class="card-box widget-flat border-custom bg-custom text-white">
                <i class="fi-tag"></i>
                <h3 class="m-b-10">25563</h3>
                <p class="text-uppercase m-b-5 font-13 font-600">Total tickets</p>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card-box bg-primary widget-flat border-primary text-white">
                <i class="fi-archive"></i>
                <h3 class="m-b-10">6952</h3>
                <p class="text-uppercase m-b-5 font-13 font-600">Pending Tickets</p>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card-box widget-flat border-success bg-success text-white">
                <i class="fi-help"></i>
                <h3 class="m-b-10">18361</h3>
                <p class="text-uppercase m-b-5 font-13 font-600">Closed Tickets</p>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card-box bg-danger widget-flat border-danger text-white">
                <i class="fi-delete"></i>
                <h3 class="m-b-10">250</h3>
                <p class="text-uppercase m-b-5 font-13 font-600">Deleted Tickets</p>
            </div>
        </div>
    </div>
    <!-- end row -->

</x-back-layouts>