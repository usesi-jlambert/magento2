<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\View\Design\Fallback\Rule;

use Magento\Framework\ObjectManagerInterface;

/**
 * Class \Magento\Framework\View\Design\Fallback\Rule\ThemeFactory
 *
 */
class ThemeFactory
{
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Create rule instance
     *
     * @param array $data
     * @return \Magento\Framework\View\Design\Fallback\Rule\Theme
     */
    public function create(array $data = [])
    {
        return $this->objectManager->create(\Magento\Framework\View\Design\Fallback\Rule\Theme::class, $data);
    }
}
