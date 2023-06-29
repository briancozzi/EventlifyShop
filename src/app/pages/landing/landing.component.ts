import { Component } from '@angular/core';

@Component({
  selector: 'app-landing',
  templateUrl: './landing.component.html',
  styleUrls: ['./landing.component.scss']
})
export class LandingComponent {
  data: any[] = [
    { pic: '../../../assets/images/img1.png', desc: '/Tickets', name: 'Mulligan Sponsor Cards', price: '$150.00', sub: '50 Cards' },
    { pic: '../../../assets/images/img2.png', desc: '(Corrugated CPVC Boards)', name: 'Hole Signs', price: '$300.00', sub: '15 Signs' },
    { pic: '../../../assets/images/img3.png', desc: '(Premium Golf Balls)', name: 'Golf Ball with Sponsor Logos', price: '$300.00', sub: '10 Golf Balls' },
    { pic: '../../../assets/images/img4.png', desc: '(3mm Neoprene)', name: 'Neoprene Golf Cart Banners', price: '$150.00', sub: '10 Banners' },
    { pic: '../../../assets/images/img5.png', desc: '(8’x4’)', name: 'Golf Sponsors Banner', price: '$150.00', sub: 'Banner' },
    { pic: '../../../assets/images/img6.png', desc: '(30”x36”)', name: 'Golf Sponsor Easel Board', price: '$180.00', sub: 'Board' },
    { pic: '../../../assets/images/img7.png', desc: '(Two Sided)', name: 'Table Tent Cards', price: '$250.00', sub: '50 Cards' },
    { pic: '../../../assets/images/img8.png', desc: '(10’w 10’b 7.5’h)', name: 'Golf Canopy Tent', price: '$200.00', sub: 'Tent' },
    { pic: '../../../assets/images/img1.png', desc: '(Coroplast)', name: 'Golf Ball Tee Sign', price: '$350.00', sub: '10 Signs' },
  ]
}
