@extends('layouts.app')

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<!-- Quill -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

</head>

@section('content')
<div class="wrapper">
<div class="header"><h1>投稿ページ</h1></div>
<div class="content_wrapper">
<div class="content2">

<form action="/newpostsend" method="post" name="ansform" enctype="multipart/form-data">
    @csrf
    <p>タイトル</p>
    <input type="text" name="title" class="formtitle">
    <p>&nbsp;</p>
    <p>本文</p>
    <div id="editor" style="height: 200px;"></div>
    <input type="hidden" name="main">
        <p>&nbsp;</p>
    <input type="submit" class="submitbtn" name="subbtn">
</form>

</div>
</div>
</div>

<script>
    var quill = new Quill('#editor', {
        modules: {
            toolbar: [
            ['bold','size', 'italic', 'underline', 'strike', 'code'],
            [{'color': []}, {'background': []}],
            ['link', 'blockquote', 'code-block', 'align', 'image', 'video'],
            [{ list: 'ordered' }, { list: 'bullet' }]
            ]
        },
        placeholder: 'Write your question here...',
        theme: 'snow'
    });  

    // 回答フォームを送信
    document.ansform.subbtn.addEventListener('click', function() {
        // Quillのデータをinputに代入
        document.querySelector('input[name=main]').value = document.querySelector('.ql-editor').innerHTML;
        // 送信
        document.ansform.submit();
    }); 


</script>