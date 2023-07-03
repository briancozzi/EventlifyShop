import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LandingComponent } from './pages/landing/landing.component';
import { ProductDetailComponent } from './pages/product-detail/product-detail.component';
import { ShippingComponent } from './pages/shipping/shipping.component';

const routes: Routes = [
  { path: '', component: LandingComponent },
  { path: 'detail', component:ProductDetailComponent  },
  { path: 'shipping', component:ShippingComponent },
  { path: '**', redirectTo: '/' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
