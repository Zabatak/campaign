<?php defined('SYSPATH') or die('No direct script access.');

class Campaign_Settings_Controller extends Admin_Controller {

	public function index() {
		//TODO: list all campaing
	}

	public function view($id = FALSE) {
		//TODO: view campaign
	}

	public function delete($id = FALSE) {

	}

	public function create() {
		
		$this->template->this_page = 'addon';
		$this->template->content = new View('campaign/admin/edit');
		$this->template->content->title = 'Create Campaign';
		// @formatter:off
		$form = array(
			'title'=>'',
			'description'=>'',
			'latitude'=>'',
			'longitude'=>'',
			'radius'=>'',
			'categories'=>'',
		);
		
		
		$errors = $form;
		$form_error = FALSE;
		$form_saved = FALSE;
		
		
		if($post = $this->input->post()){
			
			$model = new Campaign_Model();
			if($model->validate($post, TRUE)){
				//say saved successfully
				
			}else{
				 // repopulate the form fields
                $form = arr::overwrite($form, $post->as_array());

                // populate the error fields, if any
                $errors = arr::overwrite($errors, $post->errors('campaign'));
                $form_error = TRUE;
			}
			
		}
		
		
		$this->template->content->form = $form;
		$this->template->content->errors = $errors;
		$this->template->content->form_error = $form_error;
		$this->template->content->form_saved = $form_saved;
		
	}

	public function edit($id = FALSE) {
		//TODO: create or update campaign
	}

}
