
$.ajax({
    url : "mapa/info",
    global : true,
    async : false
}).done(function (msg){
    alert('Funciona el ajax' + msg);
    window.json = msg;
});
let jsonjs = window.json;

alert(jsonjs);
alert(jsonjs);
function initMap() {
    let map = new google.maps.Map(document.getElementById("map"), {
        zoom: 13,
        center: { lat: 20.686575003501225, lng: -103.35070648740802 },
    });
    let image = "imagenes/starbucks.png";
    new google.maps.Marker({
        position: { lat: 20.678734387633124, lng: -103.34486093072228 },
        map,
        icon: image,
        title: "Starbucks Guadalajara Centro",
    });
    new google.maps.Marker({
        position: { lat: 20.67648594134188, lng: -103.36872186119042 },
        map,
        icon: image,
        title: "Starbucks Chapultepec",
    });
    new google.maps.Marker({
        position: { lat: 20.675113725249542, lng: -103.38073819253613 },
        map,
        icon: image,
        title: "Starbucks Centro Magno",
    });
    new google.maps.Marker({
        position: { lat: 20.68483007410835, lng: -103.37344258429947 },
        map,
        icon: image,
        title: "Starbucks Américas",
    });
    new google.maps.Marker({
        position: { lat: 20.673883288139564, lng: -103.38832535731713 },
        map,
        icon: image,
        title: "Starbucks Minerva",
    });
    new google.maps.Marker({
        position: { lat: 20.696219152304433, lng: -103.37561168000198 },
        map,
        icon: image,
        title: "Starbucks Midtown",
    });
}