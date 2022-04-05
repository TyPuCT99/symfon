<?php

namespace ContainerNjdBZMR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercf6cc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4bfaa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8a472 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getConnection', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getMetadataFactory', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getExpressionBuilder', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'beginTransaction', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getCache', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'transactional', array('func' => $func), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'commit', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->commit();
    }

    public function rollback()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'rollback', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getClassMetadata', array('className' => $className), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'createQuery', array('dql' => $dql), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'createNamedQuery', array('name' => $name), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'createQueryBuilder', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'flush', array('entity' => $entity), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'clear', array('entityName' => $entityName), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->clear($entityName);
    }

    public function close()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'close', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->close();
    }

    public function persist($entity)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'persist', array('entity' => $entity), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'remove', array('entity' => $entity), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'refresh', array('entity' => $entity), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'detach', array('entity' => $entity), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'merge', array('entity' => $entity), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'contains', array('entity' => $entity), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getEventManager', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getConfiguration', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'isOpen', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getUnitOfWork', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getProxyFactory', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'initializeObject', array('obj' => $obj), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'getFilters', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'isFiltersStateClean', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'hasFilters', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return $this->valueHoldercf6cc->hasFilters();
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

        $instance->initializer4bfaa = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercf6cc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercf6cc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercf6cc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, '__get', ['name' => $name], $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        if (isset(self::$publicProperties8a472[$name])) {
            return $this->valueHoldercf6cc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf6cc;

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

        $targetObject = $this->valueHoldercf6cc;
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
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf6cc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercf6cc;
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
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, '__isset', array('name' => $name), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf6cc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercf6cc;
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
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, '__unset', array('name' => $name), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf6cc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercf6cc;
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
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, '__clone', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        $this->valueHoldercf6cc = clone $this->valueHoldercf6cc;
    }

    public function __sleep()
    {
        $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, '__sleep', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;

        return array('valueHoldercf6cc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4bfaa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4bfaa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4bfaa && ($this->initializer4bfaa->__invoke($valueHoldercf6cc, $this, 'initializeProxy', array(), $this->initializer4bfaa) || 1) && $this->valueHoldercf6cc = $valueHoldercf6cc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercf6cc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercf6cc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
