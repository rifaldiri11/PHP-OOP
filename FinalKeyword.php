<?php

class SocialMedia
{
    public string $name;
}

// kata kunci final berarti class dan function tsb tidak
// dapat di turunkan/override lagi ke class childnya
// baik final class atau pun final function
final class Facebook extends SocialMedia
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

// ERROR karena class Facebook itu sudah final
class FakeFacebook extends Facebook
{
    // public function login(string $username, string $password): bool
    // {
    //     return false;
    // }
}
