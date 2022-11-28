function validarForm(form){
     // Number   **********
     if(form.txt_id.value.length==0 ||
        isNaN(form.txt_id.value)){
        if(form.txt_id.value.length==0){
            alert('No puede estar vacio el Campo id producto');
        }else if(isNaN(form.txt_id.value)){
            alert('El id numero debe ser un numero');
        }
        form.txt_id.focus();
        return false;
    }

    // Text      *************
    if(form.id_Producto.value == null || 
        form.id_Producto.value.length==0 ||
        /^\s+$/.test(form.id_Producto.value)
        ){ //Validavion de campo instituto vacio
            alert('Inserte el id del producto'); //envia el mensaje
            form.id_Producto.focus(); //enviar el cursor al campo de instituto
            return false; //termina la funcion validarform
    }

    // tonos ********
    if(form.color1.checked && !form.color2.checked && !form.color3.checked){
        alert('Selecciona un Tono');
        form.color1.focus();
        return false;
    }

    // cantidad   **********
    if(form.cantidad.value.length==0 || form.cantidad.value == "Select..."){
        alert('Selecciona la Cantidad');
        form.cantidad.focus();
        return false;
    }

    if( !(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{63}$/i.test(form.txt_Desc.value)) ) {

        form.txt_Desc.focus();
        return true;
    }
    return true;
}

function validateForm(form){

    var z = document.forms["form"]["num"].value;
  
    if(!/^[0-9]+$/.test(z)){
      alert("Please only enter numeric characters only for your Age! (Allowed input:0-9)")
    }
  
  }