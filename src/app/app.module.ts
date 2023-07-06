import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { FooterComponent } from './components/footer/footer.component';
import { LandingComponent } from './pages/landing/landing.component';
import { LandingInputsComponent } from './components/landing-inputs/landing-inputs.component';
import { BurgerCloseComponent } from './components/burger-close/burger-close.component';
import { ProductDetailComponent } from './pages/product-detail/product-detail.component';
import { ProductDetailCarouselComponent } from './components/product-detail-carousel/product-detail-carousel.component';
import { ShippingComponent } from './pages/shipping/shipping.component';
import { ShippingAndPaymentComponent } from './components/shipping-and-payment/shipping-and-payment.component';
import { ShippingCartComponent } from './components/shipping-cart/shipping-cart.component';
import { CardModalComponent } from './components/card-modal/card-modal.component';
import { ConfirmationComponent } from './pages/confirmation/confirmation.component';

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    FooterComponent,
    LandingComponent,
    LandingInputsComponent,
    BurgerCloseComponent,
    ProductDetailComponent,
    ProductDetailCarouselComponent,
    ShippingComponent,
    ShippingAndPaymentComponent,
    ShippingCartComponent,
    CardModalComponent,
    ConfirmationComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
