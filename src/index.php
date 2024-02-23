<?php

use function Funct\Collection\flatten;

function getChildren($users)
{
    $names = array_map(fn($user) => $user['children'], $users);
    return flatten($names);
}

$users = [
    ['name' => 'Tirion', 'children' => [
        ['name' => 'Mira', 'birthday' => '1983-03-23']
    ]],
    ['name' => 'Bronn', 'children' => []],
    ['name' => 'Sam', 'children' => [
        ['name' => 'Aria', 'birthday' => '2012-11-03'],
        ['name' => 'Keit', 'birthday' => '1933-05-14']
    ]],
    ['name' => 'Rob', 'children' => [
        ['name' => 'Tisha', 'birthday' => '2012-11-03']
    ]],
];

print_r(getChildren($users));