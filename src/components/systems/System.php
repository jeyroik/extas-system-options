<?php
namespace extas\components\systems;

use extas\components\Item;
use extas\interfaces\repositories\IRepository;
use extas\interfaces\systems\ISystem;
use extas\interfaces\systems\options\ISystemOption;

/**
 * @method IRepository systemOptions()
 */
class System extends Item implements ISystem
{
    /**
     * System options cache
     *
     * @var ISystemOption[]
     */
    protected array $cache = [];

    public function hasOption(string $name): bool
    {
        if (isset($this->cache[$name])) {
            return true;
        }

        $option = $this->systemOptions()->one([ISystemOption::FIELD__NAME => $name]);

        if ($option) {
            $this->cache[$name] = $option;
            return true;
        }

        return false;
    }

    public function getOptionValue(string $name): mixed
    {
        if (isset($this->cache[$name])) {
            return $this->cache[$name]->getValue();
        }

        $option = $this->systemOptions()->one([ISystemOption::FIELD__NAME => $name]);

        if ($option) {
            $this->cache[$name] = $option;
            return $option->getValue();
        }

        return null;
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
