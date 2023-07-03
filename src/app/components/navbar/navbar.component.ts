import { Component, HostListener } from '@angular/core';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss']
})
export class NavbarComponent {

  isOpened:boolean = false

  windowHeight: number = 0;
  @HostListener('window:resize')
  onWindowResize() {
    this.windowHeight = window.innerHeight;
  }

  openModal(): void{
    this.isOpened = true
  }
}


