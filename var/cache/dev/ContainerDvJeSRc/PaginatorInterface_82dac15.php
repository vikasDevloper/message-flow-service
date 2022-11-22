<?php

namespace ContainerDvJeSRc;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2137d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7dff3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties79e52 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        if ($this->valueHolder2137d === $returnValue = $this->valueHolder2137d->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer7dff3 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder2137d) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder2137d = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, '__get', ['name' => $name], $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        if (isset(self::$publicProperties79e52[$name])) {
            return $this->valueHolder2137d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2137d;

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

        $targetObject = $this->valueHolder2137d;
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
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2137d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2137d;
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
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, '__isset', array('name' => $name), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2137d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2137d;
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
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, '__unset', array('name' => $name), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2137d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2137d;
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
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, '__clone', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        $this->valueHolder2137d = clone $this->valueHolder2137d;
    }

    public function __sleep()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, '__sleep', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return array('valueHolder2137d');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7dff3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7dff3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'initializeProxy', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2137d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2137d;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
