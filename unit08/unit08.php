<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Unit 08A</title>

<!--

Demonstrating using PHP and making GET requests through a form submit event.
PHP checks the name for the corresponding PHP variable via `$_GET` on GET requests.

-->

</head>
<body>
<?php

// Show errors, but not all...
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get data from a GET or POST (change GET to POST for post)
if(isset($_GET['dog'])) { $data = $_GET['dog']; } else { $data = ""; }
if(isset($_GET['cat'])) { $data = $_GET['cat']; } else { $data = ""; }
if(isset($_GET['bird'])) { $data = $_GET['bird']; } else { $data = ""; }

if (!$data) {
  print "
    <div style='width: 100%; display: flex; justify-content: center; flex-direction: column'>
    <h1>Pick a picture</h1>
    <form method='GET' action='unit08.php' style='display: flex; width: fit-content; flex-direction: column'>
      <div style='display: flex'>
        <div style='width: 100px;'>
          <p>Dog</p>
          <input type='radio' name='dog' value='http://cdn.akc.org/content/article-body-image/samoyed_puppy_dog_pictures.jpg' />
        </div>
        <div style='width: 100px;'>
          <p>Cat</p>
          <input type='radio' name='cat' value='https://media.istockphoto.com/photos/european-short-haired-cat-picture-id1072769156?k=20&m=1072769156&s=612x612&w=0&h=k6eFXtE7bpEmR2ns5p3qe_KYh098CVLMz4iKm5OuO6Y=' />
        </div>
        <div style='width: 100px;'>
          <p>Bird</p>
          <input type='radio' name='bird' value='https://abcbirds.org/wp-content/uploads/2021/07/Blue-Jay-on-redbud-tree-by-Tom-Reichner_news.png' />
        </div>
      </div>
      <div style='margin-top: 2rem'>
        <button type='submit'>Submit</button>
      </div>
    </form>
    </div>
    ";
} else {
  print "
    <div style='width: 100%; display: flex; justify-content: center;'>
      <img src=$data />
    </div>
  ";
}

?>
</body>
</html>