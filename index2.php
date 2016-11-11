<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-1.11.1.js" type="text/javascript"></script>
 
    <script>
    $(document).ready(function(){
		$("#star li").click(function(){
			if($(this).is("li:first") && $(this).hasClass("selected") && !$(this).nextAll("li").hasClass("selected"))
			{
				$(this).removeClass("selected");
				$("input[name=star]").val(0);
			}else{
				$(this).addClass("selected");
				$(this).prevAll("li").addClass("selected");
				$(this).nextAll("li").removeClass("selected");
				$("input[name=star]").val($( "li" ).index($(this))+1);
			}
		});
	});
    </script>
 
	<style>
	ul {
		list-style-type: none;
		margin:0;
		padding:0;
		overflow:hidden;
	}
	ul li{
		background:url('star.png') no-repeat 0px 0px transparent;
		width:16px;
		height:16px;
		float:left;
	}
	ul li.selected{ 
		background:url('star.png') no-repeat -16px 0px transparent;
	}
	</style>
</head>
 
<body>
 
<?php
	if(isset($_POST["star"]))
	{

		echo "<p>La valoración a sido de: ".$_POST['star']."</p>";
	}
	?>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input type="hidden" name="star" value="0">
		<ul id="star">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<p><input type="submit" value="Enviar valoración"></p>
	</form>
 
</body>
</html>