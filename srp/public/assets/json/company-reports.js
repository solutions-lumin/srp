$(document).ready(function () {

    if($('#company_reports').length > 0) {
		$('#company_reports').DataTable({
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
						"id" : 1,
						"si_no" : "",
						"select" : "",
						"company_name" : "NovaWave LLC",
						"company_image" : "assets/img/company/company-01.svg",
						"email" : "robertson@example.com",
						"tag" : "0",
						"owner" : "Hendry Milner",
						"owner_image": "assets/img/profiles/avatar-06.jpg",
						"status" : "0",
					},
					{
						"id" : 2,
						"si_no" : "",
						"select" : "",
						"company_name" : "BlueSky Industries",
						"company_image" : "assets/img/company/company-02.svg",
						"phone" : "+1 989757485",
						"email" : "sharon@example.com",
						"location" : "USA",
						"tag" : "0",
						"rating" : "5.0",
						"owner" : "Guilory Berggren",
						"owner_image": "assets/img/profiles/avatar-05.jpg",
						"status" : "1",
						"Action" : "",
						"source": "Referrals",
						"won_deals": "4 Deals, $120000",
						"lost_deals": "3 Deals, $90000",
						"created_date": "29 Sep 2025, 04:15 pm"
					},
					{
						"id" : 3,
						"si_no" : "",
						"select" : "",
						"company_name" : "SilverHawk",
						"company_image" : "assets/img/company/company-03.svg",
						"phone" : "+1 546555455",
						"email" : "vaughan12@example.com",
						"location" : "Canada",
						"tag" : "0",
						"rating" : "3.5",
						"owner" : "Jami Carlile",
						"owner_image": "assets/img/profiles/avatar-04.jpg",
						"status" : "0",
						"Action" : "",
						"source": "Campaigns",
						"won_deals": "3 Deals, $110000",
						"lost_deals": "2 Deals, $70000",
						"created_date": "04 Oct 2025, 10:18 am"
					},
					{
						"id" : 4,
						"si_no" : "",
						"select" : "",
						"company_name" : "SummitPeak",
						"company_image" : "assets/img/company/company-04.svg",
						"phone" : "+1 454478787",
						"email" : "jessica13@example.com",
						"location" : "India",
						"tag" : "0",
						"rating" : "4.5",
						"owner" : "Theresa Nelson",
						"owner_image": "assets/img/profiles/avatar-08.jpg",
						"status" : "0",
						"Action" : "",
						"source": "Google",
						"won_deals": "6 Deals, $200000",
						"lost_deals": "3 Deals, $100000",
						"created_date": "17 Oct 2025, 03:31 pm"
					},
					{
						"id" : 5,
						"si_no" : "",
						"select" : "",
						"company_name" : "RiverStone Ventur",
						"company_image" : "assets/img/company/company-05.svg",
						"phone" : "+1 124547845",
						"email" : "caroltho3@example.com",
						"location" : "China",
						"tag" : "0",
						"rating" : "4.7",
						"owner" : "Smith Cooper",
						"owner_image": "assets/img/profiles/avatar-02.jpg",
						"status" : "0",
						"Action" : "",
						"source": "Paid Social",
						"won_deals": "3 Deals, $80000",
						"lost_deals": "1 Deal, $40000",
						"created_date": "24 Oct 2025, 09:14 pm"
					},
					{
						"id" : 6,
						"si_no" : "",
						"select" : "",
						"company_name" : "Bright Bridge Grp",
						"company_image" : "assets/img/company/company-06.svg",
						"phone" : "+1 478845447",
						"email" : "dawnmercha@example.com",
						"location" : "Martin Lewis",
						"tag" : "0",
						"rating" : "5.0",
						"owner" : "Martin Lewis",
						"owner_image": "assets/img/profiles/avatar-01.jpg",
						"status" : "0",
						"Action" : "",
						"source": "Referrals",
						"won_deals": "5 Deals, $95000",
						"lost_deals": "2 Deals, $60000",
						"created_date": "08 Nov 2025, 09:56 am"
					},
					{
						"id" : 7,
						"si_no" : "",
						"select" : "",
						"company_name" : "CoastalStar Co.",
						"company_image" : "assets/img/company/company-07.svg",
						"phone" : "+1 215544845",
						"email" : "rachel@example.com",
						"location" : "Indonesia",
						"tag" : "0",
						"rating" : "3.1",
						"owner" : "Newell Egan",
						"owner_image": "assets/img/profiles/avatar-17.jpg",
						"status" : "0",
						"Action" : "",
						"source": "Campaigns",
						"won_deals": "4 Deals, $100000",
						"lost_deals": "1 Deal, $50000",
						"created_date": "14 Nov 2025, 04:19 pm"
					},
					{
						"id" : 8,
						"si_no" : "",
						"select" : "",
						"company_name" : "HarborView",
						"company_image" : "assets/img/company/company-08.svg",
						"phone" : "+1 121145471",
						"email" : "jonelle@example.com",
						"location" : "Cuba",
						"tag" : "2",
						"rating" : "5.0",
						"owner" : "Janet Carlson",
						"owner_image": "assets/img/profiles/avatar-16.jpg",
						"status" : "0",
					},
					{
						"id" : 9,
						"si_no" : "",
						"select" : "",
						"company_name" : "Golden Gate Ltd",
						"company_image" : "assets/img/company/company-09.svg",
						"email" : "jonathan@example.com",
						"tag" : "2",
						"owner" : "Craig Brown",
						"owner_image": "assets/img/profiles/avatar-15.jpg",
						"status" : "0",
					},
					{
						"id" : 10,
						"si_no" : "",
						"select" : "",
						"company_name" : "Redwood Inc",
						"company_image" : "assets/img/company/company-10.svg",
						"email" : "brook@example.com",
						"tag" : "2",
						"owner" : "Daniel Byrne",
						"owner_image": "assets/img/profiles/avatar-14.jpg",
						"status" : "0",
					},
				],
			"columns": [
				{ "render": function (data, type, row) {
					return '<div class="form-check form-check-md"><input class="form-check-input" type="checkbox"></div>';
				}},
				{ "render": function ( data, type, row ){
					return '<div class="set-star rating-select"><i class="ti ti-star-filled fs-16"></i></div>';
				}},
				{ "render": function ( data, type, row ){
					return '<h6 class="d-flex align-items-center fs-14 fw-medium mb-0"><a href="company-details.html" class="avatar rounded-circle border me-2"><img class="w-auto h-auto" src="'+row['company_image']+'" alt="User Image"></a><a href="company-details.html">'+row['company_name']+'</a></h6>';
				}},
				{ "data": "email" },
				{
					"render": function (data, type, row) {
						var class_name, status_name;
						if (row['tag'] == "0") {
							class_name = "badge-soft-success";
							status_name = "Collab";
						} else if (row['tag'] == "1") {
							class_name = "badge-soft-warning";
							status_name = "VIP";
						} else if (row['tag'] == "3") {
							class_name = "badge-soft-info";
							status_name = "Premium";
						} else {
							class_name = "badge-soft-primary";
							status_name = "Promotion";
						}
						
						return '<span class="badge badge-tag ' + class_name + '" >' + status_name + '</span>';
					}
				},
				{ "render": function ( data, type, row ){
						return '<h6 class="d-flex align-items-center fs-14 fw-medium mb-0"><a href="#" class="avatar avatar-sm avatar-rounded me-2"><img src="'+row['owner_image']+'" alt="User Image"></a><a href="#">'+row['owner']+'</a></h6>';
				}},
				{
					"render": function (data, type, row) {
						return '<ul class="social-links d-flex align-items-center"><li><a href="#"><i class="ti ti-mail"></i></a></li><li><a href="#"><i class="ti ti-phone-check"></i></a></li><li><a href="#"><i class="ti ti-message-circle-share"></i></a></li></li><li><a href="#"><i class="ti ti-brand-facebook "></i></a></li></ul>';
					}
				},
				{
					"render": function (data, type, row) {
							if(row['status'] == "0") { var class_name = "bg-success";var status_name ="Active" } else { var class_name = "bg-danger";var status_name ="Inactive"}
				return '<span class="badge badge-pill badge-status '+class_name+'" >'+status_name+'</span>';
					}
				}
			]
		});
	}

});