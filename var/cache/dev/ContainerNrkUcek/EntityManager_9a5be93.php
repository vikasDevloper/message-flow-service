<?php

namespace ContainerNrkUcek;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getConnection', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getMetadataFactory', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getExpressionBuilder', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'beginTransaction', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getCache', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getCache();
    }

    public function transactional($func)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'transactional', array('func' => $func), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'wrapInTransaction', array('func' => $func), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'commit', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->commit();
    }

    public function rollback()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'rollback', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getClassMetadata', array('className' => $className), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'createQuery', array('dql' => $dql), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'createNamedQuery', array('name' => $name), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'createQueryBuilder', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'flush', array('entity' => $entity), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'clear', array('entityName' => $entityName), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->clear($entityName);
    }

    public function close()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'close', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->close();
    }

    public function persist($entity)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'persist', array('entity' => $entity), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'remove', array('entity' => $entity), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'refresh', array('entity' => $entity), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'detach', array('entity' => $entity), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'merge', array('entity' => $entity), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getRepository', array('entityName' => $entityName), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'contains', array('entity' => $entity), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getEventManager', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getConfiguration', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'isOpen', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getUnitOfWork', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getProxyFactory', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'initializeObject', array('obj' => $obj), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'getFilters', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'isFiltersStateClean', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, 'hasFilters', array(), $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        return $this->valueHolder1ef06->hasFilters();
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

        $instance->initializercae52 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1ef06) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1ef06 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1ef06->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializercae52 && ($this->initializercae52->__invoke($valueHolder1ef06, $this, '__get', ['name' => $name], $this->initializercae52) || 1) && $this->valueHolder1ef06 = $valueHolder1ef06;

        if (isset(self::$publicProperties53ea3[$name])) {
            return $this->valueHolder1ef06->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
