<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\GraphQL;
use App\Models\User;

class UserQuery extends Query
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'A query'
    ];

    public function type()
    {
        // return Type::listOf(Type::string());
        return GraphQL::type('UserType');
    }

    public function args()
    {
        // return [
        //     'name' => [
        //         'type' => Type::nonNull(Type::string())
        //     ],
        //     'email' => [
        //         'type' => Type::nonNull(Type::string()),
        //         'rules' => ['email', 'unique:users']
        //     ],
        //     'password' => [
        //         'type' => Type::nonNull(Type::string()),
        //         'rules' => ['min:4']
        //     ],
        // ];

        return [
            'id' => [
                'type' => Type::nonNull(Type::int())
            ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        return User::find($args['id']);
    }
} 