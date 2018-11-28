<?php
namespace Mmsbuilder\Bannersliderapp\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    protected $_idFieldName = 'banner_id';
    protected function _construct()
    {
        $this->_init('Mmsbuilder\Bannersliderapp\Model\Grid', 'Mmsbuilder\Bannersliderapp\Model\ResourceModel\Grid');
    }
}
