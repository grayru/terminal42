<?php
defined( 'ABSPATH' ) or exit;
?>
<div id="mc4wp-admin" class="wrap">

	<h1 class="page-title"><?php _e( 'MailChimp for WordPress', 'mailchimp-for-wp' ); ?>: <?php _e( 'License & API Settings', 'mailchimp-for-wp' ); ?></h1>

		<?php settings_errors(); ?>

		<form method="post" action="options.php">

			<?php settings_fields( 'mc4wp_settings' ); ?>

			<h3>
				MailChimp <?php _e( 'API Settings', 'mailchimp-for-wp' ); ?>
			</h3>
			<table class="form-table">

				<tr valign="top">
					<th scope="row">
						<?php _e( 'Status', 'mailchimp-for-wp' ); ?>
					</th>
					<td>
						<?php if($connected) { ?>
							<span class="status positive"><?php _e( 'CONNECTED' ,'mailchimp-for-wp' ); ?></span>
						<?php } else { ?>
							<span class="status neutral"><?php _e( 'NOT CONNECTED', 'mailchimp-for-wp' ); ?></span>
						<?php } ?>
					</td>
				</tr>

				<tr valign="top">
					<th scope="row"><label for="mailchimp_api_key"><?php _e( 'API Key', 'mailchimp-for-wp' ); ?></label></th>
					<td>
						<input type="text" class="widefat" placeholder="<?php _e( 'Your MailChimp API key', 'mailchimp-for-wp' ); ?>" id="mailchimp_api_key" name="mc4wp[api_key]" value="<?php echo esc_attr( $opts['api_key'] ); ?>" />
						<p class="help">
							<?php _e( 'The API key for connecting with your MailChimp account.', 'mailchimp-for-wp' ); ?>
							<a target="_blank" href="https://admin.mailchimp.com/account/api"><?php _e( 'Get your API key here.', 'mailchimp-for-wp' ); ?></a>
						</p>
					</td>
				</tr>

			</table>

			<?php submit_button(); ?>

		<hr />

		<div class="mc4wp-license-form">
			<?php $this->license_manager->show_license_form( true ); ?>
		</div>

		<hr />

		<h3><?php _e( 'Usage Tracking', 'mailchimp-for-wp' ); ?></h3>
		<p>
			<label>
				<?php /* hidden input field to send `0` when checkbox is not checked */ ?>
				<input type="hidden" name="mc4wp[allow_usage_tracking]" value="0" />
				<input type="checkbox" name="mc4wp[allow_usage_tracking]" value="1" <?php checked( $opts['allow_usage_tracking'], 1 ); ?>>
				<?php echo sprintf( __( 'Allow us to anonymously track how this plugin is used to help us make it better fit your needs. <a href="%s">This is what we track</a>.', 'mailchimp-for-wp' ), 'https://mc4wp.com/kb/what-is-usage-tracking/#utm_source=wp-plugin&utm_medium=mailchimp-for-wp&utm_campaign=settings-page' ); ?>
			</label>
		</p>

		<?php submit_button(); ?>

		</form>

		<?php if( true === $connected ) { ?>
			<hr />

			<h3 class="mc4wp-title"><?php _e( 'MailChimp Data' ,'mailchimp-for-wp' ); ?></h3>
			<p><?php _e( 'The table below shows your MailChimp lists data. If you applied changes to your MailChimp lists, please use the following button to renew your cached data.', 'mailchimp-for-wp' ); ?></p>

			<form method="post" action="">
				<input type="hidden" name="mc4wp-renew-cache" value="1" />

				<p>
					<input type="submit" value="<?php _e( 'Renew MailChimp lists', 'mailchimp-for-wp' ); ?>" class="button" />
				</p>
			</form>

			<div class="mc4wp-lists-overview">
				<?php if( empty( $lists ) || ! is_array( $lists ) ) { ?>
					<p><?php _e( 'No lists were found in your MailChimp account', 'mailchimp-for-wp' ); ?>.</p>
				<?php } else {

					printf( '<p>' . __( 'A total of %d lists were found in your MailChimp account.', 'mailchimp-for-wp' ) . '</p>', count( $lists ) );

					foreach ( $lists as $list ) { ?>

						<table class="widefat" cellspacing="0">
							<tr>
								<td colspan="2"><h3><?php echo esc_html( $list->name ); ?></h3></td>
							</tr>
							<tr>
								<th width="150">List ID</th>
								<td><?php echo esc_html( $list->id ); ?></td>
							</tr>
							<tr>
								<th># of subscribers</th>
								<td><?php echo esc_html( $list->subscriber_count ); ?></td>
							</tr>
							<tr>
								<th>Fields</th>
								<td style="padding: 0; border: 0;">
									<?php if ( ! empty( $list->merge_vars ) && is_array( $list->merge_vars ) ) { ?>
										<table class="widefat fixed" cellspacing="0">
											<thead>
											<tr>
												<th>Name</th>
												<th>Tag</th>
												<th>Type</th>
											</tr>
											</thead>
											<?php foreach ( $list->merge_vars as $merge_var ) { ?>
												<tr title="<?php printf( __( '%s (%s) with field type %s.', 'mailchimp-for-wp' ), esc_html( $merge_var->name ), esc_html( $merge_var->tag ), esc_html( $merge_var->field_type ) ); ?>">
													<td><?php echo esc_html( $merge_var->name );
														if ( $merge_var->req ) {
															echo '<span style="color:red;">*</span>';
														} ?></td>
													<td><code><?php echo esc_html( $merge_var->tag ); ?></code></td>
													<td><?php echo esc_html( $merge_var->field_type ); ?></td>
												</tr>
											<?php } ?>
										</table>
									<?php } ?>
								</td>
							</tr>
							<?php if ( ! empty( $list->interest_groupings ) && is_array( $list->interest_groupings ) ) { ?>
								<tr>
									<th>Interest Groupings</th>
									<td style="padding: 0; border: 0;">
										<table class="widefat fixed" cellspacing="0">
											<thead>
											<tr>
												<th>Name</th>
												<th>Groups</th>
											</tr>
											</thead>
											<?php foreach ( $list->interest_groupings as $grouping ) { ?>
												<tr title="<?php esc_attr( printf( __( '%s (ID: %s) with type %s.', 'mailchimp-for-wp' ), $grouping->name, $grouping->id, $grouping->form_field ) ); ?>">
													<td><?php echo esc_html( $grouping->name ); ?></td>
													<td>
														<ul class="ul-square">
															<?php foreach ( $grouping->groups as $group ) { ?>
																<li><?php echo esc_html( $group->name ); ?></li>
															<?php } ?>
														</ul>
													</td>
												</tr>
											<?php } ?>
										</table>

									</td>
								</tr>
							<?php } ?>
						</table>
						<br style="margin: 20px 0;" />
					<?php } // end foreach $lists
				} // end if empty ?>
			</div>

			<form method="post" action="">
				<input type="hidden" name="mc4wp-renew-cache" value="1" />

				<p>
					<input type="submit" value="<?php _e( 'Renew MailChimp lists', 'mailchimp-for-wp' ); ?>" class="button" />
				</p>
			</form>

		<?php } ?>

		<?php require dirname( __FILE__ ) . '/../parts/admin-footer.php'; ?>

	</div>