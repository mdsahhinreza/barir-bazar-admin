@extends('layouts.backend_base')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create New Product</h5>

                        <!-- General Form Elements -->
                        <form action="{{ route('store.product') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="product_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Select Category</label>
                                <div class="col-sm-10">
                                    <select name="category_id" class="form-control">
                                        <option value="1">Select Category</option>
                                        <option value="2">Food</option>
                                        <option value="3">Glosery</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Select Shop</label>
                                <div class="col-sm-10">
                                    <select name="shop_id" class="form-control">
                                        <option value="1">Select Shop</option>
                                        <option value="2">shop-1</option>
                                        <option value="3">shop-2</option>
                                        <option value="4">shop-3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Sale Price</label>
                                <div class="col-sm-10">
                                    <input name="sale_price" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Market Price</label>
                                <div class="col-sm-10">
                                    <input name="market_price" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Product Photo</label>
                                <div class="col-sm-10">
                                    <input name="photo" class="form-control custom-cursor-on-hover" type="file"
                                        id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Product Details</label>
                                <div class="col-sm-10">
                                    <textarea name="details" class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary">Create Product</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
