<?php

// Redirection cnp
add_action('wp', 'action_view_cnp');

function action_view_cnp()
{
	if( isset($_REQUEST['form_action']))
	{
		if(($_REQUEST['form_action'] == 'action_view_cnp') )
		{
			wp_redirect( get_permalink( $_REQUEST['cnp_list'] ) );
        }
	}
}