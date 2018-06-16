<?php

namespace Ircykk\AllegroApi;

class MessageToBuyerStruct
{

    /**
     * @var int $messageSellerId
     */
    protected $messageSellerId = null;

    /**
     * @var string $messageContent
     */
    protected $messageContent = null;

    /**
     * @param int $messageSellerId
     * @param string $messageContent
     */
    public function __construct($messageSellerId = null, $messageContent = null)
    {
      $this->messageSellerId = $messageSellerId;
      $this->messageContent = $messageContent;
    }

    /**
     * @return int
     */
    public function getMessageSellerId()
    {
      return $this->messageSellerId;
    }

    /**
     * @param int $messageSellerId
     * @return \Ircykk\AllegroApi\MessageToBuyerStruct
     */
    public function setMessageSellerId($messageSellerId)
    {
      $this->messageSellerId = $messageSellerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageContent()
    {
      return $this->messageContent;
    }

    /**
     * @param string $messageContent
     * @return \Ircykk\AllegroApi\MessageToBuyerStruct
     */
    public function setMessageContent($messageContent)
    {
      $this->messageContent = $messageContent;
      return $this;
    }

}
