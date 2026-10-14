import { Component } from '@angular/core';

@Component({
  selector: 'app-calculadora',
  styleUrl: './calculadora.css',
  templateUrl: './calculadora.html',
})
export class Calculadora {
  protected a = 0;
  protected b = 0;
  protected resultado: number | string = 0;

  protected actualizarA(event: Event): void {
    const input = event.target as HTMLInputElement;
    this.a = Number(input.value || 0);
  }

  protected actualizarB(event: Event): void {
    const input = event.target as HTMLInputElement;
    this.b = Number(input.value || 0);
  }

  protected calcular(operacion: 'sumar' | 'restar' | 'multiplicar' | 'dividir'): void {
    switch (operacion) {
      case 'sumar':
        this.resultado = this.a + this.b;
        break;
      case 'restar':
        this.resultado = this.a - this.b;
        break;
      case 'multiplicar':
        this.resultado = this.a * this.b;
        break;
      case 'dividir':
        this.resultado = this.b === 0 ? 'Error: división por cero' : this.a / this.b;
        break;
      default:
        this.resultado = 0;
    }
  }

  protected limpiar(): void {
    this.a = 0;
    this.b = 0;
    this.resultado = 0;
  }
}

