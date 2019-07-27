<!DOCTYPE HTML> 
<html> 
<head> 
<style> 
body{ 
    text-align:left; 
    background:mediumseagreen; 
  font-family: sans-serif; 
  font-weight: 100; 
} 

 #clockdiv{ 
    font-family: sans-serif; 
    color: #fff; 
    display: inline-block; 
    font-weight: 20; 
    text-align: center; 
    font-size: 6px; 
} 
#clockdiv > div{ 
    padding:2px; 
    border-radius:2px; 
    background:yellow; 
    display: inline-block; 
} 
#clockdiv div > span{ 
    padding: 6px; 
    border-radius: 2px; 
    background: #00816A; 
    display: inline-block; 
} 
smalltext{ 
    padding-top: 2px; 
    font-size: 4px; 
} 
</style> 
</head> 
<body>  

  
<p id="demo"></p> 
  
<script> 
  
var deadline = new Date("July 25, 2019 14:50:00").getTime(); 
  
var x = setInterval(function() { 
  
var now = new Date().getTime(); 
var t =deadline-now; 
var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
var hours = Math.floor((t %(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
var seconds = Math.floor((t % (1000 * 60)) / 1000); 

        document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
if (t < 0) { 
        clearInterval(x); 
        document.getElementById("demo").innerHTML = window.location.href("see.php");
 } 
}, 1000); 
</script>

</body> 
</html> 