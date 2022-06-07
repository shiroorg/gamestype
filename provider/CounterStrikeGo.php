<?php

namespace GameType\Provider;

use GameType\Src\GameAbstract;
use GameType\Src\GameRangInterface;

class CounterStrikeGo extends GameAbstract implements GameRangInterface
{

    /**
     * Константы для типов ролей
     * Официльные типы
     */
    const TYPE_CS_RANG_SILVER_1                 = "TYPE_CS_RANG_SILVER_1",
        TYPE_CS_RANG_SILVER_2                   = "TYPE_CS_RANG_SILVER_2",
        TYPE_CS_RANG_SILVER_3                   = "TYPE_CS_RANG_SILVER_3",
        TYPE_CS_RANG_SILVER_4                   = "TYPE_CS_RANG_SILVER_4",
        TYPE_CS_RANG_SILVER_ELITE               = "TYPE_CS_RANG_SILVER_ELITE",
        TYPE_CS_RANG_SILVER_ELITE_MASTER        = "TYPE_CS_RANG_SILVER_ELITE_MASTER",
        TYPE_CS_RANG_GOLD_NOVA_1                = "TYPE_CS_RANG_GOLD_NOVA_1",
        TYPE_CS_RANG_GOLD_NOVA_2                = "TYPE_CS_RANG_GOLD_NOVA_2",
        TYPE_CS_RANG_GOLD_NOVA_3                = "TYPE_CS_RANG_GOLD_NOVA_3",
        TYPE_CS_RANG_GOLD_NOVA_MASTER           = "TYPE_CS_RANG_GOLD_NOVA_MASTER",
        TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_1       = "TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_1",
        TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_2       = "TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_2",
        TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_ELITE   = "TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_ELITE",
        TYPE_CS_RANG_DISTINGUISHED_MASTER_GUARDIAN = "TYPE_CS_RANG_DISTINGUISHED_MASTER_GUARDIAN",
        TYPE_CS_RANG_LEGENDARY_EAGLE            = "TYPE_CS_RANG_LEGENDARY_EAGLE",
        TYPE_CS_RANG_LEGENDARY_EAGLE_MASTER     = "TYPE_CS_RANG_LEGENDARY_EAGLE_MASTER",
        TYPE_CS_RANG_SUPREME_MASTER_FIRST_CLASS = "TYPE_CS_RANG_SUPREME_MASTER_FIRST_CLASS",
        TYPE_CS_RANG_THE_GLOBAL_ELITE           = "TYPE_CS_RANG_THE_GLOBAL_ELITE";

    /***
     * Список человекопонятного
     * @var array
     */
    private $name = [
        self::TYPE_CS_RANG_SILVER_1             => 'Silver - Level 1',
        self::TYPE_CS_RANG_SILVER_2             => 'Silver - Level 2',
        self::TYPE_CS_RANG_SILVER_3             => 'Silver - Level 3',
        self::TYPE_CS_RANG_SILVER_4             => 'Silver - Level 4',
        self::TYPE_CS_RANG_SILVER_ELITE         => 'Silver - Elite',
        self::TYPE_CS_RANG_SILVER_ELITE_MASTER  => 'Silver - Elite Master',
        self::TYPE_CS_RANG_GOLD_NOVA_1          => 'Gold Nova - Level 1',
        self::TYPE_CS_RANG_GOLD_NOVA_2          => 'Gold Nova - Level 2',
        self::TYPE_CS_RANG_GOLD_NOVA_3          => 'Gold Nova - Level 3',
        self::TYPE_CS_RANG_GOLD_NOVA_MASTER     => 'Gold Nova - master',
        self::TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_1 => 'Gold Nova - Guardian Level 1',
        self::TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_2 => 'Gold Nova - Guardian Level 2',
        self::TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_ELITE => 'Gold Nova - Guardian Level Elite',
        self::TYPE_CS_RANG_DISTINGUISHED_MASTER_GUARDIAN => 'Distinguished Master Guardian',
        self::TYPE_CS_RANG_LEGENDARY_EAGLE      => 'Legendary Eagle',
        self::TYPE_CS_RANG_LEGENDARY_EAGLE_MASTER => 'Legendary Eagle Master',
        self::TYPE_CS_RANG_SUPREME_MASTER_FIRST_CLASS => 'Supreme Master First Class',
        self::TYPE_CS_RANG_THE_GLOBAL_ELITE     => 'The Global Elite',
    ];

    /**
     * Возрашает ранги для выбранной игры
     * @return mixed
     */
    public function getRangGame()
    {
        return array(
            1 => self::TYPE_CS_RANG_SILVER_1,
            2 => self::TYPE_CS_RANG_SILVER_2,
            3 => self::TYPE_CS_RANG_SILVER_3,
            4 => self::TYPE_CS_RANG_SILVER_4,
            5 => self::TYPE_CS_RANG_SILVER_ELITE,
            6 => self::TYPE_CS_RANG_SILVER_ELITE_MASTER,
            7 => self::TYPE_CS_RANG_GOLD_NOVA_1,
            8 => self::TYPE_CS_RANG_GOLD_NOVA_2,
            9 => self::TYPE_CS_RANG_GOLD_NOVA_3,
            10 => self::TYPE_CS_RANG_GOLD_NOVA_MASTER,
            11 => self::TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_1,
            12 => self::TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_2,
            13 => self::TYPE_CS_RANG_GOLD_NOVA_GUARDIAN_ELITE,
            14 => self::TYPE_CS_RANG_DISTINGUISHED_MASTER_GUARDIAN,
            15 => self::TYPE_CS_RANG_LEGENDARY_EAGLE,
            16 => self::TYPE_CS_RANG_LEGENDARY_EAGLE_MASTER,
            17 => self::TYPE_CS_RANG_SUPREME_MASTER_FIRST_CLASS,
            18 => self::TYPE_CS_RANG_THE_GLOBAL_ELITE,
        );
    }

}
