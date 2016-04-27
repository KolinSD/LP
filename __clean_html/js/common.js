$(document).ready(function() {

    $ ("#gallery_grid").mixItUp();
    
    $(".s_gallery li").click(function() {
        $(".s_gallery li").removeClass("active");
        $(this).addClass("active");
    });
    
    $(".popup").magnificPopup({type:'image'});
    $(".popup_content").magnificPopup({type:"inline", midClick: true});

    $(".section_header").animated("fadeInUp", "fadeOutDown");

    $(".animation_1").animated("flipInY", "flipOutY");    
    $(".animation_2").animated("fadeInLeft", "fadeOutLeft");
    $(".animation_3").animated("fadeInRight", "fadeOutRight");

    $(".left .exhibit_item").animated("fadeInLeft", "fadeOutDown");
    $(".right .exhibit_item").animated("fadeInRight", "fadeOutDown");
    
	function heightDetect() {
		$(".main_head").css("height", $(window).height());
	};
	heightDetect();
	$(window).resize(function() {
		heightDetect();
	});
    
    $(".toggle_mnu").click(function() {
        $(".sandwich").toggleClass("active");
    });
    
    $(".top_mnu ul a").click(function() {       
        $(".top_mnu").fadeOut(600);
        $(".sandwich").toggleClass("active");
        $(".top_text").css("opacity", "1");
    });
    
    $(".toggle_mnu").click(function() {
        if ($(".top_mnu").is(":visible")) {
            $(".top_text").css("opacity", "1");
            $(".top_mnu").fadeOut(600);
            $(".top_mnu li a").removeClass("fadeInUp animated");
        } else {
            $(".top_text").css("opacity", ".1");;
            $(".top_mnu").fadeIn(600);
            $(".top_mnu li a").addClass("fadeInUp animated");
        };
        
    });
    $(".gallery_item").each(function(i) {
          $(this).find("a").attr("href", "#work_" + i);
          $(this).find(".gallery_item_descr").attr("id", "work_" + i);
    });
    
    $(".top_mnu ul a").mPageScroll2id();
    
});    
$(window).load(function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");
    
    $(".top_text h1").animated("fadeInDown", "fadeOutUp");
    $(".top_text p").animated("fadeInUp", "fadeOutDown");

}); 
