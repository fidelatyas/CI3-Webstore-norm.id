<!-- WARNING MESSAGE -->
<div class="ui mini modal warning">
  	<div class="header">WARNING</div>
	<div class="content">
		<p></p>
	</div>
	<div class="actions">
	    <button class="cancel main red small">Close</button>
	</div>
</div>




<!-- SUCCESS MESSAGE -->
<div class="ui mini modal success">
  	<div class="header">SUCCESS</div>
	<div class="content">
		<p></p>
	</div>
	<div class="actions">
		<a href="#">
		    <button class="main blue small success-add">Add Another Data</button>
		</a>

		<a href="#">
		    <button class="main red small success-back">Return</button>
		</a>
	</div>
</div>




<!-- About Modal -->
<div class="ui about tiny modal">
  	<div class="header text-center">About <?= $setting->system_product_name; ?> v.<?= $setting->system_version; ?></div>
  	<div class="content text-center">
	    <div class="font-bold font-14"><?= $setting->system_product_name; ?></div>
	    <div class="font-bold font-14"><?= $setting->system_vendor_name; ?></div>
	    <div>V. <?= $setting->system_version; ?> <?= $setting->system_product; ?></div>
	    <div>Developed by: <?= $setting->system_vendor_name; ?></div>
  	</div>
  	<div class="actions">
    	<button class="main red small cancel">Close</button>
  	</div>
</div>