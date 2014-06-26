<?php  
defined('C5_EXECUTE') or die("Access Denied.");
// load needed helpers
Loader::helper('file');
Loader::helper('concrete/file');
Loader::model('file_attributes');
Loader::library('file/types');
$al = Loader::helper('concrete/asset_library');

// view settings
// repeat options
$repeat_arr = array();
$repeat_arr[''] = '';
$repeat_arr['repeat'] = 'repeat';
$repeat_arr['no-repeat'] = 'no-repeat';
$repeat_arr['repeat-x'] = 'repeat-x';
$repeat_arr['repeat-y'] = 'repeat-y';

// background attachement options
$background_attachment = array();
$background_attachment[''] = '';
$background_attachment['scroll'] = 'scroll';
$background_attachment['fixed'] = 'fixed';
$background_attachment['cover'] = 'cover';
$background_attachment['local'] = 'local';
$background_attachment['initial'] = 'initial';
$background_attachment['inherit'] = 'inherit';

// background position
$background_position = array();
$background_position[''] = '';
$background_position['left top'] = 'left top';
$background_position['left center'] = 'left center';
$background_position['left bottom'] = 'left bottom';
$background_position['right top'] = 'right top';
$background_position['right center'] = 'right center';
$background_position['right bottom'] = 'right bottom';
$background_position['center top'] = 'center top';
$background_position['center center'] = 'center center';
$background_position['center bottom'] = 'center bottom';
$background_position['custom'] = 'custom';

// background size
$background_size = array();
$background_size[''] = '';
$background_size['fill-height'] = 'fill-height';
$background_size['fill-width'] = 'fill-width';
$background_size['fill-height-width'] = 'fill-height-width';

if ($selectedBg > 0) {
	$selectedBg = File::getByID($selectedBg);
}
?>
<div class="clearfix">
	<label class="control-label" for="selectedBg"><?php  echo t('Background Image')?></label>
	<div class="input">
		<?php         echo $al->image('ccm-b-image-file', 'selectedBg', t('Choose Preview Image'),$selectedBg );?>
	</div>
</div>
<div class="clearfix">
	<label class="control-label" for="appliedClass"><?php  echo t('Applied Class or ID')?></label>
	<div class="input">
		<input type="text" style="width: 140px" id="appliedClass" name="appliedClass" value="<?php echo ($appliedClass != '' ? $appliedClass : '.media-block-wrap'); ?>" />
	</div>
</div>
<div class="clearfix">
	<label class="control-label" for="backgroundRepeat"><?php  echo t('Background Repeat')?></label>
	<select name="backgroundRepeat" id="backgroundRepeat">
	    <?php  
		foreach ( $repeat_arr as $repeat_id => $cur_repeat ) {
			echo '<option value="' . $repeat_id . '"' . ($repeat_id == $backgroundRepeat ? ' selected ' : ' ') . '>' . $cur_repeat . '</option>';
		}
		?>
    </select>		
</div>
<div class="clearfix">
	<label class="control-label" for="backgroundAttachment"><?php  echo t('Background Attachement')?></label>
	<select name="backgroundAttachment" id="backgroundAttachment">
	    <?php  
		foreach ( $background_attachment as $backgroundAttachment_id => $cur_backgroundAttachment ) {
			echo '<option value="' . $backgroundAttachment_id . '"' . ($backgroundAttachment_id == $backgroundAttachment ? ' selected ' : ' ') . '>' . $cur_backgroundAttachment . '</option>';
		}
		?>
    </select>		
</div>
<div class="clearfix">
	<label class="control-label" for="backgroundPosition"><?php  echo t('Background Position')?></label>
	<select name="backgroundPosition" id="backgroundPosition">
	    <?php  
		foreach ( $background_position as $backgroundPosition_id => $cur_backgroundPosition ) {
			echo '<option value="' . $backgroundPosition_id . '"' . ($backgroundPosition_id == $backgroundPosition ? ' selected ' : ' ') . '>' . $cur_backgroundPosition . '</option>';
		}
		?>
    </select>		
</div>
<div class="clearfix">
	<label class="control-label" for="backgroundPositionCustom"><?php  echo t('Background Position Custom')?></label>
	<div class="input">
		<input type="text" style="width: 140px" id="backgroundPositionCustom" name="backgroundPositionCustom" value="<?php echo $backgroundPositionCustom; ?>" />
	</div>
</div>
<div class="clearfix">
	<label class="control-label" for="backgroundSize"><?php  echo t('Background Size')?></label>
	<select name="backgroundSize" id="backgroundSize">
	    <?php  
		foreach ( $background_size as $backgroundSize_id => $cur_backgroundSize ) {
			echo '<option value="' . $backgroundSize_id . '"' . ($backgroundSize_id == $backgroundSize ? ' selected ' : ' ') . '>' . $cur_backgroundSize . '</option>';
		}
		?>
    </select>		
</div>
