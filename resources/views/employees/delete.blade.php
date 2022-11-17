@extends('base')

@section('content')

    <h1>Delete this Employee?</h1>

    <div class="row w-50">
        <div class="col md-5 ">
            {!! Form::model($employees, ['url'=>'/edit-employee/' . $employees->id]) !!}
                <div class="infos">
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

                </div>

            </div>

            {!! Form::close() !!}

            <form action="{{url('/confirmdelete-employee/'.$employees->id)}}" method="post">
                {{ method_field('DELETE')}}
                {{ csrf_field()}}
                <div class="form-group float-end">
                    <button href="" class="btn btn-success m-1" type="submit"> <i class="fa fa-check" aria-hidden="true"></i> &nbsp; Yes</button>
                    <a href="/" class="btn btn-danger m-1"> <i class="fa fa-times" aria-hidden="true"></i> &nbsp; No</a>
                </div>

            </form>

        </div>
    </div>
@endsection