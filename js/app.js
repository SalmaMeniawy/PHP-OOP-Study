const num = 1 //number primative
//when define variable is const , var ,let or let.const
const numObj = new Number('123') //Number Objects
const num1 = numObj.valueOf() //get number primative
const numString = numObj.toString() //to get string
// console.log(numObj === 123)
// console.log(numObj === numString)
// console.log(17 ==="17")
// console.log(17 === Number.parseInt("17"))
////////////////////////////////////////////////////
const strObj = new String("salma") //string object
const myString = strObj.valueOf() //string primative
strObj.match(/a/)
// console.log(strObj.match(/xx/))
const str1 = "Quick Access" //string primative
const str = "salma"
// console.log(strObj ==str)
const newstr = "Quick Access".substr(1,3)
// alert(newstr) 
////////////////////////////////////////////////////////////
//Regular Exprissions
const pattern = /[A-Z]+/
'ABB'.match(pattern)
// console.log('A'.match(pattern))
// console.log("acd".match(pattern))
pattern.test(str) //return false
// console.log(pattern.test(str))
////////////////////////////////////////////////////////////
//special types :
/**
 * 1- NAN -->  Not A Number
 * 2- Null --> Null
 * 3- ubdefiened -- > Undefiened Variable
 * 4- Funstion -->Functions
 */
const obj = {}
// console.log(typeof(obj))

//////////////////////////////////////////////////////////////
//JSON
const strObject = '{"a":1 ,"b":2 }'
const object2 = JSON.parse(strObject)
object2.a = 10
// console.log(object2)
const str3 = JSON.stringify(object2) //convert string to javascript object
// console.log(str3)
// console.log(typeof(str3)) //convert the object to stringObject for type string
const st = JSON.stringify(object2,null,1000)
// console.log(st)
// ////////////////////////////////////
//Array Object
const arr = new Array() //array object
const arr1 = ['apple','dog','ball','cat'] //array litery
// console.log(arr1.indexOf("dog"))
/////////////////////////////////////////////////////////////
//object data
const myobj = {
    "name":"salma",
    "email": "salmamostafameniawy@gmail.com",
    "price":12000
}
// console.log(Object.entries(myobj))
obj2 = Object.assign({},myobj)
obj4 = Object.assign(myobj)
// console.log(obj2)
// console.log(obj4)
//////////////////////////////////////////////////////////
//Boolean Primative and Object
const bool1 = true
const bool2 = false
const bool3 = new Boolean(true)
// console.log(bool3 === bool2) //false 
/////////////////////////////////////////////////////////
//Date Object
const timestamp = Date.now()
// console.log(timestamp)
const mydate = Date()
// console.log(mydate)
///////////////////////////////////////////////////////////
//Math Object
const x= Math.floor(2.55)
// console.log(x)
const z = Math.round(Math.random()*100)
const l = Math.random()*100
// console.log(z)
// console.log(l)
// console.log(Math.round(l))
// console.log(Math.floor(l))
//////////////////////////////////////////////////////////
// Brawser Object
// window.location.href= 'http://rapidprototypingwithjs.com'
// alert("test")
/////////////////////////////////////////////////////////////
//DOM Objects
const transactionContainer = document.createElement('div')
transactionContainer.setAttribute('id','main')
const content = document.createTextNode('transactions')
transactionContainer.appendChild(content)
document.body.appendChild(transactionContainer)
const main = document.getElementById('main')
// console.log(main )//get all element
// console.log(main.offsetWidth)
// console.log(main.offsetHeight)
// ///////////////////////////////////////////////////////////
// Global functions
const code = encodeURI('http:// encodeURwww.webapplog.com/js is awesome')
// console.log(code)
const decode = decodeURI(code)
// console.log(decode)
const code1 = encodeURIComponent('http:// encodeURwww.webapplog.com/js is awesome')
// console.log(code1)
const decode1= decodeURIComponent(code1)
// console.log(decode1)
const ree = 100
// console.log(isNaN(ree)) //return false becouse it is a number
///ERRORS 
//you can create your own errors
// console.error("Book not found"); // it is work
// Error("Books Mafesh") // it did not work 

/////////////////////////////////////////////////////////////////
//functions
function sum(a , b){
    const sum  = a + b
    return sum
}
// console.log(sum(100 , 200))
const f = function(str1){
    return function (str2){
        return str1 + ' ' + str2
    }
}

// const a = f('Good Morning')
// console.log(a("salma"))
const sum1 = (a , b )=>{
    return a + b
}
console.log(sum1(10,20))