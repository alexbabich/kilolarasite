<template>
    <div :class="['df-quiz df-join', returnClass(this.backgroundcolor)]">
        <div class="container d-flex">
            <div class="df-left-side">
                <h2 class="df-title-block" v-html="'Join DoFasting community on Facebook'"></h2>
                <p class="df-text-description" v-html="'Read inspiring success stories, get useful advice, share your own thoughts and celebrate achievements by joining the DoFasting community on Facebook!'"></p>
                <df-button
                    :title="'JOIN FACEBOOK GROUP'"
                    :colorstyle="'blue'"
                    @click="startQuiz('start quiz')"
                    :className="'fb-button'"
                    :svgIcon="'fb-logo'"
                />
            </div>
        </div>
        <div class="df-join-block-img" :style="this.image | bgImage"></div>
        <img :src="this.image | srcImage" alt="join image" class="df-join-img" />
    </div>
</template>

<script>

export default {
    name: "JoinBlock",
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