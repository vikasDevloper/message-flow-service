<?php

namespace Symfony\Config\ApiPlatform\HttpCache\Invalidation;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class XkeyConfig 
{
    private $glue;
    
    /**
     * xkey glue between keys
     * @default ' '
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function glue($value): self
    {
        $this->glue = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['glue'])) {
            $this->glue = $value['glue'];
            unset($value['glue']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->glue) {
            $output['glue'] = $this->glue;
        }
    
        return $output;
    }
    

}
