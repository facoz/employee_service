@extends('layouts.base')
@section('title', 'Companies')

@section('content')
<table class="table datatable table-hover">
    <thead>
        <tr>
            <th>Company Name</th>
            <th>Company Address</th>
            <th>Zip Code</th>
            <th>Positions Available</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($companies as $company)
        <tr>
                <td>
                    <a href={{route('form.companies.contract',$company->id)}}>{{$company->name}}</a>
                </td>
                <td>{{$company->address}}</td>
                <td>{{$company->zip_code}}</td>
                <td>{{$company->total_positions}}</td>
                {{-- <td>
                    @foreach ($company->Positions as $position)
                    <p>{{$position->role}} </p>
                    @endforeach
                </td> --}}
        </tr>
        @endforeach
    </tbody>
</table>
@endsection