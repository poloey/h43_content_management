@extends('dashboard.master_dashboard')
@section('title', 'Create Post')
@section('content')
<div class="container">
  <div class="m-3">
    <div class="row">
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2>Create a post</h2>
          </div>
          <div class="panel-body">
            <form action="{{route('post.store')}}" method="post">
              {{csrf_field()}}
              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" id="title" class="form-control">
              </div>
              <div class="form-group">
                  <label for="content">Content</label>
                  <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Create post</button>
              </div>
              
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@section('script')
<script>
  var editor_config = {
    path_absolute : "{{route('dashboard.index')}}",
    selector: "textarea#content",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };
  tinymce.init(editor_config);
</script>
@endsection
@endsection