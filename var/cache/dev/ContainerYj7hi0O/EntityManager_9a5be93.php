<?php

namespace ContainerYj7hi0O;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getConnection', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getMetadataFactory', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getExpressionBuilder', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'beginTransaction', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getCache', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'transactional', array('func' => $func), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'commit', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->commit();
    }

    public function rollback()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'rollback', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getClassMetadata', array('className' => $className), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'createQuery', array('dql' => $dql), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'createNamedQuery', array('name' => $name), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'createQueryBuilder', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'flush', array('entity' => $entity), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'clear', array('entityName' => $entityName), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->clear($entityName);
    }

    public function close()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'close', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->close();
    }

    public function persist($entity)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'persist', array('entity' => $entity), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'remove', array('entity' => $entity), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'refresh', array('entity' => $entity), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'detach', array('entity' => $entity), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'merge', array('entity' => $entity), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'contains', array('entity' => $entity), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getEventManager', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getConfiguration', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'isOpen', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getUnitOfWork', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getProxyFactory', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'initializeObject', array('obj' => $obj), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'getFilters', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'isFiltersStateClean', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, 'hasFilters', array(), $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        return $this->valueHolder6dfe9->hasFilters();
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

        $instance->initializer3db29 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6dfe9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6dfe9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6dfe9->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer3db29 && ($this->initializer3db29->__invoke($valueHolder6dfe9, $this, '__get', ['name' => $name], $this->initializer3db29) || 1) && $this->valueHolder6dfe9 = $valueHolder6dfe9;

        if (isset(self::$publicPropertiesc8505[$name])) {
            return $this->valueHolder6dfe9->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
