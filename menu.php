//custom menu         <?php
$current_user = wp_get_current_user();
if ( 0 == $current_user->ID ) {
   ?>
	<li><a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text"> Sign In <?php
} else {
    echo '<li><a href="'. wp_logout_url( $redirect ). '"><span >' . $current_user->user_login . '</span> signout ';
}
?>
						  
						
						
						
						</a>
                        </li>
