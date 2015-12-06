<?php

namespace App;

use Illuminate\Contracts\Hashing\Hasher as HasherContract;

class ShaHasher implements HasherContract
{
    /**
     * @param $value
     * @param array $options
     */
    public function make($value, array $options = array())
    {
        $value = env('SALT', '') . $value;
        return sha1($value);
    }

    /**
     * @param $value
     * @param $hashedValue
     * @param array $options
     * @return mixed
     */
    public function check($value, $hashedValue, array $options = array())
    {
        return $this->make($value) === $hashedValue;
    }

    /**
     * @param $hashedValue
     * @param array $options
     */
    public function needsRehash($hashedValue, array $options = array())
    {
        return false;
    }
}
