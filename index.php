<!doctype html>
<html lang="en">
<html>
    <title>พยากรณ์อากาศ-6311834</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js">
    </script>
       <style>

        body {
          background-color: #ebf1c8ce;
          font-family: Arial, Helvetica, sans-serif;
    
        }
    </style>  

</head>

<body>
    <div class="container mt-5 col-8">
        <div class="container mx-auto">
            <p class="text-center h1">อากาศตอนนี้เป็นอย่างไร.....</p>
            <div class="input-group mb-3 mt-5">
                <span class="input-group-text">ละติจูด</span>
                <input type="text" class="form-control" placeholder="ละติจูด" aria-label="Latitude" aria-describedby="Latitude" id="Latitude">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">ลองจิจูด</span>
                <input type="text" class="form-control" placeholder="ลองจิจูด" aria-label="Longitude" aria-describedby="Longitude" id="Longitude">
            </div>
            <div class="container-fluid mt-5 d-flex justify-content-center">
                <button type="button" class="btn btn-primary" id="btnSearch">ค้นหา</button>
            </div>
        </div>
        <div class="container mt-5 d-flex justify-content-center">
            <div class="card" id="cardWeather" style="width: 18rem;">
            <div id="dataWeather"><img src="data:image/jpeg;base64,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" class="card-img-top"><div class="card-body"><h5 class="card-title my-3 ">สถานที่ : Manang</h5><p class="card-text">อาทิตย์ขึ้นเวลา : 23:24:48</p><p class="card-text">อาทิตย์ตกเวลา : 11:07:21</p><p class="card-text">ความเร็วลม : 2.53</p><p class="card-text">อุณหภูมิ : 25.09</p><p class="card-text">ความชื้นในอากาศ : 82</p></div></div></div>

                </div>
            </div>
        
    
    

<script>


    function LoadForcast() {
        var x = $("#Latitude").val();
        var y = $("#Longitude").val();
        var url = "https://api.openweathermap.org/data/2.5/weather?lat=" + x + "&lon=" + y + "&appid=585ebd9c6b56cac04e88cb2269a1cc6f"
        $.getJSON(url)
            .done((data) => {
                var datetime = convertHMS(data.dt);
                var sunrise = convertHMS(data.sys["sunrise"]);
                var sunset = convertHMS(data.sys["sunset"]);
                var place = (data.name);
                var windSpeed = (data.wind["speed"]);
                var temp = ((data.main["temp"] - 273).toFixed(2));
                var humid = (data.main["humidity"]);
                $.each(data.weather[0], (key, value) => {
                    for (let i = 0; i < (data.weather[0]).length; i++) {
                        console.log(value);
                    }
                })
                var line = "<div id='dataWeather'>";
                    line += "<img src='https://media-exp1.licdn.com/dms/image/C560BAQHtvo47dVEisg/company-logo_200_200/0/1625026934671?e=2159024400&v=beta&t=vAmme9yUoENBxoBqeSX0VX9Ko02BtDdsvkqFpRWUMzo' class='card-img-top' ><div class='card-body'>"
                    line += "<h5 class='card-title my-3'>สถานที่ : "+ place +"</h5>";
                    line += "<p class='card-text'>อาทิตย์ขึ้นเวลา : "+ sunrise +"</p>";
                    line += "<p class='card-text'>อาทิตย์ตกเวลา : "+ sunset +"</p>";
                    line += "<p class='card-text'>ความเร็วลม : "+ windSpeed +"</p>";
                    line += "<p class='card-text'>อุณหภูมิ : "+ temp +"</p>";
                    line += "<p class='card-text'>ความชื้นในอากาศ : "+ humid  +"</p>";
                    line += "</div>"
                $("#cardWeather").append(line);
            }).fail((xhr, status, error) => {})
    }

    function convertHMS(value) {
        let time = value;
        var convert = new Date(time * 1000);
        var hours = convert.getHours();
        var minutes = "0" + convert.getMinutes();
        var seconds = "0" + convert.getSeconds();
        return (hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2));
    }
    $(() => {
        setDefault();
        $("#btnSearch").click(() => {
            LoadForcast();
            $("#dataWeather").hide();
        });
    });
</script>
</body>
</html>
