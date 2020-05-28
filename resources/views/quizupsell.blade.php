<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>quizupsell</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Lato:300,400,700,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="df-page-quizupsell">
            <div class="df-container">
                <!-- is class df-pass-first-step and df-pass-second-step is showing progress-->
                <div class="df-row df-justify-between df-steps-nav df-pass-first-step">
                    <div class="df-steps-item df-active">
                        <span class="df-steps-point"></span>
                        <p class="df-steps-title">Order submitted</p>
                    </div>
                    <div class="df-steps-item df-active df-current">
                        <span class="df-steps-point"></span>
                        <p class="df-steps-title">SPECIAL OFFER</p>
                    </div>
                    <div class="df-steps-item">
                        <span class="df-steps-point"></span>
                        <p class="df-steps-title">ORDER RECEIPT</p>
                    </div>
                </div>
            </div>

            <section class="df-section-message-block">
                <div class="df-container">
                    <h3 class="df-section-message-block-title"><span class="df-text-red">Wait!</span> Your Order is Not Complete</h3>
                    <p class="df-section-message-block-text"><span class="df-bold">Act Fast:</span> Grab this one-time exclucive offer before time runs out. This offer is not available elswhere on this site</p>
                </div>
            </section>

            <section class="df-section-app-benefits">
                <div class="df-container df-two-column-1">
                    <div class="df-two-column-1-left df-direction-column">
                        <h2 class="df-section-app-benefits-title">Get an APP that takes your weight loss seriously </h2>
                        <ul class="df-list">
                            <li class="df-list-item"><span class="df-bold">Get better results</span> – Increase weight loss by up to 100% in the next month.</li>
                            <li class="df-list-item"><span class="df-bold">Enjoy life-long weight loss results</span> – form a new healthy habit and maintain a healthy lifestyle.</li>
                            <li class="df-list-item"><span class="df-bold">Start eating healthy, delicious food</span> – All recipes are simple to make and recommended by dietitians.</li>
                            <li class="df-list-item"><span class="df-bold">No stress</span> – fasting with this APP is the least stressful way to lose more weight.</li>
                            <li class="df-list-item"><span class="df-bold">Save BIG</span> – It is a one-time opportunity. This offer won't be available again.</li>
                            <li class="df-list-item"><span class="df-bold">Support</span> – a unique and personalized assistant that will help to maintain a healthy lifestyle in every aspect of life, for the rest of your life.</li>
                        </ul>
                    </div>
                    <div class="df-two-column-1-right"></div>
                </div>
            </section>

            <section class="df-section-app-message">
                <div class="df-container">
                    <div class="df-app-message">
                        <div class="df-app-message-image">
                            @svg('undraw-fitness-tracker.svg')
                        </div>
                        <div class="df-app-message-description">
                            <p class="df-app-message-text">Our APP plans are the easiest way to boost your weight loss,</p>
                            <p class="df-app-message-text2">without any special equipment, or spending hours in the gym.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="df-section-more-offer">
                <div class="df-container">
                    <h2 class="df-section-more-offer-title">More than <span class="df-text-red">100.000</span> took this offer</h2>
                    <div class="df-section-more-offer-rating">
                        <span class="df-rating-item"></span>
                        <span class="df-rating-item"></span>
                        <span class="df-rating-item"></span>
                        <span class="df-rating-item"></span>
                        <span class="df-rating-item-grey"></span>
                    </div>
                </div>
                <div class="df-container">
                    <div class="df-product-select-list">
                        <!-- chosen product has class 'active' near with class df-product-select-item-->
                        <div class="df-product-select-item" data-price="$1.25">
                            <p class="df-product-select-item-title">Annual plan<span> $1.25 per week</span></p>
                            <p class="df-safe-money">SAVE 75%</p>
                            <div class="df-product-select-item-price">
                                <p>$<b>1.25</b> per week</p>
                            </div>
                            <div class="df-product-select-item-description">
                                <p><span class="df-crossed-text df-text-red">$264.00 </span> $66.00 will be charged every 12 months</p>
                            </div>
                            <input type="radio" name="radio" class="df-radio" />
                            <button type="button" class="df-product-select-item-button"></button>

                            <div class="df-product-select-item-tooltip">
                                <p>Important!</p>
                                <p class="df-text-blue">You can save the most with the Annual plan</p>
                            </div>
                        </div>
                        <div class="df-product-select-item" data-price="$1.75">
                            <p class="df-product-select-item-title">6 months plan<span> $1.75 per week</span></p>
                            <p class="df-safe-money">SAVE 50%</p>
                            <div class="df-product-select-item-price">
                                <p>$<b>1.75</b> per week</p>
                            </div>
                            <div class="df-product-select-item-description">
                                <p><span class="df-crossed-text df-text-red">$91.00 </span> $46.00 will be charged every 6 months</p>
                            </div>
                            <input type="radio" name="radio" class="df-radio" />
                            <button type="button" class="df-product-select-item-button"></button>

                            <div class="df-product-select-item-tooltip">
                                <p>Important!</p>
                                <p class="df-text-blue">You can save the most with the Annual plan</p>
                            </div>
                        </div>
                        <div class="df-product-select-item" data-price="$2.50">
                            <p class="df-product-select-item-title">3 months plan<span> $2.50 per week</span></p>
                            <p class="df-safe-money">SAVE 50%</p>
                            <div class="df-product-select-item-price">
                                <p>$<b>2.50</b> per week</p>
                            </div>
                            <div class="df-product-select-item-description">
                                <p><span class="df-crossed-text df-text-red">$66.00 </span> $33.00 will be charged every 3 months</p>
                            </div>
                            <input type="radio" name="radio" class="df-radio" />
                            <button type="button" class="df-product-select-item-button"></button>

                            <div class="df-product-select-item-tooltip">
                                <p>Important!</p>
                                <p class="df-text-blue">You can save the most with the Annual plan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="df-container df-offer-button">
                    <div class="df-row df-direction-column">
                        <button type="button" class="df-button df-section-more-offer-button">YES, ADD THIS TO MY ORDER  <span> Only <span class="df-perweek">$1.25</span>/week</span></button>
                        <p class="df-type-payment-text">Workouts will be included in your program</p>
                        <div class="df-type-payment-list">
                            @svg('visa-grey.svg')
                            @svg('mastercard-grey.svg')
                            @svg('discover-grey.svg')
                            @svg('american-express-grey.svg')
                            @svg('paypal-grey.svg')
                        </div>
                        <a href="" class="df-unsbscribe">No, thank you, I’m not interested in this offer</a>
                    </div>
                </div>

                <div class="df-container">
                    <h2 class="df-section-title df-mt-70 df-who-app-title">Who should use this app?</h2>

                    <div class="df-who-app">
                        <div class="df-who-app-item">
                            <div class="df-who-app-item-image">
                                @svg('user-check.svg')
                            </div>
                            <p class="df-who-app-item-text">People who are fed up with inflective weight loss books & apps that are made for the masses</p>
                        </div>
                        <div class="df-who-app-item">
                            <div class="df-who-app-item-image">
                                @svg('user-check.svg')
                            </div>
                            <p class="df-who-app-item-text">People who don’t want to spend another dime on useless weight loss books & diets</p>
                        </div>
                        <div class="df-who-app-item">
                            <div class="df-who-app-item-image">
                                @svg('user-check.svg')
                            </div>
                            <p class="df-who-app-item-text">People who want a life-long weight loss results</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="df-section-customers">
                <div class="df-container">
                    <h2 class="df-section-title"><span class="df-text-red">1000+</span> of customers love this, you will love this too</h2>
                </div>
                <div class="df-container">
                    <div class="df-customers-list">
                        <div class="df-customers-list-item">
                            <div class="df-customers-info">
                                <div class="df-customers-info-image">
                                    <img src="/images/customer1.png" alt="" />
                                </div>
                                <div class="df-customers-info-name">Liz Rayden</div>
                                <div class="df-customers-info-userstatus">@svg('verified-user.svg')Verified customer</div>
                            </div>
                            <div class="df-customers-description">
                                <div class="df-customers-description-title">Result: <span class="df-text-red">-45 lbs</span></div>
                                <div class="df-customers-description-text">I consider intermittent fasting a way of eating very different from diets. I’ve been living the lifestyle almost 3 years and it has changed everything about my physical, mental, and emotional health. Best decision ever made.</div>
                            </div>
                        </div>
                        <div class="df-customers-list-item">
                            <div class="df-customers-info">
                                <div class="df-customers-info-image">
                                    <img src="/images/customer2.png" alt="" />
                                </div>
                                <div class="df-customers-info-name">Jane Kinsley</div>
                                <div class="df-customers-info-userstatus">@svg('verified-user.svg')Verified customer</div>
                            </div>
                            <div class="df-customers-description">
                                <div class="df-customers-description-title">Result: <span class="df-text-red">-26 lbs</span></div>
                                <div class="df-customers-description-text">I consider intermittent fasting a way of eating very different from diets. I’ve been living the lifestyle almost 3 years and it has changed everything about my physical, mental, and emotional health. Best decision ever made.</div>
                            </div>
                        </div>
                        <div class="df-customers-list-item">
                            <div class="df-customers-info">
                                <div class="df-customers-info-image">
                                    <img src="/images/customer3.png" alt="" />
                                </div>
                                <div class="df-customers-info-name">Claudia Mendes</div>
                                <div class="df-customers-info-userstatus">@svg('verified-user.svg')Verified customer</div>
                            </div>
                            <div class="df-customers-description">
                                <div class="df-customers-description-title">Result: <span class="df-text-red">-22 lbs</span></div>
                                <div class="df-customers-description-text">I consider intermittent fasting a way of eating very different from diets. I’ve been living the lifestyle almost 3 years and it has changed everything about my physical, mental, and emotional health. Best decision ever made.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="df-container df-offer-button">
                    <div class="df-row df-direction-column">
                        <button type="button" class="df-button df-section-more-offer-button">YES, ADD THIS TO MY ORDER  <span> Only <span class="df-perweek">$1.25</span>/week</span></button>
                        <p class="df-type-payment-text">Workouts will be included in your program</p>
                        <div class="df-type-payment-list">
                            @svg('visa-grey.svg')
                            @svg('mastercard-grey.svg')
                            @svg('discover-grey.svg')
                            @svg('american-express-grey.svg')
                            @svg('paypal-grey.svg')
                        </div>
                        <a href="" class="df-unsbscribe">No, thank you, I’m not interested in this offer</a>
                    </div>
                </div>
            </section>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            $(function(){

                // script for select active product
                $('.df-product-select-item').click(function () {
                    let $boxes = $(this);
                    
                    $('.df-product-select-item').removeClass('active');
                    $('.df-radio').attr('checked', false);
                    
                    $boxes.toggleClass('active');
                    $boxes.find('.df-radio').attr('checked', true);

                    $('.df-perweek').html($boxes.attr('data-price'))
                })
                // end script
            });
        </script>
    </body>
</html>
