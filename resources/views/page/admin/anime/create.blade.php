@extends('layout.admin.dahboard')
@section('title', 'Add Data Anime')
@section('content')
     <!-- Main content -->
     <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Add New Anime</h3>
  
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
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" placeholder="New title">
                <br>
                <label for="">Sinopsis</label>
                <textarea class="form-control editor" name="sinopsis" rows="10"></textarea>
                <br>
                <label for="">Type</label>
                <select name="type" class="form-control" id="">
                    <option value="">Type Anime</option>
                    <option value="TV">TV</option>
                    <option value="Movie">Movie</option>
                </select>
                <br>
                <label for="">Status</label>
                <select name="status" class="form-control" id="">
                    <option value="">Select Status</option>
                    <option value="On-going">On-going</option>
                    <option value="Complete">Complete</option>
                </select>
                <br>
                <label for="">Genre</label>
                <select name="genre[]" class="form-control select mb-3" multiple id="">
                    <option value="">Select Genre</option>
                    @foreach ($genres as $item)
                        <option value="{{ $item->id }}">{{ $item->genre }}</option>
                    @endforeach
                </select>
                <br>
                <label for="">Studio</label>
                <input type="text" class="form-control" name="studio" placeholder="Studio">
                <br>
                <label for="">Duration</label>
                <input type="text" class="form-control" name="duration" placeholder="Duration">
                <br>
                <label for="">Ranting</label>
                <input type="text" class="form-control" name="ranting" placeholder="Ranting">
                <br>
                <label for="">Cover Anime</label>
                <input type="file" name="cover" class="form-control" id="">
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