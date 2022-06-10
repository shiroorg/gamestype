<?php

namespace Api;

class TradePayeer implements \InterfaceAccount {

    /**
     * @var array
     */
    private $arParams = array();

    /**
     * @var array
     */
    private $arError = array();

    public function __construct($params = array())
    {
        $this->arParams = $params;
    }

    public function Account()
    {
        // TODO: Implement Account() method.
    }

}
