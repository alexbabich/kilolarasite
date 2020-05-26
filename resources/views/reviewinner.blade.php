<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>review inner</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Lato:300,400,700,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="df-page-reviewinner">
            <div class="df-container">
                <div class="df-logo-header">
                    @svg('logo.svg')
                </div>
                <a href="" class="df-back-link df-ontop">@svg('arrowBack.svg')Back to reviews</a>
            </div>

            <div class="df-row df-user-image-mobile">
                <img src="/images/mariu_healthyeats.png" alt="" />
                <p class="df-user-nickname">@mariu_healthyeats</p>
                <a href="" class="df-back-link">@svg('arrowBack.svg')Back to reviews</a>
            </div>

            <section class="df-section-user-preview">
                <div class="df-container">
                    <div class="df-row df-user-preview">
                        <div class="df-user-info">
                            <p class="df-user-info-name">
                                Mariu Cabral
                            </p>
                            <p class="df-user-info-description">
                                Mariu Cabral is a nutrition student, blogger, and a wellness enthusiast. She’s been doing intermittent fasting for a while, but struggled to keep track of her diet and fasting times. Mariu loves the DoFasting app for its recipes, convenience, and simplicity. According to her, DoFasting has all the information you could need to “immerse yourself into the fitness world, create your own rhythm, become better, and to achieve your goals.”
                            </p>
                            <button class="df-user-info-playbutton">@svg('playbutton.svg') play video</button>
                        </div>
                        <div class="df-user-image-desktop">
                            <img src="/images/mariu_healthyeats.png" alt="" />
                            <p class="df-user-nickname">@mariu_healthyeats</p>
                        </div>
                    </div>
                    <div class="df-row">
                        <p class="df-user-slogan">“For me it’s the one-stop-shop to help my body and intermittent fasting needs. Give it a try.”</p>
                    </div>
                </div>
            </section>

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
           
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
