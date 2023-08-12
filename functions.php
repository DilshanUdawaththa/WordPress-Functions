// Add a custom function to apply the discount amount when the coupon code is "XXXXXXXX"
function apply_custom_coupon_discount( $coupon ) {
    // Check if the coupon code is "XXXXXXXX"
    if ( $coupon->get_code() === 'XXXXXXXX' ) {
        // Set the amount to 10
        $coupon->set_amount( 10 );
    }
}
add_action( 'woocommerce_coupon_loaded', 'apply_custom_coupon_discount' );
