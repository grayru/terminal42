<div class="md-modal md-dynamicmodal" id="modal-clone-window">
    <div class="md-content">
        <div>
            <div style="display: block; float: left; margin: 0 20px 20px 0;">
		      <span style="font-size: 64px; width: 64px; height: 64px;" class="dashicons dashicons-lock"></span>
		    </div>
		    <p><?php _e('This register is currently open in another tab. If you take over, the other tab will be locked.', 'wc_point_of_sale'); ?></p>		    <a class="button" style="margin-right: 10px;" href="<?php echo admin_url('admin.php?page=wc_pos_registers' ); ?>"><?php _e( 'All Registers', 'wc_point_of_sale' ); ?></a>
		    <button class="button button-primary wp-tab-last" onclick="WindowStateManager.takeOver();"><?php _e( 'Take Over', 'wc_point_of_sale' ); ?></button>
        </div>
    </div>
</div>