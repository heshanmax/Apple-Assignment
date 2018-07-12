@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">

                            </div>
                        @endif
                        <h2>Students Details</h2>
                            <a href="{{route('admin.student.create')}}"   class="btn btn-lg btn-success col-md-offset-10">+ Add Student</a>
                            <p></p>
                        <table class="table">

                            <thead class="thead-dark">
                            <tr>

                                <th scope="col">Student ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Course</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>

                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->dob}}</td>
                                    <td>{{$student->course->name}}</td>
                                    <td><a class="btn btn-primary" href="{{route('admin.student.edit', $student->id)}}">Edit</a>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
