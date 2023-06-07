<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" id="imageUploadForm">
        <input type="text" name="username" id="username">
        <input type="file" name="profile_pic" id="profile_pic">
        <input type="button" value="Upload" name="upload" id="upload">
        <input type="submit" name="save" id="save">
    </form>
    <img src="" height="150px" id="preview" alt="">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    
    <script>

        $('#upload').on('click', function() {
            var file_data = $('#profile_pic').prop('files')[0];
            var form_data = new FormData();
            form_data.append('profile_pic', file_data);
            // alert(form_data);
            console.log(form_data);
            $.ajax({
                url: 'http://localhost/php_lec_tops/php/lec_27/22_API/uploadimg', // <-- point to server-side PHP script 
                dataType: 'text', // <-- what to expect back from the PHP script, if anything
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(php_script_response) {
                    console.log(php_script_response); // <-- display response from the PHP script, if any
                    let ResposeJson = JSON.parse(php_script_response);
                    
                    console.log(ResposeJson.Data.filename);
                    $('#preview').attr('src', "http://localhost/php_lec_tops/php/lec_27/22_API/uploads/"+ResposeJson.Data.filename);
                }
            });
        });
        // $(document).ready(function (e) {
        //     $('#imageUploadForm').on('submit', (function (e) {
        //         e.preventDefault();
        //         var formData = new FormData(this);
        //         console.log("profile_pic",$('#profile_pic'));
        //         formData.append('file', $('#profile_pic')[0].files[0]);
        //         console.log("formData",formData);
        //         var headerForPost = {
        //             method: "POST", // *GET, POST, PUT, DELETE, etc.
        //             mode: "cors", // no-cors, *cors, same-origin
        //             cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
        //             credentials: "same-origin", // include, *same-origin, omit
        //             headers: {
        //                 "Content-Type": "application/json",
        //             },
        //             body: formData, // body data type must match "Content-Type" header
        //         }
        //         fetch("http://localhost/php_lec_tops/php/lec_27/22_API/uploadimg", headerForPost)
        //     }))
        // })
    </script>

</body>
</html>