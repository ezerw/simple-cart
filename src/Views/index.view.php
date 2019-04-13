<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EzyVet Simple Cart Exercise</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .cart span {
            min-width: 35%;
        }
    </style>
</head>
<body>
<div class="container mx-auto font-sans pt-2">
    <nav class="flex items-center justify-between flex-wrap bg-teal p-6">
        <div class="flex items-center flex-no-shrink text-white mr-6">
            <span class="font-semibold text-xl tracking-tight">
                SIMPLE CART EXERCISE
            </span>
        </div>
        <div class="w-full block lg:flex lg:items-center lg:w-auto">
            <div class="relative h-full">
                <button onclick="window.location.href = '/cart'"
                        class="w-24 h-full text-grey-lighter -mr-3 outline-none cart">
                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ4Ni41NjkgNDg2LjU2OSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDg2LjU2OSA0ODYuNTY5OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPGc+Cgk8cGF0aCBkPSJNMTQ2LjA2OSwzMjAuMzY5aDI2OC4xYzMwLjQsMCw1NS4yLTI0LjgsNTUuMi01NS4ydi0xMTIuOGMwLTAuMSwwLTAuMywwLTAuNGMwLTAuMywwLTAuNSwwLTAuOGMwLTAuMiwwLTAuNC0wLjEtMC42ICAgYzAtMC4yLTAuMS0wLjUtMC4xLTAuN3MtMC4xLTAuNC0wLjEtMC42Yy0wLjEtMC4yLTAuMS0wLjQtMC4yLTAuN2MtMC4xLTAuMi0wLjEtMC40LTAuMi0wLjZjLTAuMS0wLjItMC4xLTAuNC0wLjItMC42ICAgYy0wLjEtMC4yLTAuMi0wLjQtMC4zLTAuN2MtMC4xLTAuMi0wLjItMC40LTAuMy0wLjVjLTAuMS0wLjItMC4yLTAuNC0wLjMtMC42Yy0wLjEtMC4yLTAuMi0wLjMtMC4zLTAuNWMtMC4xLTAuMi0wLjMtMC40LTAuNC0wLjYgICBjLTAuMS0wLjItMC4yLTAuMy0wLjQtMC41Yy0wLjEtMC4yLTAuMy0wLjMtMC40LTAuNXMtMC4zLTAuMy0wLjQtMC41cy0wLjMtMC4zLTAuNC0wLjRjLTAuMi0wLjItMC4zLTAuMy0wLjUtMC41ICAgYy0wLjItMC4xLTAuMy0wLjMtMC41LTAuNGMtMC4yLTAuMS0wLjQtMC4zLTAuNi0wLjRjLTAuMi0wLjEtMC4zLTAuMi0wLjUtMC4zcy0wLjQtMC4yLTAuNi0wLjRjLTAuMi0wLjEtMC40LTAuMi0wLjYtMC4zICAgcy0wLjQtMC4yLTAuNi0wLjNzLTAuNC0wLjItMC42LTAuM3MtMC40LTAuMS0wLjYtMC4yYy0wLjItMC4xLTAuNS0wLjItMC43LTAuMnMtMC40LTAuMS0wLjUtMC4xYy0wLjMtMC4xLTAuNS0wLjEtMC44LTAuMSAgIGMtMC4xLDAtMC4yLTAuMS0wLjQtMC4xbC0zMzkuOC00Ni45di00Ny40YzAtMC41LDAtMS0wLjEtMS40YzAtMC4xLDAtMC4yLTAuMS0wLjRjMC0wLjMtMC4xLTAuNi0wLjEtMC45Yy0wLjEtMC4zLTAuMS0wLjUtMC4yLTAuOCAgIGMwLTAuMi0wLjEtMC4zLTAuMS0wLjVjLTAuMS0wLjMtMC4yLTAuNi0wLjMtMC45YzAtMC4xLTAuMS0wLjMtMC4xLTAuNGMtMC4xLTAuMy0wLjItMC41LTAuNC0wLjhjLTAuMS0wLjEtMC4xLTAuMy0wLjItMC40ICAgYy0wLjEtMC4yLTAuMi0wLjQtMC40LTAuNmMtMC4xLTAuMi0wLjItMC4zLTAuMy0wLjVzLTAuMi0wLjMtMC4zLTAuNXMtMC4zLTAuNC0wLjQtMC42Yy0wLjEtMC4xLTAuMi0wLjItMC4zLTAuMyAgIGMtMC4yLTAuMi0wLjQtMC40LTAuNi0wLjZjLTAuMS0wLjEtMC4yLTAuMi0wLjMtMC4zYy0wLjItMC4yLTAuNC0wLjQtMC43LTAuNmMtMC4xLTAuMS0wLjMtMC4yLTAuNC0wLjNjLTAuMi0wLjItMC40LTAuMy0wLjYtMC41ICAgYy0wLjMtMC4yLTAuNi0wLjQtMC44LTAuNWMtMC4xLTAuMS0wLjItMC4xLTAuMy0wLjJjLTAuNC0wLjItMC45LTAuNC0xLjMtMC42bC03My43LTMxYy02LjktMi45LTE0LjgsMC4zLTE3LjcsNy4yICAgczAuMywxNC44LDcuMiwxNy43bDY1LjQsMjcuNnY2MS4ydjkuN3Y3NC40djY2LjV2ODRjMCwyOCwyMSw1MS4yLDQ4LjEsNTQuN2MtNC45LDguMi03LjgsMTcuOC03LjgsMjhjMCwzMC4xLDI0LjUsNTQuNSw1NC41LDU0LjUgICBzNTQuNS0yNC41LDU0LjUtNTQuNWMwLTEwLTIuNy0xOS41LTcuNS0yNy41aDEyMS40Yy00LjgsOC4xLTcuNSwxNy41LTcuNSwyNy41YzAsMzAuMSwyNC41LDU0LjUsNTQuNSw1NC41czU0LjUtMjQuNSw1NC41LTU0LjUgICBzLTI0LjUtNTQuNS01NC41LTU0LjVoLTI1NWMtMTUuNiwwLTI4LjItMTIuNy0yOC4yLTI4LjJ2LTM2LjZDMTI2LjA2OSwzMTcuNTY5LDEzNS43NjksMzIwLjM2OSwxNDYuMDY5LDMyMC4zNjl6IE0yMTMuMjY5LDQzMS45NjkgICBjMCwxNS4yLTEyLjQsMjcuNS0yNy41LDI3LjVzLTI3LjUtMTIuNC0yNy41LTI3LjVzMTIuNC0yNy41LDI3LjUtMjcuNVMyMTMuMjY5LDQxNi43NjksMjEzLjI2OSw0MzEuOTY5eiBNNDI4LjY2OSw0MzEuOTY5ICAgYzAsMTUuMi0xMi40LDI3LjUtMjcuNSwyNy41cy0yNy41LTEyLjQtMjcuNS0yNy41czEyLjQtMjcuNSwyNy41LTI3LjVTNDI4LjY2OSw0MTYuNzY5LDQyOC42NjksNDMxLjk2OXogTTQxNC4xNjksMjkzLjM2OWgtMjY4LjEgICBjLTE1LjYsMC0yOC4yLTEyLjctMjguMi0yOC4ydi02Ni41di03NC40di01bDMyNC41LDQ0Ljd2MTAxLjFDNDQyLjM2OSwyODAuNzY5LDQyOS42NjksMjkzLjM2OSw0MTQuMTY5LDI5My4zNjl6IiBmaWxsPSIjRkZGRkZGIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="
                         alt="Cart" class="w-12">
                    <?php if (count($cart->getItems()) > 0): ?>
                        <span class="inline-block bg-red absolute pin-r p-1 rounded-full">
                        <?php echo count($cart->getItems()); ?>
                    </span>
                    <?php endif; ?>
                </button>
            </div>
        </div>
    </nav>
    <div class="flex content-start flex-wrap p-5 bg-grey-lighter">
        <?php foreach ($products as $product) : ?>
            <div class="w-1/5 p-4">
                <div class="text-grey-darker text-center p-2 rounded shadow bg-white">
                    <img src="/img/<?php echo $product->getId(); ?>.jpeg" alt="Product Image"
                         class="mt-2">
                    <h3 class="mb-2 mt-3"><?php echo $product->getName(); ?></h3>
                    <p class="mb-6">
                        $<?php echo number_format($product->getPrice(), 2, '.', ''); ?>
                    </p>
                    <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 mb-3 rounded"
                            onclick="event.preventDefault();
                                    document.getElementById('product-<?php echo $product->getId(); ?>-form').submit();">
                        Add to Cart
                    </button>
                    <form id="product-<?php echo $product->getId(); ?>-form"
                          action="/"
                          method="post"
                          style="display: none;">
                        <input type="text" name="product_id" value="<?php echo $product->getId(); ?>">
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
