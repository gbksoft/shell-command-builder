<?php
/**
 * Copyright © 2016 GBKSOFT. Web and Mobile Software Development.
 * See LICENSE.txt for license details.
 */
namespace Gbksoft\Shell\Command;

use Gbksoft\Shell\AbstractInput;

/**
 * Class Option
 */
class Option extends AbstractInput
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * Option constructor.
     *
     * @param string $name
     * @param string $value
     */
    public function __construct($name, $value)
    {
        $this->name = new Flag($name);
        $this->value = new Argument($value);
    }

    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return sprintf('%s=%s', $this->name, $this->value);
    }
}
