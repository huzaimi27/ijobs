<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">
        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">ijobs@gmail.com</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Makassar
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <!-- Main -->
                    <li class="navigation-header"><span>Dashboard</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="active"><a href="{{url('admin/dashboard')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li><a href="{{url('admin/lamaran')}}"><i class="icon-equalizer"></i> <span>Lamaran Perusahaan</span></a></li>
                    <li><a href="{{url('admin/konfirmasi')}}"><i class="icon-equalizer"></i> <span>Konfirmasi Perusahaan</span></a></li>
                    
                    <li class="navigation-header active"><span>Master Data</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li><a href="{{url('admin/perusahaan/view')}}"><i class="icon-paragraph-left3"></i> <span>Semua Perusahaan</span></a></li>
                    <li><a href="{{url('admin/pengguna/')}}"><i class="icon-paragraph-left3"></i> <span>Semua Pengguna</span></a></li>
                    <li><a href="{{url('admin/perusahaan/create')}}"><i class="icon-plus3"></i> <span>Tambah Perusahaan Baru</span></a></li>
                    
                    {{--<li class="navigation-header"><span>Cover slider</span> <i class="icon-menu" title="Main pages"></i></li>--}}
                    {{--<li><a href="{{url('admin/slider/create')}}"><i class="icon-images3"></i> <span>Item Slider</span></a></li>--}}
                    {{--<li><a href="{{url('admin/kategori/')}}"><i class="icon-equalizer"></i> <span>Semua Kategori Produk</span></a></li>--}}
                    {{--<li><a href="{{url('admin/jenisproduk/')}}"><i class="icon-menu7"></i> <span>Semua Jenis Produk</span></a></li>--}}
                    {{--<li><a href="{{url('admin/merek/')}}"><i class="icon-menu2"></i> <span>Semua Merek</span></a></li>--}}
                </ul>
            </div>
        </div>
        <!-- /main navigation -->
    </div>
</div>