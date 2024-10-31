<?php
/*
Admin options form
Author: anybuy.vn
Version: 1.0.0
*/
if($_POST['wppabrc_hidden'] == 'Y') {
    //Form data sent
    $wppabrc_title = $_POST['wppabrc_title'];
	$wppabrc_image = $_POST['wppabrc_image'];
    update_option('wppabrc_title', $wppabrc_title);
	update_option('wppabrc_image', $wppabrc_image);
?>
<div class="updated" xmlns="http://www.w3.org/1999/html"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
<?php
} else {
    //Normal page display
    $wppabrc_title = get_option('wppabrc_title');
	$wppabrc_image = get_option('wppabrc_image');
	if($wppabrc_image==''){ $wppabrc_image = plugins_url( 'images/bottom_banner.jpg' , __FILE__ ); }
}
?>
<div class="wrap">
<?php    echo "<h2>" . __( 'Pop-up Ads Bottom Right Corner Options', 'wppabrc_trdom' ) . "</h2>"; ?>
<form name="wppabrc_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
    <input type="hidden" name="wppabrc_hidden" value="Y">
    <?php    echo "<h4>" . __( 'Pop-up Ads Bottom Right Corner Settings', 'wppabrc_trdom' ) . "</h4>"; ?>
    <p><?php _e("Title: " ); ?><input type="text" name="wppabrc_title" value="<?php echo $wppabrc_title; ?>" size="20"><?php _e(" ex: Hotline" ); ?></p>
	<p><?php _e("Image: " ); ?><input type="text" name="wppabrc_image" value="<?php echo $wppabrc_image; ?>" size="20"></p>
    <hr />
    <?php    echo "<h4>" . __( 'Pop-up Ads Bottom Right Corner Settings', 'wppabrc_trdom' ) . "</h4>"; ?>
	<p class="submit">
        <input type="submit" name="Submit" value="<?php _e('Update Options', 'wppabrc_trdom' ) ?>" />
    </p>
</form>
</div>