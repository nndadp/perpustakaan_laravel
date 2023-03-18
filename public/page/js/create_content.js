$(document).ready(function () {
    var editor;
    $('#go').on('click', function () {
        var te = $('#wow').val();
        $('#editor').text(te);
    });
    var quill = new Quill('#test', {
        modules: {
          toolbar: '#toolbar'
        },
        placeholder: '',
        theme: 'snow'
    });
    
  
    quill.on('text-change', function (delta, oldDelta, source) {
        document.querySelector("input[name='article']").value = quill.root.innerHTML;
      });
});