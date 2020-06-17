<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>summaryfemale</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700|Lato:300,400,700,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="df-page-summaryfemale">

            <section class="df-section-header">
                <div class="df-container df-two-column-2-3 df-column-reverse">
                    <div class="df-logo-header">
                        @svg('logo.svg')
                    </div>
                    <div class="df-two-column-2-3-left df-direction-column">
                        <img class="df-desktop" src="/images/header-image.png" alt="" />
                        <img class="df-mobile" src="/images/header-image-mobile.png" alt="" />
                        <div class="df-header-contents">
                            <div class="df-header-contents-item df-header-yes">
                                <p class="df-header-contents-item-title">Is fasting safe for you?</p>
                                <div class="df-devider"></div>
                                <div class="df-item-content">
                                    <p class="df-yes-text">YES!</p>
                                </div>
                            </div>
                            <div class="df-header-contents-item df-header-week">
                                @svg('week.svg')
                                <div class="df-item-content">
                                    <p><b>-5</b> kg</p>
                                    <span>After first week</span>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="df-button df-page-summaryfemale-button df-mobile">Start now</button>
                    </div>
                    <div class="df-two-column-2-3-right df-direction-column">
                        <div class="df-row df-direction-column">
                            <h1 class="df-page-summaryfemale-title">Based on your answers, you can <span class="df-text-blue">lose 8lbs</span> in 1 month</h1>
                            <p class="df-page-summaryfemale-text">We’ve evaluated your answers and prepared a summary out of 10.243 people similar to you</p>
                            <button type="button" class="df-button df-page-summaryfemale-button df-desktop">Start now</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="df-section-summary">
                <div class="df-container">
                    <p class="df-section-summary-title">Personal summary</p>
                </div>
                <div class="df-summary-list">
                    <div class="df-summary-item">
                        <p class="df-summary-item-title">Your BMI</p>
                        <div class="df-devider"></div>
                        <div class="df-summary-item-content">
                            <p class="df-summary-item-text">55.56</p>
                            <div class="df-desktop">
                                <!-- use bmi2.svg for other condition -->
                                @svg('bmi.svg')
                            </div>
                            <div class="df-mobile">
                                <!-- use bmi2-mobile.svg for other condition -->
                                @svg('bmi-mobile.svg')
                            </div>
                        </div>
                    </div>
                    <div class="df-summary-item">
                        <p class="df-summary-item-title">Daily calorie recommendations</p>
                        <div class="df-devider"></div>
                        <div class="df-summary-item-content df-summary-loss-list">
                            <div class="df-summary-loss-item">
                                <p>Optimal weight loss</p>
                                @svg('lossoptional.svg')
                            </div>
                            <div class="df-summary-loss-item">
                                <p>Maximum weight loss</p>
                                @svg('lossmaximum.svg')
                            </div>
                        </div>
                    </div>
                    <div class="df-summary-item">
                        <p class="df-summary-item-title">Your water balance</p>
                        <div class="df-devider"></div>
                        <div class="df-summary-item-content df-summary-activity">
                            @svg('blob.svg')
                            <div class="df-summary-activity-text">
                                <span>Your daily minimum is</span>
                                <p>1.7 L</p>
                            </div>
                        </div>
                    </div>
                    <div class="df-summary-item">
                        <p class="df-summary-item-title">Daily activity recommendations</p>
                        <div class="df-devider"></div>
                        <div class="df-summary-item-content df-summary-activity-daily">
                            <div class="df-summary-activity">
                                @svg('steps.svg')
                                <div class="df-summary-activity-text">
                                    <span>Walking</span>
                                    <p>1 h 12 min</p>
                                </div>
                            </div>
                            <div class="df-summary-activity">
                                @svg('gym.svg')
                                <div class="df-summary-activity-text">
                                    <span>Chosen sport activity</span>
                                    <p>20 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="df-section-bodychange">
                <div class="df-bodychange">
                    <p class="df-bodychange-title">Body change estimations</p>
                    <div class="df-devider"></div>
                    <div class="df-two-column-1">
                        <div class="df-two-column-1-left">
                            <div class="df-bodychange-vs">
                                <div class="df-bodychange-vs-before">
                                    <p class="df-bodychange-vs-title">Before</p>
                                    <img src="/images/bodybefore.png" alt="" />
                                </div>
                                <div class="df-bodychange-vs-middle">
                                    <ul class="df-bodychange-vs-list">
                                        <li class="df-bodychange-vs-item">Upper body -11%</li>
                                        <li class="df-bodychange-vs-item">Waist -8%</li>
                                        <li class="df-bodychange-vs-item">Thighs -20%</li>
                                        <li class="df-bodychange-vs-item">Legs -16%</li>
                                    </ul>
                                </div>
                                <div class="df-bodychange-vs-after">
                                    <p class="df-bodychange-vs-title">After</p>
                                    <img src="/images/bodyafter.png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="df-two-column-1-right df-direction-column">
                            <p class="df-bodychange-secondtitle">People with similar profiles to yours</p>
                            <p class="df-bodychange-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et varius mi, nec dignissim mauris. Cras et rutrum nibh. Sed sagittis nulla sapien. Proin est lacus, feugiat et lacus non, aliquet malesuada orci. Integer viverra augue eget dui tincidunt tincidunt. Quisque eu pellentesque tellus.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="df-section-appdofasting">
                <div class="df-appdofasting">
                    <p class="df-appdofasting-title">DoFasting app will help you</p>
                    <ul class="df-appdofasting-list">
                        <li class="df-appdofasting-item">Lose unwanted weight</li>
                        <li class="df-appdofasting-item">Learn how to avoid food cravings</li>
                        <li class="df-appdofasting-item">Form new eating patterns</li>
                    </ul>
                    <button type="button" class="df-button df-appdofasting-button ">Start now</button>
                </div>
            </section>
            
            <section class="df-section-intermittent">
                <div class="df-container">
                    <p class="df-section-intermittent-title">Intermittent fasting was covered in</p>
                </div>
                <div class="df-container">
                    <div class="df-intermittent-list">
                        <div class="df-intermittent-item">
                            @svg('healthline-logo.svg')
                        </div>
                        <div class="df-intermittent-item">
                            @svg('businessinsiderlogo.svg')
                        </div>
                        <div class="df-intermittent-item">
                            @svg('TheNewYorkTimeslogo.svg')
                        </div>    
                    </div>
                </div>
            </section>

            <section class="df-section-promise">
                <div class="df-container">
                    <p class="df-section-promise-title">Our promise</p>
                </div>
                <div class="df-container">
                    <p class="df-section-promise-text">We believe in a balanced way to lose weight and keep the weight off. We know that most of the diets or weight loss programs that you have tried in the past don’t work - they are just too hard to follow. Enormous food cravings, friends that visit you with a bottle of wine, that freshly baked cheesecake... Everything affects your journey and if your diet is not easy-to-follow, you are not going to achieve your results.</p>

                    <p class="df-section-promise-text">Don’t blame yourself. It’s really hard. That’s why our nutritionists and personal coaches work around the clock to prepare the most effective plans you love. We want to make sure that it becomes a part of your life. We don’t change habits, we help you to improve them.

                    <p class="df-section-promise-text">Try it out and we guarantee you will be satisfied.

                    <p class="df-section-promise-textsignature">
                        <span>Head of Nutrition,<br/>Christine Ellis</span>
                        @svg('signatureSimple.svg')
                    </p>
                </div>
                <div class="df-container">
                    <button type="button" class="df-button df-section-promise-button df-desktop">Get it now</button>
                    <button type="button" class="df-button df-section-promise-button df-mobile">Start now</button>
                </div>
            </section>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            $(function(){

            });
        </script>
    </body>
</html>
