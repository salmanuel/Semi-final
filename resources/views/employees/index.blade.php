@extends('base')

@section('content')

<div class="float-end">
    
    <a href="/" class="btn btn-dark "><i class="fa-solid fa-reply"></i></a>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
        <i class="fa-solid fa-user-plus"></i>Add
    </button>
</div>

<h1>Employees</h1>

<table class="table table-bordered table table-hover">
    <thead>
        <tr class="bg-black text-primary">
            <th>Last Name</th>
            <th>First Name</th>
            <th>Position</th>
            <th class="text-end">Salary</th>
            <th class="text-center">Edit</th>
            <th class="text-center">Delete</th>
        </tr>
    </thead>
    <tbody>

        @foreach($employees as $employee)
            <tr class="bg-info text-dark">
                <td>{{$employee->lname}}</td>
                <td>{{$employee->fname}}</td>
                <td>{{$employee->position}}</td>
                <td class="text-end">{{$employee->salary}}</td>
                <td class="text-center">
                    <a href="{{url('/edit-employee/' . $employee->id)}}" class="btn btn-success">
                    <i class="fa-solid fa-user-pen"></i>Edit
                </a></td>
                <td class="text-center">
                    <a href="{{url('/delete-employee/'. $employee->id)}}" class="btn btn-danger">
                    <i class="fa-solid fa-user-large-slash"></i></i>Delete
                </a></td>
            </tr>
        @endforeach

    </tbody>
</table>

<div class="modal fade " id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header bg-info text-dark">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add on Employee List</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="d-grid gap-4 col-8 mx-auto">

                <h1 class="text-center">Add Employee</h1>

                <div class="row bg-info text-dark">
                    <div class="col-md-12 ">
                        {!! Form::open(['url'=>'/employees', 'method'=>'post']) !!}

                        <div class="mb-3">
                            {!! Form::label("lname", "Last Name:") !!}
                            {!! Form::text("lname", null, ['class'=>'form-control bg-warning','placeholder'=>"Salutan"]) !!}
                        </div>

                        <div class="mb-3">
                            {!! Form::label("fname", "First Name:") !!}
                            {!! Form::text("fname", null, ['class'=>'form-control bg-warning','placeholder'=>"John"]) !!}
                        </div>

                        <div class="mb-3">
                            {!! Form::label("position", "Position:") !!}
                            {!! Form::text("position", null, ['class'=>'form-control bg-warning','placeholder'=>"Emanuelle"]) !!}
                        </div>
                        
                        <div class="mb-3">
                            {!! Form::label("salary", "Salary:") !!}
                            {!! Form::number("salary", null, ['class'=>'form-control bg-warning','placeholder'=>"99999"]) !!}
                        </div>

                        <button class="btn btn-primary" type="submit">Save Changes</button>
                        <a href="/employees" class="btn btn-danger col-md-4">Cancel</a>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>



@endsection