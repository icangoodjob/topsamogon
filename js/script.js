
/*адаптивное меню */

const header = document.getElementById('header');
const toggler = document.getElementById('toggler');

toggler.addEventListener('click', function(){
  header.classList.toggle('menu-show')
})



/* MODAL FORM  */

const myModal = new bootstrap.Modal(document.getElementById('modal-form'))
const modalOpenButtons = document.getElementsByClassName('modal-open');
const modalCloseButton = document.getElementById('modal-close');
const btnListener = document.getElementById('btnListener');

for (let modalOpenButton of modalOpenButtons) {
    modalOpenButton.addEventListener('click', function(e){
        myModal.show();

        // чтобы узнать какой кнопкой было открыто модальое окно
        btnListener.setAttribute('value', modalOpenButton.getAttribute('name'))
    })
}

modalCloseButton.addEventListener('click', function(){
    myModal.hide()
})


     window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);

