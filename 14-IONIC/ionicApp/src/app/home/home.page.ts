import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';
@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage implements OnInit {

  public pesquisa: String = "";
  public resultado: String = "";
  public titulo: String = "Meu primeiro App";
  public imagemRamdomica: String = "https://images.unsplash.com/photo-1661956603025-8310b2e3036d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80";
  public imagemLocal: String = "../../assets/icone-celular.png";

  constructor(private navegacao:NavController) { }

  ngOnInit() {
  }

  public atualiza(): void {
    this.titulo = "Texto alterado";
  };
  public acao(): void {
    this.titulo = "Botao click";
  };

  abrirBotoes() {
    this.navegacao.navigateForward('botoes')
  };
  abrirLista() {
    this.navegacao.navigateForward('lista')
  };
  recuperar() {
    this.resultado = this.pesquisa;
  };
}
