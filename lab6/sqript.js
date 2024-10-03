 // Возведение в степень
 function pow(x, n) {
    if (n < 1) return NaN;
    let result = 1;
    for (let i = 0; i < n; i++) {
        result *= x;
    }
    return result;
}

function showPow() {
    const x = parseInt(document.getElementById('base').value);
    const n = parseInt(document.getElementById('exponent').value);
    const result = pow(x, n);
    document.getElementById('powResult').innerText = `Результат: ${result}`;
}

// Нахождение НОД
function gcd(a, b) {
    while (b) {
        let t = b;
        b = a % b;
        a = t;
    }
    return a;
}

function showGCD() {
    const a = parseInt(document.getElementById('num1').value);
    const b = parseInt(document.getElementById('num2').value);
    const result = gcd(a, b);
    document.getElementById('gcdResult').innerText = `Результат: ${result}`;
}

// Наименьшая цифра числа
function minDigit(x) {
    const digits = x.toString().split('').map(Number);
    return Math.min(...digits);
}

function showMinDigit() {
    const x = parseInt(document.getElementById('number').value);
    const result = minDigit(x);
    document.getElementById('minDigitResult').innerText = `Наименьшая цифра: ${result}`;
}

// Pluralization
function pluralizeRecords(n) {
    let recordText;
    if (n % 10 == 1 && n % 100 != 11) {
        recordText = "запись";
    } else if ([2, 3, 4].includes(n % 10) && ![12, 13, 14].includes(n % 100)) {
        recordText = "записи";
    } else {
        recordText = "записей";
    }
    return `В результате выполнения запроса было найдено ${n} ${recordText}`;
}

function showPluralize() {
    const n = parseInt(document.getElementById('recordsCount').value);
    const result = pluralizeRecords(n);
    document.getElementById('pluralizeResult').innerText = result;
}

// Числа Фибоначчи
function fibb(n) {
    if (n <= 1) return n;
    let a = 0, b = 1;
    for (let i = 2; i <= n; i++) {
        let c = a + b;
        a = b;
        b = c;
    }
    return b;
}

function showFibonacci() {
    const n = parseInt(document.getElementById('fibNumber').value);
    const result = fibb(n);
    document.getElementById('fibonacciResult').innerText = `Число Фибоначчи: ${result}`;
}