@extends('layout.admin.dahboard')
@section('title', 'Add Data Genre')
@section('content')
     <!-- Main content -->
     <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Add New Genre</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('genres.store') }}" method="POST">
                @csrf
                <label for="">Genre</label>
                <input type="text" name="genre" class="form-control" placeholder="New Genre">
                <br>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
@endsection