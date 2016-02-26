
<?php
if(isset($_POST['a'])) {
	echo $_POST['a'];
}
?>






<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").hide();
		$("#s").hide();
    });
});
</script>
</head>
<body>
<form action="" method="post">
<input name="a" id='s'>
<label id='a'>asdasdasdas</label>
<input type="submit">
 </form>
<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<button>Click me</button>

</body>
</html>
