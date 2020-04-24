<template>
    <div class="df-free-wrapper">
        <div class="container">
            <div class="df-block-content">
                <p class="df-title">80% off with the 6-month deal</p>
                <div class="df-text">
                    + get Keto meal plan FREE
                </div>
                <df-button
                    :title="'START QUIZ'"
                    :colorstyle="'red'"
                    @click="startQuiz('start quiz')"
                />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Freeblock",
    components: {
        'df-button': () => import(
            '@/js/molecules/DFButton'
        )
    },
    methods: {
        startQuiz(data) {
            console.log(data)
        }
    }
};
</script>