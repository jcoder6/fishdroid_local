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
  console.log('Message Alert Funtion: Message not active');
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

function previewChosenVideo(event) {
        const videoPreview = document.getElementById("videoPreview");
        const fileInput = event.target;
        const files = fileInput.files;

        if (files.length === 0) {
            return; // No file selected
        }

        const videoFile = files[0];

        // Create a video element for preview
        const videoElement = document.createElement("video");
        videoElement.controls = true;

        // Create a source element for the video
        const sourceElement = document.createElement("source");
        sourceElement.src = URL.createObjectURL(videoFile);
        sourceElement.type = videoFile.type;

        // Append source to video and video to preview container
        videoElement.appendChild(sourceElement);
        videoPreview.innerHTML = ''; // Clear previous preview, if any
        videoPreview.appendChild(videoElement);
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

try{
  input.addEventListener('input', () => {
    selectedDataValueInput.value = input.value;
  });
} catch(e) {
  console.log('Family Name Function: not in the curent page');
}

  /* ======================================
          FISH MENUS FUNCTIONS
========================================*/

  window.addEventListener('DOMContentLoaded', () => {
    const fishMenus = document.querySelectorAll('.fish-menu');

    // Add a click event listener to the document
    document.addEventListener('click', () => {
        fishMenus.forEach((menu) => {
          menu.nextElementSibling.classList.remove('flex');
          menu.nextElementSibling.classList.add('hidden');
        });
    });

    fishMenus.forEach((fishMenu) => {
        fishMenu.addEventListener('click', (event) => {
          event.stopPropagation(); // Prevent the click event from bubbling up to the document
          let menu = fishMenu.nextElementSibling;
          fishMenus.forEach((menu) => {
              menu.nextElementSibling.classList.remove('flex');
              menu.nextElementSibling.classList.add('hidden');
          });
          if (menu.classList.contains('hidden')) {
              menu.classList.remove('hidden');
              menu.classList.add('flex');
          } else {
              menu.classList.remove('flex');
              menu.classList.add('hidden');
          }
        });
    });
  });

  /* ======================================
            SIDEBAR FUNCTIONS
========================================*/

  window.addEventListener('DOMContentLoaded', () => {
    const currentPage = window.location.href;
    const splitCurrentPage = currentPage.split('/')
    const page = splitCurrentPage[3];

    const sidebarlink = (page === 'quizzes' || page === 'jokes') ? document.querySelector('.fun-facts') : document.querySelector('.' + page);

    sidebarlink.classList.add('bg-gradient-to-l')
    sidebarlink.classList.add('from-green-400')
    sidebarlink.classList.add('via-green-500')
    sidebarlink.classList.add('to-green-600')
    sidebarlink.classList.remove('text-gray-700')
    sidebarlink.classList.add('text-white')
  })

    /* ======================================
            USER MENU FUNCTIONS
========================================*/

  try {
    const userMenuBtn = document.querySelector('.menu-button');
    const userMenuContainer = document.querySelector('.menu-container');
    
    userMenuBtn.addEventListener('click', () => {
      if(userMenuContainer.classList.contains('hidden')){
          userMenuContainer.classList.remove('hidden');
          userMenuContainer.classList.add('flex');
      } else {
          userMenuContainer.classList.add('hidden');
          userMenuContainer.classList.remove('flex');
      }
    })
  } catch(e) {
    console.log('User Menu Functoin: not in the current page');
  }

    /* ======================================
        FISH PAGINATION FUNCTIONS
========================================*/

  try {
    const pageBtn = document.querySelector('.page-btn')
    const pagesContainer = document.querySelector('.pages-container');

    pageBtn.addEventListener('click', () => {
      if(pagesContainer.classList.contains('hidden')){   
        pagesContainer.classList.remove('hidden');
        pagesContainer.classList.add('flex');
      } else {
        pagesContainer.classList.add('hidden');
        pagesContainer.classList.remove('flex');
      }
    })
  } catch(e) {
    console.log('Pagination Function: not in the current page');
  }

    /* ======================================
          TRIVIA FILE FUNCTIONS
    ========================================*/

  try {
    const isImgTriviaBtn = document.getElementById('is_image_trivia');
    const isVideoTriviaBtn = document.getElementById('is_video_trivia');
    const inputImgContainer = document.getElementById('input_image_cont');
    const inputVideoContainer = document.getElementById('input_video_cont');

    isImgTriviaBtn.addEventListener('click', () => {
      console.log(inputImgContainer);
      if(inputImgContainer.classList.contains('block')){
          inputVideoContainer.classList.add('hidden');
          inputImgContainer.classList.remove('hidden');
          isVideoTriviaBtn.classList.remove('bg-gradient-to-r', 'from-green-400', 'via-green-500', 'to-green-600', 'text-white')
          isImgTriviaBtn.classList.add('bg-gradient-to-r', 'from-green-400', 'via-green-500', 'to-green-600', 'text-white')
      }
    })

    isVideoTriviaBtn.addEventListener('click', () => {
      console.log(inputVideoContainer);
      if(inputVideoContainer.classList.contains('hidden')){
          inputVideoContainer.classList.remove('hidden');
          inputImgContainer.classList.add('hidden');
          isVideoTriviaBtn.classList.add('bg-gradient-to-r', 'from-green-400', 'via-green-500', 'to-green-600', 'text-white')
          isImgTriviaBtn.classList.remove('bg-gradient-to-r', 'from-green-400', 'via-green-500', 'to-green-600', 'text-white')
          isImgTriviaBtn.classList.add('bg-white', 'text-green-600')
      }
    })
  } catch(e) {
    console.log('Trivia Function: not in the current page')
  }


</script>

</html>