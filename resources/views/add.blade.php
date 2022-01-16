@extends('layouts.app')


<!DOCTYPE html>
<html>
<head>
  <script src='https://cdn.tiny.cloud/1/snpqaf5a1y68sczrjkkyipsrfa4tykyp2uzky401tb5lt3ly/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  </script>
  <script src="{{ asset('/js/tinyMCE.js') }}"></script>
</head>

<!-- <body>
  <h1>TinyMCE Quick Start Guide</h1>
  <form method="post">
    <textarea id="mytextarea" name="mytextarea">
      Hello, World!
    </textarea>
  </form> -->


    <form action="/newpostsend" method="post" name="ansform" enctype="multipart/form-data">
        @csrf
        <p>タイトル</p>
        <input type="text" name="title" class="formtitle">
        <p>&nbsp;</p>
        <p>本文</p>
        <textarea id="mytextarea" style="height: 1000px;">write here...</textarea>
        <input type="hidden" name="main">
            <p>&nbsp;</p>
        <input type="submit" class="submitbtn" name="subbtn">
    </form>



</body>
</html>