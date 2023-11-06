

const stagesForm = document.getElementById('stages-form');
const hiddenInput = document.getElementById('hidden-result-input');



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
            var box = $(this).children().find(".grid-container > div")
            if(box.children().filter('input[type="checkbox"]').length === 0){
                
                $(this).css("display","none")
            }else{
                
                $(this).css("display","block")
            }

        })

        $('.dropdown-button').click(function(){
            if(!$(this).hasClass('collapsed')){
                $(this).addClass('rotate180');
                // $(this).children().find('img.arrow-icon').addClass('rotate180');
            }else{
                
                $(this).removeClass('rotate180');
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
                    
                    document.getElementById('result-box').scrollIntoView({behavior: 'smooth'});
                },
                error:function(response){
                    
                }
            })

            
        
}

