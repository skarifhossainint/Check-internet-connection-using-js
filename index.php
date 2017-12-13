<div>
<script src="lib.js"></script>
<script>

	var online = navigator.onLine;
	window.onload = function() {
  checkof(online);
};
function checkof(online){
	if(online){
		 alert('online mode');
		 }else{
			 alert('ofline mode');
			 }
	}	
</script>

</div>
