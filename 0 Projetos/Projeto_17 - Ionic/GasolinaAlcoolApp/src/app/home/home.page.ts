import { PRECONNECT_CHECK_BLOCKLIST } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  constructor() {}

  public precoAlcool = "";
  public precoGasolina = "";


  public resultado: String = "Adicione os valores do Alcool e gasolina para obter o resultado!";

  public calcular(): void {

    if(this.precoAlcool && this.precoGasolina){
      var pAlcool= parseFloat(this.precoAlcool)
      var pGasolina= parseFloat(this.precoGasolina)

      if((pAlcool/pGasolina)>=0.7){
        this.resultado = ' Vale apena colocar Gasolina'
      } else{
        this.resultado = ' Vale apena colocar Alcool'
      }
    }else{
      this.resultado = "Faltam dados! campos nao preenchidos"
    }

  };

}
