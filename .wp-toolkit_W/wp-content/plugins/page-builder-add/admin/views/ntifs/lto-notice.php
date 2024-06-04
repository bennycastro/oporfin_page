<?php if ( ! defined( 'ABSPATH' ) ) exit; 

if( !function_exists("ltoNoticeDefault") ){
    function ltoNoticeDefault(){
        $reviewurl = 'https://pluginops.com/page-builder/?ref=specDiscount&src=wpdash&ut=0';
    
        global $wp;
        $nobugurl = home_url( $wp->request ) . '?plugOPB_hide_holiday=1';

        if(strpos($nobugurl, 'wp-admin') == false){
            $nobugurl = get_admin_url() . '?plugOPB_hide_holiday=1';
        }


        $thisAdminURL = get_admin_url();
        $thisDefaultUrlProtocol =  'http://';
        if (strpos($thisAdminURL, 'https') !== false ) {
            $thisDefaultUrlProtocol =  'https://';
        }

        $imgUrl = ULPB_PLUGIN_URL.'/images/icons/holiday-icons.png';

        $actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (strpos($actual_link, '?') == false) {
            $nobugurl = $actual_link . '?plugOPB_hide_holiday=1';
        }else{
            $nobugurl = $actual_link . '&plugOPB_hide_holiday=1';
        }

        $nobugurl = $thisDefaultUrlProtocol.$nobugurl;

        $install_date = get_option( 'plugOPB_activation_date' );

        return "

            <div class='notice' style='background:#bb96ff;color:#fff; padding:10px 25px;'>

                <div style='display:flex;'>
                    <div style='width:80%;'>
                        
                        <div style='text-align:center;'>
                            <p style='padding:10px; font-size:22px;'>PluginOps Landing Page Builder - Special Limited Discout Offer - Upto 50% Off</p>
                            <p>Build high converting landing pages easily with PluginOps upgrade now and build better landing pages.</p>
                            <br /><br />
                            <a href='$reviewurl' style='text-decoration:none; color:#fff; padding:10px 20px; font-size: 22px; background:#5f0ef7; border-radius:5px; ' >Avail Special Discount Now</a>
                        </div>
                        <a href=".$nobugurl." style='color:#fff;'>Dismiss</a>
                    </div>

                    <div style='width:20%'>
                        <a href=".$nobugurl."><button type='button' class='notice-dismiss' style='display:inline-block; position:relative; float:right;margin-top:45px;'><span class='screen-reader-text'>Dismiss this notice.</span></button></a>
                    </div>
                </div>
            
            </div>
        ";
    }
}

?>