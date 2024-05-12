<div class="wrap">
   <h1><?php _e("New Address", "text-domain"); ?></h1>
   
    <form action="" method="POST">
        <table class="form-table">
            <tr>
                <th>
                    <label>Name</label>
                </th>
                <td>
                    <input type="text" name="name" id="name" class="regular-text" value="" />
                </td>
            </tr>

            <tr>
                <th>
                    <label>Address</label>
                </th>
                <td>
                    <textarea name="address" id="address" class="regular-text"></textarea>
                </td>
            </tr>

            <tr>
                <th>
                    <label>Phone</label>
                </th>
                <td>
                    <input type="text" name="phone" id="phone" class="regular-text" value="" />
                </td>
            </tr>
        </table>
		
		<!--		
		In WordPress, the wp_nonce_field() function is used to generate a nonce (number used once) 
		field. Nonces are used to add a layer of security to forms and URLs to protect against 
		certain types of attacks, such as CSRF (Cross-Site Request Forgery).
		-->		
		<?php wp_nonce_field( 'new-address' ); ?>
		
		<!--
		In WordPress, the submit_button() function is used to display a submit button in an admin form. 
		This function is typically used within WordPress administration screens to create buttons for 
		submitting forms, such as when saving settings or submitting data.
		
		submit_button( string $text, string $type = 'primary', string $name = 'submit', 
						bool $wrap = true, array $other_attributes = null )
		$text: The text to display on the button.
		$type: The type of button. It can be 'primary', 'secondary', 'delete', or 'button'. Default is 'primary'.
		$name: The name attribute of the button. Default is 'submit'.
		$wrap: Whether to wrap the button in a paragraph tag. Default is true.
		$other_attributes: Additional attributes to add to the button as an associative array.
		-->
		<?php submit_button("add address", "primary", "submit_address"); ?>
   
   </form>
</div>