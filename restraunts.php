<!DOCTYPE html>
<html>
<head>
	<title>Restraunt page</title>

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    
</head>
<body>
	<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header">Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header">Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>

  	<script>
    	$(document).ready(function(){
    	$('.collapsible').collapsible();
  		});
  </script>
</body>
</html>