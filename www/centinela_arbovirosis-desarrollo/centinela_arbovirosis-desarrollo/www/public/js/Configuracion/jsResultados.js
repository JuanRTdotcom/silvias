///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////// VARIABLES ///////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////// FUNCIONES  //////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////// OPCIONES  ///////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

var params_tbl_resultados = {
	responsive: true,
	pageLength: 10,
	lengthMenu: [
		[5, 10, 20, -1],
		[5, 10, 20, 'Todos']
	],
	lengthChange: false,
	info: false,
	// data: null,
	ordering: false,
	dom: 'lrtip',
	// search:true
	language: LenguajeParametros,
	columns: [
		{	
			data: 'resultado',
			createdCell: function (td, cellData, rowData, row, col) {
				// $(td).css("text-align", "center");
			},			
		},
		{	width:'200',
			data: 'cant_muestras_lab',
			createdCell: function (td, cellData, rowData, row, col) {
				$(td).css("text-align", "center");
			},			
		},
		{	
			data: null,
			createdCell: function (td, cellData, rowData, row, col) {
                $(td).css("text-align", "center");
                // $(td).css("width", "30%");
			},
			render: function (data, type, full, meta) {
				let miEstado = ''
				if(data.estado == '1'){
					miEstado = `
                    <span class="badge bg-label-success">Activo</span>
                    `						
					}else{
					miEstado = `
                    <span class="badge bg-label-danger">Inactivo</span>
                    `					
				}
				return `${miEstado}`
			}
		},		
	],
	
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////// APIS - llamdas al servidor ///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



const listarResultados = (datas) => {
	return new Promise((resolve, reject) => {

		fetch('Resultados/listarResultados', {
				method: 'POST',
				body: datas
			})
			.then(respuesta => respuesta.json())
			.then(datos => {
				resolve(datos);
			})
			.catch(msg => {
				reject(msg)
			})
	})
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////// EVENTOS //////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////// INICIALIZACIONES ///////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function () {
	// 	// ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? 
	// 	// VALOR QUE SE EJECUTA AL INICIAR - DEFECTO
	// 	// ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
	// 	//     ???
	// 	//     ??????  Automatical started click
	// 	/*     ???  */
	
	// 	//     ???
	// 	//     ??????  Tabla Citas
	// 	/*        */
		$('#tbl_resultados').DataTable(params_tbl_resultados);




	// 	// FUNCIONES A EJECUTAR COMO INICIALIZACIONES Y EN SIMULTANEO

		Promise.all([
				//     ???
				//     ?????? Listar las citas creadas
				/*     ???   */	
				listarResultados(),
				//     ???
				//     ?????? Fecha actual con hora 7am
				/*         */
				// iniciarFechaHora()
			])
			.then(data => {

				if (!revisionDatos(data[0])) {
					return
				}
				let misResultados = data[0].data
				console.log(misResultados)
				limpiarTabla('tbl_resultados')
				agregarDataTabla('tbl_resultados',misResultados)


			})
			.catch(error => {
				Mensaje2(0,'Error de sistema','Ok','Hubo un error en el sistema')
			});

})


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////// UTILITIES //////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
