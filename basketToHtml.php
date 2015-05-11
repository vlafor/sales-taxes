<?php
function basketToHtml(Basket $basket) {
?>
<table class="table table-hover table-bordered">

    <thead>

        <tr>
            <th>Item</th>
            <th>Price incl. tax</th>
        </tr>

    </thead>

    <tbody>

        <?php
        foreach ($basket->getAllItems() as $item) { ?>

        <tr>
            <td><?php echo $item->getName();?></td>
            <td><?php echo number_format($item->getPriceInclTax(), 2); ?></td>
        </tr>
        <?php
        }
        ?>               

    </tbody>

    <tfoot>

        <tr>
            <th colspan="2">Sales taxes:
                <?php echo number_format($basket->getTotalTaxPaid(), 2) ?></th>
        </tr>

        <tr>
            <th colspan="2">Total:
                <?php echo number_format($basket->getTotalPriceInclTax(), 2) ?></th>
        </tr>

    </tfoot>

</table>

<?php
}