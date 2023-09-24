<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
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
      msg.style.opacity = 1;
      msg.style.transform = 'translate(0)';
    }

    if (msgType == 'error') {
      msg.style.backgroundColor = '#F96F6F';
      msg.style.opacity = 1;
      msg.style.transform = 'translate(0)';
    }

    setTimeout(() => {
      msg.style.opacity = 0;
      msg.style.transform = 'translate(120%)';
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

  /* ======================================
          FOR CK EDITORS
========================================*/

try {
  //for editor input when adding event description
const eventDesc = document.querySelector( '#eventDesc' );
CKEDITOR.replace( eventDesc );
} catch (e) {
  console.log(e);
}

//for displaying the label only in the datalist items when selecting the family name

const des = Object.getOwnPropertyDescriptor(HTMLInputElement.prototype, 'value');
Object.defineProperty(HTMLInputElement.prototype, 'value', {
  get: function() {
    const value = des.get.call(this);
  
    if (this.type === 'text' && this.list) {
      const opt = [].find.call(this.list.options, o => o.value === value);
      return opt ? opt.dataset.value : value;
    }

    return value;  
  } 
});

const input = document.getElementById('family_name');
const selectedDataValueInput = document.getElementById('selected_data_value'); // Get the hidden input field

input.addEventListener('input', () => {
  selectedDataValueInput.value = input.value;
});

</script>

</html>