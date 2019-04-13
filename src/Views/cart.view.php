<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EzyVet Simple Cart Exercise</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto font-sans pt-2">
    <nav class="flex items-center justify-between flex-wrap bg-teal py-8 px-6">
        <div class="flex items-center flex-no-shrink text-white mr-6">
            <a href="/" class="text-white no-underline">
            <span class="font-semibold text-xl tracking-tight">
                SIMPLE CART EXERCISE
            </span>
            </a>
        </div>
        <div class="w-full block lg:flex lg:items-center lg:w-auto">
        </div>
    </nav>
    <?php if (count($cart->getItems()) > 0): ?>
        <table class="text-left w-full border-collapse">
            <thead>
            <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    Name
                </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    Price
                </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    Qty
                </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    Total
                </th>
                <th class="py-4 px-6 bg-grey-lightest text-center font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cart->getItems() as $item): ?>
                <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light"><?php echo $item['product']->getName(); ?></td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        $<?php echo number_format($item['product']->getPrice(), 2, '.', ''); ?>
                    </td>
                    <td class="py-4 px-6 border-b border-grey-light"><?php echo $item['quantity']; ?></td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        $<?php echo number_format($item['total'], 2, '.', ''); ?>
                    </td>
                    <td width="15%" class="py-4 px-6 border-b text-center border-grey-light">
                        <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-red hover:bg-red-dark"
                                onclick="event.preventDefault();
                                        document.getElementById('item-<?php echo $item['product']->getId(); ?>-form').submit();">
                            Remove
                        </button>
                        <form id="item-<?php echo $item['product']->getId(); ?>-form"
                              action="/cart"
                              method="post"
                              style="display: none;">
                            <input type="text" name="product_id" value="<?php echo $item['product']->getId(); ?>">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                <td class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light"
                    colspan="4"></td>
                <td class="py-4 text-right px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                    Overall: $<?php echo number_format($cart->getOverallTotal(), 2, '.', ''); ?>
                </td>
            </tr>
            </tfoot>
        </table>
    <?php else : ?>
        <p class="flex content-center justify-center py-4 px-4 bg-grey-lightest uppercase text-sm">
            <img width="16px;" src="/img/frown.svg" alt=""> <span class="ml-2 py-1">No Items</span>
        </p>
    <?php endif; ?>
</div>
</body>
</html>
