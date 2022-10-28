@extends('layouts.app-admin')

@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Members</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('backend.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Members</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('backend.members.create') }}" class="btn btn-primary float-right">Add Member</a>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Education</th>
                                            <th>Deals with</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($members as $member)
                                            <tr>
                                                <td>{{ $member->id }}</td>
                                                <td><img src="{{ asset($member->photo) }}" alt="photo" width="100" height="100"></td>
                                                <td>{{ $member->name }}</td>
                                                <td>{{ $member->education }}</td>
                                                <td>{{ $member->deals_with }}</td>
                                                <td>
                                                    <form action="{{ route('backend.members.destroy', $member) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                    <a href="{{ route('backend.members.edit', $member) }}" class="btn btn-info">Edit</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No record found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Education</th>
                                            <th>Deals with</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                {{ $members->links() }}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
