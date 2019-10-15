<!DOCTYPE html>
<!--  

  Page made by Julian

-->
<html>
<head>
<title>Error 404: Page Not Found</title>
<style>
  /*Error Img Formatting*/
    #error-img {
      width: 300px;
      height: 200px;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
  /*Img Classes*/
    .img-1 {background-image: url("https://www.kingjulian.xyz/imgeg/smallsuv_suzuki_ignis_0car.png")}
    .img-2 {background-image: url("https://i.kym-cdn.com/entries/icons/mobile/000/020/633/le_monke.jpg")}
    .img-3 {background-image: url("https://giphygifs.s3.amazonaws.com/media/5ftsmLIqktHQA/giphy.gif")}
</style>
</head>

<body>

  <!--This is my body-->
  <div id="error-img"></div>
  <p>Error, the page you were looking for could not be found, which is a great shame indeed.</p>

  <!--This is my blood-->
  <script type="text/javascript">
      window.addEventListener('load', function() {
      // Get RandNum
        var numberWang = Math.floor(Math.random() * 3) + 1;
        var imgElm = document.getElementsByTagName("div")[0];
        imgElm.classList.add("img-" + numberWang);
      });
  </script>

  </body>
</html>
