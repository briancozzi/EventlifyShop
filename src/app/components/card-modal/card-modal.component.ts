import { Component, EventEmitter, Input, Output } from '@angular/core';

@Component({
  selector: 'app-card-modal',
  templateUrl: './card-modal.component.html',
  styleUrls: ['./card-modal.component.scss']
})
export class CardModalComponent {

  @Input() isOpened: boolean = false;
  @Output() isOpenedChange = new EventEmitter<boolean>();

  data: any[] = [
    { img: '../../../assets/images/img8.png', name: 'Golf Ball Tee Sign (Coroplast)', type: 'Classic', quantity: 12, price: '$420.00' },
    { img: '../../../assets/images/img8.png', name: 'Golf Ball Tee Sign (Coroplast)', type: 'Color Ring', quantity: 12, price: '$420.00' }
  ]


  closeModal(): void {
    this.isOpened = false;
    this.isOpenedChange.emit(this.isOpened);
  }
}
