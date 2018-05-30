<?php
class Aurigait_Homepage_Block_Adminhtml_Slider_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("slider_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("homepage")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("homepage")->__("Item Information"),
				"title" => Mage::helper("homepage")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("homepage/adminhtml_slider_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
