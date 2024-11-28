<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Google Books Embedded Viewer API Example</title>
  <link rel="shortcut icon" href="style/assets/favicon.ico" type="image/x-icon">
  <script type="text/javascript" src="https://www.google.com/books/jsapi.js"></script>
  <script type="text/javascript">
    
    google.books.load();

    function initialize() {

      var viewer = new google.books.DefaultViewer(document.getElementById('viewerCanvas'));
      viewer.load('<?php if (isset($_GET['id'])) {
                      echo $_GET['id'];
                    } ?>')
    }
    google.books.setOnLoadCallback(initialize);
  </script>
</head>

<body>
  <div id="viewerCanvas" style="width: 100vw; height: 100vh"></div>
</body>

</html>