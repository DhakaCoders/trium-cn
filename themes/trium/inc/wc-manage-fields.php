<?php
add_action('init', 'ajax_register_save');
function ajax_register_save(){
    global $data_reg;
    if (isset( $_POST["billing_email_2"] ) && wp_verify_nonce($_POST['user_register_nonce'], 'user-register-nonce')) {
        $error = false;
        if( isset($_POST['billing_email']) && !empty($_POST['billing_email'])){
            $email = sanitize_email($_POST['billing_email']);
        }else{
            $email = sanitize_email($_POST['billing_email_2']);
        }
        if( isset($_POST['password']) && !empty($_POST['password'])){
            $user_password = $_POST['password'];
        }
        $firstname = (isset($_POST['billing_first_name']) && !empty($_POST['billing_first_name']))? sanitize_text_field($_POST['billing_first_name']):'';
        $lastname = (isset($_POST['billing_last_name']) && !empty($_POST['billing_last_name']))? sanitize_text_field($_POST['billing_last_name']):'';
        
        if(isset($email) && !empty($email)){
            $exp = explode('@', $email);
            $user_login = $exp[0];

        }
        
        if( isset($_POST['billing_first_name']) && empty($_POST['billing_first_name']) ){
           $data_reg['fname'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_last_name']) && empty($_POST['billing_last_name']) ){
           $data_reg['lname'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_postcode']) && empty($_POST['billing_postcode']) ){
           $data_reg['postcode'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_city']) && empty($_POST['billing_city']) ){
           $data_reg['city'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_address_1']) && empty($_POST['billing_address_1']) ){
           $data_reg['address1'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_house']) && empty($_POST['billing_house']) ){
           $data_reg['houseno'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_email_2']) && empty($_POST['billing_email_2']) ){
           $data_reg['email2'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_gsm_number']) && empty($_POST['billing_gsm_number']) ){
           $data_reg['gsm_number'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_phone']) && empty($_POST['billing_phone']) ){
           $data_reg['phone'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_email']) && empty($_POST['billing_email']) ){
           $data_reg['exists_email'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['password']) && empty($_POST['password']) ){
           $data_reg['pass'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['confirm_password']) && empty($_POST['confirm_password']) ){
           $data_reg['conf_pass'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if(!isset($_POST['is_shipping_address'])){
           if( isset($_POST['shipping_first_name']) && empty($_POST['shipping_first_name']) ){
               $data_reg['ship_fname'] = __('Controleer dit veld', 'woocommerce');
               $error = true;
            }
            if( isset($_POST['shipping_last_name']) && empty($_POST['shipping_last_name']) ){
               $data_reg['ship_lname'] = __('Controleer dit veld', 'woocommerce');
               $error = true;
            }
            if( isset($_POST['shipping_postcode']) && empty($_POST['shipping_postcode']) ){
               $data_reg['ship_postcode'] = __('Controleer dit veld', 'woocommerce');
               $error = true;
            }
            if( isset($_POST['shipping_city']) && empty($_POST['shipping_city']) ){
               $data_reg['ship_city'] = __('Controleer dit veld', 'woocommerce');
               $error = true;
            }
            if( isset($_POST['shipping_address_1']) && empty($_POST['shipping_address_1']) ){
               $data_reg['ship_address1'] = __('Controleer dit veld', 'woocommerce');
               $error = true;
            }
            if( isset($_POST['shipping_house']) && empty($_POST['shipping_house']) ){
               $data_reg['ship_houseno'] = __('Controleer dit veld', 'woocommerce');
               $error = true;
            }
        }
        if(!$error){
            if(email_exists($email)) {
                //Email address already registered
                $data_reg['exists_email'] = 'Email already registered';
            }else{
                $new_customer_data = array(
                    'user_login'        => $user_login,
                    'user_pass'         => $user_password,
                    'user_email'        => $email,
                    'first_name'        => $firstname,
                    'last_name'         => $lastname,
                    'user_registered'   => date('Y-m-d H:i:s'),
                    'role'              => 'customer'
                    );
                $customerId = wp_insert_user($new_customer_data);
               
                if( $customerId ){
                    $password_generated = false;
                    do_action( 'woocommerce_created_customer', $customerId, $new_customer_data, $password_generated );
                    if( isset($_POST['billing_order_type']) && !empty($_POST['billing_order_type'])){
                        update_user_meta( $customerId, "billing_order_type", $_POST['billing_order_type'] );
    
                        if( $_POST['billing_order_type'] == 'Zakelijk' ){
                            if( isset($_POST['billing_company']) && !empty($_POST['billing_company'])){
                                update_user_meta( $customerId, "billing_company", $_POST['billing_company'] );
                            }
                            if( isset($_POST['billing_btw_nummer']) && !empty($_POST['billing_btw_nummer'])){
                                update_user_meta( $user, "vat_number", $_POST['billing_btw_nummer'] );
                            }
                            if( isset($_POST['billing_reference']) && !empty($_POST['billing_reference'])){
                                update_user_meta( $customerId, "billing_reference", $_POST['billing_reference'] );
                            }
                        }
                    }
    
                    if( isset($_POST['billing_salutation']) && !empty($_POST['billing_salutation'])){
                        update_user_meta( $customerId, "billing_salutation", $_POST['billing_salutation'] );
                    }
                    if( !empty($firstname) ){
                        update_user_meta( $customerId, "billing_first_name", $firstname );
                    }
                    if( !empty($lastname) ){
                        update_user_meta( $customerId, "billing_last_name", $lastname );
                    }
                    if( isset($_POST['billing_email_2']) && !empty($_POST['billing_email_2']) ){
                        update_user_meta( $customerId, "billing_email_2", sanitize_email($_POST['billing_email_2']) );
                    }
                    if( isset($_POST['billing_email']) && !empty($_POST['billing_email']) ){
                        update_user_meta( $customerId, "billing_email", sanitize_email($_POST['billing_email']) );
                    }
    
                    if( isset($_POST['billing_address_1']) && !empty($_POST['billing_address_1']) ){
                        update_user_meta( $customerId, "billing_address_1", sanitize_text_field($_POST['billing_address_1']));
                    }
                    if( isset($_POST['billing_address_2']) && !empty($_POST['billing_address_2']) ){
                        update_user_meta( $customerId, "billing_address_2", sanitize_text_field($_POST['billing_address_2']) );
                    }
                    if( isset($_POST['billing_house']) && !empty($_POST['billing_house']) ){
                        update_user_meta( $customerId, "billing_house", sanitize_text_field($_POST['billing_house']) );
                    }
    
                    if( isset($_POST['billing_city']) && !empty($_POST['billing_city']) ){
                        update_user_meta( $customerId, "billing_city", sanitize_text_field($_POST['billing_city']));
                    }
                    if( isset($_POST['billing_postcode']) && !empty($_POST['billing_postcode']) ){
                        update_user_meta( $customerId, "billing_postcode", sanitize_text_field($_POST['billing_postcode']) );
                    }
                    if( isset($_POST['billing_country']) && !empty($_POST['billing_country'])){
                        update_user_meta( $customerId, "billing_country", $_POST['billing_country']);
                    }
                    if( isset($_POST['billing_gsm_number']) && !empty($_POST['billing_gsm_number'])){
                        update_user_meta( $customerId, "billing_gsm_number", sanitize_text_field($_POST['billing_gsm_number']) );
                    }
                    if( isset($_POST['billing_phone']) && !empty($_POST['billing_phone'])){
                        update_user_meta( $customerId, "billing_phone", sanitize_text_field($_POST['billing_phone']) );
                    }
                    if( isset($_POST['billing_personal_recom']) && !empty($_POST['billing_personal_recom'])){
                        update_user_meta( $customerId, "billing_personal_recom", 1 );
                    }
                    if( isset($_POST['billing_acttion_insp']) && !empty($_POST['billing_acttion_insp'])){
                        update_user_meta( $customerId, "billing_acttion_insp", 1 );
                    }
                    if(!isset($_POST['is_shipping_address'])){
                        update_user_meta($customerId,"enable_ship_to_different", 1);
                        if( isset($_POST['shipping_first_name']) && !empty($_POST['shipping_first_name']) ){
                            update_user_meta($customerId,"shipping_first_name",sanitize_text_field($_POST['shipping_first_name']));
                        }
                        if( isset($_POST['shipping_last_name']) && !empty($_POST['shipping_last_name']) ){
                            update_user_meta($customerId,"shipping_last_name",sanitize_text_field($_POST['shipping_last_name']));
                        }
                        if( isset($_POST['shipping_address_1']) && !empty($_POST['shipping_address_1']) ){
                            update_user_meta( $customerId,"shipping_address_1",sanitize_text_field($_POST['shipping_address_1']));
                        }
                        if( isset($_POST['shipping_house']) && !empty($_POST['shipping_house']) ){
                            update_user_meta( $customerId, "shipping_house", sanitize_text_field($_POST['shipping_house']) );
                        }
                        if( isset($_POST['shipping_address_2']) && !empty($_POST['shipping_address_2']) ){
                            update_user_meta( $customerId,"shipping_address_2",sanitize_text_field($_POST['shipping_address_2']) );
                        }
                        if( isset($_POST['shipping_city']) && !empty($_POST['shipping_city']) ){
                            update_user_meta( $customerId, "shipping_city", sanitize_text_field($_POST['shipping_city']));
                        }
                        if( isset($_POST['shipping_postcode']) && !empty($_POST['shipping_postcode']) ){
                            update_user_meta( $customerId, "shipping_postcode", sanitize_text_field($_POST['shipping_postcode']) );
                        }
                    }else{
                        update_user_meta($customerId,"enable_ship_to_different", 0);
                    }
                    $user = get_user_by( 'id', $customerId );
                    if($user){
                        wp_clear_auth_cookie();
                        wp_set_current_user( $user->ID, $user->user_login );
                        if (wp_validate_auth_cookie()==FALSE)
                        {
                            wp_set_auth_cookie($user->ID, false, true);
                        }
                        //do_action( 'wp_login', $user->user_login );
                        if ( is_user_logged_in() ){
                            $data_reg['user_name'] = $user->user_login;
                            echo '<script>window.location.href ="'.home_url('my-account').'";</script>';
                            wp_die();
                        }
                    }
    
                }
                
            }
        }
        $data_reg['error'] = 'error';
        return $data_reg;
    }
}
//add_action('init', 'registered_user_info_update');
function registered_user_info_update($post){
    $data = array();
    if (isset( $post["account_email"] ) && isset($post['user_id'])) {
        $error = false;
        $user_password = $email = '';
        if( isset($post['account_email']) && !empty($post['account_email'])){
            $email = sanitize_email($post['account_email']);
        }
        if( isset($post['password']) && !empty($post['password'])){
            $user_password = $post['password'];
            if( isset($post['confirm_password']) && !empty($post['confirm_password']) && $user_password != $post['confirm_password'] ){
                $data['pass'] = __('Controleer dit veld', 'woocommerce');
                $error = true;  
            }
        }
        if( isset($post['user_id']) && !empty($post['user_id'])){
            $userID = $post['user_id'];
        }else{
            $user = wp_get_current_user();
            $userID = $user->ID;
        }
        $firstname = (isset($post['account_first_name']) && !empty($post['account_first_name']))? $post['account_first_name']:'';
        $lastname = (isset($post['account_last_name']) && !empty($post['account_last_name']))? $post['account_last_name']:'';
        
        if( isset($_POST['account_first_name']) && empty($_POST['account_first_name']) ){
           $data['fname'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['account_last_name']) && empty($_POST['account_last_name']) ){
           $data['lname'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_postcode']) && empty($_POST['billing_postcode']) ){
           $data['postcode'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_city']) && empty($_POST['billing_city']) ){
           $data['city'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_address_1']) && empty($_POST['billing_address_1']) ){
           $data['address1'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_house']) && empty($_POST['billing_house']) ){
           $data['houseno'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_gsm_number']) && empty($_POST['billing_gsm_number']) ){
           $data['gsm_number'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['billing_phone']) && empty($_POST['billing_phone']) ){
           $data['phone'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        if( isset($_POST['account_email']) && empty($_POST['account_email']) ){
           $data['email'] = __('Controleer dit veld', 'woocommerce');
           $error = true;
        }
        
        if( !empty($userID) && !$error ){
            if( empty($user_password)){
                $customerId = wp_update_user(array(
                    'ID'                => $userID,
                    'user_email'        => $email,
                    'first_name'        => $firstname,
                    'last_name'         => $lastname
                    )
                );
            }else{
                $customerId = wp_update_user(array(
                    'ID'                => $userID,
                    'user_pass'         => $user_password,
                    'user_email'        => $email,
                    'first_name'        => $firstname,
                    'last_name'         => $lastname
                    )
                );
            }
            if( $customerId ){
                if( !empty($firstname) ){
                    update_user_meta( $customerId, "billing_first_name", $firstname );
                }
                if( !empty($lastname) ){
                    update_user_meta( $customerId, "billing_last_name", $lastname );
                }
                if( isset($post['account_email']) && !empty($post['account_email']) ){
                    update_user_meta( $customerId, "billing_email", $post['account_email'] );
                }

                if( isset($post['billing_address_1']) && !empty($post['billing_address_1']) ){
                    update_user_meta( $customerId, "billing_address_1", $post['billing_address_1']);
                }
                if( isset($post['billing_house']) && !empty($post['billing_house']) ){
                    update_user_meta( $customerId, "billing_house", $post['billing_house'] );
                }

                if( isset($post['billing_city']) && !empty($post['billing_city']) ){
                    update_user_meta( $customerId, "billing_city", $post['billing_city']);
                }
                if( isset($post['billing_postcode']) && !empty($post['billing_postcode']) ){
                    update_user_meta( $customerId, "billing_postcode", $post['billing_postcode'] );
                }
                if( isset($post['billing_gsm_number']) && !empty($post['billing_gsm_number'])){
                    update_user_meta( $customerId, "billing_gsm_number", $post['billing_gsm_number'] );
                }
                if( isset($post['billing_phone']) && !empty($post['billing_phone'])){
                    update_user_meta( $customerId, "billing_phone", $post['billing_phone'] );
                }
                $data['success'] = 'success';
            }else{
              $data['error'] = 'error';
            }
            
        }else{
            $data['error'] = 'error';
        }
        
    }
    return $data;
}


function cbv_my_custom_endpoints() {
    add_rewrite_endpoint( 'winkelmandje', EP_ROOT | EP_PAGES );
}

add_action( 'init', 'cbv_my_custom_endpoints' );

function cbv_my_custom_query_vars( $vars ) {
    $vars[] = 'winkelmandje';

    return $vars;
}

add_filter( 'query_vars', 'cbv_my_custom_query_vars', 0 );

function cbv_my_custom_flush_rewrite_rules() {
    flush_rewrite_rules();
}

add_action( 'wp_loaded', 'cbv_my_custom_flush_rewrite_rules' );