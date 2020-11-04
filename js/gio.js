var container = document.getElementById( "globalArea" );
// Create Gio.controller
var controller = new GIO.Controller( container );
// Add data
controller.configure({
  control: {
        stats: false,
        disableUnmentioned: false,
        lightenMentioned: false,
        inOnly: false,
        outOnly: false,
        initCountry: "IN",
        halo: true,
        transparentBackground: true,
        autoRotation: true,
        rotationRatio: 1
  },
  color: {
    surface: 16711680,
    selected: 16711680,
    in: 00000000,
    out: 00000000,
    halo: 16711680
  },
  brightness: {
    ocean: 0,
    mentioned: 0,
    related: 0
  }
});
controller.addData( data );
controller.init();
function gio(a)
{
  controller.switchCountry(a);
}
