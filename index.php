<div>
<script src="lib.js"></script>
<script>
	/*
$(document).ready(function(){
	var online = navigator.onLine;
     if(online){
		 alert('online mode');
		 }else{
			 alert('ofline mode');
			 }
	});
	*/
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
