@extends('layouts.master')

@section('title')
    Add new
@endsection


@section('content')

    {!! Form::open(array('route'=>'info.store', 'class'=>'form-horizontal', 'files'=>'true')) !!}
    <u><h1 style="text-align: center; margin-bottom: 20px;">Registration here..!!</h1></u>
    <div class="row">
        {{ Form::label('sname', 'Student Name:', array('class'=>'col-md-3 form-group')) }}
        {{ Form::text('sname','', array('class'=>'col-md-4 form-control form-group','placeholder'=>'Type your name')) }}
    </div>
    <div class="row">
        {{ Form::label('age', 'Student Age:', array('class'=>'col-md-3 form-group')) }}
        {{ Form::text('age','', array('class'=>'col-md-4 form-control form-group','placeholder'=>'Type your age')) }}
    </div>
    <div class="row">
        {{ Form::label('phone', 'Phone:', array('class'=>'col-md-3 form-group')) }}
        {{ Form::number('phone','', array('class'=>'col-md-4 form-control form-group','placeholder'=>'Type your phone number')) }}
    </div>
    <div class="row">
        {{ Form::label('gender', 'Gender:', array('class'=>'col-md-3 form-group')) }}
        {{ Form::radio('gender', 'Male', array('class'=>'col-md-1')) }}
        {{ Form::radio('gender', 'Female', array('class'=>'col-md-1')) }}
    </div>
    <div class="row">
         <div class="col-md-1"></div>
        <div class="col-md-4">
        {{ Form::submit('Save',array('class'=>'btn btn-success')) }}
        {{ Form::reset('Cancel',array('class'=>'btn btn-danger')) }}
        </div>
    </div>
    {!! Form::close() !!}
@endsection