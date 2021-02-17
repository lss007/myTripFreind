// fix header on scroll
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll >= 10) {
        $("body").addClass("fixedHeader");
    } else {
        $("body").removeClass("fixedHeader");
    }
});

// searchTrigger
$('.searchTrigger').click(function(){
  $('body').addClass('activeSearch');
});
$('.searchCloseTrigger').click(function(){
  $('body').removeClass('activeSearch');
});

// filterTrigger
$('.filterTrigger').click(function(){
  $('body').addClass('activeFilter');
});
$('.closeFilter').click(function(){
  $('body').removeClass('activeFilter');
});

// mobile nav
$('.navTrigger ').click(function(){
  $('body').addClass('activeNav');
});
$('.navOverlay').click(function(){
  $('body').removeClass('activeNav activeFilter activeSearch');
});

// emoji rating
$('.emojiRatingCol label').click(function(){
  var selectedEmoji = $(this).attr("data-id");
  $('.emojoMdlContent').find("." + selectedEmoji).show().siblings().hide();
});

// validation
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
})()


// tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})




// Update counter value
$('.has-char-limit .countFld').keyup(function() {
  var maxLength = $(this).attr('maxlength')
  var textLength = maxLength - $(this).val().length;
  var localCounter = $(this).parent().find('.input-counter')
  if (localCounter.parent().hasClass('shows-total')) {
    localCounter.text(textLength + '/' + maxLength)
  } else {
     localCounter.text(textLength);
  }
  if (textLength <= Math.round(maxLength/4)) {
    localCounter.addClass('is-approaching-limit');
  } else {
     localCounter.removeClass('is-approaching-limit');
   }
  if (textLength <= 0) {
    localCounter.addClass('is-at-limit');
  } else {
    localCounter.removeClass('is-at-limit');
  }
});

// datepicker
$(function () {
  $('#datetimepicker1').datetimepicker({
    format: 'L'
  });
});


// change bg image
// function pic() {
//   var bgm = ['assets/images/login-bg.jpg','assets/images/login-bg-2.jpg','assets/images/register-bg.jpg'];
//   $('.loginLeftCol').css({
//     'background-image' : 'url('+ bgm[Math.floor(Math.random() * bgm.length)] + ')',
//   });
// }
// pic();



// header Dropdown
$('.ddTrigger').click(function(){
  $(this).parents('li').siblings().find('.ddParent').removeClass('actDD');
  $(this).parents('.ddParent').toggleClass('actDD');
  $(this).removeClass('actUnread');
})
$(document).on("click", function(event){
  var $trigger = $(".ddParent");
  if($trigger !== event.target && !$trigger.has(event.target).length){
    $(".ddParent").removeClass("actDD");
  }
});
$('.ddCloseTrigger').click(function(){
  $(".ddParent").removeClass("actDD");
});


// sort Dropdown
$('.sortTrigger').click(function(){
  $(this).parents('.sortParent').toggleClass('actSortDD');
});
$(document).on("click", function(event){
  var $trigger = $(".sortParent");
  if($trigger !== event.target && !$trigger.has(event.target).length){
    $(".sortParent").removeClass("actSortDD");
  }
});

// More Option
$('.moreOption a').click(function(){
  $(this).parent().next().slideToggle();
  $(this).toggleClass("changeIcon");
})


$(".circle_percent").each(function() {
    var $this = $(this),
		$dataV = $this.data("percent"),
		$dataDeg = $dataV * 3.6,
		$round = $this.find(".round_per");
	$round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
	$this.append('<div class="circle_inbox"><span class="percent_text"></span><span class="percent_text_Col">Progress</span></div>');
	$this.prop('Counter', 0).animate({Counter: $dataV},
	{
		duration: 2000,
		easing: 'swing',
		step: function (now) {
            $this.find(".percent_text").text(Math.ceil(now)+"%");
        }
    });
	if($dataV >= 51){
		$round.css("transform", "rotate(" + 360 + "deg)");
		setTimeout(function(){
			$this.addClass("percent_more");
		},1000);
		setTimeout(function(){
			$round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
		},1000);
	}
});




$.fn.fileUploader = function (filesToUpload, sectionIdentifier) {
    var fileIdCounter = 0;

    this.closest(".files").change(function (evt) {
        var output = [];

        for (var i = 0; i < evt.target.files.length; i++) {
            fileIdCounter++;
            var file = evt.target.files[i];
            var fileId = sectionIdentifier + fileIdCounter;

            filesToUpload.push({
                id: fileId,
                file: file
            });

            var removeLink = "<a class=\"removeFile\" href=\"#\" data-fileid=\"" + fileId + "\"><img src=\"assets/images/deleteicon.svg\"></a>";

            output.push("<li><span>", escape(file.name), "</span> ", file.size, " bytes ", removeLink, "</li> ");
        };

        $(this).children(".fileList")
            .append(output.join(""));

        //reset the input to null - nice little chrome bug!
        evt.target.value = null;
    });

    $(this).on("click", ".removeFile", function (e) {
        e.preventDefault();

        var fileId = $(this).parent().children("a").data("fileid");

        // loop through the files array and check if the name of that file matches FileName
        // and get the index of the match
        for (var i = 0; i < filesToUpload.length; ++i) {
            if (filesToUpload[i].id === fileId)
                filesToUpload.splice(i, 1);
        }

        $(this).parent().remove();
    });

    this.clear = function () {
        for (var i = 0; i < filesToUpload.length; ++i) {
            if (filesToUpload[i].id.indexOf(sectionIdentifier) >= 0)
                filesToUpload.splice(i, 1);
        }

        $(this).children(".fileList").empty();
    }

    return this;
};

(function () {
    var filesToUpload = [];

    var files1Uploader = $("#files1").fileUploader(filesToUpload, "files1");
    var files2Uploader = $("#files2").fileUploader(filesToUpload, "files2");
    var files3Uploader = $("#files3").fileUploader(filesToUpload, "files3");

    $("#uploadBtn").click(function (e) {
        e.preventDefault();

        var formData = new FormData();

        for (var i = 0, len = filesToUpload.length; i < len; i++) {
            formData.append("files", filesToUpload[i].file);
        }

        $.ajax({
            url: "http://requestb.in/1k0dxvs1",
            data: formData,
            processData: false,
            contentType: false,
            type: "POST",
            success: function (data) {
                alert("DONE");

                files1Uploader.clear();
                files2Uploader.clear();
                files3Uploader.clear();
            },
            error: function (data) {
                alert("ERROR - " + data.responseText);
            }
        });
    });
})()





// reply comment
$('.replyTrigger').click(function(){
  $(this).parents('.replyCol').find('.replyFldCol').slideDown();
  $(this).parents('.replyCol').find('.replyFld').focus();
});
