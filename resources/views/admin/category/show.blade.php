@extends('admin.layouts.app')

@section('headSection')

  <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

@endsection


@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        welcome
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Categories</h3>
           <a class="col-lg-offset-5 btn btn-success" href="{{ route('category.create') }}">Add New</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Category Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>

              @foreach($categories as $category )

                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->slug }}</td>
                  <td><a href="{{ route('category.edit', $category->id) }}"> <span class="glyphicon glyphicon-edit"></a></span></td>

                  <td>
                    <form id="delete-form-{{ $category->id }}"  action="{{ route('category.destroy', $category->id) }}"  
                      style="display: none" method="post">
                      
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}


                    </form>
                    <a href="" onclick="

                    if(confirm('Are you sure?'))

                    {
                      event.preventDefault(); 

                      document.getElementById('delete-form-{{ $category->id }}').submit();

                    }

                    else{

                    event.preventDefault();

                  }"  > <span class="glyphicon glyphicon-trash"></a></span>

                  </td>
                </tr>

              @endforeach


               
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Category Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr> 
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
         
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


@section('footerSection')

<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js') }}"></script>


<script>
  $(function () {
    $('#example1').DataTable()
   
  })

</script>

@endsection