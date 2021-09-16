//paintings section
    var penSection;
    var charcoalSection;
    var pencilsSection;
    var charcoalRadioButton;
    var penRadioButton;
    var pencilRadioButton;


    //slider for charcoal paintings
    $(document).ready(function() {


        var widthOfInnerScreen = window.outerWidth || document.body.clientWidth || document.documentElement.clientWidth;
        var tempItem = 1;

        if (widthOfInnerScreen <= 400 ) {
            tempItem = 1;
        }else if(widthOfInnerScreen > 400 && widthOfInnerScreen <= 1000) {
            tempItem = 2;
        }
        else if (widthOfInnerScreen > 1000 && widthOfInnerScreen <= 1500){
            tempItem = 3;
        }
        else if(widthOfInnerScreen > 1500){
            tempItem = 4;
        }else{
            tempItem = 1;
        }

        var autoplaySlider = $('#charcoalPaintingsSlider').lightSlider({
            controls: false,
            auto:true,
            loop:true,
            pauseOnHover: true,
            item : tempItem
            // onBeforeSlide: function (el) {
            //     $('#current').text(el.getCurrentSlideCount());
            // } 
        });


       // $('#total').text(autoplaySlider.getTotalSlideCount());
      });

    function paintingsCategoryChangeToCharcoal(){

        if(charcoalSection.style.display !== 'block'){
            penSection.style.display = 'none';
            pencilsSection.style.display = 'none';
            charcoalSection.style.display = 'block';
            
        }

    }

    function paintingsCategoryChangeToPen(){

        if(penSection.style.display !== 'block'){
            pencilsSection.style.display = 'none';
            charcoalSection.style.display = 'none';
            penSection.style.display = 'block';
        }

    }

    function paintingsCategoryChangeToPencil(){

        if(pencilsSection.style.display !== 'block'){
            charcoalSection.style.display = 'none';
            penSection.style.display = 'none';
            pencilsSection.style.display = 'block';
            
        }
    }

    //window.onload
    window.onload = function(){

        /*paintings section*/
        charcoalSection = document.getElementById("paintingsCharcoalSection");
        penSection = document.getElementById("paintingsPenSection");
        pencilsSection = document.getElementById("paintingsPencilsSection");

        charcoalRadioButton = document.getElementById("PaintingsOptionsCharcoalLabel");
        penRadioButton = document.getElementById("PaintingsOptionsPenLabel");
        pencilRadioButton = document.getElementById("PaintingsOptionsPencilsLabel");

        //paintings div mouse click listeners
        charcoalRadioButton.addEventListener("click", paintingsCategoryChangeToCharcoal);
        penRadioButton.addEventListener("click", paintingsCategoryChangeToPen);
        pencilRadioButton.addEventListener("click", paintingsCategoryChangeToPencil);


    }

