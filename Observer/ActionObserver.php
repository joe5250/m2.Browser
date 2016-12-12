<?php
/**
 * Faonni
 *  
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 * 
 * @package     Faonni_Browser
 * @copyright   Copyright (c) 2016 Karliuka Vitalii(karliuka.vitalii@gmail.com) 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Faonni\Browser\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

/**
 * Action predispatch observer
 */
class ActionObserver implements ObserverInterface
{
    /**
     * Handler for action predispatch event
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {

		return $this;
    }
} 
