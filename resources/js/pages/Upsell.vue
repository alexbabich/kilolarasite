<template>
    <div class="df-page-upsell">
        <div class="container">
            <!-- class df-pass-first-step and df-pass-second-step is showing progress-->
            <div class="row justify-content-between df-steps-nav df-pass-first-step">
                <div class="df-steps-item df-active">
                    <span class="df-steps-point"></span>
                    <p class="df-steps-title">Order submitted</p>
                </div>
                <div class="df-steps-item df-active df-current">
                    <span class="df-steps-point"></span>
                    <p class="df-steps-title">SPECIAL OFFER</p>
                </div>
                <div class="df-steps-item">
                    <span class="df-steps-point"></span>
                    <p class="df-steps-title">ORDER RECEIPT</p>
                </div>
            </div>
        </div>

        <div class="df-white-bg df-pt-50 df-pb-50">
            <div class="container">
                <div class="row df-fasting-results">
                    <div class="df-fasting-results-image"></div>
                    <div class="df-fasting-results-text">
                        <h2 class="df-subtitle">Multiply Your Fasting Results With BHB Ketone Boost</h2>
                        <p class="df-fasting-results-description">A safe and effective way to increase ketone body concentrations</p>
                        <ul class="df-list">
                            <li>
                                <div class="df-logo-wrapper">
                                    <svg-vue icon="restore2" />
                                </div>
                                <p>Enjoy easy transition into ketosis</p>
                            </li>
                            <li>
                                <div class="df-logo-wrapper">
                                    <svg-vue icon="battery" />
                                </div>
                                <p>Boost energy levels</p>
                            </li>
                            <li>
                                <div class="df-logo-wrapper">
                                    <svg-vue icon="libra" />
                                </div>
                                <p>Speed up weight loss</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <benefits
            :title="'6  Key Benefits That Will Enhance Your Health'"
            :dataArray="BenefitsItems"
        />

        <firstblock
            :background="'smoothie2'"
            :title="'How to use it?'"
            :text="'<p>For maximum results, BHB Ketone Body Boost should be taken 30 minutes before a selected meal.</p><p>Simply combine one sachet of powder with 14 fl oz (420ml) of water, mix well and drink up!</p>'"
            :isShowButton="false"
            :isShowLink="false"
            :isShowLogo="false"
        />

        <firstblock
            :background="'sunset'"
            :title="'How it works?'"
            :text="'<p>Once ingested, the minerals are cleaved off the BHB and absorbed into your bloodstream.</p><p>Here they are able to enter cells throughout your whole body (that’s including your brain cells!) and act as precursors to ketones. Ketones are then used as a source of energy.</p>'"
            :isShowButton="false"
            :isShowLink="false"
            :isShowLogo="false"
            :className="'df-reverse'"
        />

        <div class="container df-pt-50 df-pb-50 df-body-boost-block">
            <div class="row df-mb-40 ">
                <h2 class="df-subtitle text-center">After just a few weeks of using BHB Ketone Body Boost you will:</h2>
            </div>
            <div class="row">
                <div class="df-body-boost">

                    <div
                        v-for="(item, index) in BodyBoostItems"
                        :key="index"
                        class="df-body-boost-item"
                    >
                        <div class="df-logo-wrapper">
                            <svg-vue :icon="item.svg" />
                        </div>
                        <p>{{ item.title }}</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="df-white-bg df-pt-50 df-pb-50">
            <div class="container">
                <div class="row df-mb-40 df-pt-40">
                    <h2 class="df-subtitle text-center">Get BHB Ketone Boost</h2>
                </div>
                <div class="row">
                    <div class="df-ketone-boost-image"></div>
                </div>
                <div class="row df-mb-40 df-product-list">
                    <div class="df-product-wrapper df-most-popular">
                        <div class="df-most-popular-title">
                            <p>
                                <span>
                                    <svg-vue icon="star" />
                                </span>
                                VALUE PACK
                            </p>
                        </div>
                        <div class="df-product-item">
                            <p class="df-poduct-title">6 months</p>
                            <p class="df-safe-mony">SAVE $189.95</p>
                            <div class="df-product-price">
                                <p>$<b>29.16</b> / box</p>
                            </div>
                            <div class="df-product-info">
                                <p><span>12 boxes</span><span>180 servings</span></p>
                            </div>
                            <button class="df-button df-buy-button">BUY NOW</button>
                        </div>
                    </div>
                    <div class="df-product-wrapper">
                        <div class="df-product-item">
                            <p class="df-poduct-title">3 months </p>
                            <p class="df-safe-mony">SAVE $69.97</p>
                            <div class="df-product-price">
                                <p>$<b>33.33</b> / box</p>
                            </div>
                            <div class="df-product-info">
                                <p><span>6 boxes</span><span>90 servings</span></p>
                            </div>
                            <button class="df-button df-buy-button">BUY NOW</button>
                        </div>
                    </div>
                    <div class="df-product-wrapper">
                        <div class="df-product-item">
                            <p class="df-poduct-title">1 months</p>
                            <div class="df-product-price">
                                <p>$<b>44.99</b> / box</p>
                            </div>
                            <div class="df-product-info">
                                <p><span>2 boxes</span><span>30 servings</span></p>
                            </div>
                            <button class="df-button df-buy-button">BUY NOW</button>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center df-mb-30">
                    <a href="" class="df-unsbscribe">No, thank you, I’m not interested in this offer</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Firstblock from "@/js/components/Firstblock";
import Benefits from "@/js/components/Benefits";

export default {
    name: "Upsell",
    components: {
        Benefits,
        Firstblock
    },
    data() {
        return {
            BenefitsItems: [
                {
                    title: "Decreased Appetite", 
                    description: "Maximum effect felt 2-4 hours after drinking the supplement. Use it in the morning or after your last meal to effectively crush your hunger pangs!",
                    logo: "stock"
                },
                {
                    title: "Lower Blood Glucose Levels",
                    description: "Combining BHB Ketones Boost with intermittent fasting works as a powerful method in improving your blood glucose levels.",
                    logo: "blood"
                },
                {
                    title: "Increased Fat-Burning",
                    description: "Ketone bodies can be produced with the help of intermittent fasting or a high fat, low carb diet. They help you to reach the fat-burning state of ketosis and start losing weight. BHB salts make that transition easier and can double the fat-burning effect.",
                    logo: "fire2"
                },
                {
                    title: "An Amazing Boost in Mood and Energy",
                    description: "When fasting, you may experience slight mood swings, fatigue, and irritability caused by hunger. BHB Ketone Boost supplies fast-acting fuel for the brain and is capable of supplying it with roughly 70% of its energy needs.",
                    logo: "rocket"
                },
                {
                    title: "Increased Metabolism for Consistent Weight Loss",
                    description: "Your body will increase its nutrient absorption, start burning energy from food faster and result in consistent, speedier weight loss.",
                    logo: "restore"
                },
                {
                    title: "Improves Athletic Performance",
                    description: "Research shows that BHB Ketones have the ability to increase your energy levels, resulting in enhanced endurance and improved athletic performance.",
                    logo: "runner"
                }
            ],
            BodyBoostItems: [
                {
                    title: "Increase your cognitive function and mental clarity",
                    svg: "head"
                },
                {
                    title: "Experience consistent fat loss",
                    svg: "body2"
                },
                {
                    title: "Stabilize your blood sugar",
                    svg: "blood"
                },
                {
                    title: "Enjoy better exercise performance",
                    svg: "body"
                },
                {
                    title: "Have more energy",
                    svg: "bolt"
                },
                {
                    title: "Reach higher results",
                    svg: "medal"
                }
            ]
        }
    }
};
</script>