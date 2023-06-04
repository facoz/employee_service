@extends('layouts.base')
@section('title', 'Register Company')

@section('content')

<form method="POST" action="{{route('company.save')}}">
    @csrf
    <section>
        <div>
            <table class="table datatable table-hover" >
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="name" name="name" placeholder="Company Name" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>address</td>
                        <td>
                            <input type="text" name="address" class="form-control" placeholder="Address">
                        </td>
                    </tr>
                    <tr>
                        <td>zip_code</td>
                        <td>
                            <input type="text" name="zip_code" class="form-control" placeholder="Zip code">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <button type="submit">Register</button>
</form>
@endsection