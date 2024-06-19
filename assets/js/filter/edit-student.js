$(document).ready(function () {
    if (id != "") {
        studentsApi.get(id).then(({ status, data, message }) => {
            if (status == 200) {
                displaystudent(data);
            }
            else {
                showAlert("warning", "white", message);
            
                setTimeout(() => {
                    window.location.href = "list-students.php"
    
                }, 700);
            }
        }).catch(function(message){
            console.error(message);
            setTimeout(() => {
                window.location.href = "list-students.php"
    
            }, 700);
        })
    }else{
        showAlert("warning", "white", "Id not found");
    
        setTimeout(() => {
            window.location.href = "list-students.php"

        }, 700);

    }
})
const editStudent = (() => {
    const studentForm = document.querySelector("#studentsForm");
    const formData = new FormData(studentForm);
    const studentObj = Object.fromEntries(formData);
    const studentData = {
        ...studentObj,
    };
    studentsApi.update(id,studentData).then(({ status, message, data }) => {
        $("#submit").removeAttr("disabled")
        $("#submit").html("Update")
        if (status == 200) {
            showAlert("success", "white", "Record updated successfully");
            
            setTimeout(() => {
                window.location.href = "list-students.php"

            }, 700);
        }
        else {
            showAlert("warning", "white", message);
        }
    }).catch(function (message) {
        console.log(message);

    })
})
const displaystudent = ((data) => {

    setElements(data);
    const { state, district, block, village } = data;
    setFormDemographics(state, district, block, village)
});