<?php

namespace Ircykk\AllegroApi;

class doGetMessageToBuyerResponse
{

    /**
     * @var MessageToBuyerStruct $messageToBuyer
     */
    protected $messageToBuyer = null;

    /**
     * @param MessageToBuyerStruct $messageToBuyer
     */
    public function __construct($messageToBuyer = null)
    {
      $this->messageToBuyer = $messageToBuyer;
    }

    /**
     * @return MessageToBuyerStruct
     */
    public function getMessageToBuyer()
    {
      return $this->messageToBuyer;
    }

    /**
     * @param MessageToBuyerStruct $messageToBuyer
     * @return \Ircykk\AllegroApi\doGetMessageToBuyerResponse
     */
    public function setMessageToBuyer($messageToBuyer)
    {
      $this->messageToBuyer = $messageToBuyer;
      return $this;
    }

}
