import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { SiteDescriptionPage } from './site-description';

@NgModule({
  declarations: [
    SiteDescriptionPage,
  ],
  imports: [
    IonicPageModule.forChild(SiteDescriptionPage),
  ],
})
export class SiteDescriptionPageModule {}
