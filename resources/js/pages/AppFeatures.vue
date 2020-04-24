<template>
    <div>
        <firstblock
            :background="'appFeatures'"
            :title="'App Features'"
            :text="'<p>DoFasting is the new, easier 3-in-1 solution for weight loss. Choose a fasting method that fits best into your lifestyle, learn to prepare healthy meals, and implement simple workouts into your daily routine.</p><p>Instead of strict dieting, we offer healthy foods that actually taste amazing. Instead of exhausting fitness routines, we’re giving you workouts that you can complete every day. We believe in sustainable results and tools that help you achieve them without sacrificing your lifestyle.</p>'"
            :isShowButton="false"
        />
        <article-preview
            :backgroundcolor="'grey'"
            :dataArray="ItemList"
        />
        <quiz
            :backgroundcolor="'white'"
        />
    </div>
</template>

<script>
import Firstblock from "@/js/components/Firstblock";
import ArticlePreview from "@/js/components/ArticlePreview";
import Quiz from "@/js/components/Quiz";

export default {
    name: "AppFeatures",
    components: {
        Firstblock,
        ArticlePreview,
        Quiz
    },
    data() {
        return {
            ItemList: [
                {
                    title: "Daily motivation boosts",
                    description: "<p>Intermittent fasting takes time to get used to. The first few days, even weeks may seem a bit more challenging than you thought. However, those are the days that actually determine whether you will reach your goal or not. You will either build a sustainable foundation for further fasting, form new habits, or lose interest.</p><p>To guarantee your success, we want to be there for you through the best and the toughest days of fasting with motivational boosts and friendly reminders.</p>",
                    image: "dailyMotivation"
                },
                {
                    title: "Effective training routines",
                    description: "<p>Set up your workout schedule, choose a fitness level, and tone up your body without spending additional money on gyms and equipment.</p><p>DoFasting exercise suggestions feature professionally visualized training routines – warmups, workouts and stretching guides.</p><p>Only 10-30 minutes a day will result in improved posture, lean muscle gain, reduced weight, and improved overall body health.</p>",
                    image: "effectiveTraining"
                },
                {
                    title: "Tips & Guidance",
                    description: "<p>Become a real fasting expert! Our new Articles section gives you direct access to freshly-published articles, keeps you up-to-date with scientific research, and helps you to practice intermittent fasting the educated way.</p>",
                    image: "tipsGuidance"
                },
                {
                    title: "Progress Tracker & Calendar",
                    description: "<p>Start tracking your weight loss progress from the very first day of fasting! Your DoFasting profile shows your starting, current, and target weight to keep you motivated and help to achieve desired results.</p>",
                    image: "progressTracker"
                },
                {
                    title: "Meal recommendations",
                    description: "<p>Access the whole DoFasting meal database at once! Select and save your favorite meals, keep up with your recommended calorie intake and make your fasting diet even more effective. All recipes are chosen by our professional nutritionists and can be adjusted according to your allergies and dietary preferences.</p>",
                    image: "mealRecommendations"
                },
                {
                    title: "Challenge mode",
                    description: "<p>Up for a challenge? Curious to find out how your body could change in 7, 14, or 28 days? The new challenge mode gives you a set daily agenda with fasting hours and lots of useful advice on healthy nutrition, habit formation, and exercise. Join challenges, test your limits, and move on to “Advanced mode” whenever you’re ready!</p>",
                    image: "challengeMode"
                }
            ]
        }
    }
};
</script>