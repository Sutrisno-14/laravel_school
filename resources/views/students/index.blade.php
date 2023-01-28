@extends('layout.main')

    @section('title', 'Students')
    @section('heading-1', 'Students')

    @section('Container')

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">LIST OF STUDENTS</h3>
                    <p class="text-rigth mt-4">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    </p>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped text-center " >
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>NIM</th>
                                <th>Status</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($data as $student)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->nim }}</td>
                                <td>{{ $student->role->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>
                                    <a href="/deleteStudent/{{ $student->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="nav-icon fas fa-trash"></i></a>
                                    <a href="/formUpdate/{{ $student->id }}"  class="btn btn-warning"><i class="nav-icon fas fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection
