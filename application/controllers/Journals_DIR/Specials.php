<?php

class Specials extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
	}
	
	public function get_specials_journal(){
		return $this->load->view($this->layout,  ['head_css'=>'fragments/head_css/journals/journals', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/journals/specials_journal', 'footer_js'=>'fragments/footer_js/journals/specials_journal', 'back_button'=>'home', 'title'=>'Specials Journal', 'active_nav'=>'journals']);
	}
}