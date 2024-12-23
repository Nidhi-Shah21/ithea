'use strict';
// Class definition

var KTDatatableDataLocalDemo = function() {
	// Private functions
    function getData() {
        var result ;
        $.ajax({
            url:"emaildata.php",
            async: false,
            success:function(data) {
                result = data;
            }
        });
        return result;
    }
	// demo initializer
	var demo = function() {
        var dataJSONArray =JSON.parse(getData());
		var datatable = $('.kt-datatable').KTDatatable({
			// datasource definition
			data: {
				type: 'local',
				source: dataJSONArray,
				pageSize: 10,
			},

			// layout definition
			layout: {
				scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
				// height: 450, // datatable's body's fixed height
				footer: false, // display/hide footer
			},

			// column sorting
			sortable: true,

			pagination: true,

			search: {
				input: $('#generalSearch'),
			},

			// columns definition
			columns: [
				{
					field: 'id',
					title: '#',
					width: 25,
					textAlign: 'center',
				},{
                    field: 'Actions',
                    title: 'Actions',
                    sortable: false,
                    width: 100,
                    template: function(row){
                        return '<a href="resend.php?id='+row.id+'" target="_blank" class="btn btn-sm btn-clear btn-label-info">Resend Mail</a>';
                    },
                }, {
                    field: 'name',
                    title: 'Name',
                }, {
                    field: 'email',
                    title: 'Email',
                }, {
                    field: 'phone',
                    title: 'Phone',
                }, {
                    field: 'link1',
                    title: 'ELIGIBILITY Form',
                }, {
                    field: 'link2',
                    title: 'PRE-TRAINING Form',
                },{
                    field: 'link3',
                    title: 'PRE-TRAINING TRADE FORM',
                }, {
                    field: 'link_expiry',
                    title: 'Expiry',
                }],
		});

		$('#kt_form_status').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'service');
		});

		$('#kt_form_type').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Type');
		});

		$('#kt_form_status,#kt_form_type').selectpicker();

	};

	return {
		// Public functions
		init: function() {
			// init dmeo
			demo();
		},
	};
}();

jQuery(document).ready(function() {
	KTDatatableDataLocalDemo.init();
});
