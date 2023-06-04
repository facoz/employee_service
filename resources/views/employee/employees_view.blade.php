@extends('layouts.base')
@section('title', 'Employee')

@section('content')
<table class="table datatable table-hover">
    <thead>
        <tr>
            <th>Employee Name</th>
            <th>Employee Age</th>
            <th>Education Level</th>
            <th>Register Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($peoples as $people)
        <tr>
                <td>{{$people->name}}</td>
                <td>{{$people->date_birth}}</td>
                <td>{{$people->EducationLevel->name}}</td>
                <td>{{$people->recorded_date}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection