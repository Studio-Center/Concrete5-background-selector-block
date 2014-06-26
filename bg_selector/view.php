<?php
defined('C5_EXECUTE') or die("Access Denied."); // permissions
// load needed helpers
Loader::helper('file');
Loader::helper('concrete/file');
Loader::model('file_attributes');
Loader::library('file/types');

$poster = File::getByID($selectedBg);
$rel_poster_path=$poster->getRelativePath(); 
// determine background position
if($backgroundPosition == 'custom'){
	$backgroundPosition = $backgroundPositionCustom;
}
?>
<style>
<?php echo $appliedClass; ?>{
	background:url('<?php echo $rel_poster_path; ?>') <?php echo $backgroundRepeat; ?> <?php echo $backgroundPosition; ?> <?php echo ($backgroundAttachment == 'cover' ? 'fixed' : $backgroundAttachment); ?> !important;
	<?php 
	if($backgroundAttachment == 'cover'){
	?>
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	-o-background-size: cover !important;
	background-size: cover !important;
	<?php
	}
	if($backgroundSize != ''){
		switch($backgroundSize){
			case 'fill-height':
				echo 'background-size: auto 100% !important;';
			break;
			case 'fill-width':
				echo 'background-size: 100% auto !important;';
			break;
			case 'fill-height-width':
				echo 'background-size: 100% 100% !important;';
			break;
		}
	}
	?>
}
</style>