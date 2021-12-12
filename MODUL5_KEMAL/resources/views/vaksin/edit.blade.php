@extends('layout')

<?php $currentPage = 'vaccine';?>

@section('content')
    <div class="container-fluid  col-md-8" style="margin-top:100px;">
        <h4 style="text-align: center;">Input Vaccine</h4>
        <form  method="POST" action="{{ url('vaccine/'.$model->id)  }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label>Vaccine Name</label>
                <input type="text" class="form-control"  name="name" value="{{ $model->name }}" required="required">
            </div>
            <label>Price</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                </div>
                <input type="text" class="form-control"  name="price" value="{{ $model->price }}" required="required">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control"  name="description"  required="required">{{ $model->description }}</textarea>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control-file" name="image" value="{{ $model->image }}" id="exampleFormControlFile1">
              </div>
            <input  type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm">
        </form>
    </div>
@endsection