<?php

namespace ContainerUqgVdOd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getConnection', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getMetadataFactory', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getExpressionBuilder', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'beginTransaction', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getCache', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'transactional', array('func' => $func), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'commit', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->commit();
    }

    public function rollback()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'rollback', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getClassMetadata', array('className' => $className), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'createQuery', array('dql' => $dql), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'createNamedQuery', array('name' => $name), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'createQueryBuilder', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'flush', array('entity' => $entity), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'clear', array('entityName' => $entityName), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->clear($entityName);
    }

    public function close()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'close', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->close();
    }

    public function persist($entity)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'persist', array('entity' => $entity), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'remove', array('entity' => $entity), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'refresh', array('entity' => $entity), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'detach', array('entity' => $entity), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'merge', array('entity' => $entity), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'contains', array('entity' => $entity), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getEventManager', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getConfiguration', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'isOpen', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getUnitOfWork', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getProxyFactory', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'initializeObject', array('obj' => $obj), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'getFilters', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'isFiltersStateClean', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, 'hasFilters', array(), $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        return $this->valueHolderd7b7d->hasFilters();
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

        $instance->initializerd09ff = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderd7b7d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd7b7d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd7b7d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerd09ff && ($this->initializerd09ff->__invoke($valueHolderd7b7d, $this, '__get', ['name' => $name], $this->initializerd09ff) || 1) && $this->valueHolderd7b7d = $valueHolderd7b7d;

        if (isset(self::$publicProperties4f5fd[$name])) {
            return $this->valueHolderd7b7d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
