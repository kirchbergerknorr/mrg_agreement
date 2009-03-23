<?php
/**
 * @category    Symmetrics
 * @package     Symmetrics_Agreement
 * @author      symmetrics gmbh <info@symmetrics.de>, Eugen Gitin <eg@symmetrics.de>
 */
class Symmetrics_Agreement_Block_Agreement extends Mage_Checkout_Block_Agreements 
{
    /**
     * Append some legal order information from orderinfo.phtml to agreements
     *
     * @return string
     */
    protected function _toHtml()
    {
        $html = parent::_toHtml();

        // TODO: SYM: @eg Add event to observe _toHtml-Event        

        $_layout = Mage::app()->getFrontController()->getAction()->getLayout();
        $template = $_layout->createBlock('core/template')->setTemplate('agreement/orderinfo.phtml')->toHtml();

        $html .= $template;
         
        return $html;
    }
}