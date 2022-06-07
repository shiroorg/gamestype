<?php

namespace GameType\Src;

class GameAbstract implements GameNameInterface, GameRangInterface, GameRoleInterface {

    /**
     * Массив для ключей переводов
     * @var array
     */
    public $name = [];

    /***
     * Возрашает человекопонятное название
     * @param $key
     * @return mixed
     */
    public function getNameGame($key)
    {
        return $this->name[$key];
    }

    /**
     * Возрашает ранги для выбранной игры
     * @return mixed
     */
    public function getRangGame() {

    }

    /**
     * Возрашает осовные роли для выбранной игры
     * @return mixed
     */
    public function getRoleGame() {

    }

}
