<?php

namespace ContainerYj7hi0O;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6dfe9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3db29 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc8505 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        if ($this->valueHolder6dfe9 === $returnValue = $this->valueHolder6dfe9->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer3db29 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder6dfe9) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder6dfe9 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, '__get', ['name' => $name], $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        if (isset(self::$publicPropertiesc8505[$name])) {
            return $this->valueHolder6dfe9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6dfe9;

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

        $targetObject = $this->valueHolder6dfe9;
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
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6dfe9;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6dfe9;
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
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, '__isset', array('name' => $name), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6dfe9;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6dfe9;
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
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, '__unset', array('name' => $name), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6dfe9;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6dfe9;
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
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, '__clone', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        $this->valueHolder6dfe9 = clone $this->valueHolder6dfe9;
    }

    public function __sleep()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, '__sleep', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return array('valueHolder6dfe9');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3db29 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3db29;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'initializeProxy', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6dfe9;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6dfe9;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
