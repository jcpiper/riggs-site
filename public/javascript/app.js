/**
 * Created by Justin on 5/27/2017.
 */
console.log("in app.js");
$(document).foundation();

console.log("in app.js");
// make background fill screen
(function(){
  var height = window.innerHeight;
  var navHeight = $('#head').height();
  console.log('nav height: ' + navHeight);

  height -= navHeight;
  console.log("height: " + height);
  var div = document.getElementById("scrollPic");
  div.style.height = height.toString() + 'px';
})();


$(document).ready(function () {
  $('input.date').Zebra_DatePicker();
});