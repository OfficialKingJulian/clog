<!DOCTYPE html>
<html>
<head>
  <meta type="description" content="This blog is a template page. Please change literally everything." />
  <title>Blog Testing</title>
  <style>
  <?php include_once("style.css"); ?>
  </style>
</head>
<body>
  <section>
  <h1>
    Blog Post Testing
  </h1>
    <div class="blogfeed">
    <?php
#    $fileboy = dirname(__FILE__) . '/posts/*.html';
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

        <div>
          <div>
            <p>
              <a href="<?php print "$link"; ?>">
                <?php print $h1_tag . "\n"; ?>
                <?php print $p_tag . "<Br />\n"; ?>
              </a>
            </p>
        </div>
      </div>
    <?php
      }
    ?>
    </div>
  </section>
</body>
</html>
