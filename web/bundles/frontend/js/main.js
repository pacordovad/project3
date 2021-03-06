/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    $(".enviaNotas").click(function (e){
        e.preventDefault();
        var id = getEventTargetId(e);
        var element = $("#"+id);
        var url = element.data("url");
        var idNotas = element.data("idnotas");
        var elementNotas = $("#"+idNotas);
        var notas = elementNotas.val();
        var modalId = element.data("modalid");
        element.prop("disabled","disabled");
        
        $.ajax({
            type: "POST",
            url: url,
            cache: false,
            data: { notas: notas }
        }).done(function (msg) {
            if(msg.ok === true){
                elementNotas.val(notas);
                $('#'+modalId).modal('hide');
                element.prop("disabled",false);
            }
        }).fail(function (msg) {
            alert("Hubo un error al editar las notas");
        });
    });
});

function confirmar() {
    if (confirm("Está seguro que desea continuar?")) {
        return true;
    } else {
        return;
    }
}

function getEventTargetId(event) {
    var eventTargetId = event.target.id;
    if (eventTargetId == null || eventTargetId == undefined || eventTargetId == "" || eventTargetId.length <= 0) {
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;
        eventTargetId = target.id;
    }
    return eventTargetId;
}

function confirmar(){
    return confirm("Está seguro que desea continuar?");
}

/*------------------------------------------------------------------------------
 * Funciones para la ventana modal de selección de productos para agregar
 * productos al pedido.
 *-----------------------------------------------------------------------------/

/*
 * Función que convierte a los productos de la ventana de seleccion de productos
 * de pedido en un MixItUp.
 * @returns nada
 * 
 */
function chSelectProducto(element){
    $('#Grid').mixitup('filter',$(element).val());
}

/*
 * Funcion que llama otras funciones cuando la ventana modal del producto se
 * carga.
 * @returns nada
 */
function modalPedidoProductoLoaded(){
    $('#Grid').mixitup();
    setDimension();
    var valueProductoSeleccionado = $('#productoSeleccionadoId').val();
    if(valueProductoSeleccionado.length > 0){
        $('#Grid').scrollTo('#li-'+valueProductoSeleccionado);
    }
}
/*
 * Función que esconde los textfields de ancho y largo en la ventana modal que 
 * agrega productos al pedido.
 * 
 * @param ninguno
 * @returns nada
 * 
 */
function setDimension(){
    var value = $('#dimension').val();
    if(value !== '0'){
        $('#medidas-extra').hide();        
    }
    else {
        $('#medidas-extra').show();        
    }
}

/* 
 * Funcion que se ejecuta en la ventana modal para anadir productos al pedido
 * cuando el usuario selecciona una nueva imagen.
 */
function productoCambio(id){
    var valueAnterior = $('#productoSeleccionadoId').val();
    if(valueAnterior.length > 0){
        $('#li-'+valueAnterior).removeClass("seleccionado");
    }
    $('#li-'+id).addClass("seleccionado");
    $('#productoSeleccionadoId').val(id);
    $('#nombreProducto').val($('#li-'+id).data("nombre"));
    
    valorActual = $("#dimension").val();
    $('#dimension').empty();
    $figuraId = $('#lia-'+id).data("figura");
    
    $("#dimensionhidden option").each(function(){
        $figuraOpcion = $(this).data("figura");
        if($figuraOpcion == $figuraId || $figuraOpcion == "-1"){
            $figuraValue = $(this).val();
            $figuraAlto = $(this).data("alto");
            $figuraAncho = $(this).data("ancho");
            $figuraHtml = $(this).html();
            $figuraSelected = "";
            
            if($figuraValue == valorActual){
                $figuraSelected = "selected";
            }
            
            $opcion = '<option value="'+$figuraValue+'" data-alto="'+$figuraAlto+'" data-ancho="'+$figuraAncho+'" '+$figuraSelected+'>'+$figuraHtml+'</option>'
            $('#dimension').append($opcion);
        }
    });
    
    setDimension();
}

/*
 * Función que hace el llamado AJAX a la url que devuelve el html para agregar
 * productos al pedido.
 * @param {string} titulo del modal
 * @param {string} url a llamar
 * @param {string} path de la imagen que indica que la llamada AJAX está en ejecución
 * @returns {undefined}
 */
function anadirProducto(titulo,url){
    $("#modal-titulo").html(titulo+" producto");
    $('#modal-producto').modal();
    $("#modal-body").html('<div style="text-align:center"><img src="'+$('#loading-gif').val()+'" /></div>');
    $.get(url, function (data) {
        $("#modal-body").html(data);
        $("#modal-producto").data('action','agregar');
        modalPedidoProductoLoaded();
    });
}

/*
 * Función que hace el llamado AJAX a la url que devuelve el html para editar un 
 * producto del pedido.
 * @param {string} titulo del modal
 * @param {string} url a llamar
 * @param {string} path de la imagen que indica que la llamada AJAX está en ejecución
 * @returns {undefined}
 */
function editarProducto(titulo,url,index){
    $("#modal-titulo").html(titulo+" producto");
    $('#modal-producto').modal();
    $("#modal-body").html('<div style="text-align:center"><img src="'+$('#loading-gif').val()+'" /></div>');
    $.get(url, function (data) {
        $("#modal-body").html(data);
        $("#modal-producto").data('action','editar');
        $("#modal-producto").data('edit-id',index);
        modalPedidoProductoLoaded();
    });
}

/*
 * Función que hace todo el procesamiento de agregar un producto a la lista de 
 * productos del pedido cuando se presiona "Guardar Producto".
 * @param {string} collectionHolder: elemento del dom que mantiene las formas de los productos agregados al producto
 * @returns {undefined}
 */
function guardarProducto(collectionHolder){
    // Get the data-prototype explained earlier
    var prototype = collectionHolder.data('prototype');

    productoSeleccionado = "";
    productoSeleccionado = $.trim($('#productoSeleccionadoId').val());

    nombreProducto = $.trim($('#nombreProducto').val());
    nombreProducto = (nombreProducto.length > 0) ? nombreProducto : $('#li-'+productoSeleccionado).data("nombre");
    
    cantidad = $.trim($('#cantidad').val());
    cantidad = (cantidad.length > 0)? cantidad : 1;
    
    dimensionX = $.trim($('#dimensionX').val());
    dimensionY = $.trim($('#dimensionY').val());
    
    tipoCalidad = $.trim($('#tipo-calidad').val());
    tipoCalidadOption = $('#tipo-calidad :selected');
    
    dimension = $.trim($('#dimension').val());
    dimensionOption = $('#dimension :selected');
    
    pedidoPk = $.trim($('#pedidoPk').val());
    pedidoPk = (pedidoPk.length > 0) ? pedidoPk : "-";
    
    posicion = $.trim($('#posicion').val());
    posicion = (posicion.length > 0) ? posicion : "-";
    
    cortesia = $.trim($('#cortesia').val());
    
    if(productoSeleccionado.length > 0 && dimension.length > 0 && tipoCalidad.length > 0){
        var index = "-";
        
        // Identifico y estoy agregando un nuevo producto o estoy editando uno ya creado.
        if($("#modal-producto").data('action') === "agregar"){
            // get the new index
            index = collectionHolder.data('index');

            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            var newForm = prototype.replace(/__name__/g, index);

            // increase the index with one for the next item
            collectionHolder.data('index', index + 1);
            
            // Display the form in the page in an li, before the "Add a tag" link li
            var $newFormLi = $('<li></li>').append(newForm);
            $newFormLi.hide();
            collectionHolder.append($newFormLi);
            
        }else{   
            index = $("#modal-producto").data('edit-id');
        }

        var nombreWidget = "frontend_bundle_pedido_pedidoProducto_";
        var posicionLbl = nombreWidget + index + "_posicion";
        var nombreProductoLbl = nombreWidget + index + "_nombreProducto";
        var cantidadLbl = nombreWidget + index + "_cantidad";
        var altoLbl = nombreWidget + index + "_alto";
        var anchoLbl = nombreWidget + index + "_ancho";
        var tipoCalidadPkLbl = nombreWidget + index + "_tipoCalidadPk";
        var productoPkLbl = nombreWidget + index + "_productoPk";
        var medidaPkLbl = nombreWidget + index + "_medidaPk";
        var cortesiaLbl = nombreWidget + index + "_cortesia";
        var pedidoPkLbl = nombreWidget + index + "_pedidoPk";
        var precioVentaLbl = nombreWidget + index + "_precioVenta";

        // Set posicion
        $("#"+posicionLbl).val(posicion);

        // Set nombreProducto
        $("#"+nombreProductoLbl).val(nombreProducto);
        // Set cantidad
        $("#"+cantidadLbl).val(cantidad);
        
        calidad = tipoCalidadOption.data("valor");
        if(dimension === "0"){
            dimensionX = (dimensionX.length > 0) ? dimensionX : 1;
            dimensionY = (dimensionY.length > 0) ? dimensionY : 1;
        }else{
            dimensionY = dimensionOption.data("alto");
            dimensionX = dimensionOption.data("ancho");
        }
        
        $("#"+anchoLbl).val(dimensionX);
        $("#"+altoLbl).val(dimensionY);
        
        precioUnitario = (dimensionY * dimensionX * calidad).toFixed(2);
        precioVenta = 0;
        precioVenta = precioUnitario;
        $("#"+precioVentaLbl).val(precioVenta);
        /*
        if($("#modal-producto").data('action') === "agregar"){   
            
        }*/
        
        $("#"+productoPkLbl).val(productoSeleccionado);
        if(cortesia === "true" || cortesia === "1"){
            $("#"+cortesiaLbl).val(cortesia);
            $("#"+cortesiaLbl).prop( "checked", true );
        }else{
            cortesia = "false";
            $("#"+cortesiaLbl).prop( "checked", false );
        }
        
        $("#"+pedidoPkLbl).val(pedidoPk);
        $("#"+tipoCalidadPkLbl).val(tipoCalidad);
        $("#"+medidaPkLbl).val(dimension);
        
        editurl = $('#pPedidoProducto').data("editurl");
        editurl = editurl.replace("-",productoSeleccionado);
        editurl = editurl.replace("-",nombreProducto);
        editurl = editurl.replace("-",cantidad);
        editurl = editurl.replace("-",dimension);
        editurl = editurl.replace("-",dimensionX);
        editurl = editurl.replace("-",dimensionY);
        editurl = editurl.replace("-",cortesia);
        editurl = editurl.replace("-",tipoCalidad);
        editurl = editurl.replace("-",posicion);
        editurl = editurl.replace("-",pedidoPk);
        
        categoriaNombre = $("#li-"+productoSeleccionado).data("categoria");
        calidadNombre = tipoCalidadOption.data("nombre");
        
        //$('#btnGuardarProducto').button('loading');
        $.get(editurl, function (data) {
            // Actualizo la tabla
            if($("#modal-producto").data('action') === "agregar"){
                var numfilastabla;
                
                if(cortesia !== "1"){
                    numfilastabla = $("#table-producto-pedidos").data("count");
                    $("#table-producto-pedidos").data("count",numfilastabla+1);
                }else{
                    numfilastabla = $("#table-producto-pedidos-cortesia").data("count");
                    $("#table-producto-pedidos-cortesia").data("count",numfilastabla+1);
                }
                
                fila = '<tr id="tr-p'+index+'">';
                fila += '<td>'+numfilastabla+"</td>";
                fila += '<td id="td_'+posicionLbl+'">'+posicion+"</td>";
                fila += '<td id="td_categoria_'+index+'">'+categoriaNombre+"</td>";
                fila += '<td id="td_'+nombreProductoLbl+'">'+nombreProducto+"</td>";
                fila += '<td id="td_'+cantidadLbl+'">'+cantidad+"</td>";
                fila += '<td id="td_'+altoLbl+'">'+dimensionY+"</td>";
                fila += '<td id="td_'+anchoLbl+'">'+dimensionX+"</td>";
                fila += '<td id="td_'+tipoCalidadPkLbl+'">'+calidadNombre+"</td>";
                fila += '<td id="td_preciounitario_'+index+'">'+(precioVenta*1).toFixed(2)+"</td>";
                fila += '<td id="td_precioventa_'+index+'">'+(precioVenta*cantidad).toFixed(2)+"</td>";
                fila += '<td id="td_action_'+index+'"></td>';
                fila += "</tr>";
                
                if(cortesia !== "1"){
                    var row = window.dataTable4.fnAddData([
                        numfilastabla,
                        posicion,
                        categoriaNombre,
                        nombreProducto,
                        cantidad,
                        dimensionY,
                        dimensionX,
                        calidadNombre,
                        (precioVenta*1).toFixed(2),
                        (precioVenta*cantidad).toFixed(2),
                        '',
                    ]);
                    
                    var nTr = window.dataTable4.fnSettings().aoData[ row[0] ].nTr;
                    $(nTr).prop("id", "tr-p"+index);
                    $("#tr-p"+index+" td:eq(1)").prop("id","td_"+posicionLbl);
                    $("#tr-p"+index+" td:eq(2)").prop("id","td_categoria_"+index);
                    $("#tr-p"+index+" td:eq(3)").prop("id","td_"+nombreProductoLbl);
                    $("#tr-p"+index+" td:eq(4)").prop("id","td_"+cantidadLbl);
                    $("#tr-p"+index+" td:eq(5)").prop("id","td_"+altoLbl);
                    $("#tr-p"+index+" td:eq(6)").prop("id","td_"+anchoLbl);
                    $("#tr-p"+index+" td:eq(7)").prop("id","td_"+tipoCalidadPkLbl);
                    $("#tr-p"+index+" td:eq(8)").prop("id","td_preciounitario_"+index);
                    $("#tr-p"+index+" td:eq(9)").prop("id","td_precioventa_"+index);
                    $("#tr-p"+index+" td:eq(10)").prop("id","td_action_"+index);
                    
                    //$("#end-row").before(fila);
                    calculaTotalesTabla();var addId = $('#mimicTable').dataTable().fnAddData([
                    ]);
                }else{
                    var row = window.dataTable5.fnAddData([
                        numfilastabla,
                        posicion,
                        categoriaNombre,
                        nombreProducto,
                        cantidad,
                        dimensionY,
                        dimensionX,
                        calidadNombre,
                        (precioVenta*1).toFixed(2),
                        (precioVenta*cantidad).toFixed(2),
                        '',
                    ]);
                    
                    var nTr = window.dataTable5.fnSettings().aoData[ row[0] ].nTr;
                    $(nTr).prop("id", "tr-p"+index);
                    $("#tr-p"+index+" td:eq(1)").prop("id","td_"+posicionLbl);
                    $("#tr-p"+index+" td:eq(2)").prop("id","td_categoria_"+index);
                    $("#tr-p"+index+" td:eq(3)").prop("id","td_"+nombreProductoLbl);
                    $("#tr-p"+index+" td:eq(4)").prop("id","td_"+cantidadLbl);
                    $("#tr-p"+index+" td:eq(5)").prop("id","td_"+altoLbl);
                    $("#tr-p"+index+" td:eq(6)").prop("id","td_"+anchoLbl);
                    $("#tr-p"+index+" td:eq(7)").prop("id","td_"+tipoCalidadPkLbl);
                    $("#tr-p"+index+" td:eq(8)").prop("id","td_preciounitario_"+index);
                    $("#tr-p"+index+" td:eq(9)").prop("id","td_precioventa_"+index);
                    $("#tr-p"+index+" td:eq(10)").prop("id","td_action_"+index);
                    
                    //$("#end-row-cortesia").before(fila);
                    calculaTotalesTablaCortesia();
                }
                
                addTagFormEditLink(data.url,index);
                // add a delete link to the new form
                addTagFormDeleteLink($newFormLi,index,cortesia);
            }else{
                $("#td_categoria_"+index).html(categoriaNombre);
                $("#td_"+posicionLbl).html(posicion);
                $("#td_"+nombreProductoLbl).html(nombreProducto);
                $("#td_"+cantidadLbl).html(cantidad);
                $("#td_"+anchoLbl).html(dimensionX);
                $("#td_"+altoLbl).html(dimensionY);
                $("#td_"+tipoCalidadPkLbl).html(calidadNombre);
                $("#td_preciounitario_"+index).html((precioVenta*1).toFixed(2));
                $("#td_precioventa_"+index).html((precioVenta*cantidad).toFixed(2));
                calculaTotalesTabla();
                calculaTotalesTablaCortesia();
                addTagFormEditLink(data.url,index);
            }
            
            $('#modal-producto').modal('hide');
            //window.dataTable4.fnDestroy();
            
            window.dataTable4.fnDraw();
            window.dataTable5.fnDraw();
            //$('#btnGuardarProducto').button('reset');
        });
    }else{
        var mensaje = "Por favor seleccione: ";
        if(productoSeleccionado.length <= 0){
            mensaje += "\n- Un producto";
        }
        if(dimension.length <= 0){
            mensaje += "\n- Una dimensión";
        }
        if(tipoCalidad.length <= 0){
            mensaje += "\n- Un tipo de calidad";
        }
        alert(mensaje);
    }
}

/*
 * Función que calcula los totales de la tabla de pedidos de cortesia.
 * @returns {undefined}
 */
function calculaTotalesTablaCortesia(){
    var totalCantidad = 0;
    $('table#table-producto-pedidos-cortesia tbody td:nth-child(5)').each(function(index,element){
        totalCantidad += parseInt(removeCommas($(element).html()));
    });
    $('#tot-cantidad-cortesia').html(totalCantidad);
    var totalValor = 0;
    $('table#table-producto-pedidos-cortesia tbody td:nth-child(10)').each(function(index,element){
        totalValor += parseFloat(removeCommas($(element).html()));
    });
    $('#tot-precio-cortesia').html(totalValor.toFixed(2));
}

/*
 * Función que calcula los totales de la tabla de pedidos a facturar.
 * @returns {undefined}
 */
function calculaTotalesTabla(){
    var totalCantidad = 0;
    $('table#table-producto-pedidos tbody td:nth-child(5)').each(function(index,element){
        totalCantidad += parseInt(removeCommas($(element).html()));
    });
    $('#tot-cantidad').html(totalCantidad);
    var totalValor = 0;
    $('table#table-producto-pedidos tbody td:nth-child(10)').each(function(index,element){
        totalValor += parseFloat(removeCommas($(element).html()));
    });
    $('#tot-precio').html(totalValor.toFixed(2));
    
    $('#subtotal').html(totalValor.toFixed(2));
    calculaTotales();
}

/*
 * Función que calcula los totales cuando se aplican descuentos o se cambia algún 
 * factor externo.
 * @returns {undefined}
 */
function calculaTotales(){
    descuento = removeCommas($.trim($('#frontend_bundle_pedido_descuento').val()));
    descuento = (descuento.length > 0 && isNaN(descuento / 1) === false && $('#frontend_bundle_pedido_aplicaConcepto1').is(':checked'))? parseFloat(descuento) : 0;
    descuento = (descuento < 0 || descuento > 100)? 0 : descuento;
    subtotal = parseFloat(removeCommas($('#subtotal').html()));
    valor_descuento = subtotal * descuento / 100;
    subtotalDescuento = subtotal - valor_descuento;
    $('#subtotal-descuento').html(subtotalDescuento.toFixed(2));
    iva = subtotalDescuento * 12 / 100;
    $('#iva').html(iva.toFixed(2));
    valorTotal = subtotalDescuento + iva;
    $('#total').html(valorTotal.toFixed(2));
    calculaRenta();
    calculaIva();
}

/*
 * Función que añade el link de eliminación a un nuevo producto agregado al pedido.
 * @param {string} $tagFormLi <li> element que contiene la forma del producto nuevo
 * @param {string} id del producto agregado
 * @param {string} cortesia: bandera que indica si el producto es de cortesia o no
 * @returns {undefined}
 */
function addTagFormDeleteLink($tagFormLi,id,cortesia) {
    var $removeFormA = $('<a class="btn btn-danger" id="del-'+id+'" href="#">Eliminar</a>');
    $("#td_action_"+id).append($removeFormA);

    $removeFormA.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();
        if(confirmar()){
            // remove the li for the tag form
            $tagFormLi.remove();
            if(cortesia !== "1"){
                window.dataTable4.fnDeleteRow(window.dataTable4.fnGetPosition(document.getElementById("tr-p"+id)));
                calculaTotalesTabla();
            }else{
                window.dataTable5.fnDeleteRow(window.dataTable5.fnGetPosition(document.getElementById("tr-p"+id)));
                calculaTotalesTablaCortesia();
            }
        }
    });
}

/*
 * Función que añade el link de edicion a un nuevo producto agregado al pedido.
 * @param {string} url que contiene los datos a ser editados
 * @param {string} index del producto a editar
 * @returns {undefined}
 */
function addTagFormEditLink(url,index) {
    var $editFormA;
    
    if($("#modal-producto").data('action') === "agregar"){
        var $editFormA = $('<a class="btn btn-primary" id="edit-'+index+'" href="#">Editar</a>');
        $("#td_action_"+index).append($editFormA);
        $("#td_action_"+index).append("  ");
    }else{
        var $editFormA = $('#edit-'+index);
    }
    
    $editFormA.off('click').on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();
        // Call edit function
        editarProducto('Editar',url,index);
    });
}

/*
 * Función que se activa al chequearse el checkbox "Aplica 1".
 * @returns {undefined}
 */
function chekaAplica1(){
    if($("#frontend_bundle_pedido_aplicaConcepto1").is(":checked")){
        $("#row-descuento").show();
        $("#row-subtotal-descuento").show();
    }else{
        $("#row-descuento").hide();
        $("#row-subtotal-descuento").hide();
        $("#frontend_bundle_pedido_descuento").val(0);
    }
    calculaTotales();
}

/*
 * Función que se activa al chequearse el checkbox "Aplica 2".
 * @returns {undefined}
 */
function chekaAplica2(){
    if($("#frontend_bundle_pedido_aplicaConcepto2").is(":checked")){
        $("#row-cortesia").show();
    }else{
        $("#row-cortesia").hide();
    }
    calculaTotalesTablaCortesia();
}

/*
 * Función que se calcula el porcentaje de renta retenido.
 * @returns {undefined}
 */
function calculaRenta(){
    total = 0;
    if($('#frontend_bundle_pedido_aplicaConcepto1').is(':checked')){
        total = $.trim(removeCommas($('#subtotal-descuento').html()));
    }else{
        total = $.trim(removeCommas($('#subtotal').html()));
    }
    total = (total.length > 0 && isNaN(total / 1) === false)? parseFloat(total) : 0;
    renta = $.trim(removeCommas($('#frontend_bundle_pedido_retencionRenta').val()));
    renta = (renta.length > 0 && isNaN(renta / 1) === false)? parseFloat(renta) : 0;
    totalrenta = total * renta / 100;
    $("#retencion-renta").html(totalrenta.toFixed(2));
}

/*
 * Función que se calcula el porcentaje iva a pagar.
 * @returns {undefined}
 */
function calculaIva(){
    total = $.trim(removeCommas($('#iva').html()));
    total = (total.length > 0 && isNaN(total / 1) === false)? parseFloat(total) : 0;
    iva = $.trim(removeCommas($('#frontend_bundle_pedido_retencionIva').val()));
    iva = (iva.length > 0 && isNaN(iva / 1) === false)? parseFloat(iva) : 0;
    totaliva = total * iva / 100;
    $("#retencion-iva").html(totaliva.toFixed(2));
}

/*
 * Función que se activa al seleccionar una empresa diferente en la forma de pedido.
 * @returns {undefined}
 */
function empresaCambio(){
    empresaOpcion = $('#empresa :selected');
    $("#direccion_empresa").html(empresaOpcion.data("direccion"));
    $("#ruc_empresa").html(empresaOpcion.data("ruc"));
    $("#telf_empresa").html(empresaOpcion.data("telefono"));
    
    empresaId = parseInt(empresaOpcion.val());
    contactoId = parseInt($("#frontend_bundle_pedido_contactoPk").val());
    
    var seleccionado = false;
    $("#frontend_bundle_pedido_contactoPk option").each(function(){
        $(this).hide();
        if(parseInt($(this).data("empresa")) === empresaId){
            $(this).show();
           
            if(!seleccionado){
                $("#frontend_bundle_pedido_contactoPk").val($(this).val());
                $("#frontend_bundle_pedido_etapa").val($(this).data("etapa"));
                seleccionado = true;
            }
            
            if(contactoId === parseInt($(this).val())){
                $("#frontend_bundle_pedido_contactoPk").val(contactoId);
                $("#frontend_bundle_pedido_etapa").val($(this).data("etapa"));
            }
        }
    });
}

/*
 * Función que selecciona la empresa a la que corresponde el contacto del pedido.
 * @returns {undefined}
 */
function iniciaEmpresa(){
    empresaId = parseInt($("#frontend_bundle_pedido_contactoPk :selected").data("empresa"));
     $('#empresa').val(empresaId);    
}

/*
 * Función que es lanzada cuando se selecciona un delegado1 diferente en el tablero de pedidos.
 * @param {string} id del pedido
 * @returns {undefined}
 */
function cambiaDelegado1(id,url,valor_anterior){
    $idDelegado1 = $("#delegado1_"+id).val();
    loading = $('<img src="'+$("#loading-gif").val()+'" alt="cargando..." style="display: inline-block" />');
    $("#delegado1_"+id).after(loading);
    $("#delegado1_"+id).prop('disabled', 'disabled');
    $("#delegado2_"+id).prop('disabled', 'disabled');
    $("#delegado3_"+id).prop('disabled', 'disabled');
    $("#paso_"+id).prop('disabled', 'disabled');
    
    $.post(url,{ idPedido: id, idDelegado1:$idDelegado1 }, function (data) {
        $("#delegado1_"+id).prop('disabled', false);
        $("#delegado2_"+id).prop('disabled', false);
        $("#delegado3_"+id).prop('disabled', false);
        $("#paso_"+id).prop('disabled', false);
        loading.remove();
        if(!data.ok){
            $("#delegado1_"+id).val(valor_anterior);
        }
    });
}

/*
 * Función que es lanzada cuando se selecciona un delegado2 diferente en el tablero de pedidos.
 * @param {string} id del pedido
 * @returns {undefined}
 */
function cambiaDelegado2(id,url,valor_anterior){
    $idDelegado2 = $("#delegado2_"+id).val();
    loading = $('<img src="'+$("#loading-gif").val()+'" alt="cargando..." style="display: inline-block" />');
    $("#delegado2_"+id).after(loading);
    $("#delegado1_"+id).prop('disabled', 'disabled');
    $("#delegado2_"+id).prop('disabled', 'disabled');
    $("#delegado3_"+id).prop('disabled', 'disabled');
    $("#paso_"+id).prop('disabled', 'disabled');
    
    $.post(url,{ idPedido: id, idDelegado2:$idDelegado2 }, function (data) {
        $("#delegado1_"+id).prop('disabled', false);
        $("#delegado2_"+id).prop('disabled', false);
        $("#delegado3_"+id).prop('disabled', false);
        $("#paso_"+id).prop('disabled', false);
        loading.remove();
        if(!data.ok){
            $("#delegado2_"+id).val(valor_anterior);
        }
    });
}

/*
 * Función que es lanzada cuando se selecciona un delegado2 diferente en el tablero de pedidos.
 * @param {string} id del pedido
 * @returns {undefined}
 */
function cambiaDelegado3(id,url,valor_anterior){
    $idDelegado3 = $("#delegado3_"+id).val();
    loading = $('<img src="'+$("#loading-gif").val()+'" alt="cargando..." style="display: inline-block" />');
    $("#delegado3_"+id).after(loading);
    $("#delegado1_"+id).prop('disabled', 'disabled');
    $("#delegado2_"+id).prop('disabled', 'disabled');
    $("#delegado3_"+id).prop('disabled', 'disabled');
    $("#paso_"+id).prop('disabled', 'disabled');
    
    $.post(url,{ idPedido: id, idDelegado3:$idDelegado3 }, function (data) {
        $("#delegado1_"+id).prop('disabled', false);
        $("#delegado2_"+id).prop('disabled', false);
        $("#delegado3_"+id).prop('disabled', false);
        $("#paso_"+id).prop('disabled', false);
        loading.remove();
        if(!data.ok){
            $("#delegado3_"+id).val(valor_anterior);
        }
    });
}

/*
 * Función que es lanzada cuando se selecciona un paso diferente en el tablero de pedidos.
 * @param {string} id del pedido
 * @returns {undefined}
 */
function cambiaPaso(id,url,valor_anterior){
    $paso = $("#paso_"+id).val();
    loading = $('<img src="'+$("#loading-gif").val()+'" alt="cargando..." style="display: inline-block" />');
    $("#paso_"+id).after(loading);
    $("#delegado1_"+id).prop('disabled', 'disabled');
    $("#delegado2_"+id).prop('disabled', 'disabled');
    $("#delegado3_"+id).prop('disabled', 'disabled');
    $("#paso_"+id).prop('disabled', 'disabled');
    
    $.post(url,{ idPedido: id, idPaso:$paso }, function (data) {
        $("#delegado1_"+id).prop('disabled', false);
        $("#delegado2_"+id).prop('disabled', false);
        $("#delegado3_"+id).prop('disabled', false);
        $("#paso_"+id).prop('disabled', false);
        loading.remove();
        if(!data.ok){
            $("#paso_"+id).val(valor_anterior);
        }
        window.location.reload();
    });
}

/*
 * Función que hace el llamado AJAX a la url que permite generar el modal
 * para los reportes de pedidos.
 */
function muestraMenuReportePedidos(event,url){
    event.preventDefault();
    $('#modal-base').modal();
    $("#modal-base-titulo").html("Reporte por Pedido");
    $("#modal-base-body").html('<div style="text-align:center"><img src="'+$('#loading-base-gif').val()+'" /></div>');
    $("#submit-boton-modal").html("Generar");
    $.get(url, function (data) {
        $("#modal-base-body").html(data);
    });
}

/*
 * Función que hace el llamado AJAX a la url que permite generar el modal
 * para los reportes de pedidos.
 */
function muestraMenuReporteGeneral(event,url){
    event.preventDefault();
    $('#modal-base').modal();
    $("#modal-base-titulo").html("Reportes Generales");
    $("#modal-base-body").html('<div style="text-align:center"><img src="'+$('#loading-base-gif').val()+'" /></div>');
    $("#submit-boton-modal").html("Generar");
    $.get(url, function (data) {
        $("#modal-base-body").html(data);
    });
}

/*
 * Filtra los pedidos para la interfaz de reportes.
 */
function filtraPedidos(url){
    var empresareporte = $("#empresa-reporte").val();
    var areareporte = $("#area-reporte").val();
    var pasoreporte = $("#paso-reporte").val();
    var fechadesdereporte = $("#fechadesde-reporte").val();
    var fechahastareporte = $("#fechahasta-reporte").val();
    habilitaSelectsModalReportesPedidos(true);
    $("#loading-pedidos").html('<img src="'+$('#loading-small-base-gif').val()+'" />');
    
    $.post(url, {"empresa-reporte": empresareporte, "area-reporte": areareporte, "paso-reporte":pasoreporte, "fechadesde-reporte":fechadesdereporte, "fechahasta-reporte":fechahastareporte}, function (data) {
        pedidos = $("#codigo-reporte-select");
        pedidos.empty();
        $.each(data.pedidos,function(key,value){
           pedidos.append($("<option></option>").attr("value", value).text(value)); 
        });
        habilitaSelectsModalReportesPedidos(false);
        $("#loading-pedidos").html("");
    });
}

/*
 * Deshabilita o habilita los controles de la interfaz de reportes de pedidos.
 */
function habilitaSelectsModalReportesPedidos(valor){
    $("#empresa-reporte").prop('disabled', valor);
    $("#area-reporte").prop('disabled', valor);
    $("#paso-reporte").prop('disabled', valor);
    $("#fechadesde-reporte").prop('disabled', valor);
    $("#fechahasta-reporte").prop('disabled', valor);
    $("#codigo-reporte-select").prop('disabled', valor);
}

/*
 * Funcion que habilita o deshabilita el ingreso manual del codigo del pedido
 * del que queremos obtener los reportes.
 */
function modificarReporteCambio(){
    if($('#modificar-reporte').is(":checked")){
        $('#codigo-reporte').show();
        $('#codigo-reporte').prop("name","codigo-reporte");
        $('#codigo-reporte-select').hide();
        $('#codigo-reporte-select').prop("name","");
        habilitaSelectsModalReportesPedidos(true);
    }else{
        $('#codigo-reporte').hide();
        $('#codigo-reporte').prop("name","");
        $('#codigo-reporte-select').prop("name","codigo-reporte");
        $('#codigo-reporte-select').show();
        habilitaSelectsModalReportesPedidos(false);
    }
}

/*
 * Función que actualiza el paso de producción de un producto;
 */
function actualizaProduccionPedidoProducto(url,elemento,id){
    $valor = ($(elemento).is(':checked'))?1:0;
    loading = $('<img src="'+$("#loading-gif").val()+'" alt="cargando..." style="display: inline-block" />');
    $("#loading_"+id).after(loading);
    
    $.post(url,{ valor: $valor }, function (data) {
        loading.remove();
        if(!data.ok){
            window.location.reload();
        }
    });
}

// Quita las comas de un número
function removeCommas(aNum) {
    try
    {
        //remove any commas
        aNum=aNum.replace(/,/g,"");
        //remove any spaces
        aNum=aNum.replace(/\s/g,"");
    }
    catch(err)
    {
        console.log(err);
    }
    return aNum;
}

/* 
 * Funcion que filtra las áreas en los campos donde se puede elegir la empresa.
 */
function filtraAreas(){
    valorActual = $('#empresa').find(":selected").data("empresaid");
    $('#area').empty();
    
    $("#areahidden option").each(function(){
        empresaAreaOpcion = $(this).data("empresa");
        if(valorActual == "" || valorActual == null || empresaAreaOpcion == valorActual || empresaAreaOpcion == "-1"){
            areaValue = $(this).val();
            areaHtml = $(this).html();
            
            $opcion = '<option data-empresa="'+empresaAreaOpcion+'" value="'+areaValue+'">'+areaHtml+'</option>'
            $('#area').append($opcion);
        }
    });
}

/* 
 * Funcion que filtra las áreas en los campos donde se puede elegir la empresa
 * en la ventana de reportes por pedidos.
 */
function filtraAreasReporte(){
    valorActual = $('#empresa-reporte').find(":selected").data("empresaid");
    $('#area-reporte').empty();
    
    $("#area-reporte-hidden option").each(function(){
        empresaAreaOpcion = $(this).data("empresa");
        if(valorActual == "" || valorActual == null || empresaAreaOpcion == valorActual || empresaAreaOpcion == "-1"){
            areaValue = $(this).val();
            areaHtml = $(this).html();
            
            $opcion = '<option data-empresa="'+empresaAreaOpcion+'" value="'+areaValue+'">'+areaHtml+'</option>'
            $('#area-reporte').append($opcion);
        }
    });
}

/* 
 * Funcion que envia las notas de un pedido o del producto de un pedido.
 */
function enviaNotas(){
    valorActual = $('#empresa-reporte').find(":selected").data("empresaid");
    $('#area-reporte').empty();
    
    $("#area-reporte-hidden option").each(function(){
        empresaAreaOpcion = $(this).data("empresa");
        if(valorActual == "" || valorActual == null || empresaAreaOpcion == valorActual || empresaAreaOpcion == "-1"){
            areaValue = $(this).val();
            areaHtml = $(this).html();
            
            $opcion = '<option data-empresa="'+empresaAreaOpcion+'" value="'+areaValue+'">'+areaHtml+'</option>'
            $('#area-reporte').append($opcion);
        }
    });
}