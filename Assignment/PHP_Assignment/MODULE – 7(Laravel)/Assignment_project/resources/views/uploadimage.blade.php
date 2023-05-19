<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div  class="app" id="app"></div>

    <script>
        document.getElementById("app").innerHTML = `
        <h1>File Upload & FormData Example</h1>
        <div>
        <input type="file" id="fileInput" />
        </div>
        `;

        const fileInput = document.querySelector("#fileInput");

        const uploadFile = file => {
            // console.log("Uploading file...");
            // const API_ENDPOINT = "http://localhost:8000/api/testTrait";
            // const request = new XMLHttpRequest();
            // const formData = new FormData();

            // request.open("POST", API_ENDPOINT, true);
            // request.onreadystatechange = () => {
            //     if (request.readyState === 4 && request.status === 200) {
            //         console.log(request.responseText);
            //         }
            //     };
            // formData.append("image", file);
            // request.send(formData);

            const formData = new FormData();
            formData.append("image", file);
            fetch('/http://localhost:8000/api/testTrait',{
            method: 'POST',
            headers: {'Content-Type': 'multipart/form-data'},
            body: FormData
            }).then(
                response => response.json()
            ).then(
                success =>console.log(success)
            ).catch(
                error ->console.log(error)
            )  
        };

        fileInput.addEventListener("change", event => {
        const files = event.target.files;
        uploadFile(files[0]);
        });

    </script>
</body>
</html>