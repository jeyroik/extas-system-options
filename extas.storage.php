<?php

use extas\components\repositories\RepoItem;

return [
    'name' => 'jeyroik/extas-system-options',
    "tables" => [
        "system_options" => [
            "namespace" => "extas\\repositories",
            "item_class" => "extas\\components\\systems\\options\\SystemOption",
            "pk" => "id",
            "aliases" => ["systemOptions"],
            "code" => [
                'create-before' => '\\' . RepoItem::class . '::setId($item);'
                                  .'\\' . RepoItem::class . '::throwIfExist($this, $item, [\'name\']);'
            ]
        ]
    ]
];
