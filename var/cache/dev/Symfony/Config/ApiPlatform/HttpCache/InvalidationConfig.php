<?php

namespace Symfony\Config\ApiPlatform\HttpCache;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Invalidation'.\DIRECTORY_SEPARATOR.'XkeyConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class InvalidationConfig 
{
    private $enabled;
    private $varnishUrls;
    private $maxHeaderLength;
    private $requestOptions;
    private $purger;
    private $xkey;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function varnishUrls($value): self
    {
        $this->varnishUrls = $value;
    
        return $this;
    }
    
    /**
     * Max header length supported by the server
     * @default 7500
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxHeaderLength($value): self
    {
        $this->maxHeaderLength = $value;
    
        return $this;
    }
    
    /**
     * To pass options to the client charged with the request.
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function requestOptions($value = array (
    )): self
    {
        $this->requestOptions = $value;
    
        return $this;
    }
    
    /**
     * Specify a varnish purger to use (available values: "api_platform.http_cache.purger.varnish.ban" or "api_platform.http_cache.purger.varnish.xkey").
     * @default 'api_platform.http_cache.purger.varnish'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function purger($value): self
    {
        $this->purger = $value;
    
        return $this;
    }
    
    public function xkey(array $value = []): \Symfony\Config\ApiPlatform\HttpCache\Invalidation\XkeyConfig
    {
        if (null === $this->xkey) {
            $this->xkey = new \Symfony\Config\ApiPlatform\HttpCache\Invalidation\XkeyConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "xkey()" has already been initialized. You cannot pass values the second time you call xkey().');
        }
    
        return $this->xkey;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['varnish_urls'])) {
            $this->varnishUrls = $value['varnish_urls'];
            unset($value['varnish_urls']);
        }
    
        if (isset($value['max_header_length'])) {
            $this->maxHeaderLength = $value['max_header_length'];
            unset($value['max_header_length']);
        }
    
        if (isset($value['request_options'])) {
            $this->requestOptions = $value['request_options'];
            unset($value['request_options']);
        }
    
        if (isset($value['purger'])) {
            $this->purger = $value['purger'];
            unset($value['purger']);
        }
    
        if (isset($value['xkey'])) {
            $this->xkey = new \Symfony\Config\ApiPlatform\HttpCache\Invalidation\XkeyConfig($value['xkey']);
            unset($value['xkey']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->varnishUrls) {
            $output['varnish_urls'] = $this->varnishUrls;
        }
        if (null !== $this->maxHeaderLength) {
            $output['max_header_length'] = $this->maxHeaderLength;
        }
        if (null !== $this->requestOptions) {
            $output['request_options'] = $this->requestOptions;
        }
        if (null !== $this->purger) {
            $output['purger'] = $this->purger;
        }
        if (null !== $this->xkey) {
            $output['xkey'] = $this->xkey->toArray();
        }
    
        return $output;
    }
    

}
