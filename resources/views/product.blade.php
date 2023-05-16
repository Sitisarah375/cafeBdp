{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    {{-- cdn bootstrap --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    {{-- icon --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>cafe bdp</title>
</head>

<body>
    <div class="container" style="margin-top: 30px;">
    <a href="/cart" class="btn btn-outline-success">Cart<i class="bi bi-cart"></i></a>
    <a href="/" class="btn btn-outline-danger">Back</a>
    </div>

    <div class="container mt-3">
        <h2 class="mt-5 text-center text-danger"><b>Order</b></h2>
        <h5 class="text-center text-success"><a href="/order" style="text-decoration:none; color:green">Drink</a> <a href="/order" style="text-decoration:none; color:green">Food</a></h5>
        <div class="row mt-4 ms-2 me-2">
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">         
                    <img src="https://i.pinimg.com/564x/1e/61/cc/1e61cc0c7f06afc8ae7e58ebf865a8ea.jpg" class="card-img-top" alt="..."  style="max-height: 320px; min-height:320px; width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Green Tea</h5>
                        <p class="card-text">Rp. 5.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">  
                    <img src="https://i.pinimg.com/564x/b2/8f/2f/b28f2f027c80ab7e39a6d5a91e780b78.jpg" class="card-img-top" alt="..."  style="max-height: 320px; min-height:320px;  width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Bakso</h5>
                        <p class="card-text">Rp. 10.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">      
                    <img src="https://i.pinimg.com/564x/ca/d6/73/cad6730874353f055279a6ed4877ef51.jpg" class="card-img-top" alt="..."  style="max-height: 320px; min-height:320px;  width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Juice</h5>
                        <p class="card-text">Rp. 5.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">      
                    <img src="https://i.pinimg.com/564x/64/9e/91/649e91a2f3e4a309418143f27cccc40c.jpg" class="card-img-top" alt="..." style="max-height: 320px; min-height:320px;  width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Seblak</h5>
                        <p class="card-text">Rp. 5.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                    <img src="https://i.pinimg.com/564x/87/d9/fb/87d9fb33b4019527a6088d56f3a1e46f.jpg" class="card-img-top" alt="..."  style="max-height: 320px; min-height:320px;  width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Coffee</h5>
                        <p class="card-text">Rp. 5.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                    <img src="https://i.pinimg.com/564x/81/da/2e/81da2eaac94aabbf40bb9fb6259fb5a0.jpg" class="card-img-top" alt="..."  style="max-height: 320px; min-height:320px;  width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Mie Ayam</h5>
                        <p class="card-text">Rp. 10.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                    <img src="https://i.pinimg.com/564x/1c/09/72/1c09721e3b12144d120020364cd8fdb7.jpg" class="card-img-top" alt="..."  style="max-height: 320px; min-height:320px;  width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Teh Tarik</h5>
                        <p class="card-text">Rp. 5.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                    <img src="https://i.pinimg.com/564x/c9/b8/69/c9b8695735b16c866d891be123126a13.jpg" class="card-img-top" alt="..."  style="max-height: 320px; min-height:320px;  width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Mie Gebetan</h5>
                        <p class="card-text">Rp. 5.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                    <img src="https://i.pinimg.com/564x/db/2d/f7/db2df78b305576f4e4b9d66b1f78cf6e.jpg" class="card-img-top" alt="..."  style="max-height: 320px; min-height:320px;  width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Drink Beng-Beng</h5>
                        <p class="card-text">Rp. 5.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                    <img src="https://i.pinimg.com/564x/06/29/27/0629277712d1614563bd6d673df56ea8.jpg" class="card-img-top" alt="..."  style="max-height: 320px; min-height:320px;  width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Batagor</h5>
                        <p class="card-text">Rp. 5.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                    <img src="https://i.pinimg.com/736x/2c/06/89/2c0689c2d85a7f2576f90598e044578c.jpg" class="card-img-top" alt="..."  style="max-height: 320px; min-height:320px; ;  width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Air Putih</h5>
                        <p class="card-text">Rp. 2.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-3" style="margin-top: 30px;">
                <div class="card"
                    style="padding-bottom:20px; width: 100%; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                    <img src="https://i.pinimg.com/564x/cd/ff/f3/cdfff35aab0446ed576f1c4b9ed2d718.jpg" class="card-img-top" alt="..."  style="max-height: 320px; min-height:320px; width:100%; object-fit:cover;">
                    <div class="card-body">
                        <h5 class="card-title">Siomay</h5>
                        <p class="card-text">Rp. 5.000,00</p>
                        <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>  
              </div>

</body> --}}


@extends('layouts')
   
@section('content')
    
<style>
    .row {
        display: flex;
        justify-content: space-between;
    }
</style>

<div class="row">

    @foreach($products as $product)
    
        
            <div class="col-lg-2.5 mb-3">
                <div class="card" style="width: 15rem; text-align:center; box-shadow: 0 0.3rem 0.5rem rgb(0 0 0 / 30%);">
                <img src="{{ $product->image }}" class="card-img-top" alt="..." style="max-height: 320px; min-height:320px; width:100%; object-fit:cover ">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p>{{ $product->description }}</p>
                        <p class="card-text"><strong>Price: </strong> {{ $product->price }}$</p>
                        <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        
    
    @endforeach
</div>
    
@endsection