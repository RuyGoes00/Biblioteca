<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Books Embedded Viewer API Example</title>
    <script type="text/javascript" src="https://www.google.com/books/jsapi.js"></script>
    <script type="text/javascript">
      google.books.load();

      function initialize() {
        var viewer = new google.books.DefaultViewer(document.getElementById('viewerCanvas'));
        viewer.load('ISBN   :9781781106587');
      }

      google.books.setOnLoadCallback(initialize);
    </script>
  </head>
  <body>
    <?php 
    
    if (isset($_GET['isbn'])){
        $isbn = "0738531367";
        $process = "ISBR:$isbn";
    }else {
        $isbn = "";
        
    }
    
    ?>
    <div id="viewerCanvas" style="width: 100%; height: 100vh"></div>
  </body>
</html>