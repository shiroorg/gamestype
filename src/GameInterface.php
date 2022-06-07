<?php

namespace GameType\Src;

/**
 * Интерфейс для описание игры
 */
interface GameInterface
{
    /***
     * Возрашает человекопонятное название
     * @param $key
     * @return mixed
     */
    public function getName($key);

    /**
     * Возрашает осовные роли для выбранной игры
     * @return mixed
     */
    public function getRangGame();

    /**
     * Возрашает осовные роли для выбранной игры
     * @return mixed
     */
    public function getMainRoleGame();

    /**
     * Возрашает второстепеные роли для выбранной игры
     * @return mixed
     */
    public function getOtherRoleGame();

    /**
     * Возрашает популярные роли для выбранной игры
     * @return mixed
     */
    public function getPopularRoleGame();

}
