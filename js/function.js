function validarForm(form){
    
    // Number   **********
if(form.txt_id.value.length==0 ||
    isNaN(form.txt_id.value)){
    if(form.txt_id.value.length==0){
        alert('The product id field cannot be empty');
    }else if(isNaN(form.txt_id.value)){
        alert('The id number must be a number');
    }
    form.txt_id.focus();
    return false;
}
  // Text      *************
  if(form.txt_nombre.value == null || 
    form.txt_nombre.value.length==0 ||
    /^\s+$/.test(form.txt_nombre.value)
    ){ //Validavion de campo instituto vacio
        alert('Insert product name'); //envia el mensaje
        form.txt_nombre.focus(); //enviar el cursor al campo de instituto
        return false; //termina la funcion validarform
}
// Text      *************
if(form.txt_desc.value == null || 
    form.txt_desc.value.length==0 ||
    /^\s+$/.test(form.txt_desc.value)
    ){ //Validavion de campo instituto vacio
        alert('Insert product description'); //envia el mensaje
        form.txt_desc.focus(); //enviar el cursor al campo de instituto
        return false; //termina la funcion validarform
    }

    // Text      *************
if(form.txt_fe.value == null || 
    form.txt_fe.value.length==0 ||
    /^\s+$/.test(form.txt_fe.value)
    ){ //Validavion de campo instituto vacio
        alert('Insert the expiration date'); //envia el mensaje
        form.txt_fe.focus(); //enviar el cursor al campo de instituto
        return false; //termina la funcion validarform
    }

    // List   **********
if(form.lst_tipo.value.length==0 || form.lst_tipo.value == "Select..."){
    alert('Select a type');
    form.lst_tipo.focus();
    return false;
}

// RadioButton *********
var seleccionado = false;
for(var i=0; i<form.rad_tono.length; i++) {
    if(form.rad_tono[i].checked) {
        seleccionado = true;
        break;
    }
}
if(!seleccionado){
    alert('Select a tone');
    form.rad_tono[0].focus();
    return false;
}




return true;
}   