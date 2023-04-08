<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title')</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{ asset('assets/client/css/admin.css') }}">
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>

    
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Management</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="signout.php" class="btn btn-secondary"><i class="material-icons">&#xE169;</i> <span>Đăng Xuất</span></a>	
                        <a href="register.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Thêm Người Dùng</span></a>
                        <a href="{{ route('admin.user') }}" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Quản Lí Sản Phẩm</span></a>
                        					
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình Ảnh</th>						
                        <th>Giá</th>
                        <th>Số Giường</th>
                        <th>Địa Chỉ</th>
                        <th>Xử Lí</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($productList))
                        @foreach ($productList as $key => $item)
                        <tr>
                            <td>{{ $item->masp }}</td>
                            <td > <img src="{{ asset('assets/client/image/'.$item->image) }}" style="width: 170px; height: 100px" alt=""></td>
                            <td><a href="#">{{ $item->price }}</a></td>
                            <td>{{ $item->sogiuong }}</td>                        
                            <td>{{ $item->address }}</td>
                            

                            
                            <td>
                                
                                <a href="{{ url('admin/delete/'.$item->masp ) }}" class="delete" title="Xóa Người Dùng" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
       
        </div>
    </div>
</div>     
</body>
</html>
