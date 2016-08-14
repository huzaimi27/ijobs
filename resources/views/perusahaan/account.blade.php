@extends('admin.app')

@section('content')

<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('administrator/assets/js/core/libraries/jquery_ui/datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/tables/datatables/extensions/natural_sort.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

<script type="text/javascript" src="{{asset('administrator/assets/js/pages/tasks_list.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/pages/form_layouts.js')}}"></script>

<div class="panel panel-white">
    <div class="panel-heading">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <h6 class="panel-title">
                    <i class="icon-eye-plus position-left"></i> Pengaturan Akun
                </h6>
                <div class="heading-elements">
                    <button type="button" class="btn btn-primary heading-btn" data-toggle="modal" data-target="#modal_backdrop">
                        <i class="icon-plus3 position-left"></i> Tambah Admin
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <!-- Task manager table -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <table class="table tasks-list table-lg">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Periode</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Akses Level</th>
                            <th>Tanggal Register</th>
                            <th>Status</th>
                            <th class="text-center text-muted" style="width: 30px;"><i class="icon-checkmark3"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td>Today</td>
                            <td>
                                <div class="text-semibold">abustore</div>
                                <div class="text-muted">
                                    ijobs@gmail.com
                                </div>
                            </td>
                            <td>
                                <div class="text-success">
                                    1234567890
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <span class="status-mark position-left bg-danger"></span> Normal
                                </div>
                            </td>
                            <td>
                                <div class="input-group input-group-transparent">
                                    <i class="icon-calendar2 position-left"></i> 22 January, 15
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <span class="status-mark position-left bg-success"></span> Administrator
                                </div>
                            </td>
                            <td class="text-center">
                                <a href="{{url('')}}" class="text-danger-600" id="account-administrator"><i class="icon-cross2"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /task manager table -->
    </div>
</div>

<!-- Disabled backdrop -->
<div id="modal_backdrop" class="modal fade" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title">Tambah Akun</h5>
                </div>

                <div class="modal-body">
                    <p class="text-muted">
                        Gunakan akses anda sebaik-sebaikya!
                    </p>

                    <hr>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Username</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-9">
                            <input type="email" class="form-control" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Password</label>
                        <div class="col-lg-9">
                            <div class="label-indicator-absolute">
                                <input type="password" class="form-control" placeholder="" required>
                                <span class="label password-indicator-label-absolute"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Konfirmasi Password</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" placeholder="" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Keluar</button>
                    <button type="button" class="btn btn-primary"><i class="icon-plus3"></i> Tambah akun</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /disabled backdrop -->


@endsection