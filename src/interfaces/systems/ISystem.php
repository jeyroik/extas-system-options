<?php
namespace extas\interfaces\systems;

use extas\interfaces\IItem;

interface ISystem extends IItem
{
    public const SUBJECT = 'extas.system';

    public function hasOption(string $name): bool;
    public function getOptionValue(string $name): mixed;
}
