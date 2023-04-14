<?php
function component($productname, $productprice, $productimg){
    $element = '
    <div class="col-md-4">
    <div class="col-md-12 stuff">
        <div class="container">
            <div class="upper row">
                <div class="col-6">
                    <img class="article" src="$productimg" width="120" height="120">
                </div>
                <div class="col-6 mt-4">
                    <p class="para">$productname</p>
                </div>
            </div>
        </div>
                <div class="downer">
                    <p>Prix: €$productprice</p>
                    <button type="submit" class="btn btn-warning" name="add">Ajouter au panier</button>
                </div>
    </div>
</div>
    ';
    echo $element;{
        
    }
}
?>