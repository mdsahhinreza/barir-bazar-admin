@extends('layouts.backend_base')
@section('content')
    <div class="row">
        <div class="col">
            <div class="pagetitle">
                <h1>Role List</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">User Roles</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        </div>
        <div class="col text-end">
            <a href="{{ route('users.roles.create') }}" class="btn btn-success btn-sm">
                <i class="bi bi-person-fill-gear"></i>
                Add Role
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
                                    <th scope="col">Role Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td class="align-middle">{{ $item->role_name }}</td>
                                        <td class="align-middle">{{ $item->role_slug }}</td>
                                        <td class="align-middle">
                                            <a href="#" class="btn btn-success btn-sm">View</a>
                                            <a href="#" class="btn btn-warning btn-sm"> <i class="bi bi-gear"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ URL('/delete/user/role/' . $item->id) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
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
