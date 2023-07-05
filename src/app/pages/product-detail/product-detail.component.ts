import { Component, HostListener } from '@angular/core';

@Component({
  selector: 'app-product-detail',
  templateUrl: './product-detail.component.html',
  styleUrls: ['./product-detail.component.scss']
})
export class ProductDetailComponent {
  data: any[] = [
    { pic: '../../../assets/images/img6.png', desc: '/Tickets', name: 'Mulligan Sponsor Cards', price: '$150.00', sub: '50 Cards' },
    { pic: '../../../assets/images/img7.png', desc: '(Corrugated CPVC Boards)', name: 'Hole Signs', price: '$300.00', sub: '15 Signs' },
    { pic: '../../../assets/images/img8.png', desc: '(Premium Golf Balls)', name: 'Golf Ball with Sponsor Logos', price: '$300.00', sub: '10 Golf Balls' }
  ]

  windowWidth:any = window.innerWidth

  @HostListener('window:resize', ['$event'])
  onResize(event: any) {
    this.windowWidth = event.target.innerWidth;
  }
}

