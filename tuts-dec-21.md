### how to truncate string in laravel    
~~~php
str_limit($string, $number);
eg: str_limit('hello world from feni govt college', 11) // hello world ...
~~~

### how to not escape html 
~~~php
{% raw %}
{!! $variable !!}
{% endraw %}
~~~

### how to integrate admin lte theme in laravel 
Keep in mind they are using bootstrap version 3. 
* just download admin lte theme
* add js and css inside public folder
* take admin lte starter file
* link admin lte css and js file using `asset` function


### how to integrate tiny mce wysiwyg editor

* download tinymce 
* keep tinymce inside public folder
* add tinymce.min.js file in master file 
~~~html
{% raw %}
<script src="{{asset('tinymce/tinymce.min.js')}}"></script>
{% endraw %}
~~~
* in create page bottom
~~~php
{% raw %}
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
{% endraw %}
~~~

