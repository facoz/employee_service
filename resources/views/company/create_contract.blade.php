@extends('layouts.base')
@section('title', 'Register Company')

@section('content')

<form method="POST" action="{{route('company.contract.save')}}">
    @csrf
    <section>
        <div>
            <table class="table datatable table-hover" >
                <tbody>
                    <tr>
                        <td>Position</td>
                        <td>
                            <select name="position_id" class="form-control">
                                @foreach ($positions as $position)
                                    <option value={{$position->id}}>{{$position->role}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Employee</td>
                        <td>
                            <select name="people_id" class="form-control">
                                @foreach ($peoples as $people)
                                    <option value={{$people->id}}>{{$people->name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <button type="submit">Register</button>
</form>
@endsection