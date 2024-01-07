<!DOCTYPE html>
<html>
  <head>
    <!-- Replace 'no-api-key' in the link below with your API key -->
    <script src="https://cdn.tiny.cloud/1/46877zyhse80x7h0y2a1cv21dmq25v3t1ndzq6puboorqf9c/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="js/tailwindcss.js"></script>

  <body>
    <script>
      tinymce.init({
        selector: 'textarea#default',
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
      });
    </script>
    <div class="w-full h-screen bg-gray-600 p-7">
    <textarea id="default" rows="10">
      Welcome to TinyMCE! dawdawdadsdawda
    </textarea>
    </div>
  
  </body>
</html>