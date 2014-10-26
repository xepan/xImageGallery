<?php

namespace xImageGallery;

class Model_Images extends \Model_Table {
	public $table ='xImageGallery_images';

	function init(){
		parent::init();
		
		$this->hasOne('xImageGallery/Gallery','gallery_id');
			
		$this->addField('image_url')->display(array('form'=>'ElImage'));
		$this->addField('title');
		$this->addField('name')->type('text')->display(array('form'=>'RichText'))->defaultValue('<p></p>')->caption('Description');
		$this->addField('is_publish')->type('boolean')->defaultValue(true);
						
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}	