<!DOCTYPE html>
<html>
<head>
  <meta type="description" content="This blog is a template page. Please change literally everything." />
  <title>Blog | Tag Line</title>
  <link href="src/light.css" rel="stylesheet" type="text/css" />
  <style>
    <?php include("src/main.css"); ?>
  </style>
</head>
<body>
  <section>
    <div id="swapper" class="swapTogOuter">
      <div class="swapTog"></div><div class="swapTogText">
        <p>Mode</p>
      </div>
    </div>
    <h1>
      Blog Title
    </h1>
      <?php
      $files = glob(dirname(__FILE__) . '/posts/*.html');
      usort($files, function($a, $b) {return filemtime($a) < filemtime($b);});
            foreach($files as $file) {
              $link = '/posts' . substr($file, strrpos($file, '/'));
              
            // Search h1 tags
              $h1_search  = "h1";
              $p_search   = "<p>";

            // Array of h1 elms
              $h1_matches = array();
              $p_matches  = array();

            // File To Search
              $handle = @fopen($file, "r");

            // Loop
              if ($handle) {
                while (!feof($handle)) {
                    $buffer = fgets($handle);
                    // h1
                    if(strpos($buffer, $h1_search) !== FALSE)
                        $h1_matches[] = $buffer;
                    // p
                    if(strpos($buffer, $p_search)  !== FALSE)
                        $p_matches[]  = $buffer;

                }
                fclose($handle);
              }

            // Handle h1 String
              $h1_tag = $h1_matches[0];
              $h1_tag = str_replace("<h1>", "", $h1_tag);
              $h1_tag = str_replace("</h1>", "", $h1_tag);

            // Handle p String
              if (strlen($p_matches[0]) <= 3) {
                $p_tag = "No description";
              } else {
                $p_tag = $p_matches[0]; 
              }
              $p_tag = str_replace("<p>", "", $p_tag);
              $p_tag = str_replace("</p>", "", $p_tag);

      ?>

        <div class="post-tiles">
              <a href="<?php print "$link"; ?>">
                <h3>
                  <?php print $h1_tag . "\n"; ?>
                </h3>
                <p>
                  <?php print $p_tag . "<Br />\n"; ?>
                </p>
              </a>
        </div>
      <?php
        }
      ?>
      <?php include("footer.html"); ?>
  </section>
  <script type="text/javascript">
    <?php include("src/script.js"); ?>
  </script>
</body>
</html>
