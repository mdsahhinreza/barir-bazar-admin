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
                        <h5 class="card-title">Create New Shop</h5>

                        <!-- General Form Elements -->
                        <form action="{{ route('store.shop') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Shop Name</label>
                                <div class="col-sm-10">
                                    <input name="shop_name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Shop Category</label>
                                <div class="col-sm-10">
                                    <select name="shop_category" class="form-control">
                                        <option value="">Select Category</option>
                                        <option value="food">Food</option>
                                        <option value="glosery">Glosery</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Owner Name</label>
                                <div class="col-sm-10">
                                    <input name="shop_owner" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Owner Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="owner_phone_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Shop Photo</label>
                                <div class="col-sm-10">
                                    <input name="shop_photo" class="form-control custom-cursor-on-hover" type="file"
                                        id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Shop Address</label>
                                <div class="col-sm-10">
                                    <textarea name="shop_address" class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary">Store Shop</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
