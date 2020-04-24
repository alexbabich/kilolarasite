<template>
    <div 
        :class="this.backgroundcolor | returnClass"
    >
        <div class="container">
            <div class="row df-block-wrapper">
                <h3 class="df-block-title text-center" v-if="this.title">{{ this.title }}</h3>
                <div class="df-block-text" v-html="this.text" v-if="this.text"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SingleText",
    props: {
        title: {
            type: String,
            default: ""
        },
        text: {
            type: String,
            default: ""
        },
        backgroundcolor: {
            type: String,
            default: ""
        }
    },
    filters: {
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
    }
};
</script>