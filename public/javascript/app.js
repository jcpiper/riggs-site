/**
 * Created by Justin on 5/27/2017.
 */
$(document).foundation();

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
  $('input.date').Zebra_DatePicker({
    direction: true,
    disabled_dates: ['* * * 0,2,3,6'],
    format: "D, m-d-Y"
  });
  $('#firstTime').click(function() {
    if($('#firstDate').val().indexOf('Thu') > -1 && $('#firstTime option').length <= 2){
      $('#firstTime').append($('<option>', {
        value: 'evening',
        text: 'Evening'
      }));
    }
  });
  $('#secondTime').click(function() {
    if($('#secondDate').val().indexOf('Thu') > -1 && $('#secondTime option').length <= 2){
      $('#secondTime').append($('<option>', {
        value: 'evening',
        text: 'Evening'
      }));
    }
  });
  $('#thirdTime').click(function() {
    if($('#thirdDate').val().indexOf('Thu') > -1 && $('#thirdTime option').length <= 2){
      $('#thirdTime').append($('<option>', {
        value: 'evening',
        text: 'Evening'
      }));
    }
  });
});

// submit form with ajax
$('#appointmentForm').ajaxForm({
  success: function() {
    $('#hiddenSuccessMessage').toggle(true);
  },
  error: function() {
    $('#hiddenErrorMessage').toggle(true);
  },
  clearForm: true
});
