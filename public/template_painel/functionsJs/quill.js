var quill = new Quill('#editor-container', {
    modules: {
        toolbar: [
            [{ header: [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            ['image', 'code-block'],
            ['link'],
            [{ 'script': 'sub' }, { 'script': 'super' }],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            ['clean']
        ]
    },
    placeholder: 'Escreva aqui sua notícia...',
    theme: 'snow'  // or 'bubble'
});