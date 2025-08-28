$(document).ready(function () {

    if($('#activity-calls').length > 0) {
		$('#activity-calls').DataTable({
			"bFilter": false, 
				"bInfo": false,
					"ordering": true,
				"autoWidth": true,
				"language": {
					search: ' ',
					sLengthMenu: '_MENU_',
					searchPlaceholder: "Search",
					info: "_START_ - _END_ of _TOTAL_ items",
					"lengthMenu":     "Show _MENU_ entries",
					paginate: {
					next: '<i class="ti ti-chevron-right"></i> ',
					previous: '<i class="ti ti-chevron-left"></i> '
				},
					},
				initComplete: (settings, json)=>{
					$('.dataTables_paginate').appendTo('.datatable-paginate');
					$('.dataTables_length').appendTo('.datatable-length');
				},  
				"data":[
					{
						"id" : 2,
						"checkbox": "",
						"title" : "Had conversation with Fred regarding task",
						"due_date" : "29 Sep 2025, 04:12 pm",
						"owner" : "Guilory Berggren",
						"owner_image": "assets/img/profiles/avatar-06.jpg",
						"created_date" : "27 Sep 2025, 03:26 pm",
						"status" : "3",
						"action": ""
					},
					{
						"id" : 6,
						"checkbox": "",
						"title" : "Call John and discuss about project",
						"due_date" : "12 Nov 2025, 10:20 pm",
						"owner" : "Jami Carlile",
						"owner_image": "assets/img/profiles/avatar-13.jpg",
						"created_date" : "02 Nov 2025, 05:35 pm",
						"status" : "3",
						"action": ""
					},
					{
						"id" : 9,
						"checkbox": "",
						"title" : "Discussed budget proposal with Edwin",
						"due_date" : "08 Dec 2025, 04:35 pm",
						"owner" : "Theresa Nelson",
						"owner_image": "assets/img/profiles/avatar-17.jpg",
						"created_date" : "01 Dec 2025, 10:45 am",
						"status" : "3",
						"action": ""
					},
					{
						"id" : 11,
						"checkbox": "",
						"title" : "Discussed budget proposal with Edwin",
						"due_date" : "26 Dec 2025, 08:30 am",
						"owner" : "Smith Cooper",
						"owner_image": "assets/img/profiles/avatar-14.jpg",
						"created_date" : "18 Dec 2025, 05:00 pm",
						"status" : "3",
						"action": ""
					}
			
				],
			"columns": [
				{ "render": function ( data, type, row ){
					return '<div class="form-check form-check-md"><input class="form-check-input" type="checkbox"></div>';
				}},
				{ "data": "title" },
				{ "render": function ( data, type, row ){
					if(row['status'] == "0") { var class_name = "badge badge-soft-info border-0";var status_name ="Meeting";var icon_class_name = "user-share" } else if(row['status'] == "1") { var class_name = "badge badge-soft-warning border-0";var status_name ="Email";var icon_class_name = "mail" } else if(row['status'] == "2") { var class_name = "badge badge-soft-danger border-0";var status_name ="Task";var icon_class_name = "subtask" } else { var class_name = "badge badge-soft-success border-0";var status_name ="Calls";var icon_class_name = "phone" }
					return '<span class="badge activity-badge '+class_name+'" ><i class="ti ti-'+icon_class_name+' me-1"></i>'+status_name+'</span>';
				}},    
				{ "data": "due_date" },
				{ "render": function (data, type, row) {
						return '<div class="d-flex align-items-center mb-0"><a href="javascript:void(0);" class="avatar avatar-xss me-2"><img class="img-fluid rounded-circle" src="' + row['owner_image'] + '" alt="User Image"></a>' + row['owner'] + '</div>';
				}},
				{ "data": "created_date" },
				{ "render": function ( data, type, row ){
					return '<div class="dropdown table-action"><a href="#" class="action-icon btn btn-xs shadow btn-icon btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a><div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_activity"><i class="ti ti-trash"></i> Delete</a></div></div>';
				}},
			]
		});
	}

});