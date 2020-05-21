<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>benefitcheckpoints</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Lato:300,400,700,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="df-page-benefitcheckpoints">
            <div class="df-container df-two-column-2-3 df-column-reverse">
                <div class="df-two-column-2-3-left"></div>
                <div class="df-two-column-2-3-right df-direction-column">
                    <div class="df-row">
                        <h1 class="df-page-benefitcheckpoints-title">Your personal fasting assistant</h1>
                    </div>
                    <div class="df-row">
                        <ul class="df-list">
                            <li class="df-list-item">Lose unwanted weight</li>
                            <li class="df-list-item">Get fit fast (no gym or equipment needed!)</li>
                            <li class="df-list-item">Learn how to avoid food cravings</li>
                            <li class="df-list-item">Start eating healthy, delicious food</li>
                            <li class="df-list-item">Form new eating patterns</li>
                            <li class="df-list-item">Improve your health</li>
                            <li class="df-list-item">Learn how to practice fasting correctly</li>
                        </ul>
                    </div>
                    <div class="df-row">
                        <p class="df-page-benefitcheckpoints-text">Find out what works for you with this <span class="df-bold">60-sec quiz</span> approved by our experts and get your personal revolutionary fasting assistant</p>
                    </div>
                    <div class="df-row df-direction-column">
                        <p class="df-select-gender-text">Select your gender:</p>
                        <div class="df-select-gender">
                            <button type="button" class="df-button df-select-gender-button df-male">MALE @svg('arrowRight.svg')</button>
                            <button type="button" class="df-button df-select-gender-button df-female">FEMALE @svg('arrowRight.svg')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
