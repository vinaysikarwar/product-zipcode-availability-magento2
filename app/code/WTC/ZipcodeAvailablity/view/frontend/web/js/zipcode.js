/* require([
    "jquery",
    "jquery/ui"
], function($){

	function checkgivenzipcode(zipcode){
	 alert(zipcode);
	 console.log('clicked');
		alert('clicked');
	}

}); */

 define([
    "jquery",
    "jquery/ui"
],
    function($){
        console.log('1');
        $.widget('zipcode.js', {
        
        function checkgivenzipcode(zipcode){
	     alert(zipcode);
	     console.log('clicked');
		 alert('clicked');
	    }		
    });
   window.checkgivenzipcode = checkgivenzipcode;
    

});
 

