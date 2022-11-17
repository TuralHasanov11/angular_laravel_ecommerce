import { Component, EventEmitter, OnInit, Output } from '@angular/core';
import { Subscription } from 'rxjs';
import { ProductsService } from 'src/app/services/products.service';

@Component({
  selector: 'app-filters',
  templateUrl: './filters.component.html',
  styleUrls: ['./filters.component.css']
})
export class FiltersComponent implements OnInit {
  @Output() showCategory = new EventEmitter<string>();
  categories: any[] = [];
  categoriesSubscription: Subscription | undefined;

  constructor(private productsService: ProductsService) { }

  ngOnInit(): void {
    this.categoriesSubscription = this.productsService.getProducts(10, 'desc')
      .subscribe((response: Array<any>) => {
        this.categories = response;
      });
  }

  onShowCategory(category: any): void {
    this.showCategory.next(category);
  }

  ngOnDestroy(): void {
    if (this.categoriesSubscription) {
      this.categoriesSubscription.unsubscribe();
    }
  }

}
