var $s1q1 = $("#appbundle_survey_s1q1_3");
var $s1q2 = $("#appbundle_survey_s1q2_7");
var $s2q10 = $("#appbundle_survey_s2q10_8");


$(document).ready(function(){

    $s1q1.change(function(){
        if ( document.getElementById('appbundle_survey_s1q1_3').checked )
        {
            $('#appbundle_survey_s1q1other').attr('readonly', false);
        }
        else{
            $('#appbundle_survey_s1q1other').attr('readonly', true);
        }
    });

    $s1q2.change(function(){
        if ( document.getElementById('appbundle_survey_s1q2_7').checked )
        {
            $('#appbundle_survey_s1q2other').attr('readonly', false);
        }
        else{
            $('#appbundle_survey_s1q2other').attr('readonly', true);
        }
    });

    $s2q10.change(function(){
        if ( document.getElementById('appbundle_survey_s2q10_8').checked )
        {
            $('#appbundle_survey_s2q10other').attr('readonly', false);
        }
        else{
            $('#appbundle_survey_s2q10other').attr('readonly', true);
        }
    });


});





