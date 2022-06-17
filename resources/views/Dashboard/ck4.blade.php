<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}} ">
</head>
<body>
    <h1>Content Ckeditor 4:</h1> <hr> <br>
    
    {{-- <textarea name="editor" class="ckeditor" id="editor"></textarea> <br> <hr> --}}
    <textarea class="ckeditor" name="editor1" cols="80" rows="10"></textarea>

<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEditor.replace('editor');
    CKEditor.replace('editor1');
</script>
    
</body>
</html>