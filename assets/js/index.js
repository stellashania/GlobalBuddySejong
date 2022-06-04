// const checkbox = document.querySelector('#agreement').required;;

// checkbox.addEventListener('click', function(){
//     $('.popup').text($(this).data('popup')).show();
// })

var checkbox = document.querySelectorAll('#agreement');

for (var i = 0; i < checkbox.length; i++) {
  checkbox[i].addEventListener("click", checkedOrNot);
}

function checkedOrNot() {
  var isChecked = this.checked;

  if (isChecked) { //checked
    $('.popup').text($(this).data('popup')).show();
  } 
}