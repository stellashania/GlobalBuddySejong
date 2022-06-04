const checkbox = document.querySelector('#agreement').required;;

checkbox.addEventListener('click', function(){
    $('.popup').text($(this).data('popup')).show();
})