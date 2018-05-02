@extends('admin.layouts.app')


@section('headSection')

<link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">

@endsection







@section('main-content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SMART
        <small>Entertainment</small>
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
              <h3 class="box-title">Edit Your Article</h3>
            </div>
              
           @include('includes.messages')




            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('post.update',$post->id) }} " method="post" >
                         
                         {{ csrf_field() }}
                         {{ method_field('PATCH') }}

              <div class="box-body">

                <div class="col-lg-6">
                	
                 <div class="form-group">
                  <label for="Title">Title</label>
                  <input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{ $post->title }}">
                </div>
                 <div class="form-group">
                  <label for="subtitle">Sub Title</label>
                  <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle" value="{{ $post->subtitle }}" >
                </div>
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $post->slug }}" >
                </div>

                </div>

                <div class="col-lg-6">
                  <br>
                	<div class="form-group">
                  
                  <div class="pull-right">
                    
                  <label for="image">File input</label>
                  <input type="file" name="image" id="image">

                  </div>



                <div class="checkbox pull-left">
                  <label>
                    <input name="status" value="1"   @if ($post->status ==1)
                      checked
                    @endif type="checkbox" > Publish  Your Article
                  </label>
                </div>


                 
                </div>
                
               <br>  
             
                  <div class="form-group" style="margin-top:18px;">
                <label>Select Tags</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;" name="tags[]">

                  @foreach($tags as $tag)

                   <option value="{{ $tag->id }}"



                  @foreach ($post->tags as $postTag)

                    @if ($postTag->id == $tag->id)
                     
                      selected
                     
                    @endif

                    {{-- expr --}}
                  @endforeach



                    >

                    {{ $tag->name }} </option>
                 

                  @endforeach
            
                </select>
              </div>

               <div class="form-group" style="margin-top:18px;">
                <label>Select Category</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;" name="categories[]">
                   @foreach($categories as $category)

                   <option value="{{ $category->id }}"

                
                  @foreach ($post->categories as $postCategory)

                    @if ($postCategory->id == $category->id)
                     
                      selected
                     
                    @endif

                    {{-- expr --}}
                  @endforeach

                    > {{ $category->name }} </option>
                 

                  @endforeach
                </select>
              </div>
              </div>
            </div>
              <!-- /.box-body -->

                <div class="box">
            <div class="box-header">
              <h3 class="box-title">Type your Article Here
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>

              </div>
              <!-- /. tools -->
            </div>

            <!-- /.box-header -->
            <div class="box-body pad">
              
                <textarea id="editor1" name="body" 

                          style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" >

                          {!! e(nl2br($post->body)) !!}

                        </textarea>
           
            </div>
          </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

        
        </div>

        <!-- /.col-->

      </div>


    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->

@endsection



@section('footerSection')




<script  src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<script>
  $(document).ready(function() {

$(".select2").select2();

});
</script>

{{-- <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script> --}}
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>

<script>
  $(function () {
    {{-- // Replace the <textarea id="editor1"> with a CKEditor --}}
  {{--   // instance, using default configuration. --}}
    CKEDITOR.replace('editor1')
    {{-- //bootstrap WYSIHTML5 - text editor --}}
    $('.textarea').wysihtml5()
  });
</script>

@endsection