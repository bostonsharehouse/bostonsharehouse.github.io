jQuery(document).ready(function($){
	var timelineBlocks = $('.cd-timeline-block'),
		offset = 0.8;

	//hide timeline blocks which are outside the viewport
	hideBlocks(timelineBlocks, offset);

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) 
			? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
			: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
	});

	function hideBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		});
	}

	function showBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
		});
	}

	// $('#calendar').fullCalendar({

 //      header: {
 //        left: 'prev,next today',
 //        center: 'title',
 //        right: 'month,listYear'
 //      },

 //      displayEventTime: false, // don't show the time column in list view

 //      // THIS KEY WON'T WORK IN PRODUCTION!!!
 //      // To make your own Google API key, follow the directions here:
 //      // http://fullcalendar.io/docs/google_calendar/
 //      googleCalendarApiKey: 'AIzaSyCi09m9B8YD63nc5mTg_TxHK5vyhOu13jw',
    
 //      // US Holidays
 //      events: {
 //              googleCalendarId: 'mppbf2tf0vfm4dpnqv69362i1s@group.calendar.google.com'
 //          },
      
 //      eventClick: function(event) {
 //        // opens events in a popup window
 //        window.open(event.url, 'gcalevent', 'width=700,height=600');
 //        return false;
 //      },
      
 //      loading: function(bool) {
 //        $('#loading').toggle(bool);
 //      }
      
 //    });
});