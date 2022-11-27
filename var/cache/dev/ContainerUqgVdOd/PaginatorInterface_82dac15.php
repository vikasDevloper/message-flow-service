<?php

namespace ContainerUqgVdOd;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd7b7d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd09ff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4f5fd = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        if ($this->valueHolderd7b7d === $returnValue = $this->valueHolderd7b7d->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializerd09ff = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderd7b7d) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderd7b7d = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, '__get', ['name' => $name], $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        if (isset(self::$publicProperties4f5fd[$name])) {
            return $this->valueHolderd7b7d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7b7d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd7b7d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7b7d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd7b7d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, '__isset', array('name' => $name), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7b7d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd7b7d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, '__unset', array('name' => $name), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7b7d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd7b7d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, '__clone', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        $this->valueHolderd7b7d = clone $this->valueHolderd7b7d;
    }

    public function __sleep()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, '__sleep', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return array('valueHolderd7b7d');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd09ff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd09ff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'initializeProxy', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd7b7d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd7b7d;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
