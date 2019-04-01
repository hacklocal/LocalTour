import { Component } from '@angular/core';
import {IonicPage, Keyboard, NavController, NavParams} from 'ionic-angular';

/**
 * Generated class for the AddmarkerpagePage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-addmarkerpage',
  templateUrl: 'addmarkerpage.html',
})
export class AddmarkerpagePage {

  constructor(public navCtrl: NavController, public navParams: NavParams,public keyboard:Keyboard) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad AddmarkerpagePage');
  }

  back(){
    this.navCtrl.pop();
  }

}
