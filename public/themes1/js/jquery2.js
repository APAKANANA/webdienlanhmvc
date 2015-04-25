$(document).ready ( function()
	{
		$("#Navigator li ").find("ul:first").css({display:"none"});
		$("#Navigator li").hover(function(){
			$(this).find("ul:first ").css({display:"none"}).stop().slideDown(100)
			},function(){
			$(this).find("ul:first ").css({display:"none"}).stop().slideUp(0)
			
			
			}
			);
		
			
			$(".img1").hover(function(){
				$(this).stop().animate({"opacity":2});
			
				},
				function(){
			$(this).stop().animate({"opacity":2});
			});
		var tabInterval = setInterval(function(){
	
			$("#article3 section:nth-child(1)").hide(1000,"linear",function (){
				$("#article3").append(this);
				$(this).css("display","block");
				
			});
			$("#article3 section:nth-child(2)").hide(2000,"linear",function (){
				$("#article3").append(this);
				$(this).css("display","block");
			});
			$("#article3 section:nth-child(3)").hide(3000,"linear",function (){
				$("#article3").append(this);
				$(this).css("display","block");
			});
			$("#article3 section:nth-child(4)").hide(4000,"linear",function (){
				$("#article3").append(this);
				$(this).css("display","block");
			});
			  i++;
		  if(i > 3){i = 1;}
	   }, 10000);
			
				var tabInterval = setInterval(function(){
			$("#article2 section:nth-child(1)").hide(1000,"linear",function (){
				$("#article2").append(this);
				$(this).css("display","block");	
			});
			$("#article2 section:nth-child(2)").hide(2000,"linear",function (){
				$("#article2").append(this);
				$(this).css("display","block");
			});
			$("#article2 section:nth-child(3)").hide(3000,"linear",function (){
				$("#article2").append(this);
				$(this).css("display","block");
			});
				  i++;
		  if(i > 3){i = 1;}
	   }, 6000);
				
				
					var tabInterval = setInterval(function(){
			$("#article1 section:nth-child(1)").hide(1000,"linear",function (){
				$("#article1").append(this);
				$(this).css("display","block");	
			});
			$("#article1 section:nth-child(2)").hide(2000,"linear",function (){
				$("#article1").append(this);
				$(this).css("display","block");
			});
			  i++;
		  if(i > 3){i = 1;}
	   }, 4000);
	   
	   var tabInterval = setInterval(function(){
	
			$("#article41 section:nth-child(1)").hide(1000,"linear",function (){
				$("#article41").append(this);
				$(this).css("display","block");
				
			});
			$("#article41 section:nth-child(2)").hide(2000,"linear",function (){
				$("#article41").append(this);
				$(this).css("display","block");
			});
			$("#article41 section:nth-child(3)").hide(3000,"linear",function (){
				$("#article41").append(this);
				$(this).css("display","block");
			});
			$("#article41 section:nth-child(4)").hide(4000,"linear",function (){
				$("#article41").append(this);
				$(this).css("display","block");
			});
			  i++;
		  if(i > 3){i = 1;}
	   }, 10000);
	   
	   var tabInterval = setInterval(function(){
			$("#article31 section:nth-child(1)").hide(1000,"linear",function (){
				$("#article31").append(this);
				$(this).css("display","block");	
			});
			$("#article31 section:nth-child(2)").hide(2000,"linear",function (){
				$("#article31").append(this);
				$(this).css("display","block");
			});
			$("#article31 section:nth-child(3)").hide(3000,"linear",function (){
				$("#article31").append(this);
				$(this).css("display","block");
			});
				  i++;
		  if(i > 3){i = 1;}
	   }, 6000);
	   
	   var tabInterval = setInterval(function(){
			$("#article21 section:nth-child(1)").hide(1000,"linear",function (){
				$("#article21").append(this);
				$(this).css("display","block");	
			});
			$("#article21 section:nth-child(2)").hide(2000,"linear",function (){
				$("#article21").append(this);
				$(this).css("display","block");
			});
			  i++;
		  if(i > 3){i = 1;}
	   }, 4000);
	   
	   var tabInterval = setInterval(function(){
			$("#article11 section:nth-child(1)").hide(1000,"linear",function (){
				$("#article11").append(this);
				$(this).css("display","block");	
			});
			  i++;
		  if(i > 3){i = 1;}
	   }, 3000);
	
	
		$("#light").append("<img>");
		$("article section").click(function (){
			var imgSrc = $(this).find("img").attr("src");
			var img = $("#light img");
			$("#light").css("display","block");
			$("#box").css("display","block");
			img.attr({
				src:imgSrc,
				width:450,
				height:550
			
			});
		});
			$("#light").click(function(){
			$("#light").css("display","none");
			$("#box").css("display","none")
		});
		});
			
		$("#slidebar ul li").css("left","1000px");
			

			$("#light").click(function(){
			$("#light").css("display","none");
			$("#box").css("display","none");
		});
		$(document).ready(function(){
		$('.slider8').bxSlider({
		mode: 'vertical',
		slideWidth: 300,
		minSlides: 2,
		slideMargin: 10
		});
		});