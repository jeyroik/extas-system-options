<?php
namespace extas\interfaces\systems\options;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHasValue;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface ISystemOption extends IItem, IHasName, IHasDescription, IHasValue, IHaveUUID
{
    public const SUBJECT = 'extas.system.option';
}
