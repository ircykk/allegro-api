<?php

namespace Ircykk\AllegroApi;

class doGetFilledPostBuyFormsResponse
{

    /**
     * @var FilledPostBuyFormsStruct $filledPostBuyForms
     */
    protected $filledPostBuyForms = null;

    /**
     * @param FilledPostBuyFormsStruct $filledPostBuyForms
     */
    public function __construct($filledPostBuyForms = null)
    {
      $this->filledPostBuyForms = $filledPostBuyForms;
    }

    /**
     * @return FilledPostBuyFormsStruct
     */
    public function getFilledPostBuyForms()
    {
      return $this->filledPostBuyForms;
    }

    /**
     * @param FilledPostBuyFormsStruct $filledPostBuyForms
     * @return \Ircykk\AllegroApi\doGetFilledPostBuyFormsResponse
     */
    public function setFilledPostBuyForms($filledPostBuyForms)
    {
      $this->filledPostBuyForms = $filledPostBuyForms;
      return $this;
    }

}
