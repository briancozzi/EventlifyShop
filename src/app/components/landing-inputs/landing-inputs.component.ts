import { Component } from '@angular/core';

@Component({
  selector: 'app-landing-inputs',
  templateUrl: './landing-inputs.component.html',
  styleUrls: ['./landing-inputs.component.scss']
})
export class LandingInputsComponent {

  selectedValue: string = 'All'

  modalSettings: string[] = [
    'All',
    'Example1',
    'Example2',
    'Example3',
    'Example4'
  ]

  constructor() {
    document.addEventListener('click', function (event: any) {
      let modal = document.querySelector('#modal');
      if ((event.target.parentNode.id == 'modal' || event.target.id == "modal-inp") && !modal?.classList.contains('show')) {
        modal?.classList.add('show')
      } else {
        modal?.classList.remove('show')

      }
    });
  }

  setValue(val: string) {
    let modal = document.querySelector('#modal');
    if (modal?.classList.contains('show')) {
      this.selectedValue = val
    }
  }

}
