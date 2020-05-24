<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>quizsummary</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Lato:300,400,700,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="df-page-quizsummary">

            <section class="df-section-box-hack">
                <div class="df-container df-two-column-2-3 df-column-reverse">
                    <div class="df-two-column-2-3-left">
                        <img class="df-section-box-hack-image" src='/images/summary-box-hack.png' alt="" />
                    </div>
                    <div class="df-two-column-2-3-right">
                        <h1 class="df-section-box-hack-title">Use DoFasting Box Hack</h1>
                        <p class="df-section-box-hack-text">Multiply your results & enjoy an ocean of benefits</p>
                    </div>
                </div>
            </section>

            <section class="df-section-personal-summary">
                <div class="container">
                    <h2 class="df-personal-summary-title">Your personal summary</h2>
                </div>
                <div class="df-container df-two-column-1">
                    <div class="df-two-column-1-left df-personal-summary-item">
                        <div class="df-row df-direction-row">
                            <div class="df-row df-direction-column">
                                <p class="df-personal-summary-item-title">Obesity class 3</p>
                                <span class="df-personal-summary-item-text">Your BMI is 24% above average</span>
                            </div>
                            <p class="df-personal-summary-item-text2">41 BMI</p>
                        </div>
                        <p class="df-personal-summary-item-description">
                            Obesity has been linked to several serious medical conditions as <span class="df-bold">heart disease</span> and <span class="df-bold">stroke, high blood pressure, diabetes, cancer, breathing problems</span>
                        </p>
                    </div>
                    <div class="df-two-column-1-right df-personal-summary-item">
                        <div class="df-row df-direction-row">
                            <div class="df-row df-direction-column">
                                <p class="df-personal-summary-item-title">Metabolic age</p>
                            </div>
                            <p class="df-personal-summary-item-text2">47 y/o</p>
                        </div>
                        <p class="df-personal-summary-item-description">
                            Higher metabolic age can be an early warning sign that you need to change your diet and fitness regime – or in some cases, there could be another contributing medical problem that you need to address.
                        </p>
                    </div>
                </div>
            </section>

            <section class="df-quizsummary-step1 df-section-select-product">
                <div class="df-container df-direction-column">
                    <p class="df-quizsummary-step-number">STEP 1</p>
                    <h2 class="df-quizsummary-step-title">Choose your plan</h2>
                    <p class="df-quizsummary-step-description">All prices are in US dollars unless indicated otherwise</p>
                </div>
                <div class="df-container">
                    <div class="df-product-select-list">
                        <!-- chosen product has class 'active' near with class df-product-select-item-->
                        <div class="df-product-select-item">
                            <p class="df-product-select-item-title">6 months *</p>
                            <p class="df-safe-money">SAVE -75%</p>
                            <div class="df-product-select-item-image">
                                @svg('box6.svg')
                            </div>
                            <div class="df-product-select-item-price">
                                <p>$<b>44.83</b> / box</p>
                            </div>
                            <div class="df-product-select-item-description">
                                <p><span>$1.49 per serving</span><span>180 servings</span></p>
                                <p class="df-text-important">6 boxes will be delivered at once</p>
                            </div>
                            <input type="radio" name="radio" class="df-radio" />
                            <button type="button" class="df-product-select-item-button">get</button>

                            <div class="df-product-select-item-tooltip">
                                <p>Important!</p>
                                <p class="df-text-blue">You can save the most with the 6 month supply</p>
                            </div>
                        </div>
                        <div class="df-product-select-item">
                            <p class="df-product-select-item-title">3 months *</p>
                            <p class="df-safe-money">SAVE -50%</p>
                            <div class="df-product-select-item-image">
                                @svg('box3.svg')
                            </div>
                            <div class="df-product-select-item-price">
                                <p>$<b>44.83</b> / box</p>
                            </div>
                            <div class="df-product-select-item-description">
                                <p><span>$1.49 per serving</span><span>180 servings</span></p>
                                <p class="df-text-important">3 boxes will be delivered at once</p>
                            </div>
                            <input type="radio" name="radio" class="df-radio" />
                            <button type="button" class="df-product-select-item-button">get</button>

                            <div class="df-product-select-item-tooltip">
                                <p>Important!</p>
                                <p class="df-text-blue">You can save the most with the 6 month supply</p>
                            </div>
                        </div>
                        <div class="df-product-select-item">
                            <p class="df-product-select-item-title">1 month</p>
                            <p class="df-safe-money">SAVE -50%</p>
                            <div class="df-product-select-item-image">
                                @svg('box1.svg')
                            </div>
                            <div class="df-product-select-item-price">
                                <p>$<b>44.83</b> / box</p>
                            </div>
                            <div class="df-product-select-item-description">
                                <p><span>$1.49 per serving</span><span>180 servings</span></p>
                            </div>
                            <input type="radio" name="radio" class="df-radio" />
                            <button type="button" class="df-product-select-item-button">get</button>

                            <div class="df-product-select-item-tooltip">
                                <p>Important!</p>
                                <p class="df-text-blue">You can save the most with the 6 month supply</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="df-quizsummary-step2 df-section-select-shipping">
                <div class="df-container df-direction-column">
                    <p class="df-quizsummary-step-number">STEP 2</p>
                    <h2 class="df-quizsummary-step-title">Enter shipping details</h2>
                </div>

                <div class="df-container df-shipping-info">
                    <div class="df-shipping-item">
                        <label class="df-shipping-item-title">Full name</label>
                        <input class="df-shipping-item-input" type="text" placeholder="John Doe" />
                    </div>
                    <div class="df-shipping-item">
                        <label class="df-shipping-item-title">Street Address</label>
                        <input class="df-shipping-item-input" type="text" placeholder="1234 5678 2345" />
                    </div>
                    <div class="df-shipping-item">
                        <label class="df-shipping-item-title">Town/City</label>
                        <input class="df-shipping-item-input" type="text" placeholder="12 / 20" />
                    </div>
                    <div class="df-shipping-item">
                        <label class="df-shipping-item-title">State</label>
                        <input class="df-shipping-item-input" type="text" placeholder="12 / 20" />
                    </div>
                    <div class="df-shipping-item">
                        <label class="df-shipping-item-title">ZIP Code</label>
                        <input class="df-shipping-item-input" type="text" placeholder="12 / 20" />
                    </div>
                    <div class="df-shipping-item">
                        <label class="df-shipping-item-title">Phone Number</label>
                        <input class="df-shipping-item-input" type="text" placeholder="John Doe" />
                    </div>
                    <div class="df-shipping-item">
                        <label class="df-shipping-item-title">Email Address</label>
                        <input class="df-shipping-item-input" type="text" placeholder="1234 5678 2345" />
                    </div>
                    <div class="df-shipping-item">
                        <div class="df-shipping-checkbox">
                            <label class="df-shipping-checkbox-container">
                                Billing address same as shipping
                                <input type="checkbox">
                                <span class="df-shipping-checkbox-checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </section>




            <section class="df-quizsummary-step3 df-section-select-payment">
                <div class="df-container df-direction-column">
                    <p class="df-quizsummary-step-number">STEP 3</p>
                    <h2 class="df-quizsummary-step-title">Select a secure payment method</h2>
                </div>
            </section>



            <section class="df-section-testimonials">

                <div class="df-container">
                    <h2 class="df-section-testimonials-title">Hear success stories from our clients</h2>
                    <p class="df-section-testimonials-text">Nothing inspires more than seeing other people succeed, right? So, read these amazing stories and get ready to start your own. A few months from now you could be one of them!</p>
                </div>
                <div class="df-container">
                    <div class="df-testimonials-slider">
                        <div class="df-testimonials-slider-item">
                            <div class="df-row">
                                <div class="df-testimonials-slider-item-userphoto">
                                    <img src="/images/user1.png" alt="" />
                                </div>
                                <div class="df-testimonials-slider-item-userinfo">
                                    <p class="df-user-name">Jennifer R.</p>
                                    <div class="df-user-raiting">
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                    </div>
                                    <p class="df-user-status">Verified Buyer</p>
                                </div>
                            </div>
                            <p class="df-testimonials-slider-item-text">I’ve been trying to include some beneficial fibers into my routine for ages, but I couldn’t find the right blend. The Essential Fiber Complex really was a game changer for me.</p>
                        </div>
                        <div class="df-testimonials-slider-item">
                            <div class="df-row">
                                <div class="df-testimonials-slider-item-userphoto">
                                    <img src="/images/user2.png" alt="" />
                                </div>
                                <div class="df-testimonials-slider-item-userinfo">
                                    <p class="df-user-name">Paula S.</p>
                                    <div class="df-user-raiting">
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                    </div>
                                    <p class="df-user-status">Verified Buyer</p>
                                </div>
                            </div>
                            <p class="df-testimonials-slider-item-text">DoFastingBox looks super nice and provides scientifically researched fasting graphs. Kudos to the team for such a nice and practical design.</p>
                        </div>
                        <div class="df-testimonials-slider-item">
                            <div class="df-row">
                                <div class="df-testimonials-slider-item-userphoto">
                                    <img src="/images/user1.png" alt="" />
                                </div>
                                <div class="df-testimonials-slider-item-userinfo">
                                    <p class="df-user-name">Jennifer R2.</p>
                                    <div class="df-user-raiting">
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                        <span class="df-user-raiting-item"></span>
                                    </div>
                                    <p class="df-user-status">Verified Buyer</p>
                                </div>
                            </div>
                            <p class="df-testimonials-slider-item-text">The Essential Fiber Complex really was a game changer for me.</p>
                        </div>
                    </div>
                </div>

            </section>





            <section class="df-section-more-benefits">
                <div class="df-container df-two-column-2-3 df-column-reverse">
                    <div class="df-two-column-2-3-left"></div>
                    <div class="df-two-column-2-3-right df-direction-column">
                        <div class="df-row">
                            <h1 class="df-section-more-benefits-title">More benefits of DoFasting Box</h1>
                        </div>
                        <div class="df-row">
                            <ul class="df-list">
                                <li class="df-list-item">Prolongs the fast</li>
                                <li class="df-list-item">Regulates Cholesterol</li>
                                <li class="df-list-item">Maintains healthy colon</li>
                                <li class="df-list-item">Promotes a healthy skin</li>
                                <li class="df-list-item">Blood sugar support</li>
                                <li class="df-list-item">Supports weight loss</li>
                            </ul>
                        </div>
                        <div class="df-row df-direction-column">
                            <button type="button" class="df-button df-section-more-benefits-button">GET YOUR BOX</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $(function(){

                // script for select active product
                $('.df-product-select-item-button').click(function () {
                    let $boxes = $(this).closest('.df-product-select-item');
                    
                    $('.df-product-select-item').removeClass('active');
                    $('.df-radio').attr('checked', false);
                    $('.df-product-select-item-button').html('get');
                    
                    $boxes.toggleClass('active');
                    $boxes.find('.df-radio').attr('checked', true);
                    $(this).html('SELECTED');
                })


                if (window.matchMedia('(max-width: 767px)').matches) {
                    $('.df-product-select-item').click(function () {
                        let $boxes = $(this);
                        
                        $('.df-product-select-item').removeClass('active');
                        $('.df-radio').attr('checked', false);
                        
                        $boxes.toggleClass('active');
                        $boxes.find('.df-radio').attr('checked', true);
                    })
                }
                // end script


                // script for slider config
                $('.df-testimonials-slider').slick({
                    arrows: false,
                    infinite: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    variableWidth: true,
                    centerPadding: 30
                });
                // end script


            });
        </script>

    </body>
</html>
