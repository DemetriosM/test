// Задание 1

document.write('<p><b>Задание 1</b></p>');
var countries = ['Польша', 'Аргентина', 'Австрия', 'Китай', 'Канада'];
var population = [1001, 1002, 1003, 1004, 1005];

function showCountiesPopulation(countries, population) {
    for (var i = 0; i < countries.length; i++) {
        document.write('<p>'+ countries[i] +' - '+ population[i] +' чел.</p>');   
    }
}

showCountiesPopulation(countries, population);

// Задание 2

document.write('<br/><p><b>Задание 2</b></p>');

var fruits = ['апельсин','банан','груша'];
document.write('Массив ['+ fruits +']');
document.write('<p>Колличество фруктов в масиве: '+ fruits.length +'</p>');

fruits.push('яблоко');
fruits.push('ананас');
fruits.unshift('грейпфрут');
document.write('<p>Колличество фруктов в масиве после добавления 3 фруктов: '+ fruits.length +'</p>');

fruits.pop();
fruits.shift();
document.write('<p>Колличество фруктов в масиве после удаления первого и последнего элементов: '+ fruits.length +'</p>');

// Задание 3

document.write('<br/><p><b>Задание 3</b></p>');

function replaceWithPineapple(arr) {
    arr.splice(arr.length-2, 1, ["ананас"]);
}

var fruits2 = ["яблоко", "апельсин", "груша", "гранат"];
document.write(fruits2 + '<br/>');
replaceWithPineapple(fruits2);
document.write(fruits2 + '<br/>');

fruits2 = ["банан", "мандарин", "манго"];
document.write('<br/>'+ fruits2 +'<br/>');
replaceWithPineapple(fruits2);
document.write(fruits2);
