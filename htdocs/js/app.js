$(document).ready(function(){
    var select = '.input-select';
    var $select = $(select);
    var n = [];

    $select.click(function(){
    	// Close all others actions
    	$select.not($(this)).removeClass('is-active');

    	// Hack
    	$(this).toggleClass('is-active');
    	$(this).toggleClass('is-active');
    	$(this).toggleClass('is-active');

    	// Select option
    	$(this).find('li').click(function(){
    	    $(this).parents(select).find('input').val($(this).text());
    	    $(this).toggleClass('is-active');
    	}); 

    	// Add margin-bottom to the last element if the list is longer
    	if($(this).find('ul').children().length > 6){
    	    $(this).find('li:last').css({
    	    	marginBottom: 10
                })
	   }
    });
});