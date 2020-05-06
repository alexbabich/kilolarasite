<template>
    <div class="df-grey-bg df-page-checkout">
        <div class="df-order-details">
            <div class="df-order-title">
                <p>Order details</p>
            </div>
            <div class="df-order-info df-pt-30 df-pb-30">
                <div class="d-flex">
                    <h4 class="df-order-product-title">BHB Ketone Boost 1 month pack</h4>
                </div>
                <div class="df-product-price-info">
                    <div class="df-product-price-item justify-content-between">
                        <p class="df-product-title">2 boxes</p>
                        <p class="df-crossed-text">$420.00</p>
                    </div>
                    <div class="df-product-price-item justify-content-between">
                        <p>Discount <b>-46%</b></p>
                        <p class="df-bold df-text-red">- $151.00</p>
                    </div>
                    <div class="df-product-price-item df-order-total justify-content-between">
                        <h4>Total</h4>
                        <h4 class="df-bold">$269.00</h4>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="df-order-image">
                    <img src="/images/product3.png" alt="" />
                </div>
            </div>

            <p class="d-flex df-order-count-title">Please select quantities of each flavor</p>
            
            <div class="d-flex df-pl-40 df-pr-40 df-mb-40 justify-content-between df-order-counters">
                <div class="d-flex flex-column df-order-counter-wrapper">
                    <p>Peach flavor</p>
                    <div class="df-order-counter-block">
                        <span class="df-minus">-</span>
                        <input class="df-order-value" type="text" value="1"/>
                        <span class="df-plus">+</span>
                    </div>
                </div>
                <div class="d-flex flex-column df-order-counter-wrapper">
                    <p>Raspberry flavor</p>
                    <div class="df-order-counter-block">
                        <span class="df-minus">-</span>
                        <input class="df-order-value" type="text" value="1"/>
                        <span class="df-plus">+</span>
                    </div>
                </div>
            </div>

            <div class="df-order-title">
                <p>SHIPPING DETAILS</p>
            </div>

            <form class="df-order-contact">
                <div class="row-flex flex-column df-order-contact-item">
                    <label class="df-mb-10">Full name</label>
                    <input type="text" placeholder="Enter here" />
                </div>
                <div class="row-flex flex-column df-order-contact-item">
                    <label class="df-mb-10">Street address</label>
                    <input type="text" placeholder="Enter here" />
                </div>
                <div class="row-flex flex-column df-order-contact-item">
                    <label class="df-mb-10">Town / city</label>
                    <input type="text" placeholder="Enter here" />
                </div>
                <div class="row-flex flex-column df-order-contact-item">
                    <label class="df-mb-10">State</label>
                    <input type="text" placeholder="Enter here" />
                </div>
                <div class="row-flex flex-column df-order-contact-item">
                    <label class="df-mb-10">Zip code</label>
                    <input type="text" placeholder="Enter here" />
                </div>
                <div class="row-flex flex-column df-order-contact-item">
                    <label class="df-mb-10">Phone number</label>
                    <input type="text" placeholder="Enter here" />
                </div>
                <div class="row-flex df-order-contact-item justify-content-center">
                    <button type="submit" class="df-button df-button-confirm">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "Checkout",
    components: {
    },
    data() {
        return {
        }
    }
};
</script>