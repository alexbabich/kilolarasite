<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>gummies upsell</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Lato:300,400,700,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="df-page-gummies-landing">
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

            <section class="df-gummies-top">
                <div class="df-container df-two-column-1">
                    <div class="df-two-column-1-left df-direction-column">
                        <div class="df-gummies-honor">
                            <div class="df-gummies-honor-medal">
                                @svg('medal2.svg')
                            </div>
                            <div class="df-gummies-honor-text">
                                <p>America’s Top </p>
                                <p>Apple Cider Vinegar Gummies</p>
                            </div>
                        </div>
                        <h1 class="df-gummies-top-title">
                            DoFasting Gummies
                        </h1>
                        <p class="df-gummies-top-text">
                            Your daily dose of tasty nutrition! A delicious, apple-tasting immunity boost. Enriched with the “mother”, fueled with fat-burning properties.
                        </p>
                        <button type="button" class="df-button df-gummies-top-button df-desktop">SHOP NOW</button>
                    </div>
                    <div class="df-two-column-1-right df-relative df-align-center df-direction-column-mobile">
                        <img src="/images/gummiesMockup.png" alt="" />
                        <div class="df-gummies-description">
                            <div class="df-gummies-description-item">
                                @svg('gluten-icon.svg')
                                <p>Gluten-Free</p>
                            </div>
                            <div class="df-gummies-description-item">
                                @svg('vegan-icon.svg')
                                <p>Vegan</p>
                            </div>
                            <div class="df-gummies-description-item">
                                @svg('gmo-icon.svg')
                                <p>Non-GMO</p>
                            </div>
                            <div class="df-gummies-description-item">
                                @svg('usa-icon.svg')
                                <p>Made in USA</p>
                            </div>
                        </div>
                        <button type="button" class="df-button df-gummies-top-button df-mobile">SHOP NOW</button>
                    </div>
                </div>
            </section>

            <section class="df-gummies-benefits">
                <div class="df-container">
                    <h3 class="df-section-title df-text-center df-mb-40">DoFasting Gummies are...</h3>
                </div>
                <div class="df-container df-gummies-benefits-list">
                    <div class="df-gummies-benefits-list-item">
                        <div class="df-benefits-image">
                            <img class="df-desktop" src="/images/vegetables.png" alt="" />
                            <img class="df-mobile" src="/images/vegetables2.png" alt="" />
                        </div>
                        <div class="df-benefits-description">
                            <div class="df-benefits-description-icon df-icon-virus">
                                @svg('virus-icon.svg')
                            </div>
                            <p class="df-benefits-description-text">Powerful toxin fighters</p>
                        </div>
                    </div>
                    <div class="df-gummies-benefits-list-item">
                        <div class="df-benefits-image">
                            <img class="df-desktop" src="/images/shieldImmunityImage.png" alt="" />
                            <img class="df-mobile" src="/images/shieldImmunityImage2.png" alt="" />
                        </div>
                        <div class="df-benefits-description">
                            <div class="df-benefits-description-icon df-icon-shield">
                                @svg('shield-icon.svg')
                            </div>
                            <p class="df-benefits-description-text">Powerful toxin fighters</p>
                        </div>
                    </div>
                    <div class="df-gummies-benefits-list-item">
                        <div class="df-benefits-image">
                            <img class="df-desktop" src="/images/bloodChartImage.png" alt="" />
                            <img class="df-mobile" src="/images/bloodChartImage2.png" alt="" />
                        </div>
                        <div class="df-benefits-description">
                            <div class="df-benefits-description-icon df-icon-bloodChart">
                                @svg('bloodChart-icon.svg')
                            </div>
                            <p class="df-benefits-description-text">Powerful toxin fighters</p>
                        </div>
                    </div>
                    <div class="df-gummies-benefits-list-item">
                        <div class="df-benefits-image">
                            <img class="df-desktop" src="/images/bodyGumImage.png" alt="" />
                            <img class="df-mobile" src="/images/bodyGumImage2.png" alt="" />
                        </div>
                        <div class="df-benefits-description">
                            <div class="df-benefits-description-icon df-icon-body">
                                @svg('body-icon.svg')
                            </div>
                            <p class="df-benefits-description-text">Powerful toxin fighters</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="df-versus">
                <div class="df-container">
                    <h3 class="df-section-title df-text-center df-mb-40">DoFasting Gummies vs Apple Cider Vinegar</h3>
                </div>
                <div class="df-container">
                    <div class="df-versus-table">
                        <div class="df-versus-table-header">
                            <div class="df-column-first">
                                <p>Benefits comparison</p>
                            </div>
                            <div class="df-column-second">
                                <p>DoFasting Gummies</p>
                            </div>
                            <div class="df-column-third">
                                <p>Apple Cider Vinegar</p>
                            </div>
                        </div>
                        <div class="df-versus-table-row">
                            <div class="df-column-first">
                                <p>Kills harmful bacteria</p>
                            </div>
                            <div class="df-column-second">
                                <span class="df-column-check"></span>
                            </div>
                            <div class="df-column-third">
                                <span class="df-column-check"></span>
                            </div>
                        </div>
                        <div class="df-versus-table-row">
                            <div class="df-column-first">
                                <p>Helps to improve insulin sensitivity</p>
                            </div>
                            <div class="df-column-second">
                                <span class="df-column-check"></span>
                            </div>
                            <div class="df-column-third">
                                <span class="df-column-check"></span>
                            </div>
                        </div>
                        <div class="df-versus-table-row">
                            <div class="df-column-first">
                                <p>Promotes balanced blood sugar levels</p>
                            </div>
                            <div class="df-column-second">
                                <span class="df-column-check"></span>
                            </div>
                            <div class="df-column-third">
                                <span class="df-column-check"></span>
                            </div>
                        </div>
                        <div class="df-versus-table-row">
                            <div class="df-column-first">
                                <p>Helps to reduce cholesterol</p>
                            </div>
                            <div class="df-column-second">
                                <span class="df-column-check"></span>
                            </div>
                            <div class="df-column-third">
                                <span class="df-column-check"></span>
                            </div>
                        </div>
                        <div class="df-versus-table-row">
                            <div class="df-column-first">
                                <p>Fueled with fat-burning properties</p>
                            </div>
                            <div class="df-column-second">
                                <span class="df-column-check"></span>
                            </div>
                            <div class="df-column-third">
                                <span class="df-column-check"></span>
                            </div>
                        </div>
                        <div class="df-versus-table-row">
                            <div class="df-column-first">
                                <p>Enriched with essential vitamins</p>
                            </div>
                            <div class="df-column-second">
                                <span class="df-column-check"></span>
                            </div>
                            <div class="df-column-third">
                                <span class="df-column-uncheck"></span>
                            </div>
                        </div>
                        <div class="df-versus-table-row">
                            <div class="df-column-first">
                                <p>Tastes delicious</p>
                            </div>
                            <div class="df-column-second">
                                <span class="df-column-check"></span>
                            </div>
                            <div class="df-column-third">
                                <span class="df-column-uncheck"></span>
                            </div>
                        </div>
                        <div class="df-versus-table-row">
                            <div class="df-column-first">
                                <p>Smells good</p>
                            </div>
                            <div class="df-column-second">
                                <span class="df-column-check"></span>
                            </div>
                            <div class="df-column-third">
                                <span class="df-column-uncheck"></span>
                            </div>
                        </div>
                        <div class="df-versus-table-row">
                            <div class="df-column-first">
                                <p>Safe for tooth enamel</p>
                            </div>
                            <div class="df-column-second">
                                <span class="df-column-check"></span>
                            </div>
                            <div class="df-column-third">
                                <span class="df-column-uncheck"></span>
                            </div>
                        </div>
                        <div class="df-versus-table-row">
                            <div class="df-column-first">
                                <p>Infused with superfoods (beetroot, pomegranate)</p>
                            </div>
                            <div class="df-column-second">
                                <span class="df-column-check"></span>
                            </div>
                            <div class="df-column-third">
                                <span class="df-column-uncheck"></span>
                            </div>
                        </div>
                        <div class="df-versus-table-row">
                            <div class="df-column-first">
                                <p>Easy to take</p>
                            </div>
                            <div class="df-column-second">
                                <span class="df-column-check"></span>
                            </div>
                            <div class="df-column-third">
                                <span class="df-column-uncheck"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="df-article-wrapper">
                <div class="df-container df-two-column-2-3 df-column-reverse df-article">
                    <div class="df-two-column-2-3-left df-direction-column">
                        <p class="df-section-subtitle">Enriched with a substance, beautifully called “mother”</p>
                        <p class="df-article-text">DoFasting Gummies consist of strains of friendly bacteria (probiotics), enzymes, and proteins.</p>
                        
                        <p class="df-section-subtitle">DoFasting Gummies work to increase the feeling of fullness</p>
                        <p class="df-article-text">helping you to consume fewer calories and enjoy prolonged fasting.</p>
                        
                        <p class="df-section-subtitle">They help to</p>
                        <p class="df-article-text">regulate and lower your blood sugar responses after meals.</p>
                        
                        <p class="df-section-subtitle">Acetic acid, found in DoFasting Gummies</p>
                        <p class="df-article-text">works as a powerful weapon against harmful bacteria and viruses.</p>
                    </div>
                    <div class="df-two-column-2-3-right df-article-image">
                        <img src="/images/articleGummies.png" alt="" />
                    </div>
                </div>

                <div class="df-container df-two-column-2-3 df-article">
                    <div class="df-two-column-2-3-left df-direction-column">
                        <h3 class="df-section-title">What’s inside the gummy?</h3>
                        <p class="df-article-text">We wanted to pack all the time-proven benefits of Apple Cider Vinegar in these small, <b>incredibly yummy gummies</b>.</p>
                        <p class="df-article-text">To give you that extra “health kick,” we also added some vitamins, and a few delicious superfoods – <b>vitamins B6, B12, folic acid, pomegranate, and beet juice</b>.</p>
                        <p class="df-article-text">Each DoFasting gummy is <b>infused with the “mother,” bursting with friendly bacteria, enzymes and proteins</b>. No gluten, milk, eggs, dairy, lactose, artificial colors or flavors included.</p>
                        <p class="df-article-text">Take your gummies daily to get a dose of healthy, delicious nutrition!</p>
                    </div>
                    <div class="df-two-column-2-3-right df-article-iamge">
                        @svg('vitamins.svg')
                    </div>
                </div>
            </section>
            
            <section class="df-white-bg df-gummies-order">
                <div class="df-container df-text-center df-mb-30">
                    <h3 class="df-section-title">Order My Gummies NOW!</h3>
                </div>
                <div class="df-container df-two-column-1">
                    <div class="df-two-column-1-left df-align-center">
                        <ul class="df-list">
                            <li class="df-list-item">
                                <span class="df-list-icon df-icon-shield">
                                    @svg('shield-icon.svg')
                                </span>
                                <p class="df-list-text">Boost Your Immune System!</p>
                            </li>
                            <li class="df-list-item">
                                <span class="df-list-icon df-icon-apple">
                                    @svg('apple-icon.svg')
                                </span>
                                <p class="df-list-text">Get Your Daily Dose of Healthy Nutrition!</p>
                            </li>
                            <li class="df-list-item">
                                <span class="df-list-icon df-icon-body">
                                    @svg('body-icon.svg')
                                </span>
                                <p class="df-list-text">Enjoy Prolonged Fasting & Lose More Weight!</p>
                            </li>
                        </ul>
                    </div>
                    <div class="df-two-column-1-right df-align-center">
                        <div class="df-gummies-order-iamge">
                            <img src="/images/gummiesMockup.png" alt="" />
                            @svg('appleGummies.svg', 'df-appleGummies')
                        </div>
                    </div>
                </div>
            </section>

            <section class="df-white-bg df-pb-10 df-pt-100">
                <div class="df-row df-product-list">
                    <div class="df-product-wrapper df-most-popular">
                        <div class="df-most-popular-title">
                            <p>
                                <span>@svg('starWhite.svg', 'df-star')</span>
                                BEST SELLING PACKAGE
                            </p>
                        </div>
                        <div class="df-product-item">
                            <p class="df-poduct-title">5 bottles</p>
                            <div class="df-product-image">
                                <img src="/images/bottle5.png" alt="" />
                            </div>
                            <div class="df-product-price">
                                <p>$<b>89.99</b></p>
                            </div>
                            <div class="df-product-info">
                                <p><span>$17.99 / each</span><span>300 servings</span></p>
                            </div>
                            <button class="df-button df-buy-button">BUY NOW</button>
                        </div>
                    </div>
                    <div class="df-product-wrapper">
                        <div class="df-product-item">
                            <p class="df-poduct-title">3 bottles</p>
                            <div class="df-product-image">
                                <img src="/images/bottle3.png" alt="" />
                            </div>
                            <div class="df-product-price">
                                <p>$<b>59.99</b></p>
                            </div>
                            <div class="df-product-info">
                                <p><span>$19.99 / each</span><span>180 servings</span></p>
                            </div>
                            <button class="df-button df-buy-button">BUY NOW</button>
                        </div>
                    </div>
                </div>
                <div class="df-container">
                    <div class="df-row df-justify-center df-align-center df-mb-30">
                        <a href="" class="df-unsbscribe">No, thank you, I’m not interested in this offer</a>
                    </div>
                </div>
            </section>

            <section class="df-disclaimer">
                <div class="df-container">
                    <h3 class="df-disclaimer-title">DISCLAIMER</h3>
                    <p class="df-disclaimer-text">These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease. The views and nutritional advice expressed by Max Nutrition are not intended for the purpose of providing medical advice. Please always consult your health care provider if you are taking any medications or have any medical condition. Individual results may vary.</p>
                </div>
            </section>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
