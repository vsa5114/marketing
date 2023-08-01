
let button = document.querySelector('.update__btn');

let day = 13;
let mouth = 6;
let year = 2023;

let future = new Date(year, mouth, day, 9, 41, 38);

let now = new Date().getTime()

let distance = future - now

// if (future - now <= 0) {
//     console.log('congratulation')
//     button.click()
    
// }

window.currentUser = {
    name: 'test'
}

console.log(now)
console.log(future)

console.log(future - now)




