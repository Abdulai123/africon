@extends("layouts.appUser")
@section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">My jobs</p>
                                <h4 class="my-1 text-info">0</h4>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bxs-wallet'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Job applied to</p>
                                <h4 class="my-1 text-danger">5</h4>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bxs-wallet'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Pending Jobs</p>
                                <h4 class="my-1 text-success">1</h4>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bxs-group'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Rejected Jobs</p>
                                <h4 class="my-1 text-warning">4</h4>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-bar-chart-alt-2'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <p class="font-weight-bold mb-1 text-secondary">All the jobs</p>
                        <div class="d-flex align-items-center mb-4">
                            <div>
                                <h6 class="mb-0"> Weekly </h6>
                            </div>
                            <div class="">
                                <p class="mb-0 align-self-center font-weight-bold text-success ms-2">4.4% <i class="bx bxs-up-arrow-alt mr-2"></i>
                                </p>
                            </div>
                        </div>
                        <div class="chart-container-0">
                            <canvas id="chart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">All the compagnies</h6>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Print</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Share</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container-1">
                            <canvas id="chart4"></canvas>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Active jobs <span class="badge bg-gradient-quepal rounded-pill" id="act_jobs"></span>
                        </li>
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Expired Jobs <span class="badge bg-gradient-ibiza rounded-pill" id="exp_jobs"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6 class="mb-0">Compagnies and their countries</h6>
                            </div>
                            <div class="dropdown ms-auto">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Print</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Share</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container-2 mt-4">
                            <canvas id="chart2"></canvas>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">New Job post <span class="badge bg-success rounded-pill" id="new_job"></span>
                        </li>
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Active Job post <span class="badge bg-danger rounded-pill" id="active_job"></span>
                        </li>
                        <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Expired Job post <span class="badge bg-primary rounded-pill" id="exp_job"></span>
                        </li>
                    </ul>
                    <!--end row-->
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card radius-10">
                   
                </div>
            </div>
        </div><!--end row-->
    </div>
</div>
@endsection

@section("script")
<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/js/index.js"></script>
@endsection