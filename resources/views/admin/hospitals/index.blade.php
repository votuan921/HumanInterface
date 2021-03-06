@extends('admin.layouts.master')
@section('customcss')
    <link rel="stylesheet" href="/adminlte/css/toggle-switch.css"/>
    <link rel="stylesheet" href="/adminlte/css/startmin.css"/>
    <style >
        .row{
            font-size: medium;
        }
        .input-group-addon {
            border: none;
        }
    </style>
@endsection
@section('pagename')
    <div class="container-fluid">
        <section class="content">
            <div class="row" style="background-color: white">
                <div class="col-lg-12">
                    <h1 class="page-header">Quản lý thông tin bệnh viện</h1>

                    <div class="body-box">
                        
                    <!--Create , Edit -->
                    <div style="margin:10px 0px 10px 0px">
                        <a href="/admin/hospitals/create" type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-plus-sign"></span>
                        Tạo
                        </a>
                    </div>

                    <!--Show entries,search-->
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="input-group">
                                <span class="input-group-addon"title="Show">Hiển thị</span>
                                <select class="form-control">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>                  
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon" title="City">Tỉnh/TP</span>
                                <select class="form-control">
                                    <option value="1">HaNoi</option>
                                    <option value="2">ThaiBinh</option>
                                    <option value="3">DaNang</option>
                                    <option value="4">TP.HCM</option>
                                </select>
                            </div>
                        </div>
                         <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon" title="Level">Tuyến</span>
                                <select class="form-control">
                                    <option value="TU">Trung ương</option>
                                    <option value="TP">Tỉnh/thành phố</option>
                                    <option value="HUYEN">Quận/huyện</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <form action="/search" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q" placeholder="Nhập tên bệnh viện"> 
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>

                    <!--Table content-->
                    <div style="overflow-x:auto">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-info">
                                <tr>
                                    <th>#</th>
                                    <th>Bệnh viện</th>
                                    <th>Địa chỉ</th>
                                    <th>Tuyến</th>
                                    <th>Tỉnh/TP</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Bạch Mai</td>
                                    <td>78 Giải Phóng, Hà Nội</td>
                                    <td>Trung ương</td>
                                    <td>Hà Nội</td>
                                    <td><a class="btn btn-default" href="/admin/hospitals/15/edit"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                            <tr>
                                    <td>2</td>
                                    <td>Bạch Mai</td>
                                    <td>78 Giải Phóng, Hà Nội</td>
                                    <td>Trung ương</td>
                                    <td>Hà Nội</td>
                                    <td><a class="btn btn-default" href="/admin/hospitals/15/edit"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Bạch Mai</td>
                                    <td>78 Giải Phóng, Hà Nội</td>
                                    <td>Trung ương</td>
                                    <td>Hà Nội</td>
                                    <td><a class="btn btn-default" href="/admin/hospitals/15/edit"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Bạch Mai</td>
                                    <td>78 Giải Phóng, Hà Nội</td>
                                    <td>Trung ương</td>
                                    <td>Hà Nội</td>
                                    <td><a class="btn btn-default" href="/admin/hospitals/15/edit"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Bạch Mai</td>
                                    <td>78 Giải Phóng, Hà Nội</td>
                                    <td>Trung ương</td>
                                    <td>Hà Nội</td>
                                    <td><a class="btn btn-default" href="/admin/hospitals/15/edit"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            Hiển thị 1 to 10 of 57
                        </div>
                        <div class="col-sm-7">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled"><a href="#">Trước</a></li>
                                <li class="paginate_button active"><a href="#">1</a></li>
                                <li class="paginate_button"><a href="#">2</a></li>
                                <li class="paginate_button"><a href="#">3</a></li>
                                <li class="paginate_button"><a href="#">4</a></li>
                                <li class="paginate_button"><a href="#">5</a></li>
                                <li class="paginate_button"><a href="#">6</a></li>
                                <li class="paginate_button"><a href="#">Tiếp</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('content')
@endsection
@section('customscript')
    <script src="/adminlte/js/raphael.min.js"></script>
    <script src="/adminlte/js/morris.min.js"></script>
    <script src="/adminlte/js/metisMenu.min.js"></script>
    <script src="/adminlte/js/startmin.js"></script>
@endsection
