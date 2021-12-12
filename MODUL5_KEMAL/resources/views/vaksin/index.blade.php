@extends('layout')


@section('content')
    <a class="btn btn-primary" href="{{ url('vaccine/create') }}">Add Vaccine</a>
    <table class="table" style="margin-top:10px;">
        <tr>
            <th><b>No</b></th>
            <th><b>Name</b></th>
            <th><b>Price</b></th>
            <th colspan="2"><b>Action</b></th>
        </tr>
        @foreach ($datavaksin as $key=>$value)
            <tr>
                <td><b>{{ $value->id }}</b></td>
                <td>{{ $value->name }}</td>
                <td>Rp. {{ $value->price }}</td>
                <td><a class="btn btn-warning" href="{{ url('vaccine/'.$value->id.'/edit') }}">Edit</a></td>
                <td>
                    <form action="{{ url('vaccine/'.$value->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
@endsection