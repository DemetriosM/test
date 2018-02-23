var taskAge = document.getElementById('age');
var taskLogin = document.getElementById('login');
var taskQuestion = document.getElementById('question');

taskAge.addEventListener('click', checkAge);
taskLogin.addEventListener('click', askLogin);
taskQuestion.addEventListener('click', showQuestion);

var filterInt = function (value) {
    if (/^\s{0,}([0-9]+|Infinity)\s{0,}$/.test(value))
      return Number(value);
    return NaN;
};

// Задание 1


function checkAge() {
    var age = filterInt(prompt('Сколько Вам лет?'));
    if (age > 20) {
        alert('Вы уже взрослый человек!');
    } else if (!isNaN(age)) {
        alert('Вы еще молоды, у Вас  все впереди!');
    } else {
        alert('Попытайтесь еще раз )');
    }
}

// Задание 2

function askLogin() {
    var login = prompt('Введите логин');
    if (login === 'Админ') {
        askPassword();
    } else if (login === null) {
        alert('Вход отменён');
    } else {
        alert('Я вас не знаю');
    }
}

function askPassword() {
    var password = prompt('Введите пароль');
    if (password === 'Чёрный Властелин') {
        alert('Добро пожаловать!');
    } else if (password === null) {
        alert('Вход отменён');
    } else {
        alert('Пароль неверен');
    }
}

// Задание 3

function showQuestion() {
    var answer = prompt('Каково "официальное" название JavaScript?');
    (answer === 'ECMAScript') ? alert('Верно!') : alert('Не знаете? "ECMAScript"!');
}