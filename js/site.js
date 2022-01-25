jQuery(document).ready(function($) {

    $(".asideNav__menu__item").each(function() {
        $(this).addClass("not-visited");
    });
    $(".asideNav__menu__section").each(function() {
        var itemsLength = $(this).find("ul li").length;
        $(this).find(".asideNav__menu__title").attr("data-length", itemsLength);
    });
    $(".call-menu").click(function() {
        $("body").toggleClass("is-menuOpen");
        $('.asideNav__menu').scrollTop(0);
    });

    $(document).on("click", ".modal, .modal__close", function() {
        mixpanel.track("Event-ModalClose", {});
        $("body").removeClass("is-modalOpen");
    });


    $(document).on("click", ".modal__inner", function(ev) {
        ev.stopPropagation();
    });

    $(document).on("click", "a,button,input[type=submit]", function(ev) {
        var attributes = {};

        for (var att, i = 0, atts = ev.target.attributes, n = ev.target.attributes.length; i < n; i++) {
            att = atts[i];
            attributes[att.nodeName] = att.nodeValue;
        }
        amplitude.getInstance().logEvent("Landing Page Click", attributes)
    });

    window.onload = function() {
        amplitude.getInstance().logEvent("Landing Page Load", { path: window.location.pathname });
    };

    $(document).on("click", ".btn--leading", function(ev) {
        var attributes = {};

        for (var att, i = 0, atts = ev.target.attributes, n = ev.target.attributes.length; i < n; i++) {
            att = atts[i];
            attributes[att.nodeName] = att.nodeValue;
        }
        amplitude.getInstance().logEvent("Landing Page WhatsappLead", attributes)
    });
    
    $(document).on("click", ".btn", function(e) {
        if ($(this).attr('href') == "#") {
            e.preventDefault();
            mixpanel.track("Event-ModalOpen", {});
            $("body").addClass("is-modalOpen");
        } else if ($(this).hasClass('.btn-whatsapp')) {

        }

    });

    $(document).on("click", ".siteFooter__menu__item", function() {
        $(this).toggleClass("is-open");
    });

    function checkCurrent() {
        var url = window.location.href;
        $('.asideNav__menu__inner a[href="' + url + '"]').addClass('is-current');
    }
    checkCurrent();

    function stickyMenu() {
        var menuHeight = $(".asideNav__menu").height();
        var vh = window.innerHeight;
        var stickyTop = vh - menuHeight - 20;
        if (window.innerWidth >= 1200) {
            $(".asideNav__menu").css("top", stickyTop);
        } else {
            $(".asideNav__menu").css("top", 0);
        }
    }
    stickyMenu();
    $(window).on("resize", function() {
        stickyMenu();
    });


    $('.priceTable__mobileContainer').flickity({
        // options
        cellAlign: 'left',
        prevNextButtons: false,
        contain: true
    });


    var SPMaskBehavior = function(val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

    $('.phone-mask').mask(SPMaskBehavior, spOptions);







});