@extends('layouts.backend_base')
@section('content')
    <div class="pagetitle">
        <h1>Categories List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">categories</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <h5 class="card-title">Table with hoverable rows</h5> --}}

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td class="align-middle">
                                            <img width="100" src="{{ asset('public/backend/assets/img/product-2.jpg') }}"
                                                alt="">
                                        </td>
                                        <td class="align-middle">{{ $item->category_name }}</td>
                                        <td class="align-middle">{{ $item->category_slug }}</td>
                                        <td class="align-middle">
                                            <div class="btn btn-success btn-sm">View</div>
                                            <div class="btn btn-primary btn-sm">Edit</div>
                                            <div class="btn btn-danger btn-sm">Delete</div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
