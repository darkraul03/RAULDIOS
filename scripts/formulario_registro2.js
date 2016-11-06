 function limpiarCajas() {
    $("#nombres").val("");
    $("#apellidos").val("");
    $("#correo").val("");
    $("#pass").val("");
    $("#pass2").val("");
}

        function validarCampos() {
            campos = new Array("#nombres", "#apellidos","#correo","#pass","#pass2");
            estado = true;
            var contador;
            for (var i = 0; i < campos.length; i++) {
                if ($(campos[i]).val() == -1 || $(campos[i]).val() == "") {
                    contador = i;
                    $(campos[i]).removeClass("txt-box-campos").addClass("txt-box-campos-oblig");
                    estado = false;
                }
                else {
                    contador = i;
                    $(campos[i]).removeClass("txt-box-campos-oblig").addClass("txt-box-campos");
                }
            }
            return estado;
        }

        $(document).ready(function () {

			$("#nombres").focus(function () {
                $(this).removeClass("txt-box-campos").addClass("txt-box-campos-obliga");
            });
            $("#nombres").blur(function () {
                $(this).removeClass("txt-box-campos-obliga").addClass("txt-box-campos");
                $(this).removeClass("txt-box-campos-oblig").addClass("txt-box-campos");
            });
            $("#apellidos").focus(function () {
                $(this).removeClass("txt-box-campos").addClass("txt-box-campos-obliga");
            });
            $("#apellidos").blur(function () {
                $(this).removeClass("txt-box-campos-obliga").addClass("txt-box-campos");
                $(this).removeClass("txt-box-campos-oblig").addClass("txt-box-campos");
            });
            $("#correo").focus(function () {
                $(this).removeClass("txt-box-campos").addClass("txt-box-campos-obliga");
            });
            $("#correo").blur(function () {
                $(this).removeClass("txt-box-campos-obliga").addClass("txt-box-campos");
                $(this).removeClass("txt-box-campos-oblig").addClass("txt-box-campos");
            });
            $("#pass").focus(function () {
                $(this).removeClass("txt-box-campos").addClass("txt-box-campos-obliga");
            });
            $("#pass").blur(function () {
                $(this).removeClass("txt-box-campos-obliga").addClass("txt-box-campos");
                $(this).removeClass("txt-box-campos-oblig").addClass("txt-box-campos");
            });
            $("#pass2").focus(function () {
                $(this).removeClass("txt-box-campos").addClass("txt-box-campos-obliga");
            });
            $("#pass2").blur(function () {
                $(this).removeClass("txt-box-campos-obliga").addClass("txt-box-campos");
                $(this).removeClass("txt-box-campos-oblig").addClass("txt-box-campos");
            });


            $("#procesar").click(function () {
                if(validarCampos() == false){
                    alert("Ingresar los campos requeridos");
                }else{
                    alert("Datos enviados correctamente");
                    limpiarCajas();
                }
            });

        });