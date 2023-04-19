<?php

namespace ContainerZP5moeJ;
include_once \dirname(__DIR__, 6).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 6).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorProxyCcd92f4 implements \Knp\Component\Pager\PaginatorInterface, \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];

    public function initializeLazyObject(): \Knp\Component\Pager\PaginatorInterface
    {
        if ($state = $this->lazyObjectState ?? null) {
            return $state->realInstance ??= ($state->initializer)();
        }

        return $this;
    }

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []): \Knp\Component\Pager\Pagination\PaginationInterface
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->paginate(...\func_get_args());
        }

        return throw new \BadMethodCallException('Cannot forward abstract method "Knp\Component\Pager\PaginatorInterface::paginate()".');
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PaginatorProxyCcd92f4', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorProxyCcd92f4', 'PaginatorProxyCcd92f4', false);
}
