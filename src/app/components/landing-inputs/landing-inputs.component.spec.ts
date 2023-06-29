import { ComponentFixture, TestBed } from '@angular/core/testing';

import { LandingInputsComponent } from './landing-inputs.component';

describe('LandingInputsComponent', () => {
  let component: LandingInputsComponent;
  let fixture: ComponentFixture<LandingInputsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ LandingInputsComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(LandingInputsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
