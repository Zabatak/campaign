<div id="content">
	<div class="content-bg">
		<div class="big-block">
			<?php if ($form_error):
			?>
			<!-- red-box -->
			<div class="red-box">
			<h3>Error!</h3>
			<ul>
			<?php
			foreach ($errors as $error_item => $error_description)
			{
			// print "<li>" . $error_description . "</li>";
			print (!$error_description) ? '' : "<li>" . $error_description . "</li>";
			}
			?>
			</ul>
			</div>
			<?php endif; ?>

			<?php print form::open()
			?>
			
			<div class="row">
				<h4>Title</h4>
				<?php print form::input('title', $form['title'], ' class="text long"'); ?>
			</div>
			
			<div class="row">
				<h4>Description</h4>
				<?php print form::textarea('description', $form['description'], 'class="text long" cols="40"'); ?>
			</div>
			
			<div class="row">
				<h4>Latitute</h4>
				<?php print form::input('latitude', $form['latitude'], ' class="text long"'); ?>
			</div>
			
			<div class="row">
				<h4>Longitude</h4>
				<?php print form::input('longitude', $form['longitude'], ' class="text long"'); ?>
			</div>
			<div class="row">
				<h4>radius</h4>
				<?php print form::dropdown('radius', array(1=>1,5=>5,10=>10,20=>20,50=>50,100=>100), ' class="text long"'); ?>
			</div>
			
			<div class="row">
				<h4>Categories</h4>
				<?php print form::input('categories', $form['categories'], ' class="text long"'); ?>
			</div>


			<input id="btn-send-alerts" class="btn_submit" type="submit" value="Done" />
			<?php print form::close()?>
		
		</div>

	</div>
</div>