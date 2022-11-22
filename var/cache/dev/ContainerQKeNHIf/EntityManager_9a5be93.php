<?php

namespace ContainerQKeNHIf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder51be3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc50a6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties445f0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getConnection', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getMetadataFactory', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getExpressionBuilder', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'beginTransaction', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getCache', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'transactional', array('func' => $func), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'commit', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->commit();
    }

    public function rollback()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'rollback', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getClassMetadata', array('className' => $className), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'createQuery', array('dql' => $dql), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'createNamedQuery', array('name' => $name), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'createQueryBuilder', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'flush', array('entity' => $entity), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'clear', array('entityName' => $entityName), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->clear($entityName);
    }

    public function close()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'close', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->close();
    }

    public function persist($entity)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'persist', array('entity' => $entity), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'remove', array('entity' => $entity), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'refresh', array('entity' => $entity), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'detach', array('entity' => $entity), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'merge', array('entity' => $entity), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'contains', array('entity' => $entity), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getEventManager', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getConfiguration', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'isOpen', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getUnitOfWork', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getProxyFactory', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'initializeObject', array('obj' => $obj), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'getFilters', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'isFiltersStateClean', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'hasFilters', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return $this->valueHolder51be3->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc50a6 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder51be3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder51be3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder51be3->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, '__get', ['name' => $name], $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        if (isset(self::$publicProperties445f0[$name])) {
            return $this->valueHolder51be3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51be3;

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

        $targetObject = $this->valueHolder51be3;
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
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51be3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder51be3;
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
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, '__isset', array('name' => $name), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51be3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder51be3;
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
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, '__unset', array('name' => $name), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51be3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder51be3;
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
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, '__clone', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        $this->valueHolder51be3 = clone $this->valueHolder51be3;
    }

    public function __sleep()
    {
        $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, '__sleep', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;

        return array('valueHolder51be3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc50a6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc50a6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc50a6 && ($this->initializerc50a6->__invoke($valueHolder51be3, $this, 'initializeProxy', array(), $this->initializerc50a6) || 1) && $this->valueHolder51be3 = $valueHolder51be3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder51be3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder51be3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
