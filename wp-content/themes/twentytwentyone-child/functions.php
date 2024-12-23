<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'twenty-twenty-one-style','twenty-twenty-one-style','twenty-twenty-one-print-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 99 );

// END ENQUEUE PARENT ACTION
/* Describe what the code snippet does so you can remember later on */
add_action('wp_head', 'gtm_in_header');
function gtm_in_header(){
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "Gov Funded, Subsidised Certificate & Diploma Courses - ITHEA",
  "image": "https://ithea.vic.edu.au/wp-content/uploads/2022/12/logo.png",
  "description": "ITHEA is a Melbourne RTO offering Gov Funded Certificate & Diploma Courses in Aged Care, Disability, Mental Health, Early Childhood Education. Enrol Online.",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "ratingCount": "106"
  }
}
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KD367RP');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Ads: 1007444569 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1007444569"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-1007444569'); </script>
<meta name="google-site-verification" content="zlS2vPAetTvUfaplbb2bcZ2-WauK5073fbGDEAjvBW4" />
<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0095/1873.js" async="async" ></script>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '925195396089259');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=925195396089259&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<?php
};
add_action('wp_body_open', 'gtm_in_body');
function gtm_in_body(){
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KD367RP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
};
add_action('wp_footer', 'your_function_name');
function your_function_name(){
?>
<script
    src="https://app.wonderchat.io/scripts/wonderchat.js"
    data-name="wonderchat"
    data-address="app.wonderchat.io"
    data-id="cm1fpgrdl01qc14btgkgr6dqq"
    data-widget-size="normal"
    data-widget-button-size="normal"
    defer
  ></script>
<?php
};