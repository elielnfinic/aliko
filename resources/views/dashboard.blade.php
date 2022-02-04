@extends("structure_menus")

@section("zone_principale")
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 col-xl-12 grid-margin stretch-card">
                    <div class="row w-100 flex-grow">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title">Website Audience Metrics</p>
                                    <p class="text-muted">25% more traffic than previous week</p>
                                    <div class="row mb-3">
                                        <div class="col-md-7">
                                            <div class="d-flex justify-content-between traffic-status">
                                                <div class="item">
                                                    <p class="mb-">Users</p>
                                                    <h5 class="font-weight-bold mb-0">93,956</h5>
                                                    <div class="color-border"></div>
                                                </div>
                                                <div class="item">
                                                    <p class="mb-">Bounce Rate</p>
                                                    <h5 class="font-weight-bold mb-0">58,605</h5>
                                                    <div class="color-border"></div>
                                                </div>
                                                <div class="item">
                                                    <p class="mb-">Page Views</p>
                                                    <h5 class="font-weight-bold mb-0">78,254</h5>
                                                    <div class="color-border"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <ul class="nav nav-pills nav-pills-custom justify-content-md-end" id="pills-tab-custom"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-home-tab-custom" data-toggle="pill"
                                                       href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true">
                                                        Day
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-career"
                                                       role="tab" aria-controls="pills-profile" aria-selected="false">
                                                        Week
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#pills-music"
                                                       role="tab" aria-controls="pills-contact" aria-selected="false">
                                                        Month
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <canvas id="audience-chart"></canvas>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>





            </div>



            <!-- row end -->
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        <footer class="footer">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed By: <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
