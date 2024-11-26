<?php

// config for Xbigdaddyx/Beverly
return [
    'tenant' => \Xbigdaddyx\Fuse\Domain\Company\Models\Company::class,
    'tenant_foreign_key' => 'company_id',
    'tenant_other_key' => 'id',
    'models' => [
        'user' => \Xbigdaddyx\Fuse\Domain\User\Models\User::class,
    ]
];
