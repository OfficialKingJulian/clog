

  /*
   *  script.js
   */
 

    window.addEventListener('load', function() {

    // Get Random Image For 404 Page //
      var numberWang = Math.floor(Math.random() * 3) + 1;
      var imgElm = document.getElementById("error-img");
      if (typeof(imgElm) != 'undefined' && imgElm != null){
        imgElm.classList.add("img-" + numberWang);
      }

    // Light // Dark // Modes //
      var lightdark = document.cookie;
      if (lightdark = "dark") {
        swapSheet("src/dark.css");
      } else {
        swapSheet("src/light.css");
      }
      var button = document.getElementById("swapper");
      button.onclick = function() { 
        if (styelm.href.match("src/light.css")) {
          document.cookie = "lida=dark";
          swapSheet("src/dark.css");
        } else {
          document.cookie = "lida=light";
          swapSheet("src/light.css"); 
        }
      }
    });

    var styelm = document.getElementsByTagName("link")[0];

      // Swap //
    function swapSheet(sheet) {
      styelm.setAttribute("href", sheet);
    }


