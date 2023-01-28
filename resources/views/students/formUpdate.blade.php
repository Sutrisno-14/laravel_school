
@extends('layout.main')


@section('title','Update Student')


@section('Container')

    <div class="col d-flex justify-content-center">

        <div class="col-md-6">
            <div class="card card-primary">

                <div class="card-header">
                  <h3 class="card-title">Update Data</h3>
                </div>
                <!-- /.card-header -->

                <!-- form start -->
                <form action="/updateStudent/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="hidden" class="form-control" id="nama" name="id" value="{{ $data->id }}"> --}}
                    <div class="card-body">

                        <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
                        </div>

                        <div class="form-group">
                            @php
                                $g = $data->gender
                            @endphp
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option value="Male" {{ $g === "Male" ? "selected" : ""}}>Male</option>
                                <option value="Female" {{ $g === "Female" ? "selected" : ""}}>Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="{{ $data->nim }}">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="role_id">
                                {{-- <option>Choose Status</option> --}}

                                @php
                                    $role = App\Models\Role::get();
                                @endphp

                                @foreach($role as $r)
                                <option value="{{ $r->id }}" {{ $r->id === $r->role_id ? "selected" : ""}}>
                                    {{ $r->name }}
                                </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}">
                        </div>

                    </div>

                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="update">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
