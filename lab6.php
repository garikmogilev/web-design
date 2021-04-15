<!DOCTYPE HTML>
<html>
<head>
    <title>Lab 6</title>
    <meta charset="utf-8">
    <style>
        #fieldOutput{
            width: 500px;
            height: 20px;
            background: #eee;
            border-radius: 20px;
            border: solid gray 2px;
            margin-top: 10px;
            padding: 8px;
        }
    </style>
    <script>
        function translateObjectToJson()
        {
            let student = {
                name: 'Alice',
                age: 30,
                sex: 'women'
            };
            let json = JSON.stringify(student);
            document.getElementById('fieldOutput').innerText = typeof json + json;
        }

        function translateJsonToObject()
        {
            let student = {
                name: 'John',
                age: 30,
                sex: 'men'
            };
            let json = JSON.stringify(student);
            let student1 = JSON.parse(json);

            document.getElementById('fieldOutput').innerText = typeof student1 + ": "+ student1.name+" "+ student.age;

        }

        function translateArrayToJson()
        {
            let transport = ["Aeroplane", "Car", "Train"];
            let json = JSON.stringify(transport);
            document.getElementById('fieldOutput').innerText = typeof json + ": " + json;
        }

        function translateJsonToArrayAndFindMin()
        {
            let fruits = ["Hp", "Dell", "Asus"];
            let json = JSON.stringify(fruits);
            let fruits2 = JSON.parse(json);
            let minWord = 0;

            for(let j=1; j<fruits.length; j++)
            {
                if(fruits[minWord].length>=fruits[j].length)
                    minWord=j;
            }
            document.getElementById('fieldOutput').innerText = typeof fruits2 + ": " +  fruits2[minWord];
        }
    </script>
</head>

<body>
<button onclick="translateObjectToJson()">Translate Object to JSON</button>
<button onclick="translateArrayToJson()">Translate Array to JSON</button>
<button onclick="translateJsonToObject()">Translate JSON to Object</button>
<button onclick="translateJsonToArrayAndFindMin()">Translate JSON to Array and find min value</button>
<br>
<span>Field for output</span>
<div id="fieldOutput"></div>
</body>

</html>