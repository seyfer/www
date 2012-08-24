<h2>Лучшие товары</h2>
<br/>
<table width="100%">
    <? foreach ($products as $product): ?>

        <td>           
            <a href="<?= $prod_link[$product->id]; ?>">
                <img src ="/media/img/book.png" width="150">
            </a>
            <br/>

            <a href="<?= $prod_link[$product->id]; ?>">
                <?= $product->title; ?>
            </a>
        </td>   

    <? endforeach; ?>
</table>
