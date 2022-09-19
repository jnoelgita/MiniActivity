function ValidatePic() {
    var fileInput = document.getElementById("profPic");
    var filePath = fileInput.value;

    if (filePath == '') {
        alert("Please upload an image");
    } else {
        var Extension = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();

        if (Extension == "jpg" || Extension == "jpeg" || Extension == "png" || Extension == "png") {

            if (fileInput.files && fileInput.files[0]) {
                var reader = newFileReader();
                reader.onload = function(e) {
                    $(fileInput).attr(e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0])
            }
        }
        else {
            alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
        }
    }
}

function ValidateDoc() {
    var fileInput = document.getElementById("pdfFile");
    var filePath = fileInput.value;

    if (filePath == '') {
        alert("Please upload a document");
    } else {
        var Extension = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();

        if (Extension == "pdf") {

            if (fileInput.files && fileInput.files[0]) {
                var reader = newFileReader();

                reader.onload = function(e) {
                    $(fileInput.e).attr(e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0])
            }
        }
        else {
            alert("Only PDF document type is allowed.");
        }
    }
}

function displayUsers(){
  let table = document.querySelector('#accountTable tbody');
  let result = '';
  studs.forEach(user => {
    result +=`<tr>
        <td>${user.id}</td>
        <td>${user.studentID}</td>
        <td>${user.firstName}</td>
        <td>${user.middleName}</td>
        <td>${user.lastName}</td>
        <td>${user.profile_pic}</td>
        <td>${user.pdf_file}</td>
        <td>
            <button class=btn1 btn-md'>View</button>
            <a href='#deleteQuery.php' class='btn btn-md' >Delete</a>
        </td>
    </tr>`;
  });
  table.innerHTML = result;
}

$(document).ready(function(){
  displayUsers();
  $('#accountTable').dataTable({
    select: {
      style: 'multi',
      selector: 'td:first-child'
    }
  });
});
