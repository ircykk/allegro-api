<?php

namespace Ircykk\AllegroApi;

class doMyAccount2Response
{

    /**
     * @var ArrayOfMyaccountstruct2 $myaccountList
     */
    protected $myaccountList = null;

    /**
     * @param ArrayOfMyaccountstruct2 $myaccountList
     */
    public function __construct($myaccountList = null)
    {
      $this->myaccountList = $myaccountList;
    }

    /**
     * @return ArrayOfMyaccountstruct2
     */
    public function getMyaccountList()
    {
      return $this->myaccountList;
    }

    /**
     * @param ArrayOfMyaccountstruct2 $myaccountList
     * @return \Ircykk\AllegroApi\doMyAccount2Response
     */
    public function setMyaccountList($myaccountList)
    {
      $this->myaccountList = $myaccountList;
      return $this;
    }

}
