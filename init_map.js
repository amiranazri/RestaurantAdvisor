let map, infoWindow;

function initMap() {

  function success(position) {
    const latitude  = position.coords.latitude;
    const longitude = position.coords.longitude;
    const pos = { lat: latitude, lng: longitude };

    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: pos,
    });
    const marker = new google.maps.Marker({
      position: pos,
      map: map,
      icon: {
        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
      }
    });
    for (i = 0; i <= 1; i++) {
      const marker = new google.maps.Marker({
      position: { lat: -26.102640, lng: 27.961170 },
      map: map,
      icon: {
        url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"
      }
    });
    }
  }
  function error () {
    console.log("ERROR")
  }
  navigator.geolocation.getCurrentPosition(success, error);
}