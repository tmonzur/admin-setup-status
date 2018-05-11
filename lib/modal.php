<div id="ex1" class="modal" style="display:none;">
	<div class="modal-info">
		<div id="nds_form_feedback" style="margin-bottom:10px; text-align:center;"></div>
		<form method="post" id="nds_add_user_meta_ajax_form" action="<?php echo site_url();?>/wp-admin/admin-post.php">
			<p>Status:<br>
				<select id="status_color" name="status_color">
					<option value="ffffff">Default - White</option>
					<option value="2331e9">Ongoing - Blue</option>
					<option value="c311e9">To-Do - Purple</option>
					<option value="e4eb17">In Development - Yellow</option>
					<option value="e3951b">In Progress - Orange</option>
					<option value="59b61b">Done - Green</option>
					<option value="e91a37">Warning - Red</option>
				</select>
			</p>
			<p>Assignee:<br>				
				<select id="assignee" name="assignee">
					<option value="Admin">Admin</option>
					<option value="Editor">Editor</option>
					<option value="Shop">Shop</option>
					<option value="Manager">Manager</option>
					<option value="Users">Users</option>
				</select>
			</p>
			<p>Notes:<br>
			<textarea name="notes" style="width:100%;" id="notes"></textarea>
			</p>
			<p>	
			<input type="hidden" name="action" value="post_setup_status_data" >
			<input type="hidden" name="nonce" value="15a401ef5e" >
			<input type="submit" id="setupstatus" class="button button-primary" value="Save" /></p>
		</form>
	</div>
</div>