<?php

namespace Ircykk\AllegroApi;

class SoapClient extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'PackageInfoStruct' => 'Ircykk\\AllegroApi\\PackageInfoStruct',
        'ArrayOfPackageinfostruct' => 'Ircykk\\AllegroApi\\ArrayOfPackageinfostruct',
        'DoAddPackageInfoToPostBuyFormRequest' => 'Ircykk\\AllegroApi\\DoAddPackageInfoToPostBuyFormRequest',
        'ArrayOfString' => 'Ircykk\\AllegroApi\\ArrayOfString',
        'PostBuyFormPackageInfoStruct' => 'Ircykk\\AllegroApi\\PostBuyFormPackageInfoStruct',
        'doAddPackageInfoToPostBuyFormResponse' => 'Ircykk\\AllegroApi\\doAddPackageInfoToPostBuyFormResponse',
        'UserBlackListStruct' => 'Ircykk\\AllegroApi\\UserBlackListStruct',
        'ArrayOfUserblackliststruct' => 'Ircykk\\AllegroApi\\ArrayOfUserblackliststruct',
        'DoAddToBlackListRequest' => 'Ircykk\\AllegroApi\\DoAddToBlackListRequest',
        'UserBlackListAddResultStruct' => 'Ircykk\\AllegroApi\\UserBlackListAddResultStruct',
        'ArrayOfUserblacklistaddresultstruct' => 'Ircykk\\AllegroApi\\ArrayOfUserblacklistaddresultstruct',
        'doAddToBlackListResponse' => 'Ircykk\\AllegroApi\\doAddToBlackListResponse',
        'PharmacyRecipientDataStruct' => 'Ircykk\\AllegroApi\\PharmacyRecipientDataStruct',
        'DoBidItemRequest' => 'Ircykk\\AllegroApi\\DoBidItemRequest',
        'doBidItemResponse' => 'Ircykk\\AllegroApi\\doBidItemResponse',
        'ArrayOfInt' => 'Ircykk\\AllegroApi\\ArrayOfInt',
        'DoCancelBidItemRequest' => 'Ircykk\\AllegroApi\\DoCancelBidItemRequest',
        'doCancelBidItemResponse' => 'Ircykk\\AllegroApi\\doCancelBidItemResponse',
        'DoCancelRefundFormRequest' => 'Ircykk\\AllegroApi\\DoCancelRefundFormRequest',
        'doCancelRefundFormResponse' => 'Ircykk\\AllegroApi\\doCancelRefundFormResponse',
        'DoCancelRefundWarningRequest' => 'Ircykk\\AllegroApi\\DoCancelRefundWarningRequest',
        'doCancelRefundWarningResponse' => 'Ircykk\\AllegroApi\\doCancelRefundWarningResponse',
        'DoCancelTransactionRequest' => 'Ircykk\\AllegroApi\\DoCancelTransactionRequest',
        'doCancelTransactionResponse' => 'Ircykk\\AllegroApi\\doCancelTransactionResponse',
        'RangeIntValueStruct' => 'Ircykk\\AllegroApi\\RangeIntValueStruct',
        'RangeFloatValueStruct' => 'Ircykk\\AllegroApi\\RangeFloatValueStruct',
        'RangeDateValueStruct' => 'Ircykk\\AllegroApi\\RangeDateValueStruct',
        'FieldsValue' => 'Ircykk\\AllegroApi\\FieldsValue',
        'ArrayOfFieldsvalue' => 'Ircykk\\AllegroApi\\ArrayOfFieldsvalue',
        'VariantQuantityStruct' => 'Ircykk\\AllegroApi\\VariantQuantityStruct',
        'ArrayOfVariantquantitystruct' => 'Ircykk\\AllegroApi\\ArrayOfVariantquantitystruct',
        'VariantStruct' => 'Ircykk\\AllegroApi\\VariantStruct',
        'ArrayOfVariantstruct' => 'Ircykk\\AllegroApi\\ArrayOfVariantstruct',
        'TagNameStruct' => 'Ircykk\\AllegroApi\\TagNameStruct',
        'ArrayOfTagnamestruct' => 'Ircykk\\AllegroApi\\ArrayOfTagnamestruct',
        'AfterSalesServiceConditionsStruct' => 'Ircykk\\AllegroApi\\AfterSalesServiceConditionsStruct',
        'DoChangeItemFieldsRequest' => 'Ircykk\\AllegroApi\\DoChangeItemFieldsRequest',
        'AmountStruct' => 'Ircykk\\AllegroApi\\AmountStruct',
        'ItemSurchargeStruct' => 'Ircykk\\AllegroApi\\ItemSurchargeStruct',
        'ArrayOfItemsurchargestruct' => 'Ircykk\\AllegroApi\\ArrayOfItemsurchargestruct',
        'ChangedItemStruct' => 'Ircykk\\AllegroApi\\ChangedItemStruct',
        'doChangeItemFieldsResponse' => 'Ircykk\\AllegroApi\\doChangeItemFieldsResponse',
        'DoChangePriceItemRequest' => 'Ircykk\\AllegroApi\\DoChangePriceItemRequest',
        'doChangePriceItemResponse' => 'Ircykk\\AllegroApi\\doChangePriceItemResponse',
        'DoChangeQuantityItemRequest' => 'Ircykk\\AllegroApi\\DoChangeQuantityItemRequest',
        'doChangeQuantityItemResponse' => 'Ircykk\\AllegroApi\\doChangeQuantityItemResponse',
        'DoCheckItemDescriptionRequest' => 'Ircykk\\AllegroApi\\DoCheckItemDescriptionRequest',
        'ItemDescriptionStruct' => 'Ircykk\\AllegroApi\\ItemDescriptionStruct',
        'doCheckItemDescriptionResponse' => 'Ircykk\\AllegroApi\\doCheckItemDescriptionResponse',
        'DoCheckNewAuctionExtRequest' => 'Ircykk\\AllegroApi\\DoCheckNewAuctionExtRequest',
        'doCheckNewAuctionExtResponse' => 'Ircykk\\AllegroApi\\doCheckNewAuctionExtResponse',
        'DoFinishItemRequest' => 'Ircykk\\AllegroApi\\DoFinishItemRequest',
        'doFinishItemResponse' => 'Ircykk\\AllegroApi\\doFinishItemResponse',
        'FinishItemsStruct' => 'Ircykk\\AllegroApi\\FinishItemsStruct',
        'ArrayOfFinishitemsstruct' => 'Ircykk\\AllegroApi\\ArrayOfFinishitemsstruct',
        'DoFinishItemsRequest' => 'Ircykk\\AllegroApi\\DoFinishItemsRequest',
        'ArrayOfLong' => 'Ircykk\\AllegroApi\\ArrayOfLong',
        'FinishFailureStruct' => 'Ircykk\\AllegroApi\\FinishFailureStruct',
        'ArrayOfFinishfailurestruct' => 'Ircykk\\AllegroApi\\ArrayOfFinishfailurestruct',
        'doFinishItemsResponse' => 'Ircykk\\AllegroApi\\doFinishItemsResponse',
        'DoGetArchiveRefundsListRequest' => 'Ircykk\\AllegroApi\\DoGetArchiveRefundsListRequest',
        'ArchiveRefundsListTypeStruct' => 'Ircykk\\AllegroApi\\ArchiveRefundsListTypeStruct',
        'ArrayOfArchiverefundslisttypestruct' => 'Ircykk\\AllegroApi\\ArrayOfArchiverefundslisttypestruct',
        'doGetArchiveRefundsListResponse' => 'Ircykk\\AllegroApi\\doGetArchiveRefundsListResponse',
        'DoGetBidItem2Request' => 'Ircykk\\AllegroApi\\DoGetBidItem2Request',
        'BidListStruct2' => 'Ircykk\\AllegroApi\\BidListStruct2',
        'ArrayOfBidliststruct2' => 'Ircykk\\AllegroApi\\ArrayOfBidliststruct2',
        'doGetBidItem2Response' => 'Ircykk\\AllegroApi\\doGetBidItem2Response',
        'DoGetBlackListUsersRequest' => 'Ircykk\\AllegroApi\\DoGetBlackListUsersRequest',
        'BlackListStruct' => 'Ircykk\\AllegroApi\\BlackListStruct',
        'ArrayOfBlackliststruct' => 'Ircykk\\AllegroApi\\ArrayOfBlackliststruct',
        'doGetBlackListUsersResponse' => 'Ircykk\\AllegroApi\\doGetBlackListUsersResponse',
        'DoGetCategoryPathRequest' => 'Ircykk\\AllegroApi\\DoGetCategoryPathRequest',
        'CategoryData' => 'Ircykk\\AllegroApi\\CategoryData',
        'ArrayOfCategorydata' => 'Ircykk\\AllegroApi\\ArrayOfCategorydata',
        'doGetCategoryPathResponse' => 'Ircykk\\AllegroApi\\doGetCategoryPathResponse',
        'DoGetCatsDataRequest' => 'Ircykk\\AllegroApi\\DoGetCatsDataRequest',
        'CatInfoType' => 'Ircykk\\AllegroApi\\CatInfoType',
        'ArrayOfCatinfotype' => 'Ircykk\\AllegroApi\\ArrayOfCatinfotype',
        'doGetCatsDataResponse' => 'Ircykk\\AllegroApi\\doGetCatsDataResponse',
        'DoGetCatsDataCountRequest' => 'Ircykk\\AllegroApi\\DoGetCatsDataCountRequest',
        'doGetCatsDataCountResponse' => 'Ircykk\\AllegroApi\\doGetCatsDataCountResponse',
        'DoGetCatsDataLimitRequest' => 'Ircykk\\AllegroApi\\DoGetCatsDataLimitRequest',
        'doGetCatsDataLimitResponse' => 'Ircykk\\AllegroApi\\doGetCatsDataLimitResponse',
        'DoGetCountriesRequest' => 'Ircykk\\AllegroApi\\DoGetCountriesRequest',
        'CountryInfoType' => 'Ircykk\\AllegroApi\\CountryInfoType',
        'ArrayOfCountryinfotype' => 'Ircykk\\AllegroApi\\ArrayOfCountryinfotype',
        'doGetCountriesResponse' => 'Ircykk\\AllegroApi\\doGetCountriesResponse',
        'DoGetDealsRequest' => 'Ircykk\\AllegroApi\\DoGetDealsRequest',
        'DealsStruct' => 'Ircykk\\AllegroApi\\DealsStruct',
        'ArrayOfDealsstruct' => 'Ircykk\\AllegroApi\\ArrayOfDealsstruct',
        'doGetDealsResponse' => 'Ircykk\\AllegroApi\\doGetDealsResponse',
        'DoGetFilledPostBuyFormsRequest' => 'Ircykk\\AllegroApi\\DoGetFilledPostBuyFormsRequest',
        'FilledPostBuyFormsStruct' => 'Ircykk\\AllegroApi\\FilledPostBuyFormsStruct',
        'doGetFilledPostBuyFormsResponse' => 'Ircykk\\AllegroApi\\doGetFilledPostBuyFormsResponse',
        'DoGetFreeDeliveryAmountRequest' => 'Ircykk\\AllegroApi\\DoGetFreeDeliveryAmountRequest',
        'doGetFreeDeliveryAmountResponse' => 'Ircykk\\AllegroApi\\doGetFreeDeliveryAmountResponse',
        'DoGetItemFieldsRequest' => 'Ircykk\\AllegroApi\\DoGetItemFieldsRequest',
        'doGetItemFieldsResponse' => 'Ircykk\\AllegroApi\\doGetItemFieldsResponse',
        'ItemGetImage' => 'Ircykk\\AllegroApi\\ItemGetImage',
        'ArrayOfItemgetimage' => 'Ircykk\\AllegroApi\\ArrayOfItemgetimage',
        'DoGetItemsImagesRequest' => 'Ircykk\\AllegroApi\\DoGetItemsImagesRequest',
        'ItemImageList' => 'Ircykk\\AllegroApi\\ItemImageList',
        'ArrayOfItemimagelist' => 'Ircykk\\AllegroApi\\ArrayOfItemimagelist',
        'ItemImagesStruct' => 'Ircykk\\AllegroApi\\ItemImagesStruct',
        'ArrayOfItemimagesstruct' => 'Ircykk\\AllegroApi\\ArrayOfItemimagesstruct',
        'doGetItemsImagesResponse' => 'Ircykk\\AllegroApi\\doGetItemsImagesResponse',
        'DoGetItemsInfoRequest' => 'Ircykk\\AllegroApi\\DoGetItemsInfoRequest',
        'DurationInfoStruct' => 'Ircykk\\AllegroApi\\DurationInfoStruct',
        'ItemInfo' => 'Ircykk\\AllegroApi\\ItemInfo',
        'ItemCatList' => 'Ircykk\\AllegroApi\\ItemCatList',
        'ArrayOfItemcatlist' => 'Ircykk\\AllegroApi\\ArrayOfItemcatlist',
        'AttribStruct' => 'Ircykk\\AllegroApi\\AttribStruct',
        'ArrayOfAttribstruct' => 'Ircykk\\AllegroApi\\ArrayOfAttribstruct',
        'FulfillmentTimeStruct' => 'Ircykk\\AllegroApi\\FulfillmentTimeStruct',
        'PostageStruct' => 'Ircykk\\AllegroApi\\PostageStruct',
        'ArrayOfPostagestruct' => 'Ircykk\\AllegroApi\\ArrayOfPostagestruct',
        'ItemPaymentOptions' => 'Ircykk\\AllegroApi\\ItemPaymentOptions',
        'CompanyInfoStruct' => 'Ircykk\\AllegroApi\\CompanyInfoStruct',
        'ProductParametersStruct' => 'Ircykk\\AllegroApi\\ProductParametersStruct',
        'ArrayOfProductparametersstruct' => 'Ircykk\\AllegroApi\\ArrayOfProductparametersstruct',
        'ProductParametersGroupStruct' => 'Ircykk\\AllegroApi\\ProductParametersGroupStruct',
        'ArrayOfProductparametersgroupstruct' => 'Ircykk\\AllegroApi\\ArrayOfProductparametersgroupstruct',
        'ProductStruct' => 'Ircykk\\AllegroApi\\ProductStruct',
        'ItemInfoStruct' => 'Ircykk\\AllegroApi\\ItemInfoStruct',
        'ArrayOfIteminfostruct' => 'Ircykk\\AllegroApi\\ArrayOfIteminfostruct',
        'doGetItemsInfoResponse' => 'Ircykk\\AllegroApi\\doGetItemsInfoResponse',
        'RangeValueType' => 'Ircykk\\AllegroApi\\RangeValueType',
        'FilterOptionsType' => 'Ircykk\\AllegroApi\\FilterOptionsType',
        'ArrayOfFilteroptionstype' => 'Ircykk\\AllegroApi\\ArrayOfFilteroptionstype',
        'SortOptionsType' => 'Ircykk\\AllegroApi\\SortOptionsType',
        'DoGetItemsListRequest' => 'Ircykk\\AllegroApi\\DoGetItemsListRequest',
        'UserInfoType' => 'Ircykk\\AllegroApi\\UserInfoType',
        'PriceInfoType' => 'Ircykk\\AllegroApi\\PriceInfoType',
        'ArrayOfPriceinfotype' => 'Ircykk\\AllegroApi\\ArrayOfPriceinfotype',
        'PhotoInfoType' => 'Ircykk\\AllegroApi\\PhotoInfoType',
        'ArrayOfPhotoinfotype' => 'Ircykk\\AllegroApi\\ArrayOfPhotoinfotype',
        'ParameterInfoType' => 'Ircykk\\AllegroApi\\ParameterInfoType',
        'ArrayOfParameterinfotype' => 'Ircykk\\AllegroApi\\ArrayOfParameterinfotype',
        'AdvertInfoType' => 'Ircykk\\AllegroApi\\AdvertInfoType',
        'ItemsListType' => 'Ircykk\\AllegroApi\\ItemsListType',
        'ArrayOfItemslisttype' => 'Ircykk\\AllegroApi\\ArrayOfItemslisttype',
        'CategoryTreeType' => 'Ircykk\\AllegroApi\\CategoryTreeType',
        'ArrayOfCategorytreetype' => 'Ircykk\\AllegroApi\\ArrayOfCategorytreetype',
        'CategoryPathType' => 'Ircykk\\AllegroApi\\CategoryPathType',
        'ArrayOfCategorypathtype' => 'Ircykk\\AllegroApi\\ArrayOfCategorypathtype',
        'CategoriesListType' => 'Ircykk\\AllegroApi\\CategoriesListType',
        'FilterValueType' => 'Ircykk\\AllegroApi\\FilterValueType',
        'ArrayOfFiltervaluetype' => 'Ircykk\\AllegroApi\\ArrayOfFiltervaluetype',
        'FilterRelationType' => 'Ircykk\\AllegroApi\\FilterRelationType',
        'FiltersListType' => 'Ircykk\\AllegroApi\\FiltersListType',
        'ArrayOfFilterslisttype' => 'Ircykk\\AllegroApi\\ArrayOfFilterslisttype',
        'doGetItemsListResponse' => 'Ircykk\\AllegroApi\\doGetItemsListResponse',
        'DoGetMessageToBuyerRequest' => 'Ircykk\\AllegroApi\\DoGetMessageToBuyerRequest',
        'MessageToBuyerStruct' => 'Ircykk\\AllegroApi\\MessageToBuyerStruct',
        'doGetMessageToBuyerResponse' => 'Ircykk\\AllegroApi\\doGetMessageToBuyerResponse',
        'DoGetMyAddressesRequest' => 'Ircykk\\AllegroApi\\DoGetMyAddressesRequest',
        'AddressUserDataStruct' => 'Ircykk\\AllegroApi\\AddressUserDataStruct',
        'AddressInfoStruct' => 'Ircykk\\AllegroApi\\AddressInfoStruct',
        'ArrayOfAddressinfostruct' => 'Ircykk\\AllegroApi\\ArrayOfAddressinfostruct',
        'doGetMyAddressesResponse' => 'Ircykk\\AllegroApi\\doGetMyAddressesResponse',
        'SortOptionsStruct' => 'Ircykk\\AllegroApi\\SortOptionsStruct',
        'DoGetMyBidItemsRequest' => 'Ircykk\\AllegroApi\\DoGetMyBidItemsRequest',
        'ItemPriceStruct' => 'Ircykk\\AllegroApi\\ItemPriceStruct',
        'ArrayOfItempricestruct' => 'Ircykk\\AllegroApi\\ArrayOfItempricestruct',
        'UserInfoStruct' => 'Ircykk\\AllegroApi\\UserInfoStruct',
        'BidItemStruct' => 'Ircykk\\AllegroApi\\BidItemStruct',
        'ArrayOfBiditemstruct' => 'Ircykk\\AllegroApi\\ArrayOfBiditemstruct',
        'doGetMyBidItemsResponse' => 'Ircykk\\AllegroApi\\doGetMyBidItemsResponse',
        'DoGetMyCurrentShipmentPriceTypeRequest' => 'Ircykk\\AllegroApi\\DoGetMyCurrentShipmentPriceTypeRequest',
        'doGetMyCurrentShipmentPriceTypeResponse' => 'Ircykk\\AllegroApi\\doGetMyCurrentShipmentPriceTypeResponse',
        'DoGetMyDataRequest' => 'Ircykk\\AllegroApi\\DoGetMyDataRequest',
        'UserDataStruct' => 'Ircykk\\AllegroApi\\UserDataStruct',
        'InvoiceDataStruct' => 'Ircykk\\AllegroApi\\InvoiceDataStruct',
        'CompanyExtraDataStruct' => 'Ircykk\\AllegroApi\\CompanyExtraDataStruct',
        'CompanySecondAddressStruct' => 'Ircykk\\AllegroApi\\CompanySecondAddressStruct',
        'PharmacyDataStruct' => 'Ircykk\\AllegroApi\\PharmacyDataStruct',
        'AlcoholDataStruct' => 'Ircykk\\AllegroApi\\AlcoholDataStruct',
        'RelatedPersonsStruct' => 'Ircykk\\AllegroApi\\RelatedPersonsStruct',
        'doGetMyDataResponse' => 'Ircykk\\AllegroApi\\doGetMyDataResponse',
        'FutureFilterOptionsStruct' => 'Ircykk\\AllegroApi\\FutureFilterOptionsStruct',
        'DoGetMyFutureItemsRequest' => 'Ircykk\\AllegroApi\\DoGetMyFutureItemsRequest',
        'FutureItemStruct' => 'Ircykk\\AllegroApi\\FutureItemStruct',
        'ArrayOfFutureitemstruct' => 'Ircykk\\AllegroApi\\ArrayOfFutureitemstruct',
        'doGetMyFutureItemsResponse' => 'Ircykk\\AllegroApi\\doGetMyFutureItemsResponse',
        'DoGetMyIncomingPaymentsRequest' => 'Ircykk\\AllegroApi\\DoGetMyIncomingPaymentsRequest',
        'PaymentDetailsStruct' => 'Ircykk\\AllegroApi\\PaymentDetailsStruct',
        'ArrayOfPaymentdetailsstruct' => 'Ircykk\\AllegroApi\\ArrayOfPaymentdetailsstruct',
        'UserIncomingPaymentStruct' => 'Ircykk\\AllegroApi\\UserIncomingPaymentStruct',
        'ArrayOfUserincomingpaymentstruct' => 'Ircykk\\AllegroApi\\ArrayOfUserincomingpaymentstruct',
        'doGetMyIncomingPaymentsResponse' => 'Ircykk\\AllegroApi\\doGetMyIncomingPaymentsResponse',
        'DoGetMyIncomingPaymentsRefundsRequest' => 'Ircykk\\AllegroApi\\DoGetMyIncomingPaymentsRefundsRequest',
        'UserIncomingPaymentRefundsStruct' => 'Ircykk\\AllegroApi\\UserIncomingPaymentRefundsStruct',
        'ArrayOfUserincomingpaymentrefundsstruct' => 'Ircykk\\AllegroApi\\ArrayOfUserincomingpaymentrefundsstruct',
        'doGetMyIncomingPaymentsRefundsResponse' => 'Ircykk\\AllegroApi\\doGetMyIncomingPaymentsRefundsResponse',
        'FilterPriceStruct' => 'Ircykk\\AllegroApi\\FilterPriceStruct',
        'NotSoldFilterOptionsStruct' => 'Ircykk\\AllegroApi\\NotSoldFilterOptionsStruct',
        'DoGetMyNotSoldItemsRequest' => 'Ircykk\\AllegroApi\\DoGetMyNotSoldItemsRequest',
        'NotSoldItemStruct' => 'Ircykk\\AllegroApi\\NotSoldItemStruct',
        'ArrayOfNotsolditemstruct' => 'Ircykk\\AllegroApi\\ArrayOfNotsolditemstruct',
        'doGetMyNotSoldItemsResponse' => 'Ircykk\\AllegroApi\\doGetMyNotSoldItemsResponse',
        'DoGetMyNotWonItemsRequest' => 'Ircykk\\AllegroApi\\DoGetMyNotWonItemsRequest',
        'NotWonItemStruct' => 'Ircykk\\AllegroApi\\NotWonItemStruct',
        'ArrayOfNotwonitemstruct' => 'Ircykk\\AllegroApi\\ArrayOfNotwonitemstruct',
        'doGetMyNotWonItemsResponse' => 'Ircykk\\AllegroApi\\doGetMyNotWonItemsResponse',
        'DoGetMyPaymentsRequest' => 'Ircykk\\AllegroApi\\DoGetMyPaymentsRequest',
        'PaymentItemsStruct' => 'Ircykk\\AllegroApi\\PaymentItemsStruct',
        'ArrayOfPaymentitemsstruct' => 'Ircykk\\AllegroApi\\ArrayOfPaymentitemsstruct',
        'PaymentSellersStruct' => 'Ircykk\\AllegroApi\\PaymentSellersStruct',
        'ArrayOfPaymentsellersstruct' => 'Ircykk\\AllegroApi\\ArrayOfPaymentsellersstruct',
        'UserPaymentStruct' => 'Ircykk\\AllegroApi\\UserPaymentStruct',
        'ArrayOfUserpaymentstruct' => 'Ircykk\\AllegroApi\\ArrayOfUserpaymentstruct',
        'doGetMyPaymentsResponse' => 'Ircykk\\AllegroApi\\doGetMyPaymentsResponse',
        'DoGetMyPaymentsInfoRequest' => 'Ircykk\\AllegroApi\\DoGetMyPaymentsInfoRequest',
        'PaymentsUserDataStruct' => 'Ircykk\\AllegroApi\\PaymentsUserDataStruct',
        'PayoutAutoFrequencyStruct' => 'Ircykk\\AllegroApi\\PayoutAutoFrequencyStruct',
        'PayoutAutoSettingsStruct' => 'Ircykk\\AllegroApi\\PayoutAutoSettingsStruct',
        'PaymentsPayoutStruct' => 'Ircykk\\AllegroApi\\PaymentsPayoutStruct',
        'PaymentsInfoStruct' => 'Ircykk\\AllegroApi\\PaymentsInfoStruct',
        'doGetMyPaymentsInfoResponse' => 'Ircykk\\AllegroApi\\doGetMyPaymentsInfoResponse',
        'DoGetMyPaymentsRefundsRequest' => 'Ircykk\\AllegroApi\\DoGetMyPaymentsRefundsRequest',
        'UserPaymentRefundsStruct' => 'Ircykk\\AllegroApi\\UserPaymentRefundsStruct',
        'ArrayOfUserpaymentrefundsstruct' => 'Ircykk\\AllegroApi\\ArrayOfUserpaymentrefundsstruct',
        'doGetMyPaymentsRefundsResponse' => 'Ircykk\\AllegroApi\\doGetMyPaymentsRefundsResponse',
        'DoGetMyPayoutsRequest' => 'Ircykk\\AllegroApi\\DoGetMyPayoutsRequest',
        'UserPayoutStruct' => 'Ircykk\\AllegroApi\\UserPayoutStruct',
        'ArrayOfUserpayoutstruct' => 'Ircykk\\AllegroApi\\ArrayOfUserpayoutstruct',
        'doGetMyPayoutsResponse' => 'Ircykk\\AllegroApi\\doGetMyPayoutsResponse',
        'DoGetMyPayoutsDetailsRequest' => 'Ircykk\\AllegroApi\\DoGetMyPayoutsDetailsRequest',
        'PayoutPaymentsStruct' => 'Ircykk\\AllegroApi\\PayoutPaymentsStruct',
        'ArrayOfPayoutpaymentsstruct' => 'Ircykk\\AllegroApi\\ArrayOfPayoutpaymentsstruct',
        'PayoutRefundFromStruct' => 'Ircykk\\AllegroApi\\PayoutRefundFromStruct',
        'ArrayOfPayoutrefundfromstruct' => 'Ircykk\\AllegroApi\\ArrayOfPayoutrefundfromstruct',
        'PayoutRefundToStruct' => 'Ircykk\\AllegroApi\\PayoutRefundToStruct',
        'ArrayOfPayoutrefundtostruct' => 'Ircykk\\AllegroApi\\ArrayOfPayoutrefundtostruct',
        'doGetMyPayoutsDetailsResponse' => 'Ircykk\\AllegroApi\\doGetMyPayoutsDetailsResponse',
        'SellFilterOptionsStruct' => 'Ircykk\\AllegroApi\\SellFilterOptionsStruct',
        'DoGetMySellItemsRequest' => 'Ircykk\\AllegroApi\\DoGetMySellItemsRequest',
        'SellItemStruct' => 'Ircykk\\AllegroApi\\SellItemStruct',
        'ArrayOfSellitemstruct' => 'Ircykk\\AllegroApi\\ArrayOfSellitemstruct',
        'doGetMySellItemsResponse' => 'Ircykk\\AllegroApi\\doGetMySellItemsResponse',
        'SoldFilterOptionsStruct' => 'Ircykk\\AllegroApi\\SoldFilterOptionsStruct',
        'DoGetMySoldItemsRequest' => 'Ircykk\\AllegroApi\\DoGetMySoldItemsRequest',
        'SoldItemStruct' => 'Ircykk\\AllegroApi\\SoldItemStruct',
        'ArrayOfSolditemstruct' => 'Ircykk\\AllegroApi\\ArrayOfSolditemstruct',
        'doGetMySoldItemsResponse' => 'Ircykk\\AllegroApi\\doGetMySoldItemsResponse',
        'DoGetMyWonItemsRequest' => 'Ircykk\\AllegroApi\\DoGetMyWonItemsRequest',
        'WonItemStruct' => 'Ircykk\\AllegroApi\\WonItemStruct',
        'ArrayOfWonitemstruct' => 'Ircykk\\AllegroApi\\ArrayOfWonitemstruct',
        'doGetMyWonItemsResponse' => 'Ircykk\\AllegroApi\\doGetMyWonItemsResponse',
        'DoGetPaymentMethodsRequest' => 'Ircykk\\AllegroApi\\DoGetPaymentMethodsRequest',
        'PaymentMethodStruct' => 'Ircykk\\AllegroApi\\PaymentMethodStruct',
        'ArrayOfPaymentmethodstruct' => 'Ircykk\\AllegroApi\\ArrayOfPaymentmethodstruct',
        'doGetPaymentMethodsResponse' => 'Ircykk\\AllegroApi\\doGetPaymentMethodsResponse',
        'DoGetPostBuyDataRequest' => 'Ircykk\\AllegroApi\\DoGetPostBuyDataRequest',
        'UserSentToDataStruct' => 'Ircykk\\AllegroApi\\UserSentToDataStruct',
        'UserPostBuyDataStruct' => 'Ircykk\\AllegroApi\\UserPostBuyDataStruct',
        'ArrayOfUserpostbuydatastruct' => 'Ircykk\\AllegroApi\\ArrayOfUserpostbuydatastruct',
        'ItemPostBuyDataStruct' => 'Ircykk\\AllegroApi\\ItemPostBuyDataStruct',
        'ArrayOfItempostbuydatastruct' => 'Ircykk\\AllegroApi\\ArrayOfItempostbuydatastruct',
        'doGetPostBuyDataResponse' => 'Ircykk\\AllegroApi\\doGetPostBuyDataResponse',
        'DoGetPostBuyFormsDataForBuyersRequest' => 'Ircykk\\AllegroApi\\DoGetPostBuyFormsDataForBuyersRequest',
        'PostBuyFormItemDealsVariantStruct' => 'Ircykk\\AllegroApi\\PostBuyFormItemDealsVariantStruct',
        'PostBuyFormItemDealsAdditionalServiceStruct' => 'Ircykk\\AllegroApi\\PostBuyFormItemDealsAdditionalServiceStruct',
        'ArrayOfPostbuyformitemdealsadditionalservicestruct' => 'Ircykk\\AllegroApi\\ArrayOfPostbuyformitemdealsadditionalservicestruct',
        'PostBuyFormItemDealsStruct' => 'Ircykk\\AllegroApi\\PostBuyFormItemDealsStruct',
        'ArrayOfPostbuyformitemdealsstruct' => 'Ircykk\\AllegroApi\\ArrayOfPostbuyformitemdealsstruct',
        'PostBuyFormItemStruct' => 'Ircykk\\AllegroApi\\PostBuyFormItemStruct',
        'ArrayOfPostbuyformitemstruct' => 'Ircykk\\AllegroApi\\ArrayOfPostbuyformitemstruct',
        'PostBuyFormShipmentTrackingStruct' => 'Ircykk\\AllegroApi\\PostBuyFormShipmentTrackingStruct',
        'ArrayOfPostbuyformshipmenttrackingstruct' => 'Ircykk\\AllegroApi\\ArrayOfPostbuyformshipmenttrackingstruct',
        'PostBuyFormAddressStruct' => 'Ircykk\\AllegroApi\\PostBuyFormAddressStruct',
        'PostBuyFormSellersStruct' => 'Ircykk\\AllegroApi\\PostBuyFormSellersStruct',
        'ArrayOfPostbuyformsellersstruct' => 'Ircykk\\AllegroApi\\ArrayOfPostbuyformsellersstruct',
        'PostBuyFormForBuyersDataStruct' => 'Ircykk\\AllegroApi\\PostBuyFormForBuyersDataStruct',
        'ArrayOfPostbuyformforbuyersdatastruct' => 'Ircykk\\AllegroApi\\ArrayOfPostbuyformforbuyersdatastruct',
        'doGetPostBuyFormsDataForBuyersResponse' => 'Ircykk\\AllegroApi\\doGetPostBuyFormsDataForBuyersResponse',
        'DoGetPostBuyFormsDataForSellersRequest' => 'Ircykk\\AllegroApi\\DoGetPostBuyFormsDataForSellersRequest',
        'PostBuyFormDataStruct' => 'Ircykk\\AllegroApi\\PostBuyFormDataStruct',
        'ArrayOfPostbuyformdatastruct' => 'Ircykk\\AllegroApi\\ArrayOfPostbuyformdatastruct',
        'doGetPostBuyFormsDataForSellersResponse' => 'Ircykk\\AllegroApi\\doGetPostBuyFormsDataForSellersResponse',
        'DoGetPostBuyFormsIdsRequest' => 'Ircykk\\AllegroApi\\DoGetPostBuyFormsIdsRequest',
        'doGetPostBuyFormsIdsResponse' => 'Ircykk\\AllegroApi\\doGetPostBuyFormsIdsResponse',
        'DoGetPostBuyItemInfoRequest' => 'Ircykk\\AllegroApi\\DoGetPostBuyItemInfoRequest',
        'PostBuyItemInfoStruct' => 'Ircykk\\AllegroApi\\PostBuyItemInfoStruct',
        'ArrayOfPostbuyiteminfostruct' => 'Ircykk\\AllegroApi\\ArrayOfPostbuyiteminfostruct',
        'doGetPostBuyItemInfoResponse' => 'Ircykk\\AllegroApi\\doGetPostBuyItemInfoResponse',
        'DoGetRefundsDealsRequest' => 'Ircykk\\AllegroApi\\DoGetRefundsDealsRequest',
        'RefundsDealsListType' => 'Ircykk\\AllegroApi\\RefundsDealsListType',
        'ArrayOfRefundsdealslisttype' => 'Ircykk\\AllegroApi\\ArrayOfRefundsdealslisttype',
        'doGetRefundsDealsResponse' => 'Ircykk\\AllegroApi\\doGetRefundsDealsResponse',
        'DoGetRefundsListRequest' => 'Ircykk\\AllegroApi\\DoGetRefundsListRequest',
        'RefundDetailsType' => 'Ircykk\\AllegroApi\\RefundDetailsType',
        'RefundListType' => 'Ircykk\\AllegroApi\\RefundListType',
        'ArrayOfRefundlisttype' => 'Ircykk\\AllegroApi\\ArrayOfRefundlisttype',
        'doGetRefundsListResponse' => 'Ircykk\\AllegroApi\\doGetRefundsListResponse',
        'DoGetRefundsReasonsRequest' => 'Ircykk\\AllegroApi\\DoGetRefundsReasonsRequest',
        'ReasonInfoType' => 'Ircykk\\AllegroApi\\ReasonInfoType',
        'ArrayOfReasoninfotype' => 'Ircykk\\AllegroApi\\ArrayOfReasoninfotype',
        'doGetRefundsReasonsResponse' => 'Ircykk\\AllegroApi\\doGetRefundsReasonsResponse',
        'DoGetRelatedItemsRequest' => 'Ircykk\\AllegroApi\\DoGetRelatedItemsRequest',
        'RelatedItemStruct' => 'Ircykk\\AllegroApi\\RelatedItemStruct',
        'ArrayOfRelateditemstruct' => 'Ircykk\\AllegroApi\\ArrayOfRelateditemstruct',
        'RelatedItemsStruct' => 'Ircykk\\AllegroApi\\RelatedItemsStruct',
        'doGetRelatedItemsResponse' => 'Ircykk\\AllegroApi\\doGetRelatedItemsResponse',
        'DoGetSellFormFieldsForCategoryRequest' => 'Ircykk\\AllegroApi\\DoGetSellFormFieldsForCategoryRequest',
        'SellFormType' => 'Ircykk\\AllegroApi\\SellFormType',
        'ArrayOfSellformtype' => 'Ircykk\\AllegroApi\\ArrayOfSellformtype',
        'SellFormFieldsForCategoryStruct' => 'Ircykk\\AllegroApi\\SellFormFieldsForCategoryStruct',
        'doGetSellFormFieldsForCategoryResponse' => 'Ircykk\\AllegroApi\\doGetSellFormFieldsForCategoryResponse',
        'DoGetSessionHandleForWidgetRequest' => 'Ircykk\\AllegroApi\\DoGetSessionHandleForWidgetRequest',
        'doGetSessionHandleForWidgetResponse' => 'Ircykk\\AllegroApi\\doGetSessionHandleForWidgetResponse',
        'DoGetShipmentDataRequest' => 'Ircykk\\AllegroApi\\DoGetShipmentDataRequest',
        'ShipmentTimeStruct' => 'Ircykk\\AllegroApi\\ShipmentTimeStruct',
        'ShipmentDataStruct' => 'Ircykk\\AllegroApi\\ShipmentDataStruct',
        'ArrayOfShipmentdatastruct' => 'Ircykk\\AllegroApi\\ArrayOfShipmentdatastruct',
        'doGetShipmentDataResponse' => 'Ircykk\\AllegroApi\\doGetShipmentDataResponse',
        'DoGetShipmentDataForRelatedItemsRequest' => 'Ircykk\\AllegroApi\\DoGetShipmentDataForRelatedItemsRequest',
        'ShipmentPaymentInfoStruct' => 'Ircykk\\AllegroApi\\ShipmentPaymentInfoStruct',
        'ArrayOfShipmentpaymentinfostruct' => 'Ircykk\\AllegroApi\\ArrayOfShipmentpaymentinfostruct',
        'SellerPaymentInfoStruct' => 'Ircykk\\AllegroApi\\SellerPaymentInfoStruct',
        'SellerShipmentDataStruct' => 'Ircykk\\AllegroApi\\SellerShipmentDataStruct',
        'ArrayOfSellershipmentdatastruct' => 'Ircykk\\AllegroApi\\ArrayOfSellershipmentdatastruct',
        'RelatedItemsShipmentDataStruct' => 'Ircykk\\AllegroApi\\RelatedItemsShipmentDataStruct',
        'doGetShipmentDataForRelatedItemsResponse' => 'Ircykk\\AllegroApi\\doGetShipmentDataForRelatedItemsResponse',
        'DoGetShipmentPriceTypesRequest' => 'Ircykk\\AllegroApi\\DoGetShipmentPriceTypesRequest',
        'ShipmentPriceTypeStruct' => 'Ircykk\\AllegroApi\\ShipmentPriceTypeStruct',
        'ArrayOfShipmentpricetypestruct' => 'Ircykk\\AllegroApi\\ArrayOfShipmentpricetypestruct',
        'doGetShipmentPriceTypesResponse' => 'Ircykk\\AllegroApi\\doGetShipmentPriceTypesResponse',
        'DoGetSiteJournalRequest' => 'Ircykk\\AllegroApi\\DoGetSiteJournalRequest',
        'SiteJournal' => 'Ircykk\\AllegroApi\\SiteJournal',
        'ArrayOfSitejournal' => 'Ircykk\\AllegroApi\\ArrayOfSitejournal',
        'doGetSiteJournalResponse' => 'Ircykk\\AllegroApi\\doGetSiteJournalResponse',
        'DoGetSiteJournalDealsRequest' => 'Ircykk\\AllegroApi\\DoGetSiteJournalDealsRequest',
        'SiteJournalDealsStruct' => 'Ircykk\\AllegroApi\\SiteJournalDealsStruct',
        'ArrayOfSitejournaldealsstruct' => 'Ircykk\\AllegroApi\\ArrayOfSitejournaldealsstruct',
        'doGetSiteJournalDealsResponse' => 'Ircykk\\AllegroApi\\doGetSiteJournalDealsResponse',
        'DoGetSiteJournalDealsInfoRequest' => 'Ircykk\\AllegroApi\\DoGetSiteJournalDealsInfoRequest',
        'SiteJournalDealsInfoStruct' => 'Ircykk\\AllegroApi\\SiteJournalDealsInfoStruct',
        'doGetSiteJournalDealsInfoResponse' => 'Ircykk\\AllegroApi\\doGetSiteJournalDealsInfoResponse',
        'DoGetSiteJournalInfoRequest' => 'Ircykk\\AllegroApi\\DoGetSiteJournalInfoRequest',
        'SiteJournalInfo' => 'Ircykk\\AllegroApi\\SiteJournalInfo',
        'doGetSiteJournalInfoResponse' => 'Ircykk\\AllegroApi\\doGetSiteJournalInfoResponse',
        'DoGetStatesInfoRequest' => 'Ircykk\\AllegroApi\\DoGetStatesInfoRequest',
        'StateInfoStruct' => 'Ircykk\\AllegroApi\\StateInfoStruct',
        'ArrayOfStateinfostruct' => 'Ircykk\\AllegroApi\\ArrayOfStateinfostruct',
        'doGetStatesInfoResponse' => 'Ircykk\\AllegroApi\\doGetStatesInfoResponse',
        'DoGetSystemTimeRequest' => 'Ircykk\\AllegroApi\\DoGetSystemTimeRequest',
        'doGetSystemTimeResponse' => 'Ircykk\\AllegroApi\\doGetSystemTimeResponse',
        'DoGetTransactionsIDsRequest' => 'Ircykk\\AllegroApi\\DoGetTransactionsIDsRequest',
        'doGetTransactionsIDsResponse' => 'Ircykk\\AllegroApi\\doGetTransactionsIDsResponse',
        'DoGetUserIDRequest' => 'Ircykk\\AllegroApi\\DoGetUserIDRequest',
        'doGetUserIDResponse' => 'Ircykk\\AllegroApi\\doGetUserIDResponse',
        'DoGetUserLoginRequest' => 'Ircykk\\AllegroApi\\DoGetUserLoginRequest',
        'doGetUserLoginResponse' => 'Ircykk\\AllegroApi\\doGetUserLoginResponse',
        'DoLoginRequest' => 'Ircykk\\AllegroApi\\DoLoginRequest',
        'doLoginResponse' => 'Ircykk\\AllegroApi\\doLoginResponse',
        'DoLoginEncRequest' => 'Ircykk\\AllegroApi\\DoLoginEncRequest',
        'doLoginEncResponse' => 'Ircykk\\AllegroApi\\doLoginEncResponse',
        'DoLoginWithAccessTokenRequest' => 'Ircykk\\AllegroApi\\DoLoginWithAccessTokenRequest',
        'doLoginWithAccessTokenResponse' => 'Ircykk\\AllegroApi\\doLoginWithAccessTokenResponse',
        'DoMyAccount2Request' => 'Ircykk\\AllegroApi\\DoMyAccount2Request',
        'MyAccountStruct2' => 'Ircykk\\AllegroApi\\MyAccountStruct2',
        'ArrayOfMyaccountstruct2' => 'Ircykk\\AllegroApi\\ArrayOfMyaccountstruct2',
        'doMyAccount2Response' => 'Ircykk\\AllegroApi\\doMyAccount2Response',
        'DoMyAccountItemsCountRequest' => 'Ircykk\\AllegroApi\\DoMyAccountItemsCountRequest',
        'doMyAccountItemsCountResponse' => 'Ircykk\\AllegroApi\\doMyAccountItemsCountResponse',
        'DoMyBillingRequest' => 'Ircykk\\AllegroApi\\DoMyBillingRequest',
        'doMyBillingResponse' => 'Ircykk\\AllegroApi\\doMyBillingResponse',
        'DoMyBillingItemRequest' => 'Ircykk\\AllegroApi\\DoMyBillingItemRequest',
        'ItemBilling' => 'Ircykk\\AllegroApi\\ItemBilling',
        'ArrayOfItembilling' => 'Ircykk\\AllegroApi\\ArrayOfItembilling',
        'doMyBillingItemResponse' => 'Ircykk\\AllegroApi\\doMyBillingItemResponse',
        'DoMyContactRequest' => 'Ircykk\\AllegroApi\\DoMyContactRequest',
        'MyContactList' => 'Ircykk\\AllegroApi\\MyContactList',
        'ArrayOfMycontactlist' => 'Ircykk\\AllegroApi\\ArrayOfMycontactlist',
        'doMyContactResponse' => 'Ircykk\\AllegroApi\\doMyContactResponse',
        'ItemTemplateCreateStruct' => 'Ircykk\\AllegroApi\\ItemTemplateCreateStruct',
        'DoNewAuctionExtRequest' => 'Ircykk\\AllegroApi\\DoNewAuctionExtRequest',
        'doNewAuctionExtResponse' => 'Ircykk\\AllegroApi\\doNewAuctionExtResponse',
        'DoQueryAllSysStatusRequest' => 'Ircykk\\AllegroApi\\DoQueryAllSysStatusRequest',
        'SysStatusType' => 'Ircykk\\AllegroApi\\SysStatusType',
        'ArrayOfSysstatustype' => 'Ircykk\\AllegroApi\\ArrayOfSysstatustype',
        'doQueryAllSysStatusResponse' => 'Ircykk\\AllegroApi\\doQueryAllSysStatusResponse',
        'DoQuerySysStatusRequest' => 'Ircykk\\AllegroApi\\DoQuerySysStatusRequest',
        'doQuerySysStatusResponse' => 'Ircykk\\AllegroApi\\doQuerySysStatusResponse',
        'DoRemoveFromBlackListRequest' => 'Ircykk\\AllegroApi\\DoRemoveFromBlackListRequest',
        'BlackListResStruct' => 'Ircykk\\AllegroApi\\BlackListResStruct',
        'ArrayOfBlacklistresstruct' => 'Ircykk\\AllegroApi\\ArrayOfBlacklistresstruct',
        'doRemoveFromBlackListResponse' => 'Ircykk\\AllegroApi\\doRemoveFromBlackListResponse',
        'DoRequestCancelBidRequest' => 'Ircykk\\AllegroApi\\DoRequestCancelBidRequest',
        'doRequestCancelBidResponse' => 'Ircykk\\AllegroApi\\doRequestCancelBidResponse',
        'DoRequestPayoutRequest' => 'Ircykk\\AllegroApi\\DoRequestPayoutRequest',
        'RequestPayoutStruct' => 'Ircykk\\AllegroApi\\RequestPayoutStruct',
        'doRequestPayoutResponse' => 'Ircykk\\AllegroApi\\doRequestPayoutResponse',
        'DoRequestSurchargeRequest' => 'Ircykk\\AllegroApi\\DoRequestSurchargeRequest',
        'doRequestSurchargeResponse' => 'Ircykk\\AllegroApi\\doRequestSurchargeResponse',
        'DoSellSomeAgainRequest' => 'Ircykk\\AllegroApi\\DoSellSomeAgainRequest',
        'StructSellAgain' => 'Ircykk\\AllegroApi\\StructSellAgain',
        'ArrayOfStructsellagain' => 'Ircykk\\AllegroApi\\ArrayOfStructsellagain',
        'StructSellFailed' => 'Ircykk\\AllegroApi\\StructSellFailed',
        'ArrayOfStructsellfailed' => 'Ircykk\\AllegroApi\\ArrayOfStructsellfailed',
        'doSellSomeAgainResponse' => 'Ircykk\\AllegroApi\\doSellSomeAgainResponse',
        'DoSellSomeAgainInShopRequest' => 'Ircykk\\AllegroApi\\DoSellSomeAgainInShopRequest',
        'doSellSomeAgainInShopResponse' => 'Ircykk\\AllegroApi\\doSellSomeAgainInShopResponse',
        'DoSendEmailToUserRequest' => 'Ircykk\\AllegroApi\\DoSendEmailToUserRequest',
        'doSendEmailToUserResponse' => 'Ircykk\\AllegroApi\\doSendEmailToUserResponse',
        'NewPostBuyFormSellerStruct' => 'Ircykk\\AllegroApi\\NewPostBuyFormSellerStruct',
        'ArrayOfNewpostbuyformsellerstruct' => 'Ircykk\\AllegroApi\\ArrayOfNewpostbuyformsellerstruct',
        'InvoiceInfoStruct' => 'Ircykk\\AllegroApi\\InvoiceInfoStruct',
        'NewPostBuyFormCommonStruct' => 'Ircykk\\AllegroApi\\NewPostBuyFormCommonStruct',
        'DoSendPostBuyFormRequest' => 'Ircykk\\AllegroApi\\DoSendPostBuyFormRequest',
        'ActionDataStruct' => 'Ircykk\\AllegroApi\\ActionDataStruct',
        'ArrayOfActiondatastruct' => 'Ircykk\\AllegroApi\\ArrayOfActiondatastruct',
        'TransactionPayByLinkStruct' => 'Ircykk\\AllegroApi\\TransactionPayByLinkStruct',
        'PostBuyFormStruct' => 'Ircykk\\AllegroApi\\PostBuyFormStruct',
        'doSendPostBuyFormResponse' => 'Ircykk\\AllegroApi\\doSendPostBuyFormResponse',
        'DoSendRefundFormRequest' => 'Ircykk\\AllegroApi\\DoSendRefundFormRequest',
        'doSendRefundFormResponse' => 'Ircykk\\AllegroApi\\doSendRefundFormResponse',
        'DoSetFreeDeliveryAmountRequest' => 'Ircykk\\AllegroApi\\DoSetFreeDeliveryAmountRequest',
        'doSetFreeDeliveryAmountResponse' => 'Ircykk\\AllegroApi\\doSetFreeDeliveryAmountResponse',
        'DoSetShipmentPriceTypeRequest' => 'Ircykk\\AllegroApi\\DoSetShipmentPriceTypeRequest',
        'doSetShipmentPriceTypeResponse' => 'Ircykk\\AllegroApi\\doSetShipmentPriceTypeResponse',
        'DoShowItemInfoExtRequest' => 'Ircykk\\AllegroApi\\DoShowItemInfoExtRequest',
        'ItemInfoExt' => 'Ircykk\\AllegroApi\\ItemInfoExt',
        'doShowItemInfoExtResponse' => 'Ircykk\\AllegroApi\\doShowItemInfoExtResponse',
        'DoShowUserRequest' => 'Ircykk\\AllegroApi\\DoShowUserRequest',
        'ShowUserFeedbacks' => 'Ircykk\\AllegroApi\\ShowUserFeedbacks',
        'SellRatingAverageStruct' => 'Ircykk\\AllegroApi\\SellRatingAverageStruct',
        'ArrayOfSellratingaveragestruct' => 'Ircykk\\AllegroApi\\ArrayOfSellratingaveragestruct',
        'doShowUserResponse' => 'Ircykk\\AllegroApi\\doShowUserResponse',
        'DoVerifyItemRequest' => 'Ircykk\\AllegroApi\\DoVerifyItemRequest',
        'doVerifyItemResponse' => 'Ircykk\\AllegroApi\\doVerifyItemResponse',
    );

    /**
     * @var int $countryId
     */
    protected $countryId = 1;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey;

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle;

    /**
     * @var array $plugins
     */
    protected $plugins;

    /**
     * @param string $sessionHandle
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
    }

    /**
     * @param string $webapiKey
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
    }

    /**
     * @param int $countryId
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * @return string
     */
    private function getSessionHandle()
    {
        return $this->sessionHandle;
    }

    /**
     * @return string
     */
    private function getWebapiKey()
    {
        return $this->webapiKey;
    }

    /**
     * @return int
     */
    private function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param $plugin
     */
    public function addPlugin($plugin)
    {
        $this->plugins[] = $plugin;
    }

    /**
     * SoapClient constructor.
     *
     * @param null $wsdl
     * @param array $options
     */
    public function __construct($wsdl = null, array $options = array())
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge(array(
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
        ), $options);

        if (!$wsdl) {
            $wsdl = 'https://webapi.allegro.pl/service.php?wsdl';
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @param string $function_name
     * @param array $arguments
     * @param array|null $options
     * @param null $input_headers
     * @param array|null $output_headers
     * @return mixed|void
     */
    public function __soapCall(
        $function_name,
        $arguments,
        $options = null,
        $input_headers = null,
        &$output_headers = null
    ) {
        $response = parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);

        return $response;
    }

    /**
     * @param DoAddPackageInfoToPostBuyFormRequest $parameters
     * @return doAddPackageInfoToPostBuyFormResponse
     */
    public function doAddPackageInfoToPostBuyForm(DoAddPackageInfoToPostBuyFormRequest $parameters)
    {
        return $this->__soapCall('doAddPackageInfoToPostBuyForm', array($parameters));
    }

    /**
     * @param DoAddToBlackListRequest $parameters
     * @return doAddToBlackListResponse
     */
    public function doAddToBlackList(DoAddToBlackListRequest $parameters)
    {
        return $this->__soapCall('doAddToBlackList', array($parameters));
    }

    /**
     * @param DoBidItemRequest $parameters
     * @return doBidItemResponse
     */
    public function doBidItem(DoBidItemRequest $parameters)
    {
        return $this->__soapCall('doBidItem', array($parameters));
    }

    /**
     * @param DoCancelBidItemRequest $parameters
     * @return doCancelBidItemResponse
     */
    public function doCancelBidItem(DoCancelBidItemRequest $parameters)
    {
        return $this->__soapCall('doCancelBidItem', array($parameters));
    }

    /**
     * @param DoCancelRefundFormRequest $parameters
     * @return doCancelRefundFormResponse
     */
    public function doCancelRefundForm(DoCancelRefundFormRequest $parameters)
    {
        return $this->__soapCall('doCancelRefundForm', array($parameters));
    }

    /**
     * @param DoCancelRefundWarningRequest $parameters
     * @return doCancelRefundWarningResponse
     */
    public function doCancelRefundWarning(DoCancelRefundWarningRequest $parameters)
    {
        return $this->__soapCall('doCancelRefundWarning', array($parameters));
    }

    /**
     * @param DoCancelTransactionRequest $parameters
     * @return doCancelTransactionResponse
     */
    public function doCancelTransaction(DoCancelTransactionRequest $parameters)
    {
        return $this->__soapCall('doCancelTransaction', array($parameters));
    }

    /**
     * @param DoChangeItemFieldsRequest $parameters
     * @return doChangeItemFieldsResponse
     */
    public function doChangeItemFields(DoChangeItemFieldsRequest $parameters)
    {
        return $this->__soapCall('doChangeItemFields', array($parameters));
    }

    /**
     * @param DoChangePriceItemRequest $parameters
     * @return doChangePriceItemResponse
     */
    public function doChangePriceItem(DoChangePriceItemRequest $parameters)
    {
        return $this->__soapCall('doChangePriceItem', array($parameters));
    }

    /**
     * @param DoChangeQuantityItemRequest $parameters
     * @return doChangeQuantityItemResponse
     */
    public function doChangeQuantityItem(DoChangeQuantityItemRequest $parameters)
    {
        return $this->__soapCall('doChangeQuantityItem', array($parameters));
    }

    /**
     * @param DoCheckItemDescriptionRequest $parameters
     * @return doCheckItemDescriptionResponse
     */
    public function doCheckItemDescription(DoCheckItemDescriptionRequest $parameters)
    {
        return $this->__soapCall('doCheckItemDescription', array($parameters));
    }

    /**
     * @param DoCheckNewAuctionExtRequest $parameters
     * @return doCheckNewAuctionExtResponse
     */
    public function doCheckNewAuctionExt(DoCheckNewAuctionExtRequest $parameters)
    {
        return $this->__soapCall('doCheckNewAuctionExt', array($parameters));
    }

    /**
     * @param DoFinishItemRequest $parameters
     * @return doFinishItemResponse
     */
    public function doFinishItem(DoFinishItemRequest $parameters)
    {
        return $this->__soapCall('doFinishItem', array($parameters));
    }

    /**
     * @param DoFinishItemsRequest $parameters
     * @return doFinishItemsResponse
     */
    public function doFinishItems(DoFinishItemsRequest $parameters)
    {
        return $this->__soapCall('doFinishItems', array($parameters));
    }

    /**
     * @param DoGetArchiveRefundsListRequest $parameters
     * @return doGetArchiveRefundsListResponse
     */
    public function doGetArchiveRefundsList(DoGetArchiveRefundsListRequest $parameters)
    {
        return $this->__soapCall('doGetArchiveRefundsList', array($parameters));
    }

    /**
     * @param DoGetBidItem2Request $parameters
     * @return doGetBidItem2Response
     */
    public function doGetBidItem2(DoGetBidItem2Request $parameters)
    {
        return $this->__soapCall('doGetBidItem2', array($parameters));
    }

    /**
     * @param DoGetBlackListUsersRequest $parameters
     * @return doGetBlackListUsersResponse
     */
    public function doGetBlackListUsers(DoGetBlackListUsersRequest $parameters)
    {
        return $this->__soapCall('doGetBlackListUsers', array($parameters));
    }

    /**
     * @param DoGetCategoryPathRequest $parameters
     * @return doGetCategoryPathResponse
     */
    public function doGetCategoryPath(DoGetCategoryPathRequest $parameters)
    {
        return $this->__soapCall('doGetCategoryPath', array($parameters));
    }

    /**
     * @param DoGetCatsDataRequest $parameters
     * @return doGetCatsDataResponse
     */
    public function doGetCatsData(DoGetCatsDataRequest $parameters)
    {
        return $this->__soapCall('doGetCatsData', array($parameters));
    }

    /**
     * @param DoGetCatsDataCountRequest $parameters
     * @return doGetCatsDataCountResponse
     */
    public function doGetCatsDataCount(DoGetCatsDataCountRequest $parameters)
    {
        return $this->__soapCall('doGetCatsDataCount', array($parameters));
    }

    /**
     * @param DoGetCatsDataLimitRequest $parameters
     * @return doGetCatsDataLimitResponse
     */
    public function doGetCatsDataLimit(DoGetCatsDataLimitRequest $parameters)
    {
        return $this->__soapCall('doGetCatsDataLimit', array($parameters));
    }

    /**
     * @param DoGetCountriesRequest $parameters
     * @return doGetCountriesResponse
     */
    public function doGetCountries(DoGetCountriesRequest $parameters)
    {
        return $this->__soapCall('doGetCountries', array($parameters));
    }

    /**
     * @param DoGetDealsRequest $parameters
     * @return doGetDealsResponse
     */
    public function doGetDeals(DoGetDealsRequest $parameters)
    {
        return $this->__soapCall('doGetDeals', array($parameters));
    }

    /**
     * @param DoGetFilledPostBuyFormsRequest $parameters
     * @return doGetFilledPostBuyFormsResponse
     */
    public function doGetFilledPostBuyForms(DoGetFilledPostBuyFormsRequest $parameters)
    {
        return $this->__soapCall('doGetFilledPostBuyForms', array($parameters));
    }

    /**
     * @param DoGetFreeDeliveryAmountRequest $parameters
     * @return doGetFreeDeliveryAmountResponse
     */
    public function doGetFreeDeliveryAmount(DoGetFreeDeliveryAmountRequest $parameters)
    {
        return $this->__soapCall('doGetFreeDeliveryAmount', array($parameters));
    }

    /**
     * @param DoGetItemFieldsRequest $parameters
     * @return doGetItemFieldsResponse
     */
    public function doGetItemFields(DoGetItemFieldsRequest $parameters)
    {
        return $this->__soapCall('doGetItemFields', array($parameters));
    }

    /**
     * @param DoGetItemsImagesRequest $parameters
     * @return doGetItemsImagesResponse
     */
    public function doGetItemsImages(DoGetItemsImagesRequest $parameters)
    {
        return $this->__soapCall('doGetItemsImages', array($parameters));
    }

    /**
     * @param DoGetItemsInfoRequest $parameters
     * @return doGetItemsInfoResponse
     */
    public function doGetItemsInfo(DoGetItemsInfoRequest $parameters)
    {
        return $this->__soapCall('doGetItemsInfo', array($parameters));
    }

    /**
     * @param DoGetItemsListRequest $parameters
     * @return doGetItemsListResponse
     */
    public function doGetItemsList(DoGetItemsListRequest $parameters)
    {
        return $this->__soapCall('doGetItemsList', array($parameters));
    }

    /**
     * @param DoGetMessageToBuyerRequest $parameters
     * @return doGetMessageToBuyerResponse
     */
    public function doGetMessageToBuyer(DoGetMessageToBuyerRequest $parameters)
    {
        return $this->__soapCall('doGetMessageToBuyer', array($parameters));
    }

    /**
     * @param DoGetMyAddressesRequest $parameters
     * @return doGetMyAddressesResponse
     */
    public function doGetMyAddresses(DoGetMyAddressesRequest $parameters)
    {
        return $this->__soapCall('doGetMyAddresses', array($parameters));
    }

    /**
     * @param DoGetMyBidItemsRequest $parameters
     * @return doGetMyBidItemsResponse
     */
    public function doGetMyBidItems(DoGetMyBidItemsRequest $parameters)
    {
        return $this->__soapCall('doGetMyBidItems', array($parameters));
    }

    /**
     * @param DoGetMyCurrentShipmentPriceTypeRequest $parameters
     * @return doGetMyCurrentShipmentPriceTypeResponse
     */
    public function doGetMyCurrentShipmentPriceType(DoGetMyCurrentShipmentPriceTypeRequest $parameters)
    {
        return $this->__soapCall('doGetMyCurrentShipmentPriceType', array($parameters));
    }

    /**
     * @param DoGetMyDataRequest $parameters
     * @return doGetMyDataResponse
     */
    public function doGetMyData(DoGetMyDataRequest $parameters)
    {
        return $this->__soapCall('doGetMyData', array($parameters));
    }

    /**
     * @param DoGetMyFutureItemsRequest $parameters
     * @return doGetMyFutureItemsResponse
     */
    public function doGetMyFutureItems(DoGetMyFutureItemsRequest $parameters)
    {
        return $this->__soapCall('doGetMyFutureItems', array($parameters));
    }

    /**
     * @param DoGetMyIncomingPaymentsRequest $parameters
     * @return doGetMyIncomingPaymentsResponse
     */
    public function doGetMyIncomingPayments(DoGetMyIncomingPaymentsRequest $parameters)
    {
        return $this->__soapCall('doGetMyIncomingPayments', array($parameters));
    }

    /**
     * @param DoGetMyIncomingPaymentsRefundsRequest $parameters
     * @return doGetMyIncomingPaymentsRefundsResponse
     */
    public function doGetMyIncomingPaymentsRefunds(DoGetMyIncomingPaymentsRefundsRequest $parameters)
    {
        return $this->__soapCall('doGetMyIncomingPaymentsRefunds', array($parameters));
    }

    /**
     * @param DoGetMyNotSoldItemsRequest $parameters
     * @return doGetMyNotSoldItemsResponse
     */
    public function doGetMyNotSoldItems(DoGetMyNotSoldItemsRequest $parameters)
    {
        return $this->__soapCall('doGetMyNotSoldItems', array($parameters));
    }

    /**
     * @param DoGetMyNotWonItemsRequest $parameters
     * @return doGetMyNotWonItemsResponse
     */
    public function doGetMyNotWonItems(DoGetMyNotWonItemsRequest $parameters)
    {
        return $this->__soapCall('doGetMyNotWonItems', array($parameters));
    }

    /**
     * @param DoGetMyPaymentsRequest $parameters
     * @return doGetMyPaymentsResponse
     */
    public function doGetMyPayments(DoGetMyPaymentsRequest $parameters)
    {
        return $this->__soapCall('doGetMyPayments', array($parameters));
    }

    /**
     * @param DoGetMyPaymentsInfoRequest $parameters
     * @return doGetMyPaymentsInfoResponse
     */
    public function doGetMyPaymentsInfo(DoGetMyPaymentsInfoRequest $parameters)
    {
        return $this->__soapCall('doGetMyPaymentsInfo', array($parameters));
    }

    /**
     * @param DoGetMyPaymentsRefundsRequest $parameters
     * @return doGetMyPaymentsRefundsResponse
     */
    public function doGetMyPaymentsRefunds(DoGetMyPaymentsRefundsRequest $parameters)
    {
        return $this->__soapCall('doGetMyPaymentsRefunds', array($parameters));
    }

    /**
     * @param DoGetMyPayoutsRequest $parameters
     * @return doGetMyPayoutsResponse
     */
    public function doGetMyPayouts(DoGetMyPayoutsRequest $parameters)
    {
        return $this->__soapCall('doGetMyPayouts', array($parameters));
    }

    /**
     * @param DoGetMyPayoutsDetailsRequest $parameters
     * @return doGetMyPayoutsDetailsResponse
     */
    public function doGetMyPayoutsDetails(DoGetMyPayoutsDetailsRequest $parameters)
    {
        return $this->__soapCall('doGetMyPayoutsDetails', array($parameters));
    }

    /**
     * @param DoGetMySellItemsRequest $parameters
     * @return doGetMySellItemsResponse
     */
    public function doGetMySellItems(DoGetMySellItemsRequest $parameters)
    {
        return $this->__soapCall('doGetMySellItems', array($parameters));
    }

    /**
     * @param DoGetMySoldItemsRequest $parameters
     * @return doGetMySoldItemsResponse
     */
    public function doGetMySoldItems(DoGetMySoldItemsRequest $parameters)
    {
        return $this->__soapCall('doGetMySoldItems', array($parameters));
    }

    /**
     * @param DoGetMyWonItemsRequest $parameters
     * @return doGetMyWonItemsResponse
     */
    public function doGetMyWonItems(DoGetMyWonItemsRequest $parameters)
    {
        return $this->__soapCall('doGetMyWonItems', array($parameters));
    }

    /**
     * @param DoGetPaymentMethodsRequest $parameters
     * @return doGetPaymentMethodsResponse
     */
    public function doGetPaymentMethods(DoGetPaymentMethodsRequest $parameters)
    {
        return $this->__soapCall('doGetPaymentMethods', array($parameters));
    }

    /**
     * @param DoGetPostBuyDataRequest $parameters
     * @return doGetPostBuyDataResponse
     */
    public function doGetPostBuyData(DoGetPostBuyDataRequest $parameters)
    {
        return $this->__soapCall('doGetPostBuyData', array($parameters));
    }

    /**
     * @param DoGetPostBuyFormsDataForBuyersRequest $parameters
     * @return doGetPostBuyFormsDataForBuyersResponse
     */
    public function doGetPostBuyFormsDataForBuyers(DoGetPostBuyFormsDataForBuyersRequest $parameters)
    {
        return $this->__soapCall('doGetPostBuyFormsDataForBuyers', array($parameters));
    }

    /**
     * @param DoGetPostBuyFormsDataForSellersRequest $parameters
     * @return doGetPostBuyFormsDataForSellersResponse
     */
    public function doGetPostBuyFormsDataForSellers(DoGetPostBuyFormsDataForSellersRequest $parameters)
    {
        return $this->__soapCall('doGetPostBuyFormsDataForSellers', array($parameters));
    }

    /**
     * @param DoGetPostBuyFormsIdsRequest $parameters
     * @return doGetPostBuyFormsIdsResponse
     */
    public function doGetPostBuyFormsIds(DoGetPostBuyFormsIdsRequest $parameters)
    {
        return $this->__soapCall('doGetPostBuyFormsIds', array($parameters));
    }

    /**
     * @param DoGetPostBuyItemInfoRequest $parameters
     * @return doGetPostBuyItemInfoResponse
     */
    public function doGetPostBuyItemInfo(DoGetPostBuyItemInfoRequest $parameters)
    {
        return $this->__soapCall('doGetPostBuyItemInfo', array($parameters));
    }

    /**
     * @param DoGetRefundsDealsRequest $parameters
     * @return doGetRefundsDealsResponse
     */
    public function doGetRefundsDeals(DoGetRefundsDealsRequest $parameters)
    {
        return $this->__soapCall('doGetRefundsDeals', array($parameters));
    }

    /**
     * @param DoGetRefundsListRequest $parameters
     * @return doGetRefundsListResponse
     */
    public function doGetRefundsList(DoGetRefundsListRequest $parameters)
    {
        return $this->__soapCall('doGetRefundsList', array($parameters));
    }

    /**
     * @param DoGetRefundsReasonsRequest $parameters
     * @return doGetRefundsReasonsResponse
     */
    public function doGetRefundsReasons(DoGetRefundsReasonsRequest $parameters)
    {
        return $this->__soapCall('doGetRefundsReasons', array($parameters));
    }

    /**
     * @param DoGetRelatedItemsRequest $parameters
     * @return doGetRelatedItemsResponse
     */
    public function doGetRelatedItems(DoGetRelatedItemsRequest $parameters)
    {
        return $this->__soapCall('doGetRelatedItems', array($parameters));
    }

    /**
     * @param DoGetSellFormFieldsForCategoryRequest $parameters
     * @return doGetSellFormFieldsForCategoryResponse
     */
    public function doGetSellFormFieldsForCategory(DoGetSellFormFieldsForCategoryRequest $parameters)
    {
        return $this->__soapCall('doGetSellFormFieldsForCategory', array($parameters));
    }

    /**
     * @param DoGetSessionHandleForWidgetRequest $parameters
     * @return doGetSessionHandleForWidgetResponse
     */
    public function doGetSessionHandleForWidget(DoGetSessionHandleForWidgetRequest $parameters)
    {
        return $this->__soapCall('doGetSessionHandleForWidget', array($parameters));
    }

    /**
     * @param DoGetShipmentDataRequest $parameters
     * @return doGetShipmentDataResponse
     */
    public function doGetShipmentData(DoGetShipmentDataRequest $parameters)
    {
        return $this->__soapCall('doGetShipmentData', array($parameters));
    }

    /**
     * @param DoGetShipmentDataForRelatedItemsRequest $parameters
     * @return doGetShipmentDataForRelatedItemsResponse
     */
    public function doGetShipmentDataForRelatedItems(DoGetShipmentDataForRelatedItemsRequest $parameters)
    {
        return $this->__soapCall('doGetShipmentDataForRelatedItems', array($parameters));
    }

    /**
     * @param DoGetShipmentPriceTypesRequest $parameters
     * @return doGetShipmentPriceTypesResponse
     */
    public function doGetShipmentPriceTypes(DoGetShipmentPriceTypesRequest $parameters)
    {
        return $this->__soapCall('doGetShipmentPriceTypes', array($parameters));
    }

    /**
     * @param DoGetSiteJournalRequest $parameters
     * @return doGetSiteJournalResponse
     */
    public function doGetSiteJournal(DoGetSiteJournalRequest $parameters)
    {
        return $this->__soapCall('doGetSiteJournal', array($parameters));
    }

    /**
     * @param DoGetSiteJournalDealsRequest $parameters
     * @return doGetSiteJournalDealsResponse
     */
    public function doGetSiteJournalDeals(DoGetSiteJournalDealsRequest $parameters)
    {
        return $this->__soapCall('doGetSiteJournalDeals', array($parameters));
    }

    /**
     * @param DoGetSiteJournalDealsInfoRequest $parameters
     * @return doGetSiteJournalDealsInfoResponse
     */
    public function doGetSiteJournalDealsInfo(DoGetSiteJournalDealsInfoRequest $parameters)
    {
        return $this->__soapCall('doGetSiteJournalDealsInfo', array($parameters));
    }

    /**
     * @param DoGetSiteJournalInfoRequest $parameters
     * @return doGetSiteJournalInfoResponse
     */
    public function doGetSiteJournalInfo(DoGetSiteJournalInfoRequest $parameters)
    {
        return $this->__soapCall('doGetSiteJournalInfo', array($parameters));
    }

    /**
     * @param DoGetStatesInfoRequest $parameters
     * @return doGetStatesInfoResponse
     */
    public function doGetStatesInfo(DoGetStatesInfoRequest $parameters)
    {
        return $this->__soapCall('doGetStatesInfo', array($parameters));
    }

    /**
     * @param DoGetSystemTimeRequest $parameters
     * @return doGetSystemTimeResponse
     */
    public function doGetSystemTime(DoGetSystemTimeRequest $parameters)
    {
        return $this->__soapCall('doGetSystemTime', array($parameters));
    }

    /**
     * @param DoGetTransactionsIDsRequest $parameters
     * @return doGetTransactionsIDsResponse
     */
    public function doGetTransactionsIDs(DoGetTransactionsIDsRequest $parameters)
    {
        return $this->__soapCall('doGetTransactionsIDs', array($parameters));
    }

    /**
     * @param DoGetUserIDRequest $parameters
     * @return doGetUserIDResponse
     */
    public function doGetUserID(DoGetUserIDRequest $parameters)
    {
        return $this->__soapCall('doGetUserID', array($parameters));
    }

    /**
     * @param DoGetUserLoginRequest $parameters
     * @return doGetUserLoginResponse
     */
    public function doGetUserLogin(DoGetUserLoginRequest $parameters)
    {
        return $this->__soapCall('doGetUserLogin', array($parameters));
    }

    /**
     * @param DoLoginRequest $parameters
     * @return doLoginResponse
     */
    public function doLogin(DoLoginRequest $parameters)
    {
        return $this->__soapCall('doLogin', array($parameters));
    }

    /**
     * @param DoLoginEncRequest $parameters
     * @return doLoginEncResponse
     */
    public function doLoginEnc(DoLoginEncRequest $parameters)
    {
        return $this->__soapCall('doLoginEnc', array($parameters));
    }

    /**
     * @param DoLoginWithAccessTokenRequest $parameters
     * @return doLoginWithAccessTokenResponse
     */
    public function doLoginWithAccessToken(DoLoginWithAccessTokenRequest $parameters)
    {
        return $this->__soapCall('doLoginWithAccessToken', array($parameters));
    }

    /**
     * @param DoMyAccount2Request $parameters
     * @return doMyAccount2Response
     */
    public function doMyAccount2(DoMyAccount2Request $parameters)
    {
        return $this->__soapCall('doMyAccount2', array($parameters));
    }

    /**
     * @param DoMyAccountItemsCountRequest $parameters
     * @return doMyAccountItemsCountResponse
     */
    public function doMyAccountItemsCount(DoMyAccountItemsCountRequest $parameters)
    {
        return $this->__soapCall('doMyAccountItemsCount', array($parameters));
    }

    /**
     * @param DoMyBillingRequest $parameters
     * @return doMyBillingResponse
     */
    public function doMyBilling(DoMyBillingRequest $parameters)
    {
        return $this->__soapCall('doMyBilling', array($parameters));
    }

    /**
     * @param DoMyBillingItemRequest $parameters
     * @return doMyBillingItemResponse
     */
    public function doMyBillingItem(DoMyBillingItemRequest $parameters)
    {
        return $this->__soapCall('doMyBillingItem', array($parameters));
    }

    /**
     * @param DoMyContactRequest $parameters
     * @return doMyContactResponse
     */
    public function doMyContact(DoMyContactRequest $parameters)
    {
        return $this->__soapCall('doMyContact', array($parameters));
    }

    /**
     * @param DoNewAuctionExtRequest $parameters
     * @return doNewAuctionExtResponse
     */
    public function doNewAuctionExt(DoNewAuctionExtRequest $parameters)
    {
        return $this->__soapCall('doNewAuctionExt', array($parameters));
    }

    /**
     * @param DoQueryAllSysStatusRequest $parameters
     * @return doQueryAllSysStatusResponse
     */
    public function doQueryAllSysStatus(DoQueryAllSysStatusRequest $parameters)
    {
        return $this->__soapCall('doQueryAllSysStatus', array($parameters));
    }

    /**
     * @param DoQuerySysStatusRequest $parameters
     * @return doQuerySysStatusResponse
     */
    public function doQuerySysStatus(DoQuerySysStatusRequest $parameters)
    {
        return $this->__soapCall('doQuerySysStatus', array($parameters));
    }

    /**
     * @param DoRemoveFromBlackListRequest $parameters
     * @return doRemoveFromBlackListResponse
     */
    public function doRemoveFromBlackList(DoRemoveFromBlackListRequest $parameters)
    {
        return $this->__soapCall('doRemoveFromBlackList', array($parameters));
    }

    /**
     * @param DoRequestCancelBidRequest $parameters
     * @return doRequestCancelBidResponse
     */
    public function doRequestCancelBid(DoRequestCancelBidRequest $parameters)
    {
        return $this->__soapCall('doRequestCancelBid', array($parameters));
    }

    /**
     * @param DoRequestPayoutRequest $parameters
     * @return doRequestPayoutResponse
     */
    public function doRequestPayout(DoRequestPayoutRequest $parameters)
    {
        return $this->__soapCall('doRequestPayout', array($parameters));
    }

    /**
     * @param DoRequestSurchargeRequest $parameters
     * @return doRequestSurchargeResponse
     */
    public function doRequestSurcharge(DoRequestSurchargeRequest $parameters)
    {
        return $this->__soapCall('doRequestSurcharge', array($parameters));
    }

    /**
     * @param DoSellSomeAgainRequest $parameters
     * @return doSellSomeAgainResponse
     */
    public function doSellSomeAgain(DoSellSomeAgainRequest $parameters)
    {
        return $this->__soapCall('doSellSomeAgain', array($parameters));
    }

    /**
     * @param DoSellSomeAgainInShopRequest $parameters
     * @return doSellSomeAgainInShopResponse
     */
    public function doSellSomeAgainInShop(DoSellSomeAgainInShopRequest $parameters)
    {
        return $this->__soapCall('doSellSomeAgainInShop', array($parameters));
    }

    /**
     * @param DoSendEmailToUserRequest $parameters
     * @return doSendEmailToUserResponse
     */
    public function doSendEmailToUser(DoSendEmailToUserRequest $parameters)
    {
        return $this->__soapCall('doSendEmailToUser', array($parameters));
    }

    /**
     * @param DoSendPostBuyFormRequest $parameters
     * @return doSendPostBuyFormResponse
     */
    public function doSendPostBuyForm(DoSendPostBuyFormRequest $parameters)
    {
        return $this->__soapCall('doSendPostBuyForm', array($parameters));
    }

    /**
     * @param DoSendRefundFormRequest $parameters
     * @return doSendRefundFormResponse
     */
    public function doSendRefundForm(DoSendRefundFormRequest $parameters)
    {
        return $this->__soapCall('doSendRefundForm', array($parameters));
    }

    /**
     * @param DoSetFreeDeliveryAmountRequest $parameters
     * @return doSetFreeDeliveryAmountResponse
     */
    public function doSetFreeDeliveryAmount(DoSetFreeDeliveryAmountRequest $parameters)
    {
        return $this->__soapCall('doSetFreeDeliveryAmount', array($parameters));
    }

    /**
     * @param DoSetShipmentPriceTypeRequest $parameters
     * @return doSetShipmentPriceTypeResponse
     */
    public function doSetShipmentPriceType(DoSetShipmentPriceTypeRequest $parameters)
    {
        return $this->__soapCall('doSetShipmentPriceType', array($parameters));
    }

    /**
     * @param DoShowItemInfoExtRequest $parameters
     * @return doShowItemInfoExtResponse
     */
    public function doShowItemInfoExt(DoShowItemInfoExtRequest $parameters)
    {
        return $this->__soapCall('doShowItemInfoExt', array($parameters));
    }

    /**
     * @param DoShowUserRequest $parameters
     * @return doShowUserResponse
     */
    public function doShowUser(DoShowUserRequest $parameters)
    {
        return $this->__soapCall('doShowUser', array($parameters));
    }

    /**
     * @param DoVerifyItemRequest $parameters
     * @return doVerifyItemResponse
     */
    public function doVerifyItem(DoVerifyItemRequest $parameters)
    {
        return $this->__soapCall('doVerifyItem', array($parameters));
    }

    /**
     * @param int $transactionId
     * @param ArrayOfPackageinfostruct $packageInfo
     * @return doAddPackageInfoToPostBuyFormResponse
     */
    public function addPackageInfoToPostBuyForm($transactionId = null, $packageInfo = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoAddPackageInfoToPostBuyFormRequest($sessionHandle, $transactionId, $packageInfo);

        return $this->doAddPackageInfoToPostBuyForm($request);
    }

    /**
     * @param ArrayOfUserblackliststruct $usersBlackListArray
     * @return doAddToBlackListResponse
     */
    public function addToBlackList($usersBlackListArray = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoAddToBlackListRequest($sessionHandle, $usersBlackListArray);

        return $this->doAddToBlackList($request);
    }

    /**
     * @param int $bidItId
     * @param float $bidUserPrice
     * @param int $bidQuantity
     * @param int $bidBuyNow
     * @param PharmacyRecipientDataStruct $pharmacyRecipientData
     * @param string $variantId
     * @return doBidItemResponse
     */
    public function bidItem(
        $bidItId = null,
        $bidUserPrice = null,
        $bidQuantity = null,
        $bidBuyNow = null,
        $pharmacyRecipientData = null,
        $variantId = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoBidItemRequest($sessionHandle, $bidItId, $bidUserPrice, $bidQuantity, $bidBuyNow,
            $pharmacyRecipientData, $variantId);

        return $this->doBidItem($request);
    }

    /**
     * @param int $cancelItemId
     * @param ArrayOfInt $cancelBidsArray
     * @param string $cancelBidsReason
     * @param int $cancelAddToBlackList
     * @return doCancelBidItemResponse
     */
    public function cancelBidItem(
        $cancelItemId = null,
        $cancelBidsArray = null,
        $cancelBidsReason = null,
        $cancelAddToBlackList = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoCancelBidItemRequest($sessionHandle, $cancelItemId, $cancelBidsArray, $cancelBidsReason,
            $cancelAddToBlackList);

        return $this->doCancelBidItem($request);
    }

    /**
     * @param int $refundId
     * @return doCancelRefundFormResponse
     */
    public function cancelRefundForm($refundId = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoCancelRefundFormRequest($sessionHandle, $refundId);

        return $this->doCancelRefundForm($request);
    }

    /**
     * @param int $refundId
     * @return doCancelRefundWarningResponse
     */
    public function cancelRefundWarning($refundId = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoCancelRefundWarningRequest($sessionHandle, $refundId);

        return $this->doCancelRefundWarning($request);
    }

    /**
     * @param int $transactionId
     * @return doCancelTransactionResponse
     */
    public function cancelTransaction($transactionId = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoCancelTransactionRequest($sessionHandle, $transactionId);

        return $this->doCancelTransaction($request);
    }

    /**
     * @param int $itemId
     * @param ArrayOfFieldsvalue $fieldsToModify
     * @param ArrayOfInt $fieldsToRemove
     * @param int $previewOnly
     * @param ArrayOfVariantstruct $variants
     * @param ArrayOfTagnamestruct $tags
     * @param AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     * @param string $additionalServicesGroup
     * @return doChangeItemFieldsResponse
     */
    public function changeItemFields(
        $itemId = null,
        $fieldsToModify = null,
        $fieldsToRemove = null,
        $previewOnly = null,
        $variants = null,
        $tags = null,
        $afterSalesServiceConditions = null,
        $additionalServicesGroup = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoChangeItemFieldsRequest($sessionHandle, $itemId, $fieldsToModify, $fieldsToRemove,
            $previewOnly, $variants, $tags, $afterSalesServiceConditions, $additionalServicesGroup);

        return $this->doChangeItemFields($request);
    }

    /**
     * @param int $itemId
     * @param float $newStartingPrice
     * @param float $newReservePrice
     * @param float $newBuyNowPrice
     * @param float $newAdvertisementPrice
     * @return doChangePriceItemResponse
     */
    public function changePriceItem(
        $itemId = null,
        $newStartingPrice = null,
        $newReservePrice = null,
        $newBuyNowPrice = null,
        $newAdvertisementPrice = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoChangePriceItemRequest($sessionHandle, $itemId, $newStartingPrice, $newReservePrice,
            $newBuyNowPrice, $newAdvertisementPrice);

        return $this->doChangePriceItem($request);
    }

    /**
     * @param int $itemId
     * @param int $newItemQuantity
     * @return doChangeQuantityItemResponse
     */
    public function changeQuantityItem($itemId = null, $newItemQuantity = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoChangeQuantityItemRequest($sessionHandle, $itemId, $newItemQuantity);

        return $this->doChangeQuantityItem($request);
    }

    /**
     * @param string $descriptionContent
     * @return doCheckItemDescriptionResponse
     */
    public function checkItemDescription($descriptionContent = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoCheckItemDescriptionRequest($sessionHandle, $descriptionContent);

        return $this->doCheckItemDescription($request);
    }

    /**
     * @param ArrayOfFieldsvalue $fields
     * @param ArrayOfVariantstruct $variants
     * @param ArrayOfTagnamestruct $tags
     * @param AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     * @return doCheckNewAuctionExtResponse
     */
    public function checkNewAuctionExt(
        $fields = null,
        $variants = null,
        $tags = null,
        $afterSalesServiceConditions = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoCheckNewAuctionExtRequest($sessionHandle, $fields, $variants, $tags,
            $afterSalesServiceConditions);

        return $this->doCheckNewAuctionExt($request);
    }

    /**
     * @param int $finishItemId
     * @param int $finishCancelAllBids
     * @param string $finishCancelReason
     * @return doFinishItemResponse
     */
    public function finishItem($finishItemId = null, $finishCancelAllBids = null, $finishCancelReason = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoFinishItemRequest($sessionHandle, $finishItemId, $finishCancelAllBids, $finishCancelReason);

        return $this->doFinishItem($request);
    }

    /**
     * @param ArrayOfFinishitemsstruct $finishItemsList
     * @return doFinishItemsResponse
     */
    public function finishItems($finishItemsList = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoFinishItemsRequest($sessionHandle, $finishItemsList);

        return $this->doFinishItems($request);
    }

    /**
     * @param int $itemId
     * @return doGetArchiveRefundsListResponse
     */
    public function getArchiveRefundsList($itemId = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetArchiveRefundsListRequest($sessionHandle, $itemId);

        return $this->doGetArchiveRefundsList($request);
    }

    /**
     * @param int $itemId
     * @return doGetBidItem2Response
     */
    public function getBidItem2($itemId = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetBidItem2Request($sessionHandle, $itemId);

        return $this->doGetBidItem2($request);
    }

    /**
     * @return doGetBlackListUsersResponse
     */
    public function getBlackListUsers()
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetBlackListUsersRequest($sessionHandle);

        return $this->doGetBlackListUsers($request);
    }

    /**
     * @param int $categoryId
     * @return doGetCategoryPathResponse
     */
    public function getCategoryPath($categoryId = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetCategoryPathRequest($sessionHandle, $categoryId);

        return $this->doGetCategoryPath($request);
    }

    /**
     * @param boolean $onlyLeaf
     * @return doGetCatsDataResponse
     */
    public function getCatsData($onlyLeaf = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();
        $localVersion = null;

        $request = new DoGetCatsDataRequest($countryId, $localVersion, $webapiKey, $onlyLeaf);

        return $this->doGetCatsData($request);
    }

    /**
     * @param boolean $onlyLeaf
     * @return doGetCatsDataCountResponse
     */
    public function getCatsDataCount($onlyLeaf = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();
        $localVersion = null;

        $request = new DoGetCatsDataCountRequest($countryId, $localVersion, $webapiKey, $onlyLeaf);

        return $this->doGetCatsDataCount($request);
    }

    /**
     * @param int $offset
     * @param int $packageElement
     * @param boolean $onlyLeaf
     * @return doGetCatsDataLimitResponse
     */
    public function getCatsDataLimit($offset = null, $packageElement = null, $onlyLeaf = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();
        $localVersion = null;

        $request = new DoGetCatsDataLimitRequest($countryId, $localVersion, $webapiKey, $offset, $packageElement,
            $onlyLeaf);

        return $this->doGetCatsDataLimit($request);
    }

    /**
     * @return doGetCountriesResponse
     */
    public function getCountries()
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoGetCountriesRequest($countryId, $webapiKey);

        return $this->doGetCountries($request);
    }

    /**
     * @param int $itemId
     * @param int $buyerId
     * @return doGetDealsResponse
     */
    public function getDeals($itemId = null, $buyerId = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetDealsRequest($sessionHandle, $itemId, $buyerId);

        return $this->doGetDeals($request);
    }

    /**
     * @param int $paymentType
     * @param int $userRole
     * @param int $fillingTimeFrom
     * @param int $fillingTimeTo
     * @return doGetFilledPostBuyFormsResponse
     */
    public function getFilledPostBuyForms(
        $paymentType = null,
        $userRole = null,
        $fillingTimeFrom = null,
        $fillingTimeTo = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetFilledPostBuyFormsRequest($sessionHandle, $paymentType, $userRole, $fillingTimeFrom,
            $fillingTimeTo);

        return $this->doGetFilledPostBuyForms($request);
    }

    /**
     * @param int $userId
     * @return doGetFreeDeliveryAmountResponse
     */
    public function getFreeDeliveryAmount($userId = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoGetFreeDeliveryAmountRequest($userId, $countryId, $webapiKey);

        return $this->doGetFreeDeliveryAmount($request);
    }

    /**
     * @param int $itemId
     * @return doGetItemFieldsResponse
     */
    public function getItemFields($itemId = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetItemFieldsRequest($sessionHandle, $itemId);

        return $this->doGetItemFields($request);
    }

    /**
     * @param ArrayOfItemgetimage $itemsArray
     * @param int $imageType
     * @return doGetItemsImagesResponse
     */
    public function getItemsImages($itemsArray = null, $imageType = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetItemsImagesRequest($sessionHandle, $itemsArray, $imageType);

        return $this->doGetItemsImages($request);
    }

    /**
     * @param ArrayOfLong $itemsIdArray
     * @param int $getDesc
     * @param int $getImageUrl
     * @param int $getAttribs
     * @param int $getPostageOptions
     * @param int $getCompanyInfo
     * @param int $getProductInfo
     * @param int $getAfterSalesServiceConditions
     * @param int $getEan
     * @param int $getAdditionalServicesGroup
     * @return doGetItemsInfoResponse
     */
    public function getItemsInfo(
        $itemsIdArray = null,
        $getDesc = null,
        $getImageUrl = null,
        $getAttribs = null,
        $getPostageOptions = null,
        $getCompanyInfo = null,
        $getProductInfo = null,
        $getAfterSalesServiceConditions = null,
        $getEan = null,
        $getAdditionalServicesGroup = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetItemsInfoRequest($sessionHandle, $itemsIdArray, $getDesc, $getImageUrl, $getAttribs,
            $getPostageOptions, $getCompanyInfo, $getProductInfo, $getAfterSalesServiceConditions, $getEan,
            $getAdditionalServicesGroup);

        return $this->doGetItemsInfo($request);
    }

    /**
     * @param ArrayOfFilteroptionstype $filterOptions
     * @param SortOptionsType $sortOptions
     * @param int $resultSize
     * @param int $resultOffset
     * @param int $resultScope
     * @return doGetItemsListResponse
     */
    public function getItemsList(
        $filterOptions = null,
        $sortOptions = null,
        $resultSize = null,
        $resultOffset = null,
        $resultScope = null
    ) {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoGetItemsListRequest($webapiKey, $countryId, $filterOptions, $sortOptions, $resultSize,
            $resultOffset, $resultScope);

        return $this->doGetItemsList($request);
    }

    /**
     * @return doGetMyAddressesResponse
     */
    public function getMyAddresses()
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyAddressesRequest($sessionHandle);

        return $this->doGetMyAddresses($request);
    }

    /**
     * @param SortOptionsStruct $sortOptions
     * @param string $searchValue
     * @param int $categoryId
     * @param ArrayOfLong $itemIds
     * @param int $pageSize
     * @param int $pageNumber
     * @return doGetMyBidItemsResponse
     */
    public function getMyBidItems(
        $sortOptions = null,
        $searchValue = null,
        $categoryId = null,
        $itemIds = null,
        $pageSize = null,
        $pageNumber = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyBidItemsRequest($sessionHandle, $sortOptions, $searchValue, $categoryId, $itemIds,
            $pageSize, $pageNumber);

        return $this->doGetMyBidItems($request);
    }

    /**
     * @return doGetMyCurrentShipmentPriceTypeResponse
     */
    public function getMyCurrentShipmentPriceType()
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyCurrentShipmentPriceTypeRequest($sessionHandle);

        return $this->doGetMyCurrentShipmentPriceType($request);
    }

    /**
     * @return doGetMyDataResponse
     */
    public function getMyData()
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyDataRequest($sessionHandle);

        return $this->doGetMyData($request);
    }

    /**
     * @param SortOptionsStruct $sortOptions
     * @param FutureFilterOptionsStruct $filterOptions
     * @param int $categoryId
     * @param ArrayOfLong $itemIds
     * @param int $pageSize
     * @param int $pageNumber
     * @return doGetMyFutureItemsResponse
     */
    public function getMyFutureItems(
        $sortOptions = null,
        $filterOptions = null,
        $categoryId = null,
        $itemIds = null,
        $pageSize = null,
        $pageNumber = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyFutureItemsRequest($sessionHandle, $sortOptions, $filterOptions, $categoryId, $itemIds,
            $pageSize, $pageNumber);

        return $this->doGetMyFutureItems($request);
    }

    /**
     * @param int $buyerId
     * @param int $itemId
     * @param int $transRecvDateFrom
     * @param int $transRecvDateTo
     * @param int $transPageLimit
     * @param int $transOffset
     * @param int $strictedSearch
     * @return doGetMyIncomingPaymentsResponse
     */
    public function getMyIncomingPayments(
        $buyerId = null,
        $itemId = null,
        $transRecvDateFrom = null,
        $transRecvDateTo = null,
        $transPageLimit = null,
        $transOffset = null,
        $strictedSearch = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyIncomingPaymentsRequest($sessionHandle, $buyerId, $itemId, $transRecvDateFrom,
            $transRecvDateTo, $transPageLimit, $transOffset, $strictedSearch);

        return $this->doGetMyIncomingPayments($request);
    }

    /**
     * @param int $buyerId
     * @param int $itemId
     * @param int $limit
     * @param int $offset
     * @return doGetMyIncomingPaymentsRefundsResponse
     */
    public function getMyIncomingPaymentsRefunds($buyerId = null, $itemId = null, $limit = null, $offset = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyIncomingPaymentsRefundsRequest($sessionHandle, $buyerId, $itemId, $limit, $offset);

        return $this->doGetMyIncomingPaymentsRefunds($request);
    }

    /**
     * @param SortOptionsStruct $sortOptions
     * @param NotSoldFilterOptionsStruct $filterOptions
     * @param string $searchValue
     * @param int $categoryId
     * @param ArrayOfLong $itemIds
     * @param int $pageSize
     * @param int $pageNumber
     * @return doGetMyNotSoldItemsResponse
     */
    public function getMyNotSoldItems(
        $sortOptions = null,
        $filterOptions = null,
        $searchValue = null,
        $categoryId = null,
        $itemIds = null,
        $pageSize = null,
        $pageNumber = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyNotSoldItemsRequest($sessionHandle, $sortOptions, $filterOptions, $searchValue,
            $categoryId, $itemIds, $pageSize, $pageNumber);

        return $this->doGetMyNotSoldItems($request);
    }

    /**
     * @param SortOptionsStruct $sortOptions
     * @param string $searchValue
     * @param int $categoryId
     * @param ArrayOfLong $itemIds
     * @param int $pageSize
     * @param int $pageNumber
     * @return doGetMyNotWonItemsResponse
     */
    public function getMyNotWonItems(
        $sortOptions = null,
        $searchValue = null,
        $categoryId = null,
        $itemIds = null,
        $pageSize = null,
        $pageNumber = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyNotWonItemsRequest($sessionHandle, $sortOptions, $searchValue, $categoryId, $itemIds,
            $pageSize, $pageNumber);

        return $this->doGetMyNotWonItems($request);
    }

    /**
     * @param int $sellerId
     * @param int $itemId
     * @param int $paymentTimeFrom
     * @param int $paymentTimeTo
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $strictedSearch
     * @return doGetMyPaymentsResponse
     */
    public function getMyPayments(
        $sellerId = null,
        $itemId = null,
        $paymentTimeFrom = null,
        $paymentTimeTo = null,
        $pageSize = null,
        $pageNumber = null,
        $strictedSearch = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyPaymentsRequest($sessionHandle, $sellerId, $itemId, $paymentTimeFrom, $paymentTimeTo,
            $pageSize, $pageNumber, $strictedSearch);

        return $this->doGetMyPayments($request);
    }

    /**
     * @return doGetMyPaymentsInfoResponse
     */
    public function getMyPaymentsInfo()
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyPaymentsInfoRequest($sessionHandle);

        return $this->doGetMyPaymentsInfo($request);
    }

    /**
     * @param int $sellerId
     * @param int $itemId
     * @param int $limit
     * @param int $offset
     * @return doGetMyPaymentsRefundsResponse
     */
    public function getMyPaymentsRefunds($sellerId = null, $itemId = null, $limit = null, $offset = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyPaymentsRefundsRequest($sessionHandle, $sellerId, $itemId, $limit, $offset);

        return $this->doGetMyPaymentsRefunds($request);
    }

    /**
     * @param int $transCreateDateFrom
     * @param int $transCreateDateTo
     * @param int $transPageLimit
     * @param int $transOffset
     * @return doGetMyPayoutsResponse
     */
    public function getMyPayouts(
        $transCreateDateFrom = null,
        $transCreateDateTo = null,
        $transPageLimit = null,
        $transOffset = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyPayoutsRequest($sessionHandle, $transCreateDateFrom, $transCreateDateTo, $transPageLimit,
            $transOffset);

        return $this->doGetMyPayouts($request);
    }

    /**
     * @param int $payoutId
     * @param int $limit
     * @param int $offset
     * @return doGetMyPayoutsDetailsResponse
     */
    public function getMyPayoutsDetails($payoutId = null, $limit = null, $offset = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyPayoutsDetailsRequest($sessionHandle, $payoutId, $limit, $offset);

        return $this->doGetMyPayoutsDetails($request);
    }

    /**
     * @param SortOptionsStruct $sortOptions
     * @param SellFilterOptionsStruct $filterOptions
     * @param string $searchValue
     * @param int $categoryId
     * @param ArrayOfLong $itemIds
     * @param int $pageSize
     * @param int $pageNumber
     * @return doGetMySellItemsResponse
     */
    public function getMySellItems(
        $sortOptions = null,
        $filterOptions = null,
        $searchValue = null,
        $categoryId = null,
        $itemIds = null,
        $pageSize = null,
        $pageNumber = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMySellItemsRequest($sessionHandle, $sortOptions, $filterOptions, $searchValue, $categoryId,
            $itemIds, $pageSize, $pageNumber);

        return $this->doGetMySellItems($request);
    }

    /**
     * @param SortOptionsStruct $sortOptions
     * @param SoldFilterOptionsStruct $filterOptions
     * @param string $searchValue
     * @param int $categoryId
     * @param ArrayOfLong $itemIds
     * @param int $pageSize
     * @param int $pageNumber
     * @return doGetMySoldItemsResponse
     */
    public function getMySoldItems(
        $sortOptions = null,
        $filterOptions = null,
        $searchValue = null,
        $categoryId = null,
        $itemIds = null,
        $pageSize = null,
        $pageNumber = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMySoldItemsRequest($sessionHandle, $sortOptions, $filterOptions, $searchValue, $categoryId,
            $itemIds, $pageSize, $pageNumber);

        return $this->doGetMySoldItems($request);
    }

    /**
     * @param SortOptionsStruct $sortOptions
     * @param string $searchValue
     * @param int $categoryId
     * @param ArrayOfLong $itemIds
     * @param int $pageSize
     * @param int $pageNumber
     * @return doGetMyWonItemsResponse
     */
    public function getMyWonItems(
        $sortOptions = null,
        $searchValue = null,
        $categoryId = null,
        $itemIds = null,
        $pageSize = null,
        $pageNumber = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetMyWonItemsRequest($sessionHandle, $sortOptions, $searchValue, $categoryId, $itemIds,
            $pageSize, $pageNumber);

        return $this->doGetMyWonItems($request);
    }

    /**
     * @param ArrayOfLong $itemIds
     * @return doGetPaymentMethodsResponse
     */
    public function getPaymentMethods($itemIds = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetPaymentMethodsRequest($sessionHandle, $itemIds);

        return $this->doGetPaymentMethods($request);
    }

    /**
     * @param ArrayOfLong $itemsArray
     * @param ArrayOfLong $buyerFilterArray
     * @return doGetPostBuyDataResponse
     */
    public function getPostBuyData($itemsArray = null, $buyerFilterArray = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetPostBuyDataRequest($sessionHandle, $itemsArray, $buyerFilterArray);

        return $this->doGetPostBuyData($request);
    }

    /**
     * @param ArrayOfLong $transactionsIdsArray
     * @return doGetPostBuyFormsDataForBuyersResponse
     */
    public function getPostBuyFormsDataForBuyers($transactionsIdsArray = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetPostBuyFormsDataForBuyersRequest($sessionHandle, $transactionsIdsArray);

        return $this->doGetPostBuyFormsDataForBuyers($request);
    }

    /**
     * @param ArrayOfLong $transactionsIdsArray
     * @return doGetPostBuyFormsDataForSellersResponse
     */
    public function getPostBuyFormsDataForSellers($transactionsIdsArray = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetPostBuyFormsDataForSellersRequest($sessionHandle, $transactionsIdsArray);

        return $this->doGetPostBuyFormsDataForSellers($request);
    }

    /**
     * @param ArrayOfFilteroptionstype $filterOptions
     * @param int $resultSize
     * @param int $resultOffset
     * @return doGetPostBuyFormsIdsResponse
     */
    public function getPostBuyFormsIds($filterOptions = null, $resultSize = null, $resultOffset = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetPostBuyFormsIdsRequest($sessionHandle, $filterOptions, $resultSize, $resultOffset);

        return $this->doGetPostBuyFormsIds($request);
    }

    /**
     * @param ArrayOfLong $itemIds
     * @return doGetPostBuyItemInfoResponse
     */
    public function getPostBuyItemInfo($itemIds = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetPostBuyItemInfoRequest($sessionHandle, $itemIds);

        return $this->doGetPostBuyItemInfo($request);
    }

    /**
     * @param ArrayOfFilteroptionstype $filterOptions
     * @param string $sortOrder
     * @param int $resultSize
     * @param int $resultOffset
     * @return doGetRefundsDealsResponse
     */
    public function getRefundsDeals($filterOptions = null, $sortOrder = null, $resultSize = null, $resultOffset = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetRefundsDealsRequest($sessionHandle, $filterOptions, $sortOrder, $resultSize, $resultOffset);

        return $this->doGetRefundsDeals($request);
    }

    /**
     * @param ArrayOfFilteroptionstype $filterOptions
     * @param int $resultSize
     * @param int $resultOffset
     * @return doGetRefundsListResponse
     */
    public function getRefundsList($filterOptions = null, $resultSize = null, $resultOffset = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetRefundsListRequest($sessionHandle, $filterOptions, $resultSize, $resultOffset);

        return $this->doGetRefundsList($request);
    }

    /**
     * @param int $dealId
     * @return doGetRefundsReasonsResponse
     */
    public function getRefundsReasons($dealId = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetRefundsReasonsRequest($sessionHandle, $dealId);

        return $this->doGetRefundsReasons($request);
    }

    /**
     * @param ArrayOfLong $itemIds
     * @return doGetRelatedItemsResponse
     */
    public function getRelatedItems($itemIds = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetRelatedItemsRequest($sessionHandle, $itemIds);

        return $this->doGetRelatedItems($request);
    }

    /**
     * @param int $categoryId
     * @return doGetSellFormFieldsForCategoryResponse
     */
    public function getSellFormFieldsForCategory($categoryId = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoGetSellFormFieldsForCategoryRequest($webapiKey, $countryId, $categoryId);

        return $this->doGetSellFormFieldsForCategory($request);
    }

    /**
     * @return doGetSessionHandleForWidgetResponse
     */
    public function getSessionHandleForWidget()
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoGetSessionHandleForWidgetRequest($webapiKey, $countryId);

        return $this->doGetSessionHandleForWidget($request);
    }

    /**
     * @return doGetShipmentDataResponse
     */
    public function getShipmentData()
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoGetShipmentDataRequest($countryId, $webapiKey);

        return $this->doGetShipmentData($request);
    }

    /**
     * @param ArrayOfLong $itemIds
     * @return doGetShipmentDataForRelatedItemsResponse
     */
    public function getShipmentDataForRelatedItems($itemIds = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetShipmentDataForRelatedItemsRequest($sessionHandle, $itemIds);

        return $this->doGetShipmentDataForRelatedItems($request);
    }

    /**
     * @return doGetShipmentPriceTypesResponse
     */
    public function getShipmentPriceTypes()
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoGetShipmentPriceTypesRequest($countryId, $webapiKey);

        return $this->doGetShipmentPriceTypes($request);
    }

    /**
     * @param int $startingPoint
     * @param int $infoType
     * @return doGetSiteJournalResponse
     */
    public function getSiteJournal($startingPoint = null, $infoType = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetSiteJournalRequest($sessionHandle, $startingPoint, $infoType);

        return $this->doGetSiteJournal($request);
    }

    /**
     * @param int $journalStart
     * @return doGetSiteJournalDealsResponse
     */
    public function getSiteJournalDeals($journalStart = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetSiteJournalDealsRequest($sessionHandle, $journalStart);

        return $this->doGetSiteJournalDeals($request);
    }

    /**
     * @param int $journalStart
     * @return doGetSiteJournalDealsInfoResponse
     */
    public function getSiteJournalDealsInfo($journalStart = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetSiteJournalDealsInfoRequest($sessionHandle, $journalStart);

        return $this->doGetSiteJournalDealsInfo($request);
    }

    /**
     * @param int $startingPoint
     * @param int $infoType
     * @return doGetSiteJournalInfoResponse
     */
    public function getSiteJournalInfo($startingPoint = null, $infoType = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetSiteJournalInfoRequest($sessionHandle, $startingPoint, $infoType);

        return $this->doGetSiteJournalInfo($request);
    }

    /**
     * @return doGetStatesInfoResponse
     */
    public function getStatesInfo()
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoGetStatesInfoRequest($countryId, $webapiKey);

        return $this->doGetStatesInfo($request);
    }

    /**
     * @return doGetSystemTimeResponse
     */
    public function getSystemTime()
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoGetSystemTimeRequest($countryId, $webapiKey);

        return $this->doGetSystemTime($request);
    }

    /**
     * @param ArrayOfLong $itemsIdArray
     * @param string $userRole
     * @param ArrayOfLong $shipmentIdArray
     * @return doGetTransactionsIDsResponse
     */
    public function getTransactionsIDs($itemsIdArray = null, $userRole = null, $shipmentIdArray = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoGetTransactionsIDsRequest($sessionHandle, $itemsIdArray, $userRole, $shipmentIdArray);

        return $this->doGetTransactionsIDs($request);
    }

    /**
     * @param string $userLogin
     * @param string $userEmail
     * @return doGetUserIDResponse
     */
    public function getUserID($userLogin = null, $userEmail = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoGetUserIDRequest($countryId, $userLogin, $userEmail, $webapiKey);

        return $this->doGetUserID($request);
    }

    /**
     * @param int $userId
     * @return doGetUserLoginResponse
     */
    public function getUserLogin($userId = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoGetUserLoginRequest($countryId, $userId, $webapiKey);

        return $this->doGetUserLogin($request);
    }

    /**
     * @param string $userLogin
     * @param string $userPassword
     * @return doLoginResponse
     */
    public function login($userLogin = null, $userPassword = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();
        $localVersion = null;

        $request = new DoLoginRequest($userLogin, $userPassword, $countryId, $webapiKey, $localVersion);

        return $this->doLogin($request);
    }

    /**
     * @param string $userLogin
     * @param string $userHashPassword
     * @return doLoginEncResponse
     */
    public function loginEnc($userLogin = null, $userHashPassword = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();
        $localVersion = null;

        $request = new DoLoginEncRequest($userLogin, $userHashPassword, $countryId, $webapiKey, $localVersion);

        return $this->doLoginEnc($request);
    }

    /**
     * @param string $accessToken
     * @return doLoginWithAccessTokenResponse
     */
    public function loginWithAccessToken($accessToken = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoLoginWithAccessTokenRequest($accessToken, $countryId, $webapiKey);

        return $this->doLoginWithAccessToken($request);
    }

    /**
     * @param string $accountType
     * @param int $offset
     * @param ArrayOfLong $itemsArray
     * @param int $limit
     * @return doMyAccount2Response
     */
    public function myAccount2($accountType = null, $offset = null, $itemsArray = null, $limit = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoMyAccount2Request($sessionHandle, $accountType, $offset, $itemsArray, $limit);

        return $this->doMyAccount2($request);
    }

    /**
     * @param string $accountType
     * @param ArrayOfLong $itemsArray
     * @return doMyAccountItemsCountResponse
     */
    public function myAccountItemsCount($accountType = null, $itemsArray = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoMyAccountItemsCountRequest($sessionHandle, $accountType, $itemsArray);

        return $this->doMyAccountItemsCount($request);
    }

    /**
     * @return doMyBillingResponse
     */
    public function myBilling()
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoMyBillingRequest($sessionHandle);

        return $this->doMyBilling($request);
    }

    /**
     * @param int $itemId
     * @param string $option
     * @return doMyBillingItemResponse
     */
    public function myBillingItem($itemId = null, $option = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoMyBillingItemRequest($sessionHandle, $itemId, $option);

        return $this->doMyBillingItem($request);
    }

    /**
     * @param ArrayOfLong $auctionIdList
     * @param int $offset
     * @param int $desc
     * @return doMyContactResponse
     */
    public function myContact($auctionIdList = null, $offset = null, $desc = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoMyContactRequest($sessionHandle, $auctionIdList, $offset, $desc);

        return $this->doMyContact($request);
    }

    /**
     * @param ArrayOfFieldsvalue $fields
     * @param int $itemTemplateId
     * @param int $localId
     * @param ItemTemplateCreateStruct $itemTemplateCreate
     * @param ArrayOfVariantstruct $variants
     * @param ArrayOfTagnamestruct $tags
     * @param AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     * @param string $additionalServicesGroup
     * @return doNewAuctionExtResponse
     */
    public function newAuctionExt(
        $fields = null,
        $itemTemplateId = null,
        $localId = null,
        $itemTemplateCreate = null,
        $variants = null,
        $tags = null,
        $afterSalesServiceConditions = null,
        $additionalServicesGroup = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoNewAuctionExtRequest($sessionHandle, $fields, $itemTemplateId, $localId, $itemTemplateCreate,
            $variants, $tags, $afterSalesServiceConditions, $additionalServicesGroup);

        return $this->doNewAuctionExt($request);
    }

    /**
     * @return doQueryAllSysStatusResponse
     */
    public function queryAllSysStatus()
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoQueryAllSysStatusRequest($countryId, $webapiKey);

        return $this->doQueryAllSysStatus($request);
    }

    /**
     * @param int $sysvar
     * @return doQuerySysStatusResponse
     */
    public function querySysStatus($sysvar = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoQuerySysStatusRequest($sysvar, $countryId, $webapiKey);

        return $this->doQuerySysStatus($request);
    }

    /**
     * @param ArrayOfLong $usersIdArray
     * @return doRemoveFromBlackListResponse
     */
    public function removeFromBlackList($usersIdArray = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoRemoveFromBlackListRequest($sessionHandle, $usersIdArray);

        return $this->doRemoveFromBlackList($request);
    }

    /**
     * @param int $requestItemId
     * @param string $requestCancelReason
     * @return doRequestCancelBidResponse
     */
    public function requestCancelBid($requestItemId = null, $requestCancelReason = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoRequestCancelBidRequest($sessionHandle, $requestItemId, $requestCancelReason);

        return $this->doRequestCancelBid($request);
    }

    /**
     * @return doRequestPayoutResponse
     */
    public function requestPayout()
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoRequestPayoutRequest($sessionHandle);

        return $this->doRequestPayout($request);
    }

    /**
     * @param int $transactionId
     * @param float $surchargeValue
     * @param string $surchargeMessageToBuyer
     * @return doRequestSurchargeResponse
     */
    public function requestSurcharge($transactionId = null, $surchargeValue = null, $surchargeMessageToBuyer = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoRequestSurchargeRequest($sessionHandle, $transactionId, $surchargeValue,
            $surchargeMessageToBuyer);

        return $this->doRequestSurcharge($request);
    }

    /**
     * @param ArrayOfLong $sellItemsArray
     * @param int $sellStartingTime
     * @param int $sellAuctionDuration
     * @param int $sellOptions
     * @param ArrayOfInt $localIds
     * @param int $sellProlongOptions
     * @return doSellSomeAgainResponse
     */
    public function sellSomeAgain(
        $sellItemsArray = null,
        $sellStartingTime = null,
        $sellAuctionDuration = null,
        $sellOptions = null,
        $localIds = null,
        $sellProlongOptions = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoSellSomeAgainRequest($sessionHandle, $sellItemsArray, $sellStartingTime, $sellAuctionDuration,
            $sellOptions, $localIds, $sellProlongOptions);

        return $this->doSellSomeAgain($request);
    }

    /**
     * @param ArrayOfLong $sellItemsArray
     * @param int $sellStartingTime
     * @param int $sellShopDuration
     * @param int $sellShopOptions
     * @param int $sellProlongOptions
     * @param int $sellShopCategory
     * @param ArrayOfInt $localIds
     * @return doSellSomeAgainInShopResponse
     */
    public function sellSomeAgainInShop(
        $sellItemsArray = null,
        $sellStartingTime = null,
        $sellShopDuration = null,
        $sellShopOptions = null,
        $sellProlongOptions = null,
        $sellShopCategory = null,
        $localIds = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoSellSomeAgainInShopRequest($sessionHandle, $sellItemsArray, $sellStartingTime,
            $sellShopDuration, $sellShopOptions, $sellProlongOptions, $sellShopCategory, $localIds);

        return $this->doSellSomeAgainInShop($request);
    }

    /**
     * @param int $mailToUserItemId
     * @param int $mailToUserReceiverId
     * @param int $mailToUserSubjectId
     * @param int $mailToUserOption
     * @param string $mailToUserMessage
     * @return doSendEmailToUserResponse
     */
    public function sendEmailToUser(
        $mailToUserItemId = null,
        $mailToUserReceiverId = null,
        $mailToUserSubjectId = null,
        $mailToUserOption = null,
        $mailToUserMessage = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoSendEmailToUserRequest($sessionHandle, $mailToUserItemId, $mailToUserReceiverId,
            $mailToUserSubjectId, $mailToUserOption, $mailToUserMessage);

        return $this->doSendEmailToUser($request);
    }

    /**
     * @param ArrayOfNewpostbuyformsellerstruct $newPostBuyFormSeller
     * @param NewPostBuyFormCommonStruct $newPostBuyFormCommon
     * @return doSendPostBuyFormResponse
     */
    public function sendPostBuyForm($newPostBuyFormSeller = null, $newPostBuyFormCommon = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoSendPostBuyFormRequest($sessionHandle, $newPostBuyFormSeller, $newPostBuyFormCommon);

        return $this->doSendPostBuyForm($request);
    }

    /**
     * @param int $dealId
     * @param int $reasonId
     * @param int $refundQuantity
     * @return doSendRefundFormResponse
     */
    public function sendRefundForm($dealId = null, $reasonId = null, $refundQuantity = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoSendRefundFormRequest($sessionHandle, $dealId, $reasonId, $refundQuantity);

        return $this->doSendRefundForm($request);
    }

    /**
     * @param int $activeFlag
     * @param float $freeDeliveryAmount
     * @return doSetFreeDeliveryAmountResponse
     */
    public function setFreeDeliveryAmount($activeFlag = null, $freeDeliveryAmount = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoSetFreeDeliveryAmountRequest($sessionHandle, $activeFlag, $freeDeliveryAmount);

        return $this->doSetFreeDeliveryAmount($request);
    }

    /**
     * @param int $shipmentPriceTypeId
     * @return doSetShipmentPriceTypeResponse
     */
    public function setShipmentPriceType($shipmentPriceTypeId = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoSetShipmentPriceTypeRequest($sessionHandle, $shipmentPriceTypeId);

        return $this->doSetShipmentPriceType($request);
    }

    /**
     * @param int $itemId
     * @param int $getDesc
     * @param int $getImageUrl
     * @param int $getAttribs
     * @param int $getPostageOptions
     * @param int $getCompanyInfo
     * @param int $getProductInfo
     * @param int $getAfterSalesServiceConditions
     * @param int $getEan
     * @param int $getAdditionalServicesGroup
     * @return doShowItemInfoExtResponse
     */
    public function showItemInfoExt(
        $itemId = null,
        $getDesc = null,
        $getImageUrl = null,
        $getAttribs = null,
        $getPostageOptions = null,
        $getCompanyInfo = null,
        $getProductInfo = null,
        $getAfterSalesServiceConditions = null,
        $getEan = null,
        $getAdditionalServicesGroup = null
    ) {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoShowItemInfoExtRequest($sessionHandle, $itemId, $getDesc, $getImageUrl, $getAttribs,
            $getPostageOptions, $getCompanyInfo, $getProductInfo, $getAfterSalesServiceConditions, $getEan,
            $getAdditionalServicesGroup);

        return $this->doShowItemInfoExt($request);
    }

    /**
     * @param int $userId
     * @param string $userLogin
     * @return doShowUserResponse
     */
    public function showUser($userId = null, $userLogin = null)
    {
        $countryId = $this->getCountryId();
        $webapiKey = $this->getWebapiKey();

        $request = new DoShowUserRequest($webapiKey, $countryId, $userId, $userLogin);

        return $this->doShowUser($request);
    }

    /**
     * @param int $localId
     * @return doVerifyItemResponse
     */
    public function verifyItem($localId = null)
    {
        $sessionHandle = $this->getSessionHandle();

        $request = new DoVerifyItemRequest($sessionHandle, $localId);

        return $this->doVerifyItem($request);
    }
}
