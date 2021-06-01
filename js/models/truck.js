var app = app || {};

app.Truck = Backbone.Model.extend({
	initialize: function() {},
	defaults: {
		status: '',
		permit: '',
		block: '',
		received: '',
		facilitytype: '',
		locationdescription: '',
		cnn: '',
		address: '',
		applicant: '',
		lot: '',
		fooditems: '',
		objectid: '',
		dayshours: ''
	}
});
