{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='catalog/listing/product-list.tpl'}
 
{block name='product_list_header'}
    <div class="block-category card card-block hidden-sm-down">
        <h1 class="h1">{$category.name}</h1>
        {if $category.description}
            <div id="category-description" class="text-muted">{$category.description nofilter}</div>
            <div class="category-cover">
                <img src="{$category.image.large.url}" alt="{$category.image.legend}">
            </div>
        {/if}
    </div>
    <!-- YRI AFFICHAGE SOUS CATEGORIE -->
    <div class="text-xs-center hidden-md-up">
        <h1 class="h1">{$category.name}</h1>    
    </div> 
    <div id="subcategories">
        <ul class="clearfix">
            {foreach from=$subcategories item=subcategory} 
                <li>
                    <a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}" title="{$subcategory.name|escape:'html':'UTF-8'}" class="img">
                        <img class="replace-2x" src="{$urls.base_url}img/c/{$subcategory.id_category}.jpg" alt="{$subcategory.name|escape:'html':'UTF-8'}"  />
                    </a>
                    <h5><a class="subcategory-name" href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}">{$subcategory.name|truncate:25:'...'|escape:'html':'UTF-8'}</a></h5>
                </li>
            {/foreach}
        </ul> 
    </div>
    <!-- -->
 {/block}