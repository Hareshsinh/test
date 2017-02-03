<?php
	echo "dsds";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery.getJSON demo</title>
  <style>
  img {
    height: 100px;
    float: left;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div id="images"></div>
 
<script>

(function() {
  alert('dsd');
  // var flickerAPI = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
  var flickerAPI = "test.php?jsoncallback=?";
  $.getJSON( flickerAPI, {test:'test'})
    .done(function(data) {
      alert(data);
    });
})();
</script>
 fsdfdsfsdfdsfdsfds
</body>
</html>