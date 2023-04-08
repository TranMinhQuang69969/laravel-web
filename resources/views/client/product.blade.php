{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> --}}
    {{-- <p>{{ $hi }}</p> --}}

    {{-- {{ request()->id }} --}}

    {{-- @for ($i=0; $i<=5; $i++)
        <p>{{ $hi }}</p>
    @endfor --}}

    {{-- @foreach ($arr as $key => $item)
        <p>Phần tử : {{ $item }}</p>
    @endforeach --}}

    
{{-- 
    
</body>
</html> --}}
@extends('layout.index')

@section('title')
    {{-- {{$title}} --}}
@endsection

@section('sidebar')
    @parent
    <h3>Home sidebar</h3>
@endsection

@section('content')
    <h1>Trang chu</h1>
@endsection

@section('search')
    @include('client.block.search')
@endsection

@section('productList')
<section id="featured" class="featured container">

    <div class="title-section">
        <h2 class="title">NỔI BẬT</h2>
        <span class="border-icon">
            <span class="title-icon"></span>
        </span>
    </div>
    <div class="box-container row">
                  
                        @if (!empty($data))
                        @foreach ($data as $key => $item)
                        <div class="box">
                            <a href="{{ url('sanpham/'.$item->masp ) }}">
                                <div class="image-container">
                                    {{-- <img src="../../../public/assets/client/image/img-6.jpg"> --}}
                                    <img src="{{ asset('assets/client/image/'.$item->image) }}">

                                    <div class="info">
                                        <h3>3 days ago</h3>
                                        <h3>for rent</h3>
                                    </div>
                                    <div class="icons">
                                        <a href="#" class="fas fa-film">
                                            <h3>1</h3>
                                        </a>
                                        <a href="#" class="fas fa-camera">
                                            <h3>4</h3>
                                        </a>
                                    </div>
                                </div>
                            </a>
                            <div class="content">
                                <div class="price">
                                    <h3>{{ $item->price }}</h3>
                                    <a href="./add.php?id='.$row3['masp'].'" class="fas fa-heart"></a>
                                    <a href="#" class="fas fa-envelope"></a>
                                    <a href="#" class="fas fa-phone"></a>
                                </div>
                                <div class="location">
                                    <h3>{{ $item->description }}</h3>
                                    <p>{{ $item->address }}</p>
                                </div>
                                <div class="details">
                                    <h3> <i class="fas fa-expand"></i> 3500 m<sup>2</sup> </h3>
                                    <h3> <i class="fas fa-bed"></i>{{ $item->sogiuong }}</h3>
                                    <h3> <i class="fas fa-bath"></i> 2 baths </h3>
                                </div>
                                <div class="buttons">
                                    <a href="">
                                        <button class="btn1">Xem ngay</button>              
                                    </a>
            
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        
                            
                
    </div>
    <br><br>
    

</section>
@endsection

@section('css')
    <style>
        header {
        background: blue
    }
    </style>
    
@endsection