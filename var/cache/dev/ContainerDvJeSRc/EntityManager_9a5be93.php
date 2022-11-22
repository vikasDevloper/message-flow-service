<?php

namespace ContainerDvJeSRc;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getConnection', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getMetadataFactory', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getExpressionBuilder', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'beginTransaction', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getCache', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'transactional', array('func' => $func), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'commit', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->commit();
    }

    public function rollback()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'rollback', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getClassMetadata', array('className' => $className), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'createQuery', array('dql' => $dql), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'createNamedQuery', array('name' => $name), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'createQueryBuilder', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'flush', array('entity' => $entity), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'clear', array('entityName' => $entityName), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->clear($entityName);
    }

    public function close()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'close', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->close();
    }

    public function persist($entity)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'persist', array('entity' => $entity), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'remove', array('entity' => $entity), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'refresh', array('entity' => $entity), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'detach', array('entity' => $entity), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'merge', array('entity' => $entity), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'contains', array('entity' => $entity), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getEventManager', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getConfiguration', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'isOpen', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getUnitOfWork', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getProxyFactory', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'initializeObject', array('obj' => $obj), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'getFilters', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'isFiltersStateClean', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, 'hasFilters', array(), $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        return $this->valueHolder2137d->hasFilters();
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

        $instance->initializer7dff3 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder2137d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2137d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2137d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer7dff3 && ($this->initializer7dff3->__invoke($valueHolder2137d, $this, '__get', ['name' => $name], $this->initializer7dff3) || 1) && $this->valueHolder2137d = $valueHolder2137d;

        if (isset(self::$publicProperties79e52[$name])) {
            return $this->valueHolder2137d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
