<?php

namespace GameType\Provider;

use GameType\Src\GameAbstract;
use GameType\Src\GameRoleInterface;

class Dota2 extends GameAbstract implements GameRoleInterface
{

    /**
     * Константы для типов ролей
     * Официльные типы
     */
    const   TYPE_DOTA_ROLE_CARRY        = "TYPE_DOTA_ROLE_CARRY",
            TYPE_DOTA_ROLE_OFFLANER     = "TYPE_DOTA_ROLE_OFFLANER",
            TYPE_DOTA_ROLE_SUPPORT      = "TYPE_DOTA_ROLE_SUPPORT",
            TYPE_DOTA_ROLE_MID          = "TYPE_DOTA_ROLE_MID";

    /**
     * Константы для типов ролей
     * Часто используемые типы
     */
    const   TYPE_DOTA_ROLE_DISABLER     = "TYPE_DOTA_ROLE_DISABLER",
            TYPE_DOTA_ROLE_LAN_SUPPORT  = "TYPE_DOTA_ROLE_LAN_SUPPORT",
            TYPE_DOTA_ROLE_INITIATOR    = "TYPE_DOTA_ROLE_INITIATOR",
            TYPE_DOTA_ROLE_JUNGLER      = "TYPE_DOTA_ROLE_JUNGLER",
            TYPE_DOTA_ROLE_DURABLE      = "TYPE_DOTA_ROLE_DURABLE",
            TYPE_DOTA_ROLE_PUSHER       = "TYPE_DOTA_ROLE_PUSHER",
            TYPE_DOTA_ROLE_NUKER        = "TYPE_DOTA_ROLE_NUKER",
            TYPE_DOTA_ROLE_ESCAPE       = "TYPE_DOTA_ROLE_ESCAPE";

    /**
     * Константы для типов ролей
     * Неофициальные типы
     */
    const   TYPE_DOTA_ROLE_HARD_CARRY   = "TYPE_DOTA_ROLE_HARD_CARRY",
            TYPE_DOTA_ROLE_SEMI_CARRY   = "TYPE_DOTA_ROLE_SEMI_CARRY",
            TYPE_DOTA_ROLE_GANKER       = "TYPE_DOTA_ROLE_GANKER",
            TYPE_DOTA_ROLE_ROAMER       = "TYPE_DOTA_ROLE_ROAMER",
            TYPE_DOTA_ROLE_HARD_LINE    = "TYPE_DOTA_ROLE_HARD_LINE";

    private $name = [
        self::TYPE_DOTA_ROLE_CARRY          => 'Carry',
        self::TYPE_DOTA_ROLE_OFFLANER       => 'Offlaner',
        self::TYPE_DOTA_ROLE_SUPPORT        => 'Support',
        self::TYPE_DOTA_ROLE_MID            => 'Mid',
        self::TYPE_DOTA_ROLE_HARD_CARRY     => 'Hard Carry',
        self::TYPE_DOTA_ROLE_SEMI_CARRY     => 'Semi Carry',
        self::TYPE_DOTA_ROLE_GANKER         => 'Ganker',
        self::TYPE_DOTA_ROLE_ROAMER         => 'Roamer',
        self::TYPE_DOTA_ROLE_HARD_LINE      => 'Offlane',
        self::TYPE_DOTA_ROLE_DISABLER       => 'Carry',
        self::TYPE_DOTA_ROLE_LAN_SUPPORT    => 'Lane Support',
        self::TYPE_DOTA_ROLE_INITIATOR      => 'Initiator',
        self::TYPE_DOTA_ROLE_JUNGLER        => 'Jungler',
        self::TYPE_DOTA_ROLE_DURABLE        => 'Disabler',
        self::TYPE_DOTA_ROLE_PUSHER         => 'Pusher',
        self::TYPE_DOTA_ROLE_NUKER          => 'Nuker',
        self::TYPE_DOTA_ROLE_ESCAPE         => 'Escape',
    ];

    private function getMainRoleGame() {
        return array(
            1 => self::TYPE_DOTA_ROLE_CARRY,
            2 => self::TYPE_DOTA_ROLE_OFFLANER,
            3 => self::TYPE_DOTA_ROLE_SUPPORT,
            4 => self::TYPE_DOTA_ROLE_MID,
        );
    }

    private function getOtherRoleGame() {
        return array(
            13 => self::TYPE_DOTA_ROLE_HARD_CARRY,
            14 => self::TYPE_DOTA_ROLE_SEMI_CARRY,
            15 => self::TYPE_DOTA_ROLE_GANKER,
            16 => self::TYPE_DOTA_ROLE_ROAMER,
            17 => self::TYPE_DOTA_ROLE_HARD_LINE,
        );
    }

    private function getPopularRoleGame() {
        return array(
            5 => self::TYPE_DOTA_ROLE_DISABLER,
            6 => self::TYPE_DOTA_ROLE_LAN_SUPPORT,
            7 => self::TYPE_DOTA_ROLE_INITIATOR,
            8 => self::TYPE_DOTA_ROLE_JUNGLER,
            9 => self::TYPE_DOTA_ROLE_DURABLE,
            10 => self::TYPE_DOTA_ROLE_PUSHER,
            11 => self::TYPE_DOTA_ROLE_NUKER,
            12 => self::TYPE_DOTA_ROLE_ESCAPE,
        );
    }

    /**
     * Возрашает осовные роли для выбранной игры
     * @return mixed
     */
    public function getRoleGame()
    {
        return array(
            'Main'      => $this->getMainRoleGame(),
            'Popular'   => $this->getPopularRoleGame(),
            'Other'     => $this->getOtherRoleGame(),
        );
    }

}
