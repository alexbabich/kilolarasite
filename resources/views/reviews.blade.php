<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>reviews</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Lato:300,400,700,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="df-page-reviews">

            <section class="df-section-start-journey">
                <div class="df-container">
                    <div class="df-journey-block">
                        <h3 class="df-journey-block-title">Start your journey today</h3>
                        <p class="df-journey-block-text">Find out what works for you with this <span class="df-bold">60-sec quiz</span> and get your personal revolutionary fasting assistant</p>
                        <div class="df-direction-column">
                            <p class="df-select-gender-text">Select your gender:</p>
                            <div class="df-select-gender">
                                <button type="button" class="df-button df-select-gender-button df-male">MALE</button>
                                <button type="button" class="df-button df-select-gender-button df-female">FEMALE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="df-section-join-facebook">
                <div class="df-container">
                    <div class="df-join-facebook">
                        <div class="df-logo">
                            @svg('logoWhite.svg')
                        </div>
                        <h3 class="df-join-facebook-title">Join our Facebook community</h3>
                        <p class="df-join-facebook-text">This group is for everyone who wants to dive deeper into Intermittent Fasting.</p>
                        <button type="button" class="df-button df-join-facebook-button"></button>
                    </div>
                </div>
            </section>

            <section class="df-section-customers">
                <div class="df-container">
                    <h2 class="df-section-title">Success stories</h2>
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
            </section>
           
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
