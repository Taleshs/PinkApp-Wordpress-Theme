<!DOCTYPE html>
<html lang="pt-BR">
    <head>

        <!-- Analytics -->
        <script>
        /*!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on","addSourceMiddleware","addIntegrationMiddleware","setAnonymousId","addDestinationMiddleware"];analytics.factory=function(e){return function(){var t=Array.prototype.slice.call(arguments);t.unshift(e);analytics.push(t);return analytics}};for(var e=0;e<analytics.methods.length;e++){var key=analytics.methods[e];analytics[key]=analytics.factory(key)}analytics.load=function(key,e){var t=document.createElement("script");t.type="text/javascript";t.async=!0;t.src="https://cdn.segment.com/analytics.js/v1/" + key + "/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.13.1";
        analytics.load("TGykUeQEd48L2CNtfqI4G1WMR8mUJIsX");
        analytics.page();
        }}();*/
        </script>
        <!-- End Analytics -->

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-K5X3QSB');</script>
        <!-- End Google Tag Manager -->

        <!-- Amplitude -->
        <script type="text/javascript">(function(e,t){var n=e.amplitude||{_q:[],_iq:{}};var r=t.createElement("script")
        ;r.type="text/javascript"
        ;r.integrity="sha384-girahbTbYZ9tT03PWWj0mEVgyxtZoyDF9KVZdL+R53PP5wCY0PiVUKq0jeRlMx9M"
        ;r.crossOrigin="anonymous";r.async=true
        ;r.src="https://cdn.amplitude.com/libs/amplitude-7.2.1-min.gz.js"
        ;r.onload=function(){if(!e.amplitude.runQueuedFunctions){
        console.log("[Amplitude] Error: could not load SDK")}}
        ;var i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)
        ;function s(e,t){e.prototype[t]=function(){
        this._q.push([t].concat(Array.prototype.slice.call(arguments,0)));return this}}
        var o=function(){this._q=[];return this}
        ;var a=["add","append","clearAll","prepend","set","setOnce","unset"]
        ;for(var c=0;c<a.length;c++){s(o,a[c])}n.Identify=o;var u=function(){this._q=[]
        ;return this}
        ;var l=["setProductId","setQuantity","setPrice","setRevenueType","setEventProperties"]
        ;for(var p=0;p<l.length;p++){s(u,l[p])}n.Revenue=u
        ;var d=["init","logEvent","logRevenue","setUserId","setUserProperties","setOptOut","setVersionName","setDomain","setDeviceId","enableTracking","setGlobalUserProperties","identify","clearUserProperties","setGroup","logRevenueV2","regenerateDeviceId","groupIdentify","onInit","logEventWithTimestamp","logEventWithGroups","setSessionId","resetSessionId"]
        ;function v(e){function t(t){e[t]=function(){
        e._q.push([t].concat(Array.prototype.slice.call(arguments,0)))}}
        for(var n=0;n<d.length;n++){t(d[n])}}v(n);n.getInstance=function(e){
        e=(!e||e.length===0?"$default_instance":e).toLowerCase()
        ;if(!n._iq.hasOwnProperty(e)){n._iq[e]={_q:[]};v(n._iq[e])}return n._iq[e]}
        ;e.amplitude=n})(window,document);
        amplitude.getInstance().init("95730f988dccde1b82e48084d9d1e118");
        </script>
        <!-- End Amplitude -->

        <!-- Mixpanel -->
        <script type="text/javascript">
            (function(c,a){if(!a.__SV){var b=window;try{var d,m,j,k=b.location,f=k.hash;d=function(a,b){return(m=a.match(RegExp(b+"=([^&]*)")))?m[1]:null};f&&d(f,"state")&&(j=JSON.parse(decodeURIComponent(d(f,"state"))),"mpeditor"===j.action&&(b.sessionStorage.setItem("_mpcehash",f),history.replaceState(j.desiredHash||"",c.title,k.pathname+k.search)))}catch(n){}var l,h;window.mixpanel=a;a._i=[];a.init=function(b,d,g){function c(b,i){var a=i.split(".");2==a.length&&(b=b[a[0]],i=a[1]);b[i]=function(){b.push([i].concat(Array.prototype.slice.call(arguments,
            0)))}}var e=a;"undefined"!==typeof g?e=a[g]=[]:g="mixpanel";e.people=e.people||[];e.toString=function(b){var a="mixpanel";"mixpanel"!==g&&(a+="."+g);b||(a+=" (stub)");return a};e.people.toString=function(){return e.toString(1)+".people (stub)"};l="disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
            for(h=0;h<l.length;h++)c(e,l[h]);var f="set set_once union unset remove delete".split(" ");e.get_group=function(){function a(c){b[c]=function(){call2_args=arguments;call2=[c].concat(Array.prototype.slice.call(call2_args,0));e.push([d,call2])}}for(var b={},d=["get_group"].concat(Array.prototype.slice.call(arguments,0)),c=0;c<f.length;c++)a(f[c]);return b};a._i.push([b,d,g])};a.__SV=1.2;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?
            MIXPANEL_CUSTOM_LIB_URL:"file:"===c.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d)}})(document,window.mixpanel||[]);
            

            var mixpanel_id = '';

            
            mixpanel.init("293a0b4e81b76d8569f6b43e55232268", {
                    
                loaded: function(mixpanel) {

                    console.log( 'INIT HEAD'  )
                    var originalTrack = mixpanel.track;

                    console.log( 'mixpanel_id'  );
                     mixpanel_id = mixpanel.get_distinct_id();
                    console.log( mixpanel_id  );

                    mixpanel.track = function() {
                        mixpanel.register({"last_event_time": Date.now()});
                        originalTrack.apply(mixpanel, arguments);
                    };
                }
            });
        </script>
        <!-- Mixpanel -->

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/images/favicon.png" />

        <!-- Facebook -->

        <meta name="facebook-domain-verification" content="8o1g7q6ctmsnpve2rdkghpat2s60vb" />

        <?php wp_head();?>

    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5X3QSB"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div id="siteBody" class="siteBody">
            <div class="call-menu"></div>
            <div class="asideNav">
                <header class="asideNav__header">
                    <a href="<?php echo get_site_url(); ?>">
                        <h1>
                            <img src="<?php echo get_template_directory_uri();?>/images/logoFull.svg" alt="Pink" />
                        </h1>
                    </a>
                    <div class="call-menu"></div>
                </header>
                <nav class="asideNav__menu">
                    <div class="asideNav__header">
                        <a href="<?php echo get_site_url(); ?>">
                            <h1>
                                <img src="<?php echo get_template_directory_uri();?>/images/logoFull.svg" alt="Pink" />
                            </h1>
                        </a>
                    </div>
                    <ul class="asideNav__menu__inner">

                        <?php if ( have_rows( 'blocos_menu', 'option' ) ) : ?>
                            <?php while ( have_rows( 'blocos_menu', 'option' ) ) : the_row(); ?>

                                <li class="asideNav__menu__section">

                                    <h3 class="asideNav__menu__title">
                                        <?php the_sub_field( 'titulo_menu_lateral' ); ?>
                                    </h3>
                                   <?php $pagina = get_sub_field( 'pagina' ); if ( $pagina ): ?>
                                    <ul>
                                        <?php foreach ( $pagina as $p ): ?>
                                        <li>
                                            <a
                                                href="<?php echo get_permalink( $p ); ?>"

                                                id="<?php
                                                
                                                        $path = wp_make_link_relative(get_permalink( $p ));
                                                        $path = substr($path, 0, -1);
                                                        $path = $path == "" ? "/main" : $path;
                                                        $path = str_replace("/", "__", $path);

                                                        echo ("side-menu" . $path); 
                                                    ?>"
                                                class="asideNav__menu__item"
                                            >
                                                <?php echo get_the_title( $p ); ?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                        </ul>
                                    <?php endwhile; ?>
                                    <?php else : ?>
                                <?php // no rows found ?>
                            <?php endif; ?>

                    </ul>
                </nav>
            </div>