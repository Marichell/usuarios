// BORRAR ELEMENTOS Y FOTO DE LA CARPETA
$(".card").on("click", ".borrar", function(){
 var borrarID = $(this).attr("borrarID");
 var borrarImagen = $(this).attr("borrarImagen");
 window.location = "index.php?url=usuarios&borrarID="+borrarID+"&borrarImagen="+borrarImagen;
})

// LLAMANDO CONTENIDO A MODAL PARA EDITAR
$(".card").on("click", ".editar", function(){

 var editarID = $(this).attr("editarID");
 var datos = new FormData();

 datos.append("editarID", editarID);

 $.ajax({

  url: "ajax/usuarioAjax.php",
  method: "POST",
  data: datos,
  cache: false,
  contentType: false,
  processData: false,
  dataType: "json",
  success: function(respuesta){

   $("#id-nombre").val(respuesta["nombre"]);
   $("#editarID").val(respuesta["id"]);
   $("#id-email").val(respuesta["email"]);
   $("#id-bio").val(respuesta["bio"]);

   //para editar foto
   $("#imagenActual").val(respuesta["imagen"]);
   if (respuesta["imagen"] != "") {
    $(".visor").attr("src", respuesta["imagen"]);
  }else{
    $(".visor").attr("src", "vistas/img/img-upload.png");
  }


}

})

})