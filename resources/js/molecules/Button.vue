<template>
    <div :class="[ 'button', ('button-type--' + type), ('button-action--' + action), (disabled ? 'button--disabled' : '') ]">

        <!-- Link -->
        <a v-on="$listeners" :href="disabled ? null : href" v-if="linkButton" :target="target">
            <slot></slot>
        </a>

        <!-- Submit -->
        <button v-on="$listeners" type="submit" :disabled="disabled" v-if="submitButton">
            <slot></slot>
        </button>

        <!-- Simple button (null) -->
        <button v-on="$listeners" v-if="simpleButton && innerHtml" v-html="innerHtml" @click="handleAnchorClick"
                :disabled="disabled"></button>
        <button v-on="$listeners" v-if="simpleButton && !innerHtml" @click="handleAnchorClick" :disabled="disabled">
            <slot></slot>
        </button>

        <!-- Select (simple button, special attribute, different style) -->
        <button v-on="$listeners" :class="{'selected': selected}" :disabled="disabled" v-if="selectButton">
            <img v-if="selected" class="button--selected---icon" src="/assets/new/icons/selected-button-check.svg"
                 alt="Selected icon">
            <slot></slot>
        </button>

        <!-- Questionnaire button -->
        <button v-on="$listeners" :disabled="disabled" v-if="questionnaireButton">
            <slot></slot>
        </button>

    </div>
</template>

<script>
    export default {
        props: {
            action: {
                type: String,
                default: null,
                validator: function (val) {
                    const allowed = [
                        'link',
                        'submit',
                        'select',
                        'anchor',
                        'questionnaire'
                    ];
                    return allowed.indexOf(val) !== -1 || val === null;
                }
            },

            'inner-html': {
                type: String,
                default: null
            },
            href: {
                type: String,
                default: '#',
            },
            target: {
                type: String,
                default: null,
                validator: function (val) {
                    const allowed = [
                        '_blank',
                        '_self',
                        '_parent',
                        '_top'
                    ];
                    return allowed.indexOf(val) !== -1 || val === null;
                }
            },

            selected: {
                type: Boolean,
                default: false,
                required: this.action === 'select'
            },

            type: {
                type: String,
                default: 'pink',
                validator: function (val) {
                    const allowed = [
                        'blue',
                        'pink',
                        'quiz',
                        'white'
                    ];
                    return allowed.indexOf(val) !== -1 || val === null;
                }
            },

            disabled: {
                type: Boolean,
                default: false
            },

            'anchor-selector': {
                type: String,
                required: this.action === 'anchor'
            }
        },
        computed: {
            simpleButton: function () {
                return this.action === null || this.action === 'anchor';
            },
            submitButton: function () {
                return this.action === 'submit';
            },
            linkButton: function () {
                return this.action === 'link';
            },
            selectButton: function () {
                return this.action === 'select';
            },
            questionnaireButton: function () {
                return this.action === 'questionnaire';
            }
        },
        methods: {
            handleAnchorClick: function () {
                if (this.action === 'anchor' && this.anchorSelector) {
                    $('html, body').animate({
                        scrollTop: $(this.anchorSelector).offset().top
                    }, 800);
                }
            }
        }
    };
</script>
