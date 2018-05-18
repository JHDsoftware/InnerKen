import {Component, NgModule} from '@angular/core';
import {MatButtonModule, MatCheckboxModule,MatCard,MatGridList,MatGridListModule} from '@angular/material';
import 'hammerjs';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
@NgModule({
    imports: [MatButtonModule, MatCheckboxModule,MatCard,MatGridList,MatGridListModule],
})
export class AppComponent {
  title = 'InnerKen';
}
