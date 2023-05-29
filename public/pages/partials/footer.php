</body>

<script>
  /* ======================================
        MESSAGE ALERTS
========================================*/
  try {
    const msg = document.querySelector('.message');
    let msgType = msg.dataset.messagetype;


    document.addEventListener('DOMContentLoaded', () => {
      console.log(msg);
      console.log('hello');
      if (msgType == 'success') {
        msg.style.color = '#3d3d3d';
        msg.style.backgroundColor = '#96FE8A';
        msg.classList.add('message-active');
      }

      if (msgType == 'error') {
        msg.style.backgroundColor = '#F96F6F';
        msg.classList.add('message-active');
      }

      setTimeout(() => {
        msg.classList.remove('message-active');
      }, 2000);
    })
  } catch (e) {
    console.log(e);
  }

  function previewChoosenImage(e) {
  try {
   var file = e.target.files.item(0);
   var fr = new FileReader();
   fr.onloadend = function (imgsrc) {
      imgsrc = imgsrc.target.result;
      var img = document.createElement('img');
      img.src = imgsrc;
      var container = e.target.nextSibling.nextSibling;
      container.innerHTML = '';
      container.appendChild(img);
   };
   fr.readAsDataURL(file);
  } catch (e){
     console.log('Please Insert Image');
  }
}

  
</script>

</html>