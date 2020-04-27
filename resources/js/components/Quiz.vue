<template>
    <div
        :class="['df-quiz', returnClass(this.backgroundcolor)]"
    >
        <div class="container d-flex">
            <div class="df-left-side">
                <h2 class="df-title-block">Start your fasting journey today</h2>
                <p class="df-text-description">
                    <b>With your personal fasting assistant</b>
                </p>
                <p class="df-text-description" v-html="'Find out what works for you with this 60-sec quiz approved by our experts and get your personal revolutionary fasting assistant'"></p>
                <div class="df-quiz-select-gender">
                    <p class="df-text-description"><b>Select your gender:</b></p>
                    <df-button
                        :title="'MALE'"
                        :colorstyle="'blue'"
                        @click="startQuiz('start quiz')"
                    />
                    <df-button
                        :title="'FEMALE'"
                        :colorstyle="'red'"
                        @click="startQuiz('start quiz')"
                    />
                </div>
            </div>
        </div>
        <div class="df-quiz-block-img" :style="this.image | bgImage"></div>
        <img :src="this.image | srcImage" alt="quiz image" class="df-quiz-img" />
    </div>
</template>

<script>

export default {
    name: "Quiz",
    components: {
        'df-button': () => import(
            '@/js/molecules/DFButton'
        )
    },
    props: {
        backgroundcolor: {
            type: String,
            default: ""
        },
        image: {
            type: String,
            default: ""
        }
    },
    methods: {
        startQuiz(data) {
            console.log(data)
        },
        returnClass: function (value) {
            switch (value) {
            case 'grey':
                return 'df-gray-bg';
                break;
            case 'white':
                return 'df-white-bg';
                break;
            default:
                return '';
            }
        }
    },
    filters: {
        bgImage: function (value) {
            return 'background-image: url(/images/'+ value +'.png);';
        },
        srcImage: function (value) {
            return '../images/'+ value +'.png';
        }
    }
};
</script>