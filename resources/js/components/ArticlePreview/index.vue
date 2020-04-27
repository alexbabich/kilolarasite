<template>
    <div
        :class="this.backgroundcolor | returnClass"
    >
        <div v-if="this.dataArray">
            <item 
                v-for="(item, index) in dataArray" 
                :key="index"
                :title="item.title"
                :description="item.description"
                :image="item.image"
                :svg="item.svg"
                :showQuiz="item.showQuiz"
                :className="direction"
            />
        </div>
    </div>
</template>

<script>
import Item from "./Item";
export default {
    name: "ArticlePreview",
    components: {
        Item
    },
    props: {
        dataArray: {
            type: Array,
            default: () => []
        },
        direction: {
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

<style lang="scss" scoped>

</style>
