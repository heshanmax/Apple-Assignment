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
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>

                                    <th scope="col">Student ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Course</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                <tr>

                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->dob}}</td>
                                    <td>{{$student->course->name}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        <br>

                            <h2>Courses</h2>
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Year</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $course)
                                    <tr>

                                        <td>{{$course->id}}</td>
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->year}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <br>



                            <h2>Students 18+</h2>
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Student Name</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>{{$studentages->name}}</td>
                                    </tr>

                                </tbody>
                            </table>


                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
