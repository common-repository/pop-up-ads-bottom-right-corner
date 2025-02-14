<?php
/*
Plugin Name: Pop-up Ads Bottom Right Corner
Plugin URI: http://anybuy.vn/
Description: Display small windows pop-up in bottom right corner in your WordPress site.
Version: 1.0.0
Author: anybuy.vn
Author URI: http://anybuy.vn/
*/
add_action('admin_menu', 'wppabrc_admin_actions');
function wppabrc_admin(){
    require('wppabrc_admin.php');
    exit;
}
function wppabrc_admin_actions(){
    add_options_page('Pop-up Ads Bottom Right Corner', 'Pop-up Ads Bottom Right Corner', 1, 'PopupAdsBottomRightCorner', 'wppabrc_admin');
}
add_filter( 'wp_footer', 'wppabrc_add_script' );
function wppabrc_add_script(){
$wppabrc_title = get_option('wppabrc_title');
$wppabrc_image = get_option('wppabrc_image');
?>
<script type="text/javascript">
//Alert MsgAd
clicksor_enable_MsgAlert = true;
//default pop-under house ad url
clicksor_enable_pop = true; clicksor_frequencyCap = 0.1;
durl = '';
//default banner house ad url
clicksor_default_url = '';
clicksor_banner_border = '#000f30'; clicksor_banner_ad_bg = '#FFFFFF';
clicksor_banner_link_color = '#0c15ff'; clicksor_banner_text_color = '#da0041';
clicksor_banner_image_banner = true; clicksor_banner_text_banner = true;
clicksor_layer_border_color = '';
clicksor_layer_ad_bg = ''; clicksor_layer_ad_link_color = '';
clicksor_layer_ad_text_color = ''; clicksor_text_link_bg = '';
clicksor_text_link_color = '#0c59ff'; clicksor_enable_text_link = true;
clicksor_enable_VideoAd = true;
</script>
<style type="text/css">
* html div#fl813691 {position: absolute; overflow:hidden;
top:expression(eval(document.compatMode &&
document.compatMode=='CSS1Compat') ?
documentElement.scrollTop
+(documentElement.clientHeight-this.clientHeight)
: document.body.scrollTop
+(document.body.clientHeight-this.clientHeight));}
#fl813691{font: 12px Arial, Helvetica, sans-serif; color:#666; position:fixed; _position: absolute; right:0; bottom:0; height:150px; }
#eb951855{ width:289px; padding-right:7px; background:url(<?php echo plugins_url( 'images/fullborder_bg_right.gif' , __FILE__ );?>) no-repeat right top;}
#cob263512{background:url(<?php echo plugins_url( 'images/fullborder_bg.gif' , __FILE__ );?>) no-repeat left top; height:150px; padding-left:7px;}
#coh963846{color:#690;display:block; height:20px; line-height:20px; font-size:11px; width:283px;}
#coh963846 a{color:#690;text-decoration:none;}
#coc67178{float:right; padding:0; margin:0; list-style:none; overflow:hidden; height:15px;}
            #coc67178 li{display:inline;}
            #coc67178 li a{background-image:url(<?php echo plugins_url( 'images/button.gif' , __FILE__ );?>); background-repeat:no-repeat; width:30px; height:0; padding-top:15px; overflow:hidden; float:left;}
                #coc67178 li a.close{background-position: 0 0;}
                #coc67178 li a.close:hover{background-position: 0 -15px;}
                #coc67178 li a.min{background-position: -30px 0;}
                #coc67178 li a.min:hover{background-position: -30px -15px;}
                #coc67178 li a.max{background-position: -60px 0;}
                #coc67178 li a.max:hover{background-position: -60px -15px;}
#co453569{display:block; margin:0; padding:0; height:123px;  border-style:solid; border-width:1px; border-color:#111 #999 #999 #111; line-height:1.6em; overflow:hidden;}
</style>
<div style="height: 152px; z-index:9999;" id="fl813691">
    <div id="eb951855">
    <div id="cob263512">
        <div id="coh963846">
            <ul id="coc67178">
                <li id="pf204652hide"><a class="min" href="javascript:pf204652clickhide();" title="Hide">Hide</a></li>
                <li id="pf204652show" style="display: none;"><a class="max" href="javascript:pf204652clickshow();" title="Open">Open</a></li>
                <li id="pf204652close"><a class="close" href="javascript:pf204652clickclose();" title="Close">Close</a></li>
            </ul>
         <?php echo $wppabrc_title; ?>
       </div>
	   <!--280x133-->
        <div id="co453569">
		<img src="<?php echo $wppabrc_image; ?>" alt="<?php echo $wppabrc_title; ?>" />
		</div>
    </div>
	</div>
</div>
<script>
pf204652bottomLayer = document.getElementById('fl813691');
var pf204652IntervalId = 0;
var pf204652maxHeight = 150;
var pf204652minHeight = 20;
var pf204652curHeight = 0;
function pf204652show( ){
  pf204652curHeight += 2;
  if (pf204652curHeight > pf204652maxHeight){
    clearInterval ( pf204652IntervalId );
  }
  pf204652bottomLayer.style.height = pf204652curHeight+'px';
}
function pf204652hide( ){
  pf204652curHeight -= 3;
  if (pf204652curHeight < pf204652minHeight){
    clearInterval ( pf204652IntervalId );
  }
  pf204652bottomLayer.style.height = pf204652curHeight+'px';
}
pf204652IntervalId = setInterval ( 'pf204652show()', 5 );
function pf204652clickhide(){
    document.getElementById('pf204652hide').style.display='none';
    document.getElementById('pf204652show').style.display='inline';
    pf204652IntervalId = setInterval ( 'pf204652hide()', 5 );
}
function pf204652clickshow(){
    document.getElementById('pf204652hide').style.display='inline';
    document.getElementById('pf204652show').style.display='none';
    pf204652IntervalId = setInterval ( 'pf204652show()', 5 );
}
function pf204652clickclose(){
    document.body.style.marginBottom = '0px';
    pf204652bottomLayer.style.display = 'none';
}
</script>
<?php
}
?>