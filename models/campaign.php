<?php defined('SYSPATH') or die('No direct script access.');



class Campaign_Model extends ORM{
		
	protected $table_name = 'campaign';
	
	public function validate(array & $post, $save = FALSE){
		$post = Validation::factory($post)
			->pre_filter('trim')
			->add_rules('title', 'required', 'length[4,255]')
			->add_rules('description', 'required', 'length[4,255]')
			->add_rules('latitude', 'required', 'between[-90,90]')
			->add_rules('longitude', 'required', 'between[-180,180]')
			->add_rules('radius','required','in_array[1,5,10,20,50,100]');
			
			return parent::validate($post, $save);
	}
}
