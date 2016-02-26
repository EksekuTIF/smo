<!DOCTYPE html>
<html>
<head>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
        $("#btn").click(function(){
        	$("#isi").text($('#data').val());
        });
      
 
});

function change()
{

	$("#isi").text($('#data').val());
}

function isNumber(){
    var input = $('#data').val();
    // isNaN menguji data itu bukan angka
    if(isNaN(parseFloat(input)))
    {
    	$('#isi').text("Mohon Isi dengan Angka");
    }else{
    	rm();
    	app();
    } 
}

    function append(){
    	var angka;
    	for (angka = 0; angka<=5;angka++)
    	{
    		$("div").append("<input type=\"checkbox\">"+(angka));
    	}
    }

    function app()
   	{
   		var i;
   		var angka1 = $('#data').val();
   		for (i=1;i<=angka1;i++)
   		{
   			$("div").append("<input type=\"checkbox\">"+(i));
   		}
   	}

   	function rm()
   	{
   		$("div").empty();
   	}


</script>
</head>
<body>
<input type="number" maxlength="2" max="14" id="data" onkeyup="isNumber()" >
<p id="isi" ></p>
<div id="ch"><input type="checkbox">Data<input type="checkbox">Data</div>
<button onclick="rm();"> OK</button>
</form>
</body>
</html>
