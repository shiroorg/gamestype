<?php

namespace GameType\Src;

class GameAbstract implements GameNameInterface {

    /**
     * Массив для ключей переводов
     * @var array
     */
    private $name = [];

    /***
     * Возрашает человекопонятное название
     * @param $key
     * @return mixed
     */
    public function getNameGame($key)
    {
        return $this->name[$key];
    }

}
