import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-burger-close',
  templateUrl: './burger-close.component.html',
  styleUrls: ['./burger-close.component.scss']
})
export class BurgerCloseComponent {
  open() {
    document.getElementById('mobile-menu')?.classList.toggle('opened')
  }

}
