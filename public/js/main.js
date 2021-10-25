$(function(){
    'use strict';

    //loading

    var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 2000);
	};
	loader();

});