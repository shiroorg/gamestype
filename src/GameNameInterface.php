<?php

namespace GameType\Src;

/**
 * Интерфейс для описание игры
 */
interface GameNameInterface
{

    /**
     * Возрашает осовные роли для выбранной игры
     * @return mixed
     */
    public function getNameGame($key);

}
