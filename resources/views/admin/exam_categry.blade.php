@extends('layouts.app')
@section('title','Dashboard')
@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1 class="m-0 text-dark">Category</h1>
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="#">Home</a></li>
           <li class="breadcrumb-item active">Category</li>
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
          <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
              <a class="btn btn-info btn-sm" href="javascript:;" data-toggle="modal" data-target="#exampleModal">Add New</a>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped table-bordered table-hover datatable">
              <thead>
                <th>#</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
              </thead>
              <tbody>
                @foreach ($category as $key => $cat)
                    <tr>
                      <td><?php echo $key+1 ?></td>
                      <td><?php echo $cat['name'] ?></td>
                      <td><input type="checkbox" name="status"></td>
                      <td>
                        <a href="{{ url('edit_categry/'.$cat['id']) }}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{ url('admin/delete_category/'.$cat['id']) }}" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                @endforeach
              </tbody>
                <tfoot>
                  <th>#</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('add_new_categry') }}" class="database_operation">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="">Exam Category Name</label>
              {{ csrf_field() }}
              <input type="text" name="name" placeholder="Enter Category Name" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
             <button class="btn btn-primary">Add</button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection     