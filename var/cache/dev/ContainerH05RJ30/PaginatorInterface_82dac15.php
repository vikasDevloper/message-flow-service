<?php

namespace ContainerH05RJ30;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1ef06 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercae52 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties53ea3 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        if ($this->valueHolder1ef06 === $returnValue = $this->valueHolder1ef06->paginate($target, $page, $limit, $options)) {
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

        $instance->initializercae52 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder1ef06) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder1ef06 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, '__get', ['name' => $name], $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        if (isset(self::$publicProperties53ea3[$name])) {
            return $this->valueHolder1ef06->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ef06;

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

        $targetObject = $this->valueHolder1ef06;
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
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ef06;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1ef06;
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
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, '__isset', array('name' => $name), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ef06;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1ef06;
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
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, '__unset', array('name' => $name), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1ef06;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1ef06;
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
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, '__clone', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        $this->valueHolder1ef06 = clone $this->valueHolder1ef06;
    }

    public function __sleep()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, '__sleep', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return array('valueHolder1ef06');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercae52 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercae52;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'initializeProxy', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1ef06;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1ef06;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
