<?php
add_filter( 'wbk_service_quantity', 'my_service_quantity', 10, 3 );
function my_service_quantity( $input, $service_id, $time) {
	$weekday = date('N', $time );
	switch ( $weekday ) {
		case '1':
			return 2;
			break;
		case '2':
			return 2;
			break;	
		case '3':
			return 4;
			break;
		case '4':
			return 4;
			break;
		case '5':
			return 2;
			break;
		case '6':
			return 4;
			break;
		case '7':
			return 2;
			break;
		default:
			return 2;
			break;
	}
 
}
?>
