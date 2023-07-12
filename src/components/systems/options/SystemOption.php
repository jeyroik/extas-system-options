<?php
namespace extas\components\systems\options;
use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasStringId;
use extas\components\THasValue;
use extas\interfaces\systems\options\ISystemOption;

class SystemOption extends Item implements ISystemOption
{
    use THasName;
    use THasDescription;
    use THasValue;
    use THasStringId;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
