import {
  GoogleMaps,
  GoogleMap,
  GoogleMapsEvent,
  GoogleMapOptions,
  GoogleMapsAnimation,
  CameraPosition,
  MarkerOptions,
  Marker,
  Environment, ILatLng, LatLng
} from '@ionic-native/google-maps';
import { Component } from '@angular/core';
import {NavController, Platform} from 'ionic-angular';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
  map:GoogleMap;
  constructor(public navCtrl: NavController, public platfoorm:Platform) {

  }
  ionViewDidLoad(){
    let mapOptions: GoogleMapOptions = {
        camera: {
          target: {
            lat: 44.6964782,
            lng: 10.6389904
          },
          zoom: 17,
          tilt: 30
        },
        styles: [
          {
            featureType: "poi",
            stylers: [
              {visibility: "off"}
            ]
          }
        ]
      }
    ;
    this.platfoorm.ready().then(
      () => {
        let position:LatLng = new LatLng(44.6964782,10.6389904);

        console.log("CREATE MAP!!")
        this.map = GoogleMaps.create('map-canvas', mapOptions);
        this.map.one(GoogleMapsEvent.MAP_READY).then(() => {
          this.map.addMarker({
            title: '@ionic-native/google-maps plugin!',
            snippet: 'This plugin is awesome!',
            position: position,
            animation: GoogleMapsAnimation.BOUNCE
          });
        });
      }
    )

    // let marker: Marker = this.map.addMarkerSync({
    //   title: 'Ionic',
    //   icon: 'blue',
    //   animation: 'DROP',
    //   position: {
    //     lat: 43.0741904,
    //     lng: -89.3809802
    //   }
    // });
    // marker.on(GoogleMapsEvent.MARKER_CLICK).subscribe(() => {
    //   alert('clicked');
    // });
  }
}
