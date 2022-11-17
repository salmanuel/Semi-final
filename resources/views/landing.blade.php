@extends('base')

@section('content')

<h1 align="center">Welcome</h1>

<div class="container">

    <div class="buttonBox">
        <a href="/">Home</a>
        <a href="/employees">Employees</a>
        



      </div>

      <style>
        .buttonBox{
            text-align: center;
            background-color: rgb(0, 8, 31);
            display: grid;
            place-items: center;
            margin-top: 150px;
            height: 300px;
            width: 300px;
            box-shadow: 10px 10px 30px 1px rgba(0, 0, 0, 0.541);
        }
        .buttonBox a{
            background-color: rgb(35, 31, 48);
            width: 150px;
            margin: 20px;
            padding: 20px;
            color: cyan;
            text-decoration: none;
            transition: 0.1s;
        }
        .buttonBox a:hover{
            background-color: rgb(63, 58, 75);
        }
        .buttonBox a:active{
            background-color: rgb(63, 57, 82);
            font-size: 15px;
            padding: 21px;
        }
        .container{
            display: grid;
            place-items: center;
        }
      </style>

</div>

@endsection