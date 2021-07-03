setTimeout( () => {
    let quill = new Quill('#editor', {
      placeholder: 'Compose an epic...',
      theme: 'snow',
    })

    // 回答フォームを送信
    document.ansform.subbtn.addEventListener('click', function() {
        console.log('1');
        // Quillのデータをinputに代入
        document.querySelector('input[name=content]').value = document.querySelector('.ql-editor').innerHTML;
        // 送信
        document.ansform.submit();
    });

  }, 10)