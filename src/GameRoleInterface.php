<?php

namespace GameType\Src;

/**
 * Интерфейс для описание игры
 */
interface GameRoleInterface
{

    /**
     * Возрашает осовные роли для выбранной игры
     * @return mixed
     */
    public function getRoleGame();

}
