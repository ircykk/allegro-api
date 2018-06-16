<?php

namespace Ircykk\AllegroApi;

class doFinishItemsResponse
{

    /**
     * @var ArrayOfLong $finishItemsSucceed
     */
    protected $finishItemsSucceed = null;

    /**
     * @var ArrayOfFinishfailurestruct $finishItemsFailed
     */
    protected $finishItemsFailed = null;

    /**
     * @param ArrayOfLong $finishItemsSucceed
     * @param ArrayOfFinishfailurestruct $finishItemsFailed
     */
    public function __construct($finishItemsSucceed = null, $finishItemsFailed = null)
    {
      $this->finishItemsSucceed = $finishItemsSucceed;
      $this->finishItemsFailed = $finishItemsFailed;
    }

    /**
     * @return ArrayOfLong
     */
    public function getFinishItemsSucceed()
    {
      return $this->finishItemsSucceed;
    }

    /**
     * @param ArrayOfLong $finishItemsSucceed
     * @return \Ircykk\AllegroApi\doFinishItemsResponse
     */
    public function setFinishItemsSucceed($finishItemsSucceed)
    {
      $this->finishItemsSucceed = $finishItemsSucceed;
      return $this;
    }

    /**
     * @return ArrayOfFinishfailurestruct
     */
    public function getFinishItemsFailed()
    {
      return $this->finishItemsFailed;
    }

    /**
     * @param ArrayOfFinishfailurestruct $finishItemsFailed
     * @return \Ircykk\AllegroApi\doFinishItemsResponse
     */
    public function setFinishItemsFailed($finishItemsFailed)
    {
      $this->finishItemsFailed = $finishItemsFailed;
      return $this;
    }

}
