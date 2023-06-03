@extends('layouts.base')
@section('title', 'Register Position')

@section('content')

<form method="POST" action="{{route('position.save')}}">
    @csrf
    <section>
        <div>
            <table class="table datatable table-hover" >
                <tbody>
                    <tr>
                        <td>Company</td>
                        <td>
                            <select name="company_id" class="form-control">
                                @foreach ($companies as $company)
                                    <option value={{$company->id}}>{{$company->name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td>
                            <input type="text" name="role" class="form-control" placeholder="Role">
                        </td>
                    </tr>
                    <tr>
                        <td>Years Experience Required</td>
                        <td>
                            <input type="Number" name="experience_required" class="form-control" >
                        </td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td>
                            <input type="number" name="salary" class="form-control">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <button type="submit">Register</button>
</form>
@endsection