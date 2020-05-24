<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>quizlanding</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Lato:300,400,700,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="df-page-quizlanding">
            <div class="df-container df-two-column-2-3 df-column-reverse">
                <div class="df-two-column-2-3-left"></div>
                <div class="df-two-column-2-3-right df-direction-column">
                    <div class="df-row">
                        <div class="df-logo-header">
                            @svg('logo.svg')
                        </div>
                    </div>
                    <div class="df-row df-direction-column">
                        <p class="df-page-quizlanding-subtitle">AMERICA’S #1 FASTING BRAND</p>
                        <h1 class="df-page-quizlanding-title">Lose weight faster & healthier</h1>
                    </div>
                    <div class="df-row">
                        <p class="df-page-quizlanding-text">Find out if the revolutionary Essential Fiber Complex works for you</p>
                    </div>
                    <div class="df-row df-direction-column">
                        <p class="df-select-gender-text">Select your gender:</p>
                        <div class="df-select-gender">
                            <button type="button" class="df-button df-select-gender-button df-male">MALE</button>
                            <button type="button" class="df-button df-select-gender-button df-female">FEMALE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
