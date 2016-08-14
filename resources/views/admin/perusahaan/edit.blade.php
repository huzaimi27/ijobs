@extends('admin.app')

@section('content')

        <!-- Theme JS files -->
<script type="text/javascript" src="{{asset('administrator/assets/js/core/libraries/jasny_bootstrap.min.js')}}"></script>
<!-- Theme JS form layout horizontal files -->
<script type="text/javascript" src="{{asset('administrator/assets/js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<!-- Theme JS ckeditor -->
<script type="text/javascript" src="{{asset('administrator/ckeditor/ckeditor.js')}}"></script>
<!--<script type="text/javascript" src="{{asset('administrator/')}}"></script>-->
<!-- Theme JS upload image -->
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/uploaders/fileinput.min.js')}}"></script>
<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/notifications/pnotify.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('administrator/assets/js/core/libraries/jquery_ui/core.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/forms/selects/selectboxit.min.js')}}"></script>

<script type="text/javascript" src="{{asset('administrator/assets/js/pages/form_select2.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/pages/uploader_bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/pages/form_multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/pages/form_selectbox.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/pages/form_controls_extended.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/pages/form_layouts.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/pages/navbar_hideable.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/pages/editor_ckeditor.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/pages/form_checkboxes_radios.js')}}"></script>




<div class="panel panel-white">
    <div class="panel-heading">
        <h6 class="panel-title">
            <i class="icon-cart position-left"></i> Edit Data Perusahaan Disini
        </h6>
    </div>

    {!!Form::open(array('url' => 'admin/perusahaan/update', 'class'=>'form-horizontal', 'files' => true ))!!}
    <div class="panel-body">
        <div class="panel panel-flat">
            <h6 class="panel-title">
                <table>
                    <tr>
                        <td>
                            <label class="label label-default"><span>1</span></label>
                        </td>
                        <td class="title-item">
                            Informasi Akun
                        </td>
                    </tr>
                </table>
            </h6>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-lg-2 control-label text-semibold">Nama Perusahaan</label>
                    <div class="col-lg-8">
                        <input type="text" name="nama_perusahaan" class="form-control" value="{{$model_akun->nama_perusahaan}}" required />
                        <input type="hidden" name="id_perusahaan" class="form-control" value="{{$model->id_profilperusahaan}}" />
                        <input type="hidden" name="id_akun" class="form-control" value="{{$model->id_perusahaan}}" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label text-semibold">Email Perusahaan</label>
                    <div class="col-lg-8">
                        <input type="email" name="email" class="form-control" value="{{$model_akun->email_perusahaan}}" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label text-semibold">Password</label>
                    <div class="col-lg-8">
                        <input type="password" name="password" class="form-control" value="{{$model_akun->password}}" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label text-semibold">Re-Password</label>
                    <div class="col-lg-8">
                        <input type="password" class="form-control" value="{{$model_akun->password}}" required />
                    </div>
                </div>
            </div>
        </div> <!-- #step 2 -->
        <div class="panel panel-flat">
            <h6 class="panel-title">
                <table>
                    <tr>
                        <td>
                            <label class="label label-default"><span>2</span></label>
                        </td>
                        <td class="title-item">
                            Informasi Perusahaan
                        </td>
                    </tr>
                </table>
            </h6>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-lg-2 control-label text-semibold">Alamat</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" placeholder="" value="{{$model->alamat}}" name="alamat" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label text-semibold">website</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" placeholder="" value="{{$model->website}}" name="website" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label text-semibold">Jenis Badan Usaha</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" placeholder="" name="j_badanusaha" value="{{$model->j_badanusaha}}" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label text-semibold">Telepon</label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" placeholder="" value="{{$model->telepon}}" name="telepon" required="">
                    </div>
                    <div class="col-lg-4">
                        <div class="input-group">
                            <input type="text" class="form-control" value="{{$model->fax}}"  placeholder="Masukkan Fax  perusahaan jika ada. . ." name="fax">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-2 control-label text-semibold">Keterangan</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$model->keterangan}}" placeholder="" name="keterangan" required="">
                    </div>
                </div>

            </div>
        </div> <!-- #step 3 -->
        <div class="panel panel-flat" style="border: none;">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-lg-2 control-label text-semibold"></label>
                    <div class="col-lg-5">
                        <button type="submit" name="" class="btn btn-lg btn-block btn-primary" id="pnotify-solid-success">Simpan</button>
                    </div>
                    <div class="col-lg-5">
                        <button type="reset" class="btn btn-lg btn-block btn-default">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

    <!-- Modal Merek -->
    {{--@include('admin.produk.merek')--}}
    {{--<!-- /iconified modal -->--}}

    {{--<!-- Modal Kategori -->--}}
    {{--@include('admin.produk.kategori')--}}
    {{--<!-- /iconified modal -->--}}

    {{--<!-- Modal Jenis -->--}}
    {{--@include('admin.produk.jenisproduk')--}}
    {{--<!-- /iconified modal -->--}}


    {{--    {!!Form::close()!!}--}}
</div>


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('mete[name="_token"]').attr('content')
        }
    })

    $('#frmMerek').on('submit', function (e) {
        e.preventDefault();
        var form = $('#frmMerek');
        var formData = form.serialize();
        var url = form.attr('action');
        $.ajax({
            type: 'post',
            url: url,
            data: formData,
            // async   : true,
            // dataType : 'json',
            success: function (data) {
                console.log(data);
            }
        });
    })

    $('#frmKategori').on('submit', function (e) {
        e.preventDefault();
        var form = $('#frmKategori');
        var formData = form.serialize();
        var url = form.attr('action');
        $.ajax({
            type: 'post',
            url: url,
            data: formData,
            // async   : true,
            // dataType : 'json',
            success: function (data) {
                console.log(data);
            }
        });
    })

    $('#frmJenisproduk').on('submit', function (e) {
        e.preventDefault();
        var form = $('#frmJenisproduk');
        var formData = form.serialize();
        var url = form.attr('action');
        $.ajax({
            type: 'post',
            url: url,
            data: formData,
            // async   : true,
            // dataType : 'json',
            success: function (data) {
                console.log(data);
            }
        });
    })

</script>

@endsection