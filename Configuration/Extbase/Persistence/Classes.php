<?php

return [
    \In2code\Femanager\Domain\Model\User::class => [
        'subclasses' => [
            \BalatD\FriendlyCaptcha\Domain\Model\Domain\User::class
        ]
    ],
    \BalatD\FriendlyCaptcha\Domain\Model\Domain\User::class => [
        'tableName' => 'fe_users',
        'recordType' => 0,
    ],
];