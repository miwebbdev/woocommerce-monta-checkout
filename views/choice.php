<script>
    var site_url = '<?php echo site_url();?>';
</script>

<div class="woocommerce-shipping-fields montapacking-shipping">

    <!--SANDER <h3><?php _e( 'Shipping method', TKEY ); ?></h3> -->

    <h5 id="monta-address-required"><?php _e("*Please fill in an address before selecting a shipping method", TKEY) ?></h5>

    <div class="monta-options">

        <div class="monta-option monta-disabled">

            <label>
                <input type="radio" name="montapacking[shipment][type]" value="delivery" disabled/>
                <span class="block">
					<strong><?php _e( 'Delivery', TKEY ); ?></strong>
				</span>
            </label>

        </div>
        <div class="monta-option monta-disabled">

            <label>
                <input type="radio" name="montapacking[shipment][type]" value="pickup" disabled/>
                <span class="block">
					<strong><?php _e( 'Pickup', TKEY ); ?></strong>
				</span>
            </label>

        </div>
    </div>

    <div class="monta-loading">
        <?php _e( 'Loading...', TKEY ); ?>
    </div>

    <div class="monta-shipment-delivery">

        <style>
            .imglogo img {
                width: 50px;
                margin-right: 15px;
            }
        </style>

        <div class="monta-times-croppped" style="display:block">
            <!-- SANDER <h3><?php _e( 'Delivery time and date', TKEY ); ?></h3> -->
            <label>
                <div style="float : left;" class="imglogo"></div>

                <?php _e( 'Your order will be delivered with', TKEY ); ?> <strong class="shipper"></strong> <?php _e( 'on', TKEY ); ?> <strong class="date"></strong> <span class="timeinformation"> <?php _e( 'between', TKEY ); ?> <strong class="datetime"></strong></span><br>

                <a href="javascript:;" id="othersendmethod"><?php _e( 'Click here to choose another delivery option', TKEY ); ?></a>
            </label>




        </div>

        <div class="monta-times-extended" style="display:none">

            <h6><?php _e( 'Select delivery time and date', TKEY ); ?></h6>
            <div class="monta-times">

                <a class="toggle-left"><?php _e( 'Earlier', TKEY ); ?></a>
                <div class="scroller">

                    <div class="mover">

                        <ul></ul>

                    </div>

                </div>
                <a class="toggle-right"><?php _e( 'Later', TKEY ); ?></a>

            </div>

            <div class="monta-shipment-shipper"></div>
        </div>

    </div>

    <div class="monta-shipment-pickup">

        <br/>

        <!-- First 3 pickup point options -->
        <div class="monta-pickup-initial-points">
            <div id="monta-pickups" class="bh-sl-map-container">

                <div class="monta-locations" style="width: 100% !important;">

                    <a class="monta-more-pickup-points"><?php _e( 'Show more options', TKEY ); ?></a>

                    <div class="bh-sl-loc-list">
                        <ul id="initialPickupsList">
                            <!-- pick-up points -->
                        </ul>
                        <input style="display: none;" type="radio" name="initialPickupPointRadio" id="initialPickupRadioDummy">
                    </div>

                </div>

            </div>
        </div>



        <h5><?php _e( 'Selected pickup point', TKEY ); ?></h5>
        <div style="display: none;" class="monta-pickup-selected"></div>

        <input type="hidden" name="montapacking[pickup][code]" class="monta-pickup-input-code">
        <input type="hidden" name="montapacking[pickup][shipper]" class="monta-pickup-input-shipper">
        <input type="hidden" name="montapacking[pickup][shippingOptions]" class="monta-pickup-input-shippingOptions">
        <input type="hidden" name="montapacking[pickup][company]" class="monta-pickup-input-company">
        <input type="hidden" name="montapacking[pickup][street]" class="monta-pickup-input-street">
        <input type="hidden" name="montapacking[pickup][houseNumber]" class="monta-pickup-input-houseNumber">
        <input type="hidden" name="montapacking[pickup][postal]" class="monta-pickup-input-postal">
        <input type="hidden" name="montapacking[pickup][city]" class="monta-pickup-input-city">
        <input type="hidden" name="montapacking[pickup][country]" class="monta-pickup-input-country">
        <input type="hidden" name="montapacking[pickup][price]" class="monta-pickup-input-price">

    </div>

    <div class="monta-shipment-extras">

  <!--      <br/>-->

        <h6 style="padding-top:10px"><?php _e( 'Extra options:', TKEY ); ?></h6>
        <div class="monta-shipment-extra-options"></div>

    </div>

</div>

<ul class="monta-choice-template">
    <li>

        <label>
            <input type="radio" name="montapacking[shipment][time]" value="{.id}" class="montapackingshipmenttime {.sameday}">
            <span>
				<span class="day">{.day}</span>
				<span class="description">{.description}</span>
				<span class="price">{.price}</span>
			</span>
        </label>

    </li>
</ul>

<div class="monta-shipper-template">
    <label>
        <input type="radio" name="montapacking[shipment][shipper]" value="{.code}" class="montapackingshipmentshipper">
        <span style="display:none" class="cropped_name">{.name}</span>
        <span style="display:none" class="cropped_time">{.time}</span>
        <span style="display:none" class="cropped_image">{.img}</span>
        <span>
            {.img}
			<div class="name">{.name} {.time}</div>
			<span class="price">{.price}</span>
		</span>
    </label>
</div>

<div class="monta-extra-template">
    <label>
        <input type="checkbox" name="montapacking[shipment][extras][]" value="{.code}">
        <span>
			{.name}
			<span class="price">{.price}</span>
		</span>
    </label>
</div>
