ClassicEditor
  .create(document.querySelector('#editor'), {
    language: 'pt-br'
  })
  .catch(error => {
    console.error(error);
  });