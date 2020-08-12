
$(document).ready(function(){ 
setTimeout(function(){
  $(".flash").fadeOut("slow", function () {
  $(".flash").remove();
      }); }, 5000);


var onoff=0; 
var sw=""; 
$('#myswitch1').click(function(){ 
if($("#myswitch1:checked").length == 0) 
{ 
onoff=0; 
} 
else 
{ 
onoff=1; 
} 
sw="1"; 
savetodb(); 
}); 
 
$('#myswitch2').click(function(){ 
if($("#myswitch2:checked").length == 0) 
{ 
onoff=0; 
} 
else 
{ 
onoff=1; 
} 
sw="2"; 
savetodb(); 
}); 
 
$('#myswitch3').click(function(){ 
if($("#myswitch3:checked").length == 0) 
{ 
onoff=0; 
} 
else 
{ 
onoff=1; 
} 
sw="3"; 
savetodb(); 
}); 
 
$('#myswitch4').click(function(){ 
if($("#myswitch4:checked").length == 0) 
{ 
onoff=0; 
} 
else 
{ 
onoff=1; 
} 
sw="4"; 
savetodb(); 
}); 
 
$('#myswitch5').click(function(){ 
if($("#myswitch5:checked").length == 0) 
{ 
onoff=0; 
} 
else 
{ 
onoff=1; 
} 
sw="5"; 
savetodb(); 
}); 
 
$('#myswitch6').click(function(){ 
if($("#myswitch6:checked").length == 0) 
{ 
onoff=0; 
} 
else 
{ 
onoff=1; 
} 
sw="6"; 
savetodb(); 
}); 
 
$('#myswitch7').click(function(){ 
if($("#myswitch7:checked").length == 0) 
{ 
onoff=0; 
} 
else 
{ 
onoff=1; 
} 
sw="7"; 
savetodb(); 
}); 
 
$('#myswitch8').click(function(){ 
if($("#myswitch8:checked").length == 0) 
{ 
onoff=0; 
} 
else 
{ 
onoff=1; 
} 
sw="8"; 
savetodb(); 
}); 
 
function savetodb() { 
$.ajax({ 
type: "POST", 
url: "ajax.php", 
data: "value="+onoff+"&col="+sw , 
success: function(html){ 
$("#display").html(html).show(); 
} 
}); 
}; 
 
});