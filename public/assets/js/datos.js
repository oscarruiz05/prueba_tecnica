function eliminar_registro(id){
    if(confirm('desea eliminar el registro?')){
        window.location.href = '/datos/delete/'+id;
    }
}