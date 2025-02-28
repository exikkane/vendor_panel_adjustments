{foreach from=$required_product_features item=feature key="feature_id"}
    {include file="views/products/components/product_assign_feature.tpl" feature=$feature feature_id=$feature_id}
{/foreach}