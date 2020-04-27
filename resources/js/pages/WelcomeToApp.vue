<template>
    <div class="df-page-welcomeapp">
        <firstblock
            :background="'welcomeApp'"
            :title="'Welcome to your app!'"
            :text="'<p>To make your experience easy and smooth, we’ve put together a short app guide that will help you navigate through its features.</p><h4>Friendly reminder:</h4><p>In case you haven’t completed the download process, follow these five, easy steps:</p><ul><li><b>1.</b> Download the app from Apple Store or Google Play to your mobile device</li><li><b>2.</b> Open the app</li><li><b>3.</b> Hit the “login” button</li><li><b>4.</b> Enter the email you used when purchasing the app and enter the password you created after successfully purchasing the app.</li><li><b>5.</b> Login and start using your new app!</li></ul>'"
            :isShowButton="false"
        />
        <article-preview
            :backgroundcolor="'grey'"
            :dataArray="ItemList"
            :direction="'df-reverse-mobile'"
        />
        <join-block
            :backgroundcolor="'white'"
            :image="'communityBg'"
        />
    </div>
</template>

<script>
import Firstblock from "@/js/components/Firstblock";
import ArticlePreview from "@/js/components/ArticlePreview";
import JoinBlock from "@/js/components/JoinBlock";

export default {
    name: "WelcomeToApp",
    components: {
        Firstblock,
        ArticlePreview,
        JoinBlock
    },
    data() {
        return {
            ItemList: [
                {
                    title: "Fasting assistant",
                    description: "<p><b>This is your home screen.</b> It features your fasting timer, shows the number of fasts you completed, your current weight, and calculates how much more you need to lose until you reach your target weight. You can always click the pause button to stop your fasting session or click the “adjust” icon to choose a fasting method that fits perfectly into your lifestyle.</p>",
                    image: "fastingAssistant"
                },
                {
                    title: "Fasting types",
                    description: "<p>Feel free to choose from various fasting types: from beginner-friendly fasts to something more advanced – 16-hour fasts or 20:4 (the warrior diet).</p>",
                    image: "fastingTypes"
                },
                {
                    title: "Challenge mode",
                    description: "<p>Choose from 7-day, 14-day, and 28-day challenges or switch to ‘Advanced’ mode to dictate your own fasting rules! The new challenge mode gives you a set daily agenda with fasting hours and lots of useful advice on healthy nutrition, habit formation, and exercise.</p>",
                    image: "challengeMode2"
                },
                {
                    title: "Meal recommendations",
                    description: "<p>Easily set up your dietary preferences, allergies and explore delicious meal recommendations. Your personalized meal plan features a recommended calorie intake bar that shows how many calories you should consume to meet your body’s needs. Choose what to eat for breakfast, snacks, dinner or explore the whole database of delicious meals at once!</p>",
                    image: "mealRecommendations2"
                },
                {
                    title: "Exercise suggestions",
                    description: "<p>Click on the “workouts” icon to select your fitness level and preferred workout days. Here you will professionally visualized 10-30-minute training routines – warmups, workouts and stretching guides.</p>",
                    image: "exerciseSuggestions"
                },
                {
                    title: "Tips & guidance",
                    description: "<p>Our freshly-published articles will help you to stay up-to-date with scientific research and teach how to practice intermittent fasting the educated way. From proper hydration to problems you may face as a beginner – we’re aiming to jump ahead and answer every question you may have.</p>",
                    image: "tipsGuidance2"
                },
                {
                    title: "Progress tracker & calendar",
                    description: "<p>Start tracking your weight loss and see your progress visualized on the fasting calendar. This window features your starting, current, and target weight. It’s also where you can change your app settings and details by clicking the “settings” icon at the right top corner.</p>",
                    image: "proressTrackerCalendar"
                },
            ]
        }
    }
};
</script>