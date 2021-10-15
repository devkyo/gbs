

console.log('ready front');

const items = document.querySelectorAll('.lavadora__info')

const lavadora = document.getElementById('lavadora__img')
const steam = document.getElementById('steam')
const thinq = document.getElementById('thinq')

items.forEach( function(e,index) {

  
  e.addEventListener('mouseover', function(){

    switch(index){
      case 0:
        lavadora.setAttribute('src','../assets/images/lav-step4.png')

        steam.setAttribute('src','../assets/images/steam-active.png')

        thinq.setAttribute('src','../assets/images/thinq.png')
        break;
      case 1:
        lavadora.setAttribute('src','../assets/images/lav-step5.png')

        steam.setAttribute('src','../assets/images/steam.png')

        thinq.setAttribute('src','../assets/images/thinq.png')


        break;
      case 2:
        lavadora.setAttribute('src','../assets/images/lav-step6.png')

        steam.setAttribute('src','../assets/images/steam.png')
        thinq.setAttribute('src','../assets/images/thinq-active.png')
        break;
      case 3:
        lavadora.setAttribute('src','../assets/images/lav-step1.png')

        steam.setAttribute('src','../assets/images/steam.png')
        thinq.setAttribute('src','../assets/images/thinq.png')
        break;
      case 4:
        lavadora.setAttribute('src','../assets/images/lav-step2.png')

        steam.setAttribute('src','../assets/images/steam.png')
        thinq.setAttribute('src','../assets/images/thinq.png')
        break;
      default:
        lavadora.setAttribute('src','../assets/images/lav-step3.png')
        steam.setAttribute('src','../assets/images/steam.png')
        thinq.setAttribute('src','../assets/images/thinq.png')
        break;
    
    }


    items.forEach( function(ev) {
      ev.classList.remove('active-features')
    })
    
    this.classList.add('active-features')

   

  })
  
})


const dropzone = document.getElementById('dropfile')
const filetext = document.getElementsByClassName('file-text')
const inputFoto = document.getElementById('foto')


inputFoto.onchange = function(){
  // console.log(this.files[0].name);

  filetext[0].innerHTML = this.files[0].name

}


dropzone.addEventListener("drag", function(event) {

}, false);

dropzone.addEventListener("dragstart", function(event) {
  // store a ref. on the dragged elem
  dragged = event.target;
  // make it half transparent
  event.target.style.opacity = .5;
}, false);

dropzone.addEventListener("dragend", function(event) {
  // reset the transparency
  event.target.style.opacity = "";
}, false);

/* events fired on the drop targets */
dropzone.addEventListener("dragover", function(event) {
  // prevent default to allow drop
  event.preventDefault();
}, false);

dropzone.addEventListener("dragenter", function(event) {
  // highlight potential drop target when the draggable element enters it
  if (event.target.className == "dropzone") {
    event.target.style.background = "#a7a4a4";
  }

}, false);

dropzone.addEventListener("dragleave", function(event) {
  // reset background of potential drop target when the draggable element leaves it
  if (event.target.className == "dropzone") {
    event.target.style.background = "#a7a4a4";

    
  }

}, false);

dropzone.addEventListener("drop", function(event) {
  // prevent default action (open as link for some elements)
  event.preventDefault();




  inputFoto.files = event.dataTransfer.files

  console.log('fotos ->',inputFoto.files);

  filetext[0].innerHTML = event.dataTransfer.files[0].name

  console.log(event.dataTransfer.files[0].name);

  this.style.background = ''

  // move dragged elem to the selected drop target
  if (event.target.className == "dropzone") {
    event.target.style.background = "";
    dragged.parentNode.removeChild( dragged );
    event.target.appendChild( dragged );
  }
}, false);



$(document).ready( function(){
  



  $('#form-next').click(function(){

    const formulario1 = $('#formulario1')

    formulario1.validate({
      errorPlacement: function(error, element) {
              return false;
      },
      rules: {
        // nombrecompleto: {
        //   required: true,
        //   minlength: 5,
        // },
        // dni: {
        //   required: true,
        //   digits: true,
        //   minlength: 8
        // },
        // edad: {
        //   required: true,
        //   digits: true,
        //   minlength: 1
        // },
        // direccion: {
        //   required: true,
        //   minlength: 5
        // },
        // departamento: {
        //   required: true,
        //   minlength: 1
        // },
        // distrito: {
        //   required: true,
        //   minlength: 1
        // },

        // provincia: {
        //   required: true,
        //   minlength: 1
        // },
        // correo: {
        //   required: true,
        //   email: true
        // },
        // celular: {
        //   required: true,
        //   digits: true
        // }
      }
    })

    if(formulario1.valid()){

      event.preventDefault()
      $('.form-step1').css('display','none')

      let path = window.location.origin

      $('.form-pc').attr('src',`${path}/assets/images/form-2.jpg`);


      
      $('.form-step2').fadeIn()

      const body = window.matchMedia("(max-width:1000px)")
      function listenResponsive(body){
        if(body.matches){
          $('.form-responsive').attr('src','../assets/images/form-img-responsive-2.png')
        }else {
          $('.form-responsive').attr('src','../assets/images/form-img-responsive.png')
        }
      }
      // listenResponsive(body)
      body.addEventListener('change',listenResponsive(body))
      
    }

  })


  let checkbox = 0
  
  
  $('#form-send').click(function(){
    
    const formulario2 = $('#formulario2')

    formulario2.validate({

      errorPlacement: function(error, element) {
        return false;
      },
      rules: {
        anolavadora:{
          min: 1,
          
        },
        modelo: {
          required: true,
          minlength: 2
        },

        
      },
    
   
    })

    if(formulario2.valid()){

      event.preventDefault()


      if(inputFoto.files.length == 0){
        $('.dropzone').css('border','1px solid #BD203B')    




      }else {
        $('.dropzone').css('border','none')    
      }


      if($('#politica').prop("checked") == true){
       
        $('#is-politica').css('color','#828282')
        checkbox =1
      }
      else if($('#politica').prop("checked") == false){
        checkbox = 0
        $('#is-politica').css('color','#BD203B')
      }


      if($('#terminos').prop("checked") == true){
        
        $('#is-terminos').css('color','#828282')
        checkbox += 1
      }
      else if($('#terminos').prop("checked") == false){
         
        $('#is-terminos').css('color','#BD203B')
       checkbox = 0
      }
    

      if(checkbox >= 2){
        

        let formData1 = new FormData(formulario1)
        let formData2 = formulario2.serializeArray()

        for(let i=0; i<formData2.length; i++){
          formData1.append(formData2[i].name, formData2[i].value)
        }

        formData1.append('foto',$('#foto')[0].files[0]) 

    
        formData1.append('departamento_name', $('#departamento option:selected').text())
        formData1.append('provincia_name', $('#provincia option:selected').text())
        formData1.append('distrito_name',$('#distrito option:selected').text())
   

        $.ajax({
          method: 'POST',
          url: 'api/registroparticipante',
          processData: false, 
          contentType: false,
          data: formData1,
          beforeSend: function(){

            
            $('#form-send').disabled = true
            $('#form-send').val('Enviando...')
          },
          
          success: function(res){
            
 
           

            if(res.status == 200){
              window.location.href = './gracias'
            }
          }
        })


      }

     
    } 

  })


  $('#form-anterior').click( function(){
    

      $('.form-step1').fadeIn()

      let path = window.location.origin

      $('.form-pc').attr('src',`${path}/assets/images/form-1.jpg`);


      $('.form-step2').css('display','none')

      $('.form-responsive').attr('src','../assets/images/form-img-responsive.png')
      
  })


  
})


$('#departamento').change( async (e)=> {

    const response = await fetch(`/api/provincias/${e.target.value}`)
    const provincias = await response.json();

    
    $('#provincia').find('option').remove();
    
    $('#provincia').append('<option value="">Selecciona una provincia</option>')
    
    
    $('#distrito').find('option').remove();
    $('#distrito').append('<option value="">Selecciona un distrito</option>')
    

    
    
    for(let i=0; i < provincias.length; i++){
    $('#provincia').append(`<option value="${String(provincias[i].id_ubigeo)}">${provincias[i].nombre_ubigeo}</option>`)
    }


})

$('#provincia').change( async (e)=> {

  const response = await fetch(`/api/distritos/${e.target.value}`)
  const distritos = await response.json();

  
  $('.distrito-wrapper').fadeIn();

  $('#distrito').find('option').remove();
  $('#distrito').append('<option value="">Selecciona un distrito</option>')

  for(let i=0; i < distritos.length; i++){
    $('#distrito').append(`<option value="${distritos[i].id_ubigeo}">${distritos[i].nombre_ubigeo}</option>`)
   
  }
  
})





$('.lavadora__responsive').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  autoplaySpeed: 3000,
  arrows: false,
  dots: true,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },

  ]
});