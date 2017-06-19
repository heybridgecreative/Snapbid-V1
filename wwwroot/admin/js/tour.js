       $(document).ready(function(){
          // Define the tour!
    var tour = {
      id: "hello-hopscotch",
      steps: [
        {
          title: "Welcome to the Snapbid Administration",
          content: "Thank you for taking the time to view the tutorial. Click next to begin!",
          target: document.querySelector(".page-header"),
          placement: "bottom"
        },
        {
          title: "Hotels",
          content: "Here is where you can see how many hotels you have added to the website. Clicking View Details will take you to the Hotel Manager",
          target: document.querySelector(".panel-primary"),
          placement: "bottom"
        },
        {
          title: "Rooms",
          content: "Here is where you can see how many rooms you have added to the website. Clicking View Details will take you to the Rooms Manager",
          target: document.querySelector(".panel-green"),
          placement: "bottom"
        },
        {
          title: "Bookings",
          content: "Here is where you can see how many bookings you have had through the website. Clicking View Details will take you to the Bookings Manager",
          target: document.querySelector(".panel-yellow"),
          placement: "bottom"
        },
        {
          title: "Recent Bookings",
          content: "You will be supplied with a quick view of your most recent bookings.",
          target: document.querySelector(".recentBookings"),
          placement: "bottom"
        },
        {
          title: "Brief Overview",
          content: "This section allows you to have a brief overview of what information you have supplied on this acccount.",
          target: document.querySelector(".accountDetails"),
          placement: "bottom",
          onNext: function() {
			$('.hotels ul').toggleClass("in");
			$('.rooms ul').toggleClass("in");
			$('.bookings ul').toggleClass("in");
			$('.specials ul').toggleClass("in");
		  }
        },
        {
          title: "Navigation",
          content: "The side bar of the administration section contains the links to all the sections of the administration.<br /><br />The <strong>Dashboard</strong> contains the brief overview and is the first page you will see when you login. <br /><br />The <strong>Hotels</strong> section contains a manager for the current hotels added. <br /><br />The <strong>Room</strong>section contains the links for the management of the rooms, adding more rooms, availability and booking price, and then most importantly, the section to set the reserve price for the room.<br /><br /><strong>Special Offers</strong> allows you to configure any special offers that you have at cetain time of the year or are willing to offer your customers when they are booking a room. <br /><br />The <strong>Booking</strong> manager allows you to manage the bookings and view customer details of who has booked a room.",
          target: document.querySelector(".dashboard"),
          placement: "right"
        },
        {
          title: "Logout",
          content: "This button will log you out of the SnapBid Administration.",
          target: document.querySelector(".logout"),
          placement: "right",
          onNext: function() {
			$('.hotels ul').toggleClass("in");
		  }
        },
        {
          title: "Hotels",
          content: "Clicking the Hotels button displays the list of options. Click next to go to the Hotels part of this tutorial.",
          target: document.querySelector(".hotels"),
          placement: "right",
          multipage: true,
          onNext: function() {
          	window.location = "hotels.php"	
		  }
        },
        {
          title: "Your Hotels",
          content: "You will see some hotels here. You can use the buttons below to Delete, Edit and Manage the rooms of each Hotel",
          target: document.querySelector(".ad-hotels"),
          placement: "right"
        },
        {
          title: "Add a Hotel",
          content: "You can click here to add rooms, where you will be supplied with a simple and self explained form to provide the hotel information.",
          target: document.querySelector(".addhotels"),
          placement: "bottom",
          multipage: true,
          onNext: function() {
          	window.location = "rooms.php",
			$('.rooms ul').toggleClass("in");
		  }
		},
        {
          title: "Manage the Rooms",
          content: "Each hotel room is displayed in a list ready for your management. You can add Availability to each room, Manage the prices on certain days and add a SnapBid reserve. <br /><br />Click next to go to the Room Manager for further instructions.",
          target: document.querySelector(".rooms"),
          placement: "right"
        },
        {
          title: "Manage the Rooms",
          content: "Each hotel room is displayed in a list ready for your management. This gives you a generic overview of each of the rooms that have been added to the website.",
          target: document.querySelector(".table-responsive"),
          placement: "left",
          yOffset: "center",
		  xOffset: "50px",
          arrowOffset: "center"
        },
        {
          title: "Set a price",
          content: "Clicking this button will allow you to see the prices set in a calendar display.",
          target: document.querySelector(".table-roomPrices"),
          placement: "left"
        },
        {
          title: "Set a Reserve and Enable the Bidding process",
          content: "Setting a reserve will allow customers to bid on your hotel's rooms. We recommend using this feature to increase your occupancy rates.",
          target: document.querySelector(".table-roomBid"),
          placement: "left"
        },
        {
          title: "Availability Manager",
          content: "You can also set the availability of each room, so that you can limit the amount of rooms sold for each night. Click next and we can take a look",
          target: document.querySelector(".availability"),
          placement: "right",
          multipage: true,
          onNext: function() {
          	window.location = "availability.php"
		  }
        },
        {
          title: "Choose your room",
          content: "Here you can choose a room that you would like to manage the availability for. Click next to continue the tutorial to the next page.",
          target: document.querySelector(".table-responsive"),
          placement: "left",
          yOffset: "center",
		  xOffset: "50px",
          arrowOffset: "center"
        },
        {
          title: "Click the button to continue",
          content: "",
          target: document.querySelector(".roomAvailability"),
          placement: "left",
          multipage: true,
          onNext: function() {
          	window.location = "addavailability.php?room_id=38"
		  }
        },
        {
          title: "Calendar",
          content: "Here is an overview layout of the month and the availabilities that have been added to the system.",
          target: document.querySelector("#calendar"),
          placement: "top"
        },
        {
          title: "Day",
          content: "You can do a number of things using this calendar. You can either:<br /><br />Select a <strong>Single</strong> day with a single click.<br /><br />Select a <strong>block of days</strong> with a click and drag of the mouse.<br /><br />This will insert the dates over on the right hand form ready for submission to the database. <br /><br />You can also click onto a value already within the database if you are required to update a value.<br /><br /> Take it for a spin!",
          target: document.querySelector("#calendar"),
          placement: "right"
        },
        {
          title: "Once you've chosen your days...",
          content: "You can now see the values within the form below, and they are ready to be submitted. Pressing Submit will allow you to add the values to the calendar.",
          target: document.querySelector(".form-group"),
          placement: "top"
        },
        {
          title: "Ready to add something?",
          content: "Click the submit button...Don't worry I'll be here when you get back!",
          target: document.querySelector(".btn"),
          placement: "bottom",
          onNext: function() {
			$('.rooms ul').toggleClass("in");
		  }
        },
        {
          title: "The same process is applied to inserting a Reserve and a Room Price.",
          content: "Click next to continue your journey.",
          target: document.querySelector(".roomPrice"),
          placement: "right",
          multipage: true,
          onNext: function() {
          	window.location = "priceRoom.php"
		  }
        },
        {
          title: "Choose your room",
          content: "When you've chosen a room, clicking onto the Price Manage button will take you through to the calendar of prices to manage. But for now, click <strong>Next</strong>",
          target: document.querySelector(".roomPrices"),
          placement: "left",
          multipage: true,
          onNext: function() {
          	window.location = "prices.php?room_id=38"
		  }
        },
        {
          title: "Calendar",
          content: "Here is an overview layout of the month and the availabilities that have been added to the system.",
          target: document.querySelector("#calendar"),
          placement: "top"
        },
        {
          title: "Day",
          content: "You can do a number of things using this calendar. You can either:<br /><br />Select a <strong>Single</strong> day with a single click.<br /><br />Select a <strong>block of days</strong> with a click and drag of the mouse.<br /><br />This will insert the dates over on the right hand form ready for submission to the database. <br /><br />You can also click onto a value already within the database if you are required to update a value.<br /><br /> Take it for a spin!",
          target: document.querySelector("#calendar"),
          placement: "right"
        },
        {
          title: "Once you've chosen your days...",
          content: "You can now see the values within the form below, and they are ready to be submitted. Pressing Submit will allow you to add the values to the calendar.",
          target: document.querySelector(".form-group"),
          placement: "top"
        },
        {
          title: "Ready to add something?",
          content: "Click the submit button...Don't worry I'll be here when you get back!",
          target: document.querySelector(".btn"),
          placement: "bottom"
        },
        {
          title: "Its added your price to the table!",
          content: "Find your selected dates, and see the price has been inserted.",
          target: document.querySelector("#calendar"),
          placement: "top",
          onNext: function() {
			$('.rooms ul').toggleClass("in");
		  }
        },
        {
          title: "If you need to add a room...",
          content: "You can use the Add Rooms button to add a room into the system. <strong>But</strong> the room can only be added once a hotel has been created.",
          target: document.querySelector(".addrooms"),
          placement: "right",
          onNext: function() {
			$('.specials ul').toggleClass("in");
		  }
        },
        {
          title: "Special Offers",
          content: "If you have any promotions that you would like to offer with regards to your rooms, this is your section to do so. Clicking the Manager link will take to you a page where the special offers that you have added would be displayed.",
          target: document.querySelector(".specials"),
          placement: "bottom",
          multipage: true,
          onNext: function() {
          	window.location = "specials.php"
		  }
        },
        {
          title: "Here is the list",
          content: "You can see what Special Offer you have added, and a brief overview of the Offer. You can click onto the Manage button to make ammendments on the Offer. <br /><br />With each offer you get the option to choose whether you want the offer to be applied to the Bidding process or to the Book Now process, you can also choose whether the offer is a discount or whether it is an offer for an added extra.",
          target: document.querySelector(".table-responsive"),
          placement: "bottom"
        },
        {
          title: "To Add a Special...",
          content: "You need to click here, this will take you through to a self explained form that needs to be filled out.<br /><br />But lets click next to continue the walkthrough.",
          target: document.querySelector(".addspecial"),
          placement: "right",
          onNext: function() {
			$('.bookings ul').toggleClass("in");
		  }
        },
        {
          title: "Last but, most certainly, not least",
          content: "The Booking system holds all the information for each of the bookings that have been taken through the snapbid website, be it Bid or Book. Click next to see how the information is stored.",
          target: document.querySelector(".bookings"),
          placement: "bottom",
          multipage: true,
          onNext: function() {
          	window.location = "bookings.php"
		  }
        },
        {
          title: "Here is the list",
          content: "The table shows the list of booking taken, with the option to view more Details or Edit the order.<br /><br />Upon editing the customer will receive an email of the update of their booking. An update can refer to the altering of the booking or adding any extra items.<br /><br />No changes can be made whilst looking at the Details page. This page is just used to display the booking information.",
          target: document.querySelector(".table-responsive"),
          placement: "left",
          yOffset: "100px",
		  xOffset: "50px",
          arrowOffset: "center",
          multipage: true,
          onNext: function() {
          	window.location = "index.php"
		  }
        },
        {
          title: "Ta Da!",
          content: "Hopefully that has given you an overview of how the SnapBid Administration section works, and has shown you where to go for each of the different areas. If you are unable to complete a desired task, please don't hesitate to contact one of the SnapBid support staff on <a href='mailto:help@snapbid.com'>help@snapbid.com</a>.<br /><br />Have fun and enjoy your SnapBid Experience!",
          target: document.querySelector(".page-header"),
          placement: "bottom"
        }
      ],
		
	nextOnTargetClick: "true"
    
};

		console.log(hopscotch.getState());
		if (hopscotch.getState() != null) {
          hopscotch.startTour(tour);
        } 

    // Start the tour!
		$('#startButton').on('click', function(e) {
      		hopscotch.startTour(tour);
      		e.preventDefault();
   		});
    			
       });
