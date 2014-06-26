<?php 
defined('C5_EXECUTE') or die("Access Denied.");

class BgSelectorBlockController extends BlockController {

	var $pobj;

	protected $btTable = 'btBgSelectorBlockContent';
	protected $btInterfaceWidth = "400";
	protected $btInterfaceHeight = "165";
	protected $btWrapperClass = 'ccm-ui';

	// enable block caches
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	public $selectedBg = 0;	
	
	public function getBlockTypeName() {
		return t("Background Selector");
	}

	public function getBlockTypeDescription() {
		return t("Allows user to select a per-page background.");
	}
	
	public function __construct($obj = null) {		
		parent::__construct($obj); 
	}
	
	public function view(){ 
	} 
	
	function add() {
	}
	
	function edit() {
		$this->set('selectedBg', $this->selectedBg); 
	}
	
	public function save($data) { 
		$args['selectedBg'] = isset($data['selectedBg']) ? $data['selectedBg'] : '';
		$args['appliedClass'] = isset($data['appliedClass']) ? $data['appliedClass'] : '';
		$args['backgroundRepeat'] = isset($data['backgroundRepeat']) ? $data['backgroundRepeat'] : '';
		$args['backgroundAttachment'] = isset($data['backgroundAttachment']) ? $data['backgroundAttachment'] : '';
		$args['backgroundPosition'] = isset($data['backgroundPosition']) ? $data['backgroundPosition'] : '';
		$args['backgroundPositionCustom'] = isset($data['backgroundPositionCustom']) ? $data['backgroundPositionCustom'] : '';
		$args['backgroundSize'] = isset($data['backgroundSize']) ? $data['backgroundSize'] : '';
		parent::save($args);
	}

}
?>