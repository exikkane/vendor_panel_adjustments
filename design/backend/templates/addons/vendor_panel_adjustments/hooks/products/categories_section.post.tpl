<script>
    $(document).ready(function() {
        $(document).on('change', '[id^="product_categories_add_"]', function() {
            var newValue = $(this).val();
            var url = fn_url('products.add.update_features?category_ids=' + newValue);
            $.ceAjax('request', url, {
                result_ids: 'products_update_features_content'
            });
        });
    });
</script>