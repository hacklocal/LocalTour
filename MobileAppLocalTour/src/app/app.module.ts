import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';

import { MyApp } from './app.component';
import { HomePage } from '../pages/home/home';
import { GoogleMaps} from "@ionic-native/google-maps";
import {UserProfilePageModule} from "../pages/user-profile/user-profile.module";
import {SiteDescriptionPageModule} from "../pages/site-description/site-description.module";
import {Geolocation} from "@ionic-native/geolocation";
import {AddmarkerpagePageModule} from "../pages/addmarkerpage/addmarkerpage.module";
import { ElasticModule } from 'ng-elastic';

@NgModule({
  declarations: [
    MyApp,
    HomePage,

  ],
  imports: [
    BrowserModule,
    UserProfilePageModule,
    SiteDescriptionPageModule,
    AddmarkerpagePageModule,
    IonicModule.forRoot(MyApp),
    ElasticModule
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    HomePage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    GoogleMaps,
    Geolocation,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}
