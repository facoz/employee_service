@extends('layouts.base')
@section('title', 'Companies')

@section('content')
<table class="table datatable table-hover">
    <thead>
        <tr>
            <th>Company Name</th>
            <th>Employee</th>
            <th>Role</th>
            <th>Salary</th>
            <th>Date Start</th>
            <th>Date end</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jobHistories as $jHistory)
        <tr>
                <td>
                    <a href={{route('form.companies.contract',$jHistory->Position->Company->id)}}>{{$jHistory->Position->Company->name}}</a>
                </td>
                <td>{{$jHistory->Employee->name}}</td>
                <td>{{$jHistory->Position->role}}</td>
                <td>{{$jHistory->Position->salary}}</td>
                <td>{{$jHistory->start_contract}}</td>
                <td>
                    @if (!$jHistory->end_contract)
                    <form method="POST" action={{route('end.contract', $jHistory->id)}}>
                        @csrf
                        <button type="submit">End Contract</button>
                    </form>
                    @else
                        {{$jHistory->end_contract}} 
                    @endif
                </td>
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