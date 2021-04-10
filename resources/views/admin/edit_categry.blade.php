@extends('layouts.app')
@section('title','Dashboard')
@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Category</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-body">
                <form action="{{ url('edit_new_categry') }}" class="database_operation">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="">Enter Category Name</label>
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            {{ csrf_field() }}
                            <input type="text" name="name" value="{{ $category->name }}" placeholder="Enter Category Name" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                          <button class="btn btn-primary">Update</button>
                          </div>
                        </div>
                      </div>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->  
        </div>
      </div>
    </div>
  </section>
</div>
@endsection     