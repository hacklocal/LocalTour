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
import {UserProfilePage} from "../user-profile/user-profile";
import {SiteDescriptionPage} from "../site-description/site-description";
import {Geolocation, Geoposition} from "@ionic-native/geolocation";
import {AddmarkerpagePage} from "../addmarkerpage/addmarkerpage";

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
  map:GoogleMap;
  editMode:boolean = false ;
  editableMarker:Marker;
  positionMarker:Marker;

  constructor(public navCtrl: NavController, public platfoorm:Platform,private geolocation:Geolocation) {

  }
  ionViewDidEnter(){
    this.dismissEditMode();
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
        let posmark2:LatLng = new LatLng(44.695621,10.636611);
        let posmark3:LatLng = new LatLng(44.696547,10.634527);
        console.log("CREATE MAP!!");
        setTimeout(()=>{
          this.map = GoogleMaps.create('map-canvas', mapOptions);
          this.map.one(GoogleMapsEvent.MAP_READY).then(async () => {
            let marker: Marker = await this.map.addMarker({
              title: 'Murales Keith Haring',
              snippet: 'Arte',
              position: position,
              animation: GoogleMapsAnimation.BOUNCE,
              icon:  'file:///android_asset/www/assets/imgs/icon_orange@2x.png',
              styles:{
                "background-image": 'file:///android_asset/www/assets/imgs/src/keith-haring-2174269_960_720.svg'
              }
            }).then(
              (data:Marker)=>{return  data;}
            );
            await this.map.addMarker({
              title: 'Albero secolare del pino',
              snippet: 'Natura',
              position: posmark2,
              animation: GoogleMapsAnimation.BOUNCE,
              icon:  'file:///android_asset/www/assets/imgs/icon_green@2x.png'
            });
            await this.map.addMarker({
              title: 'Gelateria il capolinea',
              snippet: 'Negozio',
              position: posmark3,
              animation: GoogleMapsAnimation.BOUNCE,
              icon:  'file:///android_asset/www/assets/imgs/icon_purple@2x.png'
            });
            marker.on(GoogleMapsEvent.MARKER_CLICK).subscribe(() => {
              console.log("Click")
            });
            marker.on(GoogleMapsEvent.INFO_CLICK).subscribe(
              ()=>{
                console.log("drag!");
                this.navCtrl.push(SiteDescriptionPage);
              }
            )
          });

        },200)

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
  centerCameraOnLocation(){
    this.geolocation.getCurrentPosition().then(
      async (data:Geoposition) =>{
        const coords:LatLng = new LatLng(data.coords.latitude,data.coords.longitude);
        this.map.setCameraTarget(coords);
       this.positionMarker = await this.map.addMarker({
          position: coords,
          icon:  'file:///android_asset/www/assets/imgs/Pin.png'
        }).then(
         (data:Marker) => { return data;}
       )
      }
    )
  }
  addMarker(){
    this.geolocation.getCurrentPosition().then(
      async (data:Geoposition) =>{
        const coords:LatLng = new LatLng(data.coords.latitude,data.coords.longitude);
        this.map.setCameraTarget(coords);
      this.editableMarker =  await this.map.addMarker({
          position: coords,
          icon:  'file:///android_asset/www/assets/imgs/add_icons@2x.png',

          draggable:true
        }).then(
          (data:Marker)=>{
            this.editMode = true;
            return data
          }
        )
      }
    )
  }

  dismissEditMode(){
    this.editableMarker.remove();
    this.editMode = false;

  }
  goToFinalEdit(){
    this.navCtrl.push(AddmarkerpagePage);
  }

  goToProfile(){
    this.navCtrl.push(UserProfilePage)
  }
}
