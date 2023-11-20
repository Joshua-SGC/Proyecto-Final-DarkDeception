var indice = 0;
          var slider = document.getElementById('slider');
          var elementos = slider.children;
          
          function moverIzquierda() {
            if (indice > 0) {
              indice--;
              actualizarCarrusel();
            }
          }
          
          function moverDerecha() {
            if (indice < elementos.length - 1) {
              indice++;
              actualizarCarrusel();
            }
          }
          
          function actualizarCarrusel() {
            for (var i = 0; i < elementos.length; i++) {
              elementos[i].style.transform = 'translateX(' + (-100 * indice) + '%)';
            }
          }