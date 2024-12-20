import 'bootstrap'; 
import $ from 'jquery'; 

window.$ = window.jQuery = $; 

const toastTrigger = $('#NotAvailableYetBtn');
const toastLiveExample = $('#NotAvailableYet');

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

if (toastTrigger.length) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample[0]);
  toastTrigger.on('click', () => {
    toastBootstrap.show();
  });
}

// Пример стартового JavaScript для отключения отправки форм при наличии недопустимых полей
(function () {
    'use strict'
  
    // Получите все формы, к которым мы хотим применить пользовательские стили проверки Bootstrap
    var forms = document.querySelectorAll('.needs-validation')
  
    // Зацикливайтесь на них и предотвращайте отправку
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()

$(function() {
    $("div[id^='myModal']").each(function() {
        const currentModal = $(this);

        currentModal.find('.btn-next').on('click', function() {
            const modalInstance = bootstrap.Modal.getOrCreateInstance(currentModal[0]);
            modalInstance.hide();

            setTimeout(() => {
                const nextModal = currentModal.closest('.col').next().find("div[id^='myModal']");
                if (nextModal.length) {
                    const nextModalInstance = bootstrap.Modal.getOrCreateInstance(nextModal[0]);
                    nextModalInstance.show();
                }
            }, 10); 
        });

        currentModal.find('.btn-prev').on('click', function() {
            const modalInstance = bootstrap.Modal.getOrCreateInstance(currentModal[0]);
            modalInstance.hide();

            setTimeout(() => {
                const prevModal = currentModal.closest('.col').prev().find("div[id^='myModal']");
                if (prevModal.length) {
                    const prevModalInstance = bootstrap.Modal.getOrCreateInstance(prevModal[0]);
                    prevModalInstance.show();
                }
            }, 10); 
        });

        currentModal.find('[data-bs-dismiss="modal"]').on('click', function() {
            const modalInstance = bootstrap.Modal.getOrCreateInstance(currentModal[0]);
            modalInstance.hide(); 
        });
    });
});
