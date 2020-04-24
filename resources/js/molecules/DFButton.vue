<template>
    <button
        :class="['df-button', this.colorstyle]"
        @click="clickButton"
    >
        {{ this.title }}
    </button>
</template>

<script>
export default {
    name: "DFButton",
    props: {
        title: {
            type: String,
            default: ""
        },
        colorstyle: {
            type: String,
            default: ""
        }
    },
    methods: {
        clickButton() {
            this.$emit("click");
        }
    }
};
</script>