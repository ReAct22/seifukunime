@extends('layout.admin.dahboard')
@section('title', 'Data Anime')
@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Anime</h3>
  
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
            <a href="{{ route('animes.create') }}" class="btn btn-success mb-2"><i class="fas fa-plus"></i> Add</a>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <th class="text-center">No</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Genre</th>
                    <th class="text-center">Studio</th>
                    <th class="text-center">Cover</th>
                    <th class="text-center">Action</th>
                </thead>
                <tbody>
                  <?php 
                      $i = 1;
                    ?>
                  @foreach ($animes as $item)
                  <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td class="text-center">{{ $item->title }}</td>
                    <td class="text-center">{{ $item->type }}</td>
                    <td class="text-center">{{ $item->genre->genre }}</td>
                    <td class="text-center">{{ $item->studio }}</td>
                    <td class="text-center">{{ $item->cover }}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <form action="" method="POST" class="d-inline">
                          <button class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                          </button>
                        </form>
                    </td>
                </tr>
                  @endforeach
                </tbody>
            </table>
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