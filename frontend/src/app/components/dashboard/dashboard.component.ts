import { Component } from '@angular/core';
import { SalaryService } from '../../services/salary.service';

@Component({
  selector: 'app-dashboard',
  standalone: true,
  imports: [],
  templateUrl: './dashboard.component.html',
  styleUrl: './dashboard.component.scss'
})
export class DashboardComponent {
  salaries: any[] = [];
  averages: any[] = [];

  constructor(private salaryService: SalaryService) { }

  ngOnInit() {
    this.salaryService.getSalaries().subscribe(data => {
      this.salaries = data;
    });

    this.salaryService.getAverages().subscribe(data => {
      this.averages = data;
    });
  }
}
