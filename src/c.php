
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("p").hide();
 });
</script>
<p>dasdasda</p>
<fieldset><legend>Check Here

    <input type="checkbox" onclick="toggle('.myClass', this)" ></legend>
    <span class="myClass">
        <p>This is the text.</p>
    </span>
</fieldset>

