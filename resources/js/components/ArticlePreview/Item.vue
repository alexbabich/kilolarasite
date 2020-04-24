<template>
    <div
        :class="['container df-preview-item', this.className]"
    >
        <div class="df-item-image">
            <img :src="`/images/${this.image}.png`" alt=""/>
            <div class="df-quiz-mini" v-show="showQuiz">
                <h2 class="df-title-block">Start your fasting journey today</h2>
                <p class="df-text-description" v-html="'Find out what works for you with this <b>60-sec quiz</b> approved by our experts and get your personal revolutionary fasting assistant'"></p>
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
        <div class="df-item-text-wrapper">
            <p class="df-item-title" v-html="this.title" v-if="this.title"></p>
            <div class="df-item-text" v-html="this.description" v-if="this.description"></div>
        </div>
    </div>
</template>

<script>
export default {
    components: {
        'df-button': () => import(
            '@/js/molecules/DFButton'
        )
    },
    name: "Item",
    props: {
        title: {
            type: String,
            default: ""
        },
        description: {
            type: String,
            default: ""
        },
        image: {
            type: String,
            default: ""
        },
        className: {
            type: String,
            default: ""
        },
        showQuiz: {
            type: Boolean,
            default: false
        }
    }
};
</script>