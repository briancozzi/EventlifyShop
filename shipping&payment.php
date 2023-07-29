<?php include_once "includes/header.php"; ?>
<div class="inner-wrapper shipping">
    <div class="container">
        <div class="row main-row">
            <div class="col-lg-6">
                <div class="section-head">
                    Shipping
                </div>
                <div class="shipping__detail">
                    <h4>Contact</h4>
                    <div class="shipping__detail--detail-box">
                        <div>
                            <label>Your Email</label>
                            <p>amitsainwal@gmail.com</p>
                        </div>
                        <a href="shipping">Change</a>
                    </div>
                    <h4>Shipping TO</h4>
                    <div class="shipping__detail--detail-box">
                        <div>
                            <p>123 Newbury Street,<br>Boston MA 02116, United States</p>
                        </div>
                        <a href="shipping">Change</a>
                    </div>
                    <div class="shipping__detail--billing-adress">
                        <h4>Billing Address</h4>
                        <ul>
                            <li class="radio">
                                <label>
                                    <input type="radio" name="adress" checked>
                                    <span>Same as Shipping Address</span>
                                </label>
                            </li>
                            <li class="radio">
                                <label>
                                    <input type="radio" name="adress">
                                    <span>Use different Address</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="payment">
                    <div class="section-head">
                        Payment
                        <p>All transactions are secure and encrypted.</p>
                    </div>
                    <div class="payment__detail">
                        <div class="saved-card-wrapper">
                            <h4>Saved CARDs</h4>
                            <div class="payment__detail--saved-cards">
                                <ul>
                                    <li class="radio">
                                        <label>
                                            <input type="radio" name="radio" checked>
                                            <span>
                                                XXXX-XXXX-XXXX-1234
                                                <img src="src/images/svg/visa.svg" alt="" class="img-fluid">
                                            </span>
                                        </label>
                                    </li>
                                    <li class="radio">
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>
                                                XXXX-XXXX-XXXX-5678
                                                <img src="src/images/svg/mastercard.svg" alt="" class=" img-fluid">
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <a href="#">ADD NEW CARD</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="new-card-wrapper">
                            <div class="flex-wrapper">
                                <h4>CREDIT CARD</h4>
                                <ul>
                                    <li><img src="src/images/svg/visa.svg" alt="" class="img-fluid"></li>
                                    <li><img src="src/images/svg/mastercard.svg" alt="" class="img-fluid"></li>
                                    <li><img src="src/images/svg/AmEx.svg" alt="" class="img-fluid"></li>
                                    <li>and more...</li>
                                </ul>
                            </div>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Card Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name on Card" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group mb-1">
                                        <input type="text" class="form-control" placeholder="Expiration date" required>
                                    </div>
                                    <div class="col-md-6 form-group mb-1">
                                        <input type="text" class="form-control" placeholder="Security Code" required>
                                    </div>
                                </div>
                                <ul class="card-images">
                                    <li><img src="src/images/svg/green-card1.svg" alt="" class="img-fluid"></li>
                                    <li><img src="src/images/svg/green-card2.svg" alt="" class="img-fluid"></li>
                                </ul>
                            </form>
                        </div>
                        <div class="button-row">
                            <a href="confirmation" class="btn btn-primary">PAY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-head">
                    Cart
                </div>
                <div class="shipping__detail">
                    <div class="cart">
                        <div class="cart-items">
                            <div class="cart__item">
                                <div class="cart__item--image">
                                    <img src="src/images/product-detail-img.png" alt="" class="img-fluid">
                                </div>
                                <div class="cart__item--content">
                                    <div>
                                        <div class="cart__item--title">Golf Ball Tee Sign (Coroplast)</div>
                                        <div class="cart__item--style">Classic</div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between w-100">
                                        <div class="cart__item--quantity">Quantity:<span>12</span></div>
                                        <div class="cart__item--price">$420.00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart__item">
                                <div class="cart__item--image">
                                    <img src="src/images/product-detail-img.png" alt="" class="img-fluid">
                                </div>
                                <div class="cart__item--content">
                                    <div>
                                        <div class="cart__item--title">Golf Ball Tee Sign (Coroplast)</div>
                                        <div class="cart__item--style">Color Ring</div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between w-100">
                                        <div class="cart__item--quantity">Quantity:<span>12</span></div>
                                        <div class="cart__item--price">$420.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shipping__detail--total">
                        <ul>
                            <li>SUBTOTAL</li>
                            <li>$840.00</li>
                        </ul>
                        <ul>
                            <li>Discount Applied</li>
                            <li>$126.00</li>
                        </ul>
                        <ul>
                            <li>SHipping</li>
                            <li>
                                <p>Calculated at next step.</p>
                            </li>
                        </ul>
                        <ul>
                            <li>TOTAL</li>
                            <li>$714.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>