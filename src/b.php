

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
		$("#khs").attr("type","text");
    });
});
</script>
</head>
<body>
<form action="" method="post">
<input id="as" value="123" name="a">
<input type="hidden" id="khs"  >

 </form>

<button>Click me</button>

</body>
</html>