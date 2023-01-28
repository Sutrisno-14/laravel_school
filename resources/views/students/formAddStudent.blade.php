@extends('layout.main')

@section('title','Add Student')

@section('Container')

    <div class="col d-flex justify-content-center">

        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Add Student</h3>
                </div>
                <!-- /.card-header -->

                @if (session('msg'))
                    <h3 class="text-center">{{ session('msg') }}</h3>
                @endif

                <!-- form start -->
                <form action="{{ url('/addStudent') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option>Choose Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="role_id">
                                <option>Choose Status</option>

                                @php
                                    $role = App\Models\Role::get();
                                @endphp

                                @foreach($role as $r)
                                <option value="{{ $r->id }}">
                                    {{ $r->name }}
                                </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="ex. murni@gmail.com">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="***********">
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
