import { Component, HostListener } from '@angular/core';


@Component({
  selector: 'app-product-detail-carousel',
  templateUrl: './product-detail-carousel.component.html',
  styleUrls: ['./product-detail-carousel.component.scss']
})
export class ProductDetailCarouselComponent {
  images = [
    { index: 0, src: '../../../assets/images/img8.png', caption: 'Image 1' },
    { index: 1, src: '../../../assets/images/img1.png', caption: 'Image 3' },
    { index: 2, src: '../../../assets/images/img8.png', caption: 'Image 1' },
  ];

  windowWidth: any = window.innerWidth

  @HostListener('window:resize', ['$event'])
  onResize(event: any) {
    this.windowWidth = event.target.innerWidth;
  }
  activeImage: any = this.images[0];

  SLIDER_WITH: number = this.windowWidth > 700 ? 5 : 2;
  prevDisable: boolean = true;
  nextDisable: boolean = this.images.length <= 1;

  disableButtons(): void {
    this.prevDisable = (this.images.length <= this.SLIDER_WITH && this.activeImage.index == 0)
    this.nextDisable = (this.images.length <= this.SLIDER_WITH && this.activeImage.index == this.images.length - 1)
  }


  setActiveImage(image: any): void {
    this.activeImage = image;
    this.disableButtons()
  }

  prev(activeImage: any): void {
    const index = this.images.indexOf(activeImage)

    if (index == 0) {
      const img = this.images.pop()
      img && this.images.unshift(img)
      this.setActiveImage(this.images[index])
    } else {
      this.setActiveImage(this.images[index - 1])
    }
  }
  next(activeImage: any): void {
    const index = this.images.indexOf(activeImage)

    if (index == this.SLIDER_WITH) {
      const img = this.images.shift()
      img && this.images.push(img)
      this.setActiveImage(this.images[index])
    } else {
      this.setActiveImage(this.images[index + 1])
    }
  }
}
