// Задания 1 и 2
document.write('<p><b>Задания 1 и 2</b></p>');

var students = ["Сергей", "Матвей", "Лейла", "Алина",  "Иоган"];
showMessageDependingOnArray(students);

students = ["Дмитрий", "Алексей", "Петр", "Виктор"];
showMessageDependingOnArray(students);

function showMessageDependingOnArray(arr) {
    document.write('<p>Массив ['+ arr +']</p>');
    if (arr.length >= 3) {
        document.write('Большой массив, в котором как минимум 3 элемента.</br>');
    } else {
        document.write('Маленький массив, в  котором менее 3-х элементов.</br>');
    }

    if(arr.length == 4 && arr[3] === 'Виктор') {
        document.write('Этот массив мне подходит.</br>');
    } else {
        document.write('Этот массив мне не подходит.</br>');
    }
}

// Задание 3
document.write('</br><p><b>Задание 3</b></p>');

var instructionForAction = function(trafficLightColor) {
    document.write('<p>Цвет сигнала светофора - '+ trafficLightColor +'</p>')
    if (trafficLightColor === "Красный") {
        document.write('Стоять!');
    } else if (trafficLightColor === "Желтый") {
        document.write('Приготовиться!');
    } else {
        document.write('Можно идти.');
    }
};

var trafficLightColor = "Красный";
instructionForAction(trafficLightColor);
trafficLightColor = "Желтый";
instructionForAction(trafficLightColor);
trafficLightColor = "Фиолетовый";
instructionForAction(trafficLightColor);

// Задание 4
document.write('</br></br><p><b>Задание 4</b></p>');
var a=1;
var b=8;

var result = (a + b < 4) ? 'Мало' : 'Много';
document.write(result);

// Задание 5
document.write('</br></br><p><b>Задание 5</b></p>');
var login = 'Вася';
showMessage(login);
login = 'Директор';
showMessage(login);
login = '';
showMessage(login);

function showMessage(login) {
var message = (login == 'Вася') ? 'Привет' :
              (login == 'Директор') ? 'Здравствуйте' :
              (login == '') ? 'Нет логина' : '';
document.write('<p> Логин: '+ login +'. Сообщение: '+ message +'.</p>');
}