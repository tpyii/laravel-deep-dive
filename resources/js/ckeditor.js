const ckeditor = element => {
    if (element) {
        ClassicEditor.create(element);
    }   
}

ckeditor.call(null, document.querySelector('#body'));
