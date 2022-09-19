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

