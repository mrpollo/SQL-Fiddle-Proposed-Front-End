/* Author: Ramon Roche ramon@boxelinc.com

*/


function resizeLayout(){
	var wheight = $(window).height() - 60;
	if( parseInt( $('#content .panel').css('min-height').replace(/px/, ""), 10 ) < ( wheight / 2 ) ){
		// parents
		$('#schema-output').css('height', ((wheight - 10)/2) + 'px' );
		$('#output').css('height', ((wheight - 10)/2) + 'px' );
		// children
		// tab area
		$('#schema-output .tab-content').css('height', ( $('#schema-output').height() - 52 ) + "px" );
		// textarea schema
		// 34
		// $('#schema-output .tab-content').css('height', ( $('#schema-output .tab-content').height() - 2 - 8 ) + "px" );
		$('#result-ddl').css('height', ( $('#fiddleFormDDL').height() - 2 - 8 ) + "px" );
		$('#result-csv').css('height', ( $('#fiddleFormCSV').height() - 2 - 8 ) + "px" );
		$('#result-text').css('height', ( $('#fiddleFormText').height() - 2 - 8 ) + "px" );
		// textarea sql
		$('#sql-ta').css('height', ( $('#schema-output').height() - 2 - 8 ) + "px" );
		// textarea output
		$('#result-ta').css('height', ( $('#output').height() - 2 - 8 ) + "px" );
		
	}
	$('#sql-ta').css('width', ( $('#fiddleFormSQL').width() - 2 - 8 ) + "px" );
	$('#result-ta').css('width', ( $('#output').width() - 2 - 8 ) + "px" );
	$('#result-ddl').css('width', ( $('#fiddleFormDDL').width() - 2 - 8 ) + "px" );
	$('#result-csv').css('width', ( $('#fiddleFormCSV').width() - 2 - 8 ) + "px" );
	$('#result-text').css('width', ( $('#fiddleFormText').width() - 2 - 8 ) + "px" );
}
window.addEventListener('load', function(){
	resizeLayout();
	$('#schema-output .schema a[data-toggle="tab"]').on('shown', function (e) {
		// e.target
		// e.relatedTarget
		// log(e);
		resizeLayout();
	})
})
window.addEventListener('resize', resizeLayout);