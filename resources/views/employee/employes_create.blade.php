@extends('layouts.base')
@section('title', 'Register People')

@section('content')
<form method="POST" action="{{route('people.save')}}">
    @csrf
    <section>
        <table class="table datatable table-hover">
            <tbody>
                <tr>
                    <td>Customer Name</td>
                    <td><input placeholder="Employee Name" class="form-control" type="text" name="name" value="{{old('name')}}"></td>
                </tr>
                <tr>
                    <td>Date Bird</td>
                    <td><input class="form-control" type="date" name="date_birth"  value="{{old('date_birth')}}"></td>
                </tr>
                <tr>
                    <td>Education Level</td>
                    <td>
                        <select class="form-control" name="education_level_id" id="education_level_id">
                            @foreach ($educationLevels as $levels)
                                <option value="{{$levels->id}}">{{$levels->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        @error('name')
            <br>
            <small>
                {{$message}}
            </small>
        @enderror
        @error('date_birth')
            <br>
            <small>
                {{$message}}
            </small>
            <br>
        @enderror
        <br>
        @error('education_level_id')
            <br>
            <small>
                {{$message}}
            </small>
            <br>
        @enderror
        <button type="submit">Register</button>
    </section>
</form>
@endsection