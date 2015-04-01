/* Form No 3 , Field No 24 Validated */
add_filter( 'gform_field_validation_3_24', 'custom_validations', 10, 4 );

function custom_validations( $result, $value, $form, $field ) {
    if ( $result['is_valid'] && intval( $value ) > 1997 ) {
        $result['is_valid'] = false;
        $result['message'] = 'You need to be over 18 years old.';
    }
    return $result;
}
