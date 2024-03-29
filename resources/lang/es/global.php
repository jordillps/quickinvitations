<?php

return [
	
	'user-management' => [
		'title' => 'Administración de usuarios',
		'fields' => [
		],
	],
	
	'permissions' => [
		'title' => 'Permisos',
		'fields' => [
			'title' => 'Permiso',
		],
	],
	
	'roles' => [
		'title' => 'Roles',
		'fields' => [
			'title' => 'Rol',
			'permission' => 'Permiso',
		],
	],
	
	'users' => [
		'title' => 'Usuarios',
		'fields' => [
			'name' => 'Nombre',
			'email' => 'Email',
			'password' => 'Password',
			'role' => 'Rol',
			'remember-token' => 'Remember token',
		],
	],
	
	'events' => [
		'title' => 'Eventos',
		'fields' => [
			'name' => 'Nombre',
			'event-date' => 'Fecha evento',
			'sent-at' => 'Enviado',
			'accepted-at' => 'Aceptado',
			'rejected-at' => 'Rechazado',
		],
	],
	
	'invitations' => [
		'title' => 'Invitaciones',
		'fields' => [
			'event' => 'Evento',
			'email' => 'Email',
			'sent-at' => 'Enviado',
			'accepted-at' => 'Aceptado',
			'rejected-at' => 'Rechazado',
		],
	],
	'app_create' => 'Crear',
	'app_save' => 'Guardar',
	'app_edit' => 'Editar',
	'app_view' => 'Ver',
	'app_update' => 'Actualizar',
	'app_list' => 'Listar',
	'app_no_entries_in_table' => 'Sin valores en la tabla',
	'app_custom_controller_index' => 'Índice del controlador personalizado (index).',
	'app_logout' => 'Salir',
	'app_add_new' => 'Agregar',
	'app_are_you_sure' => 'Estás seguro?',
	'app_back_to_list' => 'Regresar a la lista?',
	'app_dashboard' => 'Tablero de control',
	'app_delete' => 'Eliminar',
	'app_restore' => 'Restaurar',
	'app_permadel' => 'Borrar permanentemente',
	'app_all' => 'Todos',
	'app_trash' => 'Papelera',
	'app_delete_selected' => 'Eliminar seleccionado',
	'app_category' => 'Categoría',
	'app_categories' => 'Categorias',
	'app_title' => 'Título',
	'app_roles' => 'Roles',
	'app_role' => 'Rol',
	'app_user_management' => 'Administración de usuarios',
	'app_users' => 'Usuarios',
	'app_user' => 'Usuario',
	'app_name' => 'Nombre',
	'app_email' => 'Correo',
	'app_password' => 'Contraseña',
	'app_remember_token' => 'Recordar token',
	'app_permissions' => 'Permisos',
	'app_client' => 'Cliente',
	'app_current_password' => 'Contraseña actual',
	'app_new_password' => 'Contraseña nueva',
	'app_password_confirm' => 'Confirmación de contraseña nueva',
	'app_dashboard_text' => 'Ha iniciado sesión',
	'app_forgot_password' => 'Olvidó su contraseña?',
	'app_remember_me' => 'Recuerdame',
	'app_login' => 'Iniciar sesión',
	'app_copy' => 'Copiar',
	'app_reset_password' => 'Reiniciar contraseña',
	'app_email_greet' => 'Hola',
	'app_confirm_password' => 'Confirmar contraseña',
	'app_change_password' => 'Cambiar contraseña',
	'app_please_select' => 'Por favor seleccione',
	'app_questions' => 'Preguntas',
	'app_question' => 'Pregunta',
	'app_answer' => 'Respuesta',
	'app_project' => 'Proyecto',
	'app_expenses' => 'Gastos',
	'app_expense' => 'Gasto',
	'app_amount' => 'Cantidad',
	'app_address' => 'Dirección',
	'app_contacts' => 'Contactos',
	'app_first_name' => 'Nombre',
	'app_last_name' => 'Apellido',
	'app_phone' => 'Teléfono',
	'app_category_name' => 'Nombre de categoría',
	'app_products' => 'Productos',
	'app_product_name' => 'Nombre de producto',
	'app_price' => 'Precio',
	'app_tag' => 'Etiqueta',
	'app_photo1' => 'Foto 1',
	'app_photo2' => 'Foto 2',
	'app_photo3' => 'Foto 3',
	'app_calendar' => 'Calendario',
	'app_tasks' => 'Tareas',
	'app_status' => 'Estado',
	'global_title' => 'Event Invitations',
	//Permisions
	'user_management_access' => 'Acceso a mantenimiento de usuarios',
	'user_management_create' => 'Crear usuarios',
	'user_management_edit' => 'Editar usuarios',
	'user_management_view' => 'Lista de usuarios',
	'user_management_delete' => 'Borrar usuarios',
	'permission_access' => 'Permiso de acceso',
	'permission_create' => 'Permiso de crear',
	'permission_edit' => 'Permiso para editar',
	'permission_view' => 'Permiso para listar',
	'permission_delete' => 'Permiso para borrar',
	'role_access' => 'Acceso a roles',
	'role_create' => 'Crear roles',
	'role_edit' => 'Editar roles',
	'role_view' => 'Listar roles',
	'role_delete' => 'Borrar roles',
	'user_access' => 'Acceso usuario',
	'user_create' => 'Crear usuarios',
	'user_edit' => 'Editar usuarios',
	'user_view' => 'Listar usuarios',
	'user_delete' => 'Borrar usuarios',
	'event_access' => 'Acceso a eventos',
	'event_create' => 'Crear eventos',
	'event_edit' => 'Editar eventos',
	'event_view' => 'Listar eventos',
	'event_delete' => 'Borrar eventos',
	'invitation_access' => 'Acceso a invitaciones',
	'invitation_create' => 'Crear invitaciones',
	'invitation_edit' => 'Editar invitaciones',
	'invitation_view' => 'Listar invitaciones',
	'invitation_delete' => 'Borrar invitaciones',
];