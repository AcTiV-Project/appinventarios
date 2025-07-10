//Script encargado de darle un efecto a cada transaccion en la pagina home.php


document.addEventListener('DOMContentLoaded', ()=>{
      let transaccion = document.querySelectorAll('.transactions');

      transaccion.forEach(transaccion =>{
            transaccion.addEventListener('mouseover', ()=>{
                  transaccion.classList.add('transactions_efect');
            })

            transaccion.addEventListener('mouseout', ()=>{
                  transaccion.classList.remove('transactions_efect');
            })
      })
}); 