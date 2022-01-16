tinymce.init({
  selector: "#mytextarea",
  plugins: [
    'advlist anchor autolink autoresize autosave charmap code colorpicker',
    'contextmenu directionality emoticons hr image imagetools importcss insertdatetime image legacyoutput link lists',
    'media nonbreaking noneditable pagebreak paste preview save searchreplace stickytoolbar',
    'tabfocus table textcolor textpattern toc visualblocks visualchars wordcount',
    'textcolor table lists',
  ],
  menubar: "false",
  toolbar: ['undo redo | bold italic | styleselect | forecolor backcolor | fontsizeselect',
            'numlist bullist | table | image'],
  fontsize_formats: '10px 12px 14px 16px 18px 20px 24px 34px',
  width: 1200,
  height: 600,
  branding: false, // クレジット非表示
  forced_root_block :false,
  entity_encoding : "row",
  language: "ja",
  plugins: "image link fullscreen media",
  branding: false,
  image_title: true,
  automatic_uploads: true,
  images_upload_url: '/upload?_token={{csrf_token()}}',
  file_picker_types: 'image',
  file_picker_callback: function(cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    input.onchange = function() {
      var file = this.files[0];
      var reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = function () {
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);
        cb(blobInfo.blobUri(), { title: file.name });
      };
    };
    input.click();
  }


});