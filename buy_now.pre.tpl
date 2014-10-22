
{foreach $product.product_features as $item}
   


{if $item['description']== 'kirmizi'}
                            {if $product.product_features[$item['feature_id']]['value']== 'Y'}
                            
                           
                            <style>

.ty-price-num{
 
 color: !important;
}
#line_discounted_price_{$product.product_id}{
color:red !important;
}
#sec_discounted_price_{$product.product_id}{
color:red !important;
}
#line_discounted_price_ajax{$product.product_id}{
color:red !important;
}
#sec_discounted_price_ajax{$product.product_features[4]['description']}{
color:red !important;
}

</style>


{/if}
{/if}
{/foreach}