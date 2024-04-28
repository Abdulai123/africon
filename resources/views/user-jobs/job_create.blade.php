@extends("layouts.appUser")

@section("style")
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endsection

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Job</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Job</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-bold">Add Job</h6>
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" id="myForm" action="/dashboard/job/create-only">
                                @csrf
                                <div class="border p-3 rounded">
                                    @include('flash-message.flash-msg')
                                    {{-- <div class="mb-3 select2-sm">
                                        <label for="Country" class="form-label">Country</label>
                                        <select class="single-select" id="Country" name="Country" required>
                                            <option value="00">Country one</option>
                                        </select>
                                    </div> --}}
                                    <div class="mb-3 select2-sm">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                               placeholder="Title of the job" required>
                                    </div>
                                    <div class="mb-3 select2-sm">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description"
                                                  placeholder="Description of the job" required></textarea>
                                    </div>
                                    <div class="mb-3 select2-sm">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" class="form-control" id="location" name="location"
                                               placeholder="Location" required>
                                    </div>                                    
                                    <div class="mb-3 select2-sm">
                                        <label for="type" class="form-label">Type</label>
                                        <select class="single-select" id="type" name="type" required>
                                            <option value="Full Time">Full Time</option>
                                            <option value="Part Time">Part Time</option>
                                            <option value="Contract">Contract</option>

                                        </select>
                                    </div>
                                    <div class="mb-3 select2-sm">
                                        <label for="encourage_type" class="form-label">Encourage Type</label>
                                        <select class="single-select" id="encourage_type" name="encourage_type" required>

                                            <option value="00">Encourage Type one</option>
                                            <option value="00">Skill one</option>
                                            <option value="01">Skill two</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 select2-sm">
                                        <label for="experience" class="form-label">Experience</label>
                                        <input type="text" class="form-control" id="experience" name="experience"
                                               placeholder="Experience" required>
                                    </div>
                                    <div class="mb-3 select2-sm">
                                        <label for="education" class="form-label">Education</label>
                                        <input type="text" class="form-control" id="education" name="education"
                                               placeholder="Education" required>
                                    </div>
                                    <div class="mb-3 select2-sm">
                                        <label for="pay" class="form-label">Min Pay</label>
                                        <input type="number" class="form-control" id="pay" name="pay"
                                               placeholder="Pay" required>
                                    </div>
                                    
                                    <div class="mb-3 select2-sm">
                                        <label for="skills" class="form-label">Skills</label>
                                        <select class="single-select" id="skills" name="skills"  required>
                                            <option value="00">Skill one</option>
                                            <option value="01">Skill two</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 select2-sm">
                                        <label for="date-time" class="form-label">Deadline</label>
                                        <input type="text" class="form-control" id="date-time" name="deadline"
                                               placeholder="Date Time" required>
                                    </div>
                                    <div class="mb-3 select2-sm">
                                        <label for="language" class="form-label">Language</label>
                                        <select class="single-select" id="language" name="language"  required>
                                            <option value="00">Language one</option>
                                            <option value="01">Language two</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 select2-sm">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="single-select" id="status" name="status" required>
                                            <option value="open">Open</option>
                                            <option value="closed">Closed</option>
                                            <option value="expired">Expired</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 select2-sm">
                                        <label for="visibility" class="form-label">Visibility</label>
                                        <select class="single-select" id="visibility" name="visibility" required>
                                            <option value="0">Private</option>
                                            <option value="1">Public</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">save</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
@endsection



@section("script")
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datetimepicker/js/legacy.js')}}"></script>
    <script src="{{asset('assets/plugins/datetimepicker/js/picker.js')}}"></script>
    <script src="{{asset('assets/plugins/datetimepicker/js/picker.time.js')}}"></script>
    <script src="{{asset('assets/plugins/datetimepicker/js/picker.date.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js')}}"></script>
    <script>
        $('.single-select').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
        $('.multiple-select').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
    </script>
    <script>
        $(function () {
            $('#date-time').bootstrapMaterialDatePicker({
                format: 'YYYY-MM-DD HH:mm'
            });
            $('#date').bootstrapMaterialDatePicker({
                time: false
            });
            $('#time').bootstrapMaterialDatePicker({
                date: false,
                format: 'HH:mm'
            });
        });
    </script>
@endsection
