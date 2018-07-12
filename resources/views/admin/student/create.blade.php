@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Add Student</h2></div>

                    <div class="panel-body">
                        <div class="col-md-9">
                            {!! Form::open(['method'=>'POST', 'action'=>'StudentController@store']) !!}
                            {{csrf_field()}}

                            <div class="form-group">
                                {!! Form::label('name','Name: ') !!}
                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('dob','DOB: ') !!}
                                {!! Form::date('dob',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('course_id','Course: ') !!}
                                {!! Form::select('course_id',[''=>'Select Course'] + $course,null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('city','City: ') !!}
                                {!! Form::text('city',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Add',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection