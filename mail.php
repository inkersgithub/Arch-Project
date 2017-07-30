<?php
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
	border-style: solid;
    border-width: 1px 0px 1px 0px;
	    margin-top: 1px;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>

<div class="w3-container" style="padding: 0.03em 2px;">


  <div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button tablink w3-red" style="padding-bottom: 14px;" onclick="openCity(event,'London')">Prominence Mailbox</button>
<!--    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">Tokyo</button>-->
  </div>
  <?php
  $res=mysqli_query($con,"SELECT * FROM inbox");
  ?>
  <div id="London" class="w3-container w3-border city" style="padding: 0.01em 0px;margin-top: -1px;border: 0px solid rgba(255, 255, 255, 0)!important;">
    <?php
    while($row=mysqli_fetch_array($res)){
    ?>
    <button class="accordion"><?php echo $row['name']." | ".$row['date']; ?></button>
	  <div class="panel">
      <p><?php  ?><p>
      <p><?php echo "E-mail:".$row['email']." |  Phone:".$row['phone'];?><br><?php echo "Message:"; ?><br><?php echo $row['message']; ?>.</p>
	  </div>
    <?php } ?>
 </div>


<!--
  <div id="Tokyo" class="w3-container w3-border city" style="display:none">
    <h2>Tokyo</h2>
    <p>Tokyo is the capital of Japan.</p>
  </div>
-->
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}

</script>

</body>
</html>
