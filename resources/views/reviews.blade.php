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

            <section class="df-section-top-block">
                <div class="df-container">
                    <div class="df-two-column-1">
                        <div class="df-two-column-1-left">
                            <p class="df-raiting">
                                <span class="df-raiting-item"></span>
                                <span class="df-raiting-item"></span>
                                <span class="df-raiting-item"></span>
                                <span class="df-raiting-item"></span>
                                <span class="df-raiting-item"></span>
                                <span class="df-text">(10,000+ reviews)</span>
                            </p>
                            <h2 class="df-section-title">Hey. You make us smile, too!</h2>
                            <p class="df-text">More than 10,000 happy clients all over the world, <span class="df-text-red df-bold">read all stories bellow</span></p>
                        
                        </div>
                        <div class="df-two-column-1-right">
                            <div class="df-slogan-message">
                                <p>Now I recommend it to anyone who ever wanted to try fasting. It keeps you on track and gives awesome meal suggestions.</>
                                <span class="df-slogan-message-user">Taylor M.</span>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </section>

            <div class="df-container">
                <div class="df-devider"></div>
            </div>

            <section class="df-section-counts">
                <div class="df-container">
                    <div class="df-counts-list">
                        <div class="df-counts-list-item">
                            <div class="df-counts-list-item-icon">
                                @svg('play-fill.svg')
                            </div>
                            <div class="df-counts-list-item-number">200+</div>
                            <div class="df-counts-list-item-text">Video reviews</div>
                        </div>

                        <div class="df-counts-list-item">
                            <div class="df-counts-list-item-icon">
                                @svg('user-star.svg')
                            </div>
                            <div class="df-counts-list-item-number">10,000+</div>
                            <div class="df-counts-list-item-text">Happy clients</div>
                        </div>

                        <div class="df-counts-list-item">
                            <div class="df-counts-list-item-icon">
                                @svg('chat-heart-line.svg')
                            </div>
                            <div class="df-counts-list-item-number">300+</div>
                            <div class="df-counts-list-item-text">Success stories</div>
                        </div>
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

            <section class="df-section-video-reviews">
                <div class="df-container">
                    <h3 class="df-section-title">Video reviews</h3>
                </div>
                <div class="df-container">
                    <div class="df-two-column-1">
                        <div class="df-two-column-1-left df-video-preview-big">
                            <div class="df-preview-image">
                                <img src="/images/video-preview-big.png" alt="" />
                                <span class="df-playvideo"></span>
                            </div>
                            <p class="df-preview-usernick">@mariu_healthyeats</p>
                            <p class="df-preview-username">Mariu Cabral</p>
                            <p class="df-preview-usertext">Mariu Cabral is a nutrition student, blogger, and a wellness enthusiast. She’s been doing intermittent fasting for a while, but struggled to keep track of her diet and fasting times.</p>
                            <a href="" class="df-button df-storylink">Read story</a>
                        </div>
                        <div class="df-two-column-1-right df-video-preview-list">
                            <div class="df-video-preview-list-item">
                                <div class="df-preview-small-image">
                                    <img src="/images/video-preview-small1.png" alt="" />
                                    <span class="df-playvideo"></span>
                                </div>
                                <div class="df-preview-small-additional">
                                    <p class="df-preview-usernick">@gymjules_</p>
                                    <p class="df-preview-username">Jules</p>
                                    <p class="df-preview-usertext">As a weight loss coach, Jules strongly believes in the power of professional guidance...</p>
                                    <a href="" class="df-preview-storylink">Read story</a>
                                </div>
                            </div>
                            <div class="df-video-preview-list-item">
                                <div class="df-preview-small-image">
                                    <img src="/images/video-preview-small2.png" alt="" />
                                    <span class="df-playvideo"></span>
                                </div>
                                <div class="df-preview-small-additional">
                                    <p class="df-preview-usernick">@em_keen</p>
                                    <p class="df-preview-username">Em Keen</p>
                                    <p class="df-preview-usertext">Em Keen is a yoga and meditation teacher as well as a “big advocate for intermittent fasting”...</p>
                                    <a href="" class="df-preview-storylink">Read story</a>
                                </div>
                            </div>
                            <div class="df-video-preview-list-item">
                                <div class="df-preview-small-image">
                                    <img src="/images/video-preview-small3.png" alt="" />
                                    <span class="df-playvideo"></span>
                                </div>
                                <div class="df-preview-small-additional">
                                    <p class="df-preview-usernick">@joseamendieta</p>
                                    <p class="df-preview-username">Josea Mendieta</p>
                                    <p class="df-preview-usertext">Jose Mendieta is a medical student, bodybuilder and coach...</p>
                                    <a href="" class="df-preview-storylink">Read story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="df-section-reviews">
                <div class="df-container">
                    <h2 class="df-section-title">Reviews</h2>
                </div>

                <div class="df-container">
                    <div class="df-reviews-list">
                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Amy Gibson Duncan</span> Glendora Hernandez I sent you a pm. I will be happy to get you some samples ASAP. This company is amazing. The product is wonderful.</p>
                                    <span class="df-like-count">
                                        @svg('like-love.svg')
                                        @svg('like-like.svg')
                                        20
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">3d</span>
                                </div>
                            </div>
                        </div>

                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Amy Gibson Duncan</span> Glendora Hernandez I sent you a pm. I will be happy to get you some samples ASAP. This company is amazing. The product is wonderful.</p>
                                    <span class="df-like-count">
                                        @svg('like-love.svg')
                                        @svg('like-like.svg')
                                        20
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">7d</span>
                                </div>
                            </div>
                        </div>

                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user2-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Lukas Varanauskas</span> I use this app to track my fasting times, also meal and workout recommendations are great</p>
                                    <span class="df-like-count">
                                        @svg('like-sweet.svg')
                                        @svg('like-love.svg')
                                        46
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">3d</span>
                                </div>
                            </div>
                        </div>

                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user3-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Michele Earl Waldman</span> I just signed up to try it for 3 months. The app is cool. I am a vegan and am impressed with the meal suggestions. I look forward to trying this.</p>
                                    <span class="df-like-count">
                                        @svg('like-sweet.svg')
                                        @svg('like-like.svg')
                                        32
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">5d</span>
                                </div>
                            </div>
                        </div>
                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Amy Gibson Duncan</span> Glendora Hernandez I sent you a pm. I will be happy to get you some samples ASAP. This company is amazing. The product is wonderful.</p>
                                    <span class="df-like-count">
                                        @svg('like-love.svg')
                                        @svg('like-like.svg')
                                        20
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">3d</span>
                                </div>
                            </div>
                        </div>

                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Amy Gibson Duncan</span> Glendora Hernandez I sent you a pm. I will be happy to get you some samples ASAP. This company is amazing. The product is wonderful.</p>
                                    <span class="df-like-count">
                                        @svg('like-love.svg')
                                        @svg('like-like.svg')
                                        20
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">7d</span>
                                </div>
                            </div>
                        </div>

                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user2-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Lukas Varanauskas</span> I use this app to track my fasting times, also meal and workout recommendations are great</p>
                                    <span class="df-like-count">
                                        @svg('like-sweet.svg')
                                        @svg('like-love.svg')
                                        46
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">3d</span>
                                </div>
                            </div>
                        </div>

                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user3-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Michele Earl Waldman</span> I just signed up to try it for 3 months. The app is cool. I am a vegan and am impressed with the meal suggestions. I look forward to trying this.</p>
                                    <span class="df-like-count">
                                        @svg('like-sweet.svg')
                                        @svg('like-like.svg')
                                        32
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">5d</span>
                                </div>
                            </div>
                        </div>
                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Amy Gibson Duncan</span> Glendora Hernandez I sent you a pm. I will be happy to get you some samples ASAP. This company is amazing. The product is wonderful.</p>
                                    <span class="df-like-count">
                                        @svg('like-love.svg')
                                        @svg('like-like.svg')
                                        20
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">3d</span>
                                </div>
                            </div>
                        </div>

                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Amy Gibson Duncan</span> Glendora Hernandez I sent you a pm. I will be happy to get you some samples ASAP. This company is amazing. The product is wonderful.</p>
                                    <span class="df-like-count">
                                        @svg('like-love.svg')
                                        @svg('like-like.svg')
                                        20
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">7d</span>
                                </div>
                            </div>
                        </div>

                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user2-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Lukas Varanauskas</span> I use this app to track my fasting times, also meal and workout recommendations are great</p>
                                    <span class="df-like-count">
                                        @svg('like-sweet.svg')
                                        @svg('like-love.svg')
                                        46
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">3d</span>
                                </div>
                            </div>
                        </div>

                        <div class="df-reviews-list-item">
                            <div class="df-user-photo">
                                <img src="/images/user3-review.png" alt="" />
                            </div>
                            <div class="df-user-additional">
                                <div class="df-user-message">
                                    <p><span class="df-user-name">Michele Earl Waldman</span> I just signed up to try it for 3 months. The app is cool. I am a vegan and am impressed with the meal suggestions. I look forward to trying this.</p>
                                    <span class="df-like-count">
                                        @svg('like-sweet.svg')
                                        @svg('like-like.svg')
                                        32
                                    </span>
                                </div>
                                <div class="df-additional-act">
                                    <span class="df-additional-act-item df-love active">Love</span>
                                    <span class="df-additional-act-item df-reply">Reply</span>
                                    <span class="df-additional-act-item df-message">Message</span>
                                    <span class="df-additional-act-item df-dayago">5d</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="df-container">
                    <button type="button" class="df-button df-read-more-button">Read MORE</button>
                </div>

                <div class="df-container">
                    <div class="df-join-facebook">
                        <div class="df-logo">
                            @svg('logoWhite.svg')
                        </div>
                        <h3 class="df-join-facebook-title">Join our Facebook community</h3>
                        <p class="df-join-facebook-text">This group is for everyone who wants to dive deeper into Intermittent Fasting.</p>
                        <button type="button" class="df-button df-join-facebook-button">JOIN</button>
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

            <section class="df-section-start-journey df-second-version">
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

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            $(function(){

                function truncate(str, n){
                    return (str.length > n) ? str.substr(0, n-1) + '&hellip;' : str;
                };

                if (window.matchMedia('(max-width: 767px)').matches) {
                    $('.df-video-preview-list-item').each(function () {
                    
                        let str = $(this).find($('.df-preview-usertext')).text();
                        const n = 28;
                        let newText = (str.length > n) ? str.substr(0, n-1) + '...' : str;

                        $(this).find($('.df-preview-usertext')).text(newText)
                    })
                }
            });
        </script>
    </body>
</html>
