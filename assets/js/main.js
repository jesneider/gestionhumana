$(function(){

	//boton check
	$('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });

    $(".datepicker").datepicker({
    	format : 'yyyy-mm-dd'
    });

    $("#table-institucion, #table-sedes, #table-empleados, #table-usuarios").DataTable({
    	language: {
            "lengthMenu"	: "Mostrar _MENU_" ,
            "zeroRecords"	: "No hay registros",
            "info"			: "Mostrando _PAGE_ de _PAGES_",
            "infoEmpty"		: "No hay registros ",
            "infoFiltered"	: "(filtrado de _MAX_ total registros)",
            "search" 		: "Buscar datos",
            "oPaginate"		: {
        		"sNext"		: "Siguiente",
        		"sPrevious"	: "Anterior"
            }
        }    
    });

    $("input[type='search']").addClass('form-control');
    $("select[name='table-institucion_length']").addClass('form-control');
    $("select[name='table-sedes_length']").addClass('form-control');
    $("select[name='table-empleados_length']").addClass('form-control');
    $("select[name='table-usuarios_length']").addClass('form-control');
    $("#table-institucion_length").addClass('pull-left');
    $("#table-sedes_length").addClass('pull-left');
    $("#table-empleados_length").addClass('pull-left');
    $("#table-usuarios_length").addClass('pull-left');

    var App = {

		borrarMensajeError : function(id, delay)
		{
			setTimeout(function()
			{
				$(id).fadeOut(100);
			}, delay);
		},

		calculaEdad : function(edad, date)
		{
			$(edad).on('click', function()
			{
				if($(date).val() == "")
					return false;
				else
				{
					var get_date = $(date).val().split("-");
					var con_date = new Date(get_date[0], get_date[1] - 1, get_date[2]);
					var cur_date = new Date();

					var get_birth_date = cur_date.getFullYear() - con_date.getFullYear();

					$(this).val(get_birth_date);
				}
			});
			
		}, 

		mostrarMensaje : function(title, msg, type, delay)
		{
			return new PNotify({ title : title, text : msg, type : type, delay : delay  });
		},

		validarFormularios : function(form, required)
		{
			var get_form = $(form).find(required), status;

			for(i = 0; i < get_form.length; i++)
			{
				var inputs = $(get_form[i]);

				if(inputs.val() == '')
				{
					inputs.focus().val('');
					this.mostrarMensaje('Error', 'El campo es requerido', 'error', 2500);
					status = false;
					break;
				}
				else if($.trim(inputs.val()) == '')
				{
					inputs.focus().val('');
					this.mostrarMensaje('Error', 'El campo es requerido', 'error', 2500);
					status = false;
					break;
				}
				else
					status = true;
			}

			return status;
		},

		submitFormularios : function(form, required, file, btn, modal)
		{
			$(btn).click(function(){
				App.procesaFormulario(form, required, file, btn, modal);
			})
		},

		procesaFormulario : function(form, required, file, btn, modal)
		{
			if(!this.validarFormularios(form, required))
				return false;
			else
			{
				var bussy = false;

				if(bussy)
				{
					bussy = true;
					return;
				}
				else
				{
					var rol = ($("#rol_user").text() == "1") ? 'admin' : 'usuario';

					$.ajax({
						url 	: url + 'app/'+ rol +'/procesa/' + file + ".php",
						type	: 'POST',
						cache	: true,
						data	: $(form).serialize(),
						beforeSend : function()
						{
							$(btn).attr('disabled', true);
						},
						success	: function(response)
						{
							App.evaluaRespuesta(response);
							App.clearform(form);

							$(modal).modal('hide');

						},
						complete : function()
						{
							$(btn).attr('disabled', false);
						}
					});
				}
			}
		},

		evaluaRespuesta : function(response)
		{
			var serverResponse = $.parseJSON(response);

			if(serverResponse.status)
			{
				swal({ title : "Bien!", text : serverResponse.msg, icon : "success" }).then(function(){location.reload()});
			}
			else if(serverResponse.status == '0')
				swal('Ha ocurrido un error', serverResponse.msg, 'error');
			else
				swal('Ha ocurrido un error', 'Algo ha ido mal', 'error');
		},

		clearform : function(form)
		{
			return $(form).trigger('reset');
		},

		confirmarUsuario : function(form, required, file, btn)
		{
			$(btn).click(function(){

				var pone = $("#passone").val(), ptwo = $("#passtwo").val();

				if(pone != ptwo)
					App.mostrarMensaje('Error', 'Las contraseñas no coinciden', 'error', 2500);
				else			
					App.procesaFormulario(form, required, file, btn);
			});
		},

		editRecords : function(table, css, file, modal)
		{
			$(table).on('click', css, function(){

				var data_record = $(this).parents('tr');
				var id = $(data_record).data('id');

				App.processRequest(id, file, css, modal);
			});
		},

		processRequest : function(data, file, btn, modal)
		{
			var rol = ($("#rol_user").text() == "1") ? 'admin' : 'usuario';

			$.ajax({
				url 	: url + 'app/'+ rol +'/data/' + file + '.php',
				type	: 'GET',
				cache	: true,
				data 	: { record : data },
				beforeSend 	: function()
				{
					$(btn).attr('disabled', true);
				},
				success		: function(response)
				{
					var server = $.parseJSON(response);					

					if(!server.status)
						App.mostrarMensaje('Error', 'no se encontraron datos para este registro', 'error', 2500);
					else
					{
						var data = server.data;
						App.asignaData(data[0], modal);
					}

				},
				complete	: function()
				{
					$(btn).attr('disabled', false);
				}
			});
		},

		asignaData : function(data, modal)
		{
			if(data.length <= 0)
				this.mostrarMensaje('Error', 'no hay datos disponibles', 'error');
			else
			{
				$(modal).modal('show');

				var inputs = $(modal).find('.required');

				for(var key in data)
				{
					if (data.hasOwnProperty(key))
					{
						$("select[name='"+ key +"']").empty().append('<option value="'+key+'">'+ data[key] +'</option>');
        				$("input[name='"+ key +"']").val(data[key]);        				
					}
				}
			}
		},

		procesoEliminar : function(table, css, file)
		{
			$(table).on('click', css, function(){

				var data_record = $(this).parents('tr');
				var id = $(data_record).data('id');

				swal({
					title: "Estas seguro ?",
					text: "Deseas eliminar este registro",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				}).then((willDelete) => {
					if (willDelete)
						App.eliminarRegistro(id, file, css)
					else 						
						swal("Has cancelado el proceso");
				});

			});
		},

		eliminarRegistro : function(id, file, btn)
		{
			var rol = ($("#rol_user").text() == "1") ? 'admin' : 'usuario';

			$.ajax({
				url 	: url + 'app/'+ rol +'/data/' + file + '.php',
				type	: 'POST',
				cache	: true,
				data 	: { record : id },
				beforeSend 	: function()
				{
					$(btn).attr('disabled', true);
				},
				success		: function(response)
				{
					var server = $.parseJSON(response);		

					if(!server.status)
						App.mostrarMensaje('Error', 'no se encontraron datos para este registro', 'error', 2500);
					else
						swal("Bien! El Registro ha sido eliminado satisfactoriamente!", { icon: "success", }).then(function(){ location.reload() });

				},
				complete	: function()
				{
					$(btn).attr('disabled', false);
				}
			});
		}
	};

	App.borrarMensajeError('#msg-error', 3000);

    App.calculaEdad("#edad_empleado", "#fecha_nacimiento");
    App.calculaEdad("#edad_empleado_edit", "#fecha_nacimiento_edit");

    //creacion
    App.submitFormularios("#frm-crear-institucion", ".required", "crea_institucion", "#btn-frm-registra-inst");    
    App.submitFormularios("#frm-crear-sede", ".required", "crea_sede", "#btn-crea-sede");    
    App.submitFormularios("#frm-crear-empleados", ".required", "crea_empleado", "#btn-crea-empleados");
    //App.submitFormularios("#frm-crear-empleados", ".required", "crea_empleado", "#btn-crea-empleados");

	App.confirmarUsuario("#frm-crear-usuario", ".required", "crea_usuario", "#btn-crea-usuario");

	//edicion + modal
	App.editRecords("#table-institucion", "button.edit-data-institucion", "get_instituciones", "#modal-edit-intitucion");	
	App.editRecords("#table-sedes", "button.edit-data-sedes", "get_sedes", "#modal-edit-sedes");
    App.editRecords("#table-empleados", "button.edit-data-empleados", "get_empleados", "#modal-edit-empleados");
    App.editRecords("#table-usuarios", "button.edit-data-usuarios", "get_usuarios", "#modal-edit-usuarios");

	//accion de edicion, falta por agregar la accion
	App.submitFormularios("#frm-edita-institucion", ".required", "edit_institucion", "#btn-edita-institucion", "#modal-edit-intitucion");
	App.submitFormularios("#frm-edita-sedes", ".required", "edit_sedes", "#btn-edita-sedes", "#modal-edit-sedes");
    App.submitFormularios("#frm-edita-empleados", ".required", "edit_empleados", "#btn-edita-empleados", "#modal-edit-empleados");
    App.submitFormularios("#frm-edita-usuarios", ".requires", "edit_usuarios", "#btn-edita-usuarios", "#modal-edit-usuarios");

    //Eliminar
    App.procesoEliminar("#table-institucion", "button.delete-institucion", 'del_institucion');
    App.procesoEliminar("#table-sedes", "button.delete-sedes", 'del_sedes');
    App.procesoEliminar("#table-empleados", "button.delete-empleados", 'del_empleados');
    App.procesoEliminar("#table-usuarios", "button.delete-usuarios", 'del_usuarios');
});