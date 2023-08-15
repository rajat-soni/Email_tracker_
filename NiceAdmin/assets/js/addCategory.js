var cate_name =  document.getElementById('cate_name');
var cate_type =  document.getElementById('cate_type');
var cate_status =  document.getElementById('cate_status');

var cate_name_error = document.getElementById('cate_error')
var cate_type_err =  document.getElementById('cate_type_error');
var cate_status_error =  document.getElementById('cate_status_error');



cate_name.onkeyup = () => {
    cateNameValidation();
}

function cateNameValidation() {
 
    var cate_name_value =  document.getElementById('cate_name').value;
    
    if(cate_name_value.length == ""){
        cate_name_error.innerHTML = "Category should not be empty";
        cate_name_error.disabled = false;
        return false
    }
        cate_name_error.disabled = true;
        cate_name_error.innerHTML = "";
        return true;
    
}


cate_type.onchange = () => {
    cateTypeValidation();
}

function cateTypeValidation() {
 
    var cate_type_value =  document.getElementById('cate_type').value;
    
    if(cate_type_value == ""){
        cate_type_err.innerHTML = "*please select least one category";
        cate_type_err.disabled = false;
        return false
    }
    cate_type_err.disabled = true;
    cate_type_err.innerHTML = "";
        return true;
    }






 function formSubmit() {

    var cate_name =  document.getElementById('cate_name').value;
    var cate_type =  document.getElementById('cate_type').value;
    var cate_status =  document.getElementById('cate_status').value;
   
   
    cateNameValidation()
    cateTypeValidation()
    cate_name_error.disabled = true;
    cate_type_err.disabled = true;

    if((cate_name_error.disabled == true) && (cate_type_err.disabled == true)){

        $.ajax({

         url :'../category.inc/categoryData.inc.php',
         type : 'POST',
         data : {cate_name: cate_name, cate_type:cate_type, cate_status:cate_status},
         datatype : 'JSON',
            success : function(response){
                var response_Data = JSON.parse(response);
                console.log(response_Data)
              
                if(response_Data[0].status == "success"){
                   
                    var error_show =  document.getElementById('msg_alert')
                    error_show.style.display = 'block';
                    error_show.innerHTML= "Processing...."
                    
                    setInterval(function(){
                        window.location = '../category.inc/indexCategory.inc.php'

                    }, 2000)
                }else{
                    error_show.style.display = 'block';
                    error_show.innerHTML= "Date  not submitted.."
                    
                }

            }
       });
       return true;
   }else{
    return false;
    alert("response_error")
   }


} 