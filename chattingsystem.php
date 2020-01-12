  <?php

?>

<html>  
<head>
 <title>chatbox</title>
 <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
 <script>
  function submitChat() {
   if (form1.uname.value == '' || form1.msg.value == '')
   {
    alert('all fields are mandatory!'); 
    return;
   }
   form1.uname.readOnly = true;
   form1.uname.style.border = 'none';
   var uname = form1.uname.value;
   var msg = form1.msg.value;
   var xmlhttp = new XMLHttpRequest();

   xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200)
    {
     var chatlogs = document.getElementById("chatlogs");
     chatlogs.innerHTML = xmlhttp.responseText;
    }
   }

   xmlhttp.open('GET', 'index.php?uname='+uname+'&msg='+msg, true);
   xmlhttp.send();
  }

  $(document).ready(function(e)
  {
    $.ajaxSetup({cache:false});
    setInterval(function() {$('#chatlogs').load('logs.php');}, 500);
  });

 </script>
</head>
<body>
 <form name="form1">
  Name: <input type="text" name="uname" /><br />
  Message: <br />
  <textarea name="msg" style="width:200px; height:70px"></textarea><br />
  <a href="#" onclick="submitChat()">send</a><br /><br />

  <div id="chatlogs">
   loading...
  </div>
 </form>
</body> 