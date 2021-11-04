<?php
namespace denkorolkov\ajaxcrud;

use yii\base\Widget;
use yii\bootstrap5\Html;

class BulkButtonWidget extends Widget{

	public $buttons;
	public $buttonText = '<span class="fas fa-arrow-right"></span>&nbsp;&nbsp;With selected&nbsp;&nbsp;';

	public function init(){
		parent::init();

	}

	public function run(){
		$content = '<div class="float-left">'.
                   $this->buttonText.
                   $this->buttons.
                   '</div>';
		return $content;
	}
}
?>
