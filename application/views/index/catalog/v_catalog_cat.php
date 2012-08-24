<?if($products->count() > 0):?>
<br/>
<table border="0" width="100%"  cellpadding="0" cellspacing="10">
    <tr>
    <?foreach($products as $i => $product):?>
        <?if ($i % 3 == 0):?>
            </tr><tr>
        <?endif?>

       <td align="center" width="33%">

            <?if(count($product->images->find_all()) > 0):?>
            <?=html::anchor("catalog/view/c$cat/$product->id",
                    html::image('media/uploads/' . $product->main_img->name, array('width' => '150')))?><br/>
            <?else:?>
             <?=html::anchor("catalog/view/c$cat/$product->id",
                    html::image('media/img/book.png', array('width' => '150')))?>
            <?endif?>
             <?=html::anchor("catalog/view/c$cat/$product->id", "<h4>$product->title</h4><br/>")?>
            <div class="cost"><?=$product->cost?> руб.</div>
        </td>
        
    <?endforeach?>
    </tr>
</table>
<?else:?>
<div class="empty">Нет товаров в этой категории</div>
<?=$search_form?>
<?endif?>


