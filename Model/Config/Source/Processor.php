<?php
/**
 * Copyright © 2011-2018 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\Browser\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use Faonni\Browser\Model\Processor\ProcessorConfig;

/**
 * Source of option values in a form of value-label pairs
 */
class Processor implements ArrayInterface
{
    /**
     * @var \Faonni\Browser\Model\Processor\ProcessorConfig
     */
    protected $_config;

    /**
     * Options as value-label pairs
     * 
     * @var array
     */
    protected $_options;

    /**
     * @param \Faonni\Browser\Model\Processor\ProcessorConfig $config
     */
    public function __construct(
        ProcessorConfig $config
    ) {
        $this->_config = $config;
    }

    /**
     * Return array of options as value-label pairs
     *
     * @return array
     */
    public function toOptionArray()
    {
        if ($this->_options === null) {
            $this->_options = [];
            foreach ($this->_config->getAvailableProcessors() as $processorName) {
                $this->_options[] = [
                    'label' => $this->_config->getProcessorLabel($processorName),
                    'value' => $processorName,
                ];
            }
        }
        return $this->_options;
    }
} 
