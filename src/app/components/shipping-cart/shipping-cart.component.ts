import { Component } from '@angular/core';
@Component({
  selector: 'app-shipping-cart',
  templateUrl: './shipping-cart.component.html',
  styleUrls: ['./shipping-cart.component.scss']
})
export class ShippingCartComponent {
    data:any[] = [
      {img: '../../../assets/images/img8.png', name: 'Golf Ball Tee Sign (Coroplast)', type: 'Classic', quantity: 12, price: '$420.00'},
      {img: '../../../assets/images/img8.png', name: 'Golf Ball Tee Sign (Coroplast)', type: 'Color Ring', quantity: 12, price: '$420.00'}
    ]

    code:boolean = true
}
