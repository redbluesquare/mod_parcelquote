<?php
defined('_JEXEC') or die;
?>

<div class="<?php echo $params->get('moduleclass_sfx');?>">
	<div><?php echo $params->get('moduleclass_sfx');?></div>
	
	<form method="post" name="parcelquote_frm">
	<fieldset>
		<field name="zone" type="radio" default="0" label="Destination Loction" description="The destination of where you are sending the parcel">
  			<option value="1">England / Wales / Scotland</option>
  			<option value="2">Scottish Highlands</option>
  			<option value="3">Scottish Islands / Isle of Wight</option>
  			<option value="4">Isle of Man</option>
  			<option value="5">Ireland</option>
		</field>
		<field name="service" type="list" default="" label="Select your Sevice" description="Select which service you would like">
  			<option value="Next Day">Next Day</option>
  			<option value="Before 12pm">Before 12pm</option>
  			<option value="Before 10.30am">Before 10.30am</option>
  			<option value="Before 9am">Before 9am</option>
		</field>
		<label for="weight">Weight (KG):</label>
		<input type="text" name="weight" id="weight" style="width:50%;" />
		
		<button type="submit">Submit</button>
	</fieldset>
	
		<input type="hidden" name="check" value="1" />
	</form>
	
	
	<div><?php echo $params->get('moduleclass_sfx');?></div>
</div>