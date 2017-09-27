/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

/*YRI  GRID LIST SWITCHER*/
$(document).ready(function(){
    $('.show_list').click(function(){
        document.cookie = "show_list=true; expires=Thu, 30 Jan 2100 12:00:00 UTC; path=/";
        $('#js-product-list .product-miniature').addClass('product_show_list');
    });
     
    $('.show_grid').click(function(){
        document.cookie = "show_list=; expires=Thu, 30 Jan 1970 12:00:00 UTC; path=/";
        $('#js-product-list .product-miniature').removeClass('product_show_list');
    });
     
    prestashop.on('updateProductList', function (event) {
        $('.show_list').click(function(){
            $('#js-product-list .product-miniature').addClass('product_show_list');
        });
         
        $('.show_grid').click(function(){
            $('#js-product-list .product-miniature').removeClass('product_show_list');
        });
    });
});
/* */