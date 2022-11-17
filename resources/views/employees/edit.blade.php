@extends('base')

@section('content')
<h1>Edit Employee's Info</h1>

<div class="row">
    <div class="col-md-4">
        {!! Form::model($employees, ['url'=>'/edit-employee/' . $employees->id, 'method'=>'put']) !!}

        <div class="mb-3">
            {!! Form::label("lname", "Last Name:") !!}
            {!! Form::text("lname", null, ['class'=>'form-control bg-warning']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("fname", "First Name:") !!}
            {!! Form::text("fname", null, ['class'=>'form-control bg-warning']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label("position", "Position:") !!}
            {!! Form::text("position", null, ['class'=>'form-control bg-warning']) !!}
        </div>
        
        <div class="mb-3">
            {!! Form::label("salary", "Salary:") !!}
            {!! Form::number("salary", null, ['class'=>'form-control bg-warning']) !!}
        </div>

        <button class="btn btn-primary" type="submit">Save Changes</button>

        {!! Form::close() !!}
    </div>
</div>
@endsection