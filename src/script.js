
 
  // Light // Dark // Modes //
    function swapSheet(sheet) {
      styelm.setAttribute("href", sheet);
    }
    function loaded() {
      var button = document.getElementById("swapper");
      button.onclick = function() { 
        if (styelm.href.match("src/light.css")) {
          swapSheet("src/dark.css");
        } else {
          swapSheet("src/light.css"); 
        }
      }
    }
    var styelm = document.getElementsByTagName("link")[0];
    window.onload = loaded; 
