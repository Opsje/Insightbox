$(document).ready(function() {
        $('#mc_embed_signup').find('form').ajaxChimp();
});


//registerform

var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function(){
	       if(animating) return false;
	       animating = true;
	
	       current_fs = $(this).parent();
	       next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	
	//show the next fieldset
	        next_fs.show();
	//hide the current fieldset with style
	       current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 700, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
});

/*       
function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("fieldsetname");
  y = x[current_fs].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
    alert("hfjdsfhgkj");
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    next_fs.show();
  }
  return valid; // return the valid status
}
*/

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 700, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
});

/*
$(".submit").click(function(){
	return false;
})
*/
/*
// topics of book
$(document).ready(function () {
  "use strict";
  var pluginName = "selectionator";
  var defaults = {
    propertyName: "selectionator",
    src: null,
    orgElement: null,
    checkedItems: [],
    // custom callback events
    onError: function(error) {}
  };
  function Plugin(element, options) {
    this.element = element;
    this.selector = null;
    this.options = $.extend({}, defaults, options);
    this._defaults = defaults;
    this._name = pluginName;
    this.init();
  }
  Plugin.prototype = {
    init: function () {
      console.log("Language", this.options);
      var that = this;
      var self = $(that.element);
      that.options.src = that.element.getAttribute('data-src');
      that.selector = that.createFromJson(that.options.data);
      that.options.orgElement = that.element.parentNode.replaceChild(that.selector, that.element);
      $(that.selector).addClass(that._name);
    },
    createFromJson: function(options) {
      var that = this;
      var select = document.createElement('select');
      var popup = document.createElement('div');
      var header = document.createElement('div');
      var search = document.createElement('span');
      var overlay = document.createElement('span');
      overlay.className = 'overlay';
      var shadow = document.createElement('span');
      shadow.className = 'shadow';
      var placeholder = document.createTextNode('Options');
      search.className = 'search';
      search.appendChild(shadow);     
      search.appendChild(overlay);   
      search.appendChild(placeholder);   
      popup.appendChild(search);
      var menu = document.createElement('ul');
      select.style.display = 'none';
      menu.className = 'list';
      var box = document.createElement('div');
      box.className = 'menu';
      box.appendChild(menu);
      popup.appendChild(box);
      console.log("optgroup", options.optgroups);
      options.optgroups.forEach(function(optgroup, index) {


        var menuItem = document.createElement('li');
        //menuItem.className('header');
        var header = document.createElement('span');
        header.className = 'header';
        var caption = document.createTextNode(optgroup.label);
        header.appendChild(caption);
        menuItem.appendChild(header);
        var menuItems = document.createElement('ul');
        menuItems.className = 'optgroup';
        menuItem.appendChild(menuItems);
        menu.appendChild(menuItem);

        optgroup.options.forEach(function(option, index) {
          var opt = new Option(option.text, option.value, option.defaultSelected, option.selected);
          select.options.add(opt);
          var item = document.createElement('li');
          var label = document.createElement('label');
          label.setAttribute("for", option.value);
          var checkbox = document.createElement('input');
          $(checkbox).data(option);
          checkbox.setAttribute('type', 'checkbox');

          checkbox.addEventListener('change', function(event){
            var checkbox = event.target;
            var $el = $(event.srcElement);
            if (checkbox.checked) {
              that.options.checkedItems.push(event.srcElement);
              placeholder.nodeValue = "Selected: " + that.options.checkedItems.length + " out of " + $(that.selector).find('input[type="checkbox"]').length;

            } else {
              that.options.checkedItems.pop();
              that.options.checkedItems = that.options.checkedItems.filter(function(items, index){
                return items.value != $el.data().value;
              });
              placeholder.nodeValue = "Selected: " + that.options.checkedItems.length + " out of " + $(that.selector).find('input[type="checkbox"]').length;
            }
            console.log("data: ", that.options.checkedItems);
          });
          checkbox.id = option.value;
          var caption = document.createTextNode(option.text);
          label.appendChild(caption);
          item.appendChild(checkbox);
          item.appendChild(label);
          menuItems.appendChild(item);
        });
      });
      return popup;
    },
    onAddFriend: function(data) {
      var that = this;
      return that.options.onAddFriend(that, data);
    },
    onRemoveFriend: function(data){
      var that = this;
      var self = $(that.element);
      return that.options.onRemoveFriend(data);
    },
    destroy: function() {
      var that = this;
      $(that.element).unbind("destroyed", that.teardown);
      that.teardown();
    },
    teardown: function() {
      var that = this;
      $(that.element).removeClass(that._name);
      $(that.selector).replaceWith(that.options.orgElement);
      $(that.element).removeData(that._name);
      that.unbind();
      that.element = null;
    },
    bind: function() { },
    unbind: function() { }
  };
  $.fn[pluginName] = function (options) {
    return this.each(function () {
      if (!$.data(this, pluginName)) {
        $.data(this, pluginName, new Plugin(this, options));
      }
    });
  };
});
//Attach plugin to all matching element
$(document).ready(function () {
  $('#select').selectionator({
    data: {
      optgroups: [{
        label: ' ',
        options: [{
          value: 1,
          text: 'Advise',
          defaultSelected: false,
          selected: false
        }, {
          value: 2,
          text: 'Best Sellers',
          defaultSelected: false,
          selected: false
        }, {
          value: 3,
          text: "Biography",
          defaultSelected: false,
          selected: false
        }, {
          value: 4,
          text: "Business",
          defaultSelected: false,
          selected: false
      }, {
          value: 5,
          text: 'Classical',
          defaultSelected: false,
          selected: false
        }, {
          value: 6,
          text: "Engineering",
          defaultSelected: false,
          selected: false
        }, {
          value: 7,
          text: "Entreprenuership",
          defaultSelected: false,
          selected: false
        }, {
          value: 8,
          text: "Economy",
          defaultSelected: false,
          selected: false
        }, {
          value: 9,
          text: "Health",
          defaultSelected: false,
          selected: false
        }, {
          value: 10,
          text: "History",
          defaultSelected: false,
          selected: false
        }, {
          value: 11,
          text: "Psychology",
          defaultSelected: false,
          selected: false
        }, {
          value: 12,
          text: "Random",
          defaultSelected: false,
          selected: false
        
        }]
      }]
    }
  });
  setTimeout(function(){
    $(".selectionator").addClass('opened');
  }, 500);
  setTimeout(function(){
    $(".selectionator").removeClass('opened');
  }, 1250);
});


*/

//sigupwindow


// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//all registerdata


$('.chatinput').keyup(function(event) {
  newText = event.target.value;
  $('.registershipdata').text(newText);
});

$('.chatinput2').keyup(function(event) {
  newText = event.target.value;
  $('.registershipdata2').text(newText);
});

$('.chatinput3').keyup(function(event) {
  newText = event.target.value;
  $('.registershipdata3').text(newText);
});

function myCountry() {
                var b = document.getElementById("country_id");
                var i = b.selectedIndex;
                document.getElementById("whatcountry").innerHTML = b.options[i].text;
}






function myTopic(select) {
      
}
    
    
    
    /*
                var f = document.getElementById("DDLActivites");
                var g = f.selectedIndex;
                document.getElementById("option8").innerHTML = f.options[g].text;
                
                
    */


//book quantity

function myFunction() {
                var z = document.getElementById("bookquantity-select");
                var t = z.selectedIndex;
                document.getElementById("option3").innerHTML = z.options[t].text;
}
function mylanguage() {
                var q = document.getElementById("language-select");
                var w = q.selectedIndex;
                document.getElementById("whatlanguage").innerHTML = q.options[w].text;
}



//progressbar

// paypal


