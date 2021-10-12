<div class="container containerfull mt-5 text-center col-lg-8 col-md-6">
	<br>
	<h1 class="h2p mb-4 mt-5"><?php echo lang('index_heading');?></h1>
	<p class="h3p"><?php echo lang('index_subheading');?></p>

	<div class="h3p" id="infoMessage"><?php echo $message;?></div>

	<br>
	<div style="align: center;"> 
		<table class="mx-auto table-bordered" style="align: center;" cellpadding=10 cellspacing=20>
			<tr>
				<th class="h3p" style="color: white;"><?php echo lang('index_fname_th');?></th>
				<th class="h3p" style="color: white;"><?php echo lang('index_lname_th');?></th>
				<th class="h3p" style="color: white;"><?php echo lang('index_email_th');?></th>
				<th class="h3p" style="color: white;"><?php echo lang('index_groups_th');?></th>
				<th class="h3p" style="color: white;"><?php echo lang('index_status_th');?></th>
				<th class="h3p" style="color: white;"><?php echo lang('index_action_th');?></th>
			</tr>
			<?php foreach ($users as $user):?>
				<tr> 
					<td style="color: white;"><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
					<td style="color: white;"><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
					<td style="color: white;"><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
					<td>
						<?php foreach ($user->groups as $group):?>
							<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
						<?php endforeach?>
					</td>
					<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
					<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
				</tr>
			<?php endforeach;?>
		</table>
	</div>
	<br>
	<p class="h3p"><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
</div> 