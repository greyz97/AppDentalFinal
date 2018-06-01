function formulario(f) { 
if (f.usuario.value   == '') { 
    alert ('Campo usuario esta vacío');  
f.usuario.focus(); 
    return false; 
} 
if (f.contraseña.value  == '') { 
    alert ('Campo contraseña esta vacío'); 
f.contraseña.focus(); 
    return false; 
}if (f.edad.value  == '') { 
    alert ('Campo edad esta vacío'); 
f.edad.focus(); 
    return false; 
}if (f.sexo.value  == '') { 
    alert ('Campo sexo esta vacío'); 
f.sexo.focus(); 
    return false; 
}if (f.nombre.value  == '') { 
    alert ('Campo nombre esta vacío'); 
f.nombre.focus(); 
    return false; 
}if (f.apellidop.value  == '') { 
    alert ('Campo apellido paterno esta vacío'); 
f.apellidop.focus(); 
    return false; 
}if (f.apellidom.value  == '') { 
    alert ('Campo apellido materno esta vacío'); 
f.apellidom.focus(); 
    return false; 
}if (f.ciudad.value  == '') { 
    alert ('Campo ciudad esta vacío'); 
f.ciudad.focus(); 
    return false; 
}if (f.estado.value  == '') { 
    alert ('Campo estado esta vacío'); 
f.estado.focus(); 
    return false; 
}if (f.telefono.value  == '') { 
    alert ('Campo telefono esta vacío'); 
f.telefono.focus(); 
    return false; 
}if (f.correo.value  == '') { 
    alert ('Campo correo esta vacío'); 
f.correo.focus(); 
    return false; 
}
return true; 
} 