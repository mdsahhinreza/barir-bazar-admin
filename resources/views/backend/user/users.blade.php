@extends('layouts.backend_base')
@section('content')
    <div class="row">
        <div class="col">
            <div class="pagetitle">
                <h1>Product List</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Produtcs</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        </div>
        <div class="col text-end">
            <a href="{{ route('users.create') }}" class="btn btn-success btn-sm">
                <i class="bi bi-person-add"></i>
                Add New User
            </a>
        </div>
    </div>

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
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td class="align-middle">
                                            @if ($item->photo)
                                                <img width="50" class="rounded rounded-circle"
                                                    src="{{ asset('public/images/users/' . $item->photo) }}" alt="">
                                            @else
                                                <img width="50" class="rounded rounded-circle"
                                                    src="{{ asset('public/images/users/user_placeholder.png') }}"
                                                    alt="">
                                            @endif

                                        </td>
                                        <td class="align-middle">{{ $item->name }}</td>
                                        <td class="align-middle">{{ $item->email }}</td>
                                        <td class="align-middle">User</td>
                                        <td class="align-middle">
                                            <a href="#" class="btn btn-success btn-sm">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-info btn-sm">
                                                <i class="bi bi-person-gear"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="{{ URL('/delete/user/' . $item->id) }}" class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i>
                                            </a>
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
