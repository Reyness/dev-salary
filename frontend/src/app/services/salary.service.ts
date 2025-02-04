import { Injectable } from '@angular/core';
import { environment } from '../../environment';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class SalaryService {

  private apiUrl = environment.apiUrl;

  constructor(private readonly http: HttpClient) { }

  getSalaries(): Observable<any> {
    return this.http.get(`${this.apiUrl}/salaries`);
  }

  addSalary(salary: any): Observable<any> {
    return this.http.post(`${this.apiUrl}/salaries`, salary);
  }

  getAverages(): Observable<any> {
    return this.http.get(`${this.apiUrl}/salaries/averages`);
  }
}
