

const stagesForm = document.getElementById('stages-form');
const hiddenInput = document.getElementById('hidden-result-input');


function toggleDropdown(category) {
    
    // var dropdownContent = document.getElementById("dropdownContent"+category);
    var dropdownContent = $("#dropdownContent"+category);
    console.log(dropdownContent.css("display")        );
    if(dropdownContent.css("display") === "block"){
        dropdownContent.css("display","none")
        dropdownContent.parent().find(".arrow-icon").removeClass('rotate180')
        //dropdownContent.pare('.arrow-icon').classList.remove('rotate180');
        // $("#dropdownContent"+category).parent().find(".arrow-icon").removeClass('rotate180')
    }
    else {
        dropdownContent.css("display","block")
        dropdownContent.parent().find(".arrow-icon").addClass('rotate180')
        // $("#dropdownContent"+category).parent().find(".arrow-icon").addClass('rotate180')

    }
    
  }


  

  const submitButton = document.getElementById('submit');
  

  const answers ={};
    let firstValues;
    let secondValues;
    let thirdValues;
    let fourthValues;

function updateSubmit() {
  
    const firstQ = document.querySelectorAll('input[name="OS"]:checked');
    const secondQ = document.querySelectorAll('input[name="ENV"]:checked');
    const thirdQ = document.querySelectorAll('input[name="workload"]:checked');
    const fourthQ = document.querySelectorAll('input[type="checkbox"]:checked');
  
     firstValues = Array.from(firstQ).map(input => input.value);
     secondValues = Array.from(secondQ).map(input => input.value);
     thirdValues = Array.from(thirdQ).map(input => input.value);
     fourthValues = Array.from(fourthQ).map(input => input.value);

    
  console.log('First Question:', firstValues);
  console.log('Second Question:', secondValues);
  console.log('Third Question:', thirdValues);
  console.log('Fourth Question:', fourthValues);

  const firstValue = firstQ.length > 0;
  const secondValue = secondQ.length > 0;
  const thirdValue = thirdQ.length > 0;
  const fourthValue = fourthQ.length > 0;
    
  if (firstValue && secondValue && thirdValue && fourthValue) {
    submitButton.removeAttribute('disabled');
  } else {
    submitButton.setAttribute('disabled', true);
  }
}


const result = document.getElementById('result-box');



function checkInputs(){
// Add event listeners to the input elements to trigger the update
const inputElements = document.querySelectorAll('input');
inputElements.forEach((input) => {
  input.addEventListener('change', updateSubmit);
});
}




submitButton.addEventListener('click',function (e){
    
    answers[0] = firstValues;
    answers[1] = secondValues;
    answers[2] = thirdValues;
    answers[3] = fourthValues;
    
    
    // encodedAnswers = JSON.stringify(answers);
    encodedAnswers = answers;
    

    if(encodedAnswers ===null){
        console.log('Error')
    }else{

        
       // console.log(encodedAnswers);
        submitAnswers(encodedAnswers);

        //document.getElementById('result-box').style.display = 'block';
    }
    //resultBox.display = '';
    
                
    
})
  
function buttonChanges(OS){

    $.ajax({
        url:'stages/stage-2.php',
        type:'POST',
        data: {'OS': OS},
        success:function(response){
            $('.stage-two').html(response);

            pageLoad();
            checkInputs();
            //toggleDropdown(category);

           
            //alert(response)
        },
        error:function(response){
            alert(response)
        }
    })

}

function pageLoad(){
   
    $('input[type="checkbox"]').on('change',function () {  

        $('.dropdown').each(function () {
            var checkedBox = $(this).children().find("input[type='checkbox']")
            if(checkedBox.filter(':checked').length > 0 && $(this).not(':checked')){
                $(this).addClass('checked')
            }else{
                $(this).removeClass('checked')
            }
          })
    })
      

    
        $('.dropdown').each(function () {
            var box = $(this).children().find(".grid-container")
            if(box.children().filter('input[type="checkbox"]').length === 0){
                
                $(this).css("display","none")
            }else{
                
                $(this).css("display","block")
            }

        })
      
}




function submitAnswers(encodedAnswers){

            $.ajax({
                url:'stages/results.php',
                type:'POST',
                data: {'answers': JSON.stringify(encodedAnswers)},
                success:function(response){
                    $('.result-box').html(response);
                    //alert(response)
                },
                error:function(response){
                    //alert(response)
                }
            })

            document.getElementById('result-box').scrollIntoView({behavior: 'smooth'});
        
}








// $('input[name="OS"]').on('change', function(){
//     console.log('checked value = ', $(this).val());
//     if($(this).val() == 'windows'){
//         // document.getElementById('win-choice').style.display = "block"
//         // document.getElementById('mac-choice').style.display = "none"
//         //$('#mac-choice input:checkbox').prop('checked', false);
//         document.querySelectorAll('.hidden-checkbox').forEach(function(checkbox){
//             checkbox.closest('.dropdown').classList.remove('checked');
//         })

//     }else{
//         // document.getElementById('win-choice').style.display = "none";
//         // document.getElementById('mac-choice').style.display = "block";
//         //$('#win-choice input:checkbox').prop('checked', false);
//         document.querySelectorAll('.hidden-checkbox').forEach(function(checkbox){
//             checkbox.closest('.dropdown').classList.remove('checked');
//         })        
//     }
// })




//$(".dropdown").find(".grid-container:empty").hide();
/*
var buttons = document.querySelectorAll('.dropdown-button');

// Add an event listener to each button
buttons.forEach(function (button) {
    button.addEventListener('click', function () {
        // Toggle the 'active' class on the button
        button.classList.toggle('active');
    });
});*/
/*
function getSelectedOS(value) {
    // Get the selected OS value
    var selectedOS = value;

    // Use AJAX to send the value to a PHP script
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'stages/stage-2.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Handle the response from the PHP script (if needed)
        //console.log(xhr.responseText);
      }
    };
    xhr.send(selectedOS);
  }*/

