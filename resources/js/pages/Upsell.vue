<template>
    <div class="df-page-upsell">
        <div class="container">
            <!-- class df-pass-first-step and df-pass-second-step is showing progress-->
            <div class="row justify-content-between df-steps-nav df-pass-first-step">
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

        <benefits
            :title="'6  Key Benefits That Will Enhance Your Health'"
            :dataArray="BenefitsItems"
        />
        <div class="container">
            <div class="row justify-content-center align-items-center df-mb-40 df-product-list">
                <div class="df-product-wrapper df-most-popular">
                    <div class="df-most-popular-title">
                        <p>
                            <span>
                                <svg-vue icon="star" />
                            </span>
                            MOST POPULAR
                        </p>
                    </div>
                    <div class="df-product-item">
                        <p class="df-poduct-title">6 months</p>
                        <p class="df-safe-mony">SAVE $189.95</p>
                        <div class="df-product-price">
                            <p>$<b>29.16</b> / box</p>
                        </div>
                        <div class="df-product-info">
                            <p><span>12 boxes</span><span>180 servings</span></p>
                        </div>
                        <button class="df-button df-buy-button">BUY NOW</button>
                    </div>
                </div>
                <div class="df-product-wrapper">
                    <div class="df-product-item">
                        <p class="df-poduct-title">3 months </p>
                        <p class="df-safe-mony">SAVE $69.97</p>
                        <div class="df-product-price">
                            <p>$<b>33.33</b> / box</p>
                        </div>
                        <div class="df-product-info">
                            <p><span>6 boxes</span><span>90 servings</span></p>
                        </div>
                        <button class="df-button df-buy-button">BUY NOW</button>
                    </div>
                </div>
                <div class="df-product-wrapper">
                    <div class="df-product-item">
                        <p class="df-poduct-title">1 months</p>
                        <div class="df-product-price">
                            <p>$<b>44.99</b> / box</p>
                        </div>
                        <div class="df-product-info">
                            <p><span>2 boxes</span><span>30 servings</span></p>
                        </div>
                        <button class="df-button df-buy-button">BUY NOW</button>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center df-mb-30">
                <a href="" class="df-unsbscribe">No, thank you, I’m not interested in this offer</a>
            </div>
        </div>
    </div>
</template>

<script>
import Benefits from "@/js/components/Benefits";
import ArticlePreview from "@/js/components/ArticlePreview";

export default {
    name: "Upsell",
    components: {
        Benefits,
        ArticlePreview
    },
    data() {
        return {
            BenefitsItems: [
                {
                    title: "Decreased Appetite", 
                    description: "Maximum effect felt 2-4 hours after drinking the supplement. Use it in the morning or after your last meal to effectively crush your hunger pangs!",
                    logo: "stock"
                },
                {
                    title: "Lower Blood Glucose Levels",
                    description: "Combining BHB Ketones Boost with intermittent fasting works as a powerful method in improving your blood glucose levels.",
                    logo: "blood"
                },
                {
                    title: "Increased Fat-Burning",
                    description: "Ketone bodies can be produced with the help of intermittent fasting or a high fat, low carb diet. They help you to reach the fat-burning state of ketosis and start losing weight. BHB salts make that transition easier and can double the fat-burning effect.",
                    logo: "fire2"
                },
                {
                    title: "An Amazing Boost in Mood and Energy",
                    description: "When fasting, you may experience slight mood swings, fatigue, and irritability caused by hunger. BHB Ketone Boost supplies fast-acting fuel for the brain and is capable of supplying it with roughly 70% of its energy needs.",
                    logo: "rocket"
                },
                {
                    title: "Increased Metabolism for Consistent Weight Loss",
                    description: "Your body will increase its nutrient absorption, start burning energy from food faster and result in consistent, speedier weight loss.",
                    logo: "restore"
                },
                {
                    title: "Improves Athletic Performance",
                    description: "Research shows that BHB Ketones have the ability to increase your energy levels, resulting in enhanced endurance and improved athletic performance.",
                    logo: "runner"
                }
            ],
            ItemList: [
                {
                    title: "Daily motivation boosts",
                    description: "<p>Intermittent fasting takes time to get used to. The first few days, even weeks may seem a bit more challenging than you thought. However, those are the days that actually determine whether you will reach your goal or not. You will either build a sustainable foundation for further fasting, form new habits, or lose interest.</p><p>To guarantee your success, we want to be there for you through the best and the toughest days of fasting with motivational boosts and friendly reminders.</p>",
                    image: "dailyMotivation",
                    svg: "dailyMotivation"
                },
                {
                    title: "Effective training routines",
                    description: "<p>Set up your workout schedule, choose a fitness level, and tone up your body without spending additional money on gyms and equipment.</p><p>DoFasting exercise suggestions feature professionally visualized training routines – warmups, workouts and stretching guides.</p><p>Only 10-30 minutes a day will result in improved posture, lean muscle gain, reduced weight, and improved overall body health.</p>",
                    image: "effectiveTraining",
                    svg: "effectiveTraining"
                },
                {
                    title: "Tips & Guidance",
                    description: "<p>Become a real fasting expert! Our new Articles section gives you direct access to freshly-published articles, keeps you up-to-date with scientific research, and helps you to practice intermittent fasting the educated way.</p>",
                    image: "tipsGuidance",
                    svg: "tipsGuidance"
                },
                {
                    title: "Progress Tracker & Calendar",
                    description: "<p>Start tracking your weight loss progress from the very first day of fasting! Your DoFasting profile shows your starting, current, and target weight to keep you motivated and help to achieve desired results.</p>",
                    image: "progressTracker",
                    svg: "progressTracker"
                },
                {
                    title: "Meal recommendations",
                    description: "<p>Access the whole DoFasting meal database at once! Select and save your favorite meals, keep up with your recommended calorie intake and make your fasting diet even more effective. All recipes are chosen by our professional nutritionists and can be adjusted according to your allergies and dietary preferences.</p>",
                    image: "mealRecommendations",
                    svg: "mealRecommendations"
                },
                {
                    title: "Challenge mode",
                    description: "<p>Up for a challenge? Curious to find out how your body could change in 7, 14, or 28 days? The new challenge mode gives you a set daily agenda with fasting hours and lots of useful advice on healthy nutrition, habit formation, and exercise. Join challenges, test your limits, and move on to “Advanced mode” whenever you’re ready!</p>",
                    image: "challengeMode",
                    svg: "challengeMode"
                }
            ]
        }
    }
};
</script>