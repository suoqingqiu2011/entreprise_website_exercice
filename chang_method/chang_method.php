<script>
$(document).ready(function(){
	$("#form_choix").change(function(){
		var reinitialise=$("#form_choix").attr('value');
		alert(reinitialise);
			var ajax=new XMLHttpRequest();
			ajax.open('GET','reset.php?pays='+reinitialise,true)
			ajax.onreadystatechange=function(){
				if(ajax.readyState==4){
				if(ajax.status==200){			 
					alert(ajax.responseText);			 
				}
			}
		}
	ajax.send();
	});
});
</script>

<html>
<body>
<select class="before form-control" id="form_choix"  name="tag" autocomplete="off" >
			
	<option value="Tous les Pays" >Tous les Pays</option>
	<option value="FRANCE" >FRANCE</option>
	<option value="CHINE" >CHINE</option>
	<option value="US" >US</option>
	
</select>
</body>
</html>