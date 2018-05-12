@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Users
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
              <h3 class="box-title"> Add Admin Users</h3>
            </div>
            
           @include('includes.messages')

            <form role="form" method="post" action="{{ route('user.store') }}">

              {{ csrf_field() }}
              <div class="box-body">

                <div class="col-lg-offset-3 col-lg-6">
                  
                 <div class="form-group">
                  <label for="name"> User Name</label>
                  <input type="text" class="form-control" id="name" placeholder="name" name="name">
                </div>
                
                <div class="form-group">
                  <label for="slug">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email" >
              
                 </div>

               <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
              
                 </div>  

                 <div class="form-group">
                  <label for="confirm_password">Confirm Password</label>
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" >
              
                 </div>

                 
                 <div class="form-group">
                  <label for="role">Assign Role</label>
                  <select name="role" id="" class="form-control">
                    <option value="0">Editor</option>
                    <option value="1">Publisher</option>
                    <option value="2">Writer</option>
                  </select>
              
                 </div>
                 


               <br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('user.index') }}" class="btn btn-warnitng">Back</a>
             
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