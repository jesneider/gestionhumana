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

    $("#table-institucion, #table-sedes").DataTable({
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
    $("#table-institucion_length").addClass('pull-left');
    $("#table-sedes_length").addClass('pull-left');

    var App = {

		borrarMensajeError : function(id, delay)
		{
			setTimeout(function()
			{
				$(id).fadeOut(100);
			}, delay);
		},

		calculaEdad : function()
		{
			$("#edad_empleado").on('click', function()
			{
				if($("#fecha_nacimiento").val() == "")
					return false;
				else
				{
					var get_date = $("#fecha_nacimiento").val().split("-");
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

		submitFormularios : function(form, required, file, btn)
		{
			$(btn).click(function(){
				App.procesaFormulario(form, required, file, btn);
			})
		},

		procesaFormulario : function(form, required, file, btn)
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
				swal('Registro Exitoso', 'Todo ha salido bien', 'success');
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
        				$("input[name='"+ key +"']").val(data[key]);
				}
			}
		}
	};

	App.borrarMensajeError('#msg-error', 3000);

    App.calculaEdad();

    //creacion
    App.submitFormularios("#frm-crear-institucion", ".required", "crea_institucion", "#btn-frm-registra-inst");    
    App.submitFormularios("#frm-crear-empleados", ".required", "crea_empleado", "#btn-crea-empleado");
    App.submitFormularios("#frm-crear-sede", ".required", "crea_sede", "#btn-crea-sede");    

	App.confirmarUsuario("#frm-crear-usuario", ".required", "crea_usuario", "#btn-crea-usuario");

	//edicion + modal
	App.editRecords("#table-institucion", "button.edit-data-institucion", "get_instituciones", "#modal-edit-intitucion");	
	App.editRecords("#table-sedes", "button.edit-data-sedes", "get_sedes", "#modal-edit-sedes");


	//accion de edicion, falta por agregar la accion
	App.submitFormularios("#frm-edita-institucion", ".required", "edita_institucion", "#btn-edita-institucion");
	App.submitFormularios("#frm-edita-sedes", ".requires", "edita_sedes", "#btn-edita-sedes");


});