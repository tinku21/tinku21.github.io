$(document).ready(function(){
	
	// default settings
	// $('.panel').slidePanel();
	
	// custom settings
	$('#panel1').slidePanel({
		triggerName: '#trigger1',
		position: 'fixed',
		triggerTopPos: '160px',
		panelTopPos: '199px',
		ajax: true,
		ajaxSource: 'ajax.html'
	});
	
	$('#panel2').slidePanel({
		triggerName: '#trigger2',
		triggerTopPos: '160px',
		panelTopPos: '199px'
	});
	
	$('#panel3').slidePanel({
		triggerName: '#trigger3',
		triggerTopPos: '220px',
		panelTopPos: '200px',
		ajax: true,
		ajaxSource: 'ajax.html'
	});
	
	$('#panel4').slidePanel({
		triggerName: '#trigger4',
		position: 'relative',
		triggerTopPos: '40px',
		panelTopPos: '0px',
		ajax: true,
		ajaxSource: 'ajax.html'
	});
});


$(document).on('click', function (e){
    /* bootstrap collapse js adds "in" class to your collapsible element*/
    var menu_opened = $('#main-navigation').hasClass('in');
  
    if(!$(e.target).closest('#main-navigation').length &&
        !$(e.target).is('#main-navigation') &&
        menu_opened === true){
            $('#main-navigation').collapse('toggle');
    }

});