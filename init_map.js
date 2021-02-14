let map, infoWindow;

function initMap() {

  function success(position) {
    const latitude  = position.coords.latitude;
    const longitude = position.coords.longitude;
    const pos = { lat: latitude, lng: longitude };

    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 12,
      center: pos,
    });
    const marker = new google.maps.Marker({
      position: pos,
      map: map,
      icon: {
        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
      }
    });
    for (i = 0; i < data[0].length; i++) {
      const pos = { lat: parseFloat(data[0][i]), lng: parseFloat(data[1][i]) };
      const marker = new google.maps.Marker({
        position: pos,
        map: map,
        icon: {
          url: "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"
        }
      });
      const contentString = `
        <h6>${data[2][i]}</h6>
        <h7>${data[3][i]}</h7>
        <br/>
        <h7>${data[4][i]}</h7>
      `;
    const infowindow = new google.maps.InfoWindow({
      content: contentString,
    });
    marker.addListener("click", () => {
      infowindow.open(map, marker);
    });
    }
  }
  function error () {
    console.log("ERROR");
  }
  navigator.geolocation.getCurrentPosition(success, error);
}