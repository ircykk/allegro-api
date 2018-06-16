<?php

namespace Ircykk\AllegroApi;

class doSendPostBuyFormResponse
{

    /**
     * @var PostBuyFormStruct $postBuyForm
     */
    protected $postBuyForm = null;

    /**
     * @param PostBuyFormStruct $postBuyForm
     */
    public function __construct($postBuyForm = null)
    {
      $this->postBuyForm = $postBuyForm;
    }

    /**
     * @return PostBuyFormStruct
     */
    public function getPostBuyForm()
    {
      return $this->postBuyForm;
    }

    /**
     * @param PostBuyFormStruct $postBuyForm
     * @return \Ircykk\AllegroApi\doSendPostBuyFormResponse
     */
    public function setPostBuyForm($postBuyForm)
    {
      $this->postBuyForm = $postBuyForm;
      return $this;
    }

}
