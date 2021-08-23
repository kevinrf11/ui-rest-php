function readId(elem){
    var idRaw = $(elem).attr("id");
    var id = idRaw.split("e-");
    //console.log(id);
    location.href = "/details/"+id[1];
}
function goTest(){
    location.href = "/list";
}
function goForm(){
    location.href = "/create";
}
async function sendForm(){
    var collectErrors = checkInputs();
    if (collectErrors.length == 0) {
        var collectedData = collectData();
        var status = await sendAjax(collectedData);
        console.log(status);
        if (status == true) {
            location.href = "/list";
        } else {
            sendMessage("An error has occurred","warning");
        }
    } else {
        console.log(collectErrors);
        sendMessage("All fields must be filled in","warning");
    }
}
function checkInputs(){
    var panel= $(".input-group");
    var inputs = panel.find("input");
    var selects = panel.find("select");
    var erros = [];
    for (let index = 0; index < inputs.length; index++) {
        if (inputs[index].value == null || inputs[index].value == " " || inputs[index].value == "" ) {
            erros.push(inputs[index].ariaLabel);
        }
    }
    for (let index = 0; index < selects.length; index++) {
        if (selects[index].value == null || selects[index].value == "Choose..." ) {
            erros.push(selects[index].name);
        }
    }   
    //console.log(erros);
    return erros;
}
function collectData (){
    var objectJSON = {};
    objectJSON.firstName = $("input[name='FirstName']").val();
    objectJSON.lastName = $("input[name='LastName']").val();
    objectJSON.birthDate = $("input[name='BirthDate']").val();
    objectJSON.gender  = $("select[name='Gender']").val();
    objectJSON.deptNo  = $("select[name='Department']").val();
    objectJSON.title  = $("select[name='Title']").val();;
    objectJSON.salary = $("input[name='Salary']").val();

    console.log(objectJSON);
    return objectJSON;  
}
function sendAjax(objectJSON){
    let statusReq = false;
    return new Promise((resolve,reject)=>{
        $.ajax({
            type: "POST",
            url: "/private/ajax/ajaxEmployee.php",
            data: objectJSON,
            success: function (res){
                console.log(res);
                statusReq = true;
                console.log(statusReq);
                return resolve(statusReq);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown){
                console.log("Status: " + textStatus); 
                console.log("Error: " + errorThrown);
                console.log(statusReq);
                return reject(statusReq);
            }
        });
    });
}

function sendMessage(message, type) {
    var alertPlaceholder = document.getElementById('liveAlertPlaceholder');
    var wrapper = document.createElement('div');
    wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
  
    alertPlaceholder.append(wrapper);
  }
$(document).ready(function(){
    $(".tr-emp").click(function (){
        readId($(this));
    });
    $("#startButton").click(function(){
        goTest();
    });
    $("#createEmp").click(function(){
        goForm();
    });
    $("#sendForm").click(function(){
        sendForm();
    });
});