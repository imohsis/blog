@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Category
        <small>Smart and Creative</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

             @include('includes.messages')
            <form role="form" method="post" action="{{ route('category.update') }}" >

              {{ csrf_field() }}
              <div class="box-body">

                <div class="col-lg-offset-3 col-lg-6">
                	
                 <div class="form-group">
                  <label for="name">Category</label>
                  <input type="text" class="form-control" id="name" placeholder="name" value="{{ $category->name }}"   name="name">
                </div>
                
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}"  placeholder="Slug" >
              


<br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('category.index') }}" class="btn btn-warning">Back</a>
             
              </div>
                </div>

                </div>

       </div>

            </form>
          </div>
          <!-- /.box -->

        
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection