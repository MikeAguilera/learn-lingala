	    
$( "a:last" ).click(function() {
  update( $( "#gone" ) );
});

function update( j ) {
  j.hide();
}