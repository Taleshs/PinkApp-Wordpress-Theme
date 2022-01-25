        </div> <!-- class="siteBody -->
     

        <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

            <?php $modal_padrao = get_field( 'modal_padrao' ); ?>
            <?php if ( $modal_padrao ): ?>
            <?php foreach ( $modal_padrao as $modal ): ?>
            <?php setup_postdata ( $post ); ?> 
            <div class="modal">
                <?php $tipo_modal = get_field( 'tipo_do_modal',$modal ); ?>
                    

                <div class="modal__inner"> 
                    <div class="modal__close"></div>
                    <?php $imagem_modal = get_field( 'imagem_modal',$modal); ?>
                    <?php if ( $imagem_modal ) { ?>
                         <img src="<?php echo $imagem_modal['url']; ?>" alt="" class="modal__img" /> 
                    <?php } ?>
                    <div class="modal__text"> <h3 class="modal__title"> 
                        <?php the_field( 'chamada_modal',$modal); ?>
                        </h3> <p> <?php the_field( 'conteudo_modal',$modal); ?></p> 
                        <btn id="popup__wpp" class="btn btn--whatsapp btn--leading"><?php the_field( 'texto_cta_modal',$modal); ?> </btn> 
                    </div>
                </div>

                
            </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        <?php endwhile; endif; ?>


         



        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lax.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

        <script>
            /*jQuery(document).ready(function($) {
                function leadingToWpp() {
                    var token = localStorage.getItem('tempID');
                    tokenMessage = token ? "Token%3A%20" + token + "%0A" : "";
                    amplitude.getInstance().logEvent("Token Generated", { token } )
                    const message = tokenMessage + "Eu%20quero%20saber%20mais%20sobre%20o%20PinkApp%21";
                    const baseHref = "https://wa.me/5521983051796";
                    const newURL = baseHref + '?text=' + message;

                    window.open(newURL, '_blank');
                }

                function getMixpanelCookies(){
                    var cookies = document.cookie.split(';');

                    for (var i=0; i<cookies.length ; i++) {
                        var cookie = cookies[i];
                        if (cookie.match(/mp_[a-f0-9]{32}_mixpanel=/)) {
                            return cookie.split('=')[1];
                        }
                    }

                    return "";
                }

                function setLocalStorageinMixpanel(){
                    localStorageObj = {};
                    for (key in localStorage){
                        var value = localStorage.getItem(key);
                        if(key && value){
                            localStorageObj[key] = value;
                        }
                    }

                    mixpanel.people.set(localStorageObj);
                }

                function appendToken() {
                    if(localStorage.getItem('tempID')){

                        leadingToWpp();
                        return;
                    }

                    var params = {};
                    if (localStorage.getItem('gclid')) {
                        params.gclid = localStorage.getItem('gclid');
                    }

                    params.mixpanelID= mixpanel.get_distinct_id();

                    var mpCookie = getMixpanelCookies();
                    if(mpCookie){
                        params.mixpanelInfo = mpCookie;
                    }


                    $.ajax({
                        url: 'https://tracking-service-prod.herokuapp.com/token',
                        type: 'post',
                        dataType: 'json',
                        contentType: 'application/json',
                        success: function (data) {
                            if(data.token){
                                localStorage.setItem('tempID', data.token);
                                mixpanel.track("Event-TokenCreated", {
                                    "pinkToken": data.token
                                });
                            }
                            
                            leadingToWpp();
                        },
                        data: JSON.stringify(params)
                    });
                }

                $(".btn--leading").click(function() {
                    //setLocalStorageinMixpanel();
                    //appendToken();
                    get_wpp_link();
                });

                var validateModalForm = function() {
                    if ($('#modalNome').val().length > 0 && $('#modalTelefone').val().length > 0) {
                        $('#modalSubmit').prop('disabled', false);
                    } else {
                        $('#modalSubmit').prop('disabled', true);
                    }
                }

                $('#formContato input').keyup(function() { validateModalForm() });

               

                mixpanel.init('c1041de32e0e16d10de95b955ffa1d7f', {
                    'loaded': function(mixpanel) {
                      

                    }
                });

                $('#formContato').on('submit', function(e) {

                    e.preventDefault();
                    var form = $(this);
                    var params = {
                        name: $('#modalNome').val(),
                        phone_number: $('#modalTelefone').val(),
                        gclid: '',
                        source: '',
                        mixpanel_id: '',
                    }

                    if (localStorage.getItem('gclid')) {
                        params.gclid = localStorage.getItem('gclid');
                        params.source = 'google_ads';
                    }

                    if (params.name == "" || params.phone_number == "") {
                        alert("Name must be filled out");
                        return;
                    }

                    if (mixpanel) {
                        params.mixpanel_id = mixpanel_id;
                    }


                    $('body').addClass('is-form-loading');


                    $.post('https://hooks.zapier.com/hooks/catch/9023070/oemlb0k/', { phone_number: params.phone_number, name: params.name, gclid: params.gclid, source: params.source, mixpanel_id: params.mixpanel_id },
                        function(returnedData) {
                            console.log(params)
                            setTimeout(function() {
                                leadingToWpp();
                                $('body').removeClass('is-form-loading');
                                $('body').removeClass('is-modalOpen');
                               
                            }, 1000);
                        }
                    );


                });


                console.log('1255');


            });


            var scrollFlag = true;
            window.onscroll = function () {
                if (window.scrollY > 100) {
                    if (scrollFlag) {
                        document
                            .getElementById("siteBody")
                            .classList.add("is-scrolled");
                    }
                    scrollFlag = false;
                } else {
                    scrollFlag = true;
                    document
                        .getElementById("siteBody")
                        .classList.remove("is-scrolled");
                }
            };

            window.onload = function () {
               lax.init();

               lax.addDriver('scrollY', function () {
                  return window.scrollY
                })

                const updateLax = () => {
                    lax.update(window.scrollY);
                    window.requestAnimationFrame(updateLax);
                };

                window.requestAnimationFrame(updateLax);
            };*/

            jQuery(document).ready(function($) {

                function leadingToWpp() {
                   // var token = localStorage.getItem('tempID');
                   // tokenMessage = token ? "Token%3A%20" + token + "%0A" : "";
                   // amplitude.getInstance().logEvent("Token Generated", { token } )
                   // const message = tokenMessage + "Eu%20quero%20saber%20mais%20sobre%20o%20PinkApp%21";
                   // const baseHref = "https://wa.me/5521983051796";
                   // const newURL = baseHref + '?text=' + message;
                   newURL = get_wpp_link();
                   console.log(newURL);

                    window.open(newURL, '_blank');
                }

                  $(".btn--leading").click(function() {
                    leadingToWpp();
                });

            });
        </script>


        <?php wp_footer();?>


    </body>
</html>
