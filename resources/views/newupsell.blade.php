<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>newupsell</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Lato:300,400,700,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="df-page-newupsell">
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

                <div class="df-row df-justify-center df-direction-column df-align-center">
                    <h2 class="df-page-title">Wait!</h2>
                    <h4 class="df-page-subtitle">Last but not least, your <span class="df-text-blue df-custom-underline">SCIENCE-BASED</span> secret weapon for weight loss</h4>
                    <div class="df-image">
                        <img src="/images/upsellmainimg.png" alt="upsellmainimg" />
                    </div>
                </div>
                <div class="df-row df-justify-center">
                    <p class="df-page-description">
                        <span class="df-text-blue">FACT:</span> This Intermittent Fasting “Shortcut” Forces Your Body to <span class="df-text-blue">Lower Bad Cholesterol</span>, Crush Your Hunger Pangs, & <span class="df-text-blue">Lose Weight Faster!</span>
                    </p>
                </div>
            </div>
            <section class="df-blue-bg">
                <div class="df-container">
                    <h3 class="df-slogan">
                        93%
                        <span>better<br/>results</span>
                    </h3>
                </div>
            </section>

            <section class="df-section-straight">
                <div class="df-container">
                    <div class="df-row df-direction-column df-align-center df-pb-20">
                        <h2 class="df-page-title">Let’s <span class="df-underline-text">get it</span> straight:</h2>
                    </div>
                    <div class="df-row df-direction-column">
                        <p class="df-simple-text">
                            Getting into intermittent fasting without experiencing cravings can take serious discipline – <b>especially at the beginning</b> when your body is fighting off hunger pangs. A hunger pang not defeated is extra weight gained.
                        </p>
                        <p class="df-simple-text df-bold">
                            And we know it can be difficult.
                        </p>
                        <p class="df-simple-text">
                            <b>THE TRUTH IS</b>, maintaining the lifestyle in the <b>long term</b> is crucial. That’s why hunger must be <b>CRUSHED WITHOUT MERCY</b>.
                        </p>
                        <p class="df-simple-text df-text-red df-bold df-pb-40">
                            In the next 33 seconds you will<br/>understand why.
                        </p>
                        <div class="df-image df-text-center df-mb-30">
                            <img src="/images/straight.png" alt="straight" />
                        </div>
                        <p class="df-image-description">
                            It Doesn’t Matter Where You Are on the Journey to Your Dream Body, we will <span class="df-text-blue">Accelerate Your Results</span> and Make Your Transformation Feel <span class="df-text-blue">EFFORTLESS</span>.
                        </p>
                    </div>
                </div>
            </section>

            <section class="df-section-product-preview">
                <div class="df-container">
                    <div class="df-row df-justify-center df-align-center df-mb-50">
                        <p class="df-product-preview-description">
                            <span class="df-bold">get a 30-pack BOX</span> of <span class="df-bold df-underline-text">natural <span class="df-text-red">Essential Fiber Complex</span></span> together with a detailed guide <span class="df-bold df-underline-text">formulated by nutrition experts</span></span>
                        </p>
                    </div>

                    <div class="df-row df-justify-center df-align-center df-direction-column">
                        <div class="df-image">
                            @svg('hugebox.svg', 'df-hugebox')
                        </div>
                        <p class="df-image-description">
                            No sugar and <span class="df-text-red df-bold">just three calories</span> per serving
                        </p>
                        <a href="" class="df-product-preview-link">A Must-Have For Fast-ers</a>
                        <button type="button" class="df-button df-product-preview-button">ADD NOW!</button>
                    </div>
                </div>
            </section>

            <section class="df-grey-bg df-pb-50 df-pt-100">
                <div class="df-row df-product-list">
                    <div class="df-product-wrapper df-most-popular">
                        <div class="df-most-popular-title">
                            <p>
                                <span>@svg('starWhite.svg', 'df-star')</span>
                                MOST POPULAR
                            </p>
                        </div>
                        <div class="df-product-item">
                            <p class="df-poduct-title">6 months *</p>
                            <p class="df-safe-mony">SAVE $150.96</p>
                            <div class="df-product-image">
                                @svg('box6.svg', 'df-product')
                            </div>
                            <div class="df-product-price">
                                <p>$<b>269</b> / 6 boxes</p>
                            </div>
                            <div class="df-product-info">
                                <p><span>$44.83 per box</span><span>$1.49 per serving</span></p>
                                <p>180 servings</p>
                                <p class="df-text-important">6 boxes will be delivered at once</p>
                            </div>
                            <button class="df-button df-buy-button">BUY NOW</button>
                        </div>
                    </div>
                    <div class="df-product-wrapper">
                        <div class="df-product-item">
                            <p class="df-poduct-title">3 months *</p>
                            <p class="df-safe-mony">SAVE $60.97</p>
                            <div class="df-product-image">
                                @svg('box3.svg', 'df-product')
                            </div>
                            <div class="df-product-price">
                                <p>$<b>149</b> / 3 boxes</p>
                            </div>
                            <div class="df-product-info">
                                <p><span>$49.66 per box</span><span>$1.65 per serving</span></p>
                                <p>90 servings</p>
                                <p class="df-text-important">3 boxes will be delivered at once</p>
                            </div>
                            <button class="df-button df-buy-button">BUY NOW</button>
                        </div>
                    </div>
                    <div class="df-product-wrapper">
                        <div class="df-product-item">
                            <p class="df-poduct-title">1 months</p>
                            <div class="df-product-image">
                                @svg('box1.svg', 'df-product')
                            </div>
                            <div class="df-product-price">
                                <p>$<b>69.99</b> / 1 box</p>
                            </div>
                            <div class="df-product-info">
                                <p><span>$2.33 per serving</span></p>
                                <p>30 servings</p>
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
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
