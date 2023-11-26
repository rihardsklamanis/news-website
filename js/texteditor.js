document.addEventListener("DOMContentLoaded", function () {
    tinymce.init({
      selector: '#article-content',
      height: 400,
      plugins: 'lists link',
      toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link',
    });
  });