<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Token call</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
	


<input type="submit" id="callTocken" value="Resquest Token" /> 
<br><br>
<span id="output"></span>
 

<script type="text/javascript">

$('#callTocken').click(function(){
	 // callTocken();
     callTocken();
}); 
 

function callTocken(){ 

// http to send the request and pass some data
var url_a = 'http://yoursite/token_generator.php?'; 

var dataObj = { param1: 'param-1', param2: 'param-2', param3: 'param-3'};

        $.ajax({ 
                url : url_a,
                dataType:"jsonp", 
                jsonp:"mycallback",
                data: dataObj,
                success:function(data){

                    $('#output').html("Token: "+data.token+"<br>"+"Referer: "+data.referer+"<br>"+"SomeData: "+data.someData);
                     
                },
                error:function(XMLHttpRequest){
                    // callback error
                    alert('callback error'); 
                }
            });  
}
</script>


</body>
</html>