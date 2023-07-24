<?php include_once "includes/header.php"; ?>
<div class="inner-wrapper shipping">
    <div class="container">
        <div class="row main-row">
            <div class="col-lg-6">
                <div class="section-head">
                    Shipping & Payment
                </div>
                <div class="shipping__detail">
                    <form>
                        <div class="d-flex align-items-center justify-content-between pb-2">
                            <h4 class="m-0">
                                Contact
                            </h4>
                            <p class="m-0">Already have an account? <a href="#">Log in</a></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <h4>Shipping</h4>
                        <div class="form-group ">
                            <label class="control-label absolute">Country/ Region</label>
                            <select class="selectpicker country" title="United States">
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>United States</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Company (Optional)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apartment, suite, etc. (Optional)">
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                            <div class="col-md-4 form-group">
                                <select class="selectpicker" title="State">
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>United States</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="text" class="form-control" placeholder="Zipcode">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Phone">
                        </div>
                        <div class="button-row">
                            <button type="button" class="btn btn-primary">CONTINUE TO SHIPPING</button>
                        </div>
                    </form>
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
                    <div class="shipping__detail--discount-code">
                        <input id="searchInput" type="text" class="form-control" placeholder="Discount Code">
                        <button type="button" class="btn btn-primary apply" disabled>APPLY</button>
                    </div>
                    <div class="shipping__detail--total">
                        <ul class="discount-code">
                            <li>DISCOUNT CODE</li>
                            <li>
                                <div>DEADPOOLWASRIGHT<p>(15% discount)</p>
                                </div>
                                <span><i class="fa fa-times"></i></span>
                            </li>
                        </ul>
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