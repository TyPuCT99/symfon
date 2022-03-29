<?php

namespace ContainerAhtZBlf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercf3de = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer56808 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties076d3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getConnection', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getMetadataFactory', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getExpressionBuilder', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'beginTransaction', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getCache', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getCache();
    }

    public function transactional($func)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'transactional', array('func' => $func), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'wrapInTransaction', array('func' => $func), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'commit', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->commit();
    }

    public function rollback()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'rollback', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getClassMetadata', array('className' => $className), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'createQuery', array('dql' => $dql), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'createNamedQuery', array('name' => $name), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'createQueryBuilder', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'flush', array('entity' => $entity), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'clear', array('entityName' => $entityName), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->clear($entityName);
    }

    public function close()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'close', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->close();
    }

    public function persist($entity)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'persist', array('entity' => $entity), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'remove', array('entity' => $entity), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'refresh', array('entity' => $entity), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'detach', array('entity' => $entity), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'merge', array('entity' => $entity), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getRepository', array('entityName' => $entityName), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'contains', array('entity' => $entity), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getEventManager', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getConfiguration', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'isOpen', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getUnitOfWork', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getProxyFactory', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'initializeObject', array('obj' => $obj), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'getFilters', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'isFiltersStateClean', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'hasFilters', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return $this->valueHoldercf3de->hasFilters();
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

        $instance->initializer56808 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercf3de) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercf3de = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercf3de->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, '__get', ['name' => $name], $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        if (isset(self::$publicProperties076d3[$name])) {
            return $this->valueHoldercf3de->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf3de;

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

        $targetObject = $this->valueHoldercf3de;
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
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf3de;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercf3de;
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
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, '__isset', array('name' => $name), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf3de;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercf3de;
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
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, '__unset', array('name' => $name), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf3de;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercf3de;
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
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, '__clone', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        $this->valueHoldercf3de = clone $this->valueHoldercf3de;
    }

    public function __sleep()
    {
        $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, '__sleep', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;

        return array('valueHoldercf3de');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer56808 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer56808;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer56808 && ($this->initializer56808->__invoke($valueHoldercf3de, $this, 'initializeProxy', array(), $this->initializer56808) || 1) && $this->valueHoldercf3de = $valueHoldercf3de;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercf3de;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercf3de;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
