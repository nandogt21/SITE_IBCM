function validar(){
    if(document.form.nome.value==""){
        alert("preencha campo nome");
        document.form.nome.focus();
        return false;
    }
  
    if(document.form.senha.value.length < 6){
        alert("a senha deve conter no minimo 6 caracteres");
        document.form.senha.focus();
         return false;
         
    
    }
    
}