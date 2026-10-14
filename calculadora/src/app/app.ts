import { Component } from '@angular/core';
import { Calculadora } from './calculadora/calculadora';

@Component({
  selector: 'app-root',
  imports: [Calculadora],
  template: '<app-calculadora />',
})
export class App {}
