@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Posts</div>

                    <div class="panel-body">
                        <div class="col-md-9">
                            {!! Form::model($student,['method'=>'PATCH', 'action'=>['StudentController@update',$student->id]]) !!}
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
                                {!! Form::label('city','City: ') !!}
                                {!! Form::text('city',null,['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                            <div  class="form-group">
                                {!! Form::open(['method'=>'DELETE', 'action'=>['StudentController@destroy', $student->id]]) !!}
                                {{csrf_field()}}

                                <div class="form-group">
                                    {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection