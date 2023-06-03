@extends('layouts.base')
@section('title', 'Positions')

@section('content')
<table class="table datatable table-hover">
    <thead>
        <tr>
            <th>Company</th>
            <th>Role</th>
            <th>Years of Experience Required</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($positions as $position)
        <tr>
                <td><a href={{route('form.companies.contract',$position->Company->id)}}>{{$position->Company->name}}</a></td>
                <td>{{$position->role}}</td>
                <td>{{$position->experience_required}}</td>
                <td>{{$position->salary}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection