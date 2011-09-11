function getLoadingMessage(){
	var loader = '';
	loader += '<div class="loading_message">';
	loader += '<img src="images/loader.gif" alt="loading" /><span>PLEASE WAIT</span>';
	loader += '</div>';
	return loader;
	
}

jQuery(document).ready(function() {
   jQuery("#month").live('change', function() {
	   var month = this.value;
	   jQuery("#loading").html(getLoadingMessage());
	   jQuery.ajax({
		  url: "ajax.php?func=get_timetable&month="+month,
		  context: document.body,
		  success: function(msg){
		   jQuery("#loading").html("");
		   	jQuery('#timetable_content').html(msg);
		  }
	   });
	});
 });