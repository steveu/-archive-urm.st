(function ($, window, document) {

    "use strict";

    if (typeof jQuery === 'undefined') {
        return null;
    }

    var body,
        head,
        html,
        root;

    root = new $.prototype.init(document);

	/* Plain JS Functions */
	Raphael.fn.triangle = function(x, y, size) {
	  var path = ["M", x, y];
	  path = path.concat(["L", (x + size / 2.43), (y + size)]);
	  path = path.concat(["L", (x - size / 2.43), (y + size)]);
	  return this.path(path.concat(["z"]).join(" "));
	};
	

    /* Custom Plugins */
	$.prototype.skillsMatrix = function () {
		
		var	matrix	= $(this),
			table	= matrix.find('table');
		
		var json_skills = {
			"skills":[
				{
					"title":"IxD",
					"value":80,
					"color":"#F86068",
					"text":{"x":25,"y":265,"color":"#F8151E"}
				},
				{
					"title":"IA",
					"value":60,
					"color":"#F7A358",
					"text":{"x":25,"y":133,"color":"#F7790B"}
				},
				{
					"title":"UCD",
					"value":50,
					"color":"#F9E84A",
					"text":{"x":125,"y":30,"color":"#CFC400"}
				},
				{
					"title":"PHP/MySQL",
					"value":85,
					"color":"#5B975D",
					"text":{"x":280,"y":30,"color":"#269727"}
				},
				{
					"title":"JS",
					"value":75,
					"color":"#4E8FBC",
					"text":{"x":370,"y":135,"color":"#1F82BC"}
				},
				{
					"title":"CSS",
					"value":95,
					"color":"#475296",
					"text":{"x":370,"y":270,"color":"#1F3296"}
				},
				{
					"title":"HTML",
					"value":95,
					"color":"#733A82",
					"text":{"x":275,"y":363,"color":"#701C82"}
				},
				{
					"title":"Graphics",
					"value":60,
					"color":"#F185CB",
					"text":{"x":120,"y":360,"color":"#F126B6"}
				}
			]
		};

		var	paper, set, segment;
		
		var loop_rotation = 22.5,
			triangle_length = 0;
		
	    this.each(function () {
			
			
			paper = ScaleRaphael("skills_matrix",400, 400);
			
			// create center circle
			var circle = paper.circle(200, 200, 20).attr({"fill": "#fff", "stroke": "#fff", "stroke-width": 0});
			var middle_text = paper.text(200, 200, '%').attr({"font-size": "17", "font-weight" : "bold", "text-anchor": "middle", "fill": "#555"});
			set = paper.set();
	
			$.each(json_skills.skills,function() {
				
				var percent = this.value;
				var text_color = this.text.color;
				// draw the segment
				triangle_length = 150 * (this.value / 100);
				
				loop_rotation = loop_rotation + 45;
				
				// grayed background
				var background = paper.triangle(200, 200, 150)
									.attr({"fill": "#efefef", "stroke": "#fff", "stroke-width": 2})
									.transform("R"+loop_rotation+" 200 200");
				
				// coloured triangle
				var triangle = paper.triangle(200, 200, triangle_length)
									.attr({"opacity" : 0, "fill": this.color, "stroke": "#fff", "stroke-width": 2})
									.transform("R"+loop_rotation+" 200 200")
									.animate({"opacity" : 1}, 5000, "elastic");
				
				
				
				// Text label
				var text = paper.text(this.text.x, this.text.y, this.title).attr({"font-size": "15", "font-weight" : "normal", "text-anchor": "middle", "fill": this.text.color});
				
				// create segment
				var segment = paper.set();
				var tstr;
				
				segment.push(background,triangle, text);
				
				segment.hover(
					function(){ 
						
						/*
						// Transformation not recording properly, hover continuously firing
						tstr = triangle.transform();// record transformation string 

						triangle.stop().animate({ 
							transform: tstr+"s1.03 1.03 200 200"
						}, 350, "elastic");
						*/

						//triangle.transform(triangle.transform()+"s1.2 1.2 200 200");
						
						//alert(triangle.transform());
				   		
						middle_text.attr({"text" : percent, "fill" : text_color});
						
						//circle.toFront();
						text.attr({"font-weight" : "bold", "font-size" : "16"}); 
					},
					function(){
						
						//triangle.transform(tstr);
						
						/*
 						triangle.stop().animate({ 
							transform: tstr
						}, 350, "elastic");
						*/
						
						middle_text.attr({"text" : '%', "fill" : '#555'});
						
						text.attr({"font-weight" : "normal", "font-size" : "15"}); 
				    }
				);
				
				// add to master set
				set.push(segment);
	
			});
			
			circle.toFront();
			middle_text.toFront();
			var width = matrix.parent().width();

			//set.transform(set.transform()+"r180 200 200");
			paper.changeSize(width, width, false, false);

			$(window).resize(function() {

				var width = matrix.parent().width();
				paper.changeSize(width, width, false, false);
			});

		});
	};
		

    /*	Make Rocket Go Now!
     */

    root.ready(function () {

		/*  Cache <html>, <head> & <body>
		 */

		html = root.find('html');
		head = html.find('head');
		body = html.find('body');

		body.find('a.email').attr('href','mailto:steve@clearbar.com');

		body.find('#skills_matrix').skillsMatrix();
		
    });


    return null;

}(jQuery, this, this.document));