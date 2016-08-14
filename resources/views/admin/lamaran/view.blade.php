@extends('admin.app')

@section('content')

        <!-- Theme JS files -->
<script type="text/javascript" src="{{asset('administrator/assets/js/core/libraries/jquery_ui/datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/tables/datatables/extensions/natural_sort.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/forms/selects/select2.min.js')}}"></script>

<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/notifications/bootbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>

<script type="text/javascript" src="{{asset('administrator/assets/js/pages/tasks_list.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/pages/components_modals.js')}}"></script>


<div class="panel panel-white">
    <div class="panel-heading">
        <h6 class="panel-title"><i class="icon-store position-left"></i> Daftar Semua Lamaran</h6>
        <div class="heading-elements">
            <a href="{{url('admin/perusahaan/create')}}" class="create btn btn-primary"><i class="icon-plus3 position-left"></i>Tambah</a>
        </div>
    </div>

    <div class="panel-body">
        <table class="table tasks-list table-lg">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Perusahaan</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Website</th>
                <th>Telepon</th>
                <th>Fax</th>
                <th class="text-center text-muted" style="width: 120px;"><i class="icon-checkmark3"></i></th>
            </tr>
            </thead>
            <tbody>
            @foreach($model_perusahaan as $key => $d)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>
                        <div class="text-semibold text-uppercase">{{ $model_akun[$key]->nama_perusahaan }}</div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <span class="label label-info label-icon-sm">{{$model_akun[$key]->email_perusahaan}}</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-transparent">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-home position-left"></i></div>
                            <div class="text-semibold  text-uppercase">{{ $d->alamat }}</div>
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-transparent">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-send position-left"></i></div>
                            <span>{{ $d->website  }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group input-group-transparent">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-earphone position-left"></i></div>
                            <div class="text-semibold text-uppercase">{{ $d->telepon }}</div>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="input-group input-group-transparent">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-print position-left"></i></div>
                            <span class="text-semibold text-primary">{{$d->fax}}</span>
                        </div>
                    </td>
                    <td class="text-center">
                        <a href="{{url('admin/perusahaan/edit/'.$d->id_profilperusahaan)}}" class='btn btn-info btn-xs'> <i class="icon-pencil"></i></a>
                        <a href="{{url('admin/perusahaan/delete/'.$d->id_profilperusahaan)}}" class='delete btn btn-danger btn-xs'> <i class="icon-trash"></i> </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection