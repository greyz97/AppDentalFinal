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
}
return true; 
} 
