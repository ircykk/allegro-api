<?php

namespace Ircykk\AllegroApi;

class doAddPackageInfoToPostBuyFormResponse
{

    /**
     * @var PostBuyFormPackageInfoStruct $postBuyFormPackageInfo
     */
    protected $postBuyFormPackageInfo = null;

    /**
     * @param PostBuyFormPackageInfoStruct $postBuyFormPackageInfo
     */
    public function __construct($postBuyFormPackageInfo = null)
    {
      $this->postBuyFormPackageInfo = $postBuyFormPackageInfo;
    }

    /**
     * @return PostBuyFormPackageInfoStruct
     */
    public function getPostBuyFormPackageInfo()
    {
      return $this->postBuyFormPackageInfo;
    }

    /**
     * @param PostBuyFormPackageInfoStruct $postBuyFormPackageInfo
     * @return \Ircykk\AllegroApi\doAddPackageInfoToPostBuyFormResponse
     */
    public function setPostBuyFormPackageInfo($postBuyFormPackageInfo)
    {
      $this->postBuyFormPackageInfo = $postBuyFormPackageInfo;
      return $this;
    }

}
