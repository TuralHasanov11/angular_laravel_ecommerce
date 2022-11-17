import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { Product } from '../models/product';

const BASE_URL = '';

@Injectable({
  providedIn: 'root'
})
export class ProductsService {

  constructor(private http: HttpClient) { }

  getProducts(limit: number, sort: string, category?: any): Observable<Array<Product>> {
    return this.http.get<Array<Product>>(
      `${BASE_URL}/products${category ? '/category/' + category : ''
      }?sort=${sort}&limit=${limit}`
    );
  }

  getCategories(): Observable<Array<string>> {
    return this.http.get<Array<string>>(
      `${BASE_URL}/products/categories`
    );
  }
}
