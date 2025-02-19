@extends('mproject')
@section('title', 'Master Court type')
@section('content-title', 'Master Court type')
@section('content')
<div class="col-md-8">
    <a href="" class="btn btn-success">Add service</a>
    <table class="table">
            <tr>
                <th>No</th>
                <th>court type</th>
                <th>Action</th>
            </tr>
            @forelse ($types as $type)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$type->name}}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                </td>
            </tr>
            @empty
            <div class="alert alert-danger">Belum ada data</div>    
            @endforelse
    </table>
</div>
<div class="col-md-4">

</div>
@endsection