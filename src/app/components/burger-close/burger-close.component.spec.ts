import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BurgerCloseComponent } from './burger-close.component';

describe('BurgerCloseComponent', () => {
  let component: BurgerCloseComponent;
  let fixture: ComponentFixture<BurgerCloseComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [BurgerCloseComponent]
    })
      .compileComponents();

    fixture = TestBed.createComponent(BurgerCloseComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
